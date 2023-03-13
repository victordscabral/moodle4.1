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
 * Strings for component 'assign', language 'pt_br', version '4.1'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Anexos de atividades de tarefa';
$string['activitydate:submissionsdue'] = 'Vencimento:';
$string['activitydate:submissionsopen'] = 'Abre:';
$string['activitydate:submissionsopened'] = 'Aberto:';
$string['activityeditor'] = 'Descrição da atividade';
$string['activityeditor_help'] = 'As ações que o estudante deve completar para esta Tarefa. Isso é mostrado somente na página de envio onde o estudante edita e envia seu trabalho.';
$string['activityoverview'] = 'Você tem tarefas que precisam de atenção';
$string['addattempt'] = 'Permitir outra tentativa';
$string['addnewattempt'] = 'Adicionar uma nova tentativa';
$string['addnewattempt_help'] = 'Isto irá criar uma nova tentativa em branco para você trabalhar.';
$string['addnewattemptfromprevious'] = 'Adicionar uma nova tentativa baseada na tentativa anterior';
$string['addnewattemptfromprevious_help'] = 'Isto irá copiar o conteúdo de sua tentativa anterior para uma nova tentativa para você trabalhar.';
$string['addnewgroupoverride'] = 'Adicionar sobreposição de grupo';
$string['addnewuseroverride'] = 'Adicionar sobreposição de usuário';
$string['addsubmission'] = 'Adicionar envio';
$string['addsubmission_help'] = 'Você ainda não fez um envio.';
$string['allocatedmarker'] = 'Avaliador Definido';
$string['allocatedmarker_help'] = 'Avaliador definido para este envio';
$string['allowsubmissions'] = 'Permitir que usuário continue realizando envios para esta tarefa.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes da tarefa e formulário de envio ficarão disponíveis a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permite envios a partir de';
$string['allowsubmissionsfromdate_help'] = 'Caso habilitado, estudantes não terão disponibilidade para enviar antes desta data. Caso desabilitado, estudantes poderão enviar.';
$string['allowsubmissionsfromdatesummary'] = 'Esta tarefa aceitará envios a partir de <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permite mudanças no envio';
$string['alwaysshowdescription'] = 'Sempre exibir descrição';
$string['alwaysshowdescription_help'] = 'Se desabilitado, a descrição acima somente ficará visível aos estudantes a partir da data configurada em "Permitir envios a partir de".';
$string['applytoteam'] = 'Habilitar notas e feedback para todo grupo';
$string['assign:addinstance'] = 'Adicionar uma nova tarefa';
$string['assign:editothersubmission'] = 'Editar o envio de outro estudante';
$string['assign:exportownsubmission'] = 'Exportar a própria apresentação';
$string['assign:grade'] = 'Avaliar tarefa';
$string['assign:grantextension'] = 'Conceder prorrogação';
$string['assign:manageallocations'] = 'Gerenciar avaliadores atribuídos para envios';
$string['assign:managegrades'] = 'Revisar e liberar notas';
$string['assign:manageoverrides'] = 'Gerenciar sobreposições de tarefa';
$string['assign:receivegradernotifications'] = 'Receber notificações de postagem de tarefas';
$string['assign:releasegrades'] = 'Liberar notas';
$string['assign:revealidentities'] = 'Revelar identidade dos estudantes no caso de avaliação anônima';
$string['assign:reviewgrades'] = 'Revisar notas';
$string['assign:showhiddengrader'] = 'Veja a identidade de uma avaliador oculto';
$string['assign:submit'] = 'Enviar tarefa em definitivo';
$string['assign:view'] = 'Ver tarefa';
$string['assign:viewblinddetails'] = 'Ver identidades de estudantes quando os envios anônimos estiverem habilitados';
$string['assign:viewgrades'] = 'Ver notas';
$string['assign:viewownsubmissionsummary'] = 'Ver o próprio resumo da submissão';
$string['assignfeedback'] = 'Plugin de feedback';
$string['assignfeedbackpluginname'] = 'Plugin de feedback';
$string['assignmentisdue'] = 'Tarefa encerrada';
$string['assignmentmail'] = '{$a->grader} escreveu comentários sobre a seguinte tarefa que você envioiu em \'{$a->assignment}\'

Leia os comentários anexos à tarefa:

{$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} escreveu comentários sobre a tarefa que você enviou: \'<i>{$a->assignment}</i>\'<br /><br />
Você pode vê-lo anexado à <a href="{$a->url}">tarefa enviada</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} publicou alguns comentários na tarefa enviada em \'{$a->assignment}\'. Você pode visualizar estes comentários incluídos em sua tarefa';
$string['assignmentname'] = 'Nome da tarefa';
$string['assignmentplugins'] = 'Plugins de tarefas';
$string['assignmentsperpage'] = 'Tarefas por página';
$string['assignsubmission'] = 'Plugin para envio';
$string['assignsubmissionpluginname'] = 'Plugin para envio';
$string['assigntimeleft'] = 'Tempo restante';
$string['attemptheading'] = 'Tentativa {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Tentativas anteriores';
$string['attemptnumber'] = 'Número da tentativa';
$string['attemptreopenmethod'] = 'Tentativas adicionais';
$string['attemptreopenmethod_help'] = 'Esta configuração determina se um estudante pode fazer outras tentativas na tarefa. Para cada tentativa, a nota e o feedback são salvos e podem ser visualizados pelo professor e pelo estudante. As opções disponíveis são:

