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
 * Strings for component 'jclic', language 'pt_br', version '4.1'.
 *
 * @package     jclic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activity'] = 'Atividade';
$string['activitydone'] = 'Atividades realizadas';
$string['activitysolved'] = 'Atividades concluídas com sucesso';
$string['attempts'] = 'Tentativas';
$string['availabledate'] = 'Disponível de';
$string['avaluation'] = 'Critério de avaliação';
$string['avaluation_score'] = 'Atingindo esta pontuação global';
$string['avaluation_solved'] = 'Resolvendo este número de diferentes atividades';
$string['closebeforeopen'] = 'Não foi possível atualizar o Jclic. Você especificou uma data de vencimento anterior à data disponível.';
$string['contentheader'] = 'Conteúdo';
$string['deleteallsessions'] = 'Excluir todas as sessões';
$string['description'] = 'Descrição';
$string['duedate'] = 'Data de vencimento';
$string['event_course_module_viewed'] = 'Módulo do curso visualizado';
$string['event_instances_list_viewed'] = 'Lista de instâncias visualizada';
$string['exiturl'] = 'URL de saída';
$string['exiturl_help'] = 'Este é o URL que aparece quando os estudantes terminam a última atividade JClic.

Para fazer funcionar este redirecionamento é necessário associar a última atividade da aba Sequências à ação "Sair do JClic" na Seta para seção seguinte.';
$string['expired'] = 'Desculpe, esta atividade foi encerrada em {$a} e não está mais disponível';
$string['filetype'] = 'Tipo';
$string['filetype_help'] = 'Esta configuração determina como a atividade JClic é incluída no curso. Existem até 2 opções:

* JClic carregado - permite que um pacote JClic válido seja escolhido pelo seletor de arquivos.
* URL externo - permite que um URL seja especificado. Observação: o URL deve começar com http (s) ou www e conter um arquivo JClic válido.';
$string['filetypeexternal'] = 'URL externa';
$string['filetypelocal'] = 'JClic carregado';
$string['height'] = 'Altura';
$string['invalidjclicfile'] = 'JClic inválido especificado. Deve ter a extensão ".jclic".';
$string['invalidurl'] = 'URL inválido especificado. Deve começar com http(s) e deve ser um arquivo JClic válido.';
$string['jclic'] = 'JClic';
$string['jclic:addinstance'] = 'Adicionar JClic';
$string['jclic:grade'] = 'Nota JClic';
$string['jclic:submit'] = 'Enviar JClic';
$string['jclic:view'] = 'Visualizar JClic';
$string['jclicfile'] = 'Arquivo JClic';
$string['jclicfile_help'] = 'O arquivo .jclic contendo os arquivos JClic';
$string['jclicjarbase'] = 'base jar';
$string['jclicjarbase_help'] = 'Endereço da web onde localizar todos os arquivos JClic jar';
$string['jclicjs'] = 'URL do arquivo jclic.js';
$string['jclicjs_help'] = 'URL onde encontrar o jclic.js necessário para o player não Java.';
$string['jclicurl'] = 'URL';
$string['jclicurl_help'] = 'Essa configuração permite que um URL para o pacote JClic seja especificado, em vez de escolher um arquivo por meio do seletor de arquivos.';
$string['lang'] = 'Língua';
$string['lap'] = 'Intervalo';
$string['lap_help'] = 'Tempo entre as transações cliente-servidor (em segundos)';
$string['lastaccess'] = 'Último acesso';
$string['maxattempts'] = 'Número máximo de tentativas';
$string['maxgrade'] = 'Pontuação / atividades que devem ser alcançadas';
$string['modulename'] = 'JClic';
$string['modulename_help'] = '<a href="https://clic.xtec.cat" target="_blank">JClic</a> é um projeto do Ministério da Educação da Catalunha.
    É constituído por um conjunto de aplicações de software livre que permitem a criação de vários tipos de atividades educacionais multimídia: quebra-cabeças, jogos de associação, atividades de texto, palavras cruzadas, jogos de pesquisa de palavras e muito mais.
    Além disso, o <a href="https://clic.xtec.cat/db/listact_ca.jsp" target="_blank">ClicZone</a> oferece um repositório onde são mostradas mais de mil atividades.
    Foi criado por professores e outros profissionais que desejam compartilhar seu trabalho com outras pessoas.

Este módulo permite que os professores adicionem atividades JClic a qualquer curso e acompanhem os resultados dos estudantes (tempo gasto em cada uma das atividades,';
$string['modulenameplural'] = 'JClic';
$string['msg_noattempts'] = 'Você tentou esta atividade o número máximo de vezes';
$string['msg_nosessions'] = 'Esta atividade JClic ainda não tem nenhuma sessão';
$string['notopenyet'] = 'Desculpe, esta atividade não está disponível até {$a}';
$string['pluginadministration'] = 'Administração JClic';
$string['pluginjs'] = 'URL do arquivo plugin js do JClic';
$string['pluginjs_help'] = 'URL onde encontrar o jclicplugin.js necessário para funcionar. Se estiver vazio, ele usará o arquivo no módulo.';
$string['pluginname'] = 'JClic';
$string['preview_jclic'] = 'Pré-visualizar a atividade JClic';
$string['report_details'] = 'Resultados detalhados com todas as sessões';
$string['report_normal'] = 'Resultados resumidos';
$string['results'] = 'Resultados';
$string['return_results'] = 'Voltar aos resultados';
$string['score'] = 'Pontuação';
$string['sessions'] = 'Sessões';
$string['show_my_results'] = 'Mostrar meus resultados';
$string['size'] = 'Tamanho';
$string['skin'] = 'visual';
$string['solved'] = 'Correto';
$string['solveddone'] = 'Atividades resolvidas/realizadas';
$string['starttime'] = 'Data de início';
$string['time'] = 'Tempo';
$string['timing'] = 'Cronometragem';
$string['totals'] = 'Totais';
$string['totaltime'] = 'Tempo total';
$string['unlimited'] = 'Ilimitado';
$string['url'] = 'URL';
$string['urledit'] = 'Arquivo de atividade JClic';
$string['urledit_help'] = 'O arquivo "jclic.zip" onde você encontrará o pacote de atividades JClic.';
$string['width'] = 'Largura';
