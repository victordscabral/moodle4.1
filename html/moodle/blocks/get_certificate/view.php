<?php
require_once("../../config.php");

global $DB;

// Prepare page
$context = get_context_instance(CONTEXT_SYSTEM);
$PAGE->set_pagelayout('standard');
$PAGE->set_url('/blocks/get_certificate/index.php');
$PAGE->set_context($context);

// Check if user is logged and not guest
require_login();
if (isguestuser()) {
    die();
}

// Get data
$user = $USER;
$issueid = required_param('id', PARAM_INT);
$issue = $DB->get_record('certificate_issues', array('id'=>$issueid));

// Check if user is the owner of the requested certificate

if ($issue->userid !== $user->id) {
    print_error(get_string('usernotowner', 'block_get_certificate'));
    die;
}

$strtitle = 'coisa';
// Print the header
$PAGE->navbar->add($strtitle);
$PAGE->set_title($strtitle);
$PAGE->set_heading($strtitle);
$PAGE->requires->css('/blocks/get_certificate/printstyle.css');
echo $OUTPUT->header();
echo $OUTPUT->footer();
