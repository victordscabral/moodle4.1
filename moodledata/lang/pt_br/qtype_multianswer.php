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
 * Strings for component 'qtype_multianswer', language 'pt_br', version '4.1'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Eu confirmo que eu quero que a questão seja gravada como editada.';
$string['confirmsave'] = 'Confirmar e gravar {$a}';
$string['correctanswer'] = 'Resposta correta';
$string['correctanswerandfeedback'] = 'Resposta correta e feedback';
$string['corruptedquestion'] = 'Esta questão está corrompida e contém subquestões que não estão presentes em seu sistema.';
$string['decodeverifyquestiontext'] = 'Decodifique e verifique o texto da questão';
$string['invalidmultianswerquestion'] = 'Questão de respostas embutidas (Cloze) inválida ({$a}).';
$string['layout'] = 'Layout';
$string['layouthorizontal'] = 'Linha horizontal com caixas de opção';
$string['layoutmultiple_horizontal'] = 'Linha horizontal de caixas de seleção';
$string['layoutmultiple_vertical'] = 'Coluna vertical de caixas de seleção';
$string['layoutselectinline'] = 'Caixa de listagem alinhada com o texto';
$string['layoutundefined'] = 'Layout indefinido';
$string['layoutvertical'] = 'Coluna vertical com caixas de opção';
$string['missingsubquestion'] = 'Esta subquestão está faltando em seu sistema e não pode ser exibida.';
$string['nooptionsforsubquestion'] = 'Impossível obter opções em part#{$a->sub}(question->id={$a->id})';
$string['noquestions'] = 'A questão embutida com resposta múltipla "<strong>{$a}</strong>" não contém nenhuma questão';
$string['pleaseananswerallparts'] = 'Por favor responda todas as partes da questão.';
$string['pluginname'] = 'Respostas embutidas (cloze)';
$string['pluginname_help'] = 'Questões com respostas integradas (cloze) consistem em uma passagem de texto com questões com respostas breves e de escolha múltipla nelas integradas.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Adicionando uma questão de respostas integradas';
$string['pluginnameediting'] = 'Editando uma questão de resposta incorporada (cloze)';
$string['pluginnamesummary'] = 'Questões deste tipo são muito flexíveis, mas só podem ser criadas por digitação de texto contendo códigos especiais que criam múltipla escolha, resposta curta e questões numéricas embutidas.';
$string['privacy:metadata'] = 'O plugin de tipo de questão Respostas embutidas (Cloze) não armazena nenhum dado pessoal.';
$string['qtypenotrecognized'] = 'Tipo de questão {$a} não reconhecida';
$string['questiondefinition'] = 'Definição da questão';
$string['questiondeleted'] = 'Questão excluída';
$string['questioninquiz'] = '<ul>
<li>adicionar ou excluir questão,</li>
<li>alterar a ordem de questões no texto,</li>
<li>alterar o tipo de questão (numérico, resposta curta, de múltipla escolha).</li></ul>';
$string['questionnotfound'] = 'Impossível encontrar questão em part#{$a}';
$string['questionsadded'] = 'Questão adicionada';
$string['questionsaveasedited'] = 'A questão será gravada como editada';
$string['questionsless'] = '{$a} questão(ões) menos do que as questões armazenadas na base de dados';
$string['questionsmissing'] = 'O texto da questão precisa incluir pelo menos uma resposta incorporada.';
$string['questionsmore'] = '{$a} questão(ões) mais do que as questões armazenadas na base de dados';
$string['questiontypechanged'] = 'Tipo de questão modificado';
$string['questiontypechangedcomment'] = 'Pelo menos um tipo de questão foi modificada.<br>Você adicionou, excluiu ou moveu uma questão?<br>Siga adiante.';
$string['questionusedinquiz'] = 'Esta questão é utilizada em {$a->nb_of_quiz} questionário(s), total de tentativas: {$a->nb_of_attempts}';
$string['storedqtype'] = 'Tipo de questão aramazenado {$a}';
$string['subqresponse'] = 'parte {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Tipo de questão desconhecido: {$a->type} em part#{$a->sub}';
$string['warningquestionmodified'] = '<b>ATENÇÃO</b>';
$string['youshouldnot'] = '<b>VOCÊ NÃO DEVE </b>';