* Nunca - apenas uma tentativa é possível.
* Manualmente - Tentativas adicionais podem ser permitidas por um professor.
* Automaticamente até passar - Tentativas adicionais são permitidas automaticamente até que o estudante obter a nota para ser aprovado, definida no livro de notas para esta tarefa.';
$string['attemptreopenmethod_manual'] = 'Manualmente';
$string['attemptreopenmethod_none'] = 'Nunca';
$string['attemptreopenmethod_untilpass'] = 'Automaticamente até que passe';
$string['attemptsettings'] = 'Configurações de tentativa';
$string['availability'] = 'Disponibilidade';
$string['back'] = 'Voltar';
$string['backtoassignment'] = 'Voltar para tarefa';
$string['batchoperationconfirmaddattempt'] = 'Permitir uma outra tentativa para os envios selecionados?';
$string['batchoperationconfirmdownloadselected'] = 'Fazer o download dos envios selecionados?';
$string['batchoperationconfirmgrantextension'] = 'Conceder uma prorrogação para todos os envios selecionados?';
$string['batchoperationconfirmlock'] = 'Travar todos os envios selecionados?';
$string['batchoperationconfirmremovesubmission'] = 'Remover envios selecionados?';
$string['batchoperationconfirmreverttodraft'] = 'Reverter envios selecionados para rascunho?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Definir a alocação de notas para todos os envios selecionados?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Definir estado no fluxo de avaliação para todos os envios selecionados?';
$string['batchoperationconfirmunlock'] = 'Destravar todos os envios selecionados ?';
$string['batchoperationlock'] = 'Travar envios';
$string['batchoperationreverttodraft'] = 'Reverter envios para rascunho';
$string['batchoperationsdescription'] = 'Com selecionados...';
$string['batchoperationunlock'] = 'desbloquear envios';
$string['batchsetallocatedmarker'] = 'Definir avaliador para {$a} usuário(s) selecionado(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Definir estado de fluxo de avaliação para {$a} usuário(s) selecionado(s).';
$string['beginassignment'] = 'Começar tarefa';
$string['blindmarking'] = 'Envios anônimos';
$string['blindmarking_help'] = 'Envios anônimos ocultam a identidade dos estudantes para os  avaliadores. As configurações de envios anônimos serão bloqueadas assim que um envio for realizado ou uma nota for atribuída a esta tarefa.';
$string['blindmarkingenabledwarning'] = 'Envios anônimos estão habilitados para esta atividade. Notas não serão adicionadas ao livro de notas até que a identidade dos estudantes seja revelada via menu de ação de avaliação.';
$string['cachedef_overrides'] = 'Informações de substituição de usuário e grupo';
$string['calendardue'] = '{$a} está marcado(a) para esta data';
$string['calendargradingdue'] = '{$a} está com avaliação marcada para esta data';
$string['caneditsubmission'] = 'Você pode modificar seu envio após o vencimento do prazo, mas ele será marcado como atrasado.';
$string['changefilters'] = 'Modificar filtros';
$string['changeuser'] = 'Modificar usuário';
$string['choosegradingaction'] = 'Ação de avaliação';
$string['choosemarker'] = 'Escolha ...';
$string['chooseoperation'] = 'Escolha operação';
$string['clickexpandreviewpanel'] = 'Clique para expandir o painel de revisão';
$string['collapsegradepanel'] = 'Contrair painel de notas';
$string['collapsereviewpanel'] = 'Contrair painel de revisão';
$string['comment'] = 'Comentário';
$string['completiondetail:submit'] = 'Fazer um envio';
$string['completionsubmit'] = 'Estudante deve fazer um envio';
$string['configshowrecentsubmissions'] = 'Todos podem ver listas de novos envios no relatório de atividades recentes.';
$string['confirmbatchgradingoperation'] = 'Você tem certeza que quer {$a->operation} para {$a->count} estudante(s)?';
$string['confirmstart'] = 'Você tem {$a} para concluir esta tarefa. Quando você começar, o cronômetro iniciará a contagem regressiva e não poderá ser pausado.';
$string['confirmsubmission'] = 'Tem certeza de que deseja enviar seu trabalho para a classificação? Você não será capaz de fazer mais modificações.';
$string['confirmsubmissionheading'] = 'Confirmar envio';
$string['conversionexception'] = 'Não foi possível converter tarefa. O problema foi: {$a}.';
$string['couldnotconvertgrade'] = 'Não foi possível converter a nota da tarefa para o usuário {$a}.';
$string['couldnotconvertsubmission'] = 'Não foi possível converter o envio de tarefa para o usuário {$a}.';
$string['couldnotcreatecoursemodule'] = 'Não foi possível criar o módulo do curso.';
$string['couldnotcreatenewassignmentinstance'] = 'Não foi possível criar uma nova instância de tarefa.';
$string['couldnotfindassignmenttoupgrade'] = 'Não foi possível encontrar a antiga instância para fazer a migração.';
$string['crontask'] = 'Processamento em segundo plano para o módulo de tarefa';
$string['currentassigngrade'] = 'Nota atual na tarefa';
$string['currentattempt'] = 'Esta é a tentativa  {$a} .';
$string['currentattemptof'] = 'Esta é a tentativa {$a->attemptnumber} ({$a->maxattempts} tentativas permitidas).';
$string['currentgrade'] = 'Nota atual no livro de notas';
$string['cutoffdate'] = 'Data limite';
$string['cutoffdate_help'] = 'Se configurado, a tarefa não aceitará envios após a data escolhida sem prorrogação.';
$string['cutoffdatecolon'] = 'Data limite: {$a}';
$string['cutoffdatefromdatevalidation'] = 'A data limite não pode ser anterior à data de permitida para envios.';
$string['cutoffdatevalidation'] = 'A data limite não pode ser anterior à data de entrega.';
$string['defaultlayout'] = 'Restaurar o layout padrão';
$string['defaultsettings'] = 'Configuração padrão de tarefa';
$string['defaultsettings_help'] = 'Estas configurações definem os padrões para todas as novas tarefas.';
$string['defaultteam'] = 'Grupo padrão';
$string['deleteallsubmissions'] = 'Apagar todos os envios';
$string['description'] = 'Descrição';
$string['disabled'] = 'Desabilitado';
$string['downloadall'] = 'Fazer o download de todas as tarefas enviadas';
$string['downloadasfolders'] = 'Baixar envios em pastas';
$string['downloadasfolders_help'] = 'Os envios das tarefas podem ser baixados em pastas. Cada envio é colocado em uma pasta separada, com a estrutura de pastas mantida para todas as subpastas e os arquivos não são renomeados.';
$string['downloadselectedsubmissions'] = 'Fazer o download dos envios selecionados';
$string['duedate'] = 'Data de entrega';
$string['duedate_help'] = 'Define a data em que a tarefa deverá ser entregue. Envios ainda serão permitidos depois desta data, mas qualquer tarefa enviada depois desta data será marcada como atrasada. Para impedir envios depois de uma certa data, defina a data limite.';
$string['duedatecolon'] = 'Data de entrega: {$a}';
$string['duedatereached'] = 'A data de entrega desta tarefa já passou';
$string['duedatevalidation'] = 'A data de entrega não pode ser anterior à data de \'permitir envios a partir de\'.';
$string['duplicateoverride'] = 'Duplicar sobreposição';
$string['editaction'] = 'Ações ...';
$string['editattemptfeedback'] = 'Edite a nota e feedback para a tentativa número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Você está editando o feedback para uma tentativa anterior. Esta é a tentativa {$a->attemptnumber}  de {$a->totalattempts} permitidas.';
$string['editingstatus'] = 'Editar estado';
$string['editonline'] = 'Editar online';
$string['editoverride'] = 'Editar sobreposição';
$string['editsubmission'] = 'Editar envio';
$string['editsubmission_help'] = 'Você ainda pode fazer alterações no seu envio';
$string['editsubmissionother'] = 'Editar envio para {$a}';
$string['enabled'] = 'Habilitado';
$string['enabletimelimit'] = 'Habilitar tarefas cronometradas';
$string['enabletimelimit_help'] = 'Se habilitado, você pode definir um limite de tempo na página de configurações da tarefa.';
$string['errornosubmissions'] = 'Não existem submissões para download.';
$string['errorquickgradingvsadvancedgrading'] = 'As avaliações não foram salvas pois esta tarefa está atualmente usando avaliação avançada';
$string['errorrecordmodified'] = 'As avaliações não foram salvas pois alguém modificou um ou mais registros após você ter carregado a página.';
$string['eventallsubmissionsdownloaded'] = 'Todos os envios estão sendo baixados.';
$string['eventassessablesubmitted'] = 'Um envio foi submetido.';
$string['eventbatchsetmarkerallocationviewed'] = 'Configuração em massa de avaliador visualizada';
$string['eventbatchsetworkflowstateviewed'] = 'Configuração de estado de workflow visualizado.';
$string['eventextensiongranted'] = 'Uma prorrogação foi concedida.';
$string['eventfeedbackupdated'] = 'Comentário atualizado';
$string['eventfeedbackviewed'] = 'Comentário visualizado';
$string['eventgradingformviewed'] = 'Formulário de notas visualizado';
$string['eventgradingtableviewed'] = 'Tabela de notas visualizada';
$string['eventidentitiesrevealed'] = 'As identidades foram reveladas.';
$string['eventmarkerupdated'] = 'O avaliador alocado foi atualizado.';
$string['eventoverridecreated'] = 'Sobreposição de tarefa criada';
$string['eventoverridedeleted'] = 'Sobreposição de tarefa excluída';
$string['eventoverrideupdated'] = 'Sobreposição de tarefa atualizada';
$string['eventremovesubmissionformviewed'] = 'Remover a confirmação do envio visualizada.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Página de confirmação de identidades reveladas visualizada.';
$string['eventstatementaccepted'] = 'O usuário aceitou o acordo da tarefa.';
$string['eventsubmissionconfirmationformviewed'] = 'Formulário de confirmação de submissão visualizado.';
$string['eventsubmissioncreated'] = 'Submissão criada.';
$string['eventsubmissionduplicated'] = 'O usuário duplicou seu envio.';
$string['eventsubmissionformviewed'] = 'Formulário de submissão visualizado.';
$string['eventsubmissiongraded'] = 'O envio foi avaliado.';
$string['eventsubmissionlocked'] = 'Os envios foram travados para um usuário.';
$string['eventsubmissionstatusupdated'] = 'O status do seu envio foi atualizado.';
$string['eventsubmissionstatusviewed'] = 'O status da submissão foi visualizado.';
$string['eventsubmissionunlocked'] = 'O envio foi destravado para um usuário.';
$string['eventsubmissionupdated'] = 'O usuário salvou um envio.';
$string['eventsubmissionviewed'] = 'Envio visualizado.';
$string['eventworkflowstateupdated'] = 'O stado do workflow foi atualizado.';
$string['expandreviewpanel'] = 'Expandir painel de revisão';
$string['extensionduedate'] = 'Extensão da data de entrega';
$string['extensionnotafterduedate'] = 'A extensão deve ser posterior à data de entrega';
$string['extensionnotafterfromdate'] = 'A data extendida deve ser posterior à data de encerramento';
$string['feedback'] = 'Feedback';
$string['feedbackavailableanonhtml'] = 'Você tem um novo feedback sobre o seu
envio de tarefa para \'<i>{$a->tarefa}</i>\' <br /><br />
Você pode vê-lo anexado ao <a href="{$a->url}">envio de tarefa</a>.';
$string['feedbackavailableanonsmall'] = 'Novo feedback para tarefa {$a->assignment}';
$string['feedbackavailableanontext'] = 'Você tem um novo feedback sobre seu envio para a tarefa \'{$a->assignment}\'

