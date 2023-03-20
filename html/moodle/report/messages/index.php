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
 * Display user messages reports for a course (totals)
 *
 * @package    report
 * @subpackage messages
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once($CFG->dirroot.'/report/messages/locallib.php');

$id = required_param('id',PARAM_INT);       // course id

$course = $DB->get_record('course', array('id'=>$id), '*', MUST_EXIST);

$PAGE->set_url('/report/messages/index.php', array('id'=>$id));
$PAGE->set_pagelayout('report');

require_login($course);
$context = context_course::instance($course->id);
require_capability('report/messages:view', $context);

add_to_log($course->id, 'course', 'report messages', "report/messages/index.php?id=$course->id", $course->id);

$strviewdetail     = get_string('viewdetail', 'report_messages');
$stractivityreport = get_string('pluginname', 'report_messages');
$stractivity       = get_string('activity');
$strlast           = get_string('lastaccess');
$strreports        = get_string('reports');
$strviews          = get_string('views');
$strrelatedblogentries = get_string('relatedblogentries', 'blog');

$PAGE->set_title($course->shortname .': '. $stractivityreport);
$PAGE->set_heading($course->fullname);

echo $OUTPUT->header();
echo $OUTPUT->heading(format_string($course->fullname));

$messagestable = new html_table();
$messagestable->attributes['class'] = 'generaltable boxaligncenter';
$messagestable->cellpadding = 5;
$messagestable->id = 'messagestable';
$messagestable->head = array(get_string('fullname'), get_string('role', 'report_messages'), get_string('totalsended', 'report_messages'), 
  get_string('totalreceived','report_messages'), $strviewdetail);
$messagestable->align = array('left', 'right', 'right', 'right', 'center');
$messagestable->data = array();

$userlist = get_enrolled_users($context, '', 0, 'u.id');
list($in_user, $param_users) = $DB->get_in_or_equal(array_keys($userlist), SQL_PARAMS_QM);
$fullname = $DB->sql_fullname('u.firstname', 'u.lastname');

$sql = "
select u.id, $fullname as fullname, u.picture, u.firstname, u.lastname, u.imagealt, u.email,
  (select count(*) from {message} where useridfrom=u.id and useridto<>u.id and useridto $in_user) as totalsend,
  (select count(*) from {message_read} where useridfrom=u.id and useridto<>u.id and useridto $in_user) as totalsendread,
  (select count(*) from {message} where useridto=u.id and useridfrom<>u.id and useridfrom $in_user) as totalreceive,
  (select count(*) from {message_read} where useridto=u.id and useridfrom<>u.id and useridfrom $in_user) as totalreceiveread
from {user} u
where u.id $in_user
order by fullname
";

$data = $DB->get_records_sql($sql, array_merge($param_users,$param_users,$param_users,$param_users,$param_users));

foreach ($data as $user) {
    $roles = role_fix_names(get_user_roles($context, $user->id));
    $possible_role = false;
    $str_roles = "";
    foreach ($roles as $role) {
        if(!$possible_role && in_array($role->localname, Array("Estudante"))) {
            $possible_role = true;
        }
        $str_roles .= $role->localname.", ";
    }
    if(!$possible_role) {
        continue;
    }
    $str_roles = substr($str_roles, 0, -2);
    $upic = $OUTPUT->user_picture($user);
    $ulink = "<a href=\"{$CFG->wwwroot}/user/view.php?id={$user->id}&course={$course->id}\">{$upic}</a>";
    $link = "<a href=\"$CFG->wwwroot/report/messages/user.php?id=$user->id&course=$course->id\">$strviewdetail</a>";
    $messagestable->data[] = array($ulink.' '.$user->fullname, $str_roles, $user->totalsend+$user->totalsendread, $user->totalreceive+$user->totalreceiveread, $link);
}

echo html_writer::table($messagestable);
echo $OUTPUT->footer();
