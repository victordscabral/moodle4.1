<?php
require_once("../../config.php");
require_once($CFG->dirroot.'/blocks/escola_modelo/classes/util.php');
include_once($CFG->dirroot . '/blocks/escola_modelo/lib/httpful.phar');

if(!evlHabilitada()) {
    die('Esta funcionalidade requer que a integração com a EVL esteja habilitada!');
}

header("Content-Type: application/json");

 // FIXME incluir APIKEY em todas as chamadas
 
 // Obtém todas as mensagens de uma conversa
 if(isset($_GET["conversationID"])) {
    $id = intval($_GET['conversationID']);
    $uri = evlURLWebServices() . '/api/v1/fale_conosco/mensagens';
    $response = \Httpful\Request::post($uri)
    ->sendsJson()
    ->body('{"conversation_id": "' . $id . '"}')
    ->send();
}
 // Adiciona uma nova mensagem a uma conversa
 elseif(isset($_REQUEST["addMessage"])) {
    $id = intval($_GET['addMessage']);
    $cpf = $USER->username;
    $description = $_GET['description'];

    $uri = evlURLWebServices() . '/api/v1/fale_conosco/adicionar';
    $response = \Httpful\Request::post($uri)
    ->sendsJson()
    ->body('{
      	"name": "' . $USER->username . '",
      	"email": "' . $USER->email . '",
      	"cpf": "' . $cpf . '",
      	"description": "' . $description . '",
      	"is_student": false,
        "conversation_id": "' . $id . '"
    }')
    ->send();
}
 // Pega todas as conversas de determinada escola, em determinada situação 
 // FIXME parametrizar limite e tratar paginação
 else {
  $was_answered = intval($_GET['answered'])== 0 ? 'false':'true';
  $was_answered = trim($was_answered, '"');
  $uri = evlURLWebServices() . '/api/v1/fale_conosco/conversa';
  $response = \Httpful\Request::post($uri)
  ->sendsJson()
  ->body(
    '{
      "school_initials": "' . evlSiglaEscola() . '",
      "page" : "1",
      "limit": "2000", 
      "was_answered": '. $was_answered .'
  }')
    ->send();
}

$data=$response->body;
echo json_encode($data);
