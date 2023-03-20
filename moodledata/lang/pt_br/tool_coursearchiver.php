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
 * Strings for component 'tool_coursearchiver', language 'pt_br', version '4.1'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Último acesso depois de';
$string['accessbefore'] = 'Último acesso antes de';
$string['accessbeforeafter'] = 'Último acesso antes/depois de';
$string['anycategory'] = 'Qualquer categoria';
$string['archive'] = 'Arquivar cursos';
$string['archivedeletesetting'] = 'Atraso para exclusão de arquivos';
$string['archivedeletesetting_help'] = 'Em quantos dias será atrasada a exclusão de arquivos.';
$string['archiveemail'] = 'Enviar emails "Curso será arquivado"';
$string['archivelimit'] = 'Limitador da busca de cursos arquivados';
$string['archivelimit_help'] = 'Quantidade máxima de resultados que serão exibidos na tela';
$string['archivelimitstring'] = 'Máximo mostrado';
$string['archivelist'] = 'Cursos arquivados';
$string['archivelocation'] = 'Subdiretório dos cursos arquivados';
$string['archiverecoverform'] = 'Exclusão pendente';
$string['archivewarningemailsetting'] = 'Mensagem de Alerta Padrão para Arquivamento do Curso';
$string['archivewarningemailsetting_help'] = 'Este é o conteúdo de um email que será enviado a todos os professores de um curso selecionado para arquivamento.';
$string['archivewarningemailsettingdefault'] = '%to

Gostaríamos de informar que os seguintes cursos do Moodle que você lecionou serão arquivados em breve.
Isso significa que será feito um backup do curso em seu estado atual e, em seguida, removido do Moodle. Se você gostaria de ignorar este processo para algum dos cursos abaixo, por favor, clique no link ao lado do curso.

%courses

Obrigado.';
$string['archivewarningsubject'] = 'Aviso: Há cursos que serão arquivados em breve.';
$string['back'] = 'Começar novamente';
$string['cannotdeletecoursenotexist'] = 'Não é possível apagar um curso que não existe';
$string['category'] = 'Categoria';
$string['cli_cannot_continue'] = '\\nPARADO: Dados insuficientes para continuar.\\n';
$string['cli_question_archive'] = 'Arquivar e apagar estes {$a} cursos?';
$string['cli_question_archiveemail'] = 'Enviar a estes {$a} usuários um email "Curso será arquivado"?';
$string['cli_question_delete'] = 'Excluir estes {$a} cursos?';
$string['cli_question_hide'] = 'Ocultar estes {$a} cursos?';
$string['cli_question_hideemail'] = 'Enviar a estes {$a} usuários um email "Curso será ocultado"?';
$string['confirm'] = 'Continuar';
$string['confirmdelete'] = 'Tem certeza de que deseja excluir?';
$string['confirmmessage'] = 'Tem certeza que quer {$a}';
$string['confirmmessagearchive'] = 'arquivar e remover estes {$a} cursos?';
$string['confirmmessagearchiveemail'] = 'enviar um e-mail para estes {$a} proprietários de cursos?';
$string['confirmmessagedelete'] = 'remover completamente estes {$a} cursos?';
$string['confirmmessagehide'] = 'ocultar estes {$a} cursos?';
$string['confirmmessagehideemail'] = 'enviar um e-mail para estes {$a} proprietários de cursos?';
$string['confirmmessageoptout'] = 'ignorar estes {$a} cursos?';
$string['confirmrestore'] = 'Restaurar a exclusão de arquivamento pendente?';
$string['course_readded'] = '{$a->fullname} foi removido da lista de cursos ignorados. Obrigado.';
$string['course_skipped'] = '{$a->fullname} será ignorado nos próximos {$a->optoutmonths} mêses. Obrigado.';
$string['coursearchiver'] = 'Arquivador de cursos';
$string['coursearchiver_help'] = 'Buscar cursos utilizando os seguintes critérios: combinar nome curto, nome completo, número de identificação, courseid, data de último acesso ao curso, ou *cursos vazios.\\n
Cursos são exibidos em cinza se já estiverem ocultos. O nome completo do curso estará riscado se for um *curso vazio.\\n\\n
OBSERVAÇÃO: A busca por último acesso somente exibirá cursos que foram criados antes da data informada.\\n
OBSERVAÇÃO: A quantidade de email encontrados pode ser diferente dos emails enviados. Devido a dois motivos.\\n
   1. Um curso que já está oculto não enviará um email para notificar seus responsáveis se selecionado para ser ocultado.\\n
   2. Um único email exibido em múltiplos cursos será consolidado em um único email.\\n\\n
