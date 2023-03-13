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
 * Strings for component 'mlbackend_python', language 'pt_br', version '4.1'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'A configuração do servidor não está completa.';
$string['errorserver'] = 'Erro do servidor {$a}';
$string['host'] = 'Host';
$string['hostdesc'] = 'Host';
$string['packageinstalledshouldbe'] = 'O pacote moodlemlbackend Python deve ser atualizado. A versão requerida é a "{$a->required}" e a versão instalada é a "{$a->installed}"';
$string['packageinstalledtoohigh'] = 'O pacote moodlemlbackend Python não é compatível com esta versão do Moodle. A versão necessária é "{$a->required}" ou superior, desde que seja compatível com a API. A versão instalada "{$a->installed}" é muito alta.';
$string['password'] = 'Senha';
$string['passworddesc'] = 'Sequência de caracteres usados como senha para comunicação entre o servidor Moodle e o servidor Python.';
$string['pluginname'] = 'Backend Python de aprendizado de máquina';
$string['port'] = 'Porta';
$string['portdesc'] = 'Porta';
$string['privacy:metadata'] = 'O plugin backend Python de aprendizado de máquina não armazena nenhum dado pessoal.';
$string['pythonpackagenotinstalled'] = 'O pacote Python moodlemlbackend não está instalado ou há um problema com ele. Por favor execute "{$a}" na interface de linha de comando para mais informações';
$string['pythonpathnotdefined'] = 'O caminho para o seu executável binário Python não foi definido. Por favor, visite "{$a}" e configure-o.';
$string['secure'] = 'Usar HTTPS';
$string['securedesc'] = 'Se deve usar HTTP ou HTTPS.';
$string['serversettingsinfo'] = 'Se \'Usar um servidor\' estiver habilitado, as configurações do servidor serão exibidas.';
$string['tensorboardinfo'] = 'Iniciar o TensorBoard por linha de comando digitando tensorboard --logdir=\'{$a}\' em seu servidor web.';
$string['username'] = 'Nome do usuário';
$string['usernamedesc'] = 'Sequência de caracteres utilizada como nome de usuário para comunicação entre o servidor Moodle e o servidor Python.';
$string['useserver'] = 'Usar um servidor';
$string['useserverdesc'] = 'O pacote Python de back-end de aprendizado de máquina não está instalado no servidor da web, mas em um servidor diferente.';
