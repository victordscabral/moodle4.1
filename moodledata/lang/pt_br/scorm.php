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
 * Strings for component 'scorm', language 'pt_br', version '4.1'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Ativação';
$string['activityloading'] = 'Você será redirecionado à atividade em';
$string['activityoverview'] = 'Você tem pacotes SCORM que necessitam de atenção';
$string['activitypleasewait'] = 'Carregando atividade, por favor, aguarde ...';
$string['adminsettings'] = 'Configurações de adminsitração';
$string['advanced'] = 'Parâmetros';
$string['aicchacpkeepsessiondata'] = 'Dados de seção AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Intervalo de tempo em dias a serem mantidos os dados de seção AICC HACP externos (um valor alto vai encher a tabela com dados antigos, mas pode ser útil para debugging)';
$string['aicchacptimeout'] = 'Timeout do AICC HACP';
$string['aicchacptimeout_desc'] = 'Intervalo de tempo que uma seção AICC HACP externa pode permanecer aberta';
$string['aiccuserid'] = 'ID numérico do usuário AICC';
$string['aiccuserid_desc'] = 'O padrão AICC para nomes de usuários é muito restritivo em comparação com o Moodle, permite somente caracteres alfanuméricos, traço(-) e sublinhado (_). Ponto, espaços e o símbolo @ não são permitidos. Se habilitado, serão enviados para o pacote AiCC os números dos IDs dos usuários em vez dos nomes de usuários.';
$string['aliasonly'] = 'Ao selecionar um arquivo imsmanifest.xml de um repositório você deve usar um apelido / atalho para este arquivo.';
$string['allowapidebug'] = 'Debug e rastreamento da API ativa (confugra a captura da mascara com apidebugmask)';
$string['allowtypeaicchacp'] = 'Habilitar AICC HACP externo';
$string['allowtypeaicchacp_desc'] = 'Se habilitado permite ao AICC HACP externo comunicação sem requerer login para enviar requisições de um pacote AICC externo';
$string['allowtypeexternal'] = 'Habilitar pacote do tipo externo';
$string['allowtypeexternalaicc'] = 'Habilitar URL direta ao AICC';
$string['allowtypeexternalaicc_desc'] = 'Se habilitado permite uma url direta a um pacote simples AICC';
$string['allowtypelocalsync'] = 'Habilitar tipo de pacote baixados';
$string['apidebugmask'] = 'Macara de captura de debug de API - use um regex simples em &lt;username&gt;:&lt;activityname&gt; ex. admin:.* permite o debug para admins apenas';
$string['areacontent'] = 'Arquivos de conteúdo';
$string['areapackage'] = 'Pacote de arquivos';
$string['asset'] = 'Recurso';
$string['assetlaunched'] = 'Recurso - Visto';
$string['attempt'] = 'Tentativa';
$string['attempt1'] = '1 tentativa';
$string['attempts'] = 'Tentativas';
$string['attemptsmanagement'] = 'Gestão de tentativas';
$string['attemptstatusall'] = 'Painel e página de entrada';
$string['attemptstatusentry'] = 'Página de entrada apenas';
$string['attemptstatusmy'] = 'Apenas Painel';
$string['attemptsx'] = '{$a} tentativas';
$string['attr_error'] = 'Valor errado para o atributo ({$a->attr}) no tag {$a->tag}.';
$string['autocommit'] = 'Auto-commit';
$string['autocommit_help'] = 'Se ativado, os dados SCORM é automaticamente salva no banco de dados. Útil para objetos SCORM que não salvam seus dados regularmente.';
$string['autocommitdesc'] = 'Salvar automaticamente os dados SCORM se o pacote SCORM não salvá-los.';
$string['autocontinue'] = 'Continuação automática';
$string['autocontinue_help'] = '<p>Se Continuação Automática estiver assinalada como SIM, quando um SCO chamar o método "close communication", automaticamente o próximo SCO disponível será iniciado.</p>

