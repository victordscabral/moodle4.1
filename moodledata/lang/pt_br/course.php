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
 * Strings for component 'course', language 'pt_br', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Rodapé do seletor de atividades';
$string['activitychooseractivefooter_desc'] = 'O seletor de atividades pode oferecer suporte a plugins que adicionam itens ao rodapé.';
$string['activitychoosercategory'] = 'Seletor de atividades';
$string['activitychooserhidefooter'] = 'Sem rodapé';
$string['activitychooserrecommendations'] = 'Atividades recomendadas';
$string['activitychoosersettings'] = 'Configurações do seletor de atividades';
$string['activitychoosertabmode'] = 'Abas do seletor de atividades';
$string['activitychoosertabmode_desc'] = 'O seletor de atividades permite que um professor selecione facilmente atividades e recursos para adicionar ao seu curso. Esta configuração determina quais abas devem ser exibidas nele. Observe que a aba favoritos só é exibida para um usuário se ele marcou uma ou mais atividades com estrela e a aba recomendada só é exibida se um administrador do site tiver definido algumas atividades recomendadas.';
$string['activitychoosertabmodeone'] = 'Favoritos, Todos, Atividades, Recursos, Recomendados';
$string['activitychoosertabmodethree'] = 'Favoritos, Atividades, Recursos, Recomendados';
$string['activitychoosertabmodetwo'] = 'Favoritos, Todos, Recomendados';
$string['activitydate:closed'] = 'Fechado:';
$string['activitydate:closes'] = 'Fecha:';
$string['activitydate:opened'] = 'Aberto:';
$string['activitydate:opens'] = 'Abre:';
$string['aria:coursecategory'] = 'Categoria do curso';
$string['aria:courseimage'] = 'Imagem do curso';
$string['aria:coursename'] = 'Nome do curso';
$string['aria:courseshortname'] = 'Nome breve do curso';
$string['aria:defaulttab'] = 'Atividades padrão';
$string['aria:favourite'] = 'Curso é favorito';
$string['aria:favouritestab'] = 'Atividades favoritas';
$string['aria:modulefavourite'] = 'Favoritar a atividade {$a}';
$string['aria:recommendedtab'] = 'Atividades recomendadas';
$string['browsecourseadminindex'] = 'Navegue pela administração do curso com este índice.';
$string['browsesettingindex'] = 'Navegue pelas configurações com este índice.';
$string['completion_automatic:done'] = 'Feito:';
$string['completion_automatic:failed'] = 'Falhou:';
$string['completion_automatic:todo'] = 'A fazer:';
$string['completion_manual:aria:done'] = '{$a} está marcado como concluído. Pressione para desfazer.';
$string['completion_manual:aria:markdone'] = 'Marcar {$a} como feito';
$string['completion_manual:done'] = 'Concluído';
$string['completion_manual:markdone'] = 'Marcar como feito';
$string['completion_setby:auto:done'] = 'Feito: {$a->condition} (definido por {$a->setby})';
$string['completion_setby:auto:todo'] = 'A fazer: {$a->condition} (definido por {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} é marcada por {$a->setby} como concluída. Pressione para desfazer.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} é marcado por {$a->setby} como não concluída. Pressione para desfazer.';
$string['completionrequirements'] = 'Requisitos de conclusão para {$a}';
$string['courseaccess'] = 'Acesso ao curso';
$string['coursealreadyfinished'] = 'Curso finalizado';
$string['coursecontentnotification'] = 'Enviar notificação de alteração de conteúdo';
$string['coursecontentnotification_help'] = 'Marque a caixa para notificar os participantes do curso sobre esta atividade ou recurso novo ou alterado. Apenas os usuários que podem acessar a atividade ou recurso receberão a notificação.';
$string['coursecontentnotifnew'] = 'Novo conteúdo em {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> é novo no curso <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Altere suas preferências de notificação</a></p>';
$string['coursecontentnotifupdate'] = 'Conteúdo alterado em {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> foi alterado no curso <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Altere suas preferências de notificação</a></p>';
$string['coursenotyetfinished'] = 'O curso ainda não foi finalizado';
$string['coursenotyetstarted'] = 'O curso ainda não foi iniciado';
$string['courseparticipants'] = 'Participantes do curso';
$string['coursetoolong'] = 'O curso é extenso demais';
$string['customfield_islocked'] = 'Bloqueado';
$string['customfield_islocked_help'] = 'Se o campo está bloqueado, apenas os usuários com a permissão de alterar campos bloqueados (por padrão apenas usuários com o papel de gerente) conseguirão modificá-lo na página de configuração do curso.';
$string['customfield_notvisible'] = 'Ninguém';
$string['customfield_visibility'] = 'Visível para';
$string['customfield_visibility_help'] = 'Esta configuração determina quem consegue ver o nome do campo adicional e seu valor na lista de cursos ou no filtro disponível no Painel.';
$string['customfield_visibletoall'] = 'Todos';
$string['customfield_visibletoteachers'] = 'Professores';
$string['customfieldsettings'] = 'Configurações comuns para campos personalizados de curso';
$string['daystakingcourse'] = 'Dias de participação no curso';
$string['downloadcontent'] = 'Incluir no download de conteúdo do curso';
$string['downloadcontent_help'] = 'Essa atividade ou recurso deve ser incluído no arquivo zip do conteúdo do curso disponível para download? Arquivo, Pasta, Página e Rótulo podem ser totalmente baixados. Para todas as outras atividades e recursos, apenas o nome e a descrição são baixados. Esta opção requer que a opção de baixar o conteúdo do curso esteja habilitada nas configurações do curso.

