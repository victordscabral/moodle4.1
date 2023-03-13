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
 * Strings for component 'repository_dropbox', language 'pt_br', version '4.1'.
 *
 * @package     repository_dropbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Chave da API do Dropbox';
$string['cachelimit'] = 'Limite de cache';
$string['cachelimit_info'] = 'Digite o tamanho máximo dos arquivos (em bytes) para ser armazenado em cache no servidor para aliases Dropbox / atalhos. Arquivos em cache será servido quando a fonte não está mais disponível. Valor vazio ou zero significa o cache de todos os arquivos independentemente do tamanho.';
$string['configplugin'] = 'Configuração do Dropbox';
$string['crontask'] = 'Processamento em segundo plano para o repositório Dropbox';
$string['dropbox'] = 'Dropbox';
$string['dropbox:view'] = 'Visualizar um diretório Dropbox';
$string['instruction'] = 'Você pode obter sua chave de API e segredo em <a href="http://www.dropbox.com/developers/apps">Desenvolvedores de Dropbox</a>. Ao configurar sua chave, selecione "Full Dropbox" como "Nível de acesso".';
$string['issuer'] = 'Serviço OAuth2';
$string['issuer_help'] = 'Selecionar o serviço OAuth2 configurado para se comunicar com a API Dropbox. Se o serviço ainda não existir, você precisará criá-lo.';
$string['logoutdesc'] = '(Sair quando terminar de usar o Dropbox)';
$string['notitle'] = 'sem título';
$string['oauth2redirecturi'] = 'URL de redirecionamento OAuth 2';
$string['pluginname'] = 'Dropbox';
$string['privacy:metadata:repository_dropbox'] = 'O plugin do repositório do Dropbox não armazena dados pessoais, mas transmite dados do usuário do Moodle para o sistema remoto.';
$string['privacy:metadata:repository_dropbox:query'] = 'A consulta de texto de pesquisa do usuário do repositório do Dropbox.';
$string['remember'] = 'Relembre-me';
$string['secret'] = 'Segredo Dropbox';
