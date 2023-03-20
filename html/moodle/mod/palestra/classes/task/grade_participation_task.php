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
 * A scheduled task for workshop cron.
 *
 * @package    mod_workshop
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace mod_palestra\task;

use stdClass;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/gradelib.php');
require_once($CFG->dirroot.'/mod/palestra/lib.php');
require_once($CFG->dirroot.'/course/modlib.php');

class grade_participation_task extends \core\task\scheduled_task {
    public function get_name() {
        return get_string('grade_participation_task', 'mod_palestra');
    }

    public function execute() {
        global $DB;

        $now = time();
        //#TODO: gradeafter
        $palestras = $DB->get_records_sql("
            select p.id, p.course, p.name, p.startdate, p.duration, p.checkinterval
            from {palestra} p
              inner join {course} c on c.id = p.course
            where
              (p.needsupdate = 1) and
              (c.visible = 1) and
              ((c.startdate <= ?) and (c.enddate = 0 or c.enddate >= ?)) and
              (select count(*)
               from {palestra_presence} pp
               where pp.palestraid = p.id and
               (pp.lastcheck+(p.duration*60)) < ?
              ) > 0
        ", [$now, $now, $now]);

        mtrace(count($palestras)." palestras to grade...");

        foreach ($palestras as $palestra) {
            mtrace("\tGrading participation on palestra {$palestra->name}...");
            $grading_info = grade_get_grades($palestra->course, 'mod', 'palestra', $palestra->id);
            $cm = get_coursemodule_from_instance('palestra', $palestra->id, $palestra->course, false, MUST_EXIST);
            $palestra->grade = $grading_info->items[0]->grademax;
            $palestra->cmidnumber = $cm->id;
            palestra_update_grades($palestra);
            mtrace("\tParticipation on palestra {$palestra->name} graded!");
        }
    }
}