*são definidos como cursos vazios os que apresentam 0 atividades, 0 recursos, 0 categorias no livro de notas e 0 itens de nota no livro de notas.';
$string['coursearchiver_settings'] = 'Configurações do arquivador de curso';
$string['coursearchiverpath'] = 'Caminho da pasta para armazenar cursos arquivados';
$string['coursearchiverpath_help'] = 'Este caminho é relativo ao Moodle $CFG->dataroot';
$string['coursearchiverpreview'] = 'Pré-visualização do upload de cursos';
$string['coursearchiverresult'] = 'Resultado do upload de cursos';
$string['coursedeleted'] = 'Curso excluído';
$string['coursedeletionnotallowed'] = 'A exclusão do curso não é permitida';
$string['coursefullname'] = 'Nome completo do curso';
$string['courseid'] = 'ID do curso';
$string['courseidnum'] = 'Número de identificação do curso';
$string['courseselector'] = 'Resultado da pesquisa de cursos';
$string['courseshortname'] = 'Nome breve do curso';
$string['courseteacher'] = 'Nome de usuário/email do professor';
$string['createdafter'] = 'Criado depois de';
$string['createdbefore'] = 'Criado antes de';
$string['createdbeforeafter'] = 'Criado antes/depois de';
$string['crontask'] = 'Trabalho de exclusão de cursos arquivados';
$string['delete'] = 'Excluir cursos';
$string['deletedarchiveemails'] = 'Endereços de email dos professores';
$string['deselectall'] = 'Desmarcar todos';
$string['email'] = 'Enviar email';
$string['emailselector'] = 'Usuários selecionados para receber emails.';
$string['empty'] = 'vazio';
$string['emptycourse'] = 'Curso vazio';
$string['emptyonly'] = 'Exibir apenas cursos vazios';
$string['endafter'] = 'Termina depois de';
$string['endbefore'] = 'Termina antes de';
$string['error_key'] = 'A chave de segurança está incorreta.';
$string['error_nocourseid'] = 'O registro do curso não continha um ID';
$string['errorarchivefile'] = 'O arquivo do curso arquivado não existe.';
$string['errorarchivepath'] = 'O caminho do arquivo não pôde ser criado.';
$string['errorarchivingcourse'] = 'Curso: ({$a->id}) {$a->fullname} não pôde ser arquivado.';
$string['errorbackup'] = 'O backup falhou.';
$string['errordeletingcourse'] = 'O curso: ({$a->id}) {$a->fullname} não pôde ser excluído.';
$string['erroremptysearch'] = 'Nenhum critério de pesquisa foi dado.';
$string['errorhidingcourse'] = 'O curso: ({$a->id}) {$a->fullname} não pôde ser escondido.';
$string['errorinsufficientdata'] = 'Não há informações suficientes para executar esta ação';
$string['errormissingcourses'] = 'A variável %courses estava ausente no modelo de email. Esta é uma lista dos cursos.';
$string['errormissingto'] = 'A variável %to estava ausente no modelo de email. Este é o nome do destinatário.';
$string['errornoform'] = 'Formulário não informado.';
$string['errornonnumericid'] = 'O ID do curso deve ser numérico';
$string['errornonnumerictimestamp'] = 'Timestamp deve ser numérico (UNIX timestamp)';
$string['erroroptoutcourse'] = 'O curso: ({$a->id}) {$a->fullname} não pôde ser ignorado.';
$string['errors'] = 'Erros';
$string['errors_count'] = 'Erros: {$a}';
$string['errorsendingemail'] = 'O e-mail para {$a->firstname} {$a->lastname} ({$a->email}) falhou.';
$string['errorvalidarchive'] = 'Arquivo de backup inválido.';
$string['hidden'] = 'oculto';
$string['hide'] = 'Ocultar cursos';
$string['hideemail'] = 'Enviar emails "Curso será ocultado"';
$string['hidewarningemailsetting'] = 'Email padrão de alerta para curso que será ocultado';
$string['hidewarningemailsetting_help'] = 'Este é o conteúdo de um email que será enviado a todos os professores de um curso que esteja selecionado para ficar oculto.';
$string['hidewarningemailsettingdefault'] = '%to

