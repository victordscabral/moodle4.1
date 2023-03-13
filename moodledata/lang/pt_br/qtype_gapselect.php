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
 * Strings for component 'qtype_gapselect', language 'pt_br', version '4.1'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espaços em branco para mais {no} opções';
$string['answer'] = 'Resposta';
$string['blanknumber'] = 'Em branco {$a}';
$string['choices'] = 'Opções';
$string['choicex'] = 'Opção [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menu suspenso';
$string['combinedcontrolnamegapselectplural'] = 'menus suspensos';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['errorblankchoice'] = 'Por favor, verifique as opções: Opção {$a} está vazia.';
$string['errormissingchoice'] = 'Verifique o texto da questão: {$a} não foi encontrado entre as opções! Somente números com as respostas definidas de escolha podem ser usados como espaços reservados.';
$string['errornoslots'] = 'O texto da questão deve conter espaços reservados, como [[1]] para mostrar onde devem ir as palavras que faltam.';
$string['errorquestiontextblank'] = 'Você deve digitar algum texto para a questão.';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Por favor, coloque uma resposta em cada caixa.';
$string['pluginname'] = 'Selecionar as palavras que faltam';
$string['pluginname_help'] = 'As questões para selecionar palavras que faltam exigem que o respondente selecione as respostas corretas nos menus suspensos. [[1]], [[2]], [[3]], ... são usados como espaços reservados no texto da questão, com as respostas corretas definidas como opções de resposta 1, 2, 3, ... respectivamente. Opções extras de respostas podem ser adicionadas para tornar a questão mais difícil. As opções de respostas podem ser agrupadas para controlar as disponíveis em cada menu de opções.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Adicionando uma questão de seleção de palavras que faltam';
$string['pluginnameediting'] = 'Editando uma questão de seleção de palavras que faltam';
$string['pluginnamesummary'] = 'As palavras que faltam no texto da questão são preenchidas utilizando menus de opções.';
$string['privacy:metadata'] = 'O plugin do tipo de questão Selecionar palavras que faltam  permite que os autores definir opções padrão como preferências do usuário.';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma determinada questão.';
$string['privacy:preference:penalty'] = 'A penalidade para cada tentativa incorreta quando as questões são executadas usando o comportamento \'Interativo com múltiplas tentativas\' ou \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem ser embaralhadas automaticamente.';
$string['shuffle'] = 'Embaralhar';
$string['tagsnotallowed'] = '{$a->tag} não é permitida. (Apenas {$a->allowed} são permitidas.)';
$string['tagsnotallowedatall'] = '{$a->tag} não é permitida. (Código HTML não é permitido aqui.)';
