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
 * Strings for component 'studentquiz', language 'pt_br', version '4.1'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Cancelar';
$string['add_comment'] = 'Adicionar comentário';
$string['after_answering_end_date'] = 'Este StudentQuiz fechou para resposta as {$a}';
$string['after_submission_end_date'] = 'Este StudentQuiz fechou para envio de questões em {$a}';
$string['answeringndbeforestart'] = 'A data limite de resposta não pode ser anterior à data de abertura para resposta';
$string['api_state_change_success_content'] = 'O estado/visibilidade foi alterado com sucesso';
$string['api_state_change_success_title'] = 'Sucesso';
$string['approve'] = 'Executar';
$string['approve_toggle'] = 'Reprovar/Aprovar';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprovada';
$string['approved_veryshort'] = 'A';
$string['approveselectedscheck'] = 'Tem certeza de que deseja aprovar/reprovar as seguintes questões?<br /><br />{$a}';
$string['average_column_name'] = 'Média';
$string['before_answering_end_date'] = 'Este StudentQuiz fechará para respostas em {$a}';
$string['before_answering_start_date'] = 'Abre para responder em {$a}';
$string['before_submission_end_date'] = 'Este StudentQuiz fechará para envio de questões em {$a}';
$string['before_submission_start_date'] = 'Abre para envio de questões em {$a}.';
$string['collapseall'] = 'Contrair todos os comentários';
$string['collapsecomment'] = 'Contrair comentário';
$string['comment_author'] = 'Autor';
$string['comment_column_name'] = 'Comentários';
$string['comment_error'] = 'Adicione um comentário';
$string['comment_error_unsaved'] = 'Deseja salvar este comentário?';
$string['comment_help'] = 'Adicione um comentário';
$string['comment_help_help'] = 'Adicione um comentário à questão';
$string['comment_veryshort'] = 'C';
$string['createnewquestion'] = 'Criar nova questão';
$string['createnewquestionfirst'] = 'Criar primeira questão';
$string['creator_anonym_fullname'] = 'Estudante anônimo';
$string['current_of_total'] = '{$a->current} de {$a->total}';
$string['delete'] = 'Excluir';
$string['deletecomment'] = 'Excluir comentário';
$string['deletedbyauthor'] = 'Este post foi excluído em {$a}.';
$string['deletedbyuser'] = 'Este post foi excluído por {$a->user} em {$a->date}.';
$string['deletedcomment'] = 'Comentário excluído.';
$string['describe_already_deleted'] = 'Este comentário já foi excluído.';
$string['difficulty_all_column_name'] = 'Dificuldade da comunidade';
$string['difficulty_level_column_name'] = 'Dificuldade';
$string['difficulty_title'] = 'Barra de dificuldade';
$string['editedcommenthistory'] = 'Editado por {$a->lastesteditedcommentauthorname} em {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Histórico';
$string['emailcommentaddedbody'] = 'Caro(a) {$a->recepientname},

Sua questão \'{$a->questionname}\' na atividade StudentQuiz \'{$a->modulename}\' do curso \'{$a->coursename}\' foi comentada por {$a->actorname} em {$a->timestamp}.

Comentário adicionado: \'{$a->commenttext}\'

Você pode rever a questão em: {$a->questionurl}';
$string['emailcommentaddedsmall'] = 'Sua questão \'{$a->questionname}\' foi comentada por {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'Questão que foi comentada: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Caro/a {$a->recepientname},

O comentário em \'{$a->commenttime}\' sobre sua questão \'{$a->questionname}\' na atividade StudentQuiz \'{$a->modulename}\' do curso \'{$a->coursename}\' foi excluído por \'{actorname}\' em {$a->timestamp}

Comentário excluído : \'{$a->commenttext}\'

Você pode rever a questão em: {$a->questionurl}';
$string['emailcommentdeletedsmall'] = 'O comentário da sua questão \'{$a->questionname}\' foi excluído {$a->actorname}';
$string['emailcommentdeletedsubject'] = 'Comentário excluído da questão: {$a->questionname}';
$string['emaildigestbody'] = 'Este é seu resumo {$a->digesttype} de notificações da atividade <b>{$a->modulename}</b> StudentQuiz, disponível aqui:';
$string['emaildigestbody_section_title'] = 'Notificação {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'StudentQuiz Resumo das Noticifações';
$string['emailminecommentdeletedbody'] = 'Caro/a {$a->recepientname},

