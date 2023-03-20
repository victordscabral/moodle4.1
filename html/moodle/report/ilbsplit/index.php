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
 * ILB Enrol Confirmation reports
 *
 * @package    report
 * @subpackage ilbsplit
 * @copyright  2008 Sam Marshall
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require("{$CFG->dirroot}/enrol/locallib.php");
require_once("$CFG->dirroot/user/profile/lib.php");
require_once('form.php');

// Get course
$id = required_param('course',PARAM_INT);
$course = $DB->get_record('course',array('id'=>$id));

if (!$course) {
    print_error('invalidcourseid');
}

$context = context_course::instance($course->id);

$url = new moodle_url('/report/ilbsplit/index.php', array('course'=>$id));
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');

require_login($course);

// Check basic permission
require_capability('report/ilbsplit:view',$context);

// Get group mode
$group = groups_get_course_group($course,true); // Supposed to verify group
if ($group===0 && $course->groupmode==SEPARATEGROUPS) {
    require_capability('moodle/site:accessallgroups',$context);
}

// Get data for user filtering
$manager = new course_enrolment_manager($PAGE, $course);

$options = array();
$has_options = false;

foreach ($manager->get_enrolment_instances() as $e) {
    $options[$e->id] = array("{$e->name} ({$e->enrol})", array());
    $m = new course_enrolment_manager($PAGE, $course, $e->id);
    foreach ($m->get_all_roles() as $role) {
        $tm = new course_enrolment_manager($PAGE, $course, $e->id, $role->id);
        $tu = $tm->get_total_users();
        if ($tu > 0) {
            $options[$e->id][1][$role->id] = array('localname' => $role->localname, 'totalusers' => $tu);
            $has_options = true;
        }
    }
}
$pagetitle = get_string('title','report_ilbsplit');
$PAGE->set_title($pagetitle);
$PAGE->set_heading($course->fullname);
echo $OUTPUT->header();
echo $OUTPUT->heading($pagetitle);

if (!$has_options) {
    echo $OUTPUT->box(get_string('nouserstosplit', 'report_ilbsplit'), 'center');
    echo $OUTPUT->footer();
    die;
}

$mform = new split_form($course->id, $options);

if ($formdata = $mform->get_data()) {
    $role = explode(':', $formdata->role);
    $enrolid = $role[0];
    $roleid = $role[1];
    $targetid = $formdata->target;
    $qty = $formdata->qty;

    $course_target = $DB->get_record('course',array('id'=>$targetid));

    if (!$course_target) {
        print_error('invalidcourseid');
    }

    $context_target = context_course::instance($course_target->id);
    $manager_target = new course_enrolment_manager($PAGE, $course_target);

    if (!array_key_exists($enrolid, $manager->get_enrolment_instances())) {
        echo $OUTPUT->box(get_string('invalidenrolid', 'report_ilbsplit'), 'center');
        echo $OUTPUT->footer();
        die;    
    }

    $enrol = $manager->get_enrolment_instances()[$enrolid];
    $enrol_target = null;

    foreach ($manager_target->get_enrolment_instances() as $et) {
        if ($et->enrol == $enrol->enrol) {
            $enrol_target = $et;
            break;
        }
    }

    if (is_null($enrol_target)) {
        echo $OUTPUT->box(get_string('noenroltarget', 'report_ilbsplit'), 'center');
        echo $OUTPUT->footer();
        die;
    }

    // Mount parameters and sql-updates

    $params = array('course_source'  => $course->id,
                    'course_target'  => $course_target->id,
                    'enrol_source'   => $enrol->id,
                    'enrol_target'   => $enrol_target->id,
                    'context_source' => $context->id,
                    'context_target' => $context_target->id,
                    'roleid'         => $roleid,
                    'qty'            => $qty);

    $sql_transfer_enrols = 'update {user_enrolments} set enrolid = :enrol_target where enrolid = :enrol_source and userid in (select userid from {role_assignments} where roleid = :roleid and contextid = :context_source limit :qty)';
    $sql_transfer_roles = 'update {role_assignments} set contextid = :context_target where roleid = :roleid and contextid = :context_source  and userid in (select userid from {user_enrolments} where enrolid = :enrol_target)';

    // Execute updates

    $transaction = $DB->start_delegated_transaction();

    try {
        $DB->execute($sql_transfer_enrols, $params);
        $DB->execute($sql_transfer_roles, $params);
        $transaction->allow_commit();
    } catch(Exception $e) {
        $transaction->rollback($e);
        echo $OUTPUT->box(get_string('nouserstransfered', 'report_ilbsplit'), 'center');
        echo $OUTPUT->footer();
        die;
    }

    echo $OUTPUT->box(get_string('userstransfered', 'report_ilbsplit'), 'center');
} else {
    echo $OUTPUT->box(get_string('alert', 'report_ilbsplit'), 'center');
    $mform->display();
}

echo $OUTPUT->footer();
