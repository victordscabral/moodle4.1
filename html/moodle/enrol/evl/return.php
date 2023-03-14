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
 * Script utilitário para matrículas via EVL.
 *
 * @package    enrol_evl
 * @author     Interlegis
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require("../../config.php");
require_once("$CFG->dirroot/enrol/evl/lib.php");
require_once("../../blocks/escola_modelo/lib/httpful.phar");
require_once("../../blocks/escola_modelo/classes/util.php");

global $DB;

// Obtém parâmetros opcionais da URL
$id = optional_param('id', 0, PARAM_INT); // id do curso
$instanceid = optional_param('instanceid', 0, PARAM_INT); // id da instancia do enrol
$key = optional_param('key', 0, PARAM_ALPHANUM); // chave do usuário (idnumber em {user})

// Assegura que existe o curso em que usuário tentou se matricular
if (!$course = $DB->get_record("course", array("id" => $id))) {
    redirect($CFG->wwwroot);
}

// Assegura que usuário está logado
require_login();    

// Obtem url de redirecionamento, para acesso ao curso
if (isset($SESSION->wantsurl)) {
    $destination = $SESSION->wantsurl;
    unset($SESSION->wantsurl);
} else {
    $destination = "{$CFG->wwwroot}/course/view.php?id={$course->id}";
}

// Obtem contexto do curso
$context = context_course::instance($course->id);
// Obtem nome do curso
$fullname = format_string($course->fullname, true, array('context' => $context));

if( matriculadoNaEvl($key, $course->id, evlSiglaEscola()) ) {
    
    // Assegura que foi matriculado
    if (is_enrolled($context, null, '', true)) { 
        // Redireciona usuário para página do curso
        redirect($destination);
    } else {
        // Matricula usuário na Escola Modelo
        $roleid = $DB->get_field('role', 'id', array('shortname' => 'student'));
        $enrol_plugin = enrol_get_plugin('evl');
        $enrol_instance = $DB->get_record('enrol', array('id' => $instanceid));
        $enrol_plugin->enrol_user($enrol_instance, $USER->id, $roleid);

        if(is_enrolled($context, null, '', true)) {
            // Redireciona usuário para página do curso
            redirect($destination, get_string('enrol_success', 'enrol_evl', $fullname));
        } else {
            $PAGE->set_context($context);
            $PAGE->set_url($destination);
            echo $OUTPUT->header();
            notice(get_string('enrol_error', 'enrol_evl'), $destination);
            echo $OUTPUT->footer();
        }
    } 
} else {
    $PAGE->set_context($context);
    $PAGE->set_url($destination);
    echo $OUTPUT->header();
    notice(get_string('enrol_error', 'enrol_evl'), $destination);
    echo $OUTPUT->footer();
}

/**
 * Verifica se usuário está matriculado em determinado curso na EVL
 */
function matriculadoNaEvl($chaveUsuario, $curso, $escola) {
    $uri = new moodle_url(evlURLWebServices() . '/cursos/confirmar');

    $array = array( 
        "key" => $chaveUsuario,
        "school" => $escola,
        "course" => $curso
    );

    // Monta o JSON que será enviado ao Web Service
    $json = json_encode($array);

    $response = \Httpful\Request::post($uri)
        ->sendsJson()
        ->body($json)
        ->send();    

    return ($response = 'S');
}