<p>Se estiver assinalado NÃO, os usuários terão de usar o botão "Continue" para seguir adiante.</p>';
$string['autocontinuedesc'] = 'Se habilitado, os objetos de aprendizagem são inicializados automaticamente, caso contrário, o botão Continuar deve ser utilizado.';
$string['averageattempt'] = 'Média de tentativas';
$string['badarchive'] = 'Você precisa fornecer um arquivo zip válido';
$string['badimsmanifestlocation'] = 'Um arquivo imsmanifest.xml foi encontrado mas não na raiz do arquivo zip. Por favor corrija seu SCORM';
$string['badmanifest'] = 'Erros no manifesto: consulte o relatório de erros';
$string['browse'] = 'Visitar';
$string['browsed'] = 'Visto';
$string['browsemode'] = 'Modo de pré-visualização';
$string['browserepository'] = 'Navegar no repositório';
$string['calculatedweight'] = 'Peso calculado';
$string['calendarend'] = 'Término de {$a}';
$string['calendarstart'] = 'Início de {$a}';
$string['cannotaccess'] = 'Você não pode chamar esse script dessa forma';
$string['cannotfindsco'] = 'Não encontrou SCO';
$string['chooseapacket'] = 'Escolher ou atualizar um pacote';
$string['closebeforeopen'] = 'Você definiu uma data de fechamento anterior a  data de  abertura.';
$string['collapsetocwinsize'] = 'Fechar TOC quando o tamanho da janela abaixo';
$string['collapsetocwinsizedesc'] = 'Essa configuração permite especificar o tamanho da janela abaixo que o TOC deve ser automaticamente reduzido.';
$string['compatibilitysettings'] = 'Configurações de compatibilidade';
$string['completed'] = 'Concluído';
$string['completiondetail:allscos'] = 'Fazer todas as partes dessa atividade';
$string['completiondetail:completionscore'] = 'Receber uma nota {$a} ou maior';
$string['completiondetail:completionstatuscompleted'] = 'Concluir a atividade';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Concluir ou ser aprovado na atividade';
$string['completiondetail:completionstatuspassed'] = 'Aprovado na atividade';
$string['completionscorerequired'] = 'Exigir pontuação mínima';
$string['completionscorerequired_help'] = 'Ativar essa configuração vai exigir que o usuário tenha pelo menos a pontuação mínima entrou a ser marcado completa nesta atividade SCORM, bem como quaisquer outros requisitos de conclusão de atividade.';
$string['completionscorerequireddesc'] = 'É necessária uma pontuação mínima de {$a} para conclusão';
$string['completionstatus_completed'] = 'Completo';
$string['completionstatus_passed'] = 'Passou';
$string['completionstatusallscos'] = 'Exigir que todos os scos devolvam o seu estado de conclusão';
$string['completionstatusallscos_help'] = 'Alguns pacotes SCORM contêm vários componentes ou "scos" - quando esta opção está ativa, todos os scos dentro do pacote devem devolver o lesson_status relevante desta atividade para poder ser sinalizada como concluída.';
$string['completionstatusrequired'] = 'Requerer status';
$string['completionstatusrequired_help'] = 'Verificado um ou mais status exigirá um utilizador para conseguir pelo menos uma das situações verificados, a fim de ser marcado completa nesta actividade SCORM, bem como quaisquer outros requisitos de conclusão de actividade.';
$string['completionstatusrequireddesc'] = 'O estudante deve atingir pelo menos um dos seguintes estados: {$a}';
$string['confirmloosetracks'] = 'Atenção: provavelmente este pacote foi modificado. Se a estrutura for mudada, os registros das interações dos usuários podem ser perdidos durante a atualização';
$string['contents'] = 'Conteúdo';
$string['coursepacket'] = 'Pacote do curso';
$string['coursestruct'] = 'Estrutura do curso';
$string['crontask'] = 'Processamento em background para SCORM';
$string['currentwindow'] = 'Janela atual';
$string['datadir'] = 'Erro no sistema de arquivos: não é possível criar um diretório para os dados do curso';
$string['defaultdisplaysettings'] = 'Exibição padrão de configurações';
$string['defaultgradesettings'] = 'Configurações padrões de notas';
$string['defaultothersettings'] = 'Outras configurações padrões';
$string['deleteallattempts'] = 'Remova todas as tentativas SCORM';
$string['deleteattemptcheck'] = 'Tem certeza que deseja excluir completamente estas tentativas ?';
$string['deleteselected'] = 'Excluir tentativas selecionadas';
$string['deleteuserattemptcheck'] = 'Tem completa certeza que deseja excluir todas suas tentativas ?';
$string['details'] = 'Detalhes do registro';
$string['directories'] = 'Mostrar os links do diretório';
$string['disabled'] = 'Desabilitado';
$string['display'] = 'Mostrar';
$string['displayactivityname'] = 'Mostrar nome da atividade';
$string['displayactivityname_help'] = 'Se deve ou não exibir o nome da atividade acima do SCORM player.';
$string['displayattemptstatus'] = 'Exibir status da tentativa';
$string['displayattemptstatus_help'] = 'Esta preferência permite que as tentativas do usuário sejam mostradas no bloco visão geral do curso no Painel e/ou na página de entrada do SCORM.';
$string['displayattemptstatusdesc'] = 'Se um resumo das tentativas do usuários devem ser exibidas no bloco visão geral do curso no Painel e/ou na página de entrada do SCORM.';
$string['displaycoursestructure'] = 'Mostrar índice na página de entrada';
$string['displaycoursestructure_help'] = 'Caso habilitado, a tabela de conteúdo será exibida na página de rascunho do SCORM.';
$string['displaycoursestructuredesc'] = 'Se habilitado, o índice será exibido na página de entrada do SCORM.';
$string['displaydesc'] = 'Se deseja mostrar o pacote SCORM em uma nova janela.';
$string['displaysettings'] = 'Configurações de exibição';
$string['dnduploadscorm'] = 'Adicionar um pacote SCORM';
$string['domxml'] = 'biblioteca DOMXML externa';
$string['element'] = 'Elemento';
$string['enter'] = 'Entrar';
$string['entercourse'] = 'Entrar no curso';
$string['errorlogs'] = 'Relatório de erros';
$string['eventattemptdeleted'] = 'Tentativa excluídas';
$string['eventinteractionsviewed'] = 'Interações visualizadas';
$string['eventreportviewed'] = 'Relatório visualizado';
$string['eventscolaunched'] = 'Sco lançado';
$string['eventscorerawsubmitted'] = 'Nota bruta do SCORM submetida';
$string['eventstatussubmitted'] = 'Estado do SCORM submetido';
$string['eventtracksviewed'] = 'Tracks visualizadas';
$string['eventuserreportviewed'] = 'Relatório do usuário visualizado';
$string['everyday'] = 'Todos os dias';
$string['everytime'] = 'Quando for usado';
$string['exceededmaxattempts'] = 'Você atingiu a número máximo de tentativas.';
$string['exit'] = 'Sair do curso SCORM';
$string['exitactivity'] = 'Sair da atividade';
$string['expired'] = 'Desculpe, este atividade fechada em {$a} e não está mais disponível';
$string['external'] = 'Atualizar o tempo nos pacotes externos';
$string['failed'] = 'Falhou';
$string['finishscorm'] = 'Se você já finalizou essa atividade, {$a}';
$string['finishscormlinkname'] = 'clique aqui para voltar à página do curso';
$string['firstaccess'] = 'Primeiro acesso';
$string['firstattempt'] = 'Primeira tentativa';
$string['floating'] = 'Floating';
$string['forceattemptalways'] = 'Sempre';
$string['forceattemptoncomplete'] = 'Quando a tentativa anterior foi concluída, aprovada ou falhou';
$string['forcecompleted'] = 'Forçar completar';
$string['forcecompleted_help'] = 'Se habilitado, o status da tentativa atual é forçado para "concluído". Somente aplicável aos pacotes SCORM 1.2.';
$string['forcecompleteddesc'] = 'Esta preferência define o valor padrão para a força de configuração concluída';
$string['forcejavascript'] = 'Força usuários a utilizarem Javascript';
$string['forcejavascript_desc'] = 'Se habilitado (recomendado) isso impede o acesso aos objetos SCORM se o navegador dos usuários não suportar ou não estiver com a execução do JavaScript habilitada. Se desabilitado o usuário poderá ver o SCORM, mas a comunicação realizada pela API não funcionará e nenhuma nota ou informação será salva o Moodle.';
$string['forcejavascriptmessage'] = 'Javascript é necessário para visualizar este objeto, por favor habilite Javascript no seu navegador e tente novamente.';
$string['forcenewattempts'] = 'Forçar nova tentativa';
$string['forcenewattempts_help'] = 'Existem 3 opções:

