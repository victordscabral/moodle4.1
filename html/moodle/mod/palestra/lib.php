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
 * @package mod_palestra
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

function palestra_supports($feature) {
    switch($feature) {
        case FEATURE_MOD_ARCHETYPE:           return MOD_ARCHETYPE_ASSIGNMENT;
        case FEATURE_GROUPS:                  return false;
        case FEATURE_GROUPINGS:               return false;
        case FEATURE_MOD_INTRO:               return true;
        case FEATURE_COMPLETION_TRACKS_VIEWS: return true;
        case FEATURE_COMPLETION_HAS_RULES:    return true;
        case FEATURE_GRADE_HAS_GRADE:         return true;
        case FEATURE_BACKUP_MOODLE2:          return true;
        case FEATURE_SHOW_DESCRIPTION:        return true;

        default: return null;
    }
}

function palestra_reset_userdata($data) {

    // Any changes to the list of dates that needs to be rolled should be same during course restore and course reset.
    // See MDL-9367.

    return array();
}

function palestra_get_view_actions() {
    return array('view','view all');
}

function palestra_get_post_actions() {
    return array('update', 'add');
}

function palestra_add_instance($palestra, $mform = null) {
    global $CFG, $DB;
    require_once("$CFG->libdir/resourcelib.php");

    $cmid = $palestra->coursemodule;

    $palestra->timemodified = time();
    $palestra->needsupdate = 1;

    $palestra->id = $DB->insert_record('palestra', $palestra);

    $DB->set_field('course_modules', 'instance', $palestra->id, array('id'=>$cmid));
    $context = context_module::instance($cmid);

    palestra_grade_item_update($palestra);

    $completiontimeexpected = !empty($palestra->completionexpected) ? $palestra->completionexpected : null;
    \core_completion\api::update_completion_date_event($cmid, 'palestra', $palestra->id, $completiontimeexpected);

    return $palestra->id;
}

function palestra_update_instance($palestra, $mform) {
    global $CFG, $DB;
    require_once("$CFG->libdir/resourcelib.php");

    $cmid = $palestra->coursemodule;
    $palestra->timemodified = time();
    $palestra->needsupdate = 1;
    $palestra->id = $palestra->instance;

    $DB->update_record('palestra', $palestra);

    palestra_grade_item_update($palestra);

    $completiontimeexpected = !empty($palestra->completionexpected) ? $palestra->completionexpected : null;
    \core_completion\api::update_completion_date_event($cmid, 'palestra', $palestra->id, $completiontimeexpected);

    return true;
}

function palestra_delete_instance($id) {
    global $DB;

    if (!$palestra = $DB->get_record('palestra', array('id'=>$id))) {
        return false;
    }

    $cm = get_coursemodule_from_instance('palestra', $id);
    \core_completion\api::update_completion_date_event($cm->id, 'palestra', $id, null);

    $DB->delete_records('palestra', array('id'=>$palestra->id));
    $DB->delete_records('palestra_presence', array('palestraid'=>$palestra->id));

    return true;
}

function palestra_get_coursemodule_info($coursemodule) {
    global $CFG, $DB;
    require_once("$CFG->libdir/resourcelib.php");

    if (!$palestra = $DB->get_record('palestra', array('id'=>$coursemodule->instance))) {
        return NULL;
    }

    $info = new cached_cm_info();
    $info->name = $palestra->name;

    if ($coursemodule->showdescription) {
        // Convert intro to html. Do not filter cached version, filters run at display time.
        $info->content = format_module_intro('palestra', $palestra, $coursemodule->id, false);
    }

    return $info;
}

function palestra_view($palestra, $course, $cm, $context) {
    $params = array(
        'context' => $context,
        'objectid' => $palestra->id
    );

    $event = \mod_palestra\event\course_module_viewed::create($params);
    $event->add_record_snapshot('course_modules', $cm);
    $event->add_record_snapshot('course', $course);
    $event->add_record_snapshot('palestra', $palestra);
    $event->trigger();

    // Completion.
    $completion = new completion_info($course);
    $completion->set_module_viewed($cm);
}

