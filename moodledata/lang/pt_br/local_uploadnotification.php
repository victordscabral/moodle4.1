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
 * Strings for component 'local_uploadnotification', language 'pt_br', version '4.1'.
 *
 * @package     local_uploadnotification
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actioncreated'] = 'criado';
$string['actionupdated'] = 'atualizado';
$string['long_diff'] = 'Nesse arquivo, {$a} páginas foram alteradas.';
$string['long_diff_many'] = 'Nesse arquivo muitas páginas foram alteradas.';
$string['messageprovider:digest'] = 'Notificação do resumo da modificação do curso';
$string['templatemessage'] = 'Olá, {$a->firstname},

Os seguintes recursos/atividades foram alterados nos cursos que você está inscrito.

{$a->notifications}

{$a->signoff}

Você está recebendo este e-mail porque você ou um professor solicitou essas informações. Você pode editar suas preferências em {$a->user_settings}';
$string['templatemessage_html'] = 'Olá, {$a->firstname}, <br><br>

Os seguintes recursos/atividades foram alterados nos cursos que você está inscrito.

<ul>
{$a->notifications}
</ul>

{$a->signoff}<br><br>

Você está recebendo este e-mail porque você ou um professor solicitou essas informações. Você pode editar suas preferências em <a href="{$a->user_settings}">preferencias</a>.';
$string['templateresource'] = '* "{$a->filename}" em "{$a->coursefullname}" ({$a->url_course}) foi {$a->action}: {$a->url_file}';
$string['templateresource_html'] = '<li><a href="{$a->url_file}">{$a->filename}</a> em <a href="{$a->url_course}">{$a->coursefullname}</a> foi {$a->action}</li>';
$string['templatesubject_plural'] = 'Atualizações de recursos em seus cursos {$a}';
$string['templatesubject_singular'] = 'Atualizações de recursos em seu curso {$a}';
