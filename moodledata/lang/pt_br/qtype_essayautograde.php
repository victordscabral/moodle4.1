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
 * Strings for component 'qtype_essayautograde', language 'pt_br', version '4.1'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplebands'] = 'Adicionar mais {$a} faixas de nota';
$string['addmultiplephrases'] = 'Adicionar mais {$a} frases alvo';
$string['addpartialgrades'] = 'Conceder notas parciais?';
$string['addpartialgrades_help'] = 'Se esta opção for habilitada, as notas serão adicionadas para as faixas de nota parcialmente concluídas.';
$string['addsingleband'] = 'Adicionar mais uma faixa de nota';
$string['addsinglephrase'] = 'Adicionar mais uma frase alvo';
$string['autograding'] = 'Avaliação automática';
$string['bandcount'] = 'Para';
$string['bandpercent'] = 'ou mais itens, conceda';
$string['chars'] = 'Caracteres';
$string['charspersentence'] = 'Caracteres por sentença';
$string['commonerror'] = 'Erro comum';
$string['commonerrors'] = 'Erros comuns';
$string['commonerrors_help'] = 'Os erros comuns estão definidos no "Glossário de erros" associado a esta questão.';
$string['correctresponse'] = 'Para obter a nota máxima para esta questão, você deve cumprir aos seguintes critérios:';
$string['countwordslabel'] = 'Contagem atual de palavras';
$string['enableautograde'] = 'Habilitar avaliação automática';
$string['enableautograde_help'] = 'Habilite ou desabilite a avaliação automática';
$string['errorbehavior'] = 'Comportamento de correspondência de erro';
$string['errorbehavior_help'] = 'Essas configurações refinam o comportamento de correspondência para entradas no Glossário de erros comuns.';
$string['errorcmid'] = 'Glossário de erros';
$string['errorcmid_help'] = 'Escolha o Glossário que contém uma lista de erros comuns.

Cada vez que um dos erros for encontrado na resposta da dissertação, a penalidade definida será subtraída da nota do estudante para esta questão.';
$string['errorpercent'] = 'Penalidade por erro';
$string['errorpercent_help'] = 'Selecione a porcentagem da nota total que deve ser subtraída para cada erro encontrado na resposta.';
$string['excludecommonerrors'] = 'Não cometa nenhum dos erros comuns em <a href="{$a->href}" target="_blank">{$a->name}</a>';
$string['explanationautopercent'] = 'Isso está fora da faixa de porcentagem normal, então foi ajustado para {$a->autopercent}%.';
$string['explanationcommonerror'] = '{$a->percent}% por incluir "{$a->error}", que é um erro comum';
$string['explanationcompleteband'] = '{$a->percent}% por completar a faixa de nota [{$a->gradeband}]';
$string['explanationdatetime'] = 'em %Y %b %d (%a) às %H:%M';
$string['explanationfiles'] = '{$a->percent}% por enviar {$a->filecount} / {$a->itemcount} arquivos';
$string['explanationfirstitems'] = '{$a->percent}% para os primeiros {$a->count} {$a->itemtype}';
$string['explanationgrade'] = 'Portanto, a nota gerada por computador para esta dissertação foi definida para {$a->finalgrade} = ({$a->finalpercent}% de {$a->maxgrade}).';
$string['explanationitems'] = '{$a->percent}% para {$a->count} {$a->itemtype}';
$string['explanationmaxgrade'] = 'A nota máxima para esta questão é {$a->maxgrade}.';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype} é menor do que o valor mínimo requerido para receber uma nota.';
$string['explanationoverride'] = 'Posteriormente, {$a->datetime}, a nota para esta dissertação foi definida manualmente para {$a->manualgrade}.';
$string['explanationpartialband'] = '{$a->percent}% por completar parcialmente a faixa de nota [{$a->gradeband}]';
$string['explanationpenalty'] = 'Contudo, {$a->penaltytext} foi subtraída para verificar a resposta antes do envio.';
$string['explanationrawpercent'] = 'A nota percentual bruta para esta dissertação é {$a->rawpercent}% <br /> = ({$a->details}).';
$string['explanationremainingitems'] = '{$a->percent}% para os demais {$a->count} {$a->itemtype}';
$string['explanationseecomment'] = '(veja comentário abaixo)';
$string['explanationtargetphrase'] = '{$a->percent}% por incluir a frase "{$a->phrase}"';
$string['feedback'] = 'Comentários';
$string['feedbackhintbreaks'] = 'Você usou muitas quebras de linha?';
$string['feedbackhintchars'] = 'Você escreveu o número requerido de caracteres?';
$string['feedbackhinterrors'] = 'Você cometeu algum dos erros comuns?';
$string['feedbackhintfiles'] = 'Você anexou o número requerido de arquivos?';
$string['feedbackhintparagraphs'] = 'Você escreveu o número requerido de parágrafos?';
$string['feedbackhintphrases'] = 'Você incluiu todas as frases alvo?';
$string['feedbackhints'] = 'Dicas para melhorar sua nota';
$string['feedbackhintsentences'] = 'Você escreveu o número requerido de sentenças?';
$string['feedbackhintwords'] = 'Você atingiu a meta de contagem de palavras?';
$string['files'] = 'Arquivos';
$string['fogindex'] = 'Índice de nebulosidade';
$string['fogindex_help'] = 'O índice de nebulosidade de Gunning é uma medida de legibilidade. É calculado usando a seguinte fórmula.

