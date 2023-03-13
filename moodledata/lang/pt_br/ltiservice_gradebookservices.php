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
 * Strings for component 'ltiservice_gradebookservices', language 'pt_br', version '4.1'.
 *
 * @package     ltiservice_gradebookservices
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysgs'] = 'Usar este serviço para sincronizar nota e gerenciar coluna';
$string['grade_synchronization'] = 'Serviços IMS LTI de Tarefa e Nota';
$string['grade_synchronization_help'] = 'Se deve usar os Serviços IMS LTI de Tarefa e Nota para sincronizar as notas em vez do serviço de Resultados Básicos.

* **Não use este serviço** - serão usados recursos e configuração de Resultados Básicos
* ** Use este serviço apenas para sincronização de notas** - O serviço preencherá as notas em uma coluna do livro de notas já existente, mas não será capaz de criar novas colunas
* **Use este serviço para sincronização de notas e gerenciamento de colunas** - O serviço será capaz de criar e atualizar colunas do livro de notas e gerenciar as notas.';
$string['ltiservice_gradebookservices'] = 'Serviços IMS LTI de Tarefa e Nota';
$string['modulename'] = 'Notas LTI';
$string['nevergs'] = 'Não use este serviço';
$string['partialgs'] = 'Usar este serviço apenas para sincronização de notas';
$string['pluginname'] = 'Serviços de Tarefa e Nota LTI';
$string['privacy:metadata:externalpurpose'] = 'Essas informações são enviadas a um provedor de LTI externo.';
$string['privacy:metadata:feedback'] = 'O feedback que o usuário recebeu no Moodle para esta atividade de LTI.';
$string['privacy:metadata:grade'] = 'A nota que o usuário recebeu no Moodle para esta atividade de LTI.';
$string['privacy:metadata:maxgrade'] = 'A nota máxima que pode ser alcançada para esta atividade LTI.';
$string['privacy:metadata:timemodified'] = 'A última vez que a nota foi atualizada';
$string['privacy:metadata:userid'] = 'O ID do usuário que acessa o LTI consumidor';
$string['taskcleanup'] = 'Limpar tabela de serviços de tarefa e nota de LTI';
