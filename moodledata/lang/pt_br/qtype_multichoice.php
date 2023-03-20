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
 * Strings for component 'qtype_multichoice', language 'pt_br', version '4.1'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Uma ou múltiplas respostas?';
$string['answerhowmany_desc'] = 'Se o padrão deve ser uma resposta (ou seja, botões de rádio) ou respostas múltiplas (ou seja, caixas de seleção).';
$string['answernumbering'] = 'Numerar as opções?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I,. II,. III,. ...';
$string['answernumbering_desc'] = 'O estilo de numeração padrão.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Sem numeração';
$string['answersingleno'] = 'Múltiplas respostas permitidas';
$string['answersingleyes'] = 'Apenas uma resposta';
$string['choiceno'] = 'Opção {$a}';
$string['choices'] = 'Opções disponíveis';
$string['clearchoice'] = 'Limpar minha escolha';
$string['clozeaid'] = 'Digite a palavra que falta';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['correctanswersare'] = 'As respostas corretas são: {$a}';
$string['correctfeedback'] = 'Para qualquer resposta correta';
$string['deletedchoice'] = 'Esta escolha foi excluída após a tentativa ser iniciada.';
$string['errfractionsaddwrong'] = 'As notas positivas que você escolheu não somam 100%<br />Ao invés disso, elas somam {$a}%';
$string['errfractionsnomax'] = 'Uma das opções deve ser 100% para que seja<br /> possível conseguir uma nota máxima nessa questão.';
$string['errgradesetanswerblank'] = 'Avaliação feita mas resposta em branco';
$string['feedback'] = 'Feedback';
$string['fillouttwochoices'] = 'Você deve preencher no mínimo duas opções. Opções deixadas em branco não serão usadas.';
$string['fractionsaddwrong'] = 'As notas positivas que você escolheu não somam 100%<br />Ao invés disso, elas somam {$a}%<br />Você quer retornar e corrigir essa questão?';
$string['fractionsnomax'] = 'Uma das escolhas deve ser 100% para que seja<br /> possível conseguir uma nota máxima nessa questão.<br />Você quer retornar e corrijir essa questão?';
$string['incorrectfeedback'] = 'Para qualquer resposta incorreta';
$string['notenoughanswers'] = 'Este tipo de questão requer pelo menos {$a} opções';
$string['overallcorrectfeedback'] = 'Retorno para qualquer resposta correta';
$string['overallfeedback'] = 'Feedback geral';
$string['overallincorrectfeedback'] = 'Retorno para qualquer resposta incorreta';
$string['overallpartiallycorrectfeedback'] = 'Feedback para qualquer resposta parcialmente correta';
$string['partiallycorrectfeedback'] = 'Para qualquer resposta parcialmente correta';
$string['pleaseselectananswer'] = 'Por favor, selecione uma resposta.';
$string['pleaseselectatleastoneanswer'] = 'Por favor, selecione pelo menos uma resposta.';
$string['pluginname'] = 'Múltipla escolha';
$string['pluginname_help'] = 'Em resposta a uma questão (que pode incluir uma imagem), o respondente escolhe respostas múltiplas. Uma questão de múltipla escolha pode ter uma ou múltiplas respostas corretas.';
$string['pluginname_link'] = 'question/type/multichoice';
$string['pluginnameadding'] = 'Adicionando uma questão de múltipla escolha';
$string['pluginnameediting'] = 'Editando uma questão de múltipla escolha';
$string['pluginnamesummary'] = 'Permite a escolha de uma ou múltiplas respostas de uma lista pré definida.';
$string['privacy:metadata'] = 'O plugin tipo de questão Múltipla escolha não armazena nenhum dado pessoal.';
$string['privacy:preference:answernumbering'] = 'Qual estilo de numeração deve ser usado (\'1, 2, 3, ...\', \'a, b, c, ...\', etc.).';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma determinada questão.';
$string['privacy:preference:penalty'] = 'A penalidade para cada tentativa incorreta quando as questões são executadas usando o comportamento \'Interativo com múltiplas tentativas\' ou \'Modo adaptativo\'.';
$string['privacy:preference:showstandardinstruction'] = 'Se mostrando a instrução padrão.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem ser embaralhadas automaticamente.';
$string['privacy:preference:single'] = 'Se a resposta é única com botões de opção, ou múltipla com caixas de seleção.';
$string['regradeissuenumchoiceschanged'] = 'O número de opções na questão foi alterado.';
$string['selectmulti'] = 'Escolha uma ou mais:';
$string['selectone'] = 'Escolha uma opção:';
$string['showstandardinstruction'] = 'Mostrar instruções padrão.';
$string['showstandardinstruction_desc'] = 'Se as instruções "Selecione um:" ou "Selecione um ou mais:" devem ser exibidas antes das respostas de múltipla escolha.';
$string['showstandardinstruction_help'] = 'Se as instruções "Escolha uma:" ou "Escolha uma ou mais:" devem ser exibidas antes das respostas de múltipla escolha.';
$string['shuffleanswers'] = 'Misturar as opções?';
$string['shuffleanswers_desc'] = 'Se as opções devem ser por padrão aleatoriamente embarulhadas para cada tentativa.';
$string['shuffleanswers_help'] = 'Se habilitado, a ordem das respostas será embaralhada aleatoriamente para cada tentativa, contanto que \'Embaralhar entre as questões\' também esteja habilitada nas configurações da atividade.';
$string['singleanswer'] = 'Escolha uma opção:';
$string['toomanyselected'] = 'Você selecionou muitas opções.';
