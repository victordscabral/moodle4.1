<?php

require_once("$CFG->libdir/formslib.php");

class searchform extends moodleform {
  function definition() {
    global $CFG;

    $mform = $this->_form; // Don't forget the underscore!

    $attributes=array('size'=>'20');
    $selSituacao = $mform->addElement('select', 'situacao', get_string('situacao', 'block_fale_conosco'),
      array('Não respondidas', 'Respondidas'), $attributes);

    $selSituacao->setMultiple(false);

    $attributes=array('size'=>'20');
    // $txtUsuario = $mform->addElement('text', 'usuario', get_string('usuario', 'block_fale_conosco'), $attributes);
    // $mform->addElement('button', 'Atualizar', get_string("atualizar", "block_fale_conosco"));

  }
}
