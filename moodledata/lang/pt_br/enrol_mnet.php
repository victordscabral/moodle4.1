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
 * Strings for component 'enrol_mnet', language 'pt_br', version '4.1'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Algumas instâncias de inscrição MNet já existem para este servidor. Apenas uma instãncia por servidor  e/ou uma instância para todos "Todos servidores" é permitida';
$string['instancename'] = 'Nome do método de inscrição';
$string['instancename_help'] = 'Você pode opcionalmente renomear esta instância do método de inscrição  MNET. Caso deixar este campo vazio, a instância padrão o nome padrão será utilizado, contendo o nome do servidor remoto e o papel associado para este usuário.';
$string['mnet:config'] = 'Configurar instâncias de inscrição MNet';
$string['mnet_enrol_description'] = 'Publique este serviço para permitir que os administradores de {$a} inscrevam estudantes nos cursos que você criou no seu servidor.<br/>
<ul><li><em>Dependência</em>: Você deve também <strong>se inscrever</strong> no serviço SSO (Provedor de Identidade) em {$a}.</li><li><em>Dependência</em>: Você deve também <strong>publicar</strong> no serviço SSO (Provedor de Serviço) em {$a}.</li></ul>
<br/>
Inscreva-se neste serviço para ser capaz de inscrever seus estudantes em cursos em {$a}.<br/><ul><li><em>Dependência</em>: Você deve também <strong>assinar</strong> o serviço SSO (Provedor de Identidade) em {$a}.</li><li><em>Dependência</em>: Você deve também <strong>publicar</strong> o serviço SSO (Provedor de Serviço) em {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Serviço de inscrição remoto';
$string['pluginname'] = 'Inscrições remotas MNet';
$string['pluginname_desc'] = 'Permite que servidores MNet remotos inscrevam seus usuários nos seus cursos.';
$string['privacy:metadata'] = 'O plugin Inscrições remotas MNet não armazena nenhum dado pessoal.';
$string['remotesubscriber'] = 'Servidores remotos';
$string['remotesubscriber_help'] = 'Selecione "Todos os servidores" para abrir este curso para todos os pares MNET que esteja oferecendo ao serviço de inscrições remotas. Ou escolha um único provedor para tornar este curso disponível para seus usuários apenas.';
$string['remotesubscribersall'] = 'Todos os servidores';
$string['roleforremoteusers'] = 'Papel para os usuários';
$string['roleforremoteusers_help'] = 'Qual papel será associado ao usuário remoto a partir do servidor selecionado.';
