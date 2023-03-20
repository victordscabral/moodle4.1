<?php
/**
 * Funções utilitárias para plugin da Escola Modelo
 */

require_once($CFG->dirroot.'/config.php');
include_once($CFG->dirroot . '/blocks/escola_modelo/lib/httpful.phar');
include_once($CFG->dirroot . '/course/externallib.php');

define("CURSO_CUSTOMFIELD_PUBLICO",    "publico");
define("CURSO_CUSTOMFIELD_AREATEMATICA",    "areatematica");
define("CURSO_CUSTOMFIELD_CARGAHORARIA",    "cargahoraria");
define("CURSO_CUSTOMFIELD_SENADOR",    "senador");
define("CURSO_CUSTOMFIELD_MUNICIPIO",    "municipio");
define("CURSO_CUSTOMFIELD_TIPOOFICINA",    "tipooficina");
define("CURSO_CUSTOMFIELD_INSTRUTOR",    "instrutor");
define("CURSO_CUSTOMFIELD_MONITOR",    "monitor");

/**
 * Verifica se um curso é público, conforme critérios da EVL.
 * Pelas regras estabelecidas, um curso é público se foi marcado como público 
 * em campo customizado
 */
function cursoPublico($course) {
    global $DB;

    // Um curso é público se estiver marcado como público em campo personalizado
    $publico = (obtemCampoCustomizadoCurso($course->id, CURSO_CUSTOMFIELD_PUBLICO) == '1');
    return $publico;
}

function cursoCargaHoraria($course) {
    global $DB;

    // Um curso é público se estiver marcado como público em campo personalizado
    $ch = (obtemCampoCustomizadoCurso($course->id, CURSO_CUSTOMFIELD_CARGAHORARIA));
    return $ch;
}

function evlHabilitada() {
    $config = get_config('block_escola_modelo');
    return ($config->config_habilitar_evl == 1);
}

function evlSiglaEscola() {
    $config = get_config('block_escola_modelo');
    return $config->config_sigla_evl;
}

function evlAPIKey() {
    $config = get_config('block_escola_modelo');
    return $config->config_apikey;
}

function evlURLPortal() {
    $config = get_config('block_escola_modelo');
    return $config->config_url_portal_evl;
}

function evlURLWebServices() {
    $config = get_config('block_escola_modelo');
    return $config->config_url_ws_evl;
}

// TODO mover para outro local, usado também em certificado
function obtemCampoCustomizadoCurso($idCurso, $nomeCampo) {
    global $DB;

    $sql = "
        SELECT d.value, f.configdata::json->>'options' as options
        FROM mdl_course c
        JOIN mdl_context ctx
            ON c.id = ?
                AND ctx.contextlevel = 50
                AND ctx.instanceid = c.id
        JOIN mdl_customfield_field f
            ON f.shortname = ?
        JOIN mdl_customfield_data d
            ON d.fieldid = f.id
                AND d.contextid = ctx.id
        ";
    
    $valueArray = $DB->get_record_sql($sql, [$idCurso, $nomeCampo]);
    $value = $valueArray->value;
    $options = $valueArray->options;

    if($options == null) {
        return $value;
    } else {
        
        $optionsArray = preg_split("/\s*\n\s*/", trim($options));
        return $optionsArray[$value-1];
    }
}

/**
 * Registra um determinado curso na EVL, com o status informado
 * 
 * Formato do JSON: 
 * {
 *   "school": "Iniciais da escola",
 *   "course":
 *   {
 *      "name": "nome do curso",
 *      "url": "url do curso",
 *      "description": "descrição do curso",
 *      "logo":"endereco da logo",
 *      "ead_id": "id do curso no moodle",
 *      "visible": Visibilidade do curso(Público ou privado, de acordo com a categoria do moodle),
 *      "conteudista": "",
 *      "certificador": "",
 *      "carga_horaria": ""
 *   },
 *   "key": "k4B5YcbKa619ohu3wxk2xXbmtoxFuQqrwcKEOTAnZi7iy4tl9z"
 * }
 */