Você pode vê-lo anexado ao envio da sua tarefa:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} postou feedback em seu envio de tarefa para \'<i>{$a->assignment}</i>\' <br/><br/>
Você pode visualizar em seu <a href="{$a->url}">envio</a>.';
$string['feedbackavailablesmall'] = '{$a->username} retornou feedback para a tarefa {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} postou feedback em seu envio de tarefa para \'<i>{$a->assignment}</i>\'


Você pode visualizar em seu envio:

{$a->url}';
$string['feedbackplugin'] = 'Plugin Feedback';
$string['feedbackpluginforgradebook'] = 'Plugin de feedback que publicará comentários no livro de notas';
$string['feedbackpluginforgradebook_help'] = 'Apenas um plugin de feedback para tarefa pode enviar feedback no livro de notas.';
$string['feedbackplugins'] = 'Plugins de Feedback';
$string['feedbacksettings'] = 'Configurações de Feedback';
$string['feedbacktypes'] = 'Tipos de feedback';
$string['filesubmissions'] = 'Envio de arquivos';
$string['filter'] = 'Filtro';
$string['filterdraft'] = 'Rascunho';
$string['filtergrantedextension'] = 'Extensão concedida';
$string['filternone'] = 'Sem filtro';
$string['filternotsubmitted'] = 'Não enviado';
$string['filterrequiregrading'] = 'Requer notas';
$string['filtersubmitted'] = 'Enviada';
$string['fixrescalednullgrades'] = 'A atividade contém algumas notas errôneas. Você pode <a href="{$a->link}">consertar automaticamente as notas</a>. Isto pode afetar as notas totais do curso.';
$string['fixrescalednullgradesconfirm'] = 'Você tem certeza que deseja consertar notas errôneas? Todas as notas afetadas serão removidas. Isto pode afetar as notas totais do curso.';
$string['fixrescalednullgradesdone'] = 'Notas corrigidas.';
$string['gradeabovemaximum'] = 'Notas precisam ser menores ou iguais a {$a}.';
$string['gradebelowzero'] = 'Notas precisam ser maiores ou iguais a zero.';
$string['gradecanbechanged'] = 'Nota pode ser alterada';
$string['gradechangessaveddetail'] = 'As mudanças na nota e no feedback foram salvadas';
$string['graded'] = 'Avaliado';
$string['gradedby'] = 'Avaliado por';
$string['gradedfollowupsubmit'] = 'Avaliado - envio do acompanhamento recebido';
$string['gradedon'] = 'Avaliado em';
$string['gradeitem:submissions'] = 'Envios';
$string['gradelocked'] = 'Esta nota está bloqueada ou sobreposta no livro de notas.';
$string['gradeoutof'] = 'Nota até {$a}';
$string['gradeoutofhelp'] = 'Nota';
$string['gradeoutofhelp_help'] = 'Digite a nota (podem ser utilizados valores decimas) correspondente à avaliação da tarefa.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} atualizou a sua tarefa <i>\'{$a->assignment}\' em{$a->timeupdated} </i><br /><br />
Esta pode ser acessada <a href="{$a->url}">no site</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} alterou seu envio para tarefa {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} atualizou a sua tarefa \'{$a->assignment}\' em {$a->timeupdated}

