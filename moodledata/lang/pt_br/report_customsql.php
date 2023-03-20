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
 * Strings for component 'report_customsql', language 'pt_br', version '4.1'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Adicionar uma nova categoria';
$string['addcategorydesc'] = 'Para alterar a categoria de um relatório, você deve editar o relatório. Aqui você pode editar textos de categoria, excluir uma categoria ou adicionar uma nova categoria.';
$string['addreport'] = 'Adicionar uma nova consulta';
$string['addreportcategory'] = 'Adicionar uma nova categoria para os relatórios';
$string['anyonewhocanveiwthisreport'] = 'Qualquer um que possa ver este relatório (report/customsql:view)';
$string['archivedversions'] = 'Versões arquivadas desta consulta';
$string['at'] = 'em';
$string['automaticallymonthly'] = 'Programado, no primeiro dia de cada mês';
$string['automaticallyweekly'] = 'Programado, no primeiro dia de cada semana';
$string['availablereports'] = 'Consultas sob demanda';
$string['availableto'] = 'Disponível para {$a}.';
$string['backtoreportlist'] = 'Voltar à lista de consultas';
$string['categoryexists'] = 'Os nomes de categorias deve ser único, este nome já existe';
$string['categorynamex'] = 'Nome da categoria: {$a}';
$string['changetheparameters'] = 'Alterar os parâmetros';
$string['customsql:definequeries'] = 'Definir consultas personalizadas';
$string['customsql:managecategories'] = 'Definir categorias personalizadas';
$string['customsql:view'] = 'Visualizar relatório de consulta personalizada';
$string['dailyheader'] = 'Diariamente';
$string['defaultcategory'] = 'Diversos';
$string['delete'] = 'Excluir';
$string['deleteareyousure'] = 'Tem certeza de que deseja excluir esta consulta?';
$string['deletecategoryareyousure'] = '<p> Tem certeza de que deseja apagar esta categoria? </p><p> Ela não pode conter quaisquer consultas. </p>';
$string['deletecategoryx'] = 'Excluir categoria \'{$a}\'';
$string['deletecategoryyesno'] = '<p> Você tem certeza que deseja apagar esta categoria? </p>';
$string['deletereportx'] = 'Excluir consulta \'{$a}\'';
$string['description'] = 'Descrição';
$string['displayname'] = 'Nome de consulta';
$string['displaynamerequired'] = 'Você deve digitar um nome de consulta';
$string['displaynamex'] = 'Nome da consulta: {$a}';
$string['downloadthisreportascsv'] = 'Baixe estes resultados como CSV';
$string['edit'] = 'Adicionar/Editar';
$string['editcategory'] = 'Atualizar categoria';
$string['editcategoryx'] = 'Editar categoria \'{$a}\'';
$string['editingareport'] = 'Edição de uma consulta de banco de dados ad-hoc';
$string['editreportx'] = 'Editar consulta \'{$a}\'';
$string['emailbody'] = 'Caro {$a}';
$string['emailink'] = 'Para acessar o relatório, clique neste link: {$a}';
$string['emailnumberofrows'] = 'Apenas o número de linhas e o link';
$string['emailresults'] = 'Coloque os resultados no corpo do email';
$string['emailrow'] = 'O relatório retornou {$a} linha';
$string['emailrows'] = 'O relatório retornou {$a} linhas';
$string['emailsent'] = 'Uma notificação de e-mail foi enviado para {$a}';
$string['emailsentfailed'] = 'E-mail não pode ser enviado para {$a}';
$string['emailsubject'] = 'Consulta {$a}';
$string['emailto'] = 'Enviar e-mail automaticamente para';
$string['emailwhat'] = 'O que enviar por email';
$string['enterparameters'] = 'Digite parâmetros para consulta de banco de dados ad-hoc';
$string['errordeletingcategory'] = '<p> Erro ao excluir uma categoria de consulta. </p><p> Ela deve estar vazia para excluí-la. </p>';
$string['errordeletingreport'] = 'Erro ao excluir uma consulta.';
$string['errorinsertingreport'] = 'Erro ao inserir uma consulta.';
$string['errorupdatingreport'] = 'Erro ao atualizar uma consulta.';
$string['invalidreportid'] = 'ID de consulta inválido {$a}';
$string['lastexecuted'] = 'Esta consulta foi executada pela última vez em {$a->lastrun}. Demorou {$a->lastexecutiontime}s para ser executada.';
$string['managecategories'] = 'Gerenciar categorias de relatório';
$string['manual'] = 'Sob demanda';
$string['manualheader'] = 'Sob demanda';
$string['messageprovider:notification'] = 'Notificações e alertas de relatórios SQL personalizado';
$string['monthlyheader'] = 'Mensal';
$string['morethanonerowreturned'] = 'Mais do que uma linha foi retornada. Esta consulta deve retornar uma linha.';
$string['nodatareturned'] = 'Esta consulta não retornou nenhum dado.';
$string['noexplicitprefix'] = 'Por favor, para incluir o nome da tabela <tt>{$a}</tt> prefixo no SQL. Em vez disso, colocar o nome da tabela como prefixo-un dentro <tt>{}</tt> caracteres.';
$string['noreportsavailable'] = 'Não há consultas disponíveis';
$string['norowsreturned'] = 'Nenhuma linha foi retornado. Esta consulta deve retornar uma linha.';
$string['noscheduleifplaceholders'] = 'Consultas contendo marcadores de posição só pode ser executado sob demanda.';
$string['nosemicolon'] = 'Não é permitido utilizar o caractere ; na consulta SQL';
$string['notallowedwords'] = 'Você não tem permissão para usar as palavras <tt>{$a}</tt> no SQL.';
$string['note'] = 'Notas';
$string['notrunyet'] = 'Esta consulta ainda não foi executado.';
$string['onerow'] = 'A consulta retorna uma linha, acumular os resultados uma linha de cada vez';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Consultas Ad-hoc à base de dados';
$string['query_deleted'] = 'Consulta excluída';
$string['query_edited'] = 'Consulta Editada';
$string['query_viewed'] = 'Consulta Visualizada';
$string['queryfailed'] = 'Erro ao executar a consulta: {$a}';
$string['querylimit'] = 'Limitar linhas devolvidas';
$string['querylimitrange'] = 'O número deve estar entre 1 e {$a}';
$string['querynote'] = '<ul>
<li>O token <code>%%WWWROOT%%</code> nos resultados será substituído por <code>{$a}</code>.</li>
<li>Qualquer valor na saída que se pareça com um URL será automaticamente transformado em um link.</li>
<li>Se os resultados da sua consulta tiverem duas colunas <code><i>nome_coluna</i></code> e <code><i>nome_coluna </i>_link_url</code>, a saída do relatório resultante terá um coluna única contendo um link com a primeira coluna como texto do link e a segunda como URL. </li>
<li>Se um nome de coluna nos resultados terminar com os caracteres de <code>data</code> e a coluna tiver valores inteiros, eles serão tratados como timestamp Unix e automaticamente convertidos em datas legíveis por humanos.</li>
<li>O token <code>%%USERID%%</code> na consulta será substituído pelo id do usuário que visualiza o relatório, antes que o relatório seja executado.</li>
<li>Para relatórios programados, os tokens <code %% STARTTIME%%</code> e <code>%%ENDTIME%%</code> são substituídos pelo timestamp Unix no início e no final da semana do relatório/mês na consulta antes de ser executada.</li>
<li>Você pode colocar parâmetros no SQL usando marcadores de posição nomeados, por exemplo <code>:nome_do_parâmetro </code>. Então, quando o relatório é executado, o usuário pode inserir valores para os parâmetros a serem usados ao executar a consulta.</li>
<li>Se <code>:nome_do_parâmetro</code> começar ou terminar com os caracteres de <code>data</code>, um seletor de data e hora será usado para inserir esse valor, caso contrário, uma caixa de texto simples será usado. </li>
<li>Você não pode usar os caracteres <code>:</code>, <code>;</code> ou <code>?</code> em strings em sua consulta.
<ul>
    <li>Se precisar deles nos dados de saída (como ao enviar URLs), você pode usar os tokens <code>%%C%%</code>, <code>%%S%%</code> e <code>%%Q%%</code> respectivamente.</li>
