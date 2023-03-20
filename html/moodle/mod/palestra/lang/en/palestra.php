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
 * Strings for component 'palestra', language 'en'
 *
 * @package   mod_palestra
 * @copyright 2021 Interlegis (https://www.interlegis.leg.br)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Palestra';
$string['modulename'] = 'Palestra';
$string['modulenameplural'] = 'Palestras';
$string['pluginadministration'] = 'Palestra administration';
$string['crontask'] = 'Schedule for palestra participation grade calculation';
$string['contentheader'] = 'Palestra settings';
$string['youtubecode'] = 'Youtube stream code';
$string['startdate'] = 'Start date';
$string['startdate_help'] = 'The moment from which attendance must be registered';
$string['duration'] = 'Duration';
$string['duration_help'] = 'Attendance duration in minutes';
$string['checkinterval'] = 'Check interval';
$string['checkinterval_help'] = "Indicates the time interval (in minutes) that the user's browser sends a 'sign of life' to the moodle server. This is used to calculate the user's time spent on the 'palestra' and, consequently, their participation grade. A lower value promotes better accuracy, but can overload the server, especially if you have many concurrent users. A higher value can decrease precision, but it makes the server lighter. The default value is 10 minutes. Zero indicates that no live signals will be sent and simple access to the Palestra will correspond to 100% participation grade.";
$string['includechat'] = 'Include youtube chat';
$string['chatdisposition'] = 'Chat disposition';
$string['chatdisposition_sidebyside'] = 'Side by side';
$string['chatdisposition_stacked'] = 'Stacked';
$string['includechat_help'] = 'If checked, the associated youtube chat will be displayed together the video area';
$string['presence_unregistered'] = 'Your presence is not being registered. Try to leave the palestra and enter again.';
$string['grade_participation_task'] = 'Grades the Palestra Participacion';
$string['out_of_date_alert'] = 'Your presence is not being counted because the activity has already ended. You can continue watching the content.';
$string['gradeafter'] = 'Grade after end of palestra';
$string['gradeafter_help'] = 'Continue grading participation even after the end of palestra transmission.';
$string['presence_report_title'] = 'Attendance report at {$a->name}';
$string['start'] = 'Start time';
$string['last_signal'] = 'Last live signal';
$string['stay_time'] = 'Stay time (minutes)';
$string['total_row'] = 'Total for {$a->name}: stay {$a->stay} minutes, grading {$a->grade}.';
$string['view_presences'] = 'View present users';
$string['presence_list_title'] = 'List of present users';
$string['presence_total'] = '{$a} present users';