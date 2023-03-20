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
 * Defines all the backup steps that will be used by {@link backup_palestra_activity_task}
 *
 * @package     mod_palestra
 * @category    backup
 * @copyright   2021 Interlegis (https://www.interlegis.leg.br)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Defines the complete palestra structure for backup, with file and id annotations
 *
 */
class backup_palestra_activity_structure_step extends backup_activity_structure_step {

    /**
     * Defines the structure of the 'palestra' element inside the palestra.xml file
     *
     * @return backup_nested_element
     */
    protected function define_structure() {
        $userinfo = $this->get_setting_value('userinfo');
        $palestra = new backup_nested_element('palestra', array('id'), array(
            'name', 'intro', 'introformat', 'youtubecode', 'includechat',
            'grade', 'duration', 'checkinterval', 'timemodified'));

        $presence  = new backup_nested_element('palestra_presence', array('id'),
            array('palestraid', 'userid', 'starttime', 'lastcheck'));

        $palestra->add_child($presence);

        $palestra->set_source_table('palestra', array('id' => backup::VAR_ACTIVITYID));
        $presence->set_source_sql("
            SELECT *
              FROM {palestra_presence}
             WHERE palestraid = ?",
            array(backup::VAR_PARENTID));

        $presence->annotate_ids('user', 'userid');

        return $this->prepare_activity_structure($palestra);
    }
}
