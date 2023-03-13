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
 * Strings for component 'cachestore_file', language 'pt_br', version '4.1'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Limpar diretório de forma assíncrona';
$string['asyncpurge_help'] = 'Se habilitado, o novo diretório é criado com a revisão do cache e o diretório antigo será excluído de forma assíncrona por meio de uma tarefa agendada.';
$string['autocreate'] = 'Criação automática de diretório';
$string['autocreate_help'] = 'Se ativo, o diretório especificado será automaticamente criado se não ainda não existir.';
$string['lockwait'] = 'Tempo máximo de espera de bloqueio';
$string['lockwait_help'] = 'A quantidade máxima de tempo em segundos para aguardar um bloqueio exclusivo antes de ler ou gravar uma chave de cache. Isso é usado apenas para definições de cache que requerem bloqueio de leitura ou gravação.';
$string['path'] = 'Caminho do Cache';
$string['path_help'] = 'O diretório que deve ser usado para guardar arquivos para este depósito de cache. Se deixado em branco (padrão) um diretório será automaticamente criado no diretório moodledata. Isso pode ser usado para apontar um depósito de arquivos para um diretório com um drive de maior desempenho (como um em memória).';
$string['pluginname'] = 'Cache em arquivo (filesystem)';
$string['prescan'] = 'Diretório Prescan';
$string['prescan_help'] = 'Se habilitado, o diretório será escaneado quando o cache for usado pela primeira vez e as requisições por arquivos serão vistos primeiramente contra os dados escaneados. Isso ajuda se você tem um sistema de arquivos lento e acha que as operações com arquivos são o seu gargalo.';
$string['privacy:metadata'] = 'O plugin File cache cachestore armazena dados recentes como parte de sua funcionalidade de cache, mas esses dados são limpos regularmente.';
$string['singledirectory'] = 'Armazenamento de diretório único';
$string['singledirectory_help'] = 'Se arquivos habilitados (itens que foram para o cache) serão guardados em um único diretório, ao invés de serem fragmentados em múltiplos diretórios.

Habilitar isso irá aumentar a velocidade de interações com arquivos mas implicará no risco de atingir as limitações do sistema de arquivos.

É aconselhável que somente seja habilitado isso se o seguinte for verdadeiro:

* Se você souber que o número de itens que estão no cache será pequeno o bastante que não causará problemas no sistema de arquivos que você está usando.
* Os dados que estão indo para o cache não são "caros" para serem gerados.  Se forem, então manter o padrão deve ser a melhor opção, uma vez que reduz a chance de problemas.';
$string['task_asyncpurge'] = 'Limpar de forma assíncrona os diretórios de revisão de cache antigos do armazenamento de arquivos';
