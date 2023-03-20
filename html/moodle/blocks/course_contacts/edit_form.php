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
 * Block Course_Contacts edit_form file.
 *
 * @package    block_course_contacts
 * @author     Mark Ward
 *             2020 Richard Oelmann
 * @copyright  Mark Ward
 *             2020 R. Oelmann
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
/**
 * Block settings form class definition.
 *
 * This block can be added to a course page or a activity page to display of list of
 * the best/worst students/groups in a particular activity.
 *
 * @package    block_course_contacts
 * @copyright  Mark Ward
 * @copyright  2020 Richard Oelmann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_course_contacts_edit_form extends block_edit_form {

    /**
     * Function used to define the settings form.
     * @param array $mform
     */
    protected function specific_definition($mform) {

        // This section configures which contact methods should be displayed.
        $mform->addElement('header', 'configheader', get_string('method', 'block_course_contacts'));

        $mform->addElement('selectyesno', 'config_email', get_string('email', 'block_course_contacts'));
        $mform->setDefault('config_email', 1);
        $mform->setType('config_email', PARAM_INTEGER);

        $mform->addElement('selectyesno', 'config_message', get_string('message', 'block_course_contacts'));
        $mform->setDefault('config_message', 1);
        $mform->setType('config_message', PARAM_INTEGER);

        $mform->addElement('selectyesno', 'config_phone', get_string('phone', 'block_course_contacts'));
        $mform->setDefault('config_phone', 0);
        $mform->setType('config_phone', PARAM_INTEGER);

        $mform->addElement('selectyesno', 'config_description', get_string('description', 'block_course_contacts'));
        $mform->setDefault('config_description', 0);
        $mform->setType('config_description', PARAM_INTEGER);

        // This section configures which contact methods should be displayed for guest users.
        $mform->addElement('header', 'configheader', get_string('methodguest', 'block_course_contacts'));

        $mform->addElement('selectyesno', 'config_hide_block_guest', get_string('hideblockforguest', 'block_course_contacts'));
        $mform->setDefault('config_hide_block_guest', 1);
        $mform->setType('config_hide_block_guest', PARAM_INT);

        $mform->addElement('selectyesno', 'config_email_guest', get_string('email', 'block_course_contacts'));
        $mform->setDefault('config_email_guest', 0);
        $mform->setType('config_email_guest', PARAM_INT);

        $mform->addElement('selectyesno', 'config_message_guest', get_string('message', 'block_course_contacts'));
        $mform->setDefault('config_message_guest', 0);
        $mform->setType('config_message_guest', PARAM_INT);

        $mform->addElement('selectyesno', 'config_phone_guest', get_string('phone', 'block_course_contacts'));
        $mform->setDefault('config_phone_guest', 0);
        $mform->setType('config_phone_guest', PARAM_INT);

        $mform->addElement('selectyesno', 'config_description_guest', get_string('description', 'block_course_contacts'));
        $mform->setDefault('config_description_guest', 0);
        $mform->setType('config_description_guest', PARAM_INT);

        // This section gives options of how to display contacts.
        $mform->addElement('header', 'configheader', get_string('display', 'block_course_contacts'));

        $sortby = array(0 => get_string('alphabetical', 'block_course_contacts'),
                        1 => get_string('recentlyactive', 'block_course_contacts'),
                        2 => get_string('dateenrolled', 'block_course_contacts'));
        $mform->addElement('select', 'config_sortby', get_string('sortby', 'block_course_contacts'), $sortby);
        $mform->setDefault('config_sortby', 0);

        $mform->addElement('selectyesno', 'config_inherit', get_string('inherit', 'block_course_contacts'));
        $mform->setDefault('config_inherit', 0);
        $mform->setType('config_inherit', PARAM_INTEGER);
        $mform->setAdvanced('config_inherit');

        $mform->addElement('selectyesno', 'config_use_altname', get_string('use_altname', 'block_course_contacts'));
        $mform->setDefault('config_use_altname', 0);
        $mform->setType('config_use_altname', PARAM_INTEGER);
        $mform->addHelpButton('config_use_altname', 'how_altname_works', 'block_course_contacts');
        $mform->setAdvanced('config_use_altname');

        // This section builds a list of the roles available within this context for selection.
        $mform->addElement('header', 'configheader', get_string('roles', 'block_course_contacts'));

        $roles = array_reverse(get_default_enrol_roles($this->block->context, null), true);
        foreach ($roles as $key => $role) {
            $mform->addElement('selectyesno', 'config_role_'.$key, $role);
            $mform->setDefault('config_role_'.$key, 0);
            if ($key = 3) {
                $mform->setDefault('config_role_'.$key, 1);
            }
            $mform->setType('config_role_'.$key, PARAM_INTEGER);
        }
    }
}
