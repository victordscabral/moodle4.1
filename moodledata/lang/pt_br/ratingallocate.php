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
 * Strings for component 'ratingallocate', language 'pt_br', version '4.1'.
 *
 * @package     ratingallocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Outra instância do algoritmo de alocação já está em execução. Por favor, aguarde alguns minutos e atualize a página.';
$string['algorithm_scheduled_for_cron'] = 'A execução do algoritmo de alocação é agendada para execução imediata pelo cron. Aguarde alguns minutos e atualize a página.';
$string['algorithmtimeout'] = 'Tempo limite do algoritmo';
$string['allocation_manual_explain_all'] = 'Selecione uma opção a ser atribuída a um usuário.';
$string['allocation_manual_explain_only_raters'] = 'Selecione uma opção a ser atribuída a um usuário. Somente os usuários que selecionaram pelo menos uma opção são listados.';
$string['allocation_notification_message'] = 'No que se refere a "{$a->ratingallocate}", você foi atribuído a escolha "{$a->choice} ({$a->explanation})".';
$string['allocation_notification_message_subject'] = 'Notificação da alocação concluída para {$a}';
$string['allocation_statistics'] = 'Estatísticas de alocação';
$string['allocation_statistics_description'] = 'Esta tabela dá uma impressão da satisfação geral da alocação. Ela está contando as atribuições de acordo com a classificação do usuário que teve uma opção específica. Nesta caso {$a->users} fora de {$a->total} usuários tem uma escolha que eles classificaram com "{$a->rating}".
Para {$a->unassigned} usuários sem escolha ainda foram alocados.';
$string['allocation_statistics_description_no_alloc'] = 'Essa estatística dá uma impressão da satisfação geral da alocação.
Está a contabilizar as atribuições de acordo com a avaliação que o utilizador atribuiu à respetiva escolha.
<ul>
<li>Atualmente, {$a->notrated} usuário(s) ainda não deram uma avaliação.</li>
<li>{$a->rated} usuários já votaram.</li>
<li>Ainda não há alocações.</li>
</ul>';
$string['allocation_table_description'] = 'Esta estatística fornece uma visão geral de todas as alocações desta instância.</br>
Todos os usuários que avaliaram e não foram alocados estão listados em \'Sem alocação\'';
$string['allocations_table'] = 'Visão geral das alocações';
$string['allocations_table_choice'] = 'Escolha';
$string['allocations_table_noallocation'] = 'Sem alocação';
$string['allocations_table_users'] = 'Usuários';
$string['at_least_one_rateable_choices_needed'] = 'Você precisa de pelo menos uma escolha calculável.';
$string['choice_active'] = 'Opção está ativa';
$string['choice_active_help'] = 'Somente opções ativas são exibidas ao usuário. Escolhas inativas não são exibidas.';
$string['choice_added_notification'] = 'Escolha salva.';
$string['choice_deleted_notification'] = 'A opção "{$a}" foi excluída.';
$string['choice_deleted_notification_error'] = 'A opção solicitada para exclusão não foi encontrada.';
$string['choice_explanation'] = 'Descrição (opcional)';
$string['choice_maxsize'] = 'Número máximo de participantes';
$string['choice_maxsize_display'] = 'Número máximo de estudantes';
$string['choice_table_active'] = 'Ativo';
$string['choice_table_explanation'] = 'Descrição';
$string['choice_table_maxsize'] = 'Tamanho Máx.';
$string['choice_table_title'] = 'Título';
$string['choice_table_tools'] = 'Editar';
$string['choice_title'] = 'Título';
$string['choice_title_help'] = 'Título da escolha. *Atenção* todas as escolhas ativas serão exibidas enquanto ordenada pelo título.';
$string['choicestatusheading'] = 'Status';
$string['configalgorithmtimeout'] = 'O tempo em segundos após o qual cada algoritmo é considerado para ser preso. O prazo atual é terminado e marcado como falha.';
$string['configdownloaduserfields'] = 'Ao baixar uma tabela com usuários, esses campos podem ser mostrados além do nome e sobrenome dos usuários.';
$string['confirm_start_distribution'] = 'A execução do algoritmo irá excluir todas as atribuições existentes, se houver. Tem certeza de que deseja continuar?';
$string['create_moodle_groups'] = 'Criar grupos para alocação';
$string['crontask'] = 'Alocação automática pela classificação';
$string['delete_choice'] = 'Excluir escolha';
$string['delete_rating'] = 'Excluir avaliação';
$string['deletechoice'] = 'Excluir escolha';
$string['distribution_algorithm'] = 'Algoritmo de distribuição';
$string['distribution_published'] = 'Alocação foi publicada.';
$string['distribution_saved'] = 'Distribuição salva (em {$a}s).';
$string['distribution_table'] = 'Tabela de distribuição';
$string['download_problem_mps_format'] = 'Download de Equação (mps/txt)';
$string['downloaduserfields'] = 'Campos de usuário adicionais para baixar';
$string['edit_choice'] = 'Editar escolha "{$a}"';
$string['edit_rating'] = 'Editar classificação';
$string['err_maximum'] = 'O valor máximo para este campo é {$a}.';
$string['err_minimum'] = 'O valor mínimo para este campo é {$a}.';
$string['err_positivnumber'] = 'Você deve fornecer um número positivo aqui.';
$string['err_required'] = 'Você precisa fornecer um valor para este campo.';
$string['export_choice_alloc_suffix'] = '- Alocação';
$string['export_choice_text_suffix'] = '- Texto';
$string['export_options'] = 'Opções de exportação';
$string['filter_hide_users_without_rating'] = 'Ocultar usuários sem avaliação';
$string['filter_show_alloc_necessary'] = 'Ocultar usuários com alocação';
$string['filtermanualtabledesc'] = 'Descreve os filtros que são aplicados à tabela do formulário de alocação manual.';
$string['filtertabledesc'] = 'Descreve os filtros que são aplicados à tabela de alocação.';
$string['groupingname'] = 'Criado da classificação "{$a}"';
$string['invalid_dates'] = 'Datas são inválidas. Data de início deve ser anterior a data de término.';
$string['invalid_publishdate'] = 'Data de publicação é inválida. Data de publicação deve ser anterior ao término da classificação.';
$string['is_published'] = 'Publicados';
$string['last_algorithm_run_date'] = 'Último algoritmo executado em';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Status da última execução';
$string['last_algorithm_run_status_-1'] = 'Falhou';
$string['last_algorithm_run_status_0'] = 'Não iniciado';
$string['last_algorithm_run_status_1'] = 'Em execução';
$string['last_algorithm_run_status_2'] = 'Bem sucedido';
$string['log_allocation_published'] = 'Alocação publicada';
$string['log_allocation_published_description'] = 'O usuário com id "{$a->userid}" publicou a alocação para a classificação com id "{$a->ratingallocateid}".';
$string['log_allocation_statistics_viewed'] = 'Estatísticas de alocação visualizada';
$string['log_allocation_statistics_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou as estatísticas de alocação para a classificação com id "{$a->ratingallocateid}".';
$string['log_allocation_table_viewed'] = 'Tabela de alocação visualizada';
$string['log_allocation_table_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou a tabela de alocação para a classificação com id "{$a->ratingallocateid}".';
$string['log_distribution_triggered'] = 'Distribuição desencadeada';
$string['log_distribution_triggered_description'] = 'O usuário com id "{$a->userid}" com distribuição desencadeada para a classificação com id "{$a->ratingallocateid}". O algoritmo necessita {$a->time_needed} seg.';
$string['log_index_viewed'] = 'O usuário visualizou todas as instâncias de Fair Allocation';
$string['log_index_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou todas as instâncias de Fair Allocation neste curso.';
$string['log_manual_allocation_saved'] = 'Alocação manual salva';
$string['log_manual_allocation_saved_description'] = 'O usuário com id "{$a->userid}" salvou a alocação manul para a classificação com id "{$a->ratingallocateid}".';
$string['log_rating_deleted'] = 'Avaliação do usuário excluída';
$string['log_rating_deleted_description'] = 'O usuário com id "{$a->userid}" excluiu sua avaliação para a Fair Allocation com id "{$a->ratingallocateid}".';
$string['log_rating_saved'] = 'Avaliação do usuário salva';
$string['log_rating_saved_description'] = 'O usuário com id "{$a->userid}" salvou sua avaliação para a Fair Allocation com id "{$a->ratingallocateid}".';
$string['log_rating_viewed'] = 'Avaliação do usuário visualizada';
$string['log_rating_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou sua avaliação para a Fair Allocation com id "{$a->ratingallocateid}".';
$string['log_ratingallocate_viewed'] = 'Avaliação de alocação visualizada';
$string['log_ratingallocate_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou a Fair Allocation com id "{$a->ratingallocateid}".';
$string['log_ratings_and_allocation_table_viewed'] = 'Avaliações e tabela de alocação visualizadas';
$string['log_ratings_and_allocation_table_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou as avaliações e tabela de alocação para a Fair Allocation com id "{$a->ratingallocateid}".';
$string['manual_allocation'] = 'Alocação manual';
$string['manual_allocation_form'] = 'Formulário de Alocação Manual';
$string['manual_allocation_nothing_to_be_saved'] = 'Não havia nada para ser salvo.';
$string['manual_allocation_saved'] = 'Sua alocação manual foi salva.';
$string['messageprovider:allocation'] = 'Notificação sobre alocação publicada';
$string['messageprovider:notifyalloc'] = 'Notificação de opções de alocação';
$string['modify_allocation_group'] = 'Modificar alocação';
