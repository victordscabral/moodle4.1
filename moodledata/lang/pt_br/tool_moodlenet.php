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
 * Strings for component 'tool_moodlenet', language 'pt_br', version '4.1'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Adicionando conteúdo do MoodleNet';
$string['aria:enterprofile'] = 'Digite o ID o seu perfil MoodleNet';
$string['aria:footermessage'] = 'Procure conteúdo no MoodleNet';
$string['autoenablenotification'] = '<p>No Moodle 4.0 em diante, a integração <a href="https://moodle.net/">MoodleNet</a> é habilitada por padrão em Recursos avançados. Os usuários com permissão de criar e gerenciar atividades podem navegar no MoodleNet por meio do seletor de atividades e importar recursos do MoodleNet para seus cursos.</p><p>Se desejar, uma instância alternativa do MoodleNet pode ser especificada no <a href="{$ a->settingslink}">Configurações do MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'A configuração padrão do MoodleNet foi alterada.';
$string['browsecontentmoodlenet'] = 'Ou navegue pelo conteúdo no MoodleNet';
$string['clearsearch'] = 'Limpar busca';
$string['connectandbrowse'] = 'Conectar e navegar:';
$string['defaultmoodlenet'] = 'MoodleNet URL';
$string['defaultmoodlenet_desc'] = 'O URL da instância do MoodleNet disponível no seletor de atividades.';
$string['defaultmoodlenetname'] = 'Nome da instância MoodleNet';
$string['defaultmoodlenetname_desc'] = 'O nome da instância do MoodleNet disponível no seletor de atividades.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Habilitar a integração com MoodleNet';
$string['enablemoodlenet_desc'] = 'Se habilitado, um usuário com permissão de criar e gerenciar atividades pode navegar no MoodleNet por meio do seletor de atividades e importar recursos do MoodleNet para seu curso. Além disso, um usuário com permissão de restaurar backups pode selecionar um arquivo de backup no MoodleNet e restaurá-lo no Moodle.';
$string['errorduringdownload'] = 'Um erro ocorreu ao baixar o arquivo: {$a}';
$string['footermessage'] = 'Ou navegue pelo conteúdo em';
$string['forminfo'] = 'Seu ID do perfil MoodleNet será automaticamente salvo no seu perfil neste site.';
$string['importconfirm'] = 'Você está prestes a importar o conteúdo "{$a->resourcename} ({$a->resourcetype})" para o seu curso. Tem certeza que deseja continuar?';
$string['importconfirmnocourse'] = 'Você está prestes a importar o conteúdo "{$a->resourcename} ({$a->resourcetype})" para o seu site. Tem certeza que deseja continuar?';
$string['importformatselectguidingtext'] = 'Em qual formato você gostaria que o conteúdo "{$a->name} ({$a->type})" fosse adicionado ao seu curso?';
$string['importformatselectheader'] = 'Escolha o formato de exibição do conteúdo';
$string['inputhelp'] = 'Ou se você já possui uma conta MoodleNet, copie o ID do seu perfil MoodleNet e cole-o aqui:';
$string['instancedescription'] = 'MoodleNet é uma plataforma de mídia social aberta para educadores, com foco na tutoria colaborativa de coleções de recursos abertos.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-exemplo@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile não está formatado corretamente';
$string['missinginvalidpostdata'] = 'A informação do recurso do MoodleNet não existe ou está em um formato incorreto.
Se isso acontecer repetidamente, entre em contato com o administrador do site.';
$string['mnetprofile'] = 'Perfil MoodleNet';
$string['mnetprofiledesc'] = '<p>Digite aqui os detalhes do seu perfil MoodleNet para ser redirecionado ao seu perfil enquanto visita o MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'A integração do MoodleNet deve ser habilitada em Administração do site / MoodleNet antes para que as importações de recursos possam ser processadas.';
$string['moodlenetsettings'] = 'Configurações MoodleNet';
$string['notification'] = 'Você está prestes a importar o conteúdo "{$a->name} ({$a->type})" para o seu site. Selecione o curso em que ele deve ser adicionado ou <a href="{$a->cancellink}">cancelar</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'A ferramenta MoodleNet apenas facilita a comunicação com o MoodleNet. Ela não armazena dados.';
$string['profilevalidationerror'] = 'Ocorreu um problema ao tentar validar o ID do seu perfil MoodleNet';
$string['profilevalidationfail'] = 'Por favor, insira um ID de perfil MoodleNet válido';
$string['profilevalidationpass'] = 'Parece bom!';
$string['removedmnetprofilenotification'] = 'Devido a mudanças recentes na plataforma MoodleNet, todos os usuários que salvaram anteriormente seu ID de perfil MoodleNet no site precisarão inserir um ID de perfil MoodleNet no novo formato para se autenticar na plataforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Mudança de formato de ID de perfil MoodleNet';
$string['saveandgo'] = 'Salvar e ir';
$string['searchcourses'] = 'Pesquisar cursos';
$string['selectpagetitle'] = 'Selecione a página';
$string['uploadlimitexceeded'] = 'O tamanho do arquivo {$a->filesize} excede o limite de upload do usuário {$a->uploadlimit} bytes.';
