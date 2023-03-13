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
 * Strings for component 'gradingform_rubric', language 'pt_br', version '4.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Adicionar critério';
$string['additionalfeedback'] = 'Feedback adicional';
$string['alwaysshowdefinition'] = 'Permitir que usuários pré-visualizem a rubrica utilizada no módulo (caso contrário a rubrica somente estará visível após a avaliação)';
$string['backtoediting'] = 'Voltar para edição';
$string['confirmdeletecriterion'] = 'Você tem certeza que quer excluir esse critério?';
$string['confirmdeletelevel'] = 'Você tem certeza que quer excluir esse nível?';
$string['criterion'] = 'Critério {$a}';
$string['criterionaddlevel'] = 'Adicionar nível';
$string['criteriondelete'] = 'Excluir critério';
$string['criterionduplicate'] = 'Duplicar critério';
$string['criterionempty'] = 'Clique para editar critério';
$string['criterionmovedown'] = 'Mover para baixo';
$string['criterionmoveup'] = 'Mover para cima';
$string['criterionremark'] = 'Comentário do critério {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definir rubrica';
$string['description'] = 'Descrição';
$string['enableremarks'] = 'Permitir que o avaliador possa adicionar observações para cada critério';
$string['err_mintwolevels'] = 'Cada critério deve ter ao menos dois níveis';
$string['err_nocriteria'] = 'Rubrica deve conter pelo menos um critério';
$string['err_nodefinition'] = 'Definição de nível não pode ficar vazia';
$string['err_nodescription'] = 'Descrição do critério não pode ficar vazia';
$string['err_novariations'] = 'Níveis de critérios não podem valer o mesmo número de pontos';
$string['err_scoreformat'] = 'O número de pontos para cada nível deve ser um número válido';
$string['err_totalscore'] = 'Número máximo de pontos possíveis para avaliação por rubrica precisa ser maior que zero';
$string['gradingof'] = '{$a} avaliações';
$string['level'] = 'Nível {$a->definition}, {$a->score} pontos.';
$string['leveldefinition'] = 'Definição do nível {$a}';
$string['leveldelete'] = 'Excluir nível {$a}';
$string['levelempty'] = 'Clique para editar nível';
$string['levelsgroup'] = 'Grupo de níveis';
$string['lockzeropoints'] = 'Calcular a nota tendo uma pontuação mínima da nota mínima possível para a rubrica';
$string['lockzeropoints_help'] = 'Esta configuração funciona somente se a soma do número mínimo de pontos para cada critério é maior que 0. Se marcado, a nota mínima possível para a rúbrica será maior que 0. Se não marcado, a pontuação mínima possível para a rúbrica será mapeada para a nota mínima disponível para a atividade (que é 0, a menos que uma escala seja utilizada).';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'A definição da rubrica foi alterada após este estudante ter sido avaliado. O estudante não pode ver esta rubrica até que você marque a rubrica e atualize a nota.';
$string['notset'] = 'Não definido';
$string['pluginname'] = 'Rubrica';
$string['pointsvalue'] = '{$a} pontos';
$string['previewrubric'] = 'Pré-visualizar rubrica';
$string['privacy:metadata:criterionid'] = 'Um identificador para um critério específico que está sendo avaliado.';
$string['privacy:metadata:fillingssummary'] = 'Armazena informações sobre a nota do usuário criada pela rubrica.';
$string['privacy:metadata:instanceid'] = 'Um identificador relacionado a uma nota em uma atividade.';
$string['privacy:metadata:levelid'] = 'O nível obtido na rubrica.';
$string['privacy:metadata:remark'] = 'Comentários relacionados ao critério da rubrica em avaliação.';
$string['regrademessage1'] = 'Você está prestes a salvar alterações em uma rubrica que já foi utilizada para avaliação. Por favor, indique se as notas existentes precisam ser revistas. Se você escolher esta opção a rubrica ficará oculta para os estudantes até que seus itens sejam reavaliados.';
$string['regrademessage5'] = 'Você está prestes a salvar alterações significativas em uma rubrica que já foi utilizada para avaliação. O valor da nota no livro de notas não será alterado, mas a rubrica permanecerá o oculta para os estudantes até que seus itens sejam reavaliados';
$string['regradeoption0'] = 'Não marcar para reavaliar';
$string['regradeoption1'] = 'Marcar para reavaliar';
$string['restoredfromdraft'] = 'NOTA: A última tentativa de avaliar esta pessoa não foi salva corretamente portanto um rascunho das notas foi restaurado. Se você quiser descartar essas alterações use o botão "Cancelar" abaixo.';
$string['rubric'] = 'Rubrica';
$string['rubricmapping'] = 'Regras de mapeamento de pontuação para nota';
$string['rubricmappingexplained'] = 'A pontuação mínima possível para esta rubrica é <b>{$a->minscore} pontos</b> e será convertida para a nota mínima disponível para a atividade (que é zero, a menos que uma escala seja usada). A pontuação máxima <b>{$a->maxscore} pontos</b> será convertida para a nota máxima. Pontuações intermediárias serão convertidas respectivamente.

Se uma escala for usada para avaliação, a pontuação será arredondada e convertida em elementos da escala como se fossem números inteiros consecutivos.

Esse cálculo de nota pode ser alterado editando o formulário e marcando a caixa \'Calcular nota com uma pontuação mínima da nota mínima possível para a rubrica\'.';
$string['rubricnotcompleted'] = 'Por favor escolha algo para cada critério';
$string['rubricoptions'] = 'Opções da rubrica';
$string['rubricstatus'] = 'Estado da rubrica atual';
$string['save'] = 'Salvar';
$string['saverubric'] = 'Salvar rubrica e torná-la disponível';
$string['saverubricdraft'] = 'Salvar como rascunho';
$string['scoreinputforlevel'] = 'Pontuação de entrada para o nível {$a}';
$string['scorepostfix'] = '{$a} pontos';
$string['showdescriptionstudent'] = 'Exibir a descrição da rubrica para quem está sendo avaliado';
$string['showdescriptionteacher'] = 'Exibir a descrição da rubrica durante a avaliação';
$string['showremarksstudent'] = 'Exibir comentários para quem está sendo avaliado';
$string['showscorestudent'] = 'Exibir pontos correspondentes a cada nível para quem está sendo avaliado';
$string['showscoreteacher'] = 'Exibir pontos correspondentes a cada nível durante a avaliação';
$string['sortlevelsasc'] = 'Ordenação dos níveis:';
$string['sortlevelsasc0'] = 'Decrescente por número de pontos';
$string['sortlevelsasc1'] = 'Crescente por número de pontos';
$string['zerolevelsabsent'] = 'Aviso: a pontuação mínima possível para essa rubrica não é 0; isto pode resultar em notas inesperadas para a atividade. Para evitar esta situação, cada critério deve ter um nível com 0 pontos.<br>
Este aviso pode ser ignorado se for usada uma escala para a classificação e os níveis mínimos na rubrica correspondem ao valor mínimo da escala.';
