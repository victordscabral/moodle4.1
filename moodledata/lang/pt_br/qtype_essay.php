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
 * Strings for component 'qtype_essay', language 'pt_br', version '4.1'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipos de arquivos aceitos';
$string['acceptedfiletypes_help'] = 'Os tipos de arquivo aceitos podem ser restringidos digitando uma lista de extensões de arquivo. Se o campo estiver vazio, serão permitidos todos os tipos de arquivos.';
$string['allowattachments'] = 'Permitir anexos';
$string['answerfiles'] = 'Arquivos de resposta';
$string['answertext'] = 'Texto de resposta';
$string['attachedfiles'] = 'Anexos: {$ a}';
$string['attachmentsoptional'] = 'Anexos são opcionais';
$string['attachmentsrequired'] = 'Exigir anexos';
$string['attachmentsrequired_help'] = 'Esta opção especifica o número mínimo de anexos exigidos para a resposta ser considerada para atribuição de nota.';
$string['err_maxminmismatch'] = 'O limite máximo de palavras deve ser maior do que o limite mínimo de palavras';
$string['err_maxwordlimit'] = 'O limite máximo de palavras está habilitado, mas não está definido';
$string['err_maxwordlimitnegative'] = 'O limite máximo de palavras não pode ser um número negativo';
$string['err_minwordlimit'] = 'O limite mínimo de palavras está habilitado, mas não está definido';
$string['err_minwordlimitnegative'] = 'O limite mínimo de palavras não pode ser um número negativo';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML com seletor de arquivos';
$string['formatmonospaced'] = 'Texto simples, fonte mono-espaçada';
$string['formatnoinline'] = 'Nenhum texto online';
$string['formatplain'] = 'Texto simples';
$string['graderinfo'] = 'Informação para avaliadores';
$string['graderinfoheader'] = 'Informações do avaliador';
$string['maxbytes'] = 'Tamanho máximo de arquivo';
$string['maxwordlimit'] = 'Limite máximo de palavras';
$string['maxwordlimit_help'] = 'Se as resposta requer que os estudantes informem um texto, esse é o número máximo de palavras que cada estudante poderá enviar.';
$string['maxwordlimitboundary'] = 'O limite de palavras para esta questão é de {$a->limit} palavras e você está tentando enviar {$a->count} palavras. Por favor, reduza sua resposta e tente novamente.';
$string['minwordlimit'] = 'Limite mínimo de palavras';
$string['minwordlimit_help'] = 'Se as resposta requer que os estudantes informem um texto, esse é o número mínimo de palavras que cada estudante poderá enviar.';
$string['minwordlimitboundary'] = 'Essa questão requer uma resposta com pelo menos {$a->limit} palavras e você está tentando enviar {$a->count} palavras. Por favor, amplie sua resposta e tente novamente.';
$string['mustattach'] = 'Quando "Nenhum texto online" é selecionado, ou as respostas são opcionais, você deve permitir pelo menos um anexo.';
$string['mustrequire'] = 'Quando "Sem texto online" é selecionado, ou quando as respostas são opcionais, você deve exigir pelo menos um anexo.';
$string['mustrequirefewer'] = 'Você não pode exigir mais anexos do que você permitiu.';
$string['nlines'] = '{$a} linhas';
$string['nonexistentfiletypes'] = 'Os tipos de arquivo a seguir não foram reconhecidos: {$a}';
$string['pluginname'] = 'Dissertação';
$string['pluginname_help'] = 'Em resposta a uma questão (que pode incluir uma imagem) o estudante escreve uma resposta de um ou dois parágrafos. Não será atribuída avaliação a questão dissertativa, até que ela seja  comentada por um professor e com nota atribuída manualmente.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Adicionando uma questão dissertativa';
$string['pluginnameediting'] = 'Editando uma questão de dissertação';
$string['pluginnamesummary'] = 'Permitir uma resposta de um upload de arquivo e/ou texto online. Deve, então, ser avaliada manualmente.';
$string['privacy:metadata'] = 'O plugin de tipo de questão Dissertação não armazena nenhum dado pessoal.';
$string['privacy:preference:attachments'] = 'Número de anexos permitidos.';
$string['privacy:preference:attachmentsrequired'] = 'Número de anexos necessários.';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma determinada questão.';
$string['privacy:preference:maxbytes'] = 'Tamanho máximo do arquivo.';
$string['privacy:preference:responsefieldlines'] = 'Número de linhas indicando o tamanho da caixa de entrada (textarea).';
$string['privacy:preference:responseformat'] = 'Qual é o formato da resposta (editor de HTML, texto simples, etc.)?';
$string['privacy:preference:responserequired'] = 'Se o estudante é obrigado a informar um texto ou se o campo de texto é opcional.';
$string['responsefieldlines'] = 'Tamanho da caixa de entrada';
$string['responseformat'] = 'Formato da resposta';
$string['responseisrequired'] = 'Exigir que o estudante insira um texto';
$string['responsenotrequired'] = 'A entrada de texto é opcional';
$string['responseoptions'] = 'Opções de resposta';
$string['responserequired'] = 'Exigir texto';
$string['responsetemplate'] = 'Modelo de resposta';
$string['responsetemplate_help'] = 'Qualquer texto inserido aqui será exibido na caixa de entrada da resposta quando uma nova tentativa para a questão começa.';
$string['responsetemplateheader'] = 'Modelo de resposta';
$string['wordcount'] = 'Contagem de palavras: {$a}';
$string['wordcounttoofew'] = 'Contagem de palavras: {$a}, menos que as {$a->limit} palavras necessárias.';
$string['wordcounttoomuch'] = 'Contagem de palavras: {$a}, mais que o limite de {$a->limit} palavras.';
