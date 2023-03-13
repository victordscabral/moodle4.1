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
 * Strings for component 'local_qeupgradehelper', language 'pt_br', version '4.1'.
 *
 * @package     local_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['alreadydone'] = 'Tudo está convertido';
$string['areyousure'] = 'Você tem certeza?';
$string['areyousuremessage'] = 'Deseja continuar com a atualização de todas as {$a->numtoconvert} tentativas do questionário \'{$a->name}\' no curso {$a->shortname}?';
$string['areyousureresetmessage'] = 'O questionário \'{$a->name}\' no curso {$a->shortname} possui {$a->totalattempts} tentativas, onde {$a->convertattempts} foram atualizadas do sistema antigo. Dessas, {$a->resettableattempts} podem ser redefinidas, para posterior conversão. Deseja continuar com isso?';
$string['attemptstoconvert'] = 'Tentativa com necessidade de conversão';
$string['backtoindex'] = 'Voltar a página principal';
$string['conversioncomplete'] = 'Conversão concluída';
$string['convertattempts'] = 'Converter tentativas';
$string['convertedattempts'] = 'Tentativas convertidas';
$string['convertquiz'] = 'Converter tentativas...';
$string['cronenabled'] = 'Cron habilitado';
$string['cronprocesingtime'] = 'Horário de processamento a cada execução do cron';
$string['cronsetup'] = 'Configurar Cron';
$string['cronsetup_desc'] = 'Você pode configurar o cron para concluir a atualização dos dados da tentativa de questionário automaticamente.';
$string['cronstarthour'] = 'Hora de início';
$string['cronstophour'] = 'Hora de parada';
$string['gotoindex'] = 'Voltar à lista de questionários que podem ser atualizados';
$string['gotoquizreport'] = 'Ir para os relatórios deste questionário, para verificar a atualização';
$string['gotoresetlink'] = 'Ir para a lista de questionário que podem ser redefinidos';
$string['includedintheupgrade'] = 'Incluído na atualização?';
$string['invalidquizid'] = 'ID de questionário inválido. O questionário não existe ou não possui tentativas para conversão.';
$string['listpreupgrade'] = 'Listar questionários e tentativas';
$string['listtodo'] = 'Listar questionários ainda a serem atualizados';
$string['listupgraded'] = 'Listar os questionários já atualizados que podem ser redefinidos';
$string['noquizattempts'] = 'Seu site não tem nenhuma tentativa de questionário!';
$string['nothingupgradedyet'] = 'Nenhuma tentativa atualizada que possa ser redefinida';
$string['notupgradedsiterequired'] = 'Esse script só pode funcionar antes do site ser atualizado.';
$string['numberofattempts'] = 'Número de tentativas do questionário';
$string['outof'] = '{$a->some} de{$a->total}';
$string['pluginname'] = 'Questão - Mecanismo auxiliar para atualização';
$string['questionsessions'] = 'Sessões da questão';
$string['quizid'] = 'ID do questionário';
$string['quizupgrade'] = 'Status de atualização do questionário';
$string['quizzestobeupgraded'] = 'Todos os questionário com tentativas';
$string['resetcomplete'] = 'Redefinição concluída';
$string['resetquiz'] = 'Redefinir as tentativas...';
$string['resettingquizattempts'] = 'Redefinindo as tentativas do questionário';
$string['resettingquizattemptsprogress'] = 'Redefinindo tentativa {$a->done} / {$a->outof}';
$string['upgradedsiterequired'] = 'Esse script só pode funcionar depois do site ser atualizado.';
$string['upgradingquizattempts'] = 'Atualizando as tentativas do questionário \'{$a->name}\' no curso {$a->shortname}';
