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
 * Verify certificate block
 * --------------------------
 * Verify certificate based on the unique codes displayed on issued certificates.
 * Full details of the issued certificate is displayed including profile picture.
 * Mostly cosmetic changes to the original codes from Jean-Michel Védrine.
 * Original Autor & Copyright - Jean-Michel Védrine | 2014
 *
 * @copyright           2015 onwards Manieer Chhettri | Marie Curie, UK | <manieer@gmail.com>
 * @author              Manieer Chhettri | Marie Curie, UK | <manieer@gmail.com> | 2015
 * @package             block_verify_certificate
 * @license             http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once("../../config.php");
require_once($CFG->dirroot . '/mod/certificate/lib.php');
require_once($CFG->dirroot.'/mod/certificate/locallib.php');
require_once("$CFG->dirroot/completion/completion_completion.php");
require_once("$CFG->dirroot/enrol/locallib.php");

$id = required_param('certnumber', PARAM_ALPHANUM);   // Certificate code to verify.

$PAGE->set_pagelayout('standard');
$strverify = get_string('verifycertificate', 'block_verify_certificate');
$PAGE->set_url('/blocks/verify_certificate/index.php', array('certnumber' => $id));
$context = context_system::instance();
$PAGE->set_context($context);

// Print the header.
$PAGE->navbar->add($strverify);
$PAGE->set_title($strverify);
$PAGE->set_heading($strverify);
$PAGE->requires->css('/blocks/verify_certificate/printstyle.css');
$PAGE->requires->css('/blocks/verify_certificate/styles.css');
echo $OUTPUT->header();

$ufields = user_picture::fields('u');

$sql = "SELECT ci.timecreated AS citimecreated,
               ci.code, ci.certificateid, ci.userid, $ufields, c.*, u.id AS id, u.*
          FROM {certificate_issues} ci
    INNER JOIN {user} u
            ON u.id = ci.userid
    INNER JOIN {certificate} c
            ON c.id = ci.certificateid
         WHERE ci.code = ?";
$certificates = $DB->get_records_sql($sql, array($id));

function getFormattedCPFFromUsername($userid) {
	global $DB;
	$user = $DB->get_record("user", array("id" => $userid));
	return mask($user->username, '###.###.###-##');
}

function mask($val, $mask)
{
    if(validatecpf($val)) {
	    $maskared = '';
	    $k = 0;
	    for($i = 0; $i<=strlen($mask)-1; $i++){
	    
		if($mask[$i] == '#'){
		    if(isset($val[$k]))
			   $maskared .= $val[$k++];
		}
		else
		{
		       if(isset($mask[$i]))
			    $maskared .= $mask[$i];
		}
	    }
	    return $maskared;
    } else {
	 return "";
    }
}


function validatecpf($cpf) {
	// Verifica se um numero foi informado.
	if (is_null($cpf)) {
	    return false;
	}
	if (!is_numeric($cpf)) {
	    return false;
	}
	//$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

	// Verifica se o numero de digitos informados eh igual a 11.
	if (strlen($cpf) != 11) {
	    return false;
	} else if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' ||
	    $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' ||
	    $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' ||
	    $cpf == '99999999999') {
	    return false;
	} else {
	    // Calcula os digitos verificadores para verificar se o CPF eh valido.

		$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
		// Valida tamanho
		if (strlen($cpf) != 11)
			return false;
		// Calcula e confere primeiro dígito verificador
		for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
			$soma += $cpf{$i} * $j;
		$resto = $soma % 11;
		if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
			return false;
		// Calcula e confere segundo dígito verificador
		for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
			$soma += $cpf{$i} * $j;
		$resto = $soma % 11;
	
		$resultado = $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
		return $resultado;
	}
}


