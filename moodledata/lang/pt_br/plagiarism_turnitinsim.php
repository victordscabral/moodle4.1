<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_turnitinsim', language 'pt_br', version '4.1'.
 *
 * @package     plagiarism_turnitinsim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = 'Acesso do estudante';
$string['accessoptions_help'] = 'Os estudantes terão acesso ao Relatório de Similaridade para seu envio depois que ele for gerado.';
$string['accessstudents'] = 'Permitir que os estudantes visualizem relatórios de similaridade';
$string['addtoindex'] = 'Indexar todos os envios';
$string['code'] = 'Código';
$string['connecttest'] = 'Testar conexão do Turnitin';
$string['connecttestfailed'] = 'Falha no teste de conexão.';
$string['connecttestsuccess'] = 'Teste de conexão bem-sucedido';
$string['dbexport'] = 'Exportação de banco de dados';
$string['dbexporttable'] = 'Exportar dados {$a}';
$string['defaultsettings'] = 'Configurações padrão';
$string['errortoolarge'] = 'Este arquivo não será enviado ao Turnitin, pois excede o tamanho máximo de {$a} permitido';
$string['eulaaccept'] = 'Eu aceito o EULA do Turnitin';
$string['eulaaccepted'] = 'Obrigado por aceitar o novo EULA do Turnitin. Todos os envios futuros serão enviados ao Turnitin para processamento.';
$string['eulaalreadyaccepted'] = 'Você já aceitou o último EULA do Turnitin.';
$string['euladecline'] = 'Eu não concordo com o EULA do Turnitin';
$string['euladeclined'] = 'Seus envios não serão enviados ao Turnitin, pois você não aceitou o Contrato de licença do usuário final do Turnitin.';
$string['eulaheader'] = 'Contrato de licença do usuário final do Turnitin';
$string['eulalink'] = 'Para que este envio seja encaminhado ao Turnitin, você deve aceitar o <a href="{$a}" target="_blank">Contrato de licença do usuário final do Turnitin</a>.';
$string['eulalinkgeneric'] = 'Se você quiser que qualquer um dos seus envios seja enviado ao Turnitin, você deve aceitar o <a href="{$a}" target="_blank">Contrato de licença do usuário final do Turnitin</a>.';
$string['eulalinkmodal'] = 'Para que este envio seja enviado ao Turnitin, você deve aceitar o <a href="#" class="eula_link">Contrato de licença do usuário final do Turnitin</a>.';
$string['eulanotrequired'] = 'Você não é obrigado a aceitar o EULA do Turnitin.';
$string['excludebiblio'] = 'Referências bibliográficas';
$string['excludeoptions'] = 'Excluir dos Relatórios de Similaridade';
$string['excludeoptions_help'] = 'As opções selecionadas não serão exibidas como correspondências nos Relatórios de similaridade.';
$string['excludequotes'] = 'Menções';
$string['faultcode'] = 'Código de falha';
$string['getwebhookfailure:message'] = 'Pode haver um problema com o webhook que você registrou no Turnitin para o plug-in de plágio. A tarefa agendada para verificar falhou ao se conectar ao Turnitin. Verifique seus registros.';
$string['getwebhookfailure:subject'] = 'Falha na verificação do webhook do Turnitin';
$string['indexoptions'] = 'Indexação de envios';
$string['indexoptions_help'] = 'Os envios indexados estarão disponíveis para comparação nos Relatórios de Similaridade.';
$string['invalidtablename'] = 'Não foi possível exportar a tabela {$a}';
$string['line'] = 'Linha';
$string['message'] = 'Mensagem';
$string['messageprovider:digital_receipt_instructor'] = 'Recibo digital do instrutor do Turnitin';
$string['messageprovider:digital_receipt_student'] = 'Recibo digital do estudante do Turnitin';
$string['messageprovider:get_webhook_failure'] = 'Falha na verificação do webhook do Turnitin';
$string['messageprovider:new_eula'] = 'Lançamento do novo EULA do Turnitin';
$string['neweula:message'] = 'A Turnitin liberou um novo EULA, para obter mais informações, clique <a href="{$a}">aqui</a>.';
$string['neweula:subject'] = 'Lançamento do novo EULA do Turnitin';
$string['pluginname'] = 'Plug-in de integridade do Turnitin';
$string['pluginsetup'] = 'Configuração';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = 'Para fazer um envio para o Turnitin, dados específicos do usuário precisam ser trocados entre o Moodle e o Turnitin. Para mais informações sobre os plugins Moodle e GDPR, visite: https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = 'O primeiro nome do usuário é enviado ao Turnitin em uma inicialização do Turnitin Viewer para que o usuário possa ser identificado.';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = 'O sobrenome do usuário é enviado ao Turnitin em uma inicialização do Turnitin Viewer para que o usuário possa ser identificado.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = 'Esteja ciente de que o conteúdo de um arquivo/envio é enviado ao Turnitin para processamento.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = 'O nome do arquivo enviado é enviado ao Turntin para que seja identificável.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = 'O título do envio é enviado ao Turntin para que seja identificável.';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = 'Informações que vinculam um envio do Moodle a um envio do Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = 'Um hash usado pelo Moodle para identificar o arquivo enviado.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = 'ID que identifica o envio para o tipo de módulo relevante.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = 'A pontuação de similaridade geral do envio.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = 'Um registro de data e hora indicando quando o envio do usuário foi encaminhado ao Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'A ID usada pelo Turnitin para identificar o envio.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = 'A ID do usuário que fez um envio.';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = 'Informações que vinculam um usuário do Moodle a um usuário do Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = 'A última versão do EULA do Turnitin aceita pelo usuário.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = 'O idioma em que o usuário aceitou pela última vez o EULA do Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = 'Um carimbo de data/hora indicando quando o usuário aceitou o EULA do Turnitin pela última vez.';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'A ID usada pelo Turnitin para fazer referência ao usuário.';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = 'A ID do usuário que fez um envio.';
$string['queuedrafts'] = 'Processar rascunhos de envios';
$string['queuedrafts_help'] = 'Observe que os rascunhos de envios não serão indexados no Turnitin para verificação';
$string['receiptsinstructor:message'] = 'Um envio intitulado <strong>{$a->submission_title}</strong> feito ao módulo <strong>{$a->module_name}</strong> na aula <strong>{$a->course_fullname}</strong> foi enviado ao Turnitin.<br /><br />ID do envio: <strong>{$a->submission_id}</strong><br />Data do envio: <strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = 'Envio encaminhado ao Turinitin';
$string['receiptstudent:message'] = 'Prezado(a) {$a->firstname}  {$a->lastname},<br /><br />Seu arquivo <strong>{$a->submission_title}</strong> ao módulo <strong>{$a->module_name}</strong> na aula <strong>{$a->course_fullname}</strong> foi enviado com sucesso ao Turnitin em <strong>{$a->submission_date}</strong>. A ID do envio é <strong>{$a->submission_id}</strong>.<br /><br />Obrigado por usar o Turnitin,<br /><br />Equipe do Turnitin';
$string['receiptstudent:subject'] = 'Este é o seu recibo digital do Turnitin';
$string['reportgen0'] = 'Imediatamente';
$string['reportgen1'] = 'Imediatamente e gerar novamente na data de entrega';
$string['reportgen2'] = 'Data de entrega';
$string['reportgenoptions'] = 'Gerar Relatórios de Similaridade';
$string['reportgenoptions_help'] = '<strong>Imediatamente:</strong> Os Relatórios de Similaridade serão gerados imediatamente após o envio do arquivo.<br/><br/><strong>Na data de entrega:</strong> Os Relatórios de Similaridade serão gerados apenas na data de entrega da tarefa.<br/><br/><strong>Imediatamente e na data de entrega:</strong> Um Relatório de Similaridade será gerado imediatamente após o envio do arquivo. O Relatório de Similaridade será gerado novamente na data de entrega da tarefa. Esta opção pode ser usada para verificar o conluio em uma aula.';
$string['resubmittoturnitin'] = 'Reenviar ao Turnitin';
$string['savesuccess'] = 'Alterações salvas';
$string['settingslearnmore'] = 'Conheça as configurações do Turnitin';
$string['submissiondisplayerror:cannotextracttext'] = 'Relatório indisponível';
$string['submissiondisplayerror:cannotextracttext_help'] = 'Não foi possível gerar um relatório para este envio. Isso pode ocorrer porque esse tipo de arquivo não pode gerar um relatório ou não há texto suficiente.';
$string['submissiondisplayerror:corruptfile'] = 'Arquivo corrompido';
$string['submissiondisplayerror:corruptfile_help'] = 'O arquivo carregado parece estar corrompido.';
$string['submissiondisplayerror:eulanotaccepted'] = 'EULA não aceito';
$string['submissiondisplayerror:eulanotaccepted_help'] = 'O EULA do Turnitin precisa ser aceito pelo remetente antes que o envio possa ser verificada quanto à similaridade.';
$string['submissiondisplayerror:filelocked'] = 'Arquivo bloqueado';
$string['submissiondisplayerror:filelocked_help'] = 'O arquivo carregado requer uma senha para ser aberto.';
$string['submissiondisplayerror:generic'] = 'Arquivo não enviado ao Turnitin';
$string['submissiondisplayerror:generic_help'] = 'Esse arquivo não foi enviado ao Turnitin. Consulte o administrador do sistema.';
$string['submissiondisplayerror:notsent'] = 'Arquivo não enviado ao Turnitin';
$string['submissiondisplayerror:notsent_help'] = 'Este arquivo não foi enviado ao Turnitin porque o Turnitin não estava ativado no momento do envio. Modifique ou faça um novo envio se quiser encaminhar para o Turnitin.';
$string['submissiondisplayerror:processingerror'] = 'Erro de processamento';
$string['submissiondisplayerror:processingerror_help'] = 'Ocorreu um erro não especificado ao processar os envios.';
$string['submissiondisplayerror:toolarge'] = 'O arquivo é muito grande';
$string['submissiondisplayerror:toolarge_help'] = 'Este arquivo é muito grande para ser enviado ao Turnitin. Para verificar a originalidade, envie um arquivo com menos de 100 MB.';
$string['submissiondisplayerror:toolittletext'] = 'Texto insuficiente';
$string['submissiondisplayerror:toolittletext_help'] = 'O envio não possui texto suficiente para gerar um Relatório de Similaridade (um envio deve conter pelo menos 20 palavras)';
$string['submissiondisplayerror:toomanypages'] = 'Muitas páginas';
$string['submissiondisplayerror:toomanypages_help'] = 'O envio tem muitas páginas para gerar um Relatório de Similaridade (um envio não pode conter mais de 400 páginas)';
$string['submissiondisplayerror:toomuchtext'] = 'Muito texto';
$string['submissiondisplayerror:toomuchtext_help'] = 'O envio possui muito texto para gerar um Relatório de Similaridade (depois que o texto extraído é convertido em UTF-8, o envio deve conter menos de {$a} de texto)';
$string['submissiondisplayerror:unknown'] = 'Erro no seu envio';
$string['submissiondisplayerror:unknown_help'] = 'Ocorreu um erro desconhecido no seu envio e este arquivo não foi enviado ao Turnitin. Consulte o administrador do sistema';
$string['submissiondisplayerror:unsupportedfiletype'] = 'Tipo de arquivo não aceito';
$string['submissiondisplayerror:unsupportedfiletype_help'] = 'O tipo de arquivo carregado não é aceito.';
$string['submissiondisplaystatus:awaitingeula'] = 'Aguardando EULA';
$string['submissiondisplaystatus:cannotextracttext'] = 'Relatório indisponível';
$string['submissiondisplaystatus:error'] = 'Erro';
$string['submissiondisplaystatus:notsent'] = 'Não enviado';
$string['submissiondisplaystatus:pending'] = 'Pendente';
$string['submissiondisplaystatus:queued'] = 'Em fila';
$string['submissiondisplaystatus:unknown'] = 'Erro desconhecido';
$string['taskadminupdate'] = 'Atualizar configuração local do plugin de integridade do Turnitin';
$string['taskgetreportscores'] = 'Obter pontuações do relatório para o plug-in de integridade do Turnitin';
$string['taskoutputenabledfeaturesnotretrieved'] = 'Não foi possível recuperar os recursos do Turnitin ativados';
$string['taskoutputenabledfeaturesretrievalfailure'] = 'A chamada de recursos ativados para o Turnitin falhou';
$string['taskoutputenabledfeaturesretrieved'] = 'Recursos habilitados para o Turnitin recuperados';
$string['taskoutputfailedconnection'] = 'Ocorreu um problema ao conectar-se à API do Turnitin';
$string['taskoutputfailedcvlaunchurl'] = 'Ocorreu um problema ao solicitar um URL de inicialização do Turnitin Viewer da API do Turnitin para a ID de envio: {$a}';
$string['taskoutputfailedreportrequest'] = 'Ocorreu um problema ao solicitar uma geração de relatório de originalidade da API do Turnitin para a ID de envio: {$a}';
$string['taskoutputfailedscorerequest'] = 'Ocorreu um problema ao solicitar uma pontuação no relatório de originalidade da API do Turnitin para a ID de envio: {$a}';
$string['taskoutputfailedupload'] = 'Ocorreu um problema ao carregar um arquivo na API do Turnitin para a ID de envio: {$a}';
$string['taskoutputfileuploaded'] = 'Arquivo carregado no envio do Turnitin: {$a}';
$string['taskoutputlatesteulanotretrieved'] = 'Não foi possível recuperar a versão mais recente do EULA';
$string['taskoutputlatesteularetrievalfailure'] = 'A chamada da versão mais recente do EULA falhou.';
$string['taskoutputlatesteularetrieved'] = 'Versão do EULA {$a} recuperado.';
$string['taskoutputpluginnotconfigured'] = 'A tarefa para {$a} não pôde ser executada porque o plug-in de integridade doTurnitin não está configurado. <br/>Vá para a página de configuração do plug-in na Administração do site para adicionar suas credenciais da API do Turnitin.';
$string['taskoutputsubmissioncreated'] = 'Envio criado no Turnitin: {$a}';
$string['taskoutputsubmissionnotcreatedeula'] = 'Não foi possível criar o envio no Turnitin porque o remetente não aceitou o EULA.';
$string['taskoutputsubmissionnotcreatedgeneral'] = 'Não foi possível criar o envio no Turnitin. Consulte seus registros.';
$string['taskoutputwebhookcreated'] = 'Webhook criado. O Turnitin enviará retornos de chamada para {$a}';
$string['taskoutputwebhookcreationfailure'] = 'A solicitação de criação do Webhook falhou. Consulte seus registros.';
$string['taskoutputwebhookdeleted'] = 'O Webhook {$a} foi excluído.';
$string['taskoutputwebhookdeletefailure'] = 'Não foi possível excluir o Webhook. Consulte seus registros.';
$string['taskoutputwebhooknotcreated'] = 'Não foi possível criar o Webhook. Consulte seus registros.';
$string['taskoutputwebhooknotdeleted'] = 'O Webhook {$a} não pode ser excluído.';
$string['taskoutputwebhooknotretrieved'] = 'Não foi possível recuperar o Webhook {$a}. Um novo webhook será criado';
$string['taskoutputwebhookretrievalfailure'] = 'A chamada de recuperação do Webhook {$a} falhou.';
$string['taskoutputwebhookretrieved'] = 'Webhook {$a} recuperado. O Webhook está ativo.';
$string['tasksendqueuedsubmissions'] = 'Enviar arquivos na fila do plug-in de integridade do Turnitin';
$string['turnitinapikey'] = 'Chave da API Turnitin';
$string['turnitinapiurl'] = 'URL da API do Turnitin';
$string['turnitinconfig'] = 'Configuração do plug-in';
$string['turnitinenablelogging'] = 'Ativar modo de diagnóstico';
$string['turnitinfeatures'] = 'Recursos de integridade do Turnitin';
$string['turnitinfeatures::eulanotrequired'] = 'A aceitação do EULA do Turnitin não é exigida pelos usuários';
$string['turnitinfeatures::eularequired'] = 'A aceitação do EULA do Turnitin é necessária para todos os usuários';
$string['turnitinfeatures::header'] = 'Recursos de integridade do Turnitin';
$string['turnitinfeatures::moreinfo'] = 'Para obter mais informações sobre os recursos e pacotes ativados disponíveis no Turnitin, consulte <a href="http://www.turnitin.com" target="_blank"> http://www.turnitin.com </a>.';
$string['turnitinfeatures::repositories'] = 'Repositórios verificados em relação:';
$string['turnitinfeatures::viewoptions'] = 'Opções do Turnitin Viewer:';
$string['turnitinhideidentity'] = 'Ocultar a identidade do estudante do Turnitin';
$string['turnitinmodenabled'] = 'Ativar a integridade do Turnitin para {$a}';
$string['turnitinpluginenabled'] = 'Ativar o Turnitin';
$string['turnitinpluginsettings'] = 'Configurações do plug-in de integridade do Turnitin';
$string['turnitinsim'] = 'Plug-in de integridade do Turnitin';
$string['turnitinsim:enable'] = 'Ativar a integridade do Turnitin';
$string['turnitinsim:viewfullreport'] = 'Ver Relatório de Originalidade';
$string['turnitinsiminternet'] = 'Verificar com conteúdo da Internet';
$string['turnitinsimprivate'] = 'Verificar com conteúdo privado';
$string['turnitinviewermatchsubinfo'] = 'Permita que os instrutores da sua instituição visualizem informações de envio para fazer correspondências internas';
$string['turnitinviewersavechanges'] = 'Salvar alterações do visualizador';
$string['turnitinviewerviewfullsource'] = 'Permita que os instrutores da sua instituição visualizem o texto completo dos envios para fazer correspondências internas';
$string['viewapilog'] = 'Ver registros de API do {$a}';
$string['viewerpermissionferpa'] = 'As seguintes permissões afetam como os dados podem ser compartilhados em sua instituição. Esses dados são de responsabilidade exclusiva da sua instituição. Portanto, ao definir essas permissões, reflita se elas cumprem totalmente as políticas da sua instituição em relação aos registros dos estudantes.';
$string['viewerpermissionoptions'] = 'Permissões do visualizador';
$string['viewlogs'] = 'Registros';
$string['webhook_description'] = 'Webhook para {$a}';
$string['webhookincorrectsignature'] = 'O retorno de chamada do Webhook falhou porque a assinatura está incorreta';
