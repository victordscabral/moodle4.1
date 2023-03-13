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
 * Strings for component 'local_profilecohort', language 'pt_br', version '4.1'.
 *
 * @package     local_profilecohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'Nesta aba você pode adicionar uma nova regra mapeando um valor de campo personalizado de perfil de usuário a um coorte no qual o usuário será adicionado.';
$string['addrule'] = 'Adicionar regra para campo personalizado de perfil de usuário';
$string['addrules'] = 'Adicionar nova regra';
$string['andnextrule'] = 'A próxima regra também deve coincidir para entrar neste coorte.';
$string['cohortsintro'] = 'Nesta aba, você seleciona quais coortes você quer que este plugin gerencie.<br/>
Uma vez selecionado, você não poderá mais editar manualmente os membros daquele coorte. Além disso, qualquer usuário que for atualmente membro de um desses coortes será removido do coorte e os coortes serão então prrenchidos do zero com os usuários que casem com as regras que você criou neste plugin.<br/>
Se você decidir parar de gerenciar um coorte com este plugin e desselecionar ele aqui, todos os usuários que são atualmente membros do coorte serão mantidos como membros. Além disso, você poderá atualizar manualmente os membros do coorte novamente.';
$string['delete'] = 'Excluir esta regra';
$string['iffield'] = 'Se {$a}';
$string['invisiblecohortsnote'] = 'Por favor, note: este plugin trata coortes invisíveis da memsa maneira que os coortes visívels. Então, a lista de coortes também inclui coortes que tenham sido criados como invisíveis.';
$string['match_contains'] = 'Contém';
$string['match_defined'] = 'Está definido';
$string['match_empty'] = 'Está vazio';
$string['match_exact'] = 'Coincide com';
$string['match_notcontains'] = 'Não contém';
$string['match_notdefined'] = 'Não está definido';
$string['match_notempty'] = 'Não está vazio';
$string['match_notexact'] = 'Não coincide com';
$string['matchtype'] = 'Tipo de comparação';
$string['matchvalue'] = 'Valor para comparação';
$string['members'] = 'Membros do coorte';
$string['membersintro'] = 'Nesta aba você pode ver quais usuários são atualmente membros dos coortes gerenciados por este plugin.';
$string['moveto'] = 'Mover para posição';
$string['nocohorts'] = 'Não existem coortes disponíveis para usar com esse plugin - por favor, visite {$a} para criar alguns coortes';
$string['nofields'] = 'Nenhum campo personalizado de perfil de usuário foi definido.<br/>Você precisa definir campos personalizados de perfil de usuário antes de adicionar regras aqui - por favor, visite {$a} para criar pelo menos um campo personalizado de perfil de usuário';
$string['nousers'] = 'Este coorte não tem usuários no momento';
$string['pluginname'] = 'Inscrição em coorte por campo de perfil';
$string['privacy:metadata'] = 'O plugin de inscrição em coorte por campo de perfil fornece funcionalidades para os administradores do Moodle mas não armazena nenhum dado pessoal.';
$string['selectcohorts'] = 'Selecione os coortes a serem gerenciados';
$string['selectvalue'] = 'o usuário será adicionado ao coorte';
$string['updatecohorts'] = 'Atualizar coortes a partir dos campos personalizados de perfil de usuário';
$string['viewintro'] = 'Nesta aba você define as regras mapeando campos personalizados de perfil de usuário aos coortes nos quais o usuário será inscrito.<br/>
As regras definidas são processadas na ordem que elas são mostradas. No entanto, um usuário que coincide com várias regras será adicionado a todos os coortes relevantes.<br/>
Por favor, note: Quando as regras são alteradas, uma tarefa em segundo plano será agendada para atualizar todos os usuário afetados - existirá um pequeno intervalo (alguns minutos, dependendo da configuração da tarefa agendada do seu Moodle e do "cronjob" do seu servidor) antes que todas as inscrições nos coortes sejam atualizadas. Apesar disso, qualquer usuário que acessar o sistema antes da tarefa em segundo plano terminar será atualizado imediatamente.';
$string['viewrules'] = 'Ver / editar regras';
