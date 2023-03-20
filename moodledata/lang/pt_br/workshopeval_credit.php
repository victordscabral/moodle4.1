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
 * Strings for component 'workshopeval_credit', language 'pt_br', version '4.1'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Modo de avaliação';
$string['mode_desc'] = 'Modo padrão de avaliação de classificação usada pelo método de crédito de participação.';
$string['mode_help'] = 'O modo determina como notas de avaliação são calculadas.

* Tudo ou nada - O avaliador deve avaliar tudo que for enviado de forma a obter a nota máxima, caso contrário, receberá uma nota de zero.

* Proporcional - O grau obtido é proporcional ao número de avaliações. Se tudo que for enviado for avaliado, o avaliador irá obter a nota máxima, se metade do que for enviado for avaliado, o avaliador irá obter 50% da pontuação máxima.

* Pelo menos um - O avaliador deve avaliar, pelo menos um envio de forma a obter a nota máximo.';
$string['modeall'] = 'Tudo ou nada';
$string['modeone'] = 'Pelo menos um';
$string['modeproportional'] = 'Proporcional';
$string['pluginname'] = 'Crédito de participação';