* Não - Se uma tentativa anterior for concluída, aprovada ou reprovada, o estudante terá a opção de entrar no modo de revisão ou iniciar uma nova tentativa.
* Quando a tentativa anterior foi concluída, aprovada ou reprovada - Isso se baseia na configuração do status do pacote SCORM de \'concluído\', \'aprovado\' ou \'reprovado\'.
* Sempre - Cada reentrada na atividade SCORM gerará uma nova tentativa e o estudante não retornará ao mesmo ponto alcançado na tentativa anterior.';
$string['found'] = 'Manifesto encontrado';
$string['frameheight'] = 'Configura a altura do frame ou janela';
$string['framewidth'] = 'Configura a altura do frame ou janela';
$string['fromleft'] = 'A partir da esquerda';
$string['fromtop'] = 'Do topo';
$string['fullscreen'] = 'Preencher toda a tela';
$string['general'] = 'Dados Gerais';
$string['gradeaverage'] = 'Média das notas';
$string['gradeforattempt'] = 'Avaliação por tentativa';
$string['gradehighest'] = 'Nota mais alta';
$string['grademethod'] = 'Método de avaliação';
$string['grademethod_help'] = '<p>Os resultados de uma atividade SCORM/AICC mostrada nas Páginas de Avaliação podem ser calculados em vários modos:</p>
    <ul>
	<li><b>Estado dos SCOes</b><br />Este modo apresenta o número de SCOes concluídos na atividade. O valor máximo é o número de SCOes.</li>
	<li><b>Nota mais alta</b><br />A página de Avaliação irá mostrar o maior resultado obtido pelos usuários em todos os SCOes concluídos.</li>
	<li><b>Média das Notas</b><br />Caso você escolha este modo, o será calculada a média de todos os resultados.</li>
	<li><b>Soma de notas</b><br />Com este modo todos os resultados serão somados.</li>
