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
 * Strings for component 'enrol_auto', language 'pt_br', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Configurar instâncias de inscrição automática';
$string['auto:manage'] = 'Gerenciar usuários inscritos';
$string['auto:unenrol'] = 'Desinscrever usuários do curso';
$string['auto:unenrolself'] = 'Desinscrever-se do curso';
$string['customwelcomemessage'] = 'Mensagens de boas vindas personalizada';
$string['customwelcomemessage_help'] = 'Uma mensagem de boas vindas personalizada pode ser adicionada como texto simples ou formato Moodle-auto, incluindo tags HTML e tags multi-idioma.

Os seguintes marcadores de posição podem ser incluídos na mensagem:

* Nome do curso {$a->coursename}
* Link para a página de perfil do usuário {$a->profileurl}';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuída aos usuários durante a inscrição automática.';
$string['editenrolment'] = 'Editar Inscrições';
$string['enrolon'] = 'Inscrever-se em';
$string['enrolon_desc'] = 'Evento que irá disparar uma inscrição automática.';
$string['enrolon_help'] = 'Escolha o evento que deve acionar a inscrição automática.

**Visualização do curso** - Inscrever um usuário na visualização do curso.<br>

**Login do usuário** - inscrever os usuários assim que eles fizerem login.<br>

**Visualização de atividade/recurso do curso** - Inscrever um usuário quando uma das atividades/recursos selecionados for visualizada. <br>
* NOTA: * esta opção requer uma instância de inscrição de acesso de Convidado.';
$string['modview'] = 'Visualizar atividade/recurso do curso';
$string['modviewmods'] = 'Atividades/recursos';
$string['modviewmods_desc'] = 'A visualização de qualquer um dos recursos/atividades selecionados irá disparar uma inscrição automática.';
$string['pluginname'] = 'Inscrição automática';
$string['pluginname_desc'] = 'O plugin de inscrição automática inscreve automaticamente os usuários no curso/atividade/recurso visualizado.';
$string['privacy:metadata'] = 'O plugin de inscrição automática não armazena qualquer dado pessoal.';
$string['requirepassword'] = 'Exigir chave de inscrição';
$string['requirepassword_desc'] = 'Exigir chave de inscrição em novos cursos e evitar a remoção da chave de inscrição de cursos existentes.';
$string['role'] = 'Papel padrão atribuído';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de boas vindas do curso.';
$string['sendcoursewelcomemessage_help'] = 'Se habilitado, os usuários recebem uma mensagem de boas vindas quando são inscritos automaticamente.';
$string['status'] = 'Permitir inscrições automáticas';
$string['status_desc'] = 'Permitir inscrição automáticas para os usuários no curso por padrão.';
