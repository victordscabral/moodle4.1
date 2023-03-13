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
 * Strings for component 'qtype_formulas', language 'pt_br', version '4.1'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Erro absoluto';
$string['addmorepartsblanks'] = 'Acrescentar mais {no} partes';
$string['algebraic_formula'] = 'Fórmula algébrica';
$string['answer'] = 'Resposta*';
$string['answer_help'] = '**Obrigatório**.
Deve ser uma lista de números ou uma lista de strings, dependendo do tipo de resposta escolhido. Quando há apenas uma resposta, um número ou string pode digitado diretamente. Observe que o número de elementos na lista define o número de campos de resposta para esta parte.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Resposta e unidade da parte {$a->part}';
$string['answercombinedunitsingle'] = 'Resposta e unidade';
$string['answercoordinatemulti'] = 'Resposta da parte {$a->part} e coordenada {$a->numanswer}';
$string['answercoordinatesingle'] = 'Resposta da coordenada {$a->numanswer}';
$string['answermark'] = 'Nota da parte';
$string['answermark_help'] = '**Obrigatório**.
A nota para a resposta desta parte, que deve ser um número maior que 0.
A nota padrão da questão inteira é a soma de todas as notas das partes.

Nota: Se o campo da nota desta parte for deixado em branco, a parte será excluída quando a questão for salva.';
$string['answermulti'] = 'Resposta para parte {$a->part}';
$string['answerno'] = 'Parte {$a}';
$string['answersingle'] = 'Resposta';
$string['answertype'] = 'Tipo de resposta';
$string['answertype_help'] = 'Existem quatro tipos de resposta.

As respostas de número, fórmula numérica e numérica requerem número ou uma lista de números como resposta.

As respostas de fórmula algébrica requerem uma string ou lista de strings como resposta.