</ul>';
$string['grademethoddesc'] = 'O método de avaliação define como a nota de uma única tentativa da atividade será determinada.';
$string['gradereported'] = 'Nota recebida';
$string['gradescoes'] = 'Objetos de aprendizagem';
$string['gradesettings'] = 'Configurações de nota';
$string['gradesum'] = 'Soma de notas';
$string['height'] = 'Altura';
$string['hidden'] = 'Escondido';
$string['hidebrowse'] = 'Esconder botão Prévia';
$string['hidebrowse_help'] = 'O modo de visualização permite que um estudante navegue em uma atividade antes da tentativa. Se o modo de visualização estiver desativado, o botão de visualização ficará oculto.';
$string['hidebrowsedesc'] = 'O modo de visualização permite que um estudante navegue pela atividade antes de realizar uma  tentativa.';
$string['hideexit'] = 'Esconder o botão Sair';
$string['hidereview'] = 'Esconder o botão Revisão';
$string['hidetoc'] = 'Mostrar o índice no player';
$string['hidetoc_help'] = 'Esta configuração especifica como o índice deve ser exibido no player SCORM.';
$string['hidetocdesc'] = 'Esta configuração especifica como o índice deve ser exibido no player SCORM.';
$string['highestattempt'] = 'Tentativa mais alta';
$string['identifier'] = 'Identificador da questão';
$string['incomplete'] = 'Incompleto';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo do SCORM';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em uma atividade SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitivo';
$string['indicator:socialbreadth'] = 'Indicador social do SCORM';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelas atividades SCORM durante este intervalo de análise (Níveis = Sem participação, Participante único)';
$string['info'] = 'Info';
$string['interactions'] = 'Interações';
$string['invalidactivity'] = 'Atividade SCORM está incorreta';
$string['invalidhacpsession'] = 'Seção HACP inválida';
$string['invalidmanifestname'] = 'Só imsmanifest.xml ou arquivos zip podem ser selecionados';
$string['invalidmanifestresource'] = 'ATENÇÃO: Os seguintes recursos foram citados no seu manifesto mas não foram encontrados:';
$string['invalidstatus'] = 'Status inválido';
$string['invalidurl'] = 'URL inválida especificada';
$string['invalidurlhttpcheck'] = 'URL inválido especificado. Depurar mensagem: <pre> {$a->cmsg} </pre>';
$string['last'] = 'Último acesso em';
$string['lastaccess'] = 'Último acesso';
$string['lastattempt'] = 'Última tentativa finalizada';
$string['lastattemptlock'] = 'Bloqueio após tentativa final';
$string['lastattemptlock_help'] = 'Caso habilitada, os estudantes será impedidos de abrir o reprodutor de SCORM após utilizarem todas as tentativas.';
$string['lastattemptlockdesc'] = 'Se habilitado, impedi um estudante de iniciar o player SCORM depois de utilizar todas as tentativas permitidas.';
$string['location'] = 'Mostrar a barra de endereço';
$string['masteryoverride_help'] = 'Se ativar esta opção e se for disponibilizada uma nota para passar, quando o LMSFinish é chamado e é devolvido um total da atividade, o estado do SCORM será recalculado utilizando a nota da atividade e a nota mínima para passar. Qualquer estado enviado pelo SCORM (incluindo o "incompleto") é sobreposto por este cálculo.';
$string['masteryoverridedesc'] = 'Esta preferência define o valor padrão da sobreposição da nota para passar sobre o estado do SCORM';
$string['max'] = 'Pontuação máxima';
$string['maximumattempts'] = 'Número de tentativas';
$string['maximumattempts_help'] = '<p>Isso define o número de tentativas permitidas ao usuário.<br />Isso funciona apenas com pacotes SCORM1.2 e AICC. SCORM2004 tem sua pŕopria definição do número máximo de tentativas</p>';
$string['maximumattemptsdesc'] = 'Esta opção define o padrão para número máximo de tentativas';
$string['maximumgradedesc'] = 'Esta opção define o padrão para o cálculo da pontuação máxima';
$string['menubar'] = 'Mostrar a barra de menu';
$string['min'] = 'Pontuação mínima';
$string['missing_attribute'] = 'Falta o atributo {$a->attr} na tag {$a->tag}';
$string['missing_tag'] = 'Falta tag {$a->tag}';
$string['missingparam'] = 'Um parâmetro necessário está faltando ou está errado';
$string['mode'] = 'Modalidade';
$string['modulename'] = 'Pacote SCORM';
$string['modulename_help'] = 'Um pacote SCORM é um conjunto de arquivos que são empacotados de acordo com um padrão definido para objetos de aprendizagem. O módulo de atividade SCORM permite que pacotes SCORM ou AICC sejam carregados como um arquivo zip e adicionados a um curso.

