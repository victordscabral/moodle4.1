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
 * Strings for component 'format_periods', language 'pt_br', version '4.1'.
 *
 * @package     format_periods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automaticenddate'] = 'Calcular a data final do último período';
$string['automaticenddate_help'] = 'Se ativado, a data final do curso irá automaticamente coincidir com a data final do último período.';
$string['currentsection'] = 'Este período';
$string['customdatesformat'] = 'Personalizado';
$string['datesformat'] = 'Formato das datas';
$string['datesformat_help'] = 'Seleciona o formato da data que é mostrado no nome padrão do período';
$string['datesformatcustom'] = 'Formato personalizado para as datas';
$string['datesformatcustom_help'] = 'Especifica o formato personalizado para as datas. Veja <a href="http://php.net/manual/en/function.strftime.php" target="_blank">php manual</a> para a sintaxe';
$string['deletesection'] = 'Apaga o período';
$string['editsection'] = 'Edita o período';
$string['editsectionname'] = 'Edita o nome do período';
$string['futuresneakpeek'] = 'Espiar períodos futuros';
$string['futuresneakpeek_help'] = 'Considera os períodos que iniciarem dentro do intervalo informado como atuais (ex., se definido como "dois dias", permite que os estudantes vejam o próximo período dois dias antes do final do período atual)';
$string['hidecompletely'] = 'Ocultar completamente';
$string['hidefromcourseview'] = 'Ocultar da página da disciplina';
$string['hidefromothers'] = 'Ocultar o período';
$string['newsectionname'] = 'Novo nome para o período {$a}';
$string['notavailable'] = 'Ainda não está disponível';
$string['numberperiods'] = 'Número de períodos';
$string['page-course-view-periods'] = 'Qualquer página principal de cursos em formato Período';
$string['page-course-view-periods-x'] = 'Qualquer página de cursos em formato Período';
$string['perioddurationdefault'] = 'Duração padrão do período';
$string['perioddurationdefault_help'] = 'Define a duração de um período. Isso pode ser substituído em cada período.';
$string['perioddurationoverride'] = 'Substitui duração do período';
$string['perioddurationoverride_help'] = 'Define a duração desse período. Se não definido o valor padrão para a disciplina será usado.';
$string['pluginname'] = 'Formado em Períodos';
$string['sameascurrent'] = 'O mesmo que no período atual';
$string['sameaspast'] = 'O mesmo que nos períodos passados';
$string['section0name'] = 'Geral';
$string['sectiondates'] = 'Período: <b>{$a->dates}</b>';
$string['sectiondatesduration'] = 'Período: <b>{$a->dates}</b>; Duração: <b>{$a->duration}</b>';
$string['sectionduration'] = 'Duração: <b>{$a->duration}</b>';
$string['sectionname'] = 'Período';
$string['showcollapsed'] = 'Mostra cada período como um link para a própria página';
$string['showexpanded'] = 'Mostra todos os períodos em uma única página';
$string['showfromothers'] = 'Mostra período';
$string['showfutureperiods'] = 'Mostra períodos futuros';
$string['showfutureperiods_help'] = 'Permite, automaticamente, mostrar períodos futuros como link, não disponível ou ocultar completamente';
$string['shownotavailable'] = 'Mostra como não disponível';
$string['showpastcompleted'] = 'Mostra períodos passados integralmente';
$string['showpastcompleted_help'] = 'Define como mostrar períodos passados onde todas as atividades foram completadas. O acompanhamento de
conclusão deve estar ativado para todos os módulos da seção';
$string['showpastperiods'] = 'Mostra os períodos passados';
$string['showpastperiods_help'] = 'Define se mostrar ou ocultar os períodos passados. "Ocultar da página do curso" significa que as atividades não serão mostradas na página do curso, mas estarão visíveis no diário de notas e em outros relatórios.';
$string['showperiods'] = 'Mostra os períodos atuais';
$string['showperiods_help'] = 'Define como exibir os períodos por padrão. Isso pode ser substituído por períodos passados ou futuros';
