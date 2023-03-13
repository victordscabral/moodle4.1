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
 * Strings for component 'antivirus', language 'pt_br', version '4.1'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Plugins de antivírus disponíveis';
$string['antiviruscommonsettings'] = 'Configurações comuns de antivírus';
$string['antiviruses'] = 'Plugins de antivírus';
$string['antivirussettings'] = 'Gerenciar plugins de antivírus';
$string['configantivirusplugins'] = 'Por favor, escolha o plugins de antivírus que você deseja usar e ordene-os na sequência que serão aplicados.';
$string['dataerrordesc'] = 'Ocorreu um erro de varredura de dados';
$string['dataerrorname'] = 'Erro de varredura de dados';
$string['datainfecteddesc'] = 'Dados infectados foram detectados.';
$string['datainfectedname'] = 'Dados infectados';
$string['datastream'] = 'Data';
$string['emailadditionalinfo'] = 'Detalhes adicionais retornados pelo mecanismo de vírus:';
$string['emailauthor'] = 'Enviado por:';
$string['emailcontenthash'] = 'Hash do conteúdo';
$string['emailcontenttype'] = 'Tipo do conteúdo';
$string['emaildate'] = 'Data de envio:';
$string['emailfilename'] = 'Nome do arquivo:';
$string['emailfilesize'] = 'Tamanho do arquivo:';
$string['emailgeoinfo'] = 'Geolocalização';
$string['emailinfectedfiledetected'] = 'Arquivo infectado detectado';
$string['emailipaddress'] = 'Endereço IP:';
$string['emailreferer'] = 'Referente:';
$string['emailreport'] = 'Relatório:';
$string['emailscanner'] = 'Escanear:';
$string['emailscannererrordetected'] = 'Ocorreu um erro na varredura';
$string['emailsubject'] = '{$a} ::  aviso Clam AV';
$string['enablequarantine'] = 'Habilitar quarentena';
$string['enablequarantine_help'] = 'Se habilitado, todos os arquivos detectados como vírus serão colocados em uma pasta de quarentena ([dataroot]/{$a}) para inspeção posterior. O envio para o Moodle irá falhar. Se houver alguma verificação de vírus em nível de sistema de arquivos, a pasta de quarentena deve ser excluída da verificação do antivírus para evitar a detecção dos arquivos em quarentena.';
$string['fileerrordesc'] = 'Ocorreu um erro de varredura de arquivo.';
$string['fileerrorname'] = 'Erro ao scanner arquivo';
$string['fileinfecteddesc'] = 'Um arquivo infectado foi detectado.';
$string['fileinfectedname'] = 'Arquivo infectado';
$string['notifyemail'] = 'Email de notificação de alerta de antivírus';
$string['notifyemail_help'] = 'O endereço de e-mail para notificações de quando um vírus é detectado. Se deixado em branco, todos os administradores do site receberão notificações.';
$string['notifylevel'] = 'Nível de Notificação';
$string['notifylevel_help'] = 'Os diferentes níveis de informação sobre os quais você deseja ser notificado';
$string['notifylevelerror'] = 'Ameaças detectadas e erros de varredura';
$string['notifylevelfound'] = 'Somente ameaças detectadas';
$string['privacy:metadata'] = 'O sistema antivírus não armazena nenhum dado pessoal.';
$string['quarantinedfiles'] = 'Arquivos de quarentena do antivírus';
$string['quarantinedisabled'] = 'A quarentena está desabilitada. O arquivo não está armazenado.';
$string['quarantinetime'] = 'Tempo máximo de quarentena';
$string['quarantinetime_desc'] = 'Os arquivos em quarentena anteriores ao período especificado serão removidos.';
$string['taskcleanup'] = 'Limpar os arquivos em quarentena.';
$string['threshold'] = 'Limite para verificar status';
$string['threshold_desc'] = 'Até quanto tempo atrás verificar resultados anteriores por erros etc. como reportado em {$a}.';
$string['unknown'] = 'Desconhecido';
$string['virusfound'] = '{$a->item} foi analisado por um verificador de vírus e considerado infectado!';
