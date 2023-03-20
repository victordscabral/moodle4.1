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
 * Listens for Enrol Confirmation from EVL and after that setup user enrolment in Moodle
 *
 * @package    enrol_evl
 * @author     Interlegis
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once("lib.php");
// require_once($CFG->libdir.'/eventslib.php');
require_once($CFG->libdir.'/enrollib.php');
require_once("../../blocks/escola_modelo/classes/util.php");

global $CFG;

// Obtem ID da instância do método de inscrição
$instanceid = optional_param('instanceid', 0, PARAM_INT);

// Obtém informações sobre o plugin de enrol e respectivo curso
$plugin = enrol_get_plugin('evl');
$plugin_instance = $DB->get_record("enrol", array("id" => $instanceid, "status" => 0));
$courseid = $plugin_instance->courseid;

// Monta url para redirecionamento após matrícula
$urlRedirect = new moodle_url('/enrol/evl/return.php', array('id' => $courseid, 'instanceid' => $instanceid));
// Monta url para matrícula
$urlEnrol = new moodle_url(evlURLWebServices() . '/cursos/registro', 
        array(
            'school' => evlSiglaEscola(),
            'school_course' => $courseid, 
            'key' => $USER->$idnumber, 
            'redirect' => $urlRedirect->out(false) // false evita codificar '&' na url de redirecionamento
        )
    );
redirect($urlEnrol);
