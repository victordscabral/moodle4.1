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
 * This page is the entry page into the quiz UI. Displays information about the
 * quiz to students and teachers, and lets students see their previous attempts.
 *
 * @package   mod_palestra
 * @category  grade
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once("lib.php");
require_once($CFG->libdir."/gradelib.php");

$id = required_param('id', PARAM_INT);
$userid = optional_param('userid', 0, PARAM_INT);

$cm = get_coursemodule_from_id('palestra', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$palestra = $DB->get_record('palestra', array('id' => $cm->instance), '*', MUST_EXIST);

require_login($course, false, $cm);

if (!$userid && !has_capability('mod/palestra:viewpresences', $PAGE->cm->context)) {
    $userid = $USER->id;
}

if ($userid) {
    $userlist = array($userid);
    $where = 'p.userid = '.$userid;
} else {
    $userlist = $DB->get_fieldset_sql('select distinct userid from {palestra_presence} where palestraid = ? and userid not in ('.$CFG->siteadmins.')', [$palestra->id]);
    $where = 'p.userid not in ('.$CFG->siteadmins.')';
}

$presences = $DB->get_records_sql(
    "
    select p.*, ".get_all_user_name_fields(true,'u')."
    from {palestra_presence} p
      inner join {user} u on u.id = p.userid
    where p.palestraid = ? and
    ".$where, [$palestra->id]
);

$grading_info = grade_get_grades($course->id, 'mod', 'palestra', $palestra->id, $userlist);

$PAGE->set_url('/mod/lesson/grade.php', array('id'=>$cm->id));
$PAGE->set_title($course->shortname.': '.$palestra->name);
$PAGE->set_heading($course->fullname);
$PAGE->requires->jquery();

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('presence_report_title', 'palestra', ['name'=>format_string($palestra->name)]), 2);

echo "
<table class=\"table table-striped table-condensed\">
<thead>
<tr>
<th>".get_string('start', 'palestra')."</th>
<th>".get_string('last_signal', 'palestra')."</th>
<th>".get_string('stay_time', 'palestra')."<th>
</tr>
</thead>
<tbody>
";

$lastuser = null;
$stay_total = 0;

foreach ($presences as $presence) {
    if ($lastuser != $presence->userid) {
        echo "</tbody>";
        if ($lastuser) {
            $total_row = get_string('total_row', 'palestra', ['name'=>$fullname, 'stay'=>$stay_total, 'grade'=>$grading_info->items[0]->grades[$lastuser]->str_long_grade]);
            echo "<thead><tr><th colspan=\"3\">{$total_row}</th></tr></thead>";
        }
        $fullname = fullname($presence);
        echo "
        <thead><tr><th colspan=\"3\">{$fullname}</th></tr></thead>
        <tbody>
        ";
        $lastuser = $presence->userid;
        $stay_total = 0;
    }
    $stay = round(($presence->lastcheck - $presence->starttime) / 60);
    $stay_total = $stay_total + $stay;
    echo "
    <tr>
      <td>".userdate($presence->starttime, '%d/%m/%Y %H:%M:%S')."</td>
      <td>".userdate($presence->lastcheck, '%d/%m/%Y %H:%M:%S')."</td>
      <td>{$stay}</td></tr>";
}
echo "</tbody>";
if ($lastuser) {
    $total_row = get_string('total_row', 'palestra', ['name'=>$fullname, 'stay'=>$stay_total, 'grade'=>$grading_info->items[0]->grades[$lastuser]->str_long_grade]);
    echo "<thead><tr><th colspan=\"3\">{$total_row}</th></tr></thead>";
}
echo "</table>";

echo $OUTPUT->footer();