O conteúdo é geralmente exibido em várias páginas, com navegação entre as páginas. Existem várias opções para exibir o conteúdo: em uma janela pop-up, com um índice, com botões de navegação, etc. As atividades do SCORM geralmente incluem questões com as notas sendo registradas no livro de notas.

Atividades SCORM podem ser usadas

* Para apresentar animações e conteúdo multimídia
* Como ferramenta de avaliação';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORMs';
$string['myaiccsessions'] = 'Minhas sessões AICC';
$string['myattempts'] = 'Minhas tentativas';
$string['nav'] = 'Mostrar Navegação';
$string['nav_help'] = 'Esta configuração especifica se deseja mostrar ou ocultar os botões de navegação e sua posição. Existem 3 opções: * Não - Botões de navegação não são mostrados * Sob o conteúdo - botões de navegação são apresentados a seguir o conteúdo do pacote SCORM * Flutuante - botões de navegação são apresentados flutuante, com a posição do topo e da esquerda determinada pelo pacote.';
$string['navdesc'] = 'Esta configuração especifica se deseja mostrar ou ocultar botões de navegação e sua posição.';
$string['navigation'] = 'Navegação';
$string['navpositionleft'] = 'Posição dos botões de navegação da esquerda em pixels.';
$string['navpositiontop'] = 'Posição dos botões de navegação de topo em pixels.';
$string['networkdropped'] = 'O player do SCORM determinou que a sua conexão com a Internet não é confiável ou foi interrompida. Se você continuar nesta atividade SCORM, seu progresso não poderá ser salvo. <br /> Você deve sair da atividade agora, e voltar quando você tiver uma conexão de Internet confiável.';
$string['newattempt'] = 'Começar uma nova tentativa';
$string['next'] = 'Próxima';
$string['no_attributes'] = 'Tag {$a->tag} deve ter atributos';
$string['no_children'] = 'Tag {$a->tag} deve ter filhos';
$string['noactivity'] = 'Nenhum registro';
$string['noattemptsallowed'] = 'Número de tentativas permitidas';
$string['noattemptsmade'] = 'Número de tentativas feitas';
$string['nolimit'] = 'Tentativas ilimitadas';
$string['nomanifest'] = 'Pacote de arquivos incorreto - falta o imsmanifest.xml ou estrutura AICC';
$string['noprerequisites'] = 'Desculpe, mas você ainda não possui os requisitos necessários para acessar esta atividade.';
$string['noreports'] = 'Nenhum relatório disponível';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'O seu navegador não é compatível com javascript ou o javascript não está habilitado. Este pacote SCORM pode não executar ou salvar dados corretamente.';
$string['not_corr_type'] = 'Erro de associação de tipos no tag {$a->tag}';
$string['notattempted'] = 'Nenhuma tentativa';
$string['notopenyet'] = 'Desculpe, esta atividade não está disponível até {$a}';
$string['objectives'] = 'Objetivos';
$string['openafterclose'] = 'Você definiu uma data inicial posterior a data final';
$string['optallstudents'] = 'todos usuários';
$string['optattemptsonly'] = 'somente usuários com tentativas';
$string['options'] = 'Opções (impedidas por alguns navegadors)';
$string['optionsadv'] = 'Opções (Avançado)';
$string['optionsadv_desc'] = 'Se marcado, a largura e a altura serão listadas como configurações avançadas.';
$string['optnoattemptsonly'] = 'somente usuários sem tentativas';
$string['organization'] = 'Organização';
$string['organizations'] = 'Organizações';
$string['othersettings'] = 'Parâmetros adicionais';
$string['package'] = 'Arquivo do pacote';
$string['package_help'] = 'O arquivo de pacote é um zip (ou pif) que contem os arquivos de definição do curso do SCORM/AICC';
$string['packagedir'] = 'Erro no sistema de arquivos: não foi possível criar um diretório para o pacote';
$string['packagefile'] = 'Nenhum arquivo de pacote definido';
$string['packagehdr'] = 'Pacote';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Essa opção permite que uma URL para o pacote SCORM seja especificada ao invés de escolher um arquivo através do "Escolher ou Enviar Arquivo"';
$string['page-mod-scorm-x'] = 'Qualquer página do módulo SCORM';
$string['pagesize'] = 'Tamanho da página';
$string['passed'] = 'Aprovado';
$string['php5'] = 'PHP 5 (library DOMXML nativa)';
$string['pluginadministration'] = 'Administração do pacote SCORM/AICC';
$string['pluginname'] = 'Pacote SCORM';
$string['popup'] = 'Nova janela';
$string['popuplaunched'] = 'Este pacote SCORM foi lançado em uma janela pop-up, se você acabar de ver este recurso, clique aqui para voltar à página do curso';
$string['popupmenu'] = 'Em um menu suspenso';
$string['popupopen'] = 'Abrir pacote em nova janela';
$string['popupsblocked'] = 'Parece que as janelas pop-up estão bloqueadas, impedindo que esse pacote SCORM seja reproduzido. Verifique as configurações do seu navegador antes de tentar novamente.';
$string['position_error'] = 'O tag {$a->tag} não pode ser filho de {$a->parent}';
$string['preferencespage'] = 'Preferências apenas para esta página';
$string['preferencesuser'] = 'Preferências para este relatório';
$string['prev'] = 'Anterior';
$string['privacy:metadata:aicc:data'] = 'Dados pessoais transmitidos pelo subsistema AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Este plugin envia dados externamente usando o AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'O status da lição a ser monitorada';
$string['privacy:metadata:aicc_session:scormmode'] = 'O modo da lição a ser monitodara';
$string['privacy:metadata:aicc_session:scormstatus'] = 'O status do elemento a ser monitorado';
$string['privacy:metadata:aicc_session:sessiontime'] = 'O horário da sessão a ser monitorada';
$string['privacy:metadata:aicc_session:timecreated'] = 'O horário em que o elemento monitorado foi criado';
$string['privacy:metadata:attempt'] = 'O número da tentativa';
$string['privacy:metadata:scoes_track:element'] = 'O nome do elemento a ser monitorado';
$string['privacy:metadata:scoes_track:value'] = 'O valor do elemento fornecido';
$string['privacy:metadata:scorm_scoes_track'] = 'Os dados monitorados dos SCOes pertencentes à atividade';
$string['privacy:metadata:timemodified'] = 'O horário em que o elemento monitorado foi modificado pela última vez';
$string['privacy:metadata:userid'] = 'O ID do usuário que acessou a atividade SCORM';
$string['protectpackagedownloads'] = 'Proteger pacote de downloads';
$string['protectpackagedownloads_desc'] = 'Se habilitado, pacotes SCORM podem ser baixados apenas se o usuário tem no curso: capacidade de gerenciar atividades. Se desabilitado, pacotes SCORM sempre podem ser baixados (por meios móveis ou outros).';
$string['raw'] = 'Pontuação';
$string['regular'] = 'Manifesto correto';
$string['report'] = 'Relatório';
$string['reportcountallattempts'] = '{$a->nbattempts} tentativas para usuários {$a->nbusers}, fora de resultados {$a->nbresults}';
$string['reportcountattempts'] = '{$a->nbresults} resultados ({$a->nbusers} usuários)';
$string['reports'] = 'Relatórios';
$string['repositorynotsupported'] = 'Este repositório não suporta ligação direta para um arquivo imsmanifest.xml.';
$string['response'] = 'Resposta';
$string['result'] = 'Resultado';
$string['results'] = 'Resultados';
$string['review'] = 'Rever';
$string['reviewmode'] = 'Modalidade de revisão';
$string['rightanswer'] = 'Resposta correta';
$string['scoes'] = 'Objetos de Aprendizagem';
$string['score'] = 'Resultado';
$string['scorm:addinstance'] = 'Adicionar um novo pacote SCORM';
$string['scorm:deleteownresponses'] = 'Excluir próprias tentativas';
$string['scorm:deleteresponses'] = 'Excluir tentativas SCORM';
$string['scorm:savetrack'] = 'Salvar caminhos';
$string['scorm:skipview'] = 'Pular introdução';
$string['scorm:viewreport'] = 'Ver relatórios';
$string['scorm:viewscores'] = 'Ver pontuação';
$string['scormclose'] = 'Disponível até';
$string['scormcourse'] = 'Curso de aprendizagem';
$string['scormloggingoff'] = 'API Logging desabilitado';
$string['scormloggingon'] = 'API Logging habilitado';
$string['scormopen'] = 'Disponível a partir de';
$string['scormresponsedeleted'] = 'Excluir tentativas do usuário';
$string['scormstandard'] = 'Modo de padrões SCORM';
$string['scormstandarddesc'] = 'Quando desabilitado, o Moodle permite que os pacotes SCORM 1.2 armazenem mais do que a especificação permite e usa as configurações de formato de nome completo do Moodle ao passar o nome de usuário para o pacote SCORM.';
$string['scormtype'] = 'Tipo';
$string['scormtype_help'] = 'Esta configuração determina como o pacote está incluído no curso. Há até 4 opções:

