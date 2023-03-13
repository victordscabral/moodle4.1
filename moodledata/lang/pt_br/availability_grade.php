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
 * Strings for component 'availability_grade', language 'pt_br', version '4.1'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Itens de notas armazenados para avaliação da condições de disponibilidade';
$string['cachedef_scores'] = 'Notas dos usuários armazenadas para avaliação das condições de disponibilidade';
$string['description'] = 'Requer que os estudantes alcancem uma nota específica.';
$string['error_backwardrange'] = 'Quando especificar um intervalo de notas, a mínima deve ser menor do que a máxima.';
$string['error_invalidnumber'] = 'Intervalo de notas devem ser especificadas com porcentagens coerentes.';
$string['error_selectgradeid'] = 'Você deve selecionar um item da nota para estabelecer a condição da nota.';
$string['label_max'] = 'Porcentagem máxima da nota (excluso)';
$string['label_min'] = 'Porcentagem mínima da nota (incluso)';
$string['missing'] = '(Atividade faltante)';
$string['option_max'] = 'deve ser <';
$string['option_min'] = 'deve ser &#x2265;';
$string['pluginname'] = 'Restrição devido às notas';
$string['privacy:metadata'] = 'O plugin Restrição por notas não armazena nenhum dado pessoal.';
$string['requires_any'] = 'Você tem uma nota em <strong>{$a}</strong>';
$string['requires_max'] = 'Você obteve uma pontuação inferior a certa em <strong>{$a}</strong>';
$string['requires_min'] = 'Você atinge mais do que uma determinada pontuação em <strong>{$a}</strong>';
$string['requires_notany'] = 'Você não tem uma nota em <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Você não recebeu certas pontuações em <strong>{$a}</strong>';
$string['requires_range'] = 'Você atinge uma pontuação dentro de um determinado intervalo em <strong>{$a}</strong>';
$string['title'] = 'Nota';