Gostaríamos de informar que os seguintes cursos do Moodle que você lecionou serão ocultados em breve.
Isso significa que os estudantes que estão inscritos nos cursos não terão mais acesso a eles. Se você deseja ignorar este processo para algum dos cursos abaixo, por favor, clique no link ao lado do curso.

%courses

Obrigado.';
$string['hidewarningsubject'] = 'Aviso: os cursos serão escondidos em breve.';
$string['includesubcat'] = 'Incluir cursos em subcategorias';
$string['invalidmode'] = 'Não foi fornecido um modo válido para a ferramenta.';
$string['messageprovider:courseowner'] = 'Notificações da ferramenta de arquivamento/ocultação de cursos.';
$string['never'] = 'Nunca';
$string['nocoursesfound'] = 'A pesquisa não encontrou nenhum curso.';
$string['nocoursesselected'] = 'Para executar esta ação, você deve ter pelo menos um curso selecionado.';
$string['noticecoursehidden'] = 'Curso: ({$a->id}) {$a->fullname} já estava oculto.';
$string['notices'] = 'Avisos';
$string['notices_count'] = 'Avisos: {$a}';
$string['nousersfound'] = 'Não há proprietários do curso para notificar';
$string['nousersselected'] = 'Para executar esta ação, você deve ter pelo menos um usuário selecionado.';
$string['optout'] = 'Ignorar cursos';
$string['optoutarchive'] = 'Não arquive este curso';
$string['optoutby'] = 'Requerido por';
$string['optouthide'] = 'Não oculte este curso';
$string['optoutleft'] = '{$a} dias restantes';
$string['optoutlist'] = 'Gerenciar lista de cursos ignorados';
$string['optoutmonthssetting'] = 'Duração de cursos ignorados';
$string['optoutmonthssetting_help'] = 'Por quantos meses um curso permanecerá sendo ignorado.';
$string['optouttime'] = 'Tempo restante';
$string['outaccess'] = 'Último acesso';
$string['outemail'] = 'Email';
$string['outfirstname'] = 'Primeiro nome';
$string['outfullname'] = 'Nome completo';
$string['outid'] = 'ID';
$string['outidnumber'] = 'Número de identificação';
$string['outlastname'] = 'Sobrenome';
$string['outowners'] = 'Proprietários do curso';
$string['outselected'] = 'Selecionar';
$string['outshortname'] = 'Nome breve';
$string['outuse'] = 'Último uso';
$string['pluginname'] = 'Arquivador de Cursos';
$string['privacy:metadata'] = 'O plugin não contém dados de usuários.';
$string['processarchiving'] = 'Arquivando cursos selecionados';
$string['processcomplete'] = 'Processo completo';
$string['processdeleting'] = 'Excluindo cursos selecionados';
$string['processemailing'] = 'Enviando emails';
$string['processhiding'] = 'Ocultando cursos selecionados';
$string['processoptout'] = 'Ignorando cursos selecionados';
$string['processstarted'] = 'Processo já foi iniciado';
$string['recover'] = 'Recuperar cursos';
$string['results'] = 'Resultados';
$string['results_archive'] = 'Cursos arquivados: {$a}';
$string['results_archiveemail'] = 'Emails de aviso de arquivamento de curso enviados: {$a}';
$string['results_courselist'] = 'Cursos listados: {$a}';
$string['results_delete'] = 'Cursos excluídos: {$a}';
$string['results_getemails'] = 'Endereços de email reunidos: {$a}';
$string['results_hide'] = 'Cursos ocultados: {$a}';
$string['results_hideemail'] = 'E-mails de aviso de curso ocultos enviados: {$a}';
$string['results_optout'] = 'Cursos ignorados: {$a}';
$string['resume'] = 'Continuar';
$string['resumenone'] = 'Ponto de salvamento não encontrado';
$string['resumeselect'] = 'Escolha um ponto de salvamento';
$string['save'] = 'Criar um ponto de salvamento';
$string['saved'] = 'O ponto de salvamento foi criado';
$string['search'] = 'Procurar por cursos';
$string['selectall'] = 'Selecionar todos';
$string['startafter'] = 'Inicia depois de';
$string['startbefore'] = 'Inicia antes de';
$string['startend'] = 'Data de início/término';
$string['status'] = 'Status';
$string['step2savetitle'] = '{$a} lista de cursos salvos';
$string['step3savetitle'] = '{$a} lista de emails salva';
$string['unknownerror'] = 'O processo resultou em um erro que requer uma reinicialização do processo.';
$string['visible'] = 'visível';
