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
 * Strings for component 'qtype_randomsamatch', language 'pt_br', version '4.1'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Opções de seleção disponíveis são insuficientes para essa questão, portanto, não está disponível neste questionário. Por favor, informe seu professor.';
$string['nosaincategory'] = 'Não existe nenhuma questão com resposta breve disponível na categoria escolhida \'{$a->catname}\'. Escolha uma categoria diferente ou crie algumas questões nesta categoria.';
$string['notenoughsaincategory'] = 'Existem apenas {$a->nosaquestions} questões com resposta breve na categoria escolhida \'{$a->catname}\'. Escolha outra categoria, adicione questões a esta categoria ou reduza o número de questões configuradas.';
$string['pluginname'] = 'Associação de resposta curta aleatória';
$string['pluginname_help'] = 'Da perspectiva do estudante, esta questão parece uma questão associativa. A diferença é que a lista de nomes ou instruções (questões) para associação são desenhadas de forma aleatória a partir da categoria de questões da resposta curta. É preciso que existe um número suficiente de questões de resposta curta não utilizadas, caso contrário uma mensagem de erro será exibida.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'Adicionando questão de associação de resposta curta aleatória';
$string['pluginnameediting'] = 'Editando questão de correspondência de resposta curta aleatória';
$string['pluginnamesummary'] = 'Como a questão associativa, mas criada aleatoriamente a partir das questões de resposta curta em uma categoria particular.';
$string['privacy:metadata'] = 'O plugin de tipo de pergunta Associação aleatória de resposta curta aleatória não armazena nenhum dado pessoal.';
$string['randomsamatch'] = 'Associação aleatória de resposta curta.';
$string['randomsamatchintro'] = 'Para cada uma das seguintes perguntas, marque a resposta correspondente no menu.';
$string['randomsamatchnumber'] = 'Número de questões para selecionar';
$string['subcats'] = 'Incluir subcategorias';
$string['subcats_help'] = 'Se marcada, as perguntas serão também escolhidas a partir de subcategorias.';