Para acessar a nova versão:

{$a->url}';
$string['gradestudent'] = 'Avaliar estudante: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Nota {$a}';
$string['grading'] = 'Avaliação';
$string['gradingchangessaved'] = 'As mudanças de nota foram salvas';
$string['gradingduedate'] = 'Lembre-me de avaliar por';
$string['gradingduedate_help'] = 'A data em que a marcação dos envios já deve estar concluída. Esta data é utilizada para priorizar as notificações no painel dos professores.';
$string['gradingdueduedatevalidation'] = '\'Lembre-me de avaliar em\' não pode ser antes do que a data de entrega.';
$string['gradingduefromdatevalidation'] = '\'Lembre-me de avaliar em\' não pode ser antes do que \'Permitir envios a partir de\'.';
$string['gradingmethodpreview'] = 'Critério de pontuação';
$string['gradingoptions'] = 'Opções';
$string['gradingstatus'] = 'Status da avaliação';
$string['gradingstudent'] = 'Avaliando estudante';
$string['gradingsummary'] = 'Sumário de avaliação';
$string['grantextension'] = 'Atribuir extensão';
$string['grantextensionforusers'] = 'Atribuir extensão para o usuário {$a}';
$string['groupoverrides'] = 'Sobreposição de grupo';
$string['groupoverridesdeleted'] = 'Sobreposição de grupo excluída';
$string['groupsnone'] = 'Não existem grupos que você possa acessar.';
$string['groupsubmissionsettings'] = 'Configurações de envio em grupo';
$string['hiddenuser'] = 'Participante';
$string['hidegrader'] = 'Ocultar dos estudantes a identidade do avaliador';
$string['hidegrader_help'] = 'Se habilitado, a identidade de qualquer usuário que avalia um envio desta tarefa não é mostrada, de modo que estudantes não podem ver quem avaliou seu trabalho.

Note que esta configuração não possui efeito na caixa de comentários da página de avaliação.';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['inactiveoverridehelp'] = '* Essa sobreposição está inativa por que o acesso do usuário a essa atividade está restrito. Isso pode ser devido ao grupo ou atribuição de papel, outras restrições de acesso ou devido à atividade estar oculta.';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo da Tarefa';
$string['indicator:cognitivedepth_help'] = 'Este indicador baseia-se na profundidade cognitiva alcançada pelo estudante em uma atividade Tarefa.';
$string['indicator:cognitivedepthdef'] = 'Tarefa cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou essa porcentagem do engajamento cognitivo oferecido pelas atividades de Tarefa durante o intervalo de análise (Levels = No view, View, Submit, View feedback, Comment on feedback, Resubmit after viewing feedback)';
$string['indicator:socialbreadth'] = 'Indicador social da Tarefa';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade Tarefa.';
$string['indicator:socialbreadthdef'] = 'Tarefa social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelas atividades Tarefa durante este intervalo de análise (Níveis = Sem participação, Participante único, Participante com outros)';
$string['instructionfiles'] = 'Aquivos de instrução';
$string['introattachments'] = 'Arquivos adicionais';
$string['introattachments_help'] = 'Arquivos adicionais para usar na tarefa, como, por exemplo, "templates" de respostas, podem ser adicionados.';
$string['invalidfloatforgrade'] = 'A nota inserida não pode ser compreendida: {$a}';
$string['invalidgradeforscale'] = 'A nota fornecida não é válida para a escala atual';
$string['invalidoverrideid'] = 'Identificador de sobreposição inválido';
$string['lastmodifiedgrade'] = 'Última modificação (nota)';
$string['lastmodifiedsubmission'] = 'Última modificação (envio)';
$string['latesubmissions'] = 'Submissões atrasadas';
$string['latesubmissionsaccepted'] = 'Permitido até {$a}';
$string['loading'] = 'Carregando...';
$string['locksubmissionforstudent'] = 'Impedir envio para o estudante: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Travar envios';
$string['manageassignfeedbackplugins'] = 'Gerenciar plugins de feedback de tarefa';
$string['manageassignsubmissionplugins'] = 'Gerenciar plugins de envio de tarefa';
$string['marker'] = 'Avaliador';
$string['markerfilter'] = 'Filtro por avaliador';
$string['markerfilternomarker'] = 'Nenhum avaliador';
$string['markingallocation'] = 'Usar alocação de avaliadores';
$string['markingallocation_help'] = 'Se habilitado (depende da habilitação de "Usar fluxo de avaliação"), é possível atribuir avaliadores para avaliar ou rever o trabalho de estudantes específicos.';
$string['markingworkflow'] = 'Usar fluxo de avaliação';
$string['markingworkflow_help'] = 'Se habilitado, os avaliadores (em geral os professores) poderão especificar o estágio em que eles se encontram no processo de avaliação das tarefas submetidas.
A lista de estágios inclui: em avaliação, em revisão, avaliação concluída, pronto para publicação e publicado.
Este mecanismo possibilita, dentre outras coisas, a publicação conjunta (ao mesmo tempo) das notas para os estudantes.';
$string['markingworkflowstate'] = 'Estado do fluxo de avaliação';
$string['markingworkflowstate_help'] = 'Possíveis estados para o fluxo de avaliação de trabalhos (dependendo de suas permissões):

