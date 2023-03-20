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
 * Strings for component 'qtype_match', language 'pt_br', version '4.1'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Resposta {$a}';
$string['availablechoices'] = 'Opções disponíveis';
$string['blanksforxmorequestions'] = '{no} Outros conjuntos de itens em branco';
$string['correctansweris'] = 'A resposta correta é: {$a}.';
$string['deletedchoice'] = '[Escolha excluída]';
$string['deletedsubquestion'] = 'Esta parte da questão foi excluída após a tentativa ser iniciada.';
$string['filloutthreeqsandtwoas'] = 'Definir pelo menos 2 questões e 3 respostas. É possível definir outras respostas erradas ao criar uma resposta a uma questão em branco. Itens que contém ao mesmo tempo a questão e a resposta em branco serão ignorados.';
$string['nomatchinganswer'] = 'Você precisa especificar uma resposta correspondente à essa questão \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Você deve definir uma resposta para esta questão.';
$string['notenoughqsandas'] = 'Você deve definir pelo menos {$a->q} questão e {$a->a} respostas.';
$string['notenoughquestions'] = 'Você deve definir pelo menos {$a} pares de questão e resposta.';
$string['pleaseananswerallparts'] = 'Por favor responda todas as partes da questão.';
$string['pluginname'] = 'Associação';
$string['pluginname_help'] = 'As questões de associação exigem que o respondente associe corretamente uma lista de nomes ou declarações (questões) com outra lista de nomes ou declarações (respostas).';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Adicionando uma questão de associação';
$string['pluginnameediting'] = 'Editando uma questão de Associação';
$string['pluginnamesummary'] = 'A resposta a cada sub-questão deve ser escolhida de uma lista de possibilidades.';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma determinada questão.';
$string['privacy:preference:penalty'] = 'A penalidade para cada tentativa incorreta quando as questões são executadas usando o comportamento \'Interativo com múltiplas tentativas\' ou \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem ser embaralhadas automaticamente.';
$string['regradeissuenumchoiceschanged'] = 'O número de opções foi alterado.';
$string['shuffle'] = 'Embaralhar';
$string['shuffle_help'] = 'Se habilitada, a ordem das opções é embaralhada aleatoriamente para cada tentativa, desde que a configuração "Embaralhar entre questões" estiver habilitada nas configurações da atividade.';
