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
 * Strings for component 'tool_langimport', language 'pt_br', version '4.1'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Não foi possível conectar-se ao servidor de download para instalar ou atualizar os pacotes de idiomas automaticamente. Faça o download dos arquivos ZIP correspondentes de <a href="{$a->src} ">{$a->src}</a> e descompacte-os manualmente em seu diretório de dados <code> {$a->dest}</ code>';
$string['install'] = 'Instalar o pacote(s) de idioma(s) selecionado(s)';
$string['installedlangs'] = 'Pacotes de Idioma instalados';
$string['installfailed'] = 'A instalação dos pacotes de idiomas falhou!';
$string['installfinished'] = 'Instalação dos pacotes de idiomas finalizada!';
$string['installpending'] = 'Os pacotes de idioma a seguir serão instalados em breve: {$a}.';
$string['installscheduled'] = 'Pacotes de idiomas agendas para instalação.';
$string['langimport'] = 'Importação de idioma';
$string['langimportdisabled'] = 'A funcionalidade de importação de idiomas foi desabilitada. Você deve atualizar manualmente seus pacotes de idioma no nível do sistema de arquivos.
Não se esqueça de limpar caches depois de fazê-lo.';
$string['langpackinstalled'] = 'O pacote de idioma "{$a}" foi instalado com sucesso.';
$string['langpackinstalledevent'] = 'Pacote de idioma instalado';
$string['langpacknotremoved'] = 'Ocorreu um erro, o pacote de idioma \'{$a}\' não foi completamente desinstalado, por favor verifique as permissões do arquivo do pacote de idioma';
$string['langpackremoved'] = 'Pacote de idioma \'{$a}\' foi desinstalado';
$string['langpackremovedevent'] = 'Pacote de idioma desinstalado';
$string['langpackupdated'] = 'Pacote de idioma \'{$a}\' foi atualizado com sucesso';
$string['langpackupdatedevent'] = 'Pacote de idioma atualizado';
$string['langpackupdateskipped'] = 'Atualização do pacote de idioma "{$a}" foi ignorada';
$string['langpackuptodate'] = 'Pacote de idioma "{$a}" está atualizado';
$string['langunsupported'] = '<p>Parece que seu servidor não suporta totalmente os seguintes idiomas:</p> <ul>{$a->missinglocales}</ul><p>Por isso, o código do idioma global ({$a->globallocale}) será usado para formatar certas strings, como datas ou números.</p>';
$string['langupdatecomplete'] = 'Atualização de idioma terminada';
$string['missingcfglangotherroot'] = 'Valor de configuração ausente $CFG->langotherroot';
$string['missinglangparent'] = 'Faltando o idioma principal <em>{$a->parent}</em> de <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'O pacote de idioma inglês não pode ser desinstalado.';
$string['nolangupdateneeded'] = 'Todos os seus pacotes de idioma estão atualizados.';
$string['pluginname'] = 'Pacotes de idiomas';
$string['privacy:metadata'] = 'O plugin Pacotes de idiomas não armazena nenhum dado pessoal.';
$string['purgestringcaches'] = 'Limpar cache de strings';
$string['search'] = 'Buscar pacotes de idiomas disponíveis';
$string['selectlangs'] = 'Selecione os idiomas para desinstalar';
$string['uninstall'] = 'Desinstalar pacotes de idiomas selecionados';
$string['uninstallconfirm'] = 'Você está prestes a desinstalar completamente o idioma <strong>{$a}</strong>, você tem certeza?';
$string['updatelangs'] = 'Atualizar todos os pacotes de idioma instalados';
$string['updatelangsnote'] = 'A atualização de todos os pacotes de idiomas instalados clicando no botão pode levar muito tempo. Recomenda-se usar a tarefa agendada \'{$a->taskname}\' (que é executada por padrão todos os dias).';
