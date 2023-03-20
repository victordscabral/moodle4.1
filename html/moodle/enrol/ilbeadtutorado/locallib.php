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
 * Self enrol plugin implementation.
 *
 * @package    enrol_ilbeadtutorado
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

class enrol_ilbeadtutorado_enrol_form extends moodleform {
    protected $instance;
    protected $toomany = false;

    /**
     * Overriding this function to get unique form id for multiple ilbeadtutorado enrolments.
     *
     * @return string form identifier
     */
    protected function get_form_identifier() {
        $formid = $this->_customdata->id.'_'.get_class($this);
        return $formid;
    }

    public function definition() {
        global $DB;
        global $USER;

        $mform = $this->_form;
        $instance = $this->_customdata;
        $this->instance = $instance;
        $plugin = enrol_get_plugin('ilbeadtutorado');

        $heading = $plugin->get_instance_name($instance);
        $mform->addElement('header', 'ilbeadtutoradoheader', $heading);

        if (trim($instance->customtext2) !== '') {
            $instance->customtext2 = unserialize($instance->customtext2);
            $message = format_text($instance->customtext2['text'], $instance->customtext2['format']);
            $mform->addElement('static', 'notice', '', $message);
        }

        if ($instance->customint3 > 0) {
            // Max enrol limit specified.
            $count = $DB->count_records('user_enrolments', array('enrolid'=>$instance->id));
            if ($count >= $instance->customint3) {
                // Bad luck, no more ilbeadtutorado enrolments here.
                $this->toomany = true;
                $mform->addElement('static', 'notice', '', get_string('maxenrolledreached', 'enrol_ilbeadtutorado'));
                return;
            }
        }

        if ($instance->password) {
            // Change the id of ilbeadtutorado enrolment key input as there can be multiple ilbeadtutorado enrolment methods.
            $mform->addElement('passwordunmask', 'enrolpassword', get_string('password', 'enrol_ilbeadtutorado'),
                    array('id' => 'enrolpassword_'.$instance->id));
        } else {
            $mform->addElement('static', 'nokey', '', get_string('nopassword', 'enrol_ilbeadtutorado'));
        }

        $this->add_action_buttons(false, get_string('enrolme', 'enrol_ilbeadtutorado'));

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $instance->courseid);

        $mform->addElement('hidden', 'instance');
        $mform->setType('instance', PARAM_INT);
        $mform->setDefault('instance', $instance->id);
    }

    public function validation($data, $files) {
        global $DB, $CFG;

        $errors = parent::validation($data, $files);
        $instance = $this->instance;

        if ($this->toomany) {
            $errors['notice'] = get_string('error');
            return $errors;
        }

        if ($instance->password) {
            if ($data['enrolpassword'] !== $instance->password) {
                if ($instance->customint1) {
                    $groups = $DB->get_records('groups', array('courseid'=>$instance->courseid), 'id ASC', 'id, enrolmentkey');
                    $found = false;
                    foreach ($groups as $group) {
                        if (empty($group->enrolmentkey)) {
                            continue;
                        }
                        if ($group->enrolmentkey === $data['enrolpassword']) {
                            $found = true;
                            break;
                        }
                    }
                    if (!$found) {
                        // We can not hint because there are probably multiple passwords.
                        $errors['enrolpassword'] = get_string('passwordinvalid', 'enrol_ilbeadtutorado');
                    }

                } else {
                    $plugin = enrol_get_plugin('ilbeadtutorado');
                    if ($plugin->get_config('showhint')) {
                        $hint = textlib::substr($instance->password, 0, 1);
                        $errors['enrolpassword'] = get_string('passwordinvalidhint', 'enrol_ilbeadtutorado', $hint);
                    } else {
                        $errors['enrolpassword'] = get_string('passwordinvalid', 'enrol_ilbeadtutorado');
                    }
                }
            }
        }

        return $errors;
    }
}
