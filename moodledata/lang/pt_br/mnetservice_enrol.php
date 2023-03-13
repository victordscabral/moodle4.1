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
 * Strings for component 'mnetservice_enrol', language 'pt_br', version '4.1'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Cursos disponíveis em {$a}';
$string['availablecoursesonnone'] = 'O host remoto <a href="{$a->hosturl}">{$a->hostname}</a> não oferece nenhum curso para nossos usuários.';
$string['clientname'] = 'Cliente de inscrição remota';
$string['clientname_help'] = 'Inscrição e desinscrição de usuários da sua instalação de Moodle em hosts da rede de hosts moodle que autorizam esta operação.';
$string['editenrolments'] = 'Editar inscrições';
$string['hostappname'] = 'Aplicação';
$string['hostname'] = 'Nome do host';
$string['hosturl'] = 'URL de host remoto';
$string['nopublishers'] = 'Nenhum par remoto disponíviel.';
$string['noroamingusers'] = 'Usuários precisam da permissão \'{$a}\' no contexto do sistema para ser inscritas em cursos remotos, entretanto não há usuários com essa permissão. Cliquem em continuar para designar a permissão a um ou mais usuários.';
$string['otherenrolledusers'] = 'Outros usuários inscritos';
$string['pluginname'] = 'Serviço de inscrição remota';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Serviço de inscrição remota';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Horário em que a inscrição foi modificada';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'O tipo de inscrição no servidor remoto usado para inscrever o usuário no curso';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'O ID do host remoto da MNet';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'O ID do curso no servidor remoto';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'O nome do papel no servidor remoto';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'O serviço de inscrição remota armazena informações sobre inscrições de usuários locais em cursos nos hosts remotos.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'O ID do usuário local neste servidor';
$string['refetch'] = 'Buscar e atualizar estado dos hosts remotos';
