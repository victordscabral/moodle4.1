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
 * Strings for component 'vpl', language 'pt_br', version '4.1'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'Houve falha na compilação ou preparação da execução';
$string['about'] = 'Sobre';
$string['acceptcertificates'] = 'Aceitar certificados auto-assinados';
$string['acceptcertificates_description'] = 'Se os servidores de execução não estiverem usando certificados auto-assinados, desarque essa opção';
$string['acceptcertificatesnote'] = '<p>Você está usando uma conexão criptografada.<p/>
<p>Para usar uma conexão criptografada com os servidores de execução, é necessário que você aceite seus certificados.</p>
<p>Se você tiver problemas com este processo, tente usar uma conexão http (não criptografada) ou outro navegador.</p>
<p>Por favor, clique nos seguintes links (servidor #) e aceite o certificado oferecido.</p>';
$string['addfile'] = 'Adicionar arquivo';
$string['advanced'] = 'Avançado';
$string['allfiles'] = 'Todos os arquivos';
$string['allsubmissions'] = 'Todos os envios';
$string['always_use_ws'] = 'Sempre use o protocolo websocket não criptografado (ws)';
$string['always_use_wss'] = 'Sempre use o protocolo websocket criptografado (wss)';
$string['anyfile'] = 'Arquivo';
$string['attemptnumber'] = 'Tentativa número {$a}';
$string['autodetect'] = 'Detecção automática';
$string['automaticevaluation'] = 'Avaliação automática';
$string['automaticgrading'] = 'Atribuição automática de nota';
$string['averageperiods'] = 'Períodos médios {$a}';
$string['averagetime'] = 'Tempo médio {$a}';
$string['basedon'] = 'Baseado em';
$string['basic'] = 'Básico';
$string['binaryfile'] = 'Arquivo binário';
$string['browserupdate'] = 'Por favor, atualize seu navegador para a última versão<br />ou utilize outro que suporte Websocket.';
$string['calculate'] = 'Calcular';
$string['changesNotSaved'] = 'As alterações não foram salvas';
$string['check_jail_servers'] = 'Verificar servidores de execução';
$string['check_jail_servers_help'] = '<p>Esta página verifica e mostra o status dos servidores de execução usados para esta atividade.</p>';
$string['clipboard'] = 'Área de transferência';
$string['closed'] = 'Fechado';
$string['comments'] = 'Comentários';
$string['compilation'] = 'Compilação';
$string['connected'] = 'conectado';
$string['connecting'] = 'conectando';
$string['connection_closed'] = 'conexão fechada';
$string['connection_fail'] = 'falha de conexão';
$string['console'] = 'Console';
$string['copy'] = 'Copiar';
$string['create_new_file'] = 'Criar um novo arquivo';
$string['currentstatus'] = 'Estado atual';
$string['cut'] = 'Cortar';
$string['datesubmitted'] = 'Data de envio';
$string['debug'] = 'Depurar';
$string['debugging'] = 'Depurando';
$string['debugscript'] = 'Script de depuração';
$string['debugscript_help'] = 'Selecione o script de depuração para usar nesta atividade';
$string['defaultexefilesize'] = 'Valor padrão para o tamanho máximo de arquivos de execução';
$string['defaultexememory'] = 'Valor padrão para a memória máxima utilizada';
$string['defaultexeprocesses'] = 'Valor padrão para o número máximo de processos';
$string['defaultexetime'] = 'Valor padrão para o tempo máximo de execução';
$string['defaultfilesize'] = 'Valor padrão para o tamanho máximo de arquivo carregado';
$string['defaultresourcelimits'] = 'Valor padrão para limite de recursos de execução';
$string['delete'] = 'Exlcuir';
$string['delete_file_fq'] = 'excluir o arquivo \'{$a}\'?';
$string['delete_file_q'] = 'Exlcuir arquivo?';
$string['deleteallsubmissions'] = 'Exlcuir todos os envios';
$string['depends_on_https'] = 'Use ws ou wss, dependendo se estiver usando http ou https';
$string['description'] = 'Descrição';
$string['diff'] = 'diff';
$string['discard_submission_period'] = 'Descartar período de envio';
$string['discard_submission_period_description'] = 'Para cada estudante e tarefa, o sistema tenta descartar envios. O sistema guarda o último envio e pelo menos um envio para cada período';
$string['download'] = 'Baixar';
$string['downloadallsubmissions'] = 'Baixar todos os envios';
$string['downloadsubmissions'] = 'Baixar envios';
$string['duedate'] = 'Data de entrega';
$string['edit'] = 'Editar';
$string['editing'] = 'Editando';
$string['editortheme'] = 'Tema do editor';
$string['evaluate'] = 'Avaliar';
$string['evaluateonsubmission'] = 'Avaliar apenas no momento do envio';
$string['evaluating'] = 'Avaliando';
$string['evaluation'] = 'Avaliação';
$string['examples'] = 'Exemplos';
$string['execution'] = 'Execução';
$string['executionfiles'] = 'Arquivos de execução';
$string['executionfiles_help'] = '<h2>Introdução </h2>
<p>Aqui você define os arquivos necessários para preparar a execução,
depuração ou avaliação de um envio. Isso inclui arquivos de script,
arquivos de teste de programa e arquivos de dados. </p>
<h2>Script padrão para executar ou depurar </h2>
<p> Se você não definir arquivos de script para envios de execução ou depuração, o sistema escolherá a linguagem que você usa (com base nas extensões de nome de arquivo) e usará um script pré-definido.
<h2>Avaliação automática </h2>
<p>Os recursos incorporados para facilitar a avaliação das submissões dos estudantes.
Esse recurso permite executar o programa do estudante e verificar sua saída para uma determinada entrada.
Para configurar os casos de avaliação, você deve preencher o arquivo "pl_evaluate.cases".
<p>O arquivo "vpl_evaluate.cases" possui o seguinte formato:
<ul>
<li> "<strong> case </strong> = Descrição do caso": Opcional. Configura o início de uma definição de caso de teste. </li>
<li> "<strong> input </strong> = texto": pode usar várias linhas. Termina com outra instrução. </li>
<li> "<strong> output </strong> = texto": pode usar várias linhas. Termina com outra instrução. Um caso pode ter saídas corretas diferentes. Existem três tipos de saída: números, texto e texto exato:
<ul>
<li> <strong>número</strong>: definido como uma sequência de números (números inteiros e flutuantes). Somente números na saída são verificados, outros textos são ignorados. Os números de ponto flutuante são verificados com alguma tolerância</li>
<li> <strong>texto</strong>: definido como texto sem aspas duplas. Somente palavras são verificadas e o restante dos caracteres é ignorado. A comparação não diferencia maiúsculas de minúsculas </li>
<li> <strong>texto exato</strong>: definido como texto entre aspas duplas. A correspondência exata é usada para testar a saída. </li>
</ul>
</li>
<li> "<strong> redução de nota </strong> = [valor | porcentagem%]": Por padrão, um erro reduz a nota do estudante (começa com maxgrade) por (grade_range/ número de casos), mas com esta instrução você pode alterar o valor ou porcentagem de redução. </li>
</ul>
</p>
<h2>Uso geral </h2>
<p>Um novo arquivo pode ser adicionado, escrevendo seu nome na caixa  "<b> Adicionar arquivo </b> "
e depois clicando no botão  "<b> Adicionar arquivo </b> ". </p>
<p>Um arquivo existente pode ser carregado por meio do  "<b> Carregar arquivo</b> " .
<p>Todos os arquivos adicionados ou enviados podem
ser editados e todos eles, exceto os três arquivos de script mencionados
abaixo, podem ser renomeados ou excluídos. </p>
<h2>Execução, depuração ou avaliação manual </h2>
<p>Podem ser definidos três arquivos de script para preparar cada uma das ações.
Esses arquivos têm nomes predefinidos: <b> vpl_run.sh </b> (execução),
<b>vpl_debug.sh </b> (depuração) e <b> vpl_evaluate.sh </b> (avaliação). </p>
<p>A execução de qualquer um desses arquivos de script deve gerar um
arquivo chamado <b> vpl_execution </b>.
Este arquivo deve ser um executável binário ou um script começando com "#!/bin/sh ".
A não geração deste arquivo impede a execução da ação selecionada. </p>
<p>Se a atividade que você está configurando é "baseada em" outra atividade,
os arquivos da atividade base são adicionados automaticamente.
O conteúdo dos arquivos vpl_run.sh, vpl_debug.sh e vpl_evaluate.sh
são concatenados do nível mais profundo de "baseado em" para o atual. </P>
<p>Finalmente, o arquivo <b> vpl_environment.sh </b> é adicionado automaticamente.
Este arquivo de script contém informações sobre o envio.
As informações vêm como variáveis de ambiente: </p>
<ul><li> LANG: linguagem usada. </li>
<li> LC_ALL: mesmo valor que LANG. </li>
<li> VPL_MAXTIME: tempo máximo de execução em segundos. </li>
<li> VPL_FILEBASEURL: URL para acessar os arquivos do curso. </li>
<li> VPL_SUBFILE #: cada nome dos arquivos enviados pelo estudante. # Varia de 0 a número de arquivos enviados. </Li>
<li> VPL_SUBFILES: lista de todos os arquivos enviados. </li>
<li> VPL_VARIATION + id: onde id é a ordem das variações que começa com 0 e o valor é o valor da variação. </li>
</ul>
Se a ação solicitada for avaliação, os seguintes vars também serão adicionados.
<ul>
<li> VPL_MAXTIME: tempo máximo de execução em segundos. </li>
<li> VPL_MAXMEMORY: memória máxima utilizável </li>
<li> VPL_MAXFILESIZE: tamanho máximo do arquivo em bytes que pode ser criado. </li>
<li> VPL_MAXPROCESSES: número máximo de processos que podem ser executados simultaneamente. </li>
<Li> VPL_FILEBASEURL: URL para os arquivos do curso. </Li>
<li> VPL_GRADEMIN: nota mínima para esta atividade </li>
<li> VPL_GRADEMAX: nota máxima para esta atividade </li>
</ul>
<h2>Resultado da avaliação</h2>
<p>Os resultados da avaliação são processados para extrair, se possível, comentários e uma nota proposta para a avaliação.
Os comentários podem ser definidos de duas maneiras: com um comentário de linha definido por uma linha que começa com \'Comment : =>>\' ou
com comentários em bloco começando com uma linha contendo apenas  \'<|--\'  e terminando com uma linha contendo apenas \'--|>\'.
A nota é obtida na última linha que começa com \'Grade :=>>\'.
</p>';
$string['executionoptions'] = 'Opções de execução';
$string['executionoptions_help'] = '<p>Várias opções de execução são definidas nesta página</p>
<ul>
<li><b> Baseado em </b>: define outra instância VPL da qual alguns recursos são importados:
<ul><li> Arquivos de execução (concatenando os arquivos de script predefinidos)</li>
<li>Limites para os recursos de execução.</li>
<li>Variações concatenadas para gerar multivariações.</li>
<li>Comprimento máximo para cada arquivo a ser carregado com o envio</li>
</ul>
</li>
<li><b>Executar</b>, <b>Depurar</b> e <b>Avaliar</b>: devem ser configurados como \'Sim\' se a ação correspondente puder ser executada ao editar o envio. Isso afeta apenas os estudantes, os usuários com capacidade de dar notas sempre podem executar essas ações.</li>
<li><b>Avaliar apenas no envio</b>: o envio é avaliado automaticamente quando é carregado. </li>
<li><b>Nota automática</b>: se o resultado da avaliação incluir notas, elas serão usados para definir a nota automaticamente.</li>
</ul>';
$string['file'] = 'Arquivo';
$string['fileNotChanged'] = 'Arquivo não foi alterado';
$string['file_name'] = 'Nome do arquivo';
$string['fileadded'] = 'O arquivo \'{$a}\' foi adicionado';
$string['filedeleted'] = 'O arquivo \'{$a}\' foi excluído';
$string['filelist'] = 'Lista de arquivos';
$string['filenotadded'] = 'Arquivo não foi adicionado';
$string['filenotdeleted'] = 'O arquivo \'{$a}\' NÃO foi excluído';
$string['filenotrenamed'] = 'O arquivo \'{$a}\' NÃO foi renomeado';
$string['filerenamed'] = 'O arquivo \'{$a->from}\' foi renomeado para \'{$a->to}\'';
$string['filesChangedNotSaved'] = 'Arquivos foram alterados mas não foram salvos';
$string['filesNotChanged'] = 'Arquivos não foram alterados';
$string['filestoscan'] = 'Arquivos a serem examinados';
$string['fileupdated'] = 'O arquivo \'{$a}\' foi atualizado';
$string['finalreduction'] = 'Redução final';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> Redução da nota final.<br>
<b>NE</b> Avaliações automáticas solicitadas pelo estudante.<br>
<b>FE</b> Avaliações gratuitas permitidas.<br>
<b>R</b> Redução de nota por avaliação. Se for um percentual, será aplicado sobre o resultado anterior.<br>';
$string['find'] = 'Buscar';
$string['find_replace'] = 'Buscar/Substituir';
$string['freeevaluations'] = 'Avaliações livres';
$string['freeevaluations_help'] = 'Número de avaliações automáticas que não reduzem a pontuação final';
$string['fulldescription'] = 'Descrição completa';
$string['fulldescription_help'] = '<p> Você deve escrever aqui uma descrição completa da atividade. </p>
<p> Se você não escrever nada aqui, a descrição resumida será mostrada no lugar. </p>
<p> Se você deseja avaliar automaticamente, as interfaces para as atribuições devem ser detalhadas e não ambíguas. </p>';
$string['fullscreen'] = 'Tela cheia';
$string['getjails'] = 'Obter servidores de execução';
$string['gradeandnext'] = 'Atribuir nota & próximo';
$string['graded'] = 'Com nota atribuída';
$string['gradedbyuser'] = 'Com nota atribuída por usuário';
$string['gradedon'] = 'Avaliado em';
$string['gradedonby'] = 'Revisado em {$a->date} por {$a->gradername}';
$string['gradenotremoved'] = 'A nota NÃO foi removida. Verifique as configuração da atividade no livro de notas.';
$string['gradenotsaved'] = 'A nota NÃO foi salva. Verifique as configuração da atividade no livro de notas.';
$string['gradeoptions'] = 'Opções de nota';
$string['grader'] = 'Avaliador';
$string['gradercomments'] = 'Relatório de avaliação';
$string['graderemoved'] = 'A nota foi excluída';
$string['groupwork'] = 'Trabalho em grupo';
$string['inconsistentgroup'] = 'Você é membro de mais de um grupo ou de nenhum (0 ou >1)';
$string['incorrect_file_name'] = 'Nome incorreto de arquivo';
$string['individualwork'] = 'Trabalho individual';
$string['instanceselection'] = 'Seleção de VPL';
$string['isexample'] = 'Esta ativiade serve como exemplo';
$string['jail_servers'] = 'Lista de servidores de execução';
$string['jail_servers_config'] = 'Configuração de servidores de execução';
$string['jail_servers_description'] = 'Cada servidor num linha distinta';
$string['joinedfiles'] = 'Arquivos selecionados concatenados';
$string['keepfiles'] = 'Arquivos a serem mantidos durante a execução';
$string['keepfiles_help'] = '<p>Devido a problemas de segurança, os arquivos adicionados como "Arquivos de execução&quot; são excluídos antes de executar o arquivo vpl_execution.</p>
Se algum desses arquivos for necessário durante a execução (por exemplo, para ser usado como dados de teste), ele deverá ser marcado aqui.';
$string['keyboard'] = 'Teclado';
$string['lasterror'] = 'Informação do último erro';
$string['lasterrordate'] = 'Data do último erro';
$string['listofcomments'] = 'Lista de comentários';
$string['listsimilarity'] = 'Lista de similaridades encontradas';
$string['listwatermarks'] = 'Lista de marcas d\'água';
$string['load'] = 'Carregar';
$string['loading'] = 'Carregando';
$string['local_jail_servers'] = 'Servidores locais de execução';
$string['local_jail_servers_help'] = '<p>Aqui você pode definir os servidores de execução locais adicionados para esta atividade e aquelas que são baseadas nele.</p>
<p>Digite a URL completa de um servidor em cada linha. Você pode usar linhas em branco e comentários iniciando a linha com "#".</p>
<p>Esta atividade será usada como lista de servidores de execução: os servidores configurados aqui além da lista de servidores definida na atividade "com base em" além da lista de servidores de execução comuns.
Se você deseja impedir esta atividade e outras derivadas de usar outros servidores, você precisará adicionar uma linha contendo "end_of_jails" no final da lista de servidores.
</p>';
$string['manualgrading'] = 'Atribuição manual de notas';
$string['maxexefilesize'] = 'Tamanho máximo de arquivos de execução';
$string['maxexememory'] = 'Memória máxima utilizada';
$string['maxexeprocesses'] = 'Número máximo de processos';
$string['maxexetime'] = 'Tempo máximo de execução';
$string['maxfiles'] = 'Número máximo de arquivos';
$string['maxfilesexceeded'] = 'Excedido o número máximo de arquivos';
$string['maxfilesize'] = 'Tamanho máximo de arquivo carregado';
$string['maxfilesizeexceeded'] = 'Excedido o tamanho máximo de arquivo';
$string['maximumperiod'] = 'Período máximo {$a}';
$string['maxresourcelimits'] = 'Limites máximos de recursos de execução';
$string['maxsimilarityoutput'] = 'Número máximo de ocorrências por similaridade';
$string['menucheck_jail_servers'] = 'Verificar servidores de execução';
$string['menuexecutionfiles'] = 'Arquivos de execução';
$string['menuexecutionoptions'] = 'Opções';
$string['menukeepfiles'] = 'Arquivos a serem mantidos';
$string['menulocal_jail_servers'] = 'Servidores locais de execução';
$string['menuresourcelimits'] = 'Limite de recursos';
$string['minsimlevel'] = 'Nível mínimo de similaridade a apresentar';
$string['moduleconfigtitle'] = 'Configuração do módulo VPL';
$string['modulename'] = 'Laboratório Virtual de Programação';
$string['modulename_help'] = '<p>VPL é um módulo de atividade para o Moodle que gerencia tarefas de programação e suas principais características são:</p>
<ul>
<li>Permite editar o código-fonte do programa no navegador</li>
<li>Os estudantes podem executar interativamente os programas no navegador </li>
<li>Você pode executar testes para revisar os programas. </li>
<li>Permite procurar similaridade entre arquivos. </li>
<li>Permite definir restrições de edição e evitar colar de texto externo. </li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Página inicial do laboratório de programação virtual</a></p>';
$string['modulenameplural'] = 'Laboratórios Virtuais de Programação';
$string['multidelete'] = 'Exclusão múltipla';
$string['nevaluations'] = '{$a} avaliações automáticas realizadas';
$string['new'] = 'Novo';
$string['new_file_name'] = 'Nome do novo arquivo';
$string['next'] = 'Próximo';
$string['nojailavailable'] = 'Não há servidor de execução disponível';
$string['noright'] = 'Você não tem permissão de acesso';
$string['nosubmission'] = 'Não há envio disponível';
$string['notexecuted'] = 'Não executados';
$string['notgraded'] = 'Sem atribuição de notas';
$string['notsaved'] = 'Nâo salvo';
$string['novpls'] = 'Não há Laboratório Virtual de Programação definido';
$string['nowatermark'] = 'Marcas d\'água próprias {$a}';
$string['nsubmissions'] = '{$a} envios';
$string['numcluster'] = 'Agrupamento {$a}';
$string['open'] = 'Abrir';
$string['opnotallowfromclient'] = 'Ação não permitida a partir deste computador';
$string['options'] = 'Opções';
$string['optionsnotsaved'] = 'Opções NÃO foram salvas';
$string['optionssaved'] = 'Opções foram salvas';
$string['origin'] = 'Origem';
$string['othersources'] = 'Outras fontes a serem adicionadas à varredura';
$string['outofmemory'] = 'Sem memória suficiente';
$string['paste'] = 'Colar';
$string['pluginadministration'] = 'Administração de VPL';
$string['pluginname'] = 'Laboratório de Programação Virtual';
$string['previoussubmissionslist'] = 'Lista de envios anteriores';
$string['print'] = 'Imprimir';
$string['proposedgrade'] = 'Nota proposta: {$a}';
$string['proxy'] = 'proxy';
$string['proxy_description'] = 'Proxy do Moodle para servidores de execução';
$string['redo'] = 'Refazer';
$string['reductionbyevaluation'] = 'Redução por avaliação automática';
$string['reductionbyevaluation_help'] = 'Reduz a pontuação final em um valor ou porcentagem para cada avaliação automática solicitada pelo estudante';
$string['regularscreen'] = 'Tela normal';
$string['removegrade'] = 'Remover nota';
$string['rename'] = 'Renomear';
$string['rename_file'] = 'Renomear arquivo';
$string['replace_find'] = 'Substituir/Buscar';
$string['requestedfiles'] = 'Arquivos requeridos';
$string['requestedfiles_help'] = '<p>Aqui você define os nomes e seu conteúdo inicial para os arquivos requeridos com o número máximo de arquivos definido na descrição básica da atividade.</p>
<p>Se você não definir nomes para um número inteiro de arquivos, os arquivos sem nome são opcionais e podem ter qualquer nome.</p>
<p>Você também pode adicionar conteúdo aos arquivos requeridos, para que eles estejam disponíveis na primeira vez em que forem abertos com o editor, se não houver envio anterior.</p>';
$string['requirednet'] = 'Envio permitidos a partir da rede';
$string['requiredpassword'] = 'É requerida uma senha';
$string['resetfiles'] = 'Reset files';
$string['resetvpl'] = 'Reset {$a}';
$string['resourcelimits'] = 'Limite de recursos';
$string['resourcelimits_help'] = '<p> Você pode definir limites para o tempo de execução, a memória usada, o tamanho dos arquivos de execução e o número de processos a serem executados simultaneamente. </p>
<p> Esses limites são usados ao executar os arquivos de script vpl_run.sh, vpl_debug.sh e vpl_evaluate.sh e o arquivo vpl_execution criado por eles. </p>
<p> Se esta atividade for baseada em outra atividade, os limites poderão ser afetados pelos limites estabelecidos na atividade base e seus ancestrais ou na configuração global do módulo. </p>';
$string['restrictededitor'] = 'Envios restritos ao Editor de Código';
$string['retrieve'] = 'Recuperar resultados';
$string['run'] = 'Executar';
$string['running'] = 'Executando';
$string['runscript'] = 'Script de execução';
$string['runscript_help'] = 'Selecione o script de execução a ser usado nesta atividade';
$string['save'] = 'Salvar';
$string['savecontinue'] = 'Salvar e continuar';
$string['saved'] = 'Salvo';
$string['savedfile'] = 'O arquivo \'{$a}\' foi salvo';
$string['saveoptions'] = 'Opções de salvamento';
$string['saving'] = 'Salvando';
$string['scanactivity'] = 'Atividade';
$string['scandirectory'] = 'Diretório';
$string['scanningdir'] = 'Examinando diretório ...';
$string['scanoptions'] = 'Opções de varredura';
$string['scanother'] = 'Buscar similaridades nas fontes adicionadas';
$string['scanzipfile'] = 'Arquivo zip';
$string['sebkeys'] = 'Chave(s) do exame SEB';
$string['sebkeys_help'] = 'Chaves (s) do exame SEB (máx. 3) obtidas do arquivo .seb <br> É mais confiável do que apenas a verificação do navegador. <br> https://safeexambrowser.org';
$string['sebrequired'] = 'Navegador SEB necessário';
$string['sebrequired_help'] = 'É necessário o uso do navegador SEB configurado corretamente';
$string['select_all'] = 'Selecionar tudo';
$string['server'] = 'Servidor';
$string['serverexecutionerror'] = 'Erro de execução no servidor';
$string['shortcuts'] = 'Atalhos do teclado';
$string['shortdescription'] = 'Descrição breve';
$string['similarity'] = 'Similaridades';
$string['similarto'] = 'Similar a';
$string['startdate'] = 'Disponível a partir de';
$string['submission'] = 'Enviar';
$string['submissionperiod'] = 'Período de envio';
$string['submissionrestrictions'] = 'Restrições de envio';
$string['submissions'] = 'Envios';
$string['submissionselection'] = 'Seleção de envios';
$string['submissionslist'] = 'Lista de envios';
$string['submissionview'] = 'Visualizar envios';
$string['submittedby'] = 'Enviado por {$a}';
$string['submittedon'] = 'Enviado em';
$string['submittedonp'] = 'Enviado em {$a}';
$string['sureresetfiles'] = 'Todo o seu trabalho será descartado e os arquivos retornarão ao seu estado original. É isso mesmo que desejas?';
$string['test'] = 'Atividade de teste';
$string['testcases'] = 'Casos para teste';
$string['testcases_help'] = 'Este recurso permite executar o programa do estudante e verificar sua saída para uma determinada entrada. Para configurar os casos de avaliação, você deve preencher o arquivo "vpl_evaluate.cases "<br>
O arquivo "vpl_evaluate.cases" tem o seguinte formato:<br>
<ul>
<li> "<b>case </b> = Descrição do caso": defina o início da definição do caso de teste.</li>
<li> "<b>input </b> = texto": pode usar várias linhas. Termina com outras instruções.</li>
<li> "<b>output </b> = texto": pode usar várias linhas. Termina com outras instruções. Um caso pode ter saída correta diferente. Existem três tipos de saída: números, texto e texto exato:
<ul>
<li> <b> números</b>: definido como sequência de números (números inteiros e flutuantes). Somente números na saída são verificados, outros textos são ignorados. Os números de ponto flutuante são verificados com tolerância</li>
<li> <b> texto</b>: definido como texto sem aspas duplas. Somente palavras são verificadas e o restante dos caracteres é ignorado. A comparação não diferencia maiúsculas de minúsculas </li>
<li> <b> texto exato</b>: definido como texto entre aspas duplas. A correspondência exata é usada para testar a saída.</li>
</ul>
</li>
<li> "<b>redução de nota</b> = [valor | porcentagem%]": Por padrão, um erro reduz a nota do estudante (começa com maxgrade) em (grade_range/ número de casos), mas com esta instrução você pode alterar o valor ou a porcentagem de redução.</li>
</ul>';
$string['timeleft'] = 'Tempo restante';
$string['timelimited'] = 'Tempo limitado';
$string['timeout'] = 'Limite de tempo excedido';
$string['timeunlimited'] = 'Tempo ilimitado';
$string['totalnumberoferrors'] = 'Erros';
$string['undo'] = 'Desfazer';
$string['unexpected_file_name'] = 'Nome incorreto para arquivo: esperado \'{$a->expected}\' e encontrado \'{$a->found}\'';
$string['unzipping'] = 'Descompactando ...';
$string['uploadfile'] = 'Carga de arquivo';
$string['usevariations'] = 'Usar variações';
$string['usewatermarks'] = 'Use marcas d\'água';
$string['usewatermarks_description'] = 'Adiciona marcas d\'água nos arquivos dos estudantes (apenas nos idiomas suportados)';
$string['variation'] = 'Variação {$a}';
$string['variation_options'] = 'Opções de variação';
$string['variations'] = 'Variações';
$string['variations_help'] = '<p>Um conjunto de variações pode ser definido para uma atividade. Essas variações são atribuídas aleatoriamente aos estudantes.</p>
<p>Aqui você pode indicar se esta atividade tem variações, coloque um título para o conjunto de variações e adicione as variações desejadas.</p>
<p>Cada variação possui um código de identificação e uma descrição. O código de identificação é usado pelo arquivo <b>vpl_enviroment.sh</b> para passar
a variação atribuída a cada estudante para os arquivos de script. A descrição, formatada em HTML, é mostrada aos estudantes que atribuíram a variação correspondente.</p>';
$string['variations_unused'] = 'Esta atividade tem variações, mas elas estão desativadas';
$string['variationtitle'] = 'Título da variação';
$string['varidentification'] = 'Identificação';
$string['visiblegrade'] = 'Visível';
$string['vpl'] = 'Laboratório Virtual de Programação';
$string['vpl:addinstance'] = 'Adicionar uma nova instância de vpl';
$string['vpl:grade'] = 'Atribuir nota a tarefas VPL';
$string['vpl:manage'] = 'Gerenciar tarefas VPL';
$string['vpl:setjails'] = 'Definir servidores de execução para instâncias particulares de VPL';
$string['vpl:similarity'] = 'Buscar similaridades em tarefas VPL';
$string['vpl:submit'] = 'Enviar tarefa VPL';
$string['vpl:view'] = 'Ver descrição completa de tarefa VPL';
$string['vpl_debug.sh'] = 'Este script prepara a depuração';
$string['vpl_evaluate.cases'] = 'Casos de teste para avaliação';
$string['vpl_evaluate.sh'] = 'Este script prepara a avaliação';
$string['vpl_run.sh'] = 'Este script prepara a execução';
$string['websocket_protocol'] = 'Protocolo WebSocket';
$string['websocket_protocol_description'] = 'Tipo de protocolo WebSocket (ws:// ou wss://) usado pelo navegador para conectar-se aos servidores de execução.';
$string['workingperiods'] = 'Períodos de trabalho';
$string['worktype'] = 'Tipo de trabalho';
