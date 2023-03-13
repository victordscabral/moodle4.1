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
 * Strings for component 'repository_nextcloud', language 'pt_br', version '4.1'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Interno e externo';
$string['cannotconnect'] = 'O usuário não pôde ser autenticado. Faça o login e o envio do arquivo.';
$string['chooseissuer'] = 'Emissor';
$string['chooseissuer_help'] = 'Para adicionar um novo emissor, vá para Administração do site / Servidor / Serviços OAuth 2.';
$string['configplugin'] = 'Configuração do repositório Nextcloud';
$string['configuration_exception'] = 'Ocorreu um erro na configuração do cliente OAuth 2: {$a}';
$string['contactadminwith'] = '';
$string['couldnotmove'] = 'O arquivo solicitado não pôde ser movido para a pasta {$a}.';
$string['defaultreturntype'] = 'Tipo de retorno padrão';
$string['endpointnotdefined'] = 'Endpoint {$a} não definido.';
$string['external'] = 'Externo (apenas links armazenados no Moodle)';
$string['externalpubliclinkwarning'] = 'Aviso: este arquivo se tornará público.';
$string['filenotaccessed'] = 'O arquivo solicitado não pôde ser acessado. Verifique se você escolheu um arquivo válido e se está autenticado com a conta certa.';
$string['fileoptions'] = 'Os tipos e padrões dos arquivos retornados podem ser configurados aqui. Observe que todos os arquivos vinculados externamente serão atualizados de forma que o proprietário seja a conta do sistema Moodle.';
$string['foldername'] = 'Nome da pasta criada no espaço privado dos usuários do Nextcloud que contém todos os links com acesso controlado.';
$string['foldername_help'] = 'Para garantir que os usuários encontrem os arquivos compartilhados com eles, os compartilhamentos são salvos em uma pasta específica.

Essa configuração determina o nome da pasta. Recomenda-se escolher um nome associado à sua instância do Moodle.';
$string['internal'] = 'Interno (arquivo armazenados no Moodle)';
$string['invalidresponse'] = 'Resposta do servidor inválida.';
$string['issuervalidation_invalid'] = 'Atualmente, o emissor {$a} está ativo, mas não implementa todos os endpoints necessários. O repositório não funcionará.';
$string['issuervalidation_valid'] = 'Atualmente, o emissor de {$a} está ativo.';
$string['issuervalidation_without'] = 'Você ainda não selecionou um servidor Nextcloud como emissor OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Ver Nextcloud';
$string['no_right_issuers'] = 'Nenhum dos emissores existentes implementa todos os endpoints necessários. Registre um emissor apropriado.';
$string['noclientconnection'] = 'Os clientes OAuth não puderam ser conectados.';
$string['notauthorized'] = 'Você não está autorizado a executar esta solicitação. Verifique se você está autenticado com a conta correta.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link para configuração de serviços OAuth 2"> Configuração de serviços OAuth 2</a>';
$string['pathnotcreated'] = 'O caminho da pasta {$a} não pôde ser criado na conta do sistema.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Repositório Nextcloud';
$string['privacy:metadata'] = 'O plugin de repositório Nextcloud não armazena nenhum dado pessoal, nem transmite dados do usuário para o sistema remoto.';
$string['request_exception'] = 'A solicitação para {$a->instance} falhou. {$a->errormessage}';
$string['requestnotexecuted'] = 'A solicitação não pode ser executada. Se isso acontecer novamente, por favor entre em contato com o administrador do sistema.';
$string['right_issuers'] = 'Os seguintes emissores implementam os endpoints necessários: <br>{$a}';
$string['supportedreturntypes'] = 'Arquivos suportados';