* ((palavras por sentença) + (palavras longas por sentença)) x 0,4

Para obter mais informações, consulte: <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = 'Forçar atualização';
$string['gradeband'] = 'Faixa de nota [{no}]';
$string['gradeband_help'] = 'Especifique o número mínimo de itens contáveis para essa faixa a ser aplicada e a nota que será concedida se essa faixa for aplicada.';
$string['gradebands'] = 'Faixas de nota';
$string['gradecalculation'] = 'Cálculo de notas';
$string['gradeforthisquestion'] = 'Nota para esta questão';
$string['hidesample'] = 'Ocultar exemplo';
$string['itemcount'] = 'Número esperado de itens';
$string['itemcount_help'] = 'O número mínimo de itens contáveis que devem estar no texto da dissertação para atingir a nota máxima para esta questão.

Note que este valor pode se tornar ineficaz se houver faixas de notas definidas abaixo.';
$string['itemtype'] = 'Tipo de itens contáveis';
$string['itemtype_help'] = 'Selecione o tipo de itens no texto da dissertação que contribuirão para a avaliação automática.';
$string['lexicaldensity'] = 'Densidade lexical';
$string['lexicaldensity_help'] = 'A densidade lexical é uma porcentagem calculada usando a seguinte fórmula.

* 100 x (número de palavras únicas) / (número total de palavras)

