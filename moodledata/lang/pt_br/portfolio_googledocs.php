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
 * Strings for component 'portfolio_googledocs', language 'pt_br', version '4.1'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Id de cliente';
$string['noauthtoken'] = 'Um token de autenticação não foi recebido do Google. Certifique-se que está permitindo que o Moodle acesse sua conta do Google';
$string['nooauthcredentials'] = 'Credenciais OAuth exigidas.';
$string['nooauthcredentials_help'] = 'Para usar o plugin de portfólio do Google Drive você precisa configurar as credenciais OAuth nas configurações do portfólio.';
$string['nosessiontoken'] = 'Um token de sessão não existe prevenindo exportar ao Google.';
$string['oauthinfo'] = '<p>Para usar este plugin, você deve registrar seu site no Google, conforme descrito na documentação <a href="{$a->docsurl}">Configuração do Google OAuth 2.0</a>.</p><p>Como parte do processo de registro, você precisará inserir o seguinte URL como \'URIs de redirecionamento autorizado\':</p><p>{$ a->callbackurl}</p><p>Depois de registrado, você receberá um ID de cliente e um segredo que pode ser usado para configurar todos os plugins do Google Drive.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Este plugin envia dados externamente para uma conta do Google vinculada. Não armazena dados localmente.';
$string['privacy:metadata:data'] = 'Dados pessoais transmitidos do subsistema de portfólio.';
$string['secret'] = 'Segredo';
$string['sendfailed'] = 'Falha ao transferir o arquivo {$a} para o Google';