Diferentes tipos de respostas irão impor diferentes restrições ao inserir respostas, por isso, os estudantes precisarão saber como inseri-los.
O formato verifica o código da questão e também os informará quando o que digitarem estiver errado. Leia a documentação para mais detalhes.';
$string['answerunitmulti'] = 'Unidade da parte {$a->part}';
$string['answerunitsingle'] = 'Unidade';
$string['checkvarshdr'] = 'Verificar a instanciação das variáveis';
$string['choiceno'] = 'Não';
$string['choiceyes'] = 'Sim';
$string['commonsiunit'] = 'Unidade do SI';
$string['correctansweris'] = 'Uma possível resposta correta é: {$a}';
$string['correctfeedback'] = 'Por cada resposta correta';
$string['correctfeedback_help'] = 'Este feedback será mostrado aos estudantes que obtiverem a nota máxima nesta parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['correctness'] = 'Critério de avaliação*';
$string['correctness_help'] = '**Obrigatório**. Pode escolher qualquer erro relativo ou erro absoluto com um intervalo de erro. O erro relativo não pode ser usado para o tipo de resposta algébrica.
Para uma definição precisa do erro relativo e do erro absoluto, quando há mais de um campo de resposta, consulte a documentação.';
$string['correctnessexpert'] = 'Especialista';
$string['correctnesssimple'] = 'Simples';
$string['defaultanswermark'] = 'Nota padrão da parte';
$string['defaultanswermark_desc'] = 'Nota padrão de uma parte para as novas partes de questão';
$string['defaultanswertype'] = 'Tipo de resposta padrão';
$string['defaultanswertype_desc'] = 'Tipo de resposta padrão para novas partes da questão';
$string['defaultcorrectness'] = 'Critério de avaliação padrão';
$string['defaultcorrectness_desc'] = 'Critério de avaliação padrão para as novas partes da questão';
$string['defaultunitpenalty'] = 'Unidade padrão de penalização';
$string['defaultunitpenalty_desc'] = 'Penalização padrão para unidade errada (0-1)';
$string['error_algebraic_var'] = 'Erro de sintaxe na definição da variável algébrica.';
$string['error_answer_missing'] = 'Nenhuma resposta foi definida.';
$string['error_answerbox_duplicate'] = 'Cada espaço de resposta só pode ser usado uma vez em uma parte.';
$string['error_answertype_mistmatch'] = 'Tipo de resposta incompatível: o tipo de resposta numérica requer um número e o tipo de resposta algébrica requer string';
$string['error_criterion'] = 'Os critérios de avaliação devem ser calculados para um único número.';
$string['error_eval_numerical'] = 'Algumas expressões não podem ser avaliadas numericamente.';
$string['error_fixed_range'] = 'Erro de sintaxe de um intervalo fixo.';
$string['error_forbid_char'] = 'A fórmula ou expressão contém caracteres ou operadores não permitidos.';
$string['error_forloop'] = 'Erro de sintaxe do ciclo For.';
$string['error_forloop_expression'] = 'A expressão do ciclo For deve ser uma lista.';
$string['error_forloop_var'] = 'Variável do ciclo For tem alguns erros.';
$string['error_func_param'] = 'Número incorreto ou tipo errado de parâmetros para a função {$a}()';
$string['error_mark'] = 'A nota da resposta deve ser um valor maior que 0.';
$string['error_no_answer'] = 'É necessária pelo menos uma resposta.';
$string['error_placeholder_format'] = 'Formato do espaço de resposta incorreto ou com caracteres proibidos.';
$string['error_placeholder_main_duplicate'] = 'Espaço de resposta duplicado no texto da questão principal.';
$string['error_placeholder_missing'] = 'Este espaço de resposta não está presente no texto da questão principal.';
$string['error_placeholder_sub_duplicate'] = 'Este espaço de resposta já foi definido em outra parte.';
$string['error_placeholder_too_long'] = 'O tamanho do espaço de resposta é limitado a 40 caracteres.';
$string['error_randvars_set_size'] = 'O número de elementos a gerar no conjunto deve ser maior que 1.';
$string['error_randvars_type'] = 'Todos os elementos do conjunto devem ser do mesmo tipo e exatamente do mesmo tamanho.';
$string['error_rule'] = 'Erro na análise da regra!';
$string['error_ruleid'] = 'Não existe qualquer regra no ficheiro com o ID/nome.';
$string['error_subexpression_empty'] = 'Uma sub-expressão está vazia.';
$string['error_syntax'] = 'Erro de sintaxe.';
$string['error_unit'] = 'Erro de análise da unidade!';
$string['error_unitpenalty'] = 'A penalização deve ser um número entre 0 e 1.';
$string['error_validation_eval'] = 'Erro na tentativa de cálculo!';
$string['error_vars_array_index_nonnumeric'] = 'Um valor não numérico não pode ser usado como índice da lista.';
$string['error_vars_array_index_out_of_range'] = 'Índice da lista fora do intervalo!';
$string['error_vars_array_size'] = 'O tamanho da lista deve estar entre 1 e 1000.';
$string['error_vars_array_type'] = 'Os elementos na mesma lista devem ser do mesmo tipo, número ou string.';
$string['error_vars_array_unsubscriptable'] = 'A variável não é assinável.';
$string['error_vars_bracket_mismatch'] = 'Parêntese incorreto.';
$string['error_vars_end_separator'] = 'Falta um separador do trabalho no final .';
$string['error_vars_name'] = 'A sintaxe do nome da variável está incorreta.';
$string['error_vars_reserved'] = 'A função {$a}() é reservada e não pode ser usada como variável.';
$string['error_vars_string'] = 'Erro! Ou é uma string sem fechar as aspas ou o uso de caracteres não permitidos, tais como, \'.';
$string['error_vars_undefined'] = 'A variável \'{$a}\' não foi definida.';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'O feedback da parte será mostrado aos estudantes que não obtiverem a nota máxima na parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['functiontakesatleasttwo'] = 'A função {$a} deve ter pelo menos dois argumentos';
$string['functiontakesnoargs'] = 'A função {$a} não tem argumentos';
$string['functiontakesonearg'] = 'A função {$a} deve ter exatamente um argumento';
$string['functiontakesoneortwoargs'] = 'A função {$a} deve ter um ou dois argumentos';
$string['functiontakestwoargs'] = 'A função {$a} deve ter exatamente dois argumentos';
$string['globalvarshdr'] = 'Variáves';
$string['illegalformulasyntax'] = 'Sintaxe de fórmula ilegal iniciada com \'{$a}\'';
$string['incorrectfeedback'] = 'Para qualquer resposta incorreta';
$string['incorrectfeedback_help'] = 'Este feedback será mostrado aos estudantes que não obtiverem qualquer nota nesta parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['instantiate'] = 'Criar instância';
$string['mainq'] = 'Questão principal';
$string['modelanswer'] = 'Modelo de resposta';
$string['none'] = 'Nenhum';
$string['number'] = 'Número';
$string['number_unit'] = 'Número e unidade';
$string['numdataset'] = 'Número de conjunto de dados';
$string['numeric'] = 'Numérico';
$string['numeric_unit'] = 'Numérico e unidade';
$string['numerical_formula'] = 'Fórmula numérica';
$string['numerical_formula_unit'] = 'Fórmula numérica e unidade';
$string['otherrule'] = 'Outras regras';
$string['otherrule_help'] = 'O "autor" da questão pode definir regras adicionais de conversão para outras unidades base aceites. Consulte a documentação para os usos avançados.';
$string['partiallycorrectfeedback'] = 'Para qualquer resposta parcialmente correta';
$string['partiallycorrectfeedback_help'] = 'Este feedback será mostrado aos estudantes que não obtiverem a nota máxima nesta parte. Pode incluir variáveis globais e locais que serão substituídas pelos seus valores';
$string['placeholder'] = 'Nome do espaço de resposta';
$string['placeholder_help'] = 'Um espaço de resposta é usado para identificar a localização no texto da questão principal que será substituído pelo conteúdo da parte. É um sequência de caracteres alfanuméricos prefixados por \'**#**\', por exemplo, #1, #2a, #2b e #A.
Se este campo for deixado vazio, a parte será anexada no final do texto da questão principal.';
$string['pleaseputananswer'] = 'Digite uma resposta em cada campo de entrada.';
$string['pluginname'] = 'Fórmulas';
$string['pluginname_help'] = 'Para começar a usar este tipo de questão, leia o <a href="https://docs.moodle.org/33/en/Formulas_question_tutorial">Tutorial de Questões de Fórmulas</a>.