function atualizaCursoEVL($curso, $visivel = null) {
    global $DB, $CFG, $USER;

    if( evlHabilitada() ) {
        // Detecta status, caso ele não tenha sido especificado
        $visivel = $visivel ?? cursoPublico($curso);
        
        $ch = cursoCargaHoraria($curso);

        $school = $DB->get_record('course',array('id'=>'1'));        
        
        $uri = evlURLWebServices() . '/api/v1/cursos/registrar/';

        $obj = new StdClass();

        // Obtem a imagem do curso
        $urlLogo = '';
        //$course = $DB->get_record('course', array('id'=>$curso->id));
        if ($curso instanceof stdClass) {
            $course = new core_course_list_element($curso);
        }
        foreach ($course->get_course_overviewfiles() as $file) {
            $isimage = $file->is_valid_image();
            if($isimage) {
                $urlLogo = file_encode_url("$CFG->wwwroot/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            }
            break;            
        }

        $camposCurso = array( 
            "name" => $curso->fullname,
            "url" => "",
            "description" => $curso->summary,
            "logo" => "$urlLogo",
            "ead_id" => $curso->id,
            "visible" => $visivel,
            "conteudista" => "", 
            "certificador" => evlSiglaEscola(),
            "carga_horaria" => $ch,
            "category" => strtolower(obtemCampoCustomizadoCurso($curso->id, CURSO_CUSTOMFIELD_AREATEMATICA))
        );

        // Monta o JSON que será enviado ao Web Service
        $obj->school = evlSiglaEscola();
        $obj->course = $camposCurso;
        $obj->key = evlAPIKey();
        $json = json_encode($obj);

        $response = \Httpful\Request::post($uri)
            ->sendsJson()
            ->body($json)
            ->send();
        
        // Se o registro foi criado no servidor, registra em tabela de controle
        if(!$response->hasErrors()) {
            registraSincronizacaoCurso($curso);
        } else {
            mtrace("Erro sincronizando ". $curso->fullname . ": " . $response->code . " " );
        }
    }
}

/**
 * Insere ou atualiza registro da última sincronização de determinado curso
 */
function registraSincronizacaoCurso($curso) {
    global $DB;
    
    // VALUES (' . $curso->id . ',' . date('H:i:s') . ')
        // ON CONFLICT (' . $curso->id . ') DO UPDATE 
        //    SET time_sync = ?';
    $qry = '
        INSERT INTO {ilb_sync_course} (course_id, time_sync) 
        VALUES (?,?)
        ON CONFLICT (course_id) DO UPDATE 
           SET time_sync = ?';
    $params = array($curso->id, $curso->timemodified, $curso->timemodified);
    
    return $DB->execute($qry, $params);
}

/**
 * Identifica e atualiza registro de todos os cursos da categoria especificada
 * (excluindo subcategorias)
 */
function atualizaCategoriaEVL($categoria) {
    global $DB;

    if( evlHabilitada() ) {
        $visivel = categoriaPublica($categoria);
    
        $cursos = $DB->get_records('course', array('category'=>$categoria->id)); 
    
        foreach ($cursos as $curso) {
            atualizaCursoEVL($curso, $visivel);
        }
    }
}

//
// Matrículas
//

function atualizaMatriculas($syncStartTime, $courseId = 0) {
    global $DB;
    
	// Obtem todas as matrículas pendentes de sincronização
	$sqlEnrolments = '
        SELECT e.courseid, json_agg( u.username )::varchar as userlist, 
            (coalesce(publicevl.intvalue,0) <> 0) as publicevl
        FROM mdl_user_enrolments ue
            JOIN mdl_enrol e
                ON e.id = ue.enrolid
            JOIN mdl_user u
                ON u.id = ue.userid
            JOIN mdl_context ctx
                ON ctx.contextlevel = 50
                    AND ctx.instanceid = e.courseid
            JOIN mdl_customfield_data publicevl
                ON publicevl.contextid = ctx.id
                    AND publicevl.fieldid = 1
			LEFT JOIN mdl_ilb_sync_user_enrolments sue
                ON ue.id = sue.user_enrolment_id            
		WHERE (sue.user_enrolment_id is null
            OR ue.timemodified > sue.time_sync)
            AND (? = 0 OR e.courseid = ?)		
        GROUP BY e.courseid, (coalesce(publicevl.intvalue,0) <> 0)
	';

    $listaMatriculasCurso = $DB->get_records_sql($sqlEnrolments,
        array($courseId, $courseId));

    // Atualiza cada um dos cursos pendentes
	foreach($listaMatriculasCurso as $matricula) {
        // Ver uma maneira melhor de se transformar a string que está vindo em vetor
        $arrayusers = array_map('trim', explode(',', str_replace('"', "", str_replace(']', '', str_replace('[', '', $matricula->userlist)))));
		atualizaMatriculaEVL($matricula->courseid, $arrayusers, $matricula->publicevl);
    }
}

function atualizaMatriculaEVL($courseid, $userlist, $publicEVL) {
    global $DB, $CFG;

    if( evlHabilitada() ) {
        // Monta o JSON que será enviado ao Web Service
        $obj = new StdClass();
        $obj->course = $courseid;
        $obj->key = evlAPIKey();
        $obj->alunos = $userlist;
        $obj->sigla = evlSiglaEscola();
        $json = json_encode($obj);

        if ($publicEVL){
            $uri = $CFG->emURLWS . '/matricula/alunos/';
            $response = \Httpful\Request::post($uri)
                ->sendsJson()
                ->body($json)
                ->send();            
        } 
        // FIX ME -> Como será o comportamento ao transformar um curso em privado? 
        // Excluir os cursos que estão na EVL? 
        /*else {
            $uri = $CFG->emURLWS . '/api/v1/matricula/apagar/';
            $response = \Httpful\Request::post($uri)
                ->sendsJson()
                ->body($json)
                ->send();
        }*/
    }
}

// /**
//  * Insere ou atualiza registro da última sincronização de determinada matricula
//  */
// function registraSincronizacaoMatriculaUsuario($userEnrolment) {
//     global $DB;

//     $qry = '
//         INSERT INTO {ilb_sync_user_enrolments} (user_enrolment_id, time_sync) 
//         VALUES (?,?)
//         ON CONFLICT (user_enrolment_id) DO UPDATE 
//             SET time_sync = ?';
//     $params = array($userEnrolment->id, $userEnrolment->timemodified, $userEnrolment->timemodified);

//     return $DB->execute($qry, $params);
// }

//
// CERTIFICADOS
// 

function atualizaCertificadoEVL($certificado) {
    global $DB, $CFG, $USER;
    
    if( evlHabilitada() ) {
    
        $school = $DB->get_record('course',array('id'=>'1'));        
        
        $uri = evlURLWebServices() . '/api/v1/certificados/adicionar/';

        $obj = new StdClass();
        $certArray = array();

        // Gravação de certificado para envio ao Web Service da EVL
        $certItem = array(
            'course' => $certificado->course,
            'student' => $certificado->user,
            'date' => $certificado->timecreated,
            'grade' => $certificado->gradefmt,
            'code' => $certificado->id,
        );
        array_push($certArray, $certItem);
        $mainArray = array(
            'key' => evlAPIKey(),
            'school' => evlSiglaEscola(), 
            'certificates' => $certArray,
        );
        
        $json = json_encode($mainArray);
        
        $response = \Httpful\Request::post($uri)
            ->sendsJson()
            ->body($json)
            ->send();    

        // Se o registro foi criado no servidor, registra em tabela de controle
        if(!$response->hasErrors()) {
            registraSincronizacaoCertificado($certificado);
        } else {
            mtrace("Erro sincronizando certificado " . $certificado->code . ": " . $response->code . " " );
        }
    }
}

/**
 * Insere ou atualiza registro da última sincronização de determinado certificado
 */
function registraSincronizacaoCertificado($certificado) {
    global $DB;
    $qry = '
        INSERT INTO {ilb_sync_certificate} (certificate_id, time_sync) 
        VALUES (?,?)
        ON CONFLICT (certificate_id) DO UPDATE 
            SET time_sync = ?';
    $params = array($certificado->id, $certificado->timecreated, $certificado->timecreated);

    return $DB->execute($qry, $params);
}

//
// DADOS DA ESCOLA
// 

function atualizaDadosEscola($dadosEscola) {
    global $DB, $CFG, $USER;

    if( evlHabilitada() ) {
        $school = $DB->get_record('course',array('id'=>'1'));        
    
        $uri = evlURLWebServices() . '/api/v1/escolas/registrar/';

        $obj = new StdClass();

        // Gravação de certificado para envio ao Web Service da EVL
        $schoolArray = array(
            'name' => $dadosEscola->nome_escola,
            'url' => $dadosEscola->url_escola,
            'logo' => $dadosEscola->url_logo_escola,
            'initials' => $dadosEscola->sigla_escola,
            'key' => evlAPIKey()
        );
        
        $json = json_encode($schoolArray);
        
        $response = \Httpful\Request::post($uri)
            ->sendsJson()
            ->body($json)
            ->send();
        
        // Se o registro foi criado no servidor, registra em tabela de controle
        if($response->hasErrors()) {
            mtrace("Erro sincronizando dados da escola " . $dadosEscola->sigla_escola);
        }
    }
}


