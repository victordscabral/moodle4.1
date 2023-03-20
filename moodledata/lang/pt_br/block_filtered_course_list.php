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
 * Strings for component 'block_filtered_course_list', language 'pt_br', version '4.1'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Um gerente vê todos os cursos';
$string['blockname'] = 'Lista de cursos filtrados';
$string['catrubrictpl'] = 'Template do tópico de categoria';
$string['catseparator'] = 'Separador de categoria';
$string['completedcourses'] = 'Cursos concluídos';
$string['configcatrubrictpl'] = 'Use esta configuração para determinar um padrão de como mostrar os tópicos das categoria quando filtrando por categoria. Os seguintes tokens de substituição estão disponíveis: NAME, IDNUMBER, PARENT, ANCESTRY. Você pode truncar a saída de qualquer token acrescentando uma quantidade de caracteres em chaves.
(e.g. NAME {20}). Uma elipse será adicionada. <br /><br />Detalhes completos em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configcatseparator'] = 'Linha de separação para ser utilizada entre os nomes das categorias quando utilizar ANCESTRY no template de tópico de categoria.';
$string['configcoursenametpl'] = 'Use esta configuração para determinar um padrão de como nostrar o nome dos cursos. Os seguintes tokens de substituição estão disponíveis: FULLNAME, SHORTNAME, IDNUMBER e CATEGORY. Você pode truncar a saída de qualquer token acrescentando uma quantidade de caracteres em chaves.
(e.g. NAME {20}). Uma elipse será adicionada. <br /><br />Detalhes completos em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configexternalfilters'] = 'Use o identificador em parêntesis para referenciar o filtro dentro da área de texto de configuração do filtro. Para informação sobre a configuração disponível para filtros externos, veja o plugin provendo-o.';
$string['configfilters'] = 'Insira um filtro por linha usando barras verticais para separar os elementos filtrados. Os tipos de filtro são: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> e <i>generic</i>. <br /><br />Detalhes completos em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['confighideallcourseslink'] = 'Ocultar o link "Todos os cursos" no rodapé do bloco. <br>Ocultar o link não afeta a visualização do gerente.';
$string['confighidefromguests'] = 'Ocultar o bloco de visitantes e usuários anônimos.';
$string['confighideothercourses'] = 'Ocultar o tópico "Outros cursos" no bloco.';
$string['configmanagerview'] = 'O que um gerente deve ver na lista de cursos do bloco? Perceba que gerentes que não estão inscritos em nenhum curso ainda verão a lista genérica.';
$string['configmaxallcourse'] = 'Em um site com uma única categoria, gerentes e visitantes verão todos os cursos, <br />mas acima deste número eles verão um link para a categoria. <br />[Escolha um número inteiro entre 0 e 999.]';
$string['configpersistentexpansion'] = 'Lembrar do estado de expansão dos tópicos na sessão do navegador.';
$string['configprimarysort'] = 'Os cursos serão ordenados dentro de um tópico através deste campo. Escolha "Ordenação" para mostrar os cursos na mesma ordem que vistos na página de gerenciamento de cursos.';
$string['configsecondarysort'] = 'Os cursos serão ordenados dentro de um tópico secundariamente através deste campo.';
$string['configtitle'] = 'Título do bloco';
$string['coursenametpl'] = 'Template dos nomes dos cursos';
$string['courses'] = 'Cursos';
$string['courseswithxenrolment'] = 'Cursos com {$a} inscrições';
$string['defaultfilters'] = 'category | collapsed | 0 (top level) | 0 (all descendants)';
$string['externalfilters'] = 'Filtros externos';
$string['filtered_course_list:addinstance'] = 'Adicionar um novo bloco Lista de cursos filtrados';
$string['filtered_course_list:myaddinstance'] = 'Adicionar um novo bloco Lista de cursos filtrados para meu Painel';
$string['filters'] = 'Configuração de filtro';
$string['filters_help'] = 'Insira um filtro por linha usando barras verticais para separar os elementos filtrados. Os tipos de filtro são: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> e <i>generic</i>. <br /><br />Detalhes completos em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['hideallcourseslink'] = 'Ocultar o link "Todos os cursos"';
$string['hidefromguests'] = 'Ocultar dos visitantes';
$string['hideothercourses'] = 'Ocultar os outros cursos';
$string['managerview'] = 'Visualização do gerente';
$string['maxallcourse'] = 'Máximo para uma categoria única';
$string['othercourses'] = 'Outros cursos';
$string['owncourses'] = 'Um gerente vê seus próprios cursos';
$string['persistentexpansion'] = 'Expansão permanente';
$string['pluginname'] = 'Lista de cursos filtrados';
$string['primarysort'] = 'Ordenação primária';
$string['primaryvector'] = 'Vetor primário de ordenação';
$string['privacy:metadata'] = 'O bloco Lista de cursos filtrados mostra informações sobre inscrições em cursos, mas não efetua ou armazena qualquer informação. Todas as inscrições são gerenciadas por outros sistemas Moodle.';
$string['secondarysort'] = 'Ordenação secundária';
$string['secondaryvector'] = 'Vetor secundário de ordenção';
$string['starredcourses'] = 'Cursos favoritados';
$string['top'] = 'Topo';