Para aprender, consulte alguns <a href="https://docs.moodle.org/33/en/Formulas_question_type#Examples">Exemplos</a>.

Para as diferentes opções no formulário de edição abaixo, visite a <a href="https://docs.moodle.org/33/en/Formulas:_Question_page">Página sobre Questões de Fórmulas</a>

Para obter toda a informação, leia a <a href="https://docs.moodle.org/33/en/Formulas_question_type">Documentação</a>';
$string['pluginnameadding'] = 'A adicionar uma questão de fórmulas';
$string['pluginnameediting'] = 'A editar uma questão de fórmulas';
$string['pluginnamesummary'] = 'Tipo de questão com valores aleatórios e respostas múltiplas
Os campos de resposta podem ser colocados em qualquer lugar para  criar questões envolvendo várias estruturas, tais como, vetores, polinómios e matrizes.
Outras características, como a verificação de unidades e questões com várias partes, também são integradas de forma fácil e simples de usar.';
$string['postunit'] = 'Unidade';
$string['postunit_help'] = 'Pode especificar a unidade aqui. Este tipo de questão foi especialmente projetado para unidades SI, por isso, um espaço vazio representa o "produto" de diferentes "unidades base" e <tt> ^ </tt> é usado para expoentes.
Além disso, <tt> / </tt> pode ser usado para o expoente inverso. Qualquer permutação da unidade base é tratada da mesma forma.
Os estudantes devem usar o mesmo formato de entrada. Por exemplo,

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['privacy:metadata'] = 'O módulo de tipo de questão Fórmulas não armazena qualquer dado pessoal.';
$string['qtextpreview'] = 'Pré-visualizar usando o conjunto de dados';
$string['questiontext'] = 'Texto da questão';
$string['questiontext_help'] = 'Além do texto normal da questão, também pode usar variáveis globais e espaços de resposta.

As variáveis globais serão substituídas pelos seus valores e os espaços de resposta serão substituídos por partes.
Um exemplo simples com variáveis <tt> A, B, C </tt> e espaços de resposta <tt> #1, #2, #3 </tt> é:

