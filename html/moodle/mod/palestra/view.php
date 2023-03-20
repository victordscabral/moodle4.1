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
 * Page module version information
 *
 * @package mod_palestra
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once($CFG->dirroot.'/mod/palestra/lib.php');
require_once($CFG->libdir.'/completionlib.php');

$id = optional_param('id', 0, PARAM_INT); // Course Module ID
$p  = optional_param('p', 0, PARAM_INT);  // Palestra instance ID

if ($p) {
    if (!$palestra = $DB->get_record('palestra', array('id'=>$p))) {
        print_error('invalidaccessparameter');
    }
    $cm = get_coursemodule_from_instance('palestra', $palestra->id, $palestra->course, false, MUST_EXIST);
} else {
    if (!$cm = get_coursemodule_from_id('palestra', $id)) {
        print_error('invalidcoursemodule');
    }
    $palestra = $DB->get_record('palestra', array('id'=>$cm->instance), '*', MUST_EXIST);
}

$course = $DB->get_record('course', array('id'=>$cm->course), '*', MUST_EXIST);

require_course_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/palestra:view', $context);

// Completion and trigger events.
palestra_view($palestra, $course, $cm, $context);

$PAGE->set_url('/mod/palestra/view.php', array('id' => $cm->id));
$PAGE->set_title($course->shortname.': '.$palestra->name);
$PAGE->set_heading($course->fullname);
$PAGE->set_activity_record($palestra);
$PAGE->requires->jquery();

echo $OUTPUT->header();
echo $OUTPUT->heading(format_string($palestra->name), 2);

if (trim(strip_tags($palestra->intro))) {
    echo $OUTPUT->box_start('mod_introbox', 'pageintro');
    echo format_module_intro('palestra', $palestra, $cm->id);
    echo $OUTPUT->box_end();
}

echo $OUTPUT->box("<span id='presence_alert'></span>", "generalbox center clearfix text-center");

$stream = "<iframe width=\"100%\" height=\"450\" src=\"https://www.youtube.com/embed/{$palestra->youtubecode}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>";

if ($palestra->includechat) {
    $parse = parse_url($CFG->wwwroot);
    $domain = $parse['host'];
    $chat = "<iframe width=\"100%\" height=\"450\" src=\"https://www.youtube.com/live_chat?v={$palestra->youtubecode}&embed_domain={$domain}\" title=\"YouTube live chat\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>";
    if ($palestra->chatdisposition =='S') {
        echo '<div class="container"><div class="row">';
        echo $OUTPUT->box($stream, "col-8");
        echo $OUTPUT->box($chat, "col-4");
        echo "</div></div>";
    } else {
        echo $OUTPUT->box($stream, "generalbox center clearfix");
        echo $OUTPUT->box($chat, "generalbox center clearfix");
    }
}

$now = time();

// Presence will only be registered if user accessed before the end
// of palestra (startdate+duration), plus a lag margin (duration*1.5)
// or if gradeafter is checked as True
if (($now < ($palestra->startdate + ($palestra->duration*1.5*60)))
    or ($palestra->gradeafter == 1)) {
    $presence = array('palestraid'=>$palestra->id, 'userid'=>$USER->id, 'starttime'=>$now, 'lastcheck'=>$now);
    if ($palestra->checkinterval == 0) {
        // Just accessing the palestra grants 100% of grade
        $presence['lastcheck'] += $palestra->duration * 60;
    }
    $presence['id'] = $DB->insert_record('palestra_presence', $presence);
    $DB->set_field('palestra', 'needsupdate', '1', ['id'=>$palestra->id]);

    $interval = $palestra->checkinterval * 60 * 1000;
    $alert = get_string('presence_unregistered', 'palestra');

    if ($interval > 0) {
        echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            var ajaxdata = {id: {$presence['id']}};
            $(window).on('unload', function(){
                presenceSet();
            });

            var lsi = setInterval(presenceSet, {$interval});

            function presenceSet() {
                $.ajax({
                    type: 'GET',
                    url: '/mod/palestra/presence.php',
                    data: ajaxdata,
                    dataType: 'text',
                    success: function(result) {
                        if (result == 'stoped') {
                            clearInterval(lsi);
                        } else if (result != 'done') {
                            $('#presence_alert').text(result).parent().addClass('bg-warning');
                        } else {
                            $('#presence_alert').text('').parent().removeClass('bg-warning');
                        }
                    },
                    error: function(response, errcode) {
                        $('#presence_alert').text('{$alert}').addClass('bg-warning');

                    }
                });
            }
        })
        </script>";
    }
} else {
    $out_of_date_alert = get_string('out_of_date_alert', 'palestra');
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        $('#presence_alert').text('{$out_of_date_alert}').addClass('bg-warning');
    })
    </script>";
}
echo $OUTPUT->footer();