* Não avaliado - a avaliação ainda não iniciou
* Em avaliação - a avaliação foi iniciada, mas ainda não foi concluída
* Avaliação concluída - a avaliação foi concluída, mas talvez ainda sejam necessárias verificações/correções
* Em revisão - a avaliação é agora do professor responsável pela verificação da qualidade
* Pronto para publicação - a revisão final foi completada, mas o professor ainda não permitiu o acesso dos estudantes à avaliação
* Publicado - os estudantes podem acessar notas/feedback';
$string['markingworkflowstateinmarking'] = 'Em avaliação';
$string['markingworkflowstateinreview'] = 'Em revisão';
$string['markingworkflowstatenotmarked'] = 'Não avaliado';
$string['markingworkflowstatereadyforrelease'] = 'Pronto para publicação';
$string['markingworkflowstatereadyforreview'] = 'Avaliação concluída';
$string['markingworkflowstatereleased'] = 'Publicado';
$string['maxattempts'] = 'Máximo de tentativas';
$string['maxattempts_help'] = 'O número máximo de tentativas de envio que podem ser feitas por um estudante. Depois que este número de tentativas for atingido, o envio não poderá ser reaberto.';
$string['maxgrade'] = 'Nota máxima';
$string['maxperpage'] = 'Máximo de tarefas por página';
$string['maxperpage_help'] = 'O número máximo de tarefas que um avaliador pode ver na página de avaliação da tarefa. Isso é útil para evitar problemas com limite de tempo em cursos com grande quantidade de participantes.';
$string['messageprovider:assign_notification'] = 'Notificações de tarefa';
$string['modulename'] = 'Tarefa';
$string['modulename_help'] = 'O módulo de atividade permite a atribuição de um professor para comunicar tarefas, recolher o trabalho e fornecer notas e comentários.

Os estudantes podem apresentar qualquer conteúdo digital (arquivos), como documentos de texto, planilhas, imagens ou áudio e videoclipes. Alternativamente, ou adicionalmente, a atribuição pode exigir dos estudantes a digitação do conteúdo diretamente no editor de texto. Uma tarefa também pode ser usada para lembrar aos estudantes das atribuições \'mundo real\' que eles precisam para completar off-line, tais como obras de arte e, portanto, não necessita de qualquer conteúdo digital. Os estudantes podem submeter trabalhos, individualmente ou como membro de um grupo.