* Pacote enviado - permite que um pacote SCORM seja escolhido através do seletor de arquivos
* Manifest SCORM externo - permite que um URL imsmanifest.xml seja especificado. Nota: Se o URL tiver um nome de domínio diferente do seu site, "Pacote baixado" é uma opção melhor, pois caso contrário as notas não serão salvas.
* Pacote baixado - permite que um URL de pacote seja especificado. O pacote será descompactado e salvo localmente, e atualizado quando o pacote SCORM externo for atualizado.
* URL externo do AICC - esse URL é o URL de inicialização de uma única atividade do AICC. Uma simulação do pacote será construído em torno disso.';
$string['scrollbars'] = 'Permitir o rolamento da janela';
$string['search:activity'] = 'Pacote SCORM - informações da atividade';
$string['selectall'] = 'Selecionar todos';
$string['selectnone'] = 'Desmarcar todos';
$string['show'] = 'Exibir';
$string['sided'] = 'Ao lado';
$string['skipview'] = 'O estudante salta a página de menu';
$string['skipview_help'] = '<p>Se você adicionar pacotes com apenas um Objeto de Aprendizado, você pode permitir que o Moodle salte a página de estrutura de conteúdo quando os usuários clicarem numa atividade do SCORM, na página do curso.</p>

<p>Você pode escolher:</p>

   <ul>
       <li><strong>Nunca</strong> saltar a página de estrutura do conteúdo</li>
       <li><strong>Primeiro acesso</strong> saltar a página de estrutura do conteúdo apenas na primeira vez</li>
       <li><strong>Sempre</strong> saltar a página de estrutura do conteúdo</li>
   </ul>';
