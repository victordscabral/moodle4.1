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
 * Strings for component 'publication', language 'pt_br', version '4.1'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Adicionar arquivos';
$string['allfiles'] = 'Todos os arquivos';
$string['allowedfiletypes'] = 'Tipos de arquivos permitidos';
$string['allowedfiletypes_err'] = 'Verifique entrada! Extensões ou separadores de arquivo inválidos';
$string['allowedfiletypes_help'] = 'Os tipos de arquivos permitidos podem ser limitados inserindo uma lista separada por vírgulas dos tipos MIME, por exemplo "video/mp4, audio/mp3, image/png, image/jpeg", ou extensões de arquivos, incluindo ponto, por exemplo ".png, .jpg". Se o campo for deixado vazio, todos os tipos de arquivos serão permitidos.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes da tarefa e o formulário de envio estarão disponíveis a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Desde';
$string['allowsubmissionsfromdate_import'] = 'Aprovação desde';
$string['allowsubmissionsfromdate_upload'] = 'Envio possível desde';
$string['allowsubmissionsfromdateh'] = 'Período para Envio/Aprovação';
$string['allowsubmissionsfromdateh_help'] = 'Você pode determinar o período no qual os estudantes podem enviar arquivos ou aprovar a publicação destes. Durante este período estudantes podem editar seus arquivos e retirar sua aprovação para publicação.';
$string['allowsubmissionsfromdatesummary'] = 'Esta tarefa aceitará envios a partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Sempre mostrar descrição';
$string['alwaysshowdescription_help'] = 'Se desabilitado, a Descrição de Tarefa acima ficará visível para os estudantes apenas na data "Aceitar envios a partir de"';
$string['approval_timeover'] = 'Você pode mudar sua aprovação apenas durante o período de alteração.';
$string['approved'] = 'Aprovado';
$string['approveusers'] = 'Visível para todos';
$string['assignment'] = 'Tarefa';
$string['assignment_help'] = 'Escolha a tarefa para importar arquivos. No momento, tarefas em grupo não são suportados e, portanto, não são selecionáveis.';
$string['assignment_notfound'] = 'A tarefa de onde os arquivos foram importados não foi encontrada.';
$string['assignment_notset'] = 'Nenhuma tarefa selecionada.';
$string['autoimport'] = 'Sincronizar automaticamente com a Tarefa';
$string['autoimport_help'] = 'Se ativado, novos envios na Tarefa correspondente, serão importados automaticamente no módulo Pasta do Estudante. (Opcional) A aprovação do estudante precisa ser obtida novamente para novos arquivos.';
$string['availability'] = 'Período para Envio/Aprovação';
$string['choose'] = 'Favor escolher...';
$string['configautoimport'] = 'Se preferir que envios dos estudantes sejam automaticamente importadas em instâncias da Pasta do Estudante. Este recurso pode ser ativado/desativado para cada Pasta do Estudante separadamente.';
$string['configmaxbytes'] = 'Tamanho máximo definido para arquivos na Pasta do Estudante.';
$string['configmaxfiles'] = 'Número de anexos máximo permitido por usuário.';
$string['configobtainstudentapproval'] = 'Os arquivos estarão visíveis após o consentimento do estudante.';
$string['configobtainteacherapproval'] = 'Os arquivos dos estudantes estarão visíveis para todos os outros participantes.';
$string['configrequiremodintro'] = 'Desabilite esta opção se não deseja forçar usuários a inserir descrição de cada atividade.';
$string['courseuploadlimit'] = 'Limite de envio do curso';
$string['cutoffdate'] = 'Data de fechamento';
$string['cutoffdate_help'] = 'Se ativada, não serão aceitos envios depois desta data sem prorrogação.';
$string['cutoffdate_import'] = 'Última aprovação até';
$string['cutoffdate_upload'] = 'Última possibilidade de envio até';
$string['cutoffdatefromdatevalidation'] = 'Data de fechamento deve ser posterior a data de início dos envios';
$string['cutoffdatevalidation'] = 'A data de fechamento não pode ser anterior à data limite';
$string['details'] = 'Detalhes';
$string['downloadall'] = 'Baixar todos os arquivos como ZIP';
$string['duedate'] = 'até';
$string['duedate_help'] = 'É o prazo de envio da tarefa. Os envios continuarão sendo permitidos após esta data, mas qualquer tarefa enviada após será marcados como atrasada. Para impedir envios após uma certa data, defina a data de fechamento da tarefa.';
$string['duedate_import'] = 'Aprovado até';
$string['duedate_upload'] = 'Envio até';
$string['duedatevalidation'] = 'Data limite deve ser posterior ao período que são permitidos envios.';
$string['edit_timeover'] = 'Arquivos podem ser editados apenas durante o período de alteração.';
$string['edit_uploads'] = 'Editar/Enviar arquivos';
$string['entiresperpage'] = 'Participantes mostrados por página';
$string['extensionduedate'] = 'Prorrogação de data limite';
$string['extensionnotafterduedate'] = 'Prorrogação de data limite deve ser após data inicial';
$string['extensionnotafterfromdate'] = 'A data da prorrogação deve ser posterior à data limite';
$string['extensionto'] = 'Prorrogar até';
$string['filedetails'] = 'Detalhes';
$string['filesofthesetypes'] = 'Arquivos destes tipos podem ser adicionados:';
$string['go'] = 'Executar';
$string['grantextension'] = 'Prorrogar prazo';
$string['groupapprovalmode'] = 'Modo de aprovação de grupo';
$string['groupapprovalmode_all'] = 'Todos os membros do grupo tem que aprovar';
$string['groupapprovalmode_help'] = 'Aqui você define se a aprovação de todos os membros do grupo ou apenas a aprovação de pelo menos um membro do grupo é necessária para que os arquivos fiquem visíveis. Os arquivos só ficarão visíveis após a aprovação por todos os membros do grupo ou pelo menos um membro do grupo.';
$string['groupapprovalmode_single'] = 'pelo menos um membro tem que aprovar';
$string['guideline'] = 'Vísivel para todos:';
$string['hidden'] = 'Oculto';
$string['importfrom_err'] = 'Escolha uma tarefa da qual você deseja importar.';
$string['maxbytes'] = 'Tamanho máximo de anexo.';
$string['maxfiles'] = 'Número máximo de anexos';
$string['mode'] = 'Modo';
$string['mode_help'] = 'Escolha se os estudantes podem enviar arquivos para a pasta ou se os arquivos serão obtidos de uma determinada tarefa.';
$string['modeimport'] = 'Obter os arquivos de uma tarefa.';
$string['modeupload'] = 'estudantes podem enviar arquivos';
$string['modulename'] = 'Pasta do Estudante';
$string['modulename_help'] = 'A Pasta do Estudante tem as seguintes funcionalidades:

