<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'palestra', language 'en'
 *
 * @package   mod_palestra
 * @copyright 2021 Interlegis (https://www.interlegis.leg.br)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Palestra';
$string['modulename'] = 'Palestra';
$string['modulenameplural'] = 'Palestras';
$string['pluginadministration'] = 'Administração de palestra';
$string['crontask'] = 'Cronograma para cálculo da nota de participação da palestra';
$string['contentheader'] = 'Configurações da palestra';
$string['youtubecode'] = 'Código de stream do Youtube';
$string['startdate'] = 'Data de início';
$string['startdate_help'] = 'O momento em que a presença deve começar a ser registrada';
$string['duration'] = 'Duração';
$string['duration_help'] = 'Duração da palestra em minutos';
$string['checkinterval'] = 'Intervalo de verificação';
$string['checkinterval_help'] = "Indica o intervalo de tempo (em minutos) que o browser do usário envia um 'sinal de vida' para o servidor moodle. Isto é usado para calcular o tempo que o usuário permaneceu na palestra e, consequentemente, sua nota de participação. Um valor baixo promove melhor precisão, mas pode sobrecarregar o servidor, especialmente se há muitos usuários simultâneos. Um valor alto pode reduzir a precisão, mas deixa o servidor mais leve. O valor default é 10 minutos. Zero indica que nenhum sinal de vida será enviado e o simples accesso à Palestra corresponderá a 100% de nota de participação.";
$string['includechat'] = 'Incluir chat do youtube';
$string['chatdisposition'] = 'Posição do chat';
$string['chatdisposition_sidebyside'] = 'Lado a lado';
$string['chatdisposition_stacked'] = 'Empilhado';
$string['includechat_help'] = 'Se marcado, o chat do youtube associado será mostrado próximo à área do vídeo';
$string['presence_unregistered'] = 'Sua presença não estã sendo registrada. Tente sair da palestra e entrar novamente.';
$string['grade_participation_task'] = 'Pontua a participação na palestra';
$string['out_of_date_alert'] = 'Sua presença não está sendo computada porque a atividade já terminou. Você pode continuar assistindo ao conteúdo.';
$string['gradeafter'] = 'Pontuar após o término da palestra';
$string['gradeafter_help'] = 'Continua pontuando a participação mesmo após o término da transmissão da palestra.';
$string['presence_report_title'] = 'Relatório de presença em {$a->name}';
$string['start'] = 'Início';
$string['last_signal'] = 'Último sinal de vida';
$string['stay_time'] = 'Tempo de permanência (minutos)';
$string['total_row'] = 'Total para {$a->name}: Permanência de {$a->stay} minutos, {$a->grade} pontos alcançados.';
$string['view_presences'] = 'Visualizar usuários presentes';
$string['presence_list_title'] = 'Lista de usuários presentes';
$string['presence_total'] = '{$a} usuários presentes';