Assim, uma dissertação em que muitas palavras são repetidas tem uma densidade lexical baixa, enquanto uma dissertação com muitas palavras únicas tem uma densidade lexical alta.';
$string['longwords'] = 'Palavras longas';
$string['longwords_help'] = '"Palavras longas" são palavras que possuem três ou mais sílabas. Note que o algoritmo para determinar o número de sílabas produz apenas resultados aproximados.';
$string['longwordspersentence'] = 'Palavras longas por sentença';
$string['maximumfilecount'] = 'Número máximo de arquivos: {$a}';
$string['maximumfilesize'] = 'Tamanho máximo do arquivo: {$a}';
$string['maxwordslabel'] = 'Contagem máxima de palavras';
$string['maxwordswarning'] = 'Ops, você escreveu muitas palavras!';
$string['minimumfilecount'] = 'Número mínimo de arquivos: {$a}';
$string['minwordslabel'] = 'Contagem mínima de palavras';
$string['minwordswarning'] = 'Continue! Você ainda não escreveu palavras suficientes.';
$string['missing'] = 'Ausente';
$string['paragraphs'] = 'Parágrafos';
$string['percentofquestiongrade'] = '{$a}% da nota da questão.';
$string['phrasebehavior'] = 'Comportamento da frase alvo [{no}]';
$string['phrasebehavior_help'] = 'Essas configurações refinam o comportamento de correspondência para esta frase alvo.';
$string['phrasecasesensitiveno'] = 'A correspondência não diferencia maiúsculas de minúsculas.';
$string['phrasecasesensitiveyes'] = 'A correspondência diferencia maiúsculas de minúsculas.';
$string['phrasefullmatchno'] = 'Corresponder palavras inteiras ou parciais.';
$string['phrasefullmatchyes'] = 'Corresponder apenas palavras inteiras.';
$string['phraseignorebreaksno'] = 'Reconhecer quebras de linha.';
$string['phraseignorebreaksyes'] = 'Ignorar quebras de linha.';
$string['phrasematch'] = 'Se';
$string['phrasepercent'] = 'é usado, conceda';
$string['pleaseattachfiles'] = 'Por favor, anexe o número necessário de arquivos.';
$string['pleaseinputtext'] = 'Por favor, insira sua resposta na caixa de texto.';
$string['pluginname'] = 'Dissertação (avaliação automática)';
$string['pluginname_help'] = 'Em resposta a uma questão que pode incluir uma imagem, o respondente escreve uma resposta de um ou mais parágrafos. Inicialmente, uma nota é atribuída automaticamente com base no número de caracteres, palavras, frases ou parágrafos e na presença de certas frases-alvo. A nota automática pode ser substituída mais tarde pelo professor.';
$string['pluginnameadding'] = 'Adicionando uma questão Dissertação (avaliação automática)';
$string['pluginnameediting'] = 'Editando uma questão Dissertação (avaliação automática)';
$string['pluginnamesummary'] = 'Permite que uma Dissertação de várias frases ou parágrafos seja submetida como uma resposta à questão. A disseratação é avaliada automaticamente. A nota pode ser substituída mais tarde.';
$string['present'] = 'Presente';
$string['privacy:metadata'] = 'O plugin do tipo de questão Dissertação (avaliação automática) não armazena nenhum dado pessoal.';
$string['requiredfilecount'] = 'Número requerido de arquivos: {$a}';
$string['responseisnotoriginal'] = 'Por favor, torne seu texto mais original.';
$string['responsesample'] = 'Exemplo de resposta';
$string['responsesample_help'] = 'Qualquer texto aqui será exibido como um exemplo de resposta, se o estudante clicar no link "Mostrar exemplo" no texto da questão.';
$string['responsesampleformat'] = 'Exemplo de formato de Dissertação';
$string['responsesampleformat_help'] = 'Selecione o formato do texto da resposta de exemplo.';
$string['rewriteresubmit'] = 'e envie novamente.';
$string['rewriteresubmitbreaks'] = 'remover todas quebras de linha';
$string['rewriteresubmitchars'] = 'adicionar mais caracteres';
$string['rewriteresubmiterrors'] = 'corrijir os erros comuns,';
$string['rewriteresubmitfiles'] = 'anexar o número requerido de arquivos';
$string['rewriteresubmitjoin'] = ',';
$string['rewriteresubmitparagraphs'] = 'adicionar mais parágrafos';
$string['rewriteresubmitphrases'] = 'adicionar as frases ausentes';
$string['rewriteresubmitsentences'] = 'adicionar mais sentenças';
$string['rewriteresubmitwords'] = 'adicionar mais palavras';
$string['sentences'] = 'Sentenças';
$string['sentencesperparagraph'] = 'Sentenças por parágrafo';
$string['showcalculation'] = 'Mostrar cálculo da nota?';
$string['showcalculation_help'] = 'Se esta opção estiver habilitada, uma explicação do cálculo da nota gerada automaticamente será mostrada nas páginas de avaliação e revisão.';
$string['showfeedback'] = 'Mostrar feedback para o estudante?';
$string['showfeedback_help'] = 'Se esta opção for habilitada, uma tabela de feedback acionável será exibida nas páginas de avaliação e revisão. Feedback acionável é o feedback que diz aos estudantes o que eles precisam fazer para melhorar.';
$string['showgradebands'] = 'Mostrar faixas de notas?';
$string['showgradebands_help'] = 'Se esta opção for habilitada, os detalhes das faixas de notas serão mostrados nas páginas de avaliação e revisão.';
$string['showsample'] = 'Mostrar exemplo';
$string['showtargetphrases'] = 'Motras palavras alvo?';
$string['showtargetphrases_help'] = 'Se esta opção for ativada, os detalhes das frases alvo serão mostrados nas páginas de avaliação e revisão.';
$string['showtextstats'] = 'Mostrar estatísticas de texto?';
$string['showtextstats_help'] = 'Se esta opção for habilitada, as estatísticas sobre o texto serão mostradas.';
$string['showtostudentsonly'] = 'Sim, mostrar apenas para estudantes';
$string['showtoteachersandstudents'] = 'Sim, mostrar para professores e estudantes';
$string['showtoteachersonly'] = 'Sim, mostrar apenas para professores';
$string['targetphrase'] = 'Frase alvo [{no}]';
$string['targetphrase_help'] = 'Especifique a nota que será adicionada se esta frase alvo aparecer na dissertação.

> **exemplo** Se [Finally] é usado, conceder [10% da nota da questão.]

A frase alvo pode ser uma única frase ou uma lista de frases separadas por uma vírgula "," ou pela palavra "OR" (maiúsculas).

> ** exemplo** Se [Finally OR Lastly] é usado, conceder [10% da nota da questão.]

Uma interrogação "?" em uma frase corresponde a qualquer caractere único, enquanto um asterisco "*" corresponde a um número arbitrário de caracteres (incluindo zero caracteres).

> **exemplo** Se [First\\*Then\\*Finally] é usado, conceder [50% da nota da questão.]';
$string['targetphrases'] = 'Palavras alvo';
$string['textstatistics'] = 'Estatísticas de texto';
$string['textstatitems'] = 'Itens estatísticos';
$string['textstatitems_help'] = 'Selecione quaisquer itens aqui que você deseja que apareçam nas estatísticas de texto que são mostradas nas páginas de avaliação e revisão.';
$string['uniquewords'] = 'Palavras únicas';
$string['uploadfiles'] = 'Carregar arquivos';
$string['words'] = 'Palavras';
$string['wordspersentence'] = 'Palavras por sentença';
