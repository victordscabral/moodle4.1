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
 * Strings for component 'debug', language 'pt_br', version '4.1'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Plugin de autenticação {$a} não encontrado.';
$string['blocknotexist'] = 'Bloco {$a} não existe';
$string['cannotbenull'] = '{$a} não pode ser nulo!';
$string['cannotdowngrade'] = 'Não pode voltar {$a->plugin} da versão {$a->oldversion} para a versão {$a->newversion}.';
$string['cannotfindadmin'] = 'Não foi possível encontrar um usuário admin!';
$string['cannotinitpage'] = 'Não foi possível inciar por completo a página: inválido {$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a} tabelas NÃO puderam ser configuradas com sucesso!';
$string['codingerror'] = 'Erro de codificação detectado e deve ser corrigido por um programador: {$a}';
$string['configmoodle'] = 'O Moodle ainda não foi configurado. Primeiro você precisa editar o config.php.';
$string['debuginfo'] = 'Informações de depuração';
$string['erroroccur'] = 'Um erro ocorreu durante este processo';
$string['invalidarraysize'] = 'Tamanho incorreto dos arrays nos parâmetros de {$a}';
$string['invalideventdata'] = 'Foram enviados dados incorretos do evento: {$a}';
$string['invalidparameter'] = 'Valor inválido de parâmetro detectado';
$string['invalidresponse'] = 'Valor inválido de resposta detectado';
$string['line'] = 'Linha';
$string['missingconfigversion'] = 'Tabela config não contém versão. Você não pode continuar.';
$string['modulenotexist'] = 'Módulo {$a} não existe';
$string['morethanonerecordinfetch'] = 'Encontrado mais de um registro no fetch() !';
$string['mustbeoveride'] = 'O método abstrato {$a} deve ser sobrescrito.';
$string['noadminrole'] = 'Nenhum papel de admin pode ser encontrado';
$string['noblocks'] = 'Nenhum bloco instalado!';
$string['nocate'] = 'Nenhuma categoria!';
$string['nomodules'] = 'Nenhum módulo encontrado!!';
$string['nopageclass'] = '{$a} importado, porém nenhuma classe de página foi encontrada';
$string['noreports'] = 'Nenhum relatório acessível';
$string['notables'] = 'Nenhuma tabela!';
$string['outputbuffer'] = 'Buffer de saída';
$string['phpvaroff'] = 'A variável PHP do servidor \'{$a->name}\' deve estar desativada (Off) - {$a->link}';
$string['phpvaron'] = 'A variável PHP do servidor \'{$a->name}\' deve estar ativada (On) - {$a->link}';
$string['reactive_highlightoff'] = 'Destaque DESLIGADO';
$string['reactive_highlighton'] = 'Destaque LIGADO';
$string['reactive_pin'] = 'Fixar';
$string['reactive_readmodeoff'] = 'Modo de leitura DESLIGADO';
$string['reactive_readmodeon'] = 'Modo de leitura LIGADO';
$string['reactive_resetpanel'] = 'Reconfigurar painel';
$string['reactive_unpin'] = 'Liberar';
$string['sessionmissing'] = 'Objeto {$a} não está presente na sessão';
$string['sqlrelyonobsoletetable'] = 'Esta consulta SQL faz referência em tabela(s) obsoleta(s) : {$a}! Seu código deve ser corrigido por um desenvolvedor.';
$string['stacktrace'] = 'Rastreamento de pilha';
$string['withoutversion'] = 'O arquivo version.php principal não foi encontrado, não tem permissão de leitura ou está corrompido.';
$string['xmlizeunavailable'] = 'Função xmlize não está disponível';
