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
 * Strings for component 'offlinequiz_statistics', language 'pt_br', version '4.1'.
 *
 * @package     offlinequiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['detailedanalysis'] = 'Análise mais detalhada das respostas para esta questão';
$string['facility'] = 'Índice de facilidade';
$string['negcovar_help'] = 'A nota desta questão para esse conjunto de tentativas no questionário varia de maneira oposta a  nota geral da tentativa. Isso significa que a nota de todas as tentativas tende a ficar abaixo da média quando a nota para esta questão está acima da média e vice-versa.

Nossa equação de peso efetivo da questão não pode ser calculada neste caso. Os cálculos de peso efetivo da questão para as outras questões neste questionário são o peso efetivo da questão para estas questões se as questões em destaque com uma covariância negativa são dadas para uma avaliação máxima de zero.

Se você editar um questionário e atribuir a esta(s) questões(s) com covariância negativa uma nota máxima de zero, o peso efetivo das questões será zero e o peso efetivo real das questões será calculado agora.';
$string['questioninformation'] = 'Informação da questão';
$string['questionstatistics'] = 'Estatísticas da questão';
