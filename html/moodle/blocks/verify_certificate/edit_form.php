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
 * Form for editing RSS client block instances.
 *
 * @package   moodlecore
 * @copyright 2009 Tim Hunt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Form for editing Verify Certificate block instances.
 *
 * @copyright 2014 based on Tim Hunt code as showed above
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_verify_certificate_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        global $CFG, $DB, $USER;

        // Fields for editing block contents.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        if ($fields = $DB->get_records_menu('user_info_field',array(), null, 'id,shortname')) {
            $select = $mform->addElement('select', 'config_fieldid', get_string('chooseprofilefields', 'block_verify_certificate'), $fields);
            $select->setMultiple(true);

        } else {
            $mform->addElement('static', 'config_fieldid', get_string('chooseprofilefields', 'block_verify_certificate'),
                    get_string('nofields', 'block_verify_certificate'));
        }
    }
}
