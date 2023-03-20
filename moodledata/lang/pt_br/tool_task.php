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
 * Strings for component 'tool_task', language 'pt_br', version '4.1'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'A fila de tarefas ad hoc está vazia';
$string['adhocqueueold'] = 'A tarefa mais antiga é {$a->age}, que é maior que {$a->max}';
$string['adhocqueuesize'] = 'A fila de tarefas ad hoc tem {$a} tarefas';
$string['adhoctaskid'] = 'ID de tarefa ad hoc: {$a}';
$string['adhoctasks'] = 'Tarefas ad hoc';
$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Voltar para tarefas agendadas';
$string['blocking'] = 'Bloqueando';
$string['cannotfindthepathtothecli'] = 'Não é possível encontrar o caminho para o executável da CLI do PHP, então a execução da tarefa foi cancelada. Defina a configuração \'Caminho para PHP CLI\' em Administração do site / Servidor / Caminhos do sistema.';
$string['checkadhocqueue'] = 'Fila de tarefas ad hoc';
$string['checkcronrunning'] = 'Cron rodando';
$string['checkmaxfaildelay'] = 'Atraso máximo de falha de tarefas';
$string['classname'] = 'Nome da classe';
$string['clearfaildelay_confirm'] = 'Tem certeza de que deseja limpar o atraso de falha da tarefa \'{$a}\'? Depois de limpar o atraso, a tarefa será executada de acordo com sua programação normal.';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Núcleo';
$string['crondisabled'] = 'O cron está desabilitado. Nenhum nova tarefa será iniciada. O sistema não irá operar adequadamente até que o cron seja habilitado novamente.';
$string['cronok'] = 'O cron está rodando frequentemente.';
$string['default'] = 'Padrão';
$string['defaultx'] = 'Padrão: {$a}';
$string['disabled'] = 'Desabilitado';
$string['disabled_help'] = 'Tarefas agendadas desabilitadas não são executadas pelo cron, entretanto elas podem ainda ser executadas manualmente pela ferramenta CLI.';
$string['edittaskschedule'] = 'Editar agenda de tarefa: {$a}';
$string['enablerunnow'] = 'Permitir \'Executar agora\' para tarefas agendadas';
$string['enablerunnow_desc'] = 'Permite que os administradores executem uma única tarefa agendada imediatamente, em vez de esperar que ela seja executada conforme agendado. O recurso requer que \'Caminho para o PHP CLI\' (pathtophp) esteja definido nos Caminhos do sistema. A tarefa é executada no servidor da Web, portanto, alguns sites podem desativar esse recurso para evitar possíveis problemas de desempenho.';
$string['faildelay'] = 'Atraso por falha';
$string['fromcomponent'] = 'Do componente: {$a}';
$string['hostname'] = 'Nome do Host';
$string['lastcronstart'] = 'Tempo desde a última execução do cron: {$a}';
$string['lastruntime'] = 'Último período';
$string['lastupdated'] = 'Última atualização em {$a}.';
$string['nextruntime'] = 'Próximo período';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin desabilitado';
$string['pluginname'] = 'Configuração de tarefa agendada';
$string['privacy:metadata'] = 'O plugin de Configuração de tarefas agendadas não armazena nenhum dado pessoal.';
$string['resettasktodefaults'] = 'Redefinir a agenda da tarefa para o padrão';
$string['resettasktodefaults_help'] = 'Isto irá descartar as alterações locais e reverter a agenda para esta tarefa de volta para as configurações originais.';
$string['runagain'] = 'Executar novamente';
$string['runningtasks'] = 'Tarefas executando agora';
$string['runnow'] = 'Executar agora';
$string['runnow_confirm'] = 'Tem certeza de que deseja executar esta tarefa \'{$a}\' agora? A tarefa será executada no servidor web e pode levar algum tempo para ser concluída.';
$string['runpattern'] = 'Executar padrão';
$string['scheduled'] = 'Agendado';
$string['scheduledtaskchangesdisabled'] = 'As alterações na lista de tarefas agendadas tem sido impedidas na configuração do Moodle';
$string['scheduledtasks'] = 'Tarefas agendadas';
$string['started'] = 'Iniciada';
$string['taskdisabled'] = 'Tarefa desabilitada';
$string['taskfailures'] = '{$a} tarefa(s) falhando';
$string['tasklogs'] = 'Logs de tarefas';
$string['tasknofailures'] = 'Não há tarefas com falha';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Campo Dia do mês para agendamento de tarefas. O campo usa o mesmo formato queo unix cron. Alguns exemplos são:

* <strong>*</strong> Todos os dias
* <strong>*/2</strong> Cada 2 dias
* <strong>1</strong> O primeiro de cada mês
* <strong>1,15</strong> O primeiro e o décimo quinto dia de cada mês';
$string['taskscheduledayofweek'] = 'Dia da semana';
$string['taskscheduledayofweek_help'] = 'Campo Dia da Semana para agenda de tarefas. O campo usa o mesmo formato do cron do unix. Alguns exemplos são:

*<strong>*</strong> Todos os dias
*<strong>0</strong> Todos os domingos
*<strong>6</strong> Todo sábado
*<strong>1,5</strong> Toda segunda-feira e sexta-feira';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo Hora para agendamento da tarefa. O campo usa o mesmo formato do cron do unix. Alguns exemplos são:

*<strong>*</strong> A cada hora
*<strong>*/2</strong> A cada 2 horas
*<strong>2-10</strong> A cada hora de 02:00h às 10:00h (inclusive)
*<strong>2,6,9</strong> 02:00h, 06:00h e 09:00h';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo Minuto para agendamento de tarefas.  O campo usa o mesmo formato do cron do unix. Alguns exemplos são:

*<strong>*</strong> A cada minuto
*<strong>*/5</strong> A cada 5 minutos
*<strong>2-10</strong> A cada minuto entre 2 e 10 após a hora (inclusive)
*<strong>2,6,9</strong> 2, 6 e 9 minutos após a hora';
$string['taskschedulemonth'] = 'Mês';
$string['taskschedulemonth_help'] = 'Campo Mês para agendamento de tarefas.  O campo usa o mesmo formato do cron do unix. Alguns exemplos são:
*<strong>*</strong> Todo mês
*<strong>*/2</strong> De 2 em 2 meses
*<strong>1</strong> Todo mês de janeiro
*<strong>1,5</strong> Todo mês de janeiro e maio';
$string['viewlogs'] = 'Ver logs para {$a}';
