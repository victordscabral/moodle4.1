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
 * Strings for component 'tool_brickfield', language 'pt_br', version '4.1'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Acessibilidade';
$string['accessibilitydisabled'] = 'O kit de ferramentas de acessibilidade Brickfield não está habilitado neste site. Entre em contato com o administrador do site para habilitar.';
$string['accessibilityreport'] = 'Kit de ferramentas de acessibilidade';
$string['accessibilitytool'] = 'Ferramenta de acessibilidade Brickfield';
$string['accessibilitytools'] = 'Ferramentas de acessibilidade Brickfield';
$string['activate'] = 'Ativar';
$string['activated'] = 'O plugin está ativado e pronto para uso.';
$string['activationform'] = 'Registro Brickfield';
$string['activationheader'] = 'Ativação Brickfield';
$string['activationinfo'] = '<p>Para usar esse plugin, você precisa forneer chaves válidas para o site nesse formulário.</p>
<p>Por favor, <a href="{$a}" data-action="send_info" target="_blank">registre-se no Brickfield Portal (abre em uma nova janela)</a> para receber essas chaves caso você ainda não tenha.</p><p>Uma vez ativadas, suas chaves serão validadas por uma tarefa agendada do cron.</p>';
$string['activityresults:pluginname'] = 'Relatório de ferramenta de acessibilidade de detalhamento de atividades';
$string['activityresults:toolname'] = 'Resumo de detalhamento da atividade';
$string['activityresults:toolshortname'] = 'Detalhamento da atividade';
$string['advanced:pluginname'] = 'Relatório avançado da ferramenta de acessibilidade';
$string['advanced:toolname'] = 'Resumo avançado';
$string['advanced:toolshortname'] = 'Avançado';
$string['allcourses'] = 'Todos os cursos revisados ({$a})';
$string['allcoursescat'] = 'Todos os cursos revisados por categoria {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'Por solicitação';
$string['analysis:disabled'] = 'Desabilitado';
$string['analysistype'] = 'Habilitar pedidos de análise';
$string['analysistype_desc'] = 'Permitir que análises de conteúdos sejam solicitadas';
$string['analysistypedisabled'] = 'A análise de conteúdo está desabilitada';
$string['bannercontentone'] = 'O Enterprise Accessibility Toolkit tem um conjunto completo de recursos para ajudar sua organização a melhorar a acessibilidade de seus cursos. <a href="{$a}">Entre em contato com o Brickfield Education Labs</a> para agendar uma demonstração gratuita dos recursos avançados.';
$string['bannerheadingone'] = 'Atualizar o Kit de Ferramentas de Acessibilidade para Enterprise';
$string['batch'] = 'Limite de carga';
$string['brickfield'] = 'Kit de ferramentas Brickfield';
$string['brickfield:viewcoursetools'] = 'Ver relatórios por cursos';
$string['brickfield:viewsystemtools'] = 'Ver relatórios para todos os cursos';
$string['bulkprocesscaches'] = 'Processar cache em massa';
$string['bulkprocesscourses'] = 'Processar carga de verificação de acessibilidade em massa';
$string['buttonone'] = 'Obter uma demonstração grátis';
$string['cachepending'] = 'Os dados resumidos estão sendo compilados';
$string['checkdesc:alinksdontopennewwindow'] = 'Os links que abrem em uma nova janela devem avisar os usuários com antecedência.';
$string['checkdesc:amustcontaintext'] = 'Um link precisa conter texto para ser perceptível.';
$string['checkdesc:areadontopennewwindow'] = 'Áreas usadas em mapas de imagem que abrem uma nova janela devem avisar os usuários com antecedência.';
$string['checkdesc:asuspiciouslinktext'] = 'O texto do link deve ser descritivo e fornecer contexto sobre seu destino.';
$string['checkdesc:basefontisnotused'] = 'Os elementos Basefont (tradicionalmente usados para formatação) não são acessíveis e não devem ser usados.';
$string['checkdesc:blinkisnotused'] = 'Os elementos blink, que piscam e apagam, não são acessíveis e não devem ser usados.';
$string['checkdesc:boldisnotused'] = 'Para negrito, o elemento (b) não deve ser usado; "strong" deve ser usado em seu lugar.';
$string['checkdesc:contenttoolong'] = 'O tamanho total do conteúdo da página não deve exceder 500 palavras.';
$string['checkdesc:csstexthascontrast'] = 'O contraste entre a cor do texto e do fundo é muito baixo.';
$string['checkdesc:embedhasassociatednoembed'] = 'Os elementos incorporados (para incorporar multimídia) devem ter seus elementos "noembed" correspondentes.';
$string['checkdesc:headerh3'] = 'Os cabeçalhos após os cabeçalhos H3 (a opção de cabeçalho grande do editor) não devem quebrar a hierarquia dos cabeçalhos da página.';
$string['checkdesc:headershavetext'] = 'Um cabeçalho precisa conter texto para ser perceptível.';
$string['checkdesc:iisnotused'] = 'Para itálico, o elemento (i) não deve ser usado; "strong" deve ser usado em seu lugar.';
$string['checkdesc:imgaltisdifferent'] = 'O texto alt (alternativo) da imagem não deve ser o nome do arquivo da imagem.';
$string['checkdesc:imgaltistoolong'] = 'O texto alt (alternativo) da imagem não deve ter mais do que o máximo permitido (125) caracteres.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'O texto alt (alternativo) da imagem não deve estar vazio, especialmente quando a imagem tem um link para outro lugar.';
$string['checkdesc:imgaltnotplaceholder'] = 'O texto alt (alternativo) da imagem não deve ser um simples texto de espaço reservado, como "imagem".';
$string['checkdesc:imghasalt'] = 'O texto ali (alternativo) da imagem não deve faltar nos elementos da imagem, a menos que seja puramente decorativo sem nenhum significado.';
$string['checkdesc:imgwithmaphasusemap'] = 'Os mapeamentos na imagem, com áreas clicáveis, precisam combinar os elementos "usemap" e "map".';
$string['checkdesc:legendtextnotempty'] = 'Os elementos Legend, usados para legendar os elementos fieldset, devem conter texto.';
$string['checkdesc:marqueeisnotused'] = 'Os elementos Marquee (rolagem automática) não são acessíveis e não devem ser usados.';
$string['checkdesc:noheadings'] = 'A ausência de cabeçalhos torna o conteúdo menos estruturado e mais difícil de ler.';
$string['checkdesc:objectmusthaveembed'] = 'Os elementos Object (para incorporar recursos externos) devem ter seus elementos "incorporados" correspondentes.';
$string['checkdesc:objectmusthavevalidtitle'] = 'Os elementos objeto (para incorporar recursos externos) devem ter "títulos" correspondentes com texto.';
$string['checkdesc:tabledatashouldhaveth'] = 'O ideal é que as tabelas tenham cabeçalhos';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Os elementos Summaries e captions das tabelas não devem ser idênticos.';
$string['checkdesc:tabletdshouldnotmerge'] = 'O ideal é que as tabelas não tenham células mescladas.';
$string['checkdesc:tablethshouldhavescope'] = 'Os escopos de linha ou coluna da tabela (usados para mapear linha e coluna para cada célula) devem ser declarados.';
$string['checkscompleted'] = 'Verificações concluídas: {$a}';
$string['checktype'] = 'Verificar grupo';
$string['checktype:form'] = 'Formulário';
$string['checktype:image'] = 'Imagem';
$string['checktype:layout'] = 'Layout';
$string['checktype:link'] = 'Link';
$string['checktype:media'] = 'Mídia';
$string['checktype:table'] = 'Tabela';
$string['checktype:text'] = 'Texto';
$string['checktyperesults:pluginname'] = 'Relatório da ferramenta de acessibilidade de tipos de conteúdo';
$string['checktyperesults:toolname'] = 'Resumo dos tipos de conteúdo';
$string['checktyperesults:toolshortname'] = 'Tipos de conteúdo';
$string['cmpercent'] = 'Porcentagem de erros em geral';
$string['cmpercenterrors'] = 'Porcentagem de erros em geral';
$string['confirmationmessage'] = 'Este curso foi agendado para análise. A análise será concluída o mais cedo possível por {$a}. Verifique novamente depois disso.';
$string['contactadmin'] = 'Entre em contato com seu administrador para concluir o registro.';
$string['contactus'] = 'Contate-nos';
$string['contentfive'] = 'Corrijir automaticamente tags HTML desatualizadas.';
$string['contentfour'] = 'Identificar quais atividades têm mais problemas de acessibilidade para priorizar o esforço.';
$string['contentone'] = 'Avaliar automaticamente o conteúdo e as avaliações do seu curso relacionadas à problemas de acessibilidade.';
$string['contentsix'] = 'Fornecer aos professores dicas <em>just in time</em> para criar um conteúdo melhor.';
$string['contentthree'] = 'Fornecer aos seus estudantes conteúdo em formatos acessíveis, incluindo Áudio, ePub e Braille Eletrônico.';
$string['contenttypeerrors'] = 'Total de resultados de testes de conteúdo de atividade por curso e por tipo de conteúdo.';
$string['contentyperesults'] = 'Total de aprovado/reprovado para áreas de conteúdo por curso.';
$string['contextid'] = 'Contextid';
$string['core_course'] = 'Curso';
$string['core_question'] = 'Bancos de Questão';
$string['count'] = 'Contagem';
$string['country'] = 'País';
$string['country_help'] = 'País do site';
$string['coursecount'] = 'Número de cursos';
$string['deletehistoricaldata'] = 'Excluir histórico dos resultados de verificações';
$string['dependency'] = 'Dependente de';
$string['emptycategory'] = 'Nenhum curso encontrado para a categoria {$a}';
$string['emptytagcourses'] = 'Nenhum resultado encontrado para cursos com as tags configuradas';
$string['enableaccessibilitytools'] = 'Habilitar ferramentas de acessibilidade';
$string['enableaccessibilitytools_desc'] = 'O kit de ferramentas de acessibilidade ajuda a identificar problemas de acessibilidade nos cursos.';
$string['error:nocoursespecified'] = 'O relatório resumido requer um ID de curso válido. Acesse o kit de ferramentas de acessibilidade de dentro de um curso.';
$string['errorlink'] = 'Editar instância de erro para {$a}';
$string['errors'] = 'Erros: {$a}';
$string['errors:pluginname'] = 'Lista de erro da ferramenta de acessibilidade';
$string['errors:toolname'] = 'Resumo da lista de erro';
$string['errors:toolshortname'] = 'Listar erro';
$string['eventanalysis_requested'] = 'Análise de conteúdo solicitada';
$string['eventanalysis_requesteddesc'] = 'Análise de conteúdo foi solicitada para o curso {$a}.';
$string['eventreport_downloaded'] = 'Resumo de acessibilidade baixado';
$string['eventreport_downloadeddesc'] = 'O resumo de acessibilidade foi baixado para o curso  com ID {$a}.';
$string['eventreport_viewed'] = 'Relatório de acessibilidade visualizado';
$string['eventreport_vieweddesc'] = 'O relatório de acessibilidade foi visualizado para o curso de id {$a->course}, categoria de id {$a->category}, guia {$a->tab}.';
$string['failed'] = 'Falhou';
$string['failedcount'] = 'Falhou: {$a}';
$string['footerheading'] = 'Seção Rodapé';
$string['fullcachedone'] = 'Desativar o cache para executar novamente';
$string['hashcorrect'] = 'O código inserido está correto.';
$string['hashincorrect'] = 'O código inserido está incorreto.';
$string['headingfive'] = 'Correções de HTML';
$string['headingfour'] = 'Concentrar o esforço';
$string['headingone'] = 'Avaliar o conteúdo';
$string['headingsix'] = 'Suporte de desempenho';
$string['headingthree'] = 'Formatos de arquivo acessíveis';
$string['headingtwo'] = 'Correção';
$string['hideshow'] = 'Ocultar/mostrar';
$string['inactive'] = 'O plugin está inativo e não pode ser usado. Insira chaves de registro válidas e pressione "Ativar".';
$string['innercontextid'] = 'ID de contexto interno';
$string['installed'] = 'Plugin instalado';
$string['installedcli'] = 'Plugin instalado via linha de comando';
$string['installeddescription'] = 'O plugin foi instalado, redirecionar para o formulário de ativação.';
$string['invalidaccessibilitytool'] = 'Subplugin de acessibilidade inválido solicitado.';
$string['invalidcategoryid'] = 'Categoria inválida, verifique sua entrada';
$string['invalidcourseid'] = 'Curso inválido, verifique sua entrada';
$string['invalidlinkphrases'] = 'clique|clique aqui|aqui|mais|mais aqui|informação| informação aqui|informações|informações aqui|leia mais| leia mais aqui|mais informações|mais informações aqui|mais detalhes|mais detalhes aqui';
$string['language'] = 'Idioma';
$string['language_help'] = 'Idioma do site';
$string['messageprovider:warningcheckid'] = 'Aviso de checkids inválidos';
$string['mobileservice'] = 'Serviços móveis habilitados ({$a})';
$string['module'] = 'Módulo';
$string['modulename'] = 'Nome';
$string['moreinfo'] = 'Mais informação';
$string['noerrorsfound'] = 'Nenhum erro comum de acessibilidade foi encontrado para seus parâmetros de pesquisa. Parabéns!';
$string['norecords'] = 'Nenhum registro relevante foi encontrado para seus parâmetros de pesquisa.';
$string['notregistered'] = 'Seu kit de ferramentas de acessibilidade precisa ser registrado.';
$string['notvalidated'] = 'Seu kit de ferramentas de acessibilidade está funcionando enquanto é validado.';
$string['numcourses'] = 'Número de cursos ({$a})';
$string['numfactivities'] = 'Número de atividades ({$a})';
$string['numfiles'] = 'Número de arquivos ({$a})';
$string['numinstances'] = 'Número de instâncias ({$a})';
$string['numusers'] = 'Número de usuários ({$a})';
$string['pagedesc:checktype'] = '<p>Para resumir e analisar os resultados das várias verificações realizadas, agrupamos essas verificações em diferentes tipos de conteúdo. Portanto, todos os resultados de verificação de acessibilidade relacionados a imagens estão no grupo de tipo de conteúdo "Imagem", todos os resultados de verificação de acessibilidade relacionados a layout estão no grupo de tipo de conteúdo "Layout" e assim por diante.</p><p>As atividades estão incluídas como atividades, recursos ou áreas de conteúdo relacionadas aos próprios cursos.</p><p>A página do gráfico de tipo de conteúdo exibe a divisão de erros por grupo de tipo de conteúdo: Imagem, Layout, Link, Mídia, Tabela e Texto.</ p>';
$string['pagedesctitle:checktype'] = 'Explicação dos tipos de conteúdo';
$string['pagedesctitle:pertarget'] = 'Explicação do detalhamento da atividade';
$string['passed'] = 'Aprovado';
$string['passedcount'] = 'Aprovado: {$a}';
$string['passrate'] = 'Taxa de aprovação: {$a}%';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';
$string['percheckerrors'] = 'Número de testes específicos e erros por verificação por curso.';
$string['perpage'] = 'Itens para mostrar por página';
$string['pluginname'] = 'Kit de ferramentas de acessibilidade';
$string['printable:downloadpdf'] = 'Baixar PDF';
$string['printable:pluginname'] = 'Relatório de resumo da ferramenta de acessibilidade';
$string['printable:printreport'] = 'Relatório para impressão';
$string['printable:toolname'] = 'Relatório de resumo';
$string['printable:toolshortname'] = 'Relatório de resumo';
$string['privacy:metadata'] = 'O plugin de relatório Verificações de acessibilidade não armazena nenhum dado pessoal.';
$string['processanalysisrequests'] = 'Processar solicitações de análise de conteúdo';
$string['registernow'] = 'Por favor, registre agora.';
$string['registration'] = 'Formulário de registro';
$string['registrationinfo'] = '<p>Este processo de registro permite que você use a versão inicial do kit de ferramentas de acessibilidade Brickfield para seu site Moodle registrado.</p><p>Este uso está sujeito aos <a href="{$a}" target="_blank" >Termos e condições do Brickfield Education Labs (abre em uma nova janela)</a> e com os quais você concorda ao usar este produto.</p>';
$string['release'] = 'Moodle release ({$a})';
$string['remaining'] = '({$a} erros restantes)';
$string['response:0'] = 'Este URL não aponta para lugar nenhum';
$string['response:404'] = 'Esta página URL não foi encontrada';
$string['schedule:blocknotscheduled'] = '<p>Este curso ainda não foi agendado para análise para encontrar problemas comuns de acessibilidade.</p>';
$string['schedule:notscheduled'] = '<p>Este curso ainda não foi agendado para análise para encontrar problemas comuns de acessibilidade.</p><p>Ao clicar no botão "Enviar para análise", você confirma que deseja que todo o conteúdo HTML relevante do curso, como descrições de seções do curso, descrições de atividades, questões, páginas e muito mais, sejam agendados para análise.</p><p>Essa análise realizará várias verificações comuns de acessibilidade no conteúdo HTML de seu curso e esses resultados serão exibidos nas páginas de relatório do kit de ferramentas de acessibilidade. A análise será processada em segundo plano, por tarefas agendadas, de modo que sua velocidade de conclusão dependerá dos horários e agendamento de execução da tarefa.</p>';
$string['schedule:requestanalysis'] = 'Submeter para análise';
$string['schedule:scheduled'] = 'O curso foi agendado para análise.';
$string['schedule:sitenotscheduled'] = '<p>O conteúdo global (independente do curso) ainda não foi agendado para análise para encontrar problemas comuns de acessibilidade.</p><p>Ao clicar no botão "Enviar para análise", você confirma que deseja que todo conteúdo global (independente do curso)  seja agendado para análise.</p> <p>Essa análise realizará várias verificações comuns de acessibilidade no conteúdo HTML de seu curso e esses resultados serão exibidos nas páginas de relatório do kit de ferramentas de acessibilidade. A análise será processada em segundo plano, por tarefas agendadas, de modo que sua velocidade de conclusão dependerá dos horários e agendamento de execução da tarefa.</p>';
$string['schedule:sitescheduled'] = 'O conteúdo global (independente do curso) foi agendado para análise.';
$string['secretkey'] = 'API key';
$string['secretkey_help'] = 'Este código é o recebido por email após o registro.';
$string['sendfollowinginfo'] = '<p>As informações a seguir serão enviadas periodicamente para contribuir apenas com as estatísticas gerais. Não serão públicadas em nenhuma listagem central.</p> {$a}';
$string['settings'] = 'Configurações do kit de ferramentas de acessibilidade';
$string['sitehash'] = 'Secret key';
$string['sitehash_help'] = 'Este código é recebido por email após o registro.';
$string['taberrors'] = 'Verificar erros';
$string['targetavetitle'] = 'Média de erros por atividades';
$string['targetpercentage'] = 'Porcentagem de instâncias aprovadas/reprovadas por atividade';
$string['tblcheck'] = 'Verificar';
$string['tblcheckexample'] = 'Exemplo';
$string['tblcheckfailed'] = 'Verificações com falha';
$string['tblchecksummary'] = 'Resumo';
$string['tbledit'] = 'Editar';
$string['tblerrorcount'] = 'Erros';
$string['tblhtmlcode'] = 'Código HTML existente';
$string['tblinstance'] = 'Instância';
$string['tblline'] = 'Linha';
$string['tblpercentage'] = 'Porcentagem';
$string['tblpreview'] = 'Previsualizar';
$string['tbltarget'] = 'Atividade';
$string['tblupdateto'] = 'Atualizar para';
$string['titleactivityresultsall'] = 'Resultados por atividade: todos os cursos revisados ({$a->count} cursos)';
$string['titleactivityresultspartial'] = 'Resultados por atividade: curso {$a->name}';
$string['titleall'] = 'Detalhes do erro: todos os cursos revisados ({$a->count} cursos)';
$string['titlechecktyperesultsall'] = 'Resultados por tipo de conteúdo: todos os cursos avaliados ({$a->count} cursos)';
$string['titlechecktyperesultspartial'] = 'Resultados por tipo de conteúdo: curso {$a->name}';
$string['titleerrorsall'] = 'Detalhes do erro: todos os cursos revisados ({$a->count} cursos)';
$string['titleerrorscount'] = 'Detalhes do erro: (mostrando os {$a}  primeiros erros)';
$string['titleerrorspartial'] = 'Detalhes do erro: curso {$a->name}';
$string['titlepartial'] = 'Detalhes do erro: curso {$a->name}';
$string['titleprintableall'] = 'Curso {$a->name}';
$string['titleprintablepartial'] = 'Curso {$a->name}';
$string['tools'] = 'Relatórios';
$string['toperrors'] = 'Principais erros';
$string['toptargets'] = 'Atividades com falha';
$string['totalactivities'] = 'Total de atividades';
$string['totalactivitiescount'] = 'Total de atividades:  {$a}';
$string['totalerrors'] = 'Total de erros';
$string['totalgrouperrors'] = 'Total (soma) de erros por tipo de conteúdo';
$string['updatesummarydata'] = 'Atualizar dados de resumo do site';
$string['usersmobileregistered'] = 'Número de usuários com dispositivos móveis registrados ({$a})';
$string['validationerror'] = 'A validação da chave de registro falhou. Verifique se o URL e as chaves do seu site registrado estão corretos.';
$string['warningcheckidbody'] = 'Há um problema com uma verificação Brickfield que está ativa, mas não listada no banco de dados. Investigue por favor.';
$string['warningcheckidsubject'] = 'Aviso de checkID do Brickfield Toolkit';