function mod_palestra_core_calendar_provide_event_action(calendar_event $event,
            \core_calendar\action_factory $factory, $userid = 0) {
    global $USER;

    if (empty($userid)) {
        $userid = $USER->id;
    }

    $cm = get_fast_modinfo($event->courseid, $userid)->instances['palestra'][$event->instance];

    $completion = new \completion_info($cm->get_course());

    $completiondata = $completion->get_data($cm, false, $userid);

    if ($completiondata->completionstate != COMPLETION_INCOMPLETE) {
        return null;
    }

    return $factory->create_instance(
        get_string('view'),
        new \moodle_url('/mod/palestra/view.php', ['id' => $cm->id]),
        1,
        true
    );
}

function palestra_grade_item_update($palestra, $grades=NULL) {
    global $CFG;
    if (!function_exists('grade_update')) { //workaround for buggy PHP versions
        require_once($CFG->libdir.'/gradelib.php');
    }

    $params = array('itemname'=>$palestra->name, 'idnumber'=>$palestra->cmidnumber, 'needsupdate'=>1);

    if ($palestra->grade == 0) {
        $params['gradetype'] = GRADE_TYPE_NONE;

    } else if ($palestra->grade > 0) {
        $params['gradetype'] = GRADE_TYPE_VALUE;
        $params['grademax']  = $palestra->grade;
        $params['grademin']  = 0;

    } else if ($palestra->grade < 0) {
        $params['gradetype'] = GRADE_TYPE_SCALE;
        $params['scaleid']   = -$palestra->grade;
    }

    if ($grades  === 'reset') {
        $params['reset'] = true;
        $grades = NULL;
    }

    return grade_update('mod/palestra', $palestra->course, 'mod', 'palestra', $palestra->id, 0, $grades, $params);
}

function palestra_update_grades($palestra, $userid=0, $nullifnone=true) {
    global $CFG, $DB;
    require_once($CFG->libdir.'/gradelib.php');

    $now = time();

    if ($userid) {
        $presences = $DB->get_records("palestra_presence", array("palestraid"=>$palestra->id, "userid"=>$userid), 'id, userid, starttime, lastcheck');
    } else {
        $presences = $DB->get_records_select("palestra_presence", "palestraid=? and lastcheck+? < ?", [$palestra->id, $palestra->duration*60, $now], 'userid, starttime',  'id, userid, starttime, lastcheck');
    }

    $audiences = array();
    $minimal = $palestra->checkinterval * 60;
    $user = null;
    foreach($presences as $presence) {
        # Compute only after palestra starts
        if ($presence->starttime < $palestra->startdate) {
            $presence->starttime = $palestra->startdate;
        }
        if ($user != $presence->userid) {
            if ($user) {
                $audiences[$user] = (isset($audiences[$user])?$audiences[$user]:0) + (max($end - $start, $minimal)/60);
            }
            $user = $presence->userid;
            $start = $presence->starttime;
            $end = $presence->lastcheck;
            continue;
        }
        if ($presence->starttime < ($start + $minimal)) {
            if ($end < $presence->lastcheck) {
                $end = $presence->lastcheck;
            }
        } else {
            $audiences[$user] = (isset($audiences[$user])?$audiences[$user]:0) + (max($end - $start, $minimal)/60);
            $start = $presence->starttime;
            $end = $presence->lastcheck;
        }
    }

    if ($user) {
        $audiences[$user] = (isset($audiences[$user])?$audiences[$user]:0) + (max($end - $start, $minimal)/60);
    }

    $grades = array();
    foreach($audiences as $userid=>$presence_time) {
        $presence_rate = $presence_time / $palestra->duration;
        if ($presence_rate > 1.0) {
            $presence_rate = 1.0;
        }
        $grade = new stdclass();
        $grade->userid = $userid;
        $grade->rawgrade = grade_floatval($palestra->grade * $presence_rate);
        $grade->datesubmitted = $palestra->startdate;
        $grade->dategraded = $palestra->startdate;
        $grades[$userid] = $grade;
    }
    palestra_grade_item_update($palestra, $grades);
    $DB->set_field('palestra', 'needsupdate', 0, array('id'=>$palestra->id));
}

function palestra_reset_gradebook($courseid, $type='') {
    global $CFG, $DB;

    $wheresql = '';
    $params = array($courseid);
    if ($type) {
        $wheresql = "AND p.type=?";
        $params[] = $type;
    }

    $sql = "SELECT p.*, cm.idnumber as cmidnumber, p.course as courseid
              FROM {palestra} p, {course_modules} cm, {modules} m
             WHERE m.name='palestra' AND m.id=cm.module AND cm.instance=p.id AND p.course=? $wheresql";

    if ($palestras = $DB->get_records_sql($sql, $params)) {
        foreach ($palestras as $palestra) {
            palestra_grade_item_update($palestra, 'reset');
        }
    }
}