Ao analisar os trabalhos, os professores podem deixar comentários de feedback e fazer upload de arquivos, como marcar apresentações dos estudantes, documentos com comentários ou feedback de áudio falado. Atribuições podem ser classificadas de acordo com uma escala numérica ou customizada ou um método de classificação avançada, como uma rubrica. Notas finais são registradas no livro de notas.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Tarefas';
$string['moreusers'] = '{$a} mais...';
$string['multipleteams'] = 'Membro de mais de um grupo';
$string['multipleteams_desc'] = 'Esta atividade requer envio em grupos. Você é membro de mais de um grupo. Para poder realizar o envio você deve fazer parte de apenas um grupo. Por favor, contate seu professor para mudar seu grupo.';
$string['multipleteamsgrader'] = 'Membro de mais de um grupo, portanto impedido de fazer envios.';
$string['newsubmissions'] = 'Tarefas apresentadas';
$string['nextuser'] = 'Próximo usuário';
$string['noattempt'] = 'Nenhuma tentativa';
$string['noclose'] = '';
$string['nofiles'] = 'Não há arquivos.';
$string['nofilters'] = 'Sem filtros';
$string['nograde'] = 'Não há nota.';
$string['nogroupoverrides'] = 'Não há sobreposições de grupo.';
$string['nomoresubmissionsaccepted'] = 'Só é permitido para os participantes que tenham beneficiado de uma extensão';
$string['none'] = 'Nada';
$string['noonlinesubmissions'] = 'Esta tarefa não requer o envio online';
$string['noopen'] = '';
$string['nooverridedata'] = 'Você deve sobrepor pelo menos uma das configurações de tarefa.';
$string['nosavebutnext'] = 'Próximo';
$string['nosubmission'] = 'Nada foi enviado para esta tarefa';
$string['nosubmissionyet'] = 'Nenhum envio foi feito ainda';
$string['noteam'] = 'Você não é membro de nenhum grupo.';
$string['noteam_desc'] = 'Esta atividade requer envio em grupos. Você não é membro de nenhum grupo, então você não pode fazer um envio. Por favor, contate seu professor para te adicionar em um grupo.';
$string['noteamgrader'] = 'Não é membro de nenhum grupo portanto impedido de fazer envios.';
$string['notgraded'] = 'Não há notas';
$string['notgradedyet'] = 'Ainda não avaliada';
$string['notifications'] = 'Notificações';
$string['nouseroverrides'] = 'Não há sobreposições de usuário.';
$string['nousers'] = 'Sem usuários';
$string['nousersselected'] = 'Não foi selecionado usuário';
$string['numberofdraftsubmissions'] = 'Rascunhos';
$string['numberofparticipants'] = 'Participantes';
$string['numberofsubmissionsneedgrading'] = 'Precisa de avaliação';
$string['numberofsubmissionsneedgradinglabel'] = 'Precisa de avaliação: {$a}';
$string['numberofsubmittedassignments'] = 'Enviado';
$string['numberofteams'] = 'Grupos';
$string['offline'] = 'Não há envios online solicitados';
$string['open'] = 'Aberto';
$string['opensubmissionexists'] = 'Já existe um envio aberto.';
$string['outlinegrade'] = 'Nota: {$a}';
$string['outof'] = '{$a->current} de {$a->total}';
$string['overdue'] = 'A tarefa está atrasada há: {$a}';
$string['override'] = 'Sobreposição';
$string['overridedeletegroupsure'] = 'Tem certeza de que deseja excluir a sobreposição para o grupo {$a}?';
$string['overridedeleteusersure'] = 'Tem certeza de que deseja excluir a sobreposição para o usuário {$a}?';
$string['overridegroup'] = 'Sobreposição de grupo';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Sobreposições';
$string['overrideuser'] = 'Sobreposição de usuário';
$string['overrideusereventname'] = '{$a->assign} - Sobreposição';
$string['page-mod-assign-view'] = 'Página principal da tarefa';
$string['page-mod-assign-x'] = 'Qualquer página de tarefa';
$string['paramtimeremaining'] = '{$a} restando';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administração de tarefas';
$string['pluginname'] = 'Tarefa';
$string['preventsubmissionnotingroup'] = 'Somente membros de grupo podem fazer envio';
$string['preventsubmissionnotingroup_help'] = 'Se habilitado, usuários que não estão em grupos serão proibidos de fazer envios.';
$string['preventsubmissions'] = 'Impede o usuário de fazer outros envios para essa tarefa.';
$string['preventsubmissionsshort'] = 'Impedir modificações no envio';
$string['previous'] = 'Anterior';
$string['previoususer'] = 'Usuário anterior';
$string['privacy:attemptpath'] = 'tentativa {$a}';
$string['privacy:blindmarkingidentifier'] = 'O identificador usado para envios anônimos';
$string['privacy:gradepath'] = 'nota';
$string['privacy:metadata:assigndownloadasfolders'] = 'Uma preferência do usuário para o download de vários envios de arquivos em pastas';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Dados de feedback para a tarefa.';
$string['privacy:metadata:assignfilter'] = 'Opções de filtro como \'Enviado\', \'Não enviado\', \'Requer avaliação\' e \'Prorrogação concedida\'';
$string['privacy:metadata:assigngrades'] = 'Armazenar as notas do usuário para a tarefa';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtrar o resumo da tarefa pelo avaliador atribuído.';
$string['privacy:metadata:assignmentid'] = 'Id da tarefa';
$string['privacy:metadata:assignmessageexplanation'] = 'Mensagens são enviadas para os estudantes através do sistema de mensagens.';
$string['privacy:metadata:assignoverrides'] = 'Armazena informações de sobreposição para a tarefa';
$string['privacy:metadata:assignperpage'] = 'Número de tarefas exibidas por página.';
$string['privacy:metadata:assignquickgrading'] = 'Uma preferência sobre se a avaliação rápida é usada ou não.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Armazenar informação sobre o envio do usuário';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Dados enviados para a tarefa.';
$string['privacy:metadata:assignuserflags'] = 'Armazena metadados do usuário, como datas prorrogadas';
$string['privacy:metadata:assignusermapping'] = 'O mapeamento para envios anônimos';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtrar pelos diferentes estágios do fluxo de trabalho.';
$string['privacy:metadata:grade'] = 'A nota numérica para o envio desta tarefa. Pode ser determinado por escalas/formulários de avaliação avançados etc, mas sempre será convertido de volta para um número de ponto flutuante.';
$string['privacy:metadata:grader'] = 'O ID do usuário da pessoa que está avaliando.';
$string['privacy:metadata:groupid'] = 'Id do grupo do qual o usuário é membro.';
$string['privacy:metadata:latest'] = 'Simplifica bastante as consultas que desejam saber informações apenas sobre a última tentativa.';
$string['privacy:metadata:mailed'] = 'Este usuário já foi informado ?';
$string['privacy:metadata:timecreated'] = 'Hora de criação';
$string['privacy:metadata:timestarted'] = 'Horário de início';
$string['privacy:metadata:userid'] = 'ID do usuário';
$string['privacy:studentpath'] = 'studentsubmissions';
$string['privacy:submissionpath'] = 'envio';
$string['quickgrading'] = 'Avaliação rápida';
$string['quickgrading_help'] = 'A avaliação rápida faz com que seja aberta uma caixa de edição de nota ao lado de cada envio, possibilitando, assim, a edição de várias notas de uma só vez.
A avaliação rápida não é compatível com métodos avançados de avaliação. Ela não é recomendada quando há vários avaliadores, pois há risco de sobreposição de avaliações.';
$string['quickgradingchangessaved'] = 'A nota alterada foi salva';
$string['quickgradingresult'] = 'Avaliação rápida';
$string['recordid'] = 'Identificador';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} após o início do curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes do início do curso';
$string['relativedatessubmissiontimeleft'] = 'Calculado para cada estudante';
$string['removeallgroupoverrides'] = 'Excluir todas as sobreposições de grupo';
$string['removealluseroverrides'] = 'Excluir todas as sobreposições de usuário';
$string['removesubmission'] = 'Remover envio';
$string['removesubmissionconfirm'] = 'Tem certeza de que deseja excluir os dados do envio?';
$string['removesubmissionconfirmforstudent'] = 'Tem certeza de que deseja excluir os dados do envio de {$a}?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Você tem certeza que quer remover o envio para {$a}? Por favor, note que isso não vai reiniciar o tempo limite para o estudante. Você pode dar mais tempo adicionando um limite de tempo através de sobreposição de usuário.';
$string['removesubmissionconfirmwithtimelimit'] = 'Tem certeza de que deseja excluir os dados do seu envio? Observe que isso não redefinirá seu limite de tempo.';
$string['removesubmissionforstudent'] = 'Excluir o envio do estudante: (id={$a->id}, nome completo={$a->nome completo}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Reabrir até que a opção de aprovação seja incompatível com envios anônimos, porque as notas não são liberadas para o livro de notas até que as identidades dos estudantes sejam reveladas.';
$string['requireallteammemberssubmit'] = 'Exigir que todos os membros do grupo enviem';
$string['requireallteammemberssubmit_help'] = 'Se habilitado, todos os membros do grupo devem clicar no botão de confirmação desta tarefa antes que ela seja considerada enviada. Se desabilitada, o envio do grupo será considerado enviado assim que qualquer membro do grupo clicar no botão de envio.';
$string['requiresubmissionstatement'] = 'Exigir aceite da declaração de não plágio ao enviar';
$string['requiresubmissionstatement_help'] = 'Exigir que os estudantes aceitem a declaração indicando que o trabalho é seu (não plágio) em todos os envios desta tarefa.';
$string['revealidentities'] = 'Revelar identidades dos estudantes';
$string['revealidentitiesconfirm'] = 'Você tem certeza de que deseja revelar as identidades dos estudantes nesta tarefa? Esta operação não pode ser desfeita. Uma vez que as identidades dos estudantes sejam reveladas, as notas serão publicadas no livro de notas.';
$string['reverttodefaults'] = 'Reverter para os padrões da tarefa';
$string['reverttodraft'] = 'Reverter o envio para o status de rascunho';
$string['reverttodraftforstudent'] = 'Reverter envio para rascunho para o estudante: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Reverter o envio para rascunho';
$string['reviewed'] = 'Revisado';
$string['save'] = 'Salvar';
$string['saveallquickgradingchanges'] = 'Salvar todas as alterações de avaliação rápida';
$string['saveandcontinue'] = 'Salvar e continuar';
$string['savechanges'] = 'Salvar mudanças';
$string['savegradingresult'] = 'Nota';
$string['savenext'] = 'Salvar e exibir o próximo';
$string['saveoverrideandstay'] = 'Salvar e inserir outra sobreposição';
$string['savingchanges'] = 'Salvando mudanças...';
$string['scale'] = 'Escala';
$string['search:activity'] = 'Tarefa - informação da atividade';
$string['selectedusers'] = 'Usuários selecionados';
$string['selectlink'] = 'Selecionar ...';
$string['selectuser'] = 'Selecione {$a}';
$string['sendlatenotifications'] = 'Notificar avaliadores sobre submissões atrasadas';
$string['sendlatenotifications_help'] = 'Se habilitado, avaliadores (normalmente professores) recebem uma mensagem quando o estudante envia uma tarefa atrasada. Métodos de envio de mensagem são configuráveis.';
$string['sendnotifications'] = 'Notificar avaliador a respeito de novos envios';
$string['sendnotifications_help'] = 'Se habilitado, avaliadores (geralmente professores) recebem uma mensagem quando o estudante envia uma tarefa. Métodos de mensagem são configuráveis.';
$string['sendstudentnotifications'] = 'Notificar estudante';
$string['sendstudentnotifications_help'] = 'Se habilitado, os estudantes recebem uma mensagem sobre a nota atualizada ou feedback. Se o fluxo de avaliação estiver habilitado nesta tarefa ou as notas estiverem ocultas no relatório do avaliador, as notificações não serão enviadas até que a nota seja liberada.';
$string['sendstudentnotificationsdefault'] = 'Padrão para "Notificar estudante"';
$string['sendstudentnotificationsdefault_help'] = 'Ao avaliar cada estudante, o campo "Notificar estudantes" dever ser marcado como padrão?';
$string['sendsubmissionreceipts'] = 'Enviar comprovante de entrega a estudantes';
$string['sendsubmissionreceipts_help'] = 'Esta opção habilita comprovantes de envio para estudantes. Estudantes receberão uma notificação toda vez que enviarem uma tarefa com sucesso.';
$string['setmarkerallocationforlog'] = 'Definir alocação de avaliação : (id={$a->id}, fullname={$a->fullname}, avaliador={$a->marker}).';
$string['setmarkingallocation'] = 'Atribuir avaliador';
$string['setmarkingworkflowstate'] = 'Definir estado do fluxo de avaliação';
$string['setmarkingworkflowstateforlog'] = 'Definir estado no fluxo de avaliação :  (id={$a->id}, nome={$a->fullname}, estado={$a->state}).';
$string['settings'] = 'Configurações da tarefa';
$string['showrecentsubmissions'] = 'Mostrar envios recentes';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'A configuração do estado do fluxo de trabalho deve ser \'Liberado\' para notificar os estudantes.';
$string['submission'] = 'Envio de tarefas';
$string['submissionattachments'] = 'Mostrar arquivos somente durante o envio.';
$string['submissionattachments_help'] = 'Se habilitado, os arquivos adicionais serão mostrados somente na página de envio. Se desabilitado, estes arquivos serão mostrados tanto na página de envio como na página da Tarefa.';
$string['submissioncopiedhtml'] = '<p>Você fez uma cópia do seu envio anterior \'<i>{$a->assignment}</i>\'.</p>
<p>Você pode ver o status do seu <a href="{$a->url}">envio</a>.</p>';
$string['submissioncopiedsmall'] = 'Você copiou seu envio de tarefa anterior para {$a->assignment}';
$string['submissioncopiedtext'] = 'Você fez uma cópia do seu envio anterior para \'{$a->assignment}\'

