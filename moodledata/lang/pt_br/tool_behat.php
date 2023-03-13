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
 * Strings for component 'tool_behat', language 'pt_br', version '4.1'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta ferramenta de administração ajuda os desenvolvedores e escritores de teste a criar arquivos .feature que descrevem as funcionalidades do Moodle e executá-los automaticamente. Os passos das definições disponíveis para utilização de arquivos .feature estão listados abaixo';
$string['allavailablesteps'] = 'Todas as definições de etapas disponíveis';
$string['errorbehatcommand'] = 'Erro ao executar comando behat CLI. Tente executar "{$a} --help" manualmente a partir do CLI para saber mais sobre o problema.';
$string['errorcomposer'] = 'Dependências do compositor não estão instaladas.';
$string['errordataroot'] = '$CFG->behat_dataroot não está definido ou é inválido.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot precisa ser definido no config.php.';
$string['erroruniqueconfig'] = 'Os valores de $CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot precisam ser diferentes dos valores de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot e $CFG- >phpunit_prefix.<br/>Ou, se $CFG->behat_prefix for o mesmo, $CFG->behat_dbname ou $CFG->behat_dbhost precisam ser diferentes de $CFG->phpunit_dbname e $CFG->phpunit_dbhost e de $CFG->dbname e $ CFG->dbhost.';
$string['fieldvalueargument'] = 'Argumentos do campo valor';
$string['fieldvalueargument_help'] = 'Este argumento deve ser preenchido por um valor de campo. Existem muitos tipos de campo, incluindo os mais simples como caixas de seleção, menu suspensos ou áreas de texto ou mais complexos, como seletores de data. Consulte a documentação de desenvolvedor <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Teste de aceitação</a> para ver detalhes dos valores esperados do tipo de campo.';
$string['giveninfo'] = 'Dado. Processos para configurar o ambiente';
$string['infoheading'] = 'Informações';
$string['installinfo'] = 'Leia {$a} para instalação e testes Informações execução';
$string['newstepsinfo'] = 'Leia {$a} para informações sobre como adicionar novas definições de etapas';
$string['newtestsinfo'] = 'Leia {$a} para informações sobre como escrever novos testes';
$string['nostepsdefinitions'] = 'Não existem definições de etapas correspondentes a este filtro';
$string['pluginname'] = 'Testes de aceitação';
$string['privacy:metadata'] = 'O plugin de teste de aceitação não armazena nenhum dado pessoal.';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contém';
$string['stepsdefinitionsfilters'] = 'Definições de Etapa';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Então. Verificações para garantir que os resultados são os esperados';
$string['unknownexceptioninfo'] = 'Houve um problema com Selenium ou com seu navegador. Certifique-se de que você está usando a última versão do Selenium. Erro:';
$string['viewsteps'] = 'Filtrar';
$string['warndirrootconfigfound'] = 'Um arquivo de configuração foi encontrado em {$a}. Este arquivo não é atualizado automaticamente e pode se tornar obsoleto. Recomendamos remover este arquivo.';
$string['wheninfo'] = 'Quando. Ação que provoca um evento';
$string['wrongbehatsetup'] = 'Algo está errado com a configuração do behat e as configurações de passos não podem ser listados: <b>{$a->errormsg}</b><br/><br/>Por favor verifique:
<ul>
  <li>$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot definidos em config.php com valores diferentes de $CFG->dataroot, $CFG->prefix e $CFG->wwwroot.</li>
<li>Você executou "{$a->behatinit}" no diretório raiz do Moodle.</li>
<li>As dependências estão instaladas em vendor/ e o arquivo {$a->behatcommand} tem permissões de execução.</li></ul>';
