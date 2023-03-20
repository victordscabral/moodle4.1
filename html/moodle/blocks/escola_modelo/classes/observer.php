<?php

require_once($CFG->dirroot.'/config.php');

include_once($CFG->dirroot . '/blocks/escola_modelo/lib/httpful.phar');
include_once('util.php');

class block_escola_modelo_observer {
    
    //
    // EVENTOS RELACIONADOS A CURSOS
    //

    /**
     * Trata evento de criação de curso.
     * Como estamos criando o curso agora, é possível sabermos com certeza que ele
     * ainda não existe na EVL e sua visibilidade (público/privado). Então somente
     * será chamado o web service se o curso for público.
     */
    public static function course_created(\core\event\base $event) {
        global $DB, $CFG;
        $curso = $DB->get_record($event->objecttable,array('id'=>$event->objectid));

        if(cursoPublico($curso)) {
            atualizaCursoEVL($curso, true);
        }
    }

    /**
     * Trata evento de atualização de curso.
     * A atualização de curso em uma Escola Modelo sempre deve chamar o web service,
     * pois não temos certeza do status do curso na EVL.
     */
    public static function course_updated(\core\event\base $event) {
        global $DB, $CFG;
        $curso = $DB->get_record($event->objecttable,array('id'=>$event->objectid));
        atualizaCursoEVL($curso);
    }
    
    /**
     * Trata evento de remoção de um curso.
     * TODO: tratar situações em que isso pode ou não ocorrer, bem como a forma adequada de tratar o evento.
     */
    public static function course_deleted(\core\event\base $event) {
        global $DB, $CFG;
        $curso = $DB->get_record($event->objecttable,array('id'=>$event->objectid));
        
        // Por enquanto, atualizamos o curso na EVL, porém o mesmo fica invisível
        atualizaCursoEVL($curso, false);
    }

    // EVENTOS RELACIONADOS A CERTIFICADOS    
    public static function certificate_created(\core\event\base $event) {
        atualizaCertificadoEVL($event->other);
    }


    //
    // EVENTOS RELACIONADOS A CATEGORIAS
    //

    /**
     * Trata evento de modificação de categoria.
     * A princípio, toda mudança de categoria deve ser tratada com a atualização de todos
     * os cursos nela contidos, pois a alteração pode ser nos critérios de visibilidade, 
     * e não é possível saber a visibilidade anterior da categoria, no momento da
     * chamada desta função.
     * Outro ponto importante é que são tratados apenas os cursos inseridos diretamente 
     * na categoria, e não em categorias filhas.
     */
    public static function course_category_updated(\core\event\base $event) {
        global $DB, $CFG;
        $categoria = $DB->get_record($event->objecttable,array('id'=>$event->objectid));
        //A forma mais segura de fazê-lo é modificar timemodified de todos os cursos,
//        de modo que na próxima sincronização eles tenham seu status modificado
  //      atualizaCategoriaEVL($categoria);
    }

    
    //
    // EVENTOS RELACIONADOS A MATRÍCULAS
    //
    // Retirado pois supõe-se que matrículas serão feitas apenas na EVL

    // public static function user_enrolment_created(\core\event\base $event) {
    //     global $DB, $CFG;
    //     $ue = $DB->get_record($event->objecttable,array('id'=>$event->objectid));

    //     atualizaMatriculaEVL($ue, true);
    // }

    // public static function user_enrolment_updated(\core\event\base $event) {
    //     global $DB, $CFG;
    //     $ue = $DB->get_record($event->objecttable,array('id'=>$event->objectid));
        
    //     atualizaMatriculaEVL($ue);
    // }

    // public static function user_enrolment_deleted(\core\event\base $event) {
    //     global $DB, $CFG;
    //     $ue = $DB->get_record($event->objecttable,array('id'=>$event->objectid));

    //     atualizaMatriculaEVL($ue, false);
    // }
}
