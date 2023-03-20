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
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once("lib.php");

$cmid = required_param('cmid', PARAM_INT);

$cm = get_coursemodule_from_id('palestra', $cmid, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$palestra = $DB->get_record('palestra', array('id' => $cm->instance), '*', MUST_EXIST);

require_login($course, false, $cm);

if (!has_capability('mod/palestra:viewpresences', $PAGE->cm->context)) {
    redirect("view.php?id=$cm->id");
}

$presences = $DB->get_records_sql(
    "
    select distinct u.*
    from {palestra_presence} p
      inner join {user} u on u.id = p.userid
    where
      p.palestraid = ? and
      p.userid not in (".$CFG->siteadmins.")
    ", [$palestra->id]
);

$PAGE->set_url('/mod/palestra/presences.php', array('id'=>$cm->id));
$PAGE->set_title($course->shortname.': '.$palestra->name);
$PAGE->set_heading($course->fullname);
$PAGE->requires->jquery();

$pagetitle = get_string('presence_list_title', 'palestra', ['name'=>format_string($palestra->name)]);

echo $OUTPUT->header();
echo $OUTPUT->heading($pagetitle, 2);

echo "
<table class=\"table table-striped table-condensed\">
  <thead>
    <tr>
      <th>".get_string('presence_total', 'palestra', count($presences))."</th>
    </tr>
    <tr>
      <th>".get_string('fullname')."</th>
    </tr>
  </thead>
<tbody>
";

foreach ($presences as $presence) {
    echo "<tr><td>".fullname($presence)."</td></tr>";
}

echo "</tbody></table>";

echo $OUTPUT->footer();