$string['skipviewdesc'] = 'Esta opção define o padrão relativo a quando saltar a estrutura de conteúdos de uma página';
$string['slashargs'] = 'Atenção: slash arguments está desabilitado neste site e isto pode afetar o funcionamento dos objetos';
$string['stagesize'] = 'Tamanho da Tela/Frame';
$string['stagesize_help'] = '<p>Essas duas opções definema altura e a largura da janela/frame dos Objetos de Aprendizado.</p>';
$string['started'] = 'Iniciado em';
$string['status'] = 'Estado';
$string['statusbar'] = 'Mostrar a barra de estado';
$string['student_response'] = 'Resposta';
$string['subplugintype_scormreport'] = 'Relatório';
$string['subplugintype_scormreport_plural'] = 'Relatórios';
$string['suspended'] = 'Suspenso';
$string['syntax'] = 'Erro de sintaxe';
$string['tag_error'] = 'Tag desconhecido ({$a->tag}) com o seguinte conteúdo: {$a->value}';
$string['time'] = 'Duração';
$string['title'] = 'Título';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Tag {$a->tag} tem atributos demais';
$string['too_many_children'] = 'Tag {$a->tag} tem filhos demais';
$string['toolbar'] = 'Mostrar a barra de instrumentos';
$string['totaltime'] = 'Tempo';
$string['trackcorrectcount'] = 'Contagem correta';
$string['trackcorrectcount_help'] = 'Número de resultados corretos para a questão';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Este é o identificador definido pelo pacote SCORM para esta questão, a especificação SCORM não permite que o texto da pergunta completo a ser fornecido.';
$string['trackingloose'] = 'Atenção: os dados relativos ao tracking deste pacote serão perdidos!';
$string['tracklatency'] = 'Latência';
$string['tracklatency_help'] = 'O tempo decorrido entre o momento em que a questão foi disponibilizada ao estudante para uma resposta e o tempo da primeira resposta.';
$string['trackpattern'] = 'Padrão';
$string['trackpattern_help'] = 'Isto é o que seria uma resposta correta a esta questão, não mostra a resposta dos estudantes.';
$string['trackresponse'] = 'Resposta';
$string['trackresponse_help'] = 'Esta é a resposta dada pelo estudante para esta questão';
$string['trackresult'] = 'Resultado';
$string['trackresult_help'] = 'Mostrar se o estudante digitou a resposta correta.';
$string['trackscoremax'] = 'A pontuação máxima';
$string['trackscoremax_help'] = 'O valor máximo no intervalo para o resultado bruto';
$string['trackscoremin'] = 'Pontuação mínima';
$string['trackscoremin_help'] = 'O valor mínimo no intervalo para o resultado bruto';
$string['trackscoreraw'] = 'Resultado bruto';
$string['trackscoreraw_help'] = 'Número que mostra o desempenho do estudante em relação ao intervalo delimitado pelos valores de min e max';
$string['tracksuspenddata'] = 'Suspender dados';
$string['tracksuspenddata_help'] = 'Fornece espaço para armazenar e recuperar dados entre as sessões de estudante';
$string['tracktime'] = 'Tempo';
$string['tracktime_help'] = 'Hora na qual a tentativa foi iniciada';
$string['tracktype'] = 'Tipo';
$string['tracktype_help'] = 'Tipo de questão, por exemplo, "escolha" ou "SHORTANSWER".';
$string['trackweight'] = 'Peso';
$string['trackweight_help'] = 'Peso atribuído ao elemento';
$string['type'] = 'Tipo';
$string['typeaiccurl'] = 'URL AICC externa';
$string['typeexternal'] = 'Manifesto SCORM externo';
$string['typelocal'] = 'Pacote enviado';
$string['typelocalsync'] = 'Pacote baixado';
$string['undercontent'] = 'Abaixo do conteúdo';
$string['unziperror'] = 'Um erro acontece durante o unzip do pacote';
$string['updatefreq'] = 'Frequência de auto-atualização';
$string['updatefreq_error'] = 'A freqüência de atualização automática pode ser definido apenas quando o arquivo do pacote está hospedado externamente';
$string['updatefreq_help'] = 'Esta ação permite que pacotes externos sejam automaticamente baixados e enviados';
$string['updatefreqdesc'] = 'Esta opção define a frequência padrão de atualização automática de uma atividade';
$string['validateascorm'] = 'Convalidar pacote';
$string['validation'] = 'Resultado da convalidação';
$string['validationtype'] = 'Esta preferência define a biblioteca DOMXML usada para validar o manifesto SCORM. Se você não tem certeza sobre o que fazer, mantenha a escolha atual.';
$string['value'] = 'Valor';
$string['versionwarning'] = 'A versão do manifesto é anterior à 1.3, atenção ao tag {$a->tag}';
$string['viewallreports'] = 'Ver relatório de {$a} tentativas';
$string['viewalluserreports'] = 'Ver relatórios de {$a} usuários';
$string['whatgrade'] = 'Tentativas avaliadas';
$string['whatgrade_help'] = 'Se múltiplas tentativas forem permitidas, esta configuração define se a maior, média (média), primeira ou última tentativa concluída é registrada no livro de notas. A opção da última tentativa concluída não inclui tentativas com status de \'falha\'.

Observações sobre a utilização de tentativas múltiplas:

* A opção de iniciar uma nova tentativa é fornecida por uma caixa de seleção acima do botão Entrar na página de estrutura de conteúdo, portanto, certifique-se de fornecer acesso a essa página se quiser permitir mais de uma tentativa.
* Alguns pacotes SCORM são inteligentes sobre novas tentativas, muitos não. Isso significa que, se o estudante reingressar em uma tentativa existente, se o conteúdo SCORM não tiver lógica interna para evitar a substituição de tentativas anteriores, elas podem ser substituídas, mesmo que a tentativa tenha sido \'concluída\' ou \'aprovada\'.
* As configurações "Forçar conclusão", "Forçar nova tentativa" e "Bloquear após tentativa final" também fornecem gerenciamento adicional de várias tentativas.';
$string['whatgradedesc'] = 'Se a mais alta, a média (mediana), primeira ou a última tentativa é gravada no livro de notas se múltiplas tentativas são permitidas.';
$string['width'] = 'Largura';
$string['window'] = 'Frame/Janela';
$string['youmustselectastatus'] = 'Você deve selecionar um status requerido';
