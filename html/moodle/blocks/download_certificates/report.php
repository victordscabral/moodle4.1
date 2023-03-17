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
 * Version details
 *
 * Download certificates block
 * --------------------------
 * Displays all issued certificates for users with unique codes.
 * The certificates will also be issued for courses that have been archived since issuing of the certificates.
 * All previously issued certificates can be downloaded as Zipped file. Contributed by Neeraj KP (kpneeraj).
 *
 * @copyright  2015 onwards Manieer Chhettri | <manieer@gmail.com>
 * @author     Manieer Chhettri | <manieer@gmail.com> | 2015
 * @package    block_download_certificates
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->dirroot.'/mod/certificate/locallib.php');
require_login();

$url = new moodle_url('/blocks/download_certificates/report.php');
$strcertificates = get_string('download_certificates_modulenameplural', 'block_download_certificates');
$PAGE->set_pagelayout('standard');
$PAGE->set_url($url);

        // Check capabilities.
        $context = context_system::instance();
        $PAGE->set_context($context);

        $PAGE->navbar->add($strcertificates);
        $PAGE->set_title($strcertificates);
        $PAGE->set_heading($strcertificates);

        echo $OUTPUT->header();

        $table = new html_table();
        $table->head = array(get_string('download_certificates_tblheader_coursename', 'block_download_certificates'),
                             get_string('download_certificates_tblheader_grade', 'block_download_certificates'),
                             get_string('download_certificates_tblheader_code', 'block_download_certificates'),
                             get_string('download_certificates_tblheader_issuedate', 'block_download_certificates'),
                             get_string('download_certificates_tblheader_download', 'block_download_certificates'));
        $table->align = array ("left", "center", "center", "center", "center");

        $sql = "SELECT f.id AS fid, f.userid AS fuserid, f.contextid AS fcontextid, f.filename AS ffilename,
                       ctx.id AS ctxid, ctx.contextlevel AS ctxcontextlevel, ctx.instanceid AS ctxinstanceid,
                       cm.id AS cmid, cm.course AS cmcourse, cm.module AS cmmodule, cm.instance AS cminstance,
                       crt.id AS crtid, crt.course AS crtcourse, crt.name AS crtname, ci.id AS ciid,
					   ci.userid AS ciuserid, ci.certificateid AS cicertificateid, ci.code AS cicode,
					   ci.timecreated AS citimecreated, c.id AS cid, c.fullname AS cfullname,
					   c.shortname AS cshortname
                  FROM {files} f
            INNER JOIN {context} ctx
                    ON ctx.id = f.contextid
            INNER JOIN {course_modules} cm
                    ON cm.id = ctx.instanceid
            INNER JOIN {certificate} crt
                    ON crt.id = cm.instance
             LEFT JOIN {certificate_issues} ci
                    ON ci.certificateid = crt.id
            INNER JOIN {course} c
                    ON c.id = crt.course

				 WHERE f.userid = ci.userid AND
				       f.userid = :userid AND
				    f.component = 'mod_certificate' AND
                     f.mimetype = 'application/pdf'
		      ORDER BY ci.timecreated DESC";
        // PDF FILES ONLY (f.mimetype = 'application/pdf').

        $certificates = $DB->get_records_sql($sql, array('userid' => $USER->id));

        if (!$certificates) {
             // No Certificate Issued - Print error message.
            print_error(get_string('download_certificates_nocertsissued', 'block_download_certificates'));
        } else {

            foreach ($certificates as $certdata) {

                $certdata->printdate = 1; // Modify printdate so that date is always printed.
                $certdata->printgrade = 1; // Modify printgrade so that grade is always printed.
                $certdata->gradefmt = 1;
                // Modify gradefmt so that correct suffix is printed. 1=percentage, 2=points and 3=letter.

                $certrecord = new stdClass();
                $certrecord->timecreated = $certdata->citimecreated;

                // Date format.
                $dateformat = get_string('strftimedate', 'langconfig');

                // Required variables for output.
                $userid = $certrecord->userid = $certdata->fuserid;
                $certificateissueid = $certrecord->certificateissueid = $certdata->ciid;
                $contextid = $certrecord->contextid = $certdata->ctxid;
                $courseid = $certrecord->id = $certdata->cid;
                $coursename = $certrecord->fullname = $certdata->cfullname;
                $filename = $certrecord->filename = $certdata->ffilename;
                $certificatename = $certrecord->name = $certdata->crtname;
                $code = $certrecord->code = $certdata->cicode;

                // Retrieving grade and date for each certificate.
                $grade = certificate_get_grade($certdata, $certrecord, $userid, $valueonly = true);
                $date = $certrecord->timecreated = $certdata->citimecreated;

                // Linkable Direct course. Use $courselink for clickable course link.
                $courselink = html_writer::link(new moodle_url('/course/view.php', array('id' => $courseid)),
                "<strong>" . $coursename . "</strong>", array('fullname' => $coursename))  . "<br>" .
                "[" . $certificatename . "]";

                // Non - Linkable course title only. The course link isn't linkable.
                $link = "<strong>" . $coursename . "</strong>" . "<br>" .
                "[" . $certificatename . "]";

                 // Direct certificate download link.
                $filelink = file_encode_url($CFG->wwwroot.'/pluginfile.php', '/'
                . $contextid . '/mod_certificate/issue/' . $certificateissueid . '/' . $filename);
                $imglink = html_writer::empty_tag('img', array('src' => new moodle_url(
                '/blocks/download_certificates/pix/download.png'), 'alt' => "Please download", 'height' => 40, 'width' => 40));
                $outputlink = '<a href="'.$filelink.'" >' . $imglink . '</a>';

                $table->data[] = array ($link,  $grade, $code, userdate($date, $dateformat), $outputlink);

            }
            echo $OUTPUT->heading(get_string('download_certificates_heading', 'block_download_certificates'));
            echo '<br />';
            echo html_writer::table($table);

            // Download all previously certificates as Zipped file.
            $alldownloadslink = $CFG->wwwroot."/blocks/download_certificates/download_all_my_certificates.php";
            echo "<a href='".$alldownloadslink."'><button>"
            .get_string('download_certificates_downloadallcerts', 'block_download_certificates')."</button></a>";
        }
        echo $OUTPUT->footer();
