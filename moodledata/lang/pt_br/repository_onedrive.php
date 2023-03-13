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
 * Strings for component 'repository_onedrive', language 'pt_br', version '4.1'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Acesso';
$string['both'] = 'Interno e externo';
$string['cachedef_folder'] = 'IDs de arquivo do OneDrive para pastas na conta do sistema';
$string['configplugin'] = 'Configurar plugin OneDrive';
$string['confirmimportskydrive'] = 'Tem certeza de que deseja importar todos os arquivos do repositório do Microsoft SkyDrive para o repositório do Microsoft OneDrive? O repositório do Microsoft OneDrive deve estar configurado e funcionando para que os arquivos importados continuem funcionando como antes. Aviso: Esta ação não pode ser desfeita!';
$string['defaultreturntype'] = 'Tipo de retorno padrão';
$string['external'] = 'Externo (apenas os links são armazenados no Moodle)';
$string['fileoptions'] = 'Os tipos e padrões para arquivos retornados são configuráveis aqui. Observe que todos os arquivos vinculados externamente serão atualizados para que o proprietário seja a conta do sistema Moodle.';
$string['importskydrivefiles'] = 'Importar arquivos do repositório Microsoft SkyDrive';
$string['internal'] = 'Interno (os arquivos são armazenados no Moodle)';
$string['issuer'] = 'Serviço OAuth 2';
$string['issuer_help'] = 'Selecione o serviço OAuth 2 configurado para conversar com a API OneDrive. Se o serviço ainda não existe, você precisará criá-lo.';
$string['mysitenotfound'] = 'Você nunca se autenticou no OneDrive. Você deve autenticar-se no OneDrive pelo menos uma vez antes para utilizá-lo com o Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link para configuração de serviços OAuth 2"> Configuração de serviços OAuth 2 </a>';
$string['onedrive:view'] = 'Ver repositório OneDrive';
$string['owner'] = 'Propriedade de: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'O repositório do Microsoft OneDrive armazena concessões de acesso temporário e transmite dados do usuário do Moodle para o sistema remoto.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'O Microsoft OneDrive com um ID de item de concessão de acesso temporário.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'O ID de permissão de concessão de acesso temporário do Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Data e hora de criação da permissão de acesso temporário do Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'A data / hora de modificação da permissão de acesso temporário do Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'ID do usuário que está modificando a permissão de acesso temporário do Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'A consulta de texto de pesquisa do usuário do repositório do Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Remover o acesso temporário de escrita de links controlados';
$string['searchfor'] = 'Buscar por {$a}';
$string['servicenotenabled'] = 'Acesso não configurado.';
$string['skydrivefilesexist'] = 'Foram encontrados arquivos no repositório Microsoft SkyDrive. Este repositório foi desativado pela Microsoft, no entanto, os arquivos podem ser importados para o repositório Microsoft OneDrive.';
$string['skydrivefilesimported'] = 'Todos os arquivos foram importados do repositório Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Alguns arquivos não podem ser importados do repositório Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Arquivos suportados';
