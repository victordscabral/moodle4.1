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
 * Strings for component 'completion', language 'pt_br', version '4.1'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Nota de aprovação';
$string['achievingpassinggrade'] = 'Obtendo nota de aprovação';
$string['activities'] = 'Atividades';
$string['activitiescompleted'] = 'Conclusão de atividade';
$string['activitiescompletednote'] = 'Nota: O monitoramento da conclusão de atividades deve estar definido para que uma atividade apareça na lista acima.';
$string['activitieslabel'] = 'Atividades / Recursos';
$string['activityaggregation'] = 'Condição requer';
$string['activityaggregation_all'] = 'TODAS as atividades selecionadas devem estar concluídas';
$string['activityaggregation_any'] = 'QUALQUER uma das atividades selecionadas deve estar concluída';
$string['activitycompletion'] = 'Conclusão de atividade';
$string['activitycompletionupdated'] = 'Mudanças salvas';
$string['activitygradenotrequired'] = 'Nota não obrigatória';
$string['activitygradetopassnotset'] = 'Esta atividade não tem uma nota de aprovação válida. Ela pode ser definida na seção Nota das configurações da atividade.';
$string['affectedactivities'] = 'As alterações afetarão os <b>{$a}</b> recursos ou atividades seguintes:';
$string['aggregationmethod'] = 'Método de agregação';
$string['all'] = 'Todos';
$string['any'] = 'Qualquer';
$string['approval'] = 'Aprovação';
$string['areyousureoverridecompletion'] = 'Você tem certeza que quer sobrescrever o atual estado de conclusão desta atividade para este usuário e marcá-lo como "{$a}"?';
$string['badautocompletion'] = 'Quando você seleciona conclusão automática, você também deve habilitar pelo menos um requisito (abaixo).';
$string['badcompletiongradeitemnumber'] = 'Exigir nota não pode ser habilitado para <b>{$a}</b> porque a avaliação por {$a} não esta habilitada.';
$string['bulkactivitycompletion'] = 'Edição em lote de conclusão de atividade';
$string['bulkactivitydetail'] = 'Selecione as atividades que você deseja editar em lote.';
$string['bulkcompletiontracking'] = 'Acompanhamento de conclusão';
$string['bulkcompletiontracking_help'] = '<strong>Nenhum:</strong> Não indicar a conclusão da atividade

<strong>Manual:</strong> Estudantes podem marcar manualmente a atividade como concluída

