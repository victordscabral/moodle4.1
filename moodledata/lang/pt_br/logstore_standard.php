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
 * Strings for component 'logstore_standard', language 'pt_br', version '4.1'.
 *
 * @package     logstore_standard
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamanho do buffer de escrita';
$string['jsonformat'] = 'Formato JSON';
$string['jsonformat_desc'] = 'Use o formato JSON padrão em vez de dados PHP serializados no campo \'other\' do banco de dados.';
$string['pluginname'] = 'Log padrão';
$string['pluginname_desc'] = 'Um plugin de log armazena as entradas de log em uma tabela na base de dados do Moodle.';
$string['privacy:metadata:log'] = 'Um conjunto de eventos passados';
$string['privacy:metadata:log:anonymous'] = 'Se o evento foi sinalizado como anônimo';
$string['privacy:metadata:log:eventname'] = 'O nome do evento';
$string['privacy:metadata:log:ip'] = 'O endereço IP usado no momento do evento';
$string['privacy:metadata:log:origin'] = 'A origem do evento';
$string['privacy:metadata:log:other'] = 'Informação adicional sobre o evento';
$string['privacy:metadata:log:realuserid'] = 'O ID do usuário real por trás do evento, quando um usuário estiver com outro .';
$string['privacy:metadata:log:relateduserid'] = 'O ID de um usuário relacionado a este evento';
$string['privacy:metadata:log:timecreated'] = 'O horário que o evento ocorreu';
$string['privacy:metadata:log:userid'] = 'O ID de um usuário que acionou este evento';
$string['taskcleanup'] = 'Limpeza da tabela de log';
