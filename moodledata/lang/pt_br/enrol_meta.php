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
 * Strings for component 'enrol_meta', language 'pt_br', version '4.1'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Adicionar ao grupo';
$string['coursesort'] = 'Ordenar lista de cursos';
$string['coursesort_help'] = 'Isso determina se a lista de cursos que podem ser vinculadas são classificadas por ordem de classificação (ou seja, a ordem estabelecida no local de administração> Cursos> Gerenciar os cursos e categorias) ou em ordem alfabética por definição.';
$string['creategroup'] = 'Criar novo grupo';
$string['defaultgroupnametext'] = 'Curso {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Tarefa de sincronização das meta inscrições';
$string['linkedcourse'] = 'Vincular curso';
$string['meta:config'] = 'Configura meta instâncias de inscrição';
$string['meta:selectaslinked'] = 'Selecionar curso como meta curso';
$string['meta:unenrol'] = 'Cancelar inscrição de usuários suspensos';
$string['nosyncroleids'] = 'Papéis que não estão sincronizados';
$string['nosyncroleids_desc'] = 'Por padrão, todas as atribuições de papel em nível de curso são sincronizadas do curso-pai para o curso-filho. Papéis que são selecionados aqui não serão incluídos no processo de sincronização. Os papéis disponíveis para sincronização serão atualizados na próxima execução do cron.';
$string['pluginname'] = 'Curso meta link';
$string['pluginname_desc'] = 'O plugin de inscrição Curso meta link sincroniza inscrição e papéis em dois cursos diferentes.';
$string['privacy:metadata:core_group'] = 'O plugin de inscrição Meta pode criar um novo grupo ou usar um grupo existente para adicionar todos os participantes do curso vinculado.';
$string['syncall'] = 'Sincroniza todos os usuários inscritos';
$string['syncall_desc'] = 'Caso habilitado todos os usuários inscritos são sincronizados mesmo  se eles não tenham papéis no curso pai, caso desabilitado apenas usuários que tenham ao menos um papel sincronizado será inscrito no curso filho.';
$string['wscannotcreategroup'] = 'Sem permissão para criar grupo no curso vinculado id = {$a}.';
$string['wsinvalidcourse'] = 'O curso com id = {$a} não existe ou não tem permissão para vincular uma inscrição meta.';
$string['wsinvalidmetacourse'] = 'O meta curso com id = {$a} não existe ou não tem permissão para adicionar instância de inscrição.';
$string['wsnoinstancesspecified'] = 'Nenhuma instância definida';