if (! $certificates) {
    echo $OUTPUT->box_start('generalbox boxaligncenter');
    echo '<div id="block_verify_certificate"><br>';
    echo '<p class="notVerified">' . get_string('certificate', 'block_verify_certificate')
         . ' "' . $id . '" ' . '</p>';
    echo '<div class="wrapper-box"><br>';
    echo '<div class="left"><br>' .get_string('notfound', 'block_verify_certificate').'</div>';
    echo '<div class="right"><img src="pix/certnotverified.png" border="0" align="center"></div>';
    echo '</div></div>';
    echo $OUTPUT->box_end();
} else {
    echo $OUTPUT->box_start('generalbox boxaligncenter');
    echo "<a title=\""; print_string('printerfriendly', 'certificate');
    echo "\" href=\"#\" onclick=\"window.print ()\"><div class=\"printicon\">";
    echo "<img src=\"pix/printicon.png\" height=\"40\" width=\"40\" border=\"0\" align=\"right\"></img></a></div>";

    // Print Section.
    foreach ($certificates as $certdata) {
        echo '<p class = "verified">' . get_string('certificate', 'block_verify_certificate')
        . ' "' . $certdata->code . '" ' . '</font></b></p>';
        echo '<table width ="100%" cellpadding="5px"><tr><td>';
        echo '<div class="userprofilebox clearfix"><div class="profilepicture">';
        echo $OUTPUT->user_picture($certdata, array('size' => 150));
        echo '</div>';
        echo '</td><td>';
        echo '<p><b>' . get_string('to', 'block_verify_certificate') . ': </b>' . fullname($certdata) . '<br />';
        // Date format.
        $dateformat = get_string('strftimedate', 'langconfig');
	

        $certdata->printdate = 1;
        $certrecord = new stdClass();
        $certrecord->timecreated = $certdata->citimecreated;
        $certrecord->code = $certdata->code;
        $certrecord->userid = $certdata->userid;
        $certrecord->id = $certdata->id;
		$userid = $certrecord->userid;

		// Exibe CPF, se username for CPF        
		#require_once("$CFG->dirroot/user/profile/lib.php");
		#require_once("$CFG->dirroot/user/profile/field/cpf/field.class.php");
		#$formfield = new profile_field_cpf('8', $certdata->userid);
		#$cpf = $formfield->display_data();
		$cpf = getFormattedCPFFromUsername($userid);
		if ($cpf) {
            echo '<p><b>' . "CPF" . ': </b>' . $cpf . '<br /></p>';
        } 

		// Exibe  curso        
		$course = $DB->get_record('course', array('id' => $certdata->course));
        if ($course) {
			$nome_acao = certificate_obtemCampoCustomizadoCurso($course->id, 'nome_acao_certificado');
			if(empty(trim($nome_acao))) {
				$nome_acao = mb_strtoupper($course->fullname, 'UTF-8');
			}
			echo '<p><b>' . get_string('course', 'block_verify_certificate') . ': </b>' . $nome_acao . '<br />';
        }
	
		// Curso sem tutoria: início é matrícula, final é timeend de course_completions
		// Curso com tutoria com turma: início e fim vem da matrícula da turma
		// Curso com tutoria sem turma: início e fim vem da configuração do curso
		// Demais cursos: início e fim vem da configuração do curso

		$periodo_certificado = certificate_obtemCampoCustomizadoCurso($course->id, 'periodo_certificado');
		if(empty(trim($periodo_certificado))) {
			$periodo_certificado = 'Matrícula até conclusão';
		}

		$enrol_manager = new course_enrolment_manager($PAGE, $course);
		$user_enrol = end($enrol_manager->get_user_enrolments($userid));
		$enrol = $DB->get_record('enrol', array('id' => $user_enrol->enrolid));
		if(substr( $course->idnumber, 0, 3 ) == 'ST-' || $periodo_certificado == 'Matrícula até conclusão') {
			$cc = new completion_completion(array('userid'=>$certrecord->userid, 'course'=>$certdata->course));
			$start_date = $user_enrol->timestart;
			$end_date   = $cc->timecompleted;
			$type = 'ST';
		} elseif(substr( $course->idnumber, 0, 3 ) == 'CT-' || $periodo_certificado == 'Duração do curso') {
			$type = 'CT';
			$start_date = $course->startdate;
			$end_date   = $course->enddate;
		} else {
			$type = '';
			if($periodo_certificado == 'Sem período') {
				$start_date = null;
				$end_date   = $course->enddate;
			} else {
				$start_date = $course->startdate;
				$end_date   = $course->enddate;
			}
		}
	
        // Retrieving grade and date for each certificate.
        $grade = certificate_get_grade($certdata, $course, $userid, $valueonly = true);
        //$date = $start_date; //$certrecord->timecreated = $certdata->citimecreated;

        if (($type = 'ST' || $type = 'CT') && $start_date && $end_date) {
            echo "<p><b>PERÍODO: </b>" . userdate($start_date, $dateformat) . " a " . userdate($end_date, $dateformat) . '<br /></p>';
        } elseif ($end_date) {
            echo "<p><b>DATA: </b>" . userdate($end_date, $dateformat) . '<br /></p>';
		} else {
			echo "<p><b>DATA: </b>" . userdate($certdata->citimecreated, $dateformat) . '<br /></p>';
		}

		if ($course && $certdata->printgrade > 0) {
            echo '<p><b>' . get_string('grade', 'block_verify_certificate') . ': </b>' . $grade . '<br /></p>';
        }
        if ($course->summary) {
            echo "<br /><p>$course->summary</p>";
        }
        echo '</td><td>';
        echo "<img src=\"pix/certverified.png\" border=\"0\" align=\"center\"></img>";
        echo '</td></tr></table></br>';
        echo '<p><b>' . get_string('check', 'block_verify_certificate') . '</b></p>';
    }
    echo $OUTPUT->box_end();
}
echo $OUTPUT->footer();
