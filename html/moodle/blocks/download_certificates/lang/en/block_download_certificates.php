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

$string['pluginname'] = 'Download Certificates';
$string['download_certificates'] = 'Download Certificates';
$string['download_certificates_tblheader_coursename'] = 'Course Name';
$string['download_certificates_tblheader_grade'] = 'Grade';
$string['download_certificates_tblheader_code'] = 'Code';
$string['download_certificates_tblheader_issuedate'] = 'Date Issued';
$string['download_certificates_tblheader_download'] = 'Download';
$string['download_certificates_yourcertificate'] = 'Your certificate - please download';
$string['download_certificates_footermessage'] = 'All My Certificates';
$string['download_certificates_nocertsissued'] = 'You do not have any certificates issued to you.';
$string['download_certificates_nofilefound'] = 'No files found.';
$string['download_certificates_heading'] = 'All Previously Issued Certificates';
$string['download_certificates_downloadallcerts'] = 'Download all my certificates';
$string['download_certificates_modulenameplural'] = 'Certificates';
$string['download_certificates:addinstance'] = 'Add a new report certificates block';
$string['download_certificates:myaddinstance'] = 'Add a new report certificates block to the My Moodle page';