* Participantes podem carregar arquivos que estarão disponíveis para outros participantes imediatamente ou após verificar os arquivos e dar seu consentimento.
* Uma tarefa pode ser escolhida como base de uma Pasta do Estudante O professor pode decidir quais arquivos da tarefa estarão visíveis para todos os participantes. Professores podem também deixar participantes decidirem se seus arquivos ficarão visíveis para os outros.';
$string['modulenameplural'] = 'Pastas dos Estudantes';
$string['myfiles'] = 'Arquivos próprios';
$string['mygroupfiles'] = 'Arquivos dos meus grupos';
$string['name'] = 'Nome da Pasta do Estudante';
$string['noentries'] = 'Sem registros';
$string['nofiles'] = 'Nenhum arquivo disponível';
$string['nofilestozip'] = 'Nenhum arquivo para comprimir (zip)';
$string['nonexistentfiletypes'] = 'Os seguintes tipos de arquivos não foram reconhecidos: {$a}';
$string['nopublicationsincourse'] = 'Não existem instâncias da Pasta do Estudante neste curso.';
$string['nothing_to_show_groups'] = 'nada para mostrar - nenhum grupo disponível';
$string['nothing_to_show_users'] = 'nada para mostrar - nenhum estudante disponível';
$string['nothingtodisplay'] = 'Nenhum registro para mostrar';
$string['notice'] = '<strong>Atenção:</strong>';
$string['notice_groupimportrequireallapproval'] = 'Defina se seus arquivos estarão disponíveis para todos. Todos os membros do grupos devem aprovar antes do arquivo ficar visível.';
$string['notice_groupimportrequireoneapproval'] = 'Defina se seus arquivos estarão disponíveis para todos. Uma única aprovação de qualquer membro do grupo é suficiente para o arquivo ficar visível. Por favor discuta com o grupo internamente se seus arquivos devem estar visíveis ou não antes de aprová-los!';
$string['notice_importnoapproval'] = 'Os seguintes arquivos estão visíveis para todos.';
$string['notice_importrequireapproval'] = 'Defina se seus arquivos estarão disponíveis para todos.';
$string['notice_uploadnoapproval'] = 'Todos os arquivos estarão imediatamente visíveis para todos após o envio. O professor reserva-se o direito de ocultar arquivos publicados a qualquer momento.';
$string['notice_uploadrequireapproval'] = 'Todos os arquivos enviados estarão visíveis apenas após a revisão do professor.';
$string['obtainstudentapproval'] = 'Obter aprovação';
$string['obtainstudentapproval_help'] = 'Defina se a aprovação dos estudantes será necessária: <br><ul><li> sim - arquivos estarão visíveis para todos apenas após a aprovação do estudante. O professor pode selecionar estudantes/arquivos individuais para aprovação.</li><li> não - a aprovação dos estudantes não será obtida através do Moodle. A visibilidade do arquivo é unicamente decisão do professor.</li></ul>';
$string['obtainteacherapproval'] = 'Aprovado por padrão';
$string['obtainteacherapproval_help'] = 'Defina se arquivos estarão visíveis imediatamente após envio ou não: <br><ul><li> sim - todos os arquivos estarão visíveis para todos.</li><li> não - arquivos serão publicados apenas após aprovação do professor</li></ul>';
$string['optionalsettings'] = 'Opções';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administração da Pasta do Estudante';
$string['pluginname'] = 'Pasta do Estudante';
$string['privacy:metadata:approval'] = 'Se o membro do grupo aprovou ou rejeitou o arquivo.';
$string['privacy:metadata:contenthash'] = 'Hash SHA1 do conteúdo do arquivo, usado para determinar se o arquivo foi alterado.';
$string['privacy:metadata:extduedates'] = 'Armazena informação sobre datas limite substituídas/prorrogadas de mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'A data limite efetiva para o usuário pode ser substituída/prorrogada.';
$string['privacy:metadata:fileid'] = 'Identificador de arquivo.';
$string['privacy:metadata:filename'] = 'Nome de arquivo.';
$string['privacy:metadata:files'] = 'Armazena informações (identificador, a quem pertence, de onde veio, hash do conteúdo, nome do arquivo e se foi aprovado pelo professor e/ou estudante) sobre os arquivos carregados/importados em mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Armazena informações sobre aprovação de membros do grupo ou rejeição de arquivos importados do envio do grupo.';
$string['privacy:metadata:publicationfileexplanation'] = 'Arquivos e textos online convertidos de envios para este plugin são armazenados via API de arquivos do Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Quantos registros devem ser mostrados em uma página única de tabela!';
$string['privacy:metadata:studentapproval'] = 'Se o estudante aprovou ou rejeitou o arquivo.';
$string['privacy:metadata:teacherapproval'] = 'Se o professor aprovou ou rejeitou o arquivo.';
$string['privacy:metadata:timecreated'] = 'A hora e data em que o registro foi criado.';
$string['privacy:metadata:timemodified'] = 'A data e hora mais recente em que o registro foi atualizado/modificado.';
$string['privacy:metadata:type'] = 'Marca a origem de um arquivo (enviado pelo estudante, importado de um envio de uma tarefa ou texto online convertido do envio de uma tarefa).';
$string['privacy:metadata:userid'] = 'Identificador de usuário';
$string['privacy:path:files'] = 'arquivos';
$string['privacy:path:resources'] = 'recursos';
$string['privacy:type:import'] = 'arquivo importado';
$string['privacy:type:onlinetext'] = 'texto online importado';
$string['privacy:type:upload'] = 'arquivo enviado';
$string['publication:addinstance'] = 'Adicionar nova Pasta do Estudante';
$string['publication:approve'] = 'Decidir a visibilidade de arquivos para todos os estudantes';
$string['publication:grantextension'] = 'Prorrogar o prazo';
$string['publication:upload'] = 'Enviar arquivos para uma Pasta do Estudante';
$string['publication:view'] = 'Ver Pasta do Estudante';
$string['publicfiles'] = 'Arquivos públicos';
$string['published_aftercheck'] = 'não, apenas após aprovado por um professor';
$string['published_immediately'] = 'sim imediatamente, sem ser aprovado por um professor';
$string['rejected'] = 'Rejeitado';
$string['rejectusers'] = 'Oculto para todos';
$string['requiremodintro'] = 'Requer descrição de atividade';
$string['reset'] = 'Reverter';
$string['reset_userdata'] = 'Todos os dados';
$string['resetstudentapproval'] = 'Reconfigurar status';
$string['save_changes'] = 'Salvar alterações';
$string['saveapproval'] = 'Salvar aprovação';
$string['savestudentapprovalwarning'] = 'Tem certeza que deseja salvar estas alterações? Você não poderá mudar o status uma vez que este é definido.';
$string['saveteacherapproval'] = 'Salvar aprovação';
$string['search:activity'] = 'Pasta do Estudante - informação de atividade';
$string['show_details'] = 'Mostrar detalhes';
$string['status'] = 'Status';
$string['student_approve'] = 'aprovar';
$string['student_approved'] = 'aprovado';
$string['student_pending'] = 'oculto (não aprovado)';
$string['student_reject'] = 'rejeitar';
$string['student_rejected'] = 'rejeitado';
$string['studentapproval'] = 'Status';
$string['studentapproval_help'] = 'A coluna de status representa a resposta dos estudantes à aprovação:
* ? - aprovação pendente
* ✓ - aprovação concedida
* ✖ - aprovação recusada';
$string['teacher_approved'] = 'visível (aprovado)';
$string['teacher_pending'] = 'confirmação pendente';
$string['teacher_rejected'] = 'recusado';
$string['teacherapproval'] = 'Aprovação';
$string['total'] = 'total';
$string['updatefiles'] = 'Atualizar arquivos';
$string['updatefileswarning'] = 'Os arquivos de um estudante serão atualizados com o envio de uma tarefa na Pasta do Estudante.  Os arquivos dos estudantes também serão substituídos, se forem excluídos ou atualizados - as configurações do estudante relacionadas à visibilidade não serão alteradas.';
$string['visibility'] = 'visível para todos';
$string['visible'] = 'visível';
$string['visibleforstudents'] = 'visível para todos';
$string['visibleforstudents_no'] = 'Este arquivo não está visível para os estudantes';
$string['visibleforstudents_yes'] = 'Estudantes podem visualizar este arquivo';
$string['warning_changefromobtainstudentapproval'] = 'Se executar esta alteração, apenas você poderá decidir quais arquivos estarão visíveis para todos os estudantes. Não é pedida a aprovação dos estudantes. Todos os arquivos marcados como aprovados serão visíveis para todos os estudantes independentemente das decisões dos mesmos.';
$string['warning_changefromobtainteacherapproval'] = 'Após ativar esta opção, todos os arquivos carregados estarão visíveis para outros participantes. Todos os arquivos carregados estarão visíveis. Você pode manualmente ocultar estes arquivos para certos estudantes.';
$string['warning_changetoobtainstudentapproval'] = 'Se executar esta alteração, os estudantes serão perguntados sobre sua aprovação para todos os arquivos marcados como visíveis. Arquivos serão ocultos apenas após a aprovação dos estudantes.';
$string['warning_changetoobtainteacherapproval'] = 'Após desativar esta opção, arquivos enviados não estarão visíveis para outros participantes automaticamente. Você terá de determinar quais os arquivos estarão visíveis. Arquivos já visíveis se tornarão ocultos.';
$string['withselected'] = 'Com os selecionados...';
$string['zipusers'] = 'Baixar como ZIP';