O seu comentário efetuado em \'{$a->commenttime}\' à questão \'{$a->questionname}\' na atividade StudentQuiz \'{$a->modulename}\' do curso \'{$a->coursename}\' foi excluído por {$a->actorname} em {$a->timestamp}.

Comentário excluído: \'{$a->commenttext}\'

Você pode rever a questão em: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Seu comentário na questão \'{$a->questionname}\' foi excluído por {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Comentário excluído da questão: \'{$a->questionname} .';
$string['emailsalutation'] = 'Caro(a) {$a},';
$string['emailsinglebody'] = 'Sua questão <b>{$a->questionname}</b> na atividade StudentQuiz <b>{$a->modulename}</b> no curso <b>{$a->coursename}</b> foi {$a->eventname} por <b>{$a->actorname}</b> em <b>{$a->timestamp}</b>.';
$string['error_form_validation'] = '{$a}';
$string['expandall'] = 'Expandir todos os comentários.';
$string['expandcomment'] = 'Expandir comentário.';
$string['filter'] = 'Filtro';
$string['filter_advanced_element'] = '{$a} (elemento avançado)';
$string['filter_comment_label_date'] = 'Data';
$string['filter_comment_label_forename'] = 'Primeiro nome';
$string['filter_comment_label_sort_by'] = 'Ordenar por:';
$string['filter_comment_label_sort_toggle'] = 'Ordenar por  {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Sobrenome';
$string['filter_ishigher'] = 'É maior';
$string['filter_islower'] = 'É menor';
$string['filter_label_approved'] = 'Questões aprovadas';
$string['filter_label_comment'] = 'Comentários';
$string['filter_label_createdate'] = 'Data de criação';
$string['filter_label_difficulty_level'] = 'Dificuldade';
$string['filter_label_fast_filters'] = 'Filtro rápido das questões';
$string['filter_label_myattempts'] = 'Minhas tentativas';
$string['filter_label_mydifficulty'] = 'Minha dificuldade';
$string['filter_label_mylastattempt'] = 'Minha última tentativa';
$string['filter_label_myrate'] = 'Minha avaliação';
$string['filter_label_onlyapproved'] = 'Aprovado';
$string['filter_label_onlyapproved_help'] = 'Questões aprovadas pelo professor';
$string['filter_label_onlydifficult'] = 'Difícil para todos';
$string['filter_label_onlydifficult_help'] = 'Questão com dificuldade média maior que {$a}';
$string['filter_label_onlydifficultforme'] = 'Difícil para mim';
$string['filter_label_onlydifficultforme_help'] = 'Questões com minha dificuldade maior que {$a}%';
$string['filter_label_onlygood'] = 'Bom';
$string['filter_label_onlygood_help'] = 'Questão com avaliação média de pelo menos {$a} estrelas';
$string['filter_label_onlymine'] = 'Minha';
$string['filter_label_onlymine_help'] = 'Questões criadas por você';
$string['filter_label_onlynew'] = 'Não respondidas';
$string['filter_label_onlynew_help'] = 'Questões ainda não respondidas';
$string['filter_label_question'] = 'Títulos das questões';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Conteúdo da questão';
$string['filter_label_rates'] = 'Avaliação';
$string['filter_label_show_mine'] = 'Minhas questões';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Terminar';
$string['invalidcomment'] = 'comentário inválido';
$string['invalidemail'] = 'Este email não é válido. Por favor insira um email único.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Última tentativa correta';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Última tentativa incorreta';
$string['latest_column_name'] = 'Última';
$string['manager_anonym_fullname'] = 'Gerente Anônimo';
$string['message'] = 'Mensagem';
$string['messageprovider:commentadded'] = 'Notificação de comentário adicionado';
$string['messageprovider:commentdeleted'] = 'Notificação de comentário excluído';
$string['messageprovider:minecommentdeleted'] = 'Notificação do meu comentário excluído';
$string['messageprovider:questionchanged'] = 'Notificação de evento da questão';
$string['migrate_already_done'] = 'Nada foi alterado porque esta atividade já foi migrada!';
$string['migrate_ask'] = 'A velocidade do StudentQuiz melhorou com a versão 3.2.1, mas este conjunto de questões ainda está baseado numa versão anterior.
As questões e questionários serão carregados mais rapidamente se executar essa migração de aceleração. Irá ocorrer um um carregamento mais rápido; nada será alterado.';
$string['migrate_studentquiz'] = 'Faça a migração das questões anteriores do StudentQuiz  para a versão 3.2.1 para a versão mais rápida com valores agregados.';
$string['migrate_studentquiz_short'] = 'Acelere este conjunto de questões';
$string['migrated_successful'] = 'A migração da atividade foi realizada com sucesso!';
$string['mine_column_name'] = 'Minha';
$string['moderator'] = 'Moderador';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'A atividade StudentQuiz permite que os estudantes adicionem questões para a comunidade. Na vista geral do StudentQuiz, os estudantes podem filtrar as questões. Também podem usar as questões filtradas na comunidade para praticar. O professor tem a opção de tornar anonimizar o criador da questão pela coluna.<br><br>A atividade StudentQuiz premia os estudantes com pontos para motivá-los a adicionar questões e a praticar. Os pontos são listados numa tabela de classificação.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['more'] = 'Mais';
$string['myattempts_column_name'] = 'Minhas tentativas';
$string['mydifficulty_column_name'] = 'Minha dificuldade';
$string['mylastattempt_column_name'] = 'Minha última tentativa';
$string['myrate_column_name'] = 'Minha Avaliação';
$string['nav_export'] = 'Exportar';
$string['nav_import'] = 'Importar';
$string['nav_question_no'] = 'Questão {$a->current} de {$a->total}';
$string['needtoallowatleastoneqtype'] = 'É necessário permitir pelo menos um tipo de questão';
$string['next_button'] = 'Próximo';
$string['no_comment'] = 'n.d';
$string['no_comments'] = 'Sem comentários';
$string['no_difficulty_level'] = 'n.d';
$string['no_myattempts'] = 'n.d';
$string['no_mylastattempt'] = 'n.d';
$string['no_mylastattempt_label'] = 'Nenhuma tentativa nesta questão';
$string['no_questions_add'] = 'Ainda não existem questões neste StudentQuiz. Fique a vontade de adicionar uma questão.';
$string['no_questions_filter'] = 'Nenhuma das questões corresponde aos critérios de filtro. Limpe o filtro para ver tudo.';
$string['no_questions_selected_message'] = 'Tem que selecionar pelo menos uma questão para iniciar o teste.';
$string['no_rates'] = 'n.d';
$string['no_tags'] = 'n.d';
$string['nocommenthistoryexist'] = 'Ainda não há histórico para este comentário.';
$string['not_approved'] = '✗';
$string['notshowratingcomment'] = 'Observação: a avaliação e o comentário não estão disponíveis no modo de visualização para sua própria questão';
$string['num_questions'] = '{$a} questões';
$string['number_column_name'] = 'Número';
$string['numberreply'] = '{$a} Respostas';
$string['pagesize'] = 'Tamanho da página:';
$string['please_enrole_message'] = 'Inscreva-se nesta disciplina para ver seu progresso pessoal';
$string['pluginadministration'] = 'Administração do StudentQuiz';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Anterior';
$string['privacy:metadata:studentquiz_attempt'] = 'Representa uma tentativa de resposta do usuário a um conjunto de questões';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID da categoria';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID do uso da questão';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID do StudentQuiz';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID do usuário';
$string['privacy:metadata:studentquiz_comment'] = 'Armazena comtários das questões';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Comentário da questão';
$string['privacy:metadata:studentquiz_comment:created'] = 'Data/Hora da criação do comentário';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID do usuário';
$string['privacy:metadata:studentquiz_notification:status'] = 'Status da notificação';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'ID do StudentQuiz';
$string['privacy:metadata:studentquiz_progress'] = 'Armazena informação do progresso do estudante nesta questão';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Número de tentativas para responder a esta questão';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Número de respostas corretas';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: a última resposta estava errada ou indefinida, 1: a última resposta estava correta';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID do StudentQuiz.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID do usuário';
$string['privacy:metadata:studentquiz_rate'] = 'Armazena as avaliações das questões';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Avaliação da questão';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID do usuário';
$string['progress_bar_caption'] = 'O seu progresso nesta atividade StudentQuiz';
$string['questionsinuse'] = '(* Questões marcadas com um asteriscos já estão em uso em alguns testes.)';
$string['ranking_block_title'] = 'Classificação';
$string['ranking_block_title_anonymised'] = 'Classificação (anonimizado)';
$string['rate_all_column_name'] = 'Avaliação da comunidade';
$string['rate_column_name'] = 'Avaliação';
$string['rate_error'] = 'Por favor, avalie a questão.';
$string['rate_help'] = 'Avalie esta questão';
$string['rate_help_help'] = 'Avaliar esta questão: <br /> 1 estrela é muito ruim, 5 estrelas é muito boa';
$string['rate_multi_stars_desc'] = '{$a} estrelas selecionadas';
$string['rate_one_star_desc'] = '1 estrela selecionada';
$string['rate_points'] = 'Pontos';
$string['rate_title'] = 'Avaliar';
$string['ratingbar_title'] = 'Barra da avaliação';
$string['remove_comment'] = 'Remover';
$string['remove_comment_label'] = 'Remover comentário';
$string['replies'] = 'Respostas';
$string['reply'] = 'Resposta';
$string['replycomment'] = 'Resposta';
$string['report_comment_condition1'] = 'É abusivo';
$string['report_comment_condition3'] = 'Contem conteúdo obsceno, como pornografia';
$string['reportcomment'] = 'Relatório';
$string['reportquiz_admin_title'] = 'Estatísticas do estudante';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Média das últimas repostas corretas da comunidade';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Média das última respostas incorretas da comunidade';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Porcentagem de respostas corretas da comunidade';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Soma das respostas corretas / soma de todas as respostas.';
$string['reportquiz_stats_all_progress'] = 'Progresso médio da comunidade';
$string['reportquiz_stats_all_progress_help'] = 'Progresso médio da comunidade com base em todos os membros da comunidade.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Média de respostas corretas da comunidade';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Média de resposta incorretas da comunidade';
$string['reportquiz_stats_all_questions_answered'] = 'Média de todas as respostas da comunidade';
$string['reportquiz_stats_all_questions_answered_help'] = 'Número médio de respostas dadas por todos os membros da comunidade.';
$string['reportquiz_stats_all_questions_approved'] = 'Número de questões aprovadas';
$string['reportquiz_stats_all_questions_approved_help'] = 'Os professores podem aprovar questões para verificar a correção. Este número corresponde a todas as questões aprovadas neste StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Número de questões neste StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Número de questões criadas pela comunidade';
$string['reportquiz_stats_all_rates_average'] = 'Avaliação média de todas as questões';
$string['reportquiz_stats_all_rates_average_help'] = 'A avaliação de cada questão é a média das estrelas que recebeu da comunidade. Exemplo: a comunidade criou 4 questões. Se a questão A tiver sido avaliada como 3 estrelas pela comunidade, a questão B = 4 estrelas,  questão C = 2 estrelas e A questão D = 5 estrelas, então a avaliação média de todas as questões é de 3,5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Número das suas últimas respostas corretas';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Número das suas últimas respostas icorrentas';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Porcentagem das suas respostas corretas';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Porcentagem do total das suas respostas corretas em relação ao conjunto de todas as questões deste StudentQuiz. As respostas parcialmente corretas contam como respostas incorretas.';
$string['reportquiz_stats_own_progress'] = 'Progresso pessoal';
$string['reportquiz_stats_own_progress_help'] = 'Porcentagem das suas últimas respostas corretas em relação ao conjunto de todas as questões neste StudentQuiz. As respostas parcialmente corretas contam como respostas incorretas.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total das suas respostas corretas';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total das suas respostas incorretas';
$string['reportquiz_stats_own_questions_answered'] = 'Total de todas as suas respostas';
$string['reportquiz_stats_own_questions_answered_help'] = 'Número de todas as suas repostas dadas neste StudentQuiz.';
$string['reportquiz_stats_own_questions_approved'] = 'Número de questões suas aprovadas';
$string['reportquiz_stats_own_questions_approved_help'] = 'Os professores podem aprovar questões para verificar a correção. Este é o número de questões suas aprovadas neste StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Número de questões que já contribuiu';
$string['reportquiz_stats_own_questions_created_help'] = 'Número de questões que já contribuiu neste StudentQuiz';
$string['reportquiz_stats_own_rates_average'] = 'A sua avaliação média obtida';
$string['reportquiz_stats_own_rates_average_help'] = 'A avaliação de cada questão é a média das estrelas que recebeu da comunidade. Exemplo: criou as questões A e B. Se a sua questão A foi avaliada como 3 estrelas pela comunidade e a sua questão B foi avaliada como 4 estrelas, a sua avaliação média recebida é de 3,5.';
$string['reportquiz_stats_title'] = 'Estatísticas';
$string['reportquiz_total_attempt'] = 'Número de vezes que tentou o teste';
$string['reportquiz_total_obtained_marks'] = 'Nota total';
$string['reportquiz_total_questions_answered'] = 'Total de respostas';
$string['reportquiz_total_questions_right'] = 'Total de questões corretas';
$string['reportquiz_total_questions_wrong'] = 'Respostas incorretas';
$string['reportquiz_total_users'] = 'Número de participantes';
$string['reportrank_table_column_approvedquestions'] = 'Pontos para questões aprovadas';
$string['reportrank_table_column_communitystatus'] = 'Estatísticas da comunidade';
$string['reportrank_table_column_correctanswers'] = 'Respostas corretas';
$string['reportrank_table_column_countquestions'] = 'Pontos para as questões criadas';
$string['reportrank_table_column_description'] = 'Descrição';
$string['reportrank_table_column_factor'] = 'Pontos';
$string['reportrank_table_column_fullname'] = 'Nome completo';
$string['reportrank_table_column_incorrectanswers'] = 'Respostas incorretas';
$string['reportrank_table_column_lastcorrectanswers'] = 'Pontos para as últimas tentativas corretas';
$string['reportrank_table_column_lastincorrectanswers'] = 'Pontos para as últimas tentativas incorretas';
$string['reportrank_table_column_points'] = 'Pontos';
$string['reportrank_table_column_progress'] = 'Progresso pessoal';
$string['reportrank_table_column_quantifier_name'] = 'Nome';
$string['reportrank_table_column_rank'] = 'Posição';
$string['reportrank_table_column_summeanrates'] = 'Pontos para as estrelas recebidas';
$string['reportrank_table_column_total_points'] = 'Total de pontos';
$string['reportrank_table_column_value'] = 'Valor';
$string['reportrank_table_column_yourstatus'] = 'Estatísticas pessoais';
$string['reportrank_table_quantifier_caption'] = 'Cálculo da pontuação';
$string['reportrank_table_title'] = 'Pontuação do estudante - Top 10';
$string['reportrank_table_title_for_manager'] = 'Pontuação do estudante';
$string['reportrank_title'] = 'Pontuação';
$string['review_button'] = 'Rever';
$string['savechanges'] = 'Salvar mudanças';
$string['setting_question_publishing'] = 'Publicar questão';
$string['setting_question_publishing_automatic'] = 'Publicar questões automaticamente';
$string['settings_allowallqtypes'] = 'Permitir todos os tipos de questão';
$string['settings_allowedqtypes'] = 'Tipos de questão permitidos';
$string['settings_allowedqtypes_help'] = 'Limitar os tipos de questão permitidos aos registros selecionados';
$string['settings_anonymous'] = 'Tornar estudantes anônimos';
$string['settings_anonymous_help'] = 'Os estudantes não podem ver os nomes uns dos outros.';
$string['settings_anonymous_label'] = 'Tornar os estudantes anônimos';
$string['settings_approvedquantifier'] = 'Valor de cada questão aprovada';
$string['settings_approvedquantifier_help'] = 'Pontos atribuídos a cada questão aprovada';
$string['settings_approvedquantifier_label'] = 'Pontos para cada questão aprovada';
$string['settings_availability_close_answering_from'] = 'Fechada a resposta em';
$string['settings_availability_close_submission_from'] = 'Fechar envio de questão em';
$string['settings_availability_open_answering_from'] = 'Abrir para resposta em';
$string['settings_availability_open_submission_from'] = 'Abrir para envio de questão em';
$string['settings_commentdeletionperiod'] = 'Período de editar/excluir comentários (minutos)';
$string['settings_excluderoles'] = 'Papéis a excluir na classificação';
$string['settings_excluderoles_help'] = 'Os papéis selecionados estarão ocultos nas avaliações. Os utilizadores inscritos com estes papéis podem participar normalmente na atividade';
$string['settings_excluderoles_label'] = 'Papéis a excluir na classificação';
$string['settings_forcecommenting'] = 'Comentar questões é obrigatório';
$string['settings_forcecommenting_help'] = 'Forçar comentários na tentativa da questão';
$string['settings_forcerating'] = 'Avaliar questões é obrigatório';
$string['settings_forcerating_help'] = 'Forçar a avaliação na tentativa da questão';
$string['settings_lastcorrectanswerquantifier'] = 'Valor de cada resposta correta';
$string['settings_lastcorrectanswerquantifier_help'] = 'Pontos para cada resposta correta na última tentativa';
$string['settings_lastcorrectanswerquantifier_label'] = 'Pontos para as últimas respostas corretas';
$string['settings_lastincorrectanswerquantifier'] = 'Valor de cada resposta incorreta';
$string['settings_lastincorrectanswerquantifier_help'] = 'Pontos para cada resposta incorreta, ou parcialmente incorreta, na última tentativa';
$string['settings_lastincorrectanswerquantifier_label'] = 'Pontos para as últimas respostas incorretas';
$string['settings_questionquantifier'] = 'Peso da nota de cada questão criada';
$string['settings_questionquantifier_help'] = 'Pontos para cada questão criada';
$string['settings_questionquantifier_label'] = 'Pontos para cada questão criada';
$string['settings_ratequantifier'] = 'Valor da avaliação dos pares';
$string['settings_ratequantifier_help'] = 'Pontos por cada estrela recebida';
$string['settings_ratequantifier_label'] = 'Multiplicador para a média de estrelas recebidas por questão';
$string['settings_removeqbehavior'] = 'Desinstalar o módulo de comportamento de questões StudentQuiz';
$string['settings_removeqbehavior_help'] = 'Esta informação deve aparecer apenas uma vez durante a atualização. Foi detetado que o módulo de comportamento de questões StudentQuiz está instalado. Este módulo já não é necessário e, portanto, tentamos desinstalar automaticamente. Se ainda vê esta configuração, desinstale o módulo de comportamento de questões StudentQuiz manualmente <a href="{$a}">aqui</a>.';
$string['settings_removeqbehavior_label'] = 'Desinstalar o módulo de comportamento de questões StudentQuiz';
$string['settings_section_description_default'] = 'Valores predefinidos para quando criar uma nova atividade StudentQuiz.';
$string['settings_section_header_question'] = 'Configurações da questão';
$string['settings_section_header_ranking'] = 'Configurações da avaliação';
$string['show_less'] = 'Mostrar menos';
$string['show_more'] = 'Mostrar mais';
$string['slot_of_slot'] = 'Questão {$a->slot} de {$a->slots} deste conjunto';
$string['start_quiz_button'] = 'Iniciar teste';
$string['state_approved'] = 'Aprovar';
$string['state_change_tooltip_approved'] = 'Questão aprovada. Clique aqui para mudar o estado desta questão.';
$string['state_change_tooltip_changed'] = 'Questão mudou. Clique aqui para mudar o estado desta questão.';
$string['state_change_tooltip_disapproved'] = 'Questão desaprovada. Clique aqui para mudar o estado desta questão.';
$string['state_change_tooltip_new'] = 'Questão nova. Clique aqui para mudar o estado desta questão.';
$string['state_changed'] = 'Alterar';
$string['state_column_name'] = 'Estado';
$string['state_column_name_veryshort'] = 'E';
$string['state_disapproved'] = 'Reprovar';
$string['state_new'] = 'Nova';
$string['state_toggle'] = 'Alterar estado';
$string['statistic_block_approvals'] = 'Questões aprovadas';
$string['statistic_block_created'] = 'Questões criadas';
$string['statistic_block_disapprovals'] = 'Questões reprovadas';
$string['statistic_block_new_changed'] = 'Questões novas/alteradas';
$string['statistic_block_progress_available'] = 'Questões disponíveis';
$string['statistic_block_progress_last_attempt_correct'] = 'Última tentativa correta';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Última tentativa incorreta';
$string['statistic_block_progress_never'] = 'Questões nunca respondidas';
$string['statistic_block_title'] = 'Meu progresso';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Adicionar nova instância de StudentQuiz';
$string['studentquiz:canselfratecomment'] = 'Avaliar e comentar na visualização';
$string['studentquiz:emailnotifyapproved'] = 'Notificação de questão criada';
$string['studentquiz:emailnotifychanged'] = 'Notificação de questão alterada';
$string['studentquiz:emailnotifycommentadded'] = 'Notificação de comentário adicionado';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notificação de comentário excluído';
$string['studentquiz:manage'] = 'Moderar questões no StudentQuiz';
$string['studentquiz:previewothers'] = 'Pré-visualizar questões de outros participantes no StudentQuiz';
$string['studentquiz:submit'] = 'Enviar questões ao StudentQuiz';
$string['studentquiz:unhideanonymous'] = 'Pode ver os nomes reais mesmo quando o anonimato está ativo';
$string['studentquiz:view'] = 'Ver questões no StudentQuiz';
$string['studentquizname'] = 'Nome do StudentQuiz';
$string['studentquizname_help'] = 'Nome desta atividade StudentQuiz';
$string['submissionendbeforestart'] = 'A data limite para submeter não pode ser anterior à data de abertura para submissões';
$string['tags'] = 'Etiquetas';
$string['unapprove'] = 'Reprovar';