<strong>Com condição:</strong> Mostrar a atividade como concluída quando condições forem atendidas';
$string['checkactivity'] = 'Caixa de seleção para atividade / recurso: {$a}';
$string['checkall'] = 'Marcar ou desmarcar todas as atividades e recursos';
$string['checkallsection'] = 'Marcar ou desmarcar todas as atividades e recursos na seção a seguir: {$a}';
$string['completeactivity'] = 'Concluir a atividade';
$string['completed'] = 'Concluído';
$string['completedunlocked'] = 'Opções de conclusão desbloqueadas';
$string['completedunlockedtext'] = 'Quando você salva as mudanças, o estado de conclusão de  todos os estudantes será apagado. Se você mudar de ideia, não salve os dados deste formulário.';
$string['completedwarning'] = 'Opções de conclusão bloqueadas';
$string['completedwarningtext'] = 'Esta atividade foi marcada como concluída para ({$a}) participante(s). Modificar as opções de conclusão apagará o estado de conclusão desses participantes e pode causar confusão. Por isto as opções foram bloqueadas e não devem ser desbloqueadas a menos que seja absolutamente necessário.';
$string['completion'] = 'Acompanhamento de conclusão';
$string['completion-alt-auto-enabled'] = 'O sistema marca este item como concluído de acordo com as condições: {$a}';
$string['completion-alt-auto-fail'] = 'Concluído: {$a} (não atingiu nota de aprovação)';
$string['completion-alt-auto-n'] = 'Não concluído(s): {$a}';
$string['completion-alt-auto-n-override'] = 'Não concluído: {$a->modname} (definido por {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Concluído: {$a} (atingiu nota de aprovação)';
$string['completion-alt-auto-y'] = 'Concluído: {$a}';
$string['completion-alt-auto-y-override'] = 'Concluído: {$a->modname} (definido por {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Os estudantes podem marcar manualmente este item como concluído: {$a}';
$string['completion-alt-manual-n'] = 'Não concluído(s): {$a}. Selecione para marcar como concluído.';
$string['completion-alt-manual-n-override'] = 'Não concluído: {$a->modname} (definido por {$a->overrideuser}). Selecione para marcar como concluído.';
$string['completion-alt-manual-y'] = 'Concluído(s): {$a}. Selecione para marcar como não concluído.';
$string['completion-alt-manual-y-override'] = 'Concluído: {$a->modname} (definido por {$a->overrideuser}). Selecione para marcar como não concluído.';
$string['completion-fail'] = 'Concluído (não atingiu nota de aprovação)';
$string['completion-n'] = 'Não concluído';
$string['completion-n-override'] = 'Não concluído (definido por {$a})';
$string['completion-pass'] = 'Concluído (atingiu nota de aprovação)';
$string['completion-y'] = 'Concluído';
$string['completion-y-override'] = 'Concluído (definido por {$a})';
$string['completion_automatic'] = 'Mostrar atividade como concluída quando as condições forem satisfeitas';
$string['completion_help'] = 'Se habilitada, a conclusão de atividade é monitorada, manual ou automaticamente, sob certas condições. Se desejado, podem ser configuradas múltiplas condições. Nesse caso, a atividade só será considerada concluída quando TODAS as condições forem satisfeitas.

Uma marca próxima ao nome da atividade na página do curso indica que ela foi concluída.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Os estudantes podem marcar manualmente a atividade como concluída';
$string['completion_none'] = 'Não indicar a conclusão de atividade';
$string['completionactivitydefault'] = 'Usar padrões para atividades';
$string['completiondefault'] = 'Acompanhamento de conclusão padrão';
$string['completiondisabled'] = 'Desativado, não é exibido nas configurações de atividade';
$string['completionduration'] = 'Inscrição';
$string['completionenabled'] = 'Habilitado, controle pela configuração de atividades e de requisitos para concluí-las';
$string['completionexpected'] = 'Conclusão esperada em';
$string['completionexpected_help'] = 'Esta configuração especifica a data em que a atividade está prevista para ser concluída. Quando a data está próxima, a atividade é listada no bloco Linha do tempo do Painel.';
$string['completionexpecteddesc'] = 'Conclusão esperada em {$a}';
$string['completionexpectedfor'] = '{$a->instancename} deve estar concluído';
$string['completionicons'] = 'Caixa para marcar atividades concluídas';
$string['completionicons_help'] = 'Uma marca ao lado do nome da atividade pode ser utilizada para indicar que a atividade foi concluída.

Se for mostrada uma caixa com borda pontilhada, esta marca aparecerá automaticamente quando você concluir a atividade de acordo com as condições estabelecidas pelo professor.