</ul></li>
</ul>';
$string['queryparameters'] = 'Os parâmetros de consulta';
$string['queryparams'] = 'Por favor insira os valores padrão para os parâmetros de consulta.';
$string['queryparamschanged'] = 'Os espaços reservados na consulta mudaram.';
$string['queryrundate'] = 'data de execução de consulta';
$string['querysql'] = 'Consulta SQL';
$string['querysqlrequried'] = 'Você deve digitar algum SQL.';
$string['recordlimitreached'] = 'Esta consulta atingiu o limite de linhas {$a}. Algumas linhas podem ter sido omitidos a partir do final.';
$string['reportfor'] = 'Consulta executada em {$a}';
$string['requireint'] = 'Inteiro obrigatório';
$string['runable'] = 'Executar';
$string['runablex'] = 'Execute: {$a}';
$string['schedulednote'] = 'Essas consultas são executadas automaticamente no primeiro dia de cada semana ou mês, para informar sobre a semana ou mês anterior. Esses links permitem que você visualize os resultados que já foram acumulados.';
$string['scheduledqueries'] = 'Consultas agendadas';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Arquivo de download desconhecido.';
$string['userhasnothiscapability'] = 'Usuário \'{$a->username} &quot;não tem capacidade&quot; {$a->capability}\'. Por favor, apague este usuário da lista ou mudar a escolha em \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Entrada inválida, é necessária uma lista de nomes de usuários separados por vírgula';
$string['usernotfound'] = 'Do usuário com o nome de usuário \'{$a}\' não existe';
$string['userswhocanconfig'] = 'Apenas os administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Os usuários que podem ver os relatórios do sistema (moodle / local: viewreports)';
$string['verifyqueryandupdate'] = 'Verifique o texto da consulta SQL e atualizar o formulário';
$string['weeklyheader'] = 'Semanal';
$string['whocanaccess'] = 'Quem pode acessar esta consulta';
