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
 * @package    enrol_apply
 * @copyright  emeneo.com (http://emeneo.com/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     emeneo.com (http://emeneo.com/)
 * @author     Johannes Burk <johannes.burk@sudile.com>
 */

defined('MOODLE_INTERNAL') || die();

//require_once('./lib.php');

require_once($CFG->libdir.'/formslib.php');
require_once($CFG->dirroot.'/user/editlib.php');
require_once($CFG->dirroot.'/user/profile/lib.php');

class enrol_apply_apply_form extends moodleform {
    protected $instance;

    /**
     * Overriding this function to get unique form id for multiple apply enrolments
     *
     * @return string form identifier
     */
    protected function get_form_identifier() {
        $formid = $this->_customdata->id.'_'.get_class($this);
        return $formid;
    }

    public function montaStringCurso($mform) {
        // // INICIO MGBF
        // $strInfoCurso = 'Um texto qualquer';
                
        // $campo = obtemCampoCustomizadoCurso($instance->courseid, 'sf_restringir_matricula');
        // $strInfoCurso .= $campo . $USER->profile['sf_cargo_chefia'];

        // profile_load_custom_fields($USER);
        // $mform->addElement('html', '<p>' . $strInfoCurso . '</p>');

        // global $PAGE;
        // $PAGE->requires->css('/enrol/apply/css/js-year-calendar.min.css', true);
        // $PAGE->requires->js_call_amd('enrol_apply/teste', 'init');
        // $mform->addElement('html', "<div style='overflow-x:visible !important' id='calendar'></div>");
        // // FIM MGBF

        $resultado = '';

        // Verifica se o curso é restrito a setores do Senado.
        if(true) { // restrito
            $mform->addElement('html', '<div class="alert alert-danger">Curso restrito</div>');
        } else {
            $mform->addElement('html', '<div class="alert alert-info">'.$count.' '.get_string('maxenrolled_tip_1', 'enrol_apply').' '.$instance->customint3.' '.get_string('maxenrolled_tip_2', 'enrol_apply').'</div>');
        }

        // Verifica se o curso é restrito a determinadas funções do Senado.
        if(true) { // restrito
            $mform->addElement('html', '<div class="alert alert-danger">Curso restrito</div>');
        } else {
            $mform->addElement('html', '<div class="alert alert-info">'.$count.' '.get_string('maxenrolled_tip_1', 'enrol_apply').' '.$instance->customint3.' '.get_string('maxenrolled_tip_2', 'enrol_apply').'</div>');
        }

        // Verifica se o curso é restrito a determinados tipos de vínculo do Senado.
        if(true) { // restrito
            $mform->addElement('html', '<div class="alert alert-danger">Curso restrito</div>');
        } else {
            $mform->addElement('html', '<div class="alert alert-info">'.$count.' '.get_string('maxenrolled_tip_1', 'enrol_apply').' '.$instance->customint3.' '.get_string('maxenrolled_tip_2', 'enrol_apply').'</div>');
        }

        // Informa valor do custo por aluno

        // Informa que servidor terá que assinar termo de responsabilidade

        return true;
    }

    public function definition() {
        global $USER, $DB;

        $mform = $this->_form;
        $instance = $this->_customdata;
        $this->instance = $instance;
        $plugin = enrol_get_plugin('apply');

        $heading = $plugin->get_instance_name($instance);
        $mform->addElement('header', 'selfheader', $heading);

        if ($instance->customint3 > 0) {
            $count = $DB->count_records('user_enrolments', array('enrolid' => $instance->id));
            if ($count < $instance->customint3) {
                $mform->addElement('html', '<div class="alert alert-info">'.$count.' '.get_string('maxenrolled_tip_1', 'enrol_apply').' '.$instance->customint3.' '.get_string('maxenrolled_tip_2', 'enrol_apply').'</div>');
            }
        }

        // Monta mensagens de acordo com atributos do curso e/ou aluno
        $this->montaStringCurso($mform);

        $mform->addElement('html', '<p>'.$instance->customtext1.'</p>');
        $comment_title = get_string('comment', 'enrol_apply');
        if($instance->customtext2 != ''){
            $comment_title = $instance->customtext2;
        }
        $mform->addElement('textarea', 'applydescription', $comment_title, 'cols="80"');
        $mform->setType('applydescription', PARAM_TEXT);

        // User profile...
        $editoroptions = $filemanageroptions = null;
        
        if ($instance->customint1) {
            useredit_shared_definition($mform, $editoroptions, $filemanageroptions, $USER);
        }

        if ($instance->customint2) {
            profile_definition($mform, $USER->id);
        }

        $mform->setDefaults((array)$USER);

        $this->add_action_buttons(false, 'Faça minha pré-matrícula');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $instance->courseid);

        $mform->addElement('hidden', 'instance');
        $mform->setType('instance', PARAM_INT);
        $mform->setDefault('instance', $instance->id);

    }

}