A configuração não tem efeito no baixar conteúdo do aplicativo móvel para uso offline.';
$string['downloadcourseconfirmation'] = 'Você está prestes a baixar um arquivo zip com o conteúdo do curso (excluindo os itens que não podem ser baixados e quaisquer arquivos maiores que {$a}).';
$string['downloadcoursecontent'] = 'Baixar o conteúdo do curso';
$string['downloadcoursecontent_help'] = 'Esta configuração determina se o conteúdo do curso pode ser baixado por usuários com o permissão de baixar do conteúdo do curso (por padrão, usuários com papel de estudante ou professor).';
$string['enabledownloadcoursecontent'] = 'Permitir baixar o conteúdo do curso';
$string['errorendbeforestart'] = 'A data de término ({$a}) é anterior a data de início do curso.';
$string['favourite'] = 'Cursos favoritos';
$string['gradetopassnotset'] = 'Este curso não tem uma nota para aprovação definida. Ela pode ser definida no item de nota do curso (Configurações do livro de notas).';
$string['informationformodule'] = 'Informação sobre a atividade {$a}';
$string['module'] = 'Atividade';
$string['namewithlink'] = 'Nome da categoria com link';
$string['noaccesssincestartinfomessage'] = 'Olá, {$a->userfirstname},
<p>Alguns estudantes inscritos em {$a->coursename} nunca acessaram o curso.</p>';
$string['nocourseactivity'] = 'Sem atividades suficientes no curso entre a data de início e de término do curso';
$string['nocourseendtime'] = 'O curso não tem uma data de término';
$string['nocoursesections'] = 'Curso sem tópicos';
$string['nocoursestudents'] = 'Sem estudantes';
$string['norecentaccessesinfomessage'] = 'Olá, {$a->userfirstname},
<p>Alguns estudantes inscritos em {$a->coursename} não acessaram o curso recentemente.</p>';
$string['noteachinginfomessage'] = 'Olá, {$a->userfirstname},
<p>Foram identificados cursos a serem iniciados na próxima semana que ainda não possuem professores ou estudantes inscritos.</p>';
$string['participants:perpage'] = 'Número de participantes por página';
$string['participants:perpage_help'] = 'O número de usuários mostrados por página na página de participantes em cada curso.';
$string['privacy:completionpath'] = 'Conclusão do curso';
$string['privacy:favouritespath'] = 'Informação do curso favorito';
$string['privacy:metadata:activityfavouritessummary'] = 'O sistema do curso contém informações sobre quais itens do seletor de atividades foram favoritados pelo usuário.';
$string['privacy:metadata:completionsummary'] = 'O curso contém informações de conclusão sobre o usuário.';
$string['privacy:metadata:favouritessummary'] = 'O curso contém informações relacionadas ao curso marcado como favorito pelo usuário.';
$string['privacy:perpage'] = 'O número de cursos a serem exibidos por página.';
$string['recommend'] = 'Recomendar';
$string['recommendcheckbox'] = 'Recomendar atividade: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} após o início do curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes do início do curso';
$string['searchactivitiesbyname'] = 'Pesquisar atividades por nome';
$string['searchresults'] = 'Resultados da pesquisa: {$a}';
$string['studentsatriskincourse'] = 'Estudantes com risco em {$a} cursos';
$string['studentsatriskinfomessage'] = 'Olá, {$a->userfirstname},
<p>Os estudantes do curso {$a->coursename} foram identificados como estando em risco.</p>';
$string['submitsearch'] = 'Enviar pesquisa';
$string['target:coursecompetencies'] = 'Estudantes com risco de não conseguir as competências definidas para o curso';
$string['target:coursecompetencies_help'] = 'Este objetivo descreve se um estudante está com risco de não conseguir as competências definidas para o curso. Este alvo considera que todas as competências definidas para o curso devem ser completadas até o término do curso.';
$string['target:coursecompletion'] = 'Estudantes com risco de não cumprir as condições de conclusão do curso';
$string['target:coursecompletion_help'] = 'Este objetivo descreve se um estudante está com risco de não cumprir as condições de conclusão do curso.';
$string['target:coursedropout'] = 'Estudantes com risco de desistir';
$string['target:coursedropout_help'] = 'Este objetivo descreve se um estudante está com risco de desistir.';
$string['target:coursegradetopass'] = 'Estudantes com risco de não atingir a nota mínima para aprovação no curso';
$string['target:coursegradetopass_help'] = 'Este objetivo descreve se o estudante está em risco de não atingir a nota mínima para aprovação no curso.';
$string['target:noaccesssincecoursestart'] = 'Estudantes que ainda não acessaram o curso';
$string['target:noaccesssincecoursestart_help'] = 'Este alvo descreve os estudantes que nunca acessaram um curso em que estão matriculados.';
$string['target:noaccesssincecoursestartinfo'] = 'Os seguintes estudantes estão inscritos em um curso iniciado, mas nunca acessaram o curso.';
$string['target:norecentaccesses'] = 'Estudantes que não acessaram o curso recentemente';
$string['target:norecentaccesses_help'] = 'Este objetivo identifica os estudantes que não acessaram um curso que estão matriculados dentro do intervalo de análise definido (por padrão, o mês anterior).';
$string['target:norecentaccessesinfo'] = 'Os seguintes estudantes não acessaram um curso em que estão inscritos dentro do intervalo de análise definido (por padrão, no mês passado).';
$string['target:noteachingactivity'] = 'Cursos com risco de não iniciar';
$string['target:noteachingactivity_help'] = 'Este objetivo descreve se os cursos programados para começar na próxima semana terão atividades de ensino.';
$string['target:noteachingactivityinfo'] = 'Os cursos a seguir, que devem começar nos próximos dias, correm o risco de não começar porque eles não têm professores ou estudantes inscritos.';
$string['targetlabelstudentcompetenciesno'] = 'Estudante com probabilidade de conseguir as competências definidas para o curso';
$string['targetlabelstudentcompetenciesyes'] = 'Estudante com risco de não conseguir as competências definidas para o curso';
$string['targetlabelstudentcompletionno'] = 'Estudante com probabilidade de cumprir as condições de conclusão do curso';
$string['targetlabelstudentcompletionyes'] = 'Estudante com risco de não cumprir as condições de conclusão do curso';
$string['targetlabelstudentdropoutno'] = 'Sem risco';
$string['targetlabelstudentdropoutyes'] = 'Estudante com risco de desistir';
$string['targetlabelstudentgradetopassno'] = 'Estudante com probabilidade de atingir a nota mínima para aprovação no curso.';
$string['targetlabelstudentgradetopassyes'] = 'Estudante com risco de não atingir a nota mínima para aprovação no curso.';
$string['targetlabelteachingno'] = 'Cursos em risco de não iniciar';
$string['targetlabelteachingyes'] = 'Usuários com permissões de professor que têm acesso ao curso';
