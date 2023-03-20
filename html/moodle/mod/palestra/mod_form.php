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
 * palestra configuration form
 *
 * @package mod_palestra
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->dirroot.'/course/moodleform_mod.php');
require_once($CFG->libdir.'/filelib.php');

class mod_palestra_mod_form extends moodleform_mod {
    function definition() {
        global $CFG, $DB;
        $mform = $this->_form;
        $config = get_config('palestra');

        $mform->addElement('header', 'general', get_string('general', 'form'));
        $mform->addElement('text', 'name', get_string('name'), array('size'=>'48'));
        if (!empty($CFG->formatstringstriptags)) {
            $mform->setType('name', PARAM_TEXT);
        } else {
            $mform->setType('name', PARAM_CLEANHTML);
        }
        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
        $this->standard_intro_elements();

        $mform->addElement('header', 'contentsection', get_string('contentheader', 'palestra'));
        $mform->addElement('text', 'youtubecode', get_string('youtubecode', 'palestra'), array('size'=>'48'));
        $mform->setType('youtubecode', PARAM_TEXT);
        $mform->addRule('youtubecode', null, 'required', null, 'client');
        $mform->addRule('youtubecode', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
        $mform->addElement('advcheckbox', 'includechat', get_string('includechat', 'palestra'));
        $mform->addElement('select', 'chatdisposition', get_string('chatdisposition', 'palestra'), array('S'=>get_string('chatdisposition_sidebyside', 'palestra'), 'T'=>get_string('chatdisposition_stacked', 'palestra')));
        $mform->disabledIf('chatdisposition', 'includechat', 'notchecked', '1');
        $mform->setDefault('includechat', $config->includechat);
        $mform->addHelpButton('includechat', 'includechat', 'palestra');
        $mform->addElement('date_time_selector', 'startdate', get_string('startdate', 'palestra'), array('size'=>'10'));
        $mform->setType('startdate', PARAM_INT);
        $mform->addRule('startdate', null, 'required', null, 'client');
        $mform->addHelpButton('startdate', 'startdate', 'palestra');
        $mform->addElement('text', 'duration', get_string('duration', 'palestra'), array('size'=>'10'));
        $mform->setType('duration', PARAM_INT);
        $mform->addRule('duration', null, 'required', null, 'client');
        $mform->addHelpButton('duration', 'duration', 'palestra');
        $mform->addElement('checkbox', 'gradeafter', get_string('gradeafter', 'palestra'));
        $mform->setDefault('gradeafter', $config->gradeafter);
        $mform->addHelpButton('gradeafter', 'gradeafter', 'palestra');
        $mform->addElement('text', 'checkinterval', get_string('checkinterval', 'palestra'), array('size'=>'10'));
        $mform->setType('checkinterval', PARAM_INT);
        $mform->addRule('checkinterval', null, 'required', null, 'client');
        $mform->setDefault('checkinterval', $config->checkinterval);
        $mform->addHelpButton('checkinterval', 'checkinterval', 'palestra');

        $this->standard_grading_coursemodule_elements();
        $this->standard_coursemodule_elements();
        $this->add_action_buttons();
    }
}