Você pode ver o status de seu envio:
{$a->url}';
$string['submissiondrafts'] = 'Exigir que estudantes pressionem o botão enviar';
$string['submissiondrafts_help'] = 'Se habilitado, os estudantes terão que pressionar o botão "Enviar" para declarar seu envio como final. Isso possibilita aos estudantes manterem uma versão de rascunho do envio no sistema. Se esta configuração for alterada de "Não" para "Sim" depois que os estudantes já tiverem enviado suas tarefas, estes envios serão consideradas como finais.';
$string['submissioneditable'] = 'Estudantes podem editar essa submissão';
$string['submissionempty'] = 'Sem submissões';
$string['submissionlog'] = 'Estudante: {$a->fullname}, Estado: {$a->status}';
$string['submissionmodified'] = 'Você possui dados de envio existentes. Por favor, deixe esta página e tente novamente.';
$string['submissionmodifiedgroup'] = 'O envio foi modificado por outra pessoa. Por favor, deixe esta página e tente novamente.';
$string['submissionnotcopiedinvalidstatus'] = 'O envio foi copiado pois foi editado após ser reaberto.';
$string['submissionnoteditable'] = 'Estudante não pode editar este envio';
$string['submissionnotopen'] = 'Esta tarefa não está aberta para envios';
$string['submissionnotready'] = 'Essa tarefa não está pronta para envios:';
$string['submissionplugins'] = 'Plugins de envio';
$string['submissionreceipthtml'] = '<p>Você enviou uma tarefa em <i>{$a->assignment}</i>\'.</p>
<p>Você pode ver aqui o status da sua <a href="{$a->url}">tarefa enviada</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Sua submissão de tarefa para \'<i>{$a->assignment}</i>\' foi submetida. <br /><br /> Você pode ver o status da sua <a href="{$a->url}">submissão de tarefa</a>.';
$string['submissionreceiptothersmall'] = 'Sua submissão de tarefa para {$a->assignment} foi submetida.';
$string['submissionreceiptothertext'] = 'Sua tarefa enviada para
\'{$a->assignment}\' foi submetida.

Você pode ver o status de sua submissão de tarefa:
{$a->url}';
$string['submissionreceipts'] = 'Destinatário do envio de tarefas';
$string['submissionreceiptsmall'] = 'Você enviou sua tarefa para {$a->assignment}';
$string['submissionreceipttext'] = 'Você enviou uma tarefa para \'{$a->assignment}\'

Você pode ver o estado do seu envio:

  {$a->url}';
