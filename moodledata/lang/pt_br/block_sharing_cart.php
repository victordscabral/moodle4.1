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
 * Strings for component 'block_sharing_cart', language 'pt_br', version '4.1'.
 *
 * @package     block_sharing_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Atividade:';
$string['backup'] = 'Copiar para o Sharing Cart';
$string['backup_heavy_load_warning_message'] = 'Se a seção contém várias atividades, o tempo de processamento será maior.';
$string['bulkdelete'] = 'Exclusão em massa';
$string['clicktomove'] = 'Clique para mover aqui';
$string['clipboard'] = 'Copiando este item compartilhado';
$string['confirm_backup'] = 'Tem certeza de que deseja copiar esta atividade/recurso para o Sharing Cart?';
$string['confirm_backup_section'] = 'Deseja copiar esta seção do curso e suas atividades/recursos para o Sharing Cart?';
$string['confirm_delete'] = 'Tem certeza de que deseja excluir?';
$string['confirm_delete_selected'] = 'Tem certeza de que deseja excluir todos os itens selecionados?';
$string['confirm_restore'] = 'Tem certeza de que deseja copiar este item para o curso?';
$string['confirm_userdata'] = 'Você deseja incluir os dados do usuário em uma cópia desta atividade/recurso?
OK - Copiar *com* dados do usuário
Cancelar - Copiar *sem* dados do usuário';
$string['conflict_description'] = 'Você quer sobrescrever o título da seção no curso?';
$string['conflict_description_note'] = '*A formatação do sumário de seção (cor da fonte, imagens, etc.) aparecerão depois de copiados para o curso.';
$string['conflict_no_overwrite'] = 'Mantenha o título da seção atual <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Alterar o título da seção para <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Continuar';
$string['copy_section'] = 'Copiar seção';
$string['copyhere'] = 'Copie aqui';
$string['define_required_capabilities'] = 'Por favor, defina as permissões necessárias';
$string['delete_folder'] = 'e tudo que é conteúdo';
$string['folder_string'] = 'Pasta:';
$string['forbidden'] = 'Você não tem permissão para acessar este item compartilhado';
$string['inprogess_pleasewait'] = 'Por favor, espere…';
$string['invalidoperation'] = 'Uma operação inválida detectada';
$string['missing_capabilities'] = 'Permissões necessárias ausentes: {$a}';
$string['missing_capability'] = 'Permissão necessária ausente: {$a}';
$string['modal_bulkdelete_confirm'] = 'Excluir selecionado';
$string['modal_bulkdelete_title'] = 'Deseja realmente excluir';
$string['modal_checkbox'] = 'Você quer copiar os dados do usuário? (Por exemplo. entradas de glossário/wiki/ registro na base de dados)';
$string['modal_confirm_backup'] = 'Confirmar';
$string['modal_confirm_delete'] = 'Excluir';
$string['movedir'] = 'Mover para a pasta';
$string['no_backup_support'] = 'Sem suporte de backup para este módulo';
$string['notarget'] = 'Objetivo não encontrado';
$string['pluginname'] = 'Sharing Cart';
$string['privacy:metadata:block_sharing_cart'] = 'Os dados do Sharing Cart são armazenados aqui';
$string['privacy:metadata:block_sharing_cart:ctime'] = 'Tempo para a criação';
$string['privacy:metadata:block_sharing_cart:modicon'] = 'Ícone do módulo de atividade';
$string['privacy:metadata:block_sharing_cart:modname'] = 'O nome do módulo de atividade';
$string['privacy:metadata:block_sharing_cart:modtext'] = 'O título do módulo de atividade';
$string['privacy:metadata:block_sharing_cart:tree'] = 'O título da pasta do Sharing Cart que é exibida no bloco';
$string['privacy:metadata:block_sharing_cart:userid'] = 'O ID do usuário';
$string['privacy:metadata:block_sharing_cart:weight'] = 'Ordem dos itens, classificação em ordem crescente';
$string['recordnotfound'] = 'Item compartilhado não encontrado';
$string['requireajax'] = 'O Sharing Cart requer o AJAX';
$string['requirejs'] = 'O  Sharing Cart requer JavaScript habilitado em seu navegador';
$string['restore'] = 'Copiar para o curso';
$string['restore_heavy_load_warning_message'] = 'O tempo de carregamento é mais longo, porque mais de 10 atividades/recursos estão sendo processados.';
$string['section_name_conflict'] = 'Conflito de título de seção';
$string['settings:userdata_copyable_modtypes'] = 'Tipos de módulos copiáveis de dados do usuário';
$string['settings:userdata_copyable_modtypes_desc'] = 'Ao copiar uma atividade no Sharing Cart , uma caixa de diálogo mostra a opção se uma cópia de uma atividade inclui os dados de usuário ou não, se o tipo de módulo acima estiver marcado e o usuário possuir as permissões de <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> e <strong>moodle/restore:userinfo</strong>.
(Por padrão, apenas a função de gerente tem essas permissões.)';
$string['settings:workaround_qtypes'] = 'Solução alternativa para tipos de questão';
$string['settings:workaround_qtypes_desc'] = 'A solução alternativa para o problema de restauração da questão será executada se o tipo de questão estiver marcado.
Quando as questões a serem restauradas já existem, no entanto, esses dados parecem inconsistentes, esta solução alternativa tentará fazer duplicar em vez de reutilizar os dados existentes.
Pode ser útil para evitar alguns erros de restauração, como
<i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Sharing Cart';
$string['sharing_cart:addinstance'] = 'Adicionar um novo bloco do Sharing Cart';
$string['unexpectederror'] = 'Um erro inesperado ocorreu';
$string['variouscourse'] = 'de vários cursos';
