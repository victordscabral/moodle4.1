<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block Course_Contacts main file.
 *
 * @package    block_course_contacts
 * @author     Mark Ward
 * @author     2020 Richard Oelmann
 * @copyright  Mark Ward
 * @copyright  2020 R. Oelmann
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Block Course Contacts class definition.
 *
 * This block can be added to a course page or a activity page to display of list of
 * the best/worst students/groups in a particular activity.
 *
 * @package    block_course_contacts
 * @copyright  Mark Ward
 * @copyright  2020 Richard Oelmann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_course_contacts extends block_base {

    /**
     * Core function used to initialize the block.
     */
    public function init() {
        $this->title = get_string('course_contacts', 'block_course_contacts');
    }

    /**
     * Core function, specifies where the block can be used.
     * @return array
     */
    public function applicable_formats() {
        return array('all' => true, 'mod' => false, 'tag' => false, 'my' => false);
    }

    /**
     * Gets all the users assigned this role in this context or higher
     *
     * @param int $roleid (can also be an array of ints!)
     * @param context $context
     * @param mixed $roleid ID number of role being displayed
     * @param bool $parent if true, get list of users assigned in higher context too
     * @param string $fields fields from user (u.) , role assignment (ra) or role (r.)
     * @param string $sort sort from user (u.) , role assignment (ra) or role (r.)
     * @param string $group defaults to ''
     * @param mixed $limitfrom defaults to ''
     * @param mixed $limitnum defaults to ''
     * @param string $extrawheretest defaults to ''
     * @param string|array $whereparams defaults to ''
     * @return array
     */
    private function get_role_users($roleid, $context, $parent = false, $fields = '',
            $sort = 'u.lastname, u.firstname', $group = '',
            $limitfrom = '', $limitnum = '', $extrawheretest = '', $whereparams = array()) {
        global $DB;

        if (empty($fields)) {
            $fields = 'u.id, u.confirmed, u.username, u.firstname, u.lastname, '.
                      'u.maildisplay, u.mailformat, u.maildigest, u.email, u.emailstop, u.city, '.
                      'u.country, u.picture, u.idnumber, u.department, u.institution, '.
                      'u.lang, u.timezone, u.lastaccess, u.mnethostid, r.name AS rolename, r.sortorder';
        }

        $parentcontexts = '';
        if ($parent) {
            $parentcontexts = substr($context->path, 1); // Kill leading slash.
            $parentcontexts = str_replace('/', ',', $parentcontexts);
            if ($parentcontexts !== '') {
                $parentcontexts = ' OR ra.contextid IN ('.$parentcontexts.' )';
            }
        }

        if ($roleid) {
            list($rids, $params) = $DB->get_in_or_equal($roleid, SQL_PARAMS_QM);
            $roleselect = "AND ra.roleid $rids";
        } else {
            $params = array();
            $roleselect = '';
        }

        if ($group) {
            $groupjoin   = "JOIN {groups_members} gm ON gm.userid = u.id";
            $groupselect = " AND gm.groupid = ? ";
            $params[] = $group;
        } else {
            $groupjoin   = '';
            $groupselect = '';
        }

        array_unshift($params, $context->id);

        if ($extrawheretest) {
            $extrawheretest = ' AND ' . $extrawheretest;
            $params = array_merge($params, $whereparams);
        }

        $sql = "SELECT $fields, ra.roleid
                  FROM {role_assignments} ra
                  JOIN {user} u ON u.id = ra.userid
                  JOIN {role} r ON ra.roleid = r.id
                  JOIN {context} c ON c.id = ra.contextid AND c.contextlevel = 50
                  JOIN {enrol} e ON e.courseid = c.instanceid
                  JOIN {user_enrolments} ue ON ue.userid = u.id
            $groupjoin
                 WHERE (ra.contextid = ? $parentcontexts)
                       $roleselect
                       $groupselect
                       $extrawheretest
                AND u.deleted = 0 AND u.suspended = 0 AND ue.status = 0
              GROUP BY $fields, ra.roleid
              ORDER BY $sort"; // Join now so that we can just use fullname() later.

        return $DB->get_records_sql($sql, $params, $limitfrom, $limitnum);
    }

    /**
     * Content function - creates the content to be displayed.
     * @return $this->content
     */
    public function get_content() {
        global $OUTPUT, $USER, $COURSE;

        // If the user hasnt configured the plugin, set these as defaults.
        if (empty($this->config)) {
            $this->config = new stdclass();
            $this->config->role_3 = 1;
            $this->config->email = 1;
            $this->config->message = 1;
            $this->config->phone = 0;
            $this->config->description = 0;
            $this->config->hide_block_guest = 1;
            $this->config->email_guest = 0;
            $this->config->message_guest = 0;
            $this->config->phone_guest = 0;
            $this->config->description_guest = 0;
        }

        $courseid = $this->page->course->id;
        $context = $this->page->context;
        if($context->contextlevel != 50) {
            return;
        }
        $isguest = is_guest($context);

        if ($isguest && $this->config->hide_block_guest) {
            return;
        }

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;

        $content = '';

        // Find the roles available on this course.
        $roles = array_reverse(get_default_enrol_roles($context, null), true);
        $content .= html_writer::start_tag('div', array('class' => 'box'));

        // How are we going to sort the contacts?
        $orderby = 'u.lastname'; // Default.
        if (!empty($this->config->sortby)) {
            switch($this->config->sortby) {
                case 0:
                    $orderby = 'u.lastname, u.firstname';
                    break;
                case 1:
                    $orderby = 'u.lastaccess DESC';
                    break;
                case 2:
                    $orderby = 'MIN(ra.timemodified)';
                    break;
                default:
                    $orderby = 'u.lastname, u.firstname';
                    break;
            }
        }

        // Step through each role and check that the config is set to display.
        $inherit = 0;
        if (isset($this->config->inherit)) {
            $inherit = $this->config->inherit;
        }
        $userfields = 'u.id,u.lastaccess,u.firstname,u.lastname,u.email,u.phone1,u.picture,u.imagealt,
        u.firstnamephonetic,u.lastnamephonetic,u.middlename,u.alternatename,u.description';

        $currentgroup = groups_get_course_group($COURSE, true, false);
        $content .= groups_print_course_menu($COURSE, new moodle_url('/course/view.php?id='.$courseid), true);

        $clist = array();
        foreach ($roles as $key => $role) {
            $att = 'role_'.$key;
            if (!empty($this->config->$att)) {
                if ($this->config->$att == 1) {

                    $contacts = $this->get_role_users($key, $context, $inherit, $userfields, $orderby, $currentgroup, '', 30);                    // Because the role search finds the custom name and the proper name in brackets.

                    if (!empty($contacts)) {
                        if ($shortened = strstr($role, '(', true)) {
                            $content .= html_writer::tag('h5', trim($shortened));
                        } else {
                            $content .= html_writer::tag('h5', $role);
                        }
                    }
                    // Now display each contact.
                    foreach ($contacts as $contact) {
                        if (!in_array($contact->id, $clist)) {
                            $clist[] = $contact->id;
                            $content .= html_writer::start_tag('div', array('class' => 'ccard'));
                            $content .= $OUTPUT->user_picture($contact, array('size' => 50));
                            $content .= html_writer::start_tag('div', array('class' => 'info'));
                            if ($contact->lastaccess > (time() - 300)) {
                                $status = 'online';
                            } else {
                                $status = 'offline';
                            }
                            $content .= html_writer::start_tag('div', array('class' => 'name '.$status));

                            // Check block configuration for use_altname to determine the name to display.
                            if (isset($this->config->use_altname)
                                && $this->config->use_altname == 1
                                && $contact->alternatename != '') {
                                $content .= $contact->alternatename;
                            } else {
                                // Use first and last names and truncate as necessary.
                                // $content .= $this->shorten_name($contact->firstname)." ".$this->shorten_name($contact->lastname);
                                $content .= $contact->firstname." ".$contact->lastname;
                            }

                            $content .= html_writer::end_tag('div');
                            $content .= html_writer::empty_tag('img', array(
                                'src' => $OUTPUT->image_url($status, 'block_course_contacts'),
                                'title' => get_string($status, 'block_course_contacts'),
                                'alt' => get_string($status, 'block_course_contacts'),
                                'class' => 'status'));
                            $content .= html_writer::empty_tag('hr');
                            $content .= html_writer::start_tag('div', array('class' => 'comms'));

                            // Unless they are us.
                            if ($USER->id != $contact->id) {
                                // Should we display email?
                                if ((!$isguest && $this->config->email == 1)
                                    || ($isguest && $this->config->email_guest == 1)) {
                                    $url = 'mailto:'.strtolower($contact->email);
                                    $content .= html_writer::link($url, html_writer::empty_tag('img', array(
                                        'src' => $OUTPUT->image_url('mail', 'block_course_contacts'),
                                        'title' => get_string('email', 'block_course_contacts').' '.$contact->firstname,
                                        'alt' => get_string('email', 'block_course_contacts').' '.$contact->firstname)),
                                        array('target' => '_blank'));
                                }
                                // What about messages?
                                if ((!$isguest && $this->config->message == 1)
                                    || ($isguest && $this->config->message_guest == 1)) {
                                    $url = new moodle_url('/message/index.php', array('id' => $contact->id));
                                    $content .= html_writer::link($url, html_writer::empty_tag('img', array(
                                        'src' => $OUTPUT->image_url('message', 'block_course_contacts'),
                                        'title' => get_string('message', 'block_course_contacts').' '.$contact->firstname,
                                        'alt' => get_string('message', 'block_course_contacts').' '.$contact->firstname)),
                                        array('target' => '_blank'));
                                }
                                // And phone numbers?
                                if ($contact->phone1 != ""
                                    && ((!$isguest && $this->config->phone == 1)
                                    || ($isguest && $this->config->phone_guest == 1))) {
                                    $url = 'tel:'.$contact->phone1;
                                    $content .= html_writer::link($url, html_writer::empty_tag('img', array(
                                        'src' => $OUTPUT->image_url('phone', 'block_course_contacts'),
                                        'title' => get_string('phone', 'block_course_contacts').' '.$contact->phone1,
                                        'alt' => get_string('phone', 'block_course_contacts').' '.$contact->phone1)),
                                        array());
                                }
                            }

                            $content .= html_writer::end_tag('div');
                            $content .= html_writer::end_tag('div');
                            if ($contact->description != ""
                                && ((!$isguest && $this->config->description == 1)
                                || ($isguest && $this->config->description_guest == 1))) {
                                $content .= html_writer::start_tag('div', array('class' => 'description'));
                                $usercontext = context_user::instance($contact->id);
                                $content .= substr(format_text(file_rewrite_pluginfile_urls($contact->description, 'pluginfile.php', $usercontext->id, 'user' ,'profile', null ), FORMAT_HTML), 0, 199);
                                $content .= html_writer::end_tag('div');
                            }
                            $content .= html_writer::end_tag('div');
                        }
                    }
                }
            }
        }
        $content .= html_writer::end_tag('div');

        $this->content->text = $content;
        return $this->content;
    }

    /**
     * Allow the block to have a configuration page
     *
     * @return boolean
     */
    public function instance_allow_config() {
        return true;
    }

}