$string['submissionsclosed'] = 'Envios encerrados';
$string['submissionsettings'] = 'Configurações de envio';
$string['submissionslocked'] = 'A tarefa não está aceitando envios';
$string['submissionslockedshort'] = 'Alteração de envio não permitida';
$string['submissionstatement'] = 'Declaração de envio';
$string['submissionstatement_help'] = 'Declaração que cada estudante deve aceitar para enviar seu trabalho.';
$string['submissionstatementacceptedlog'] = 'Declaração de envio aceita pelo usuário {$a}';
$string['submissionstatementdefault'] = 'Este envio é meu próprio trabalho, exceto onde eu reconheço o uso do trabalho de outras pessoas.';
$string['submissionstatementteamsubmission'] = 'Declaração de envio do grupo';
$string['submissionstatementteamsubmission_help'] = 'Declaração que cada estudante deve aceitar para enviar o trabalho de seu grupo.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Declaração de envio de grupo em que todos os membros do grupo enviam';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Declaração que cada estudante deve aceitar para enviar seu trabalho como membro do grupo.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Este envio é meu próprio trabalho como membro de um grupo, exceto onde nós reconhecemos o uso do trabalho de outras pessoas.';
$string['submissionstatementteamsubmissiondefault'] = 'Este envio é trabalho de meu grupo, exceto onde nós reconhecemos o uso do trabalho de outras pessoas.';
$string['submissionstatus'] = 'Status de envio';
$string['submissionstatus_'] = 'Nenhum envio';
$string['submissionstatus_draft'] = 'Rascunho (não enviado)';
$string['submissionstatus_marked'] = 'Avaliado';
$string['submissionstatus_new'] = 'Nenhum envio';
$string['submissionstatus_reopened'] = 'Reaberto';
$string['submissionstatus_submitted'] = 'Enviado para avaliação';
$string['submissionstatusheading'] = 'Status de envio';
$string['submissionsummary'] = '{$a->status}. Última modificação em {$a->timemodified}';
$string['submissionteam'] = 'Grupo';
$string['submissiontypes'] = 'Tipos de envio';
$string['submitaction'] = 'Enviar';
$string['submitassignment'] = 'Enviar tarefa em definitivo';
$string['submitassignment_help'] = 'Uma vez que a tarefa for enviada você não poderá mais fazer alterações.';
$string['submitforgrading'] = 'Submeter para avaliação';
$string['submitted'] = 'Enviada';
$string['submittedearly'] = 'A tarefa foi enviada {$a} adiantado';
$string['submittedlate'] = 'A tarefa foi enviada {$a} atrasada';
$string['submittedlateshort'] = '{$a} atrasado';
$string['submittedovertime'] = 'A tarefa foi enviada {$a} após o limite de tempo';
$string['submittedundertime'] = 'A tarefa foi enviada {$a} antes do limite de tempo';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Plugin do comentário';
$string['subplugintype_assignfeedback_plural'] = 'Plugin de comentários';
$string['subplugintype_assignsubmission'] = 'Plugin de submissão';
$string['subplugintype_assignsubmission_plural'] = 'Plugins de submissão';
$string['teamname'] = 'Equipe: {$a}';
$string['teamsubmission'] = 'Envio em grupos de estudantes';
$string['teamsubmission_help'] = 'Se habilitado, os estudantes serão divididos em grupos com base no conjunto padrão de grupos ou de um agrupamento personalizado. O envio do grupo será compartilhada entre os membros do grupo e todos os membros do grupo verão as alterações uns dos outros no envio.';
$string['teamsubmissiongroupingid'] = 'Agrupamento para grupos de estudantes';
$string['teamsubmissiongroupingid_help'] = 'Este é o agrupamento que a tarefa irá usar para encontrar grupos para os estudantes. Se não definido, o conjunto padrão de grupos será usado.';
$string['textinstructions'] = 'Instruções da tarefa';
$string['timelimit'] = 'Limite de tempo';
$string['timelimit_help'] = 'Se habilitado, o limite de tempo é indicado na página da tarefa e um cronômetro de contagem regressiva é exibido durante a tarefa.';
$string['timelimitnotenabled'] = 'O limite de tempo não está habilitado para tarefa.';
$string['timelimitpassed'] = 'O limite de tempo foi ultrapassado';
$string['timemodified'] = 'Última modificação';
$string['timeremaining'] = 'Tempo restante';
$string['timeremainingcolon'] = 'Tempo restante: {$a}';
$string['togglezoom'] = 'Aumentar/Diminuir zoom da região';
$string['ungroupedusers'] = 'A configuração "Somente membros de grupo podem fazer envio" está habilitada e alguns usuários não são membros de nenhum grupo ou são membros de mais de um grupo, portanto, não conseguem fazer envios.';
$string['ungroupedusersoptional'] = 'O \'envio em grupo\' está habilitado mas alguns usuários não estão em nenhum grupo, ou estão em mais de um grupo. Atenção: estes estudantes farão envios como se fossem membros do \'Grupo Padrão\' (o que quase certamente não é o desejado).';
$string['unlimitedattempts'] = 'Ilimitado';
$string['unlimitedattemptsallowed'] = 'Tentativas Ilimitadas permitidas.';
$string['unlimitedpages'] = 'Ilimitado';
$string['unlocksubmissionforstudent'] = 'Permitir envio para o estudante: (id={$a->id}, nome={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloquear envios';
$string['unsavedchanges'] = 'Modificações não salvas';
$string['unsavedchangesquestion'] = 'Há mudanças não salvas nas notas ou feedback. Deseja salvar as mudanças e continuar?';
$string['updategrade'] = 'Atualizar nota';
$string['updatetable'] = 'Salvar e atualizar tabela';
$string['upgradenotimplemented'] = 'Atualização não implementada no plugin ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Padrões de tarefa do usuário';
$string['userextensiondate'] = 'Prorrogação concedida até: {$a}';
$string['usergrade'] = 'Nota do usuário';
$string['useridlistnotcached'] = '';
$string['useroverrides'] = 'Sobreposições de usuário';
$string['useroverridesdeleted'] = 'Sobreposições de usuário excluídas';
$string['usersnone'] = 'Nenhum estudante tem acesso a essa tarefa.';
$string['usersubmissioncannotberemoved'] = 'O envio de {$a} não pode ser excluído.';
$string['userswhoneedtosubmit'] = 'Usuários que precisam enviar: {$a}';
$string['validmarkingworkflowstates'] = 'Estados de fluxo de avaliação válidos';
$string['viewadifferentattempt'] = 'Visualizar uma tentativa diferente';
$string['viewbatchmarkingallocation'] = 'Ver página de alocação de avaliação em lote.';
$string['viewbatchsetmarkingworkflowstate'] = 'Ver página de alteração em lote do estado do fluxo de avaliação.';
$string['viewfeedback'] = 'Ver avaliação e feedback';
$string['viewfeedbackforuser'] = 'Ver feedback para o usuário: {$a}';
$string['viewfull'] = 'Ver completo';
$string['viewfullgradingpage'] = 'Abrir a página de avaliação completa para enviar feedback';
$string['viewgradebook'] = 'Ver livro de notas';
$string['viewgrading'] = 'Ver todos os envios';
$string['viewgradingformforstudent'] = 'Ver página de avaliação para o estudante: (id={$a->id}, nome={$a->fullname}).';
$string['viewownsubmissionform'] = 'Ver própria página de envio de tarefa.';
$string['viewownsubmissionstatus'] = 'Ver própria página de status de envio.';
$string['viewrevealidentitiesconfirm'] = 'Ver identidade do estudante na página de confirmação.';
$string['viewsubmission'] = 'Ver envio';
$string['viewsubmissionforuser'] = 'Ver envio para usuário: {$a}';
$string['viewsubmissiongradingtable'] = 'Ver tabela de avaliação de tarefas.';
$string['viewsummary'] = 'Ver resumo';
$string['workflowfilter'] = 'Filtro por fluxo de avaliação';
$string['xofy'] = '{$a->x} de {$a->y}';
