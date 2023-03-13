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
 * Strings for component 'block_fn_marking', language 'pt_br', version '4.1'.
 *
 * @package     block_fn_marking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptoverride'] = 'Aceitar sobreposição';
$string['adminfrontpage'] = 'Visualização do administrador no Painel';
$string['aggregatetype'] = 'Modo de agregar';
$string['allactivitytypes'] = 'Todos os tipos de atividades';
$string['allcategories'] = 'Todas as categorias';
$string['allcourses'] = 'Todos os cursos';
$string['allcourseswithblock'] = 'Apenas incluir cursos que possuem o bloco Gerenciador de Avaliações';
$string['allgroups'] = 'Todos os grupos';
$string['allparticipants'] = 'Todos os participantes';
$string['assign'] = 'Tarefas';
$string['atmaxresubmission'] = 'Número máximo de reenvios';
$string['blockinfo'] = 'Informações do bloco';
$string['blocksettings'] = 'Configurando um bloco FN Avaliações';
$string['blocksitesettings'] = 'Configurações de site do bloco';
$string['blocktitle'] = 'Gerenciador de Avaliações';
$string['cfgdisplaytitle'] = 'Título de exibição';
$string['checkagain'] = 'Checar novamente';
$string['close'] = 'Fechar';
$string['config_days'] = 'Define o número de estudantes sem login por X dias';
$string['config_days_help'] = '<p>Esta configuração permite definir  </p>
<p>o número de dias em que um estudante não entra no curso.</p>';
$string['config_percent'] = 'Define a porcentagem de avaliações';
$string['config_percent_help'] = '<p>Esta configuração permite definir  </p>
<p>a porcentagem de avaliações e depois ver o número de avaliaçõs abaixo de X porcentagem.</p>';
$string['config_sectiontitles'] = 'Títulos de seções';
$string['config_sectiontitles_help'] = '<p>vazio=padrão do curso.</p>';
$string['config_showgradeslink'] = 'Mostrar link da nota';
$string['config_showgradeslink_help'] = '<p>Esta configuração permite definir se mostrar</p>
<p>ou ocultar o link de notas no bloco.</p>';
$string['config_showmarked'] = 'Mostrar atividades avaliadas';
$string['config_showmarked_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar as atividades avaliadas no bloco.</p>';
$string['config_shownotloggedinuser'] = 'Mostrar usuários sem logar';
$string['config_shownotloggedinuser_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar o número de usuários sem logar na semana passada</p>';
$string['config_showreportlink'] = 'Mostrar link do relatório';
$string['config_showreportlink_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar o link do relatório no bloco.</p>';
$string['config_showsaved'] = 'Mostrar rascunho das atividades';
$string['config_showsaved_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou esconder rascunhas das atividades dos estudantes no bloco</p>';
$string['config_showstudentmarkslessthanfiftypercent'] = 'Mostrar estudantes avaliados com menos de 50%';
$string['config_showstudentmarkslessthanfiftypercent_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar o número de estudantes avaliados com menos de 50%.</p>';
$string['config_showstudentnotsubmittedassignment'] = 'Mostrar os estudantes que não enviaram atividades';
$string['config_showstudentnotsubmittedassignment_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar o número de estudantes que não enviaram atividades última semana.</p>';
$string['config_showunmarked'] = 'Mostrar atividades não avaliadas';
$string['config_showunmarked_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar as atividades não avaliadas no bloco.</p>';
$string['config_title'] = 'Título da instância';
$string['config_title_help'] = '<p>Esta configuração permite alterar o título do bloco.</p>
<p>Se o cabeçalho do bloco está oculto, o título não aparecerá.</p>';
$string['config_unsubmitted'] = 'Mostrar atividades não enviadas';
$string['config_unsubmitted_help'] = '<p>Esta configuração permite mostrar</p>
<p>ou ocultar as atividades não enviadas no bloco.</p>';
$string['coursecategories'] = 'Categorias de curso';
$string['coursecategoriesincluded'] = 'Categorias de curso incluídas';
$string['cron'] = 'Tarefa Cron';
$string['descconfig'] = '<p>Ative esta opção para esconder todos os blocos quando visualizando a interface do
Gerenciador de Avaliações e ter uma visualização menos bagunçada. Note que antes de
ativar esta opção, você precisa adicionar este código em
<b><em>seusitemoodle/theme/base/config.php</em>.</b></p>
<p></p>
<pre><code style="font-size:12px; color:#FF7600;">
// Oculta as colunas esquerda e direita quando visualizando o Gerenciador de Avaliações
\'markingmanager\' => array(
      \'file\' => \'general.php\',
      \'regions\' => array(),
      \'options\' => array(\'noblocks\'=>true),
),
</code></pre>
Depois de adicionar o código, seu arquivo deve ficar parecido com o da imagem<a href="http://moodlefn.com/docs/marking_manager_no_blocks.png">mostrada aqui</a>.';
$string['displaytitle'] = 'Atividades enviadas';
$string['editortoggle'] = 'Ativar/desativar editor online';
$string['enrolledcourses'] = 'Cursos que está inscrito';
$string['experimental'] = 'Experimental';
$string['fn_marking:addinstance'] = 'Adicionar instância';
$string['fn_marking:myaddinstance'] = 'Adicionar um novo bloco Gerenciador de Avaliações no Painel';
$string['fn_marking:viewblock'] = 'Ver bloco';
$string['fn_marking:viewreadonly'] = 'Ver modo apenas leitura';
$string['forum'] = 'Fórum';
$string['grade'] = '<b>Nota: </b>';
$string['gradebook'] = 'Livro de notas';
$string['gradeoverridedetected'] = 'Sobreposição de nota detectada';
$string['gradeslink'] = 'Notas';
$string['gradingstudentprogress'] = 'Mostrando {$a->index} de {$a->count}';
$string['headertitle'] = 'Gerenciador de Avaliações';
$string['help'] = 'Ajuda';
$string['hideonlineeditor'] = 'Esconder editor online';
$string['include_orphaned'] = 'Incluir atividades órfãs';
$string['includecourses'] = 'Cursos para incluir';
$string['includehiddencourses'] = 'Incluir cursos ocultos';
$string['keepseparate'] = 'Manter rascunhos de tarefas separados';
$string['labelnoblocks'] = 'Esconder todos os blocos';
$string['lastrefreshrequired'] = 'Última atualização: atualização necessária';
$string['lastrefreshtime'] = 'Última atualização: {$a} atrás';
$string['lastrefreshupdating'] = 'Última atualização: atualizando';
$string['listcourseszeroungraded'] = 'Listar cursos com zero atividades não avaliadas';
$string['manual'] = 'Manual';
$string['manualgrading'] = 'Avaliação manual';
$string['marked'] = 'Avaliado';
$string['markinmanagerscoursecats'] = 'Gerenciador de Avaliações - Categorias de Curso';
$string['markinmanagerscoursecatsdesc'] = 'Seleciona as categorias de curso que serão processadas pelo
bloco Gerenciador de Avaliações no página inicial e no painel do Moodle';
$string['moodledefaultview'] = 'Visualização padrão do Moodle';
$string['moodlegradebook'] = 'Abrir livro de notas do Moodle';
$string['morethan10'] = 'Há mais de 10 cursos com atividades não corrigidas.';
$string['name'] = 'Nome';
$string['no'] = 'Sem';
$string['nograde'] = 'Sem nota';
$string['notloggedin'] = '- sem realizar login há';
$string['notsubmittedany'] = '- sem realizar envios há';
$string['opengradereport'] = 'Abrir relatório de notas';
$string['opensitesettingspage'] = 'Abrir página de configurações do site';
$string['overallfailinggrade'] = '- com nota abaixo de';
$string['pagelayout'] = 'Layout da página';
$string['pageload'] = 'Carregamento da página';
$string['pluginname'] = 'NED Gerenciador de Avaliações';
$string['pluginnametext'] = 'Nome do plugin';
$string['plugintitle'] = 'Gerenciador de Avaliações';
$string['posts'] = 'Posts';
$string['progressreport'] = 'Relatório de Progresso';
$string['quiz'] = 'Questionário';
$string['rating'] = 'Classificação';
$string['refreshmodecourse'] = 'Modo de atualização do bloco - Curso';
$string['refreshmodefrontpage'] = 'Modo de atualização do bloco - Página inicial';
$string['refreshnow'] = 'Atualizar agora';
$string['removeoverride'] = 'Remover sobreposição';
$string['replies'] = 'Respostas';
$string['reportslink'] = 'Relatórios';
$string['save'] = 'Salvar';
$string['saved'] = 'Rascunho';
$string['scale'] = 'Escala';
$string['sectiontitles'] = 'Títulos de seções';
$string['selectcategories'] = 'Selecionar categorias';
$string['selectedcourses'] = 'Selecionar categorias (abaixo)';
$string['setblocktitle'] = 'Definir título do bloco';
$string['setnumberofdays'] = 'Definir número de dias';
$string['setpercentmarks'] = 'Definir porcentagem de avaliações';
$string['show'] = 'Mostrar';
$string['showcourselink'] = 'Link do curso';
$string['showgradebook'] = 'Livro de notas';
$string['showgradeslink'] = 'Relatório de progresso';
$string['showmarked'] = 'Atividades avaliadas';
$string['shownotloggedinuser'] = 'Mostrar usuário não logado';
$string['showonlineeditor'] = 'Mostrar editor online';
$string['showreportslink'] = 'Lista de estudantes';
$string['showsaved'] = 'Mostrar rascunho das atividades';
$string['showstudentmarkslessthanfiftypercent'] = 'Mostrar número de estudantes avaliados com menos do 50%';
$string['showstudentnotsubmittedassignment'] = 'Mostrar número de estudantes que não enviaram atividades';
$string['showtopmessage'] = 'Mostrar mensagem sobre a interface';
$string['showunmarked'] = 'Precisa de avaliação';
$string['showunsubmitted'] = 'Atividades não enviadas';
$string['simplegradebook'] = 'Relatório de progresso';
$string['sort'] = 'Ordenar';
$string['student'] = 'Estudante';
$string['student_have_posted'] = 'Os seguintes estudantes postaram neste fórum:';
$string['studentlist'] = 'Lista de estudantes';
$string['studentssubmission'] = 'Envios de estudantes';
$string['successful'] = 'Com sucesso';
$string['teachersfeedback'] = 'Feedback do professor';
$string['title:failingwithgradelessthanxpercent'] = 'Os seguintes estudantes têm uma nota geral menor que';
$string['title:markslessthanxpercent'] = 'Os seguintes estudantes não enviaram qualquer atividade há';
$string['title:notlogin'] = 'Os seguintes estudantes não logaram há';
$string['title:notsubmittedanyactivity'] = 'Os seguintes estudantes não enviaram qualquer atividades há';
$string['title:saved'] = 'Os seguintes estudantes têm atividades rascunho';
$string['topmessage'] = 'Mensagens para mostrar';
$string['ttmarking'] = 'Interface de Avaliações';
$string['type'] = 'Tipo';
$string['unmarked'] = 'Precisa de avaliação';
$string['unsubmitted'] = 'Não enviaram';
$string['updatecache'] = 'Atualizar cache';
$string['updatecachewarning'] = 'Você gostaria de atualizar o bloco Gerenciador de Avaliações';
$string['version'] = 'Versão';
$string['view'] = 'Ver';
$string['visitpluginhome'] = 'Ver página inicial do plugin';
$string['whocanrate'] = 'Quem pode avaliar';
$string['yes'] = 'Sim';
