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
 * Display user activity reports for a course (totals)
 *
 * @package    report
 * @subpackage outline
 * @copyright  1999 onwards Martin Dougiamas  http://dougiamas.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once('locallib.php');

$userid   = required_param('id', PARAM_INT);
$courseid = required_param('course', PARAM_INT);

$user = $DB->get_record('user', array('id'=>$userid, 'deleted'=>0), '*', MUST_EXIST);
$course = $DB->get_record('course', array('id'=>$courseid), '*', MUST_EXIST);

$coursecontext   = context_course::instance($course->id);
$personalcontext = context_user::instance($user->id);

if ($USER->id != $user->id and has_capability('moodle/user:viewuseractivitiesreport', $personalcontext)
        and !is_enrolled($coursecontext, $USER) and is_enrolled($coursecontext, $user)) {
    //TODO: do not require parents to be enrolled in courses - this is a hack!
    require_login();
    $PAGE->set_course($course);
} else {
    require_login($course);
}

if (!report_messages_can_access_user_report($user, $course, true)) {
    require_capability('report/messages:view', $coursecontext);
}

add_to_log($course->id, 'course', 'report messages', "report/messages/user.php?id=$user->id&course=$course->id", $course->id);

$PAGE->set_pagelayout('admin');
$PAGE->set_url('/report/messages/user.php', array('id'=>$user->id, 'course'=>$course->id));
$PAGE->navigation->extend_for_user($user);
$PAGE->navigation->set_userid_for_parent_checks($user->id); // see MDL-25805 for reasons and for full commit reference for reversal when fixed.
$PAGE->set_title($course->shortname.': '.get_string('pluginname', 'report_messages'));
$PAGE->set_heading($course->fullname);
echo $OUTPUT->header();
echo '<h2>'.get_string('reporttitle','report_messages',array('fullname'=>fullname($user))).'</h2>';

$sql = "
    (SELECT DISTINCT m.useridfrom as id
    FROM {message} m
    WHERE m.useridto = ? AND m.useridfrom <> ?)

    UNION

    (SELECT DISTINCT mr.useridfrom as id
    FROM {message_read} mr
    WHERE mr.useridto = ? AND mr.useridfrom <> ?)

    UNION

    (SELECT distinct m.useridto as id
    FROM {message} m
    WHERE m.useridfrom = ? AND m.useridto <> ?)

    UNION

    (SELECT distinct mr.useridto as id
    FROM {message_read} mr
    WHERE mr.useridfrom = ? AND mr.useridto <> ?)
";
$userlist = $DB->get_records_sql($sql, array($user->id, $user->id, $user->id, $user->id,$user->id, $user->id, $user->id, $user->id));
list($in_user, $param_users) = $DB->get_in_or_equal(array_keys($userlist), SQL_PARAMS_QM);
$contacts = array();
$sqlfullname = $DB->sql_fullname('u.firstname','u.lastname');
$sql = "
    select u.*, $sqlfullname as fullname
    from {user} u
    where u.id {$in_user}
";

$contacts = $DB->get_records_sql($sql, $param_users);

if (empty($contacts)) {
    echo $OUTPUT->notification(get_string('nothingtodisplay'));
} else {
    $sqlfromname = $DB->sql_fullname('fu.firstname','fu.lastname');
    $sqltoname = $DB->sql_fullname('tu.firstname','tu.lastname');
    $sql = "
        (select m.timecreated, $sqlfromname as fromuser, $sqltoname as touser, m.fullmessage, m.fullmessageformat 
        from {message} m
          inner join {user} fu on fu.id = m.useridfrom
          inner join {user} tu on tu.id = m.useridto
        where (m.useridfrom = ? and m.useridto = ?) or
              (m.useridfrom = ? and m.useridto = ?)
        order by m.timecreated desc)

        UNION

        (select mr.timecreated, $sqlfromname as fromuser, $sqltoname as touser, mr.fullmessage, mr.fullmessageformat 
        from {message_read} mr
          inner join {user} fu on fu.id = mr.useridfrom
          inner join {user} tu on tu.id = mr.useridto
        where (mr.useridfrom = ? and mr.useridto = ?) or
              (mr.useridfrom = ? and mr.useridto = ?)
        order by mr.timecreated desc)
    ";

    foreach ($contacts as $contact) {
        $messages = $DB->get_records_sql($sql, array($user->id, $contact->id, $contact->id, $user->id, $user->id, $contact->id, $contact->id, $user->id));
        echo $OUTPUT->box_start();
        $upic = $OUTPUT->user_picture($contact);
        $ulink = "<a href=\"{$CFG->wwwroot}/user/view.php?id={$contact->id}&course={$course->id}\">{$upic}</a>";
        $a = array('userlink'=>$ulink, 'total_messages'=>count($messages), 'fullname'=>$contact->fullname);
        $head = get_string('exchangedmessages', 'report_messages', $a);
        echo "<h3>$head</h3>";
        $table = new html_table();
        $table->attributes['class'] = 'generaltable boxaligncenter';
        $table->head = array(get_string('date'), get_string('from'), get_string('to'), get_string('message', 'report_messages'));
        $table->data = array();
        foreach ($messages as $message) {
            $table->data[] = array(userdate($message->timecreated), $message->fromuser, $message->touser, format_text($message->fullmessage, $message->fullmessageformat));
        }
        echo html_writer::table($table);
        echo $OUTPUT->box_end();
    }
}

echo $OUTPUT->footer();
