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
 * Strings for component 'tool_dynamicrule', language 'pt_br', version '4.1'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Ativa';
$string['activerules'] = 'Regras ativas';
$string['addcondition'] = 'Adicionar condição';
$string['addconditions'] = 'Adicione condições a esta regra';
$string['addoutcome'] = 'Adicionar ação';
$string['addoutcomes'] = 'Adicionar ações nessa regra';
$string['archive'] = 'Arquivo';
$string['archived'] = 'Arquivada';
$string['archivedrules'] = 'Regras arquivadas';
$string['cannotenablecomponentrule'] = 'Não é possível habilitar a regra  \'{$a}\' a menos que ela tenha ações e não tenha qualquer erro.';
$string['cannotenablerule'] = 'Não é possível habilitar a regra  \'{$a}\' a menos que ela tenha condições e não tenha qualquer erro.';
$string['confirmeditrule'] = 'Como alguns usuários casaram com essa regra no passado, você só poderá editar as ações da regra. Você pode considerar duplicar essa regra e mudar suas condições.';
$string['dynamicrule:manage'] = 'Gerenciar regras dinâmicas';
$string['enablehelp_help'] = 'Um regra requer ao menos uma condição e uma ação para ser habilitada. Todas as condições ou ações não devem conter erros.';
$string['errorcannotmanage'] = 'Você não tem permissão para gerenciar essa regra';
$string['errorcannotmanagecondition'] = 'Você não tem permissão para gerenciar essa condição';
$string['errorcannotmanageoutcome'] = 'Você não tem permissão para gerenciar essa ação';
$string['exporterdescription'] = 'Definições de regras dinâmicas, condições e ações';
$string['exportsettings'] = 'Definições de regras, condições e ações';
$string['importlogsuccess'] = 'Criada nova regra \'{$a->name}\' com {$a->conditionscount} condições e {$a->outcomescount} ações';
$string['importlogsuccesslink'] = 'Criada nova regra \'<a href="{$a->url}">{$a->name}</a>\' com {$a->conditionscount} condições e {$a->outcomescount} ações';
$string['managebadges'] = 'Gerenciar emblemas';
$string['managecohorts'] = 'Gerenciar coortes';
$string['managecompetencies'] = 'Gerenciar competências';
$string['managerules'] = 'Gerenciar regras';
$string['messageprovider:notificationoutcome'] = 'Ação de notificação da ferramenta Regras Dinâmicas';
$string['noruleoutcomes'] = 'Nenhuma ação nessa regra';
$string['outcomes'] = 'Ações';
$string['pluginname'] = 'Regras dinâmicas';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Informação sobre os usuários que casam com as condições de uma regra em particular. Como resultado de casar o usuário ele será afetado pelas ações definidas na regra.';
$string['rolemanager'] = 'Gerente de Regras Dinâmicas';
$string['rolemanagerdescription'] = 'Permite criar e gerenciar regras dinâmicas dentro do tenant atual';
$string['rulematchfreq_help'] = 'Assim que usuários casem com as condições da regra as ações serão aplicadas a eles. Essas ações não serão aplicadas novamente se o usuário continuar casando com as condições. De qualquer modo, se um usuário deixar de casar com a regra e voltar a casar depois, as ações serão aplicadas novamente. Essa configuiração define o máximo de vezes que as ações serão aplicadas.';
$string['rulematchfreqenable'] = 'Limite o número de vezes que as ações serão aplicadas a cada usuário';
$string['warningchangeswillnotapplymatchedusers'] = 'As mudanças não serão aplicadas aos usuários que casaram com essa regra no passado';
