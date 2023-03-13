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
 * Strings for component 'allocationform', language 'pt_br', version '4.1'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado ao formulário de atribuição';
$string['add_option'] = 'Adicionar nova opção';
$string['al_notwant'] = 'Não quero';
$string['al_notwant_help'] = 'Selecione uma opção que você não deseja ser atribuído para';
$string['allocationform'] = 'Formulário de atribuição';
$string['allocationform:addinstance'] = 'Adicionar um novo formulário de atribuição';
$string['allocationform:edit'] = 'Editar formulários de atribuição';
$string['allocationform:reallocate'] = 'Forçar uma redistribuição';
$string['allocationform:viewallocations'] = 'Ver todas as atribuições feitas';
$string['allocationform:viewform'] = 'Ver formulários de atribuição';
$string['allocationformname'] = 'Nome do formulário de atribuição';
$string['allocationformname_help'] = 'O nome deste formulário de atribuição  será usado para se conectar ao formulário.';
$string['allocations'] = 'Atribuições';
$string['allocations_not_visible'] = 'Aviso: as atribuições só podem ser vistas pelos editores até que eles as disponibilizem';
$string['allocationviewed'] = 'Formulário de Atribuição visto';
$string['availabilityheading'] = 'Formato da disponibilidade';
$string['back_to_edit'] = 'Mudar o modo de edição';
$string['back_to_edit_warning'] = 'Isto irá apagar todas as informações apresentadas ao formulário.';
$string['before_start'] = 'A data de início do presente formulário de atribuição ainda não chegou.';
$string['choice'] = 'Preferência {$a->choice}';
$string['choice_help'] = 'Selecione uma opção que você gostaria de ser atribuído';
$string['choiceheading'] = 'Opções de preferência';
$string['cron'] = 'Processamento em segundo plano para formulários de Atribuição';
$string['csvgenerated'] = 'CSV gerado';
$string['deadline'] = 'Prazo de Entrega';
$string['deadline_help'] = 'A última vez que os usuários serão capazes de selecionar as suas atribuições, também é a primeira vez que um formulário de atribuição será colocado em fila para o processo de atribuição acontecer.';
$string['deadline_message'] = 'O prazo para preencher este formulário é: {$a->deadline}';
$string['deadline_passed'] = 'O prazo desse formulário já terminou, se você ativá-lo agora ele  começara a processar imediatamente.';
$string['defaultrole'] = 'Papel padrão';
$string['defaultrole_help'] = 'Definir o papel padrão que será utilizado para selecionar os usuários que serão atribuídos usando a atividade';
$string['disallow_list'] = 'Proibir lista';
$string['disallow_list_help'] = 'Todos os usuários assinalados não serão capazes de selecionar {$a->option_name}';
$string['duplicate_choice'] = 'Você só pode selecionar uma opção de cada vez';
$string['duplicateoption'] = 'Erro: Suas alterações não puderam ser salvas no banco de dados. Isso ocorreu muito provavelmente devido a inserção de um nome de opção duplicado.';
$string['editingmode'] = 'Editar';
$string['editingoption'] = 'Editar opção';
$string['event:optiondcreated'] = 'Opção criada';
$string['event:optiondeleted'] = 'Opção excluída';
$string['form_allocation_error'] = 'ERRO no formID {$a->formid}:';
$string['form_allocation_error2'] = 'ERRO: Não é possível atribuir UserID {$a->userid}';
$string['generate_allocation_csv'] = 'Gerar CSV de atribuições de usuários';
$string['generate_csv'] = 'Gerar CSV de opções do usuário';
$string['in_editingmode'] = 'O formulário está sendo editado, etapa 1 de 5.';
$string['in_processedmode'] = 'As alocações foram liberadas, etapa 5 de 5.';
$string['in_processmode'] = 'Os usuários estão sendo alocados, etapa 3 de 5.';
$string['in_readymode'] = 'O formulário está ativo, etapa 2 de 5.';
$string['in_reviewmode'] = 'As alocações estão sendo revisadas, etapa 4 de 5.';
$string['incorrectnumberofchoices'] = 'O formulário não tem o número correto de opções';
$string['invalidstate'] = 'Uma mudança de estado inválida foi passada para o formulário de atribuição';
$string['invalidstatechange'] = 'Tentativa de mudança de estado inválida';
$string['make_active'] = 'Faça um formulário ativo';
$string['makechoice'] = 'Faça suas escolhas';
$string['modulename'] = 'Formulário de atribuição';
$string['modulenameplural'] = 'Formulários de atribuição';
$string['no_allocations'] = 'Atribuições não encontradas';
$string['noallocationforms'] = 'Formulários de atribuição não encontrados para este curso';
$string['noformdatapassed'] = 'Nenhum dado de formulário foi enviado. Nenhuma atualização realizada.';
$string['nopermission'] = 'Você não pode ser alocado ao formulário, suas escolhas não foram salvas';
$string['not_active'] = 'O formulário de atribuição não está disponível, por favor, tente novamente mais tarde.';
$string['not_enough_slots'] = 'Não há vagas suficientes disponíveis para todas as pessoas aceitáveis para atribuição';
$string['not_set'] = 'Você deve fazer uma escolha';
$string['notrequired'] = 'não requerido';
$string['notwant'] = 'Incluir não quer';
$string['notwant_help'] = 'Se selecionado, um usuário terá a oportunidade de definir uma opção que não deseja ser alocado';
$string['numberofallocations'] = 'Atribuições por usuário';
$string['numberofallocations_help'] = 'O número de opções que um usuário será atribuído a';
$string['numberofchoices'] = 'Número de escolhas';
$string['numberofchoices_help'] = 'O número de opções que um usuário terá que escolher';
$string['ok_to_continue'] = 'Tem certeza de que deseja continuar?';
$string['option_form_header'] = 'Nova opção';
$string['option_heading'] = 'Título';
$string['option_heading_help'] = 'Um título a ser exibido acima desta opção.';
$string['option_list'] = 'Lista de Opções';
$string['option_maxallocation'] = 'Atribuições máximas';
$string['option_maxallocation_help'] = 'O número máximo de pessoas que podem ser atribuídas para essa opção.';
$string['option_maxallocation_invalid'] = 'Atribuições máximas não definidas';
$string['option_name'] = 'Nome da Opção';
$string['option_name_help'] = 'O nome da opção, pois ela será exibida para o usuário';
$string['option_restricted'] = 'Usuários restritos';
$string['optionedited'] = 'Opções editadas';
$string['overviewclose'] = 'Data de Encerramento: {$a->closedate}';
$string['overviewname'] = 'Atribuição: {$a->link}';
$string['overviewready'] = 'Sua atribuição está disponível.';
$string['overviewreview'] = 'Pronto para revisão. As pessoas afetadas não podem ver os resultados.';
$string['people'] = 'Número de pessoas a serem atribuídas';
$string['permissionedited'] = 'Permissão editada';
$string['permissionviewed'] = 'Permissão visualizada';
$string['pluginadministration'] = 'Formulário de administração de atribuição';
$string['pluginname'] = 'Formulários de Atribuição (eForms)';
$string['processmode'] = 'Processando';
$string['queued_for_processing'] = 'O formulário de atribuição está esperando para ser processado ... por favor, volte mais tarde.';
$string['readymode'] = 'Ativo';
$string['reprocess'] = 'Forçar reatribuição';
$string['reprocess_warning'] = 'Isto irá apagar todas as atribuições atuais';
$string['requirechoice'] = 'Exigir escolha';
$string['restrict'] = 'Restringir';
$string['roleselect'] = 'Papel a atribuir';
$string['roleselect_help'] = 'Selecione o papel dos utilizadores sobre este curso que será atribuído através deste formulário.';
$string['saved'] = 'Suas escolhas foram salvas.';
$string['show_allocations'] = 'Disponibilizar atribuições';
$string['slots'] = 'Número de vagas para a atribuição';
$string['startdate'] = 'Data de Início';
$string['startdate_help'] = 'A primeira data em que os usuários serão capazes de selecionar as suas atribuições.';
$string['statechanged'] = 'Estado alterado';
$string['trackcompletion'] = 'Exigir a apresentação de uma escolha para completar esta atividade?';
$string['unallocated'] = 'Não atribuído';
