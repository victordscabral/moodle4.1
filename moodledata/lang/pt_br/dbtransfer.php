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
 * Strings for component 'dbtransfer', language 'pt_br', version '4.1'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Verificar a estrutura da tabela fonte';
$string['copyingtable'] = 'Copiando a tabela {$a}';
$string['copyingtables'] = 'Copiando o conteúdo da tabela';
$string['creatingtargettables'] = 'Criando as tabelas no banco de dados alvo';
$string['dbexport'] = 'Exportação de banco de dados';
$string['dbtransfer'] = 'Transferência de banco de dados';
$string['differenttableexception'] = 'A estrutura da tabela {$a} não confere.';
$string['done'] = 'Terminado';
$string['exportschemaexception'] = 'Estrutura de banco de dados atual não corresponde a todos os arquivos install.xml. <br /> {$a}';
$string['importschemaexception'] = 'Estrutura de banco de dados atual não corresponde a todos os arquivos install.xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'A versão atual {$a->currentver} não corresponde a versão exportada {$a->schemaver}.';
$string['malformedxmlexception'] = 'Foi encontrado XML mal formado, não é possível continuar.';
$string['tablex'] = 'Tabela {$a}:';
$string['unknowntableexception'] = 'Tabela desconhecida {$a} encontrada no arquivo de exportação.';
