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
 * Strings for component 'enrol_evl', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    enrol_evl
 * @author     Interlegis
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

$string['enrol_success'] = 'Matriculado com sucesso no curso "{$a}"';
$string['enrol_error'] = 'Erro ao realizar a matrícula na EVL';
$string['pluginname'] = 'enrol_EVL';
$string['pluginname_desc'] = 'Permite realizar matrículas em cursos disponíveis na Escola Virtual do Legislativo (EVL)';


$string['assignrole'] = 'Assign role';
$string['businessemail'] = 'EVL business email';
$string['businessemail_desc'] = 'The email address of your business EVL account';
$string['businesstoken'] = 'EVL business token';
$string['businesstoken_desc'] = 'The token of your business EVL account';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['currency_desc'] = 'Brazil currency : Brazilian Real';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during EVL enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid (in seconds). If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['error:unauthorized'] = 'This host is not authorized to use EVL API.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:EVL_enrolment'] = 'EVL enrolment messages';
$string['needsignuporlogin'] = 'You need to sign up or log in before make a payment.';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['EVL:config'] = 'Configure EVL enrol instances';
$string['EVL:manage'] = 'Manage enrolled users';
$string['EVL:unenrol'] = 'Unenrol users from course';
$string['EVL:unenrolself'] = 'Unenrol self from the course';
$string['EVLaccepted'] = 'EVL payments accepted';
$string['paymentrequired'] = 'You must make a payment of {$a->currency} {$a->cost} via EVL to access this course.';
$string['sendpaymentbutton'] = 'Send payment via EVL';
$string['status'] = 'Allow EVL enrolments';
$string['status_desc'] = 'Allow users to use EVL to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