<pre class="prettyprint">Qual é o resultado de {A} + {B}?<br>{#1}<br>Qual é o resultado de {A} - {B}?<br>{#2}<br>Qual é o resultado de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Erro relativo';
$string['renew'] = 'Atualizar';
$string['ruleid'] = 'Regras básicas de conversão';
$string['ruleid_help'] = 'Este tipo de questão possui um sistema integrado de conversão de unidades e regras básicas de conversão.

O básico são as regras das "Unidades do SI" que irão converter unidades padrão como por exemplo, unidade para comprimento, km, m, cm e mm. Esta opção não tem efeito se nenhuma unidade tiver sido usada.';
$string['settingusepopup'] = 'Usar dicas de ajuda';
$string['settingusepopup_desc'] = 'Mostrar a resposta correta e comentários numa dica de ajuda';
$string['subqoptions'] = 'Opções extra';
$string['subqtext'] = 'Texto da parte';
$string['subqtext_help'] = 'Os campos de texto e os espaços de resposta podem ser especificados aqui. Os marcadores de espaços de resposta (espaços reservados) que podem ser usados para especificar locais de campos de resposta são:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Os <tt>{_0}, {_1}, {_2}</tt> são os campos de entrada para coordenadas e <tt> {_u} </tt> é o campo de entrada para a unidade.

Todos os campos em falta são anexados automaticamente no final do texto da parte. Um caso especial é quando <tt>{_0}, {_u}</tt> são especificados consecutivamente e há apenas uma coordenada e unidade, ou seja, <tt>{_0}{_u}</tt>, serão combinados num único campo de resposta de entrada longa para resposta e unidade.';
$string['unit'] = 'Unidade';
$string['unitpenalty'] = 'Desconto por unidade errada (0-1) *';
$string['unitpenalty_help'] = 'Esta opção especifica o valor de penalização ao estudante por uma unidade errada.

De ser entre 0 e 1. Se for o valor 1, a unidade e a resposta devem estar corretas ao mesmo tempo para obter a nota. O seja, a unidade e a resposta são tratadas como uma entidade única. Por outro lado, se for o valor 0, os estudantes podem obter a nota total apenas para a resposta correta. Todas as strings aleatórias não terão efeito no final da resposta.

Por isso, recomenda-se usar o valor 1 sempre que a resposta não tiver uma unidade associada.';
$string['unsupportedformulafunction'] = 'A função {$a} não é suportada';
$string['vars1'] = 'Variáveis locais';
$string['vars1_help'] = 'Pode definir aqui variáveis da mesma forma que as variáveis globais são definidas ao nível da questão. As variáveis definidas aqui podem ser usadas na resposta ou no feedback da parte e o seu âmbito de visibilidade é limitado à parte.';
$string['vars2'] = 'Variáveis de avaliação';
$string['vars2_help'] = 'Todas as variáveis locais e as respostas do estudante podem ser usadas aqui. Consulte a documentação para usos avançados.';
$string['varsdata'] = 'Conjunto de dados instanciado';
$string['varsglobal'] = 'Variáveis globais';
$string['varsglobal_help'] = 'As fórmulas podem ser especificadas aqui para manipular as variáveis aleatórias instanciadas (todas as variáveis aleatórias estão disponíveis aqui).
A lista completa de funções e operadores matemáticos são fornecidos na documentação.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","um","dois","três"][A];<br>distância = sqrt(a*a + b*b);</pre>';
$string['varsrandom'] = 'Variáveis aleatórias';
$string['varsrandom_help'] = 'Os novos valores aleatórios são gerados para estas variáveis no início de cada tentativa. Pode definir um conjunto de elementos para escolher:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Os elementos podem ser números, strings ou listas destes. No início de uma nova tentativa, um elemento será "puxado" a partir do conjunto e atribuído à variável à esquerda. Além disso, para um conjunto de números, pode usar a notação de intervalo como 10: 100: 10 (veja o exemplo E acima). < p>';
$string['varsstatistics'] = 'Estatisticas';
$string['yougotnright'] = 'Respondeu corretamente a {$a->num} partes desta questão.';
