<?php
require_once("../../config.php");

global $DB;

// Prepare page
$context = context_system::instance(); // get_context_instance(CONTEXT_SYSTEM);
$PAGE->set_pagelayout('standard');
$PAGE->set_url('/blocks/get_certificate/index.php');
$PAGE->set_context($context);

// Check if user is logged and not guest
require_login();
if (isguestuser()) {
    die();
}

// Get data
$strtitle = get_string('title', 'block_get_certificate');
$user = $USER;
$icon = $OUTPUT->pix_icon('print', get_string('print', 'block_get_certificate'), 'block_get_certificate');

$issues = $DB->get_records('certificate_issues', array('userid' => $user->id));
$data = array();

foreach ($issues as $issue) {
    $certificate = $DB->get_record('certificate', array('id' => $issue->certificateid));
    $course = $DB->get_record('course', array('id' => $certificate->course));
    $cm = get_coursemodule_from_instance('certificate', $certificate->id);
    $url = new moodle_url('/blocks/get_certificate/review.php', array('id'=>$cm->id, 'action'=>'get'));
    $action = new popup_action('click', $url, 'view'.$cm->id, array('height' => 600, 'width' => 800));
    $link = new action_link($url, $icon, $action);
    $line = array($issue->code, userdate($issue->timecreated), $course->fullname, $OUTPUT->render($link));
    $data[] = $line;
}

// Print the header
$PAGE->navbar->add($strtitle);
$PAGE->set_title($strtitle);
$PAGE->set_heading($strtitle);
$PAGE->requires->css('/blocks/get_certificate/printstyle.css');
echo $OUTPUT->header();

// Print concluded courses
echo $OUTPUT->box_start('generalbox boxaligncenter');
echo $OUTPUT->heading(get_string('couselistannounce', 'block_get_certificate'));

$table = new html_table();
$table->align = array('left', 'left', 'left', 'center');
$table->width = '100%';
$table->head  = array(get_string('code', 'certificate'), get_string('timecreated', 'block_get_certificate'), get_string('course'), get_string('print', 'block_get_certificate'));

$table->data = $data;
echo html_writer::table($table);

echo $OUTPUT->box_end();
echo $OUTPUT->footer();