function palestra_get_user_grades($palestra, $userid = 0) {
    global $CFG;

    require_once($CFG->dirroot.'/rating/lib.php');

    $ratingoptions = new stdClass;
    $ratingoptions->component = 'mod_palestra';
    $ratingoptions->ratingarea = 'post';

    //need these to work backwards to get a context id. Is there a better way to get contextid from a module instance?
    $ratingoptions->modulename = 'palestra';
    $ratingoptions->moduleid   = $palestra->id;
    $ratingoptions->userid = $userid;
    $ratingoptions->aggregationmethod = $palestra->assessed;
    $ratingoptions->scaleid = $palestra->scale;
    $ratingoptions->itemtable = 'palestra_posts';
    $ratingoptions->itemtableusercolumn = 'userid';

    $rm = new rating_manager();
    return $rm->get_user_grades($ratingoptions);
}

function palestra_extend_settings_navigation($settings, $palestranode) {
    global $PAGE, $CFG;
    // We want to add these new nodes after the Edit settings node, and before the
    // Locally assigned roles node. Of course, both of those are controlled by capabilities.
    $keys = $palestranode->get_children_key_list();
    $beforekey = null;
    $i = array_search('modedit', $keys);
    if ($i === false and array_key_exists(0, $keys)) {
        $beforekey = $keys[0];
    } else if (array_key_exists($i + 1, $keys)) {
        $beforekey = $keys[$i + 1];
    }

    if (has_capability('mod/palestra:viewpresences', $PAGE->cm->context)) {
        $url = new moodle_url('/mod/palestra/presences.php', array('cmid'=>$PAGE->cm->id));
        $node = navigation_node::create(get_string('view_presences', 'palestra'),
                $url,
                navigation_node::TYPE_SETTING, null, 'mod_palestra_viewpresences');
        $palestranode->add_node($node, $beforekey);
    }

    // if (has_capability('mod/quiz:manage', $PAGE->cm->context)) {
    //     $node = navigation_node::create(get_string('editquiz', 'quiz'),
    //             new moodle_url('/mod/quiz/edit.php', array('cmid'=>$PAGE->cm->id)),
    //             navigation_node::TYPE_SETTING, null, 'mod_quiz_edit',
    //             new pix_icon('t/edit', ''));
    //     $quiznode->add_node($node, $beforekey);
    // }

    // if (has_capability('mod/quiz:preview', $PAGE->cm->context)) {
    //     $url = new moodle_url('/mod/quiz/startattempt.php',
    //             array('cmid'=>$PAGE->cm->id, 'sesskey'=>sesskey()));
    //     $node = navigation_node::create(get_string('preview', 'quiz'), $url,
    //             navigation_node::TYPE_SETTING, null, 'mod_quiz_preview',
    //             new pix_icon('i/preview', ''));
    //     $quiznode->add_node($node, $beforekey);
    // }

    // if (has_any_capability(array('mod/quiz:viewreports', 'mod/quiz:grade'), $PAGE->cm->context)) {
    //     require_once($CFG->dirroot . '/mod/quiz/report/reportlib.php');
    //     $reportlist = quiz_report_list($PAGE->cm->context);

    //     $url = new moodle_url('/mod/quiz/report.php',
    //             array('id' => $PAGE->cm->id, 'mode' => reset($reportlist)));
    //     $reportnode = $quiznode->add_node(navigation_node::create(get_string('results', 'quiz'), $url,
    //             navigation_node::TYPE_SETTING,
    //             null, null, new pix_icon('i/report', '')), $beforekey);

    //     foreach ($reportlist as $report) {
    //         $url = new moodle_url('/mod/quiz/report.php',
    //                 array('id' => $PAGE->cm->id, 'mode' => $report));
    //         $reportnode->add_node(navigation_node::create(get_string($report, 'quiz_'.$report), $url,
    //                 navigation_node::TYPE_SETTING,
    //                 null, 'quiz_report_' . $report, new pix_icon('i/item', '')));
    //     }
    // }

    // question_extend_settings_navigation($quiznode, $PAGE->cm->context)->trim_if_empty();
}

