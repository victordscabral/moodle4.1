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
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * This file defines the user filter form
 *
 * @package report-ilbsplit
 * @copyrigth 2014 Interlegis (http://www.interlegis.leg.br)
 *
 * @author Sesostris Vieira
 *
 * @license http://www.gnu.org/licenses/old-licenses/lgpl-2.0.html
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');
}

require_once("$CFG->libdir/formslib.php");
 
class split_form extends moodleform {
    protected $_courseid;
    protected $_options;

    function split_form($courseid, $options, $action=null, $customdata=null, $method='get', $target='', $attributes=null, $editable=true) {
        $this->_courseid     = $courseid;
        $this->_options      = $options;
        parent::moodleform($action, $customdata, $method, $target, $attributes, $editable);
    }

    public function definition() {
        global $CFG;
        global $DB;
 
        $mform        = $this->_form; // Don't forget the underscore!
        $courseid     = $this->_courseid;
        $options      = $this->_options;

        $course  = get_course($courseid);
        $courses = $DB->get_records('course', array('category'=>$course->category)); 

        // Source options
        foreach ($options as $key=>$option) {
            $mform->addElement('header', "role_header_{$key}", $option[0]);
            foreach ($option[1] as $roleid=>$role) {
                $description = get_string('role_option','report_ilbsplit', $role);
                $mform->addElement('radio', 'role', '', $description, "{$key}:{$roleid}");
            }
        }
        $mform->addRule('role', null, 'required');

        // Courses
        $coursesarray = array();
        foreach ($courses as $c) {
            if ($c->id !== $courseid) {
                $coursesarray[$c->id] = $c->fullname;
            }
        }

        $mform->addElement('select', 'target', get_string('target_course','report_ilbsplit'), $coursesarray);
        $mform->addRule('target', null, 'required');
        $mform->addElement('text', 'qty', get_string('splitqty', 'report_ilbsplit'));
        $mform->setType('qty', PARAM_INT);
        $mform->addRule('qty', null, 'required');
        $mform->closeHeaderBefore('target');

        $mform->addElement('submit', 'filterbutton', get_string('split', 'report_ilbsplit'));
        $mform->addElement('hidden', 'course', $courseid);
//        $mform->closeHeaderBefore('filterbutton');
    }
}