Se for mostrada uma caixa com borda sólida, você pode clicar nela para marcar quando achar que já concluiu a atividade. (Se você mudar de ideia, clique novamente e remova esta marca.)';
$string['completionmenuitem'] = 'Conclusão';
$string['completionnotenabled'] = 'O acompanhamento de conclusão não está habilitado';
$string['completionnotenabledforcourse'] = 'O acompanhamento de conclusão não está habilitado neste curso';
$string['completionnotenabledforsite'] = 'O acompanhamento de conclusão não está habilitado neste site';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Data em que o curso será marcado como concluído';
$string['completionpassgrade'] = 'Requer nota de aprovação';
$string['completionpassgrade_desc'] = 'O estudante deve receber uma nota de aprovação para concluir esta atividade';
$string['completionpassgrade_help'] = 'Se habilitada, a atividade é considerada como concluída quando o estudante recebe uma nota de aprovação.';
$string['completionsettingslocked'] = 'Configurações de conclusão bloqueadas';
$string['completionupdated'] = 'Conclusão foi atualizada para a atividade <b>{$a}</b>';
$string['completionusegrade'] = 'Requer nota';
$string['completionusegrade_desc'] = 'Estudante deve receber uma nota para concluir esta atividade';
$string['completionusegrade_help'] = 'Se habilitado, a atividade será considerada concluída quando o cursista receber uma nota. Se uma nota de aprovação for definida para a atividade, os ícones de aprovação e reprovação são exibidos no relatório de conclusão da atividade.';
$string['completionview'] = 'Requer visualização';
$string['completionview_desc'] = 'O estudante deve visualizar esta atividade para concluí-la';
$string['configcompletiondefault'] = 'A configuração padrão para o monitoramento de conclusão ao criar novas atividades.';
$string['configenablecompletion'] = 'Se habilitado, as condições de conclusão do curso e das atividades poderão ser definidas. Configurar as condições de conclusão das atividades é recomendado para que informações significativas sejam mostradas para os usuários na visão geral do curso no seu Painel.';
$string['confirmselfcompletion'] = 'Confirmar auto-concluir';
$string['courseaggregation'] = 'Agregador de condição';
$string['courseaggregation_all'] = 'TODOS os cursos selecionados precisam ser marcados como concluídos';
$string['courseaggregation_any'] = 'QUALQUER um dos cursos selecionados precisa ser marcado como concluído';
$string['coursealreadycompleted'] = 'Você concluiu este curso';
$string['coursecomplete'] = 'Curso concluído';
$string['coursecompleted'] = 'Curso concluído';
$string['coursecompletedmessage'] = '<p>Parabéns!</p><p>Você concluiu o curso <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Conclusão de curso';
$string['coursecompletioncondition'] = 'Condição: {$a}';
$string['coursegrade'] = 'Nota do curso';
$string['coursesavailable'] = 'Cursos disponíveis';
$string['coursesavailableexplaination'] = 'Nota: O monitoramento de conclusão de curso precisa estar configurado em algum curso para que estes apareçam na lista a seguir.';
$string['criteria'] = 'Critérios';
$string['criteriagroup'] = 'Grupo de critérios';
$string['criteriarequiredall'] = 'Todos os critérios abaixo são necessários';
$string['criteriarequiredany'] = 'Qualquer um dos critérios abaixo são necessários';
$string['csvdownload'] = 'Download em formato de planilha (UTF-8. csv)';
$string['datepassed'] = 'Data passada';
$string['days'] = 'Dias';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['daysuntilcompletion'] = 'Dias até a conclusão';
$string['defaultcompletion'] = 'Conclusão de atividade padrão';
$string['defaultcompletionupdated'] = 'Mudanças salvas';
$string['deletecompletiondata'] = 'Excluir dados de conclusão';
$string['dependencies'] = 'Dependências';
$string['dependenciescompleted'] = 'Conclusão de outros cursos';
$string['detail_desc:receivegrade'] = 'Receber uma nota';
$string['detail_desc:receivepassgrade'] = 'Receber uma nota de aprovação';
$string['detail_desc:view'] = 'Ver';
$string['done'] = 'Feito';
$string['editcoursecompletionsettings'] = 'Editar configurações de conclusão do curso';
$string['enablecompletion'] = 'Ativar acompanhamento de conclusão';
$string['enablecompletion_help'] = 'Se habilitado, as condições de conclusão de atividades podem ser definidas nas configurações da atividade e/ou nas configurações de conclusão do curso. É recomendado ter isso habilitado para que as informações relevantes sejam mostradas na visão geral do curso no Painel.';
$string['enrolmentduration'] = 'Duração da inscrição';
$string['enrolmentdurationlength'] = 'O usuário deve permanecer inscrito por';
$string['err_noactivities'] = 'Informações de conclusão não estão ativadas para nenhuma atividade, de modo que nenhuma informação pode ser exibida. Você pode ativar informações de conclusão editando as configurações para uma atividade.';
$string['err_nocourses'] = 'O acompanhamento de conclusão de curso não está habilitado para nenhum outro curso e, por isto, nada pode ser mostrado. Você pode habilitar o acompanhamento de conclusão de curso nas configurações do curso.';
$string['err_nograde'] = 'Não foi fixada uma nota de aprovação para este curso. Para habilitar estes critérios deve criar uma nota de aprovação para o curso.';
$string['err_noroles'] = 'Não há papéis com a permissão \'moodle/course:markcomplete\' neste curso.';
$string['err_nousers'] = 'Não há estudantes neste curso ou grupo para os quais as informações de conclusão sejam exibidas. (As informações de conclusão são exibidas apenas para usuários com a capacidade \'Ser mostrado nos relatórios de conclusão\'. Essa capacidade é permitida apenas para a função padrão de estudante, portanto, se não houver estudantes, você verá esta mensagem.)';
$string['err_settingslocked'] = 'Um ou mais estudantes já concluíram um critério, portanto, as configurações foram bloqueadas. Desbloquear as configurações excluirá os dados de conclusão do usuário e poderá causar confusão.';
$string['err_system'] = 'Ocorreu um erro interno no sistema de acompanhamento de tarefas concluídas. (Os administradores do ambiente podem habilitar a informação sobre falhas para ver mais detalhes).';
$string['eventcoursecompleted'] = 'Curso concluído';
$string['eventcoursecompletionupdated'] = 'Conclusão do curso atualizada';
$string['eventcoursemodulecompletionupdated'] = 'Conclusão da atividade do curso atualizada';
$string['eventdefaultcompletionupdated'] = 'Padrão para conclusão da atividade de curso atualizada';
$string['excelcsvdownload'] = 'Download em formato compatível com Excel (. csv)';
$string['failed'] = 'Falhou';
$string['fraction'] = 'Fração';
$string['graderequired'] = 'Nota de curso obrigatória';
$string['gradexrequired'] = '{$a} necessário';
$string['hiddenrules'] = 'Algumas configurações específicas para <b>{$a}</b> foram ocultadas. Para ver, desmarcar outras atividades';
$string['inprogress'] = 'Em andamento';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Conclusão manual por outros';
$string['manualcompletionbynote'] = 'Nota: A permissão moodle/course:markcomplete deve ser permitido para um papel aparecer na lista.';
$string['manualselfcompletion'] = 'Conclusão manual por si mesmo';
$string['manualselfcompletionnote'] = 'Nota: O bloco de auto conclusão deverá ser adicionado ao curso se auto conclusão manual for ativada.';
$string['markcomplete'] = 'Marcar como concluído';
$string['markedcompleteby'] = 'Marcado como concluída por {$a}';
$string['markingyourselfcomplete'] = 'Se marcar como concluído';
$string['modifybulkactions'] = 'Modificar as ações que deseja editar em lote';
$string['moredetails'] = 'Mais detalhes';
$string['nocriteriaset'] = 'Não existem critérios de conclusão para este curso';
$string['nogradeitem'] = 'Requer nota não pôde ser ativado para <b>{$a}</b> porque a atividade não é avaliativa.';
$string['notcompleted'] = 'Não concluído';
$string['notenroled'] = 'Você não está inscrito neste curso';
$string['nottracked'] = 'Você não está sendo monitorado pelo sistema de conclusão neste curso';
$string['notyetstarted'] = 'Não iniciado ainda';
$string['overallaggregation'] = 'Condições de conclusão';
$string['overallaggregation_all'] = 'Curso concluído quando TODAS as condições forem atendidas';
$string['overallaggregation_any'] = 'Curso concluído quando qualquer UMA das condições forem atendidas';
$string['pending'] = 'Pendentes';
$string['periodpostenrolment'] = 'Período de pós-inscrição';
$string['privacy:metadata:completionstate'] = 'Se a atividade foi concluída';
$string['privacy:metadata:course'] = 'Um identificador de curso';
$string['privacy:metadata:coursecompletedsummary'] = 'Armazena informações sobre usuários que completaram critérios em um curso';
$string['privacy:metadata:coursemoduleid'] = 'O ID da atividade';
$string['privacy:metadata:coursemodulesummary'] = 'Armazena dados de conclusão de atividades para um usuário';
$string['privacy:metadata:coursesummary'] = 'Armazena os dados de conclusão do curso para um usuário.';
$string['privacy:metadata:gradefinal'] = 'Nota final recebida para conclusão do curso';
$string['privacy:metadata:overrideby'] = 'O ID do usuário da pessoa que cancelou a conclusão da atividade';
$string['privacy:metadata:reaggregate'] = 'Se a conclusão do curso foi reagregada.';
$string['privacy:metadata:timecompleted'] = 'O tempo em que o curso foi concluído.';
$string['privacy:metadata:timecreated'] = 'A hora em que a conclusão da atividade foi criada';
$string['privacy:metadata:timeenrolled'] = 'A hora em que o usuário foi inscrito no curso';
$string['privacy:metadata:timemodified'] = 'O horário em que a conclusão da atividade foi modificada';
$string['privacy:metadata:timestarted'] = 'A hora em que o curso foi iniciado.';
$string['privacy:metadata:unenroled'] = 'Se o usuário não foi inscrito no curso';
$string['privacy:metadata:userid'] = 'O ID do usuário da pessoa com dados de conclusão de curso e atividade';
$string['privacy:metadata:viewed'] = 'Se a atividade foi visualizada';
$string['progress'] = 'Progresso do estudante';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progresso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconhecimento de aprendizagem anterior';
$string['remainingenroledfortime'] = 'Permanecendo inscrito por um período específico de tempo';
$string['remainingenroleduntildate'] = 'Permanecer inscrito até uma data especificada';
$string['reportpage'] = 'Exibindo usuários {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Critérios exigidos';
$string['resetactivities'] = 'Limpar todas as atividades e recursos marcados';
$string['restoringcompletiondata'] = 'Escrevendo dados de conclusão';
$string['roleaggregation'] = 'Requer condição';
$string['roleaggregation_all'] = 'Todos os papéis selecionados para marcar para marcar quando a condição for atendida';
$string['roleaggregation_any'] = 'Quaisquer dos papéis selecionados para marcar quando a condição for atendida';
$string['roleidnotfound'] = 'ID do Papel {$a} não encontrado';
$string['saved'] = 'Salvo';
$string['seedetails'] = 'Ver detalhes';
$string['select'] = 'Selecione';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto conclusão';
$string['showcompletionconditions'] = 'Mostrar condições de conclusão da atividade';
$string['showcompletionconditions_help'] = 'As condições de conclusão da atividade são sempre mostradas na página da atividade. Esta configuração determina se as condições de conclusão da atividade serão mostradas abaixo de cada atividade na página do curso.';
$string['showinguser'] = 'Exibindo usuário';
$string['timecompleted'] = 'Tempo concluído';
$string['todo'] = 'Pendente';
$string['unenrolingfromcourse'] = 'Desinscrevendo do curso';
$string['unenrolment'] = 'Desinscrição';
$string['unit'] = 'Unidade';
$string['unlockcompletion'] = 'Desbloquear opções de conclusão';
$string['unlockcompletiondelete'] = 'Desbloquear opções de conclusão e excluir os dados de conclusão dos usuários';
$string['updateactivities'] = 'Atualizar status de conclusão das atividades selecionadas';
$string['usealternateselector'] = 'Usar o seletor de cursos alternativo';
$string['usernotenroled'] = 'Usuário não está inscrito neste curso';
$string['viewcoursereport'] = 'Ver relatório do curso';
$string['viewingactivity'] = 'Visualizando o {$a}';
$string['withconditions'] = 'Com condições';
$string['writingcompletiondata'] = 'Gravando dados de conclusão';
$string['xdays'] = '{$a} dias';
$string['yourprogress'] = 'Seu progresso';
