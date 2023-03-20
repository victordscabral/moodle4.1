<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Lang strings
 *
 * @package    report
 * @subpackage progress
 * @copyright  2008 Sam Marshall
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Divisor de cursos do ILB';
$string['title'] = 'Rotina de divisão de turmas';
$string['alert'] = '<strong>ALERTA</strong>
<p>Usuários transferidos por este plugin poderão se misturar com os usuários que já se encontram no curso de destino, impossibilitando uma separação posterior</p><strong>Seja cuidadoso</strong>';
$string['nouserstosplit'] = 'Não há usuários para dividir';
$string['role_option'] = '{$a->totalusers} usuários matriculados como {$a->localname}';
$string['target_course'] = 'Curso de destino';
$string['split'] = 'Dividir';
$string['splitqty'] = 'Quantidade a transferir';
$string['invalidenrolid'] = 'Identificação de enrol inválido';
$string['noenroltarget'] = 'Nenhum método de inscrição no curso de destino que possa receber esses usuários';
$string['nouserstransfered'] = 'Nenhum usuário pode ser transferido';
$string['userstransfered'] = 'Os usuários foram transferidos com sucesso!';
$string['page-report-ilbsplit-x'] = 'Página para dividir usuários entre diferentes cursos';
$string['page-report-ilbsplit-index'] = 'Página índice para dividir usuários entre diferentes cursos';
