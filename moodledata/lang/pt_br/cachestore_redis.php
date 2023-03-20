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
 * Strings for component 'cachestore_redis', language 'pt_br', version '4.1'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Sem compactação.';
$string['compressor_php_gzip'] = 'Usar compactação gzip.';
$string['compressor_php_zstd'] = 'Usar compactação Zstandard.';
$string['password'] = 'Senha';
$string['password_help'] = 'Define a senha do servidor Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefixo de chave';
$string['prefix_help'] = 'Este prefixo é usado por todos os nomes de chave no servidor Redis.
* Se você tem só uma instância Moodle no servidor, você pode deixar o valor padrão.
* Devido às restrições de comprimento de chave, é permitido um máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefixo inválido. Você pode usar somente a-z, A-Z, 0-9, _.';
$string['privacy:metadata:redis'] = 'O plugin de armazenamento em cache Redis armazena dados temporariamente como parte de sua funcionalidade de armazenamento em cache. Esses dados são armazenados em um servidor Redis onde os dados são removidos regularmente.';
$string['privacy:metadata:redis:data'] = 'Os diferentes dados armazenados no cache';
$string['serializer_igbinary'] = 'Serializador igbinary.';
$string['serializer_php'] = 'Serializador PHP padrão.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Define o nome ou endereço IP do servidor Redis para uso.';
$string['task_ttl'] = 'Liberar memória usada por entradas expiradas em caches Redis';
$string['test_password'] = 'Teste da senha do servidor';
$string['test_password_desc'] = 'Teste da senha do servidor Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador para uso em testes.';
$string['test_server'] = 'Servidor de testes';
$string['test_server_desc'] = 'Servidor Redis para uso em testes.';
$string['test_ttl'] = 'Testar TTL';
$string['test_ttl_desc'] = 'Executar o teste de desempenho usando um cache que requer TTL (conjuntos mais lentos).';
$string['usecompressor'] = 'Use compactador';
$string['usecompressor_help'] = 'Especifica o compactador a ser usado após a serialização. Isso é feito no nível da API do Moodle Cache, não no nível php-redis.';
$string['useserializer'] = 'Usar serializador';
$string['useserializer_help'] = 'Especifica o serializador a ser usado para serialização.
Os serializadores válidos são Redis::SERIALIZER_PHP ou Redis::SERIALIZER_IGBINARY.
O último é suportado somente quando o phpredis está configurado com a opção --enable-redis-igbinary, e a extensão igbinary está carregada.';
