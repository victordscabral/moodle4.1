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
 * Strings for component 'plagiarism_compilatio', language 'pt_br', version '4.1'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_title'] = 'Sua conta Compilatio expira em breve';
$string['activate_compilatio'] = 'Habilitar Compilatio';
$string['activate_submissiondraft'] = 'Para que os estudantes possam analisar seus rascunhos, você deve habilitar a opção <b>{$a}</b> na seção';
$string['admin_account_expire_content'] = 'Sua assinatura atual terminará no final do mês corrente. Se seu contrato não expirar no final do mês, uma nova assinatura será automaticamente configurada por nossos serviços. Quando isto for feito, esta mensagem desaparecerá. Para maiores informações, você pode entrar em contato com nosso departamento de vendas ou suporte em support@compilatio.net.';
$string['admin_disabled_reports'] = 'O administrador não permite que os professores exibam os relatórios de similaridade com os estudantes.';
$string['admin_goto_helpcenter'] = 'Acesse o Centro de Ajuda Compilatio para ver os artigos relacionados à administração do plugin Moodle.';
$string['allow_search_tab'] = 'Ativar a ferramenta de busca para identificar o autor de um documento.';
$string['allow_search_tab_help'] = 'A ferramenta de busca permite que você procure o primeiro e último nome de um estudante com base em um identificador de documento visível nos relatórios de análise entre todos os documentos presentes em sua plataforma.';
$string['allow_student_analyses'] = 'Permitir que os professores habilitem a opção "Permitir que os estudantes analisem seus arquivos preliminares com o Compilatio Magister, antes do envio final ao professor".';
$string['allow_teachers_to_show_reports'] = 'Permitir que os professores mostrem relatórios de similaridade para seus estudantes';
$string['analysing'] = 'Documento de análise';
$string['analysis'] = 'Início da análise';
$string['analysis_completed'] = 'Análise concluída: {$a}% de semelhanças.';
$string['analysis_date'] = 'Data da análise (Somente análise programada)';
$string['analysis_help'] = '<p>Existem 2 opções possíveis:</p>
<ul>
	<li><strong>Manual: </strong>O documento é enviado à Compilatio mas o professor deve acionar manualmente a análise dos documentos.</li>
	<li><strong>Agendada: </strong>O documento é enviado à Compilatio e analisado na hora/data definida.</li>
</ul>
<p>Para permitir que todos os documentos sejam comparados entre si, aguarde até que todos os trabalhos sejam enviados pelos estudantes e então acione a análise.</p>';
$string['analysis_started'] = '{$a} foi solicitada uma análise.';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Agendada';
$string['analyze'] = 'Analisar';
$string['analyzing'] = 'Analisando';
$string['api_key_not_tested'] = 'Sua chave API não foi verificada porque a conexão ao Compilatio falhou.';
$string['api_key_not_valid'] = 'Sua chave API não é válida. Ela é específica para a plataforma utilizada. Você pode obtê-la contatando <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'Sua chave API é válida.';
$string['apiconfiguration'] = 'Configuração de API';
$string['assign_statistics'] = 'Estatísticas sobre atribuições';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Taxa média';
$string['average_similarities'] = 'Nesta atividade, a relação de similaridade média é de {$a}%.';
$string['badqualityanalysis'] = 'Foram encontrados problemas durante a análise do documento. É possível que certas fontes não tenham sido identificadas, ou que o resultado esteja incompleto.';
$string['compi_student_analyses'] = 'Permitir que os estudantes analisem seus documentos';
$string['compi_student_analyses_help'] = 'Isto permite que os estudantes analisem seus arquivos de rascunho com o Compilatio Magister, antes do envio final ao professor.';
$string['compilatio'] = 'Compilatio plagiarism plugin';
$string['compilatio:enable'] = 'Permitir que o professor habilite/desabilite o Compilatio dentro de uma atividade';
$string['compilatio:resetfile'] = 'Permitir que o professor envie novamente o arquivo à Compilatio após um erro';
$string['compilatio:triggeranalysis'] = 'Permitir que o professor acione manualmente a análise';
$string['compilatio:viewreport'] = 'Permitir que o professor veja o relatório completo do Compilatio';
$string['compilatio_author'] = 'O documento {$a->idcourt} na atividade <b>{$a->modulename}</b> pertence a <b>{$a->firstname} {$a->lastname}</b>.';
$string['compilatio_display_student_report'] = 'Mostrar relatório de similaridade com o estudante';
$string['compilatio_display_student_report_help'] = 'O relatório de similaridade fornece uma discriminação sobre quais partes da apresentação foram plagiadas e a localização das fontes detectadas.';
$string['compilatio_display_student_score'] = 'Mostrar similaridade com o estudante';
$string['compilatio_display_student_score_help'] = 'A pontuação de similaridade é a porcentagem da apresentação que foi comparada com outros conteúdos.';
$string['compilatio_help_assign'] = 'Mostrar ajuda sobre o plugin Compilatio';
$string['compilatio_iddocument'] = 'Identificar documento';
$string['compilatio_search'] = 'Busca';
$string['compilatio_search_help'] = 'Você pode encontrar o autor de um documento recuperando o identificador do documento a partir das fontes do relatório de análise. Exemplo: 1. seu documento: <b>1st5xfj2</b> - Atribuir_Nome(30)Nome_Copiado_Documento.odt.';
$string['compilatio_search_notfound'] = 'Nenhum documento foi encontrado para este identificador entre os documentos carregados em sua plataforma Moodle.';
$string['compilatio_search_tab'] = 'Encontre o autor de um documento.';
$string['compilatio_studentemail'] = 'Enviar email ao estudante';
$string['compilatio_studentemail_help'] = 'Isto enviará um email ao estudante quando um arquivo for processado para que ele saiba que um relatório está disponível.';
$string['compilatioapi'] = 'Endereço API Compilatio';
$string['compilatioapi_help'] = 'Este é o endereço do Compilatio API';
$string['compilatiodate'] = 'Data de ativação';
$string['compilatiodate_help'] = 'Clique em "Habilitar" se você quiser que esta configuração API seja ativada automaticamente em uma data desejada. Deixe a data em branco se quiser ativá-la de imediato.';
$string['compilatiodefaults'] = 'Padrões de Compilatio';
$string['compilatioenableplugin'] = 'Habilitar Compilatio para {$a}';
$string['compilatioexplain'] = 'Para mais informações sobre este plugin, veja: <href="http://www.compilatio.net/en/" target="_blank">compilatio.net</a>';
$string['compilatiopassword'] = 'Chave API';
$string['compilatiopassword_help'] = 'Código pessoal fornecido pela Compilatio para acessar a API';
$string['context'] = 'Contexto';
$string['cron_check'] = 'O CRON foi executado em {$a} pela última vez.';
$string['cron_check_never_called'] = 'O CRON nunca foi executado desde a ativação do plugin. Ele pode estar mal configurado em seu servidor.';
$string['cron_check_not_ok'] = 'Não foi executado na última hora.';
$string['cron_frequency'] = 'Parece ser executado a cada {$a} minuto.';
$string['cron_recommandation'] = 'Recomendamos utilizar um atraso inferior a 15 minutos entre cada execução do CRON.';
$string['defaults_desc'] = 'As seguintes configurações são os padrões definidos ao habilitar o Compilatio dentro de um Módulo de Atividade';
$string['defaultupdated'] = 'Valores padrão atualizados';
$string['disclaimer_data'] = 'Ao habilitar a Compilatio, você aceita o fato de que os dados sobre sua configuração Moodle serão coletados a fim de melhorar o suporte e a manutenção deste serviço.';
$string['display_notifications'] = 'Exibir notificações';
$string['display_stats'] = 'Mostrar estatísticas sobre esta atividade';
$string['documents_analyzed'] = '{$a->countAnalyzed} documento(s) de {$a->documentsCount} foram enviados e analisados.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} documento(s) entre {$a->greenThreshold}% e {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} documento(s) superior(es) a {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} documento(s) inferior(es) a {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} documento(s) está(ão) sendo analisado(s).';
$string['documents_failed'] = '{$a} documento(s) cuja(s) análise(s) não funcionou(aram) corretamente.';
$string['documents_in_queue'] = '{$a} documento(s) estão na fila para ser analisado(s).';
$string['documents_notfound'] = '{$a} documento(s) não foram encontrados.';
$string['documents_number'] = 'Documentos analisados';
$string['enable_javascript'] = 'Favor habilitar Javacript para ter uma melhor experiência com o Compilatio plugin.<br/>
 Aqui estão as <a href=\'http://www.enable-javascript.com/\' target=\'_blank\'>
 instruções de como habilitar o JavaScript em seu navegador da web</a>.';
$string['enable_mod_assign'] = 'Habilitar Compilatio para Tarefas';
$string['enable_mod_forum'] = 'Habilitar Compilatio para Forums';
$string['enable_mod_quiz'] = 'Habilitar Compilatio para Quiz';
$string['enable_mod_workshop'] = 'Habilitar Compilatio para Workshops';
$string['enabledandworking'] = 'O plugin Compilatio está habilitado e funcionando.';
$string['error'] = 'Erro';
$string['errors'] = 'Erros :';
$string['export_csv'] = 'Exportar dados sobre esta atividade para um arquivo CSV';
$string['export_global_csv'] = 'Clique aqui para exportar estes dados em formato CSV';
$string['export_raw_csv'] = 'Clique aqui para exportar dados brutos em formato CSV';
$string['failed'] = 'A análise deste documento não funcionou corretamente.';
$string['failedanalysis'] = 'A Compilatio não analisou seu documento:';
$string['failedanalysis_files'] = 'A análise do(s) seguinte(s) arquivo(s) não funcionou corretamente. Você pode reiniciar estas análises :';
$string['filename'] = 'Nome do arquivo';
$string['filereset'] = 'Um arquivo foi reinicializado para novo envio ao Compilatio';
$string['firstname'] = 'Primeiro nome';
$string['formapikey'] = 'Chave API';
$string['formcheck'] = 'Verifique';
$string['formdelete'] = 'Excluir';
$string['formenabled'] = 'Habilitado';
$string['formstartdate'] = 'Data de ativação';
$string['formurl'] = 'API url';
$string['get_scores'] = 'Recuperar pontuações de plágio da Compilatio';
$string['global_statistics'] = 'Estatísticas globais';
$string['global_statistics_description'] = 'Todos os dados dos documentos são enviados à Compilatio.';
$string['goto_compilatio_service_status'] = 'Veja o status dos serviços Compilatio.';
$string['goto_helpcenter'] = 'Clique no ponto de interrogação para abrir uma nova janela e conecte-se ao Centro de Ajuda Compilatio.';
$string['green_threshold'] = 'Verde até';
$string['help_compilatio_format_content'] = 'Compilatio trata da maioria dos formatos utilizados em processadores de texto e na Internet.
Os seguintes formatos são suportados :';
$string['helpcenter'] = 'Acesse o Centro de Ajuda Compilatio para o uso do plugin Compilatio no Moodle.';
$string['helpcenter_error'] = 'Não podemos conectá-lo automaticamente ao centro de ajuda. Por favor, tente novamente mais tarde ou vá diretamente para lá usando o seguinte link :';
$string['hide_area'] = 'Ocultar informações sobre a Compilatio';
$string['immediately'] = 'Imediatamente';
$string['indexed_document'] = 'Documento adicionado ao banco de dados de documentos de sua instituição. Seu conteúdo pode ser usado para detectar semelhanças com outros documentos.';
$string['indexing_state'] = 'Adicionar documentos ao banco de dados de documentos';
$string['indexing_state_help'] = 'Sim: Adicionar documentos no banco de dados de documentos. Estes documentos serão usados como material de comparação para análise futura.
Não: Os documentos não são adicionados no banco de documentos e não serão usados para comparações.';
$string['information_settings'] = 'Informações';
$string['lastname'] = 'Sobrenome';
$string['loading'] = 'Carregando, por favor, aguarde...';
$string['manual_analysis'] = 'A análise deste documento deve ser acionada manualmente.';
$string['manual_send_confirmation'] = '{$a} arquivo(s) foi(foram) submetido(s) à Compilatio.';
$string['max_attempts_reach_files'] = 'A análise foi interrompida para os seguintes arquivos. As análises foram enviadas demasiadas vezes, não se pode mais reiniciá-las:';
$string['max_file_size_allowed'] = 'Tamanho máximo do documento : <forte>{$a->Mo} MB</strong>';
$string['maximum'] = 'Taxa máxima';
$string['minimum'] = 'Taxa mínima';
$string['news_analysis_perturbated'] = 'Compilatio - Análise perturbada';
$string['news_incident'] = 'Compilatio incident';
$string['news_maintenance'] = 'Manutenção da Compilatio';
$string['news_update'] = 'Compilatio update';
$string['no_document_available_for_analysis'] = 'Nenhum documento estava disponível para análise';
$string['no_documents_available'] = 'Nenhum documento está disponível para análise nesta atividade.';
$string['no_statistics_yet'] = 'Nenhum documento foi analisado ainda.';
$string['not_analyzed'] = 'Os seguintes documentos não podem ser analisados :';
$string['not_analyzed_toolong'] = '{$a} documento(s) não foram analisados porque contêm demasiadas palavras.';
$string['not_analyzed_tooshort'] = '{$a} documento(s) não foi(foram) analisado(s) porque não contêm palavras suficientes.';
$string['not_analyzed_unextractable'] = '{$a} documento(s) não foram analisados porque seu conteúdo não pôde ser extraído.';
$string['not_analyzed_unsupported'] = '{$a} documento(s) não foi(foram) analisado(s) porque seu formato não é suportado.';
$string['not_indexed_document'] = 'Documento não adicionado ao banco de dados de documentos de sua instituição. Seu conteúdo não será usado para detectar semelhanças com outros documentos.';
$string['notfound'] = 'Este documento não foi encontrado. Favor entrar em contato com seu administrador de humor. Erro : documento não encontrado para esta chave API.';
$string['numeric_threshold'] = 'Limite deve ser um número.';
$string['orange_threshold'] = 'Laranja até';
$string['owner_file'] = 'GDPR e propriedade de documentos';
$string['owner_file_school'] = 'A escola é proprietária dos documentos';
$string['owner_file_school_details'] = 'Quando um estudante solicita a exclusão de todos os seus dados, os documentos e relatórios serão armazenados e estarão disponíveis para futura comparação com outros documentos. No final do contrato com a Compilatio, todos os dados pessoais de sua escola, incluindo documentos analisados, são apagados dentro dos prazos contratuais.';
$string['owner_file_student'] = 'O estudante é o único proprietário de seu documento';
$string['owner_file_student_details'] = 'Quando um estudante solicita a exclusão de todos os seus dados, seus documentos e relatórios serão excluídos do Moodle e do banco de dados de documentos Compilatio. Os documentos não estarão mais disponíveis para comparação com outros documentos.';
$string['pending'] = 'Este arquivo está pendente de submissão à Compilatio';
$string['pending_status'] = 'Pendente';
$string['planned'] = 'Planejado';
$string['plugin_disabled'] = 'O plugin não está habilitado na plataforma Moodle.';
$string['plugin_disabled_assign'] = 'O plugin não está habilitado para Tarefas.';
$string['plugin_disabled_forum'] = 'O plugin não está habilitado para Fóruns';
$string['plugin_disabled_quiz'] = 'O plugin não está habilitado para Questionário.';
$string['plugin_disabled_workshop'] = 'O plugin não está habilitado para Laboratórios de Avaliação.';
$string['plugin_enabled'] = 'O plugin é habilitado na plataforma Moodle.';
$string['plugin_enabled_assign'] = 'O plugin está habilitado para Tarefas.';
$string['plugin_enabled_forum'] = 'O plugin está habilitado para Fóruns.';
$string['plugin_enabled_quiz'] = 'O plugin está habilitado para Questionário.';
$string['plugin_enabled_workshop'] = 'O plugin está habilitado para Laboratórios de Avaliação.';
$string['pluginname'] = 'Compilatio plagiarism plugin';
$string['previouslysubmitted'] = 'Anteriormente enviado como';
$string['privacy:metadata:core_files'] = 'Arquivos anexados aos envios ou criados a partir de envios de texto on-line';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin é chamado pelo subsistema de plágio do Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Informações sobre os documentos no banco de dados Compilatio';
$string['privacy:metadata:external_compilatio_document:email_adress'] = 'O endereço de e-mail do usuário do Compilatio que enviou o arquivo - cuidado, este usuário é aquele vinculado à chave API do Compilatio da plataforma Moodle (portanto, geralmente é o administrador da plataforma)';
$string['privacy:metadata:external_compilatio_document:filename'] = 'O nome do envio';
$string['privacy:metadata:external_compilatio_document:firstname'] = 'O primeiro nome do usuário Compilatio que submeteu o arquivo - cuidado, este usuário é aquele ligado à chave API Compilatio da plataforma Moodle (portanto, geralmente é o administrador da plataforma)';
$string['privacy:metadata:external_compilatio_document:id'] = 'A identificação do envio armazenada no banco de dados Compilatio';
$string['privacy:metadata:external_compilatio_document:indexed'] = 'O estado de indexação do envio (se o envio pode ser utilizado para detectar semelhanças com outros documentos)';
$string['privacy:metadata:external_compilatio_document:lastname'] = 'O sobrenome do usuário Compilatio que enviou o arquivo - cuidado, este usuário é aquele vinculado à chave API Compilatio da plataforma Moodle (portanto, geralmente é o administrador da plataforma)';
$string['privacy:metadata:external_compilatio_document:upload_date'] = 'Data e hora em que o envio foi armazenado no banco de dados Compilatio';
$string['privacy:metadata:external_compilatio_document:user_id'] = 'O ID do usuário Compilatio que enviou o arquivo - cuidado, este usuário é aquele vinculado à chave API Compilatio da plataforma Moodle (portanto, geralmente é o administrador da plataforma)';
$string['privacy:metadata:external_compilatio_report'] = 'Informações sobre os relatórios no banco de dados Compilatio (somente se o documento tiver sido analisado)';
$string['privacy:metadata:external_compilatio_report:doc_id'] = 'A identificação do Compilatio do envio que foi analisado';
$string['privacy:metadata:external_compilatio_report:end'] = 'O carimbo da hora em que a análise terminou';
$string['privacy:metadata:external_compilatio_report:id'] = 'A identificação do relatório Compilatio';
$string['privacy:metadata:external_compilatio_report:plagiarism_percent'] = 'A pontuação de similaridade do envio';
$string['privacy:metadata:external_compilatio_report:start'] = 'Data e hora em que a análise começou';
$string['privacy:metadata:external_compilatio_report:state'] = 'O estado do envio (Analisado, Em fila, Timeout...)';
$string['privacy:metadata:external_compilatio_report:user_id'] = 'O ID do usuário Compilatio que enviou o arquivo - cuidado, este usuário é aquele vinculado à chave API Compilatio da plataforma Moodle (portanto, geralmente é o administrador da plataforma)';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informações sobre os envios carregados';
$string['privacy:metadata:plagiarism_compilatio_files:apiconfigid'] = 'O identificador da configuração da API com a qual a apresentação está ligada';
$string['privacy:metadata:plagiarism_compilatio_files:attempt'] = 'O número de vezes que o usuário tentou analisar seu envio';
$string['privacy:metadata:plagiarism_compilatio_files:cm'] = 'A identificação do módulo de curso onde o envio é armazenado';
$string['privacy:metadata:plagiarism_compilatio_files:errorresponse'] = 'A resposta caso ocorra um erro - na verdade, este campo não é mais utilizado e é automaticamente definido como \'NULL\'.';
$string['privacy:metadata:plagiarism_compilatio_files:externalid'] = 'A identificação do envio armazenada no banco de dados Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'O nome do envio (eventualmente auto-gerada)';
$string['privacy:metadata:plagiarism_compilatio_files:id'] = 'A identificação do envio armazenada no banco de dados Moodle';
$string['privacy:metadata:plagiarism_compilatio_files:idcourt'] = 'A breve identificação do envio armazenada no banco de dados Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:identifier'] = 'O conteúdo hash do envio';
$string['privacy:metadata:plagiarism_compilatio_files:recyclebinid'] = 'O identificador da lixeira, caso o módulo ou curso tenha sido colocado na lixeira';
$string['privacy:metadata:plagiarism_compilatio_files:reporturl'] = 'O relatório URL do envio';
$string['privacy:metadata:plagiarism_compilatio_files:similarityscore'] = 'A pontuação de similaridade do envio';
$string['privacy:metadata:plagiarism_compilatio_files:statuscode'] = 'O código de status da apresentação (Analisado, Em fila, Timeout...)';
$string['privacy:metadata:plagiarism_compilatio_files:timesubmitted'] = 'Data e hora em que o envio foi armazenado no banco de dados Moodle do plugin';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'O ID do usuário Moodle que fez o envio';
$string['processing_doc'] = 'A Compilatio está analisando este arquivo.';
$string['programmed_analysis_future'] = 'Os documentos serão analisados pela Compilatio em {$a}.';
$string['programmed_analysis_past'] = 'Os documentos foram enviados para análise à Compilatio em {$a}.';
$string['progress'] = 'Progresso :';
$string['queue'] = 'Fila';
$string['queued'] = 'O documento está agora em fila de espera e será analisado em breve pela Compilatio';
$string['quiz_help'] = 'Somente serão analisadas as questões de Dissertação cuja resposta contenha pelo menos {$a} palavras.';
$string['red_threshold'] = 'vermelho de outra forma';
$string['report'] = 'relatório';
$string['reset'] = 'Reinicialização';
$string['results'] = 'Resultados:';
$string['saved_config_failed'] = '<strong>A combinação chave de API e o endereço digitado é inválida. Compilatio está desativado, por favor tente novamente.<br/>
								A página <a href="autodiagnosis.php">auto diagnóstico</a> pode ajudá-lo a configurar este plugin.</strong><br/>
								Erro :';
$string['savedconfigsuccess'] = 'Configurações de plágio salvas';
$string['send_files'] = 'Carregar arquivos no Compilatio.net para detecção de plágio';
$string['showwhenclosed'] = 'Quando a atividade foi encerrada';
$string['similarities'] = 'Semelhanças';
$string['similarities_disclaimer'] = 'Você pode analisar as semelhanças nos documentos desta atividade com <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/>Cuidado: as semelhanças medidas durante a análise não significam necessariamente plágio. O relatório de análise ajuda a identificar se as semelhanças correspondem a uma citação adequada ou a um plágio.';
$string['similarity_percent'] = '% de semelhanças';
$string['start_analysis_in_progress'] = 'Lançamento das análises em andamento';
$string['start_analysis_title'] = 'Início da análise';
$string['startallcompilatioanalysis'] = 'Analisar todos os documentos';
$string['startanalysis'] = 'Iniciar análise';
$string['statistics_title'] = 'Estatísticas';
$string['stats_errors'] = 'Erros';
$string['stats_failed'] = 'As análises falharam';
$string['stats_notfound'] = 'Arquivo não encontrado';
$string['stats_toolong'] = 'O arquivo contém demasiadas palavras';
$string['stats_tooshort'] = 'O arquivo não contém palavras suficientes';
$string['stats_unextractable'] = 'O conteúdo do arquivo não pôde ser extraído';
$string['stats_unsupported'] = 'Formato do arquivo não suportado';
$string['student_analyze'] = 'Análise do estudante';
$string['student_help'] = 'Você pode analisar seu esboço com o Compilatio Magister, para medir as semelhanças no texto de seus arquivos.<br/>
O conteúdo de seu esboço não será utilizado pela Compilatio como material de comparação para análises futuras.<br/>
Seu professor, entretanto, terá acesso a este relatório de análise.';
$string['student_start_analyze'] = 'A análise pode ser iniciada pelo estudante';
$string['studentdisclosuredefault'] = 'Todos os arquivos carregados aqui serão enviados ao serviço de detecção de semelhanças Compilatio';
$string['studentemailcontent'] = 'O arquivo que você enviou para {$a->modulename} em {$a->coursename} foi agora processado pela ferramenta Plagiarismo Compilatio.
{$a->modulelink}';
$string['studentemailsubject'] = 'Arquivo processado pela Compilatio';
$string['students_disclosure'] = 'Divulgação ao estudante';
$string['students_disclosure_help'] = 'Este texto será exibido para todos os estudantes na página de carregamento de arquivos.';
$string['subscription_state'] = '<strong>Sua assinatura Compilatio.net expirará no final de {$a->end_date}. Este mês, você analisou o equivalente a {$a->used} documento(s) contendo menos de 5.000 palavras.</strong>';
$string['tabs_title_help'] = 'Ajuda';
$string['tabs_title_notifications'] = 'Notificações';
$string['tabs_title_stats'] = 'Estatísticas';
$string['teacher'] = 'Professor';
$string['thresholds_description'] = 'Indique o limite que você deseja utilizar, a fim de facilitar a busca do relatório de análise (% de semelhanças) :';
$string['thresholds_settings'] = 'Limites :';
$string['timesubmitted'] = 'Submetido à Compilatio em';
$string['toolarge'] = 'Este arquivo é muito grande para ser processado pela Compilatio. Tamanho máximo : {$a->Mo} MB';
$string['toolong'] = 'Este documento contém demasiadas palavras para ser analisado. Tamanho máximo : {$a} palavras';
$string['toolong_files'] = 'Os seguintes arquivos não podem ser analisados pela Compilatio porque contêm muitas palavras (Tamanho máximo : {$a} palavras) :';
$string['tooshort'] = 'Este documento não contém palavras suficientes para que a Compilatio possa processar. Tamanho mínimo : {$a} palavras';
$string['tooshort_files'] = 'Os seguintes arquivos não podem ser analisados pela Compilatio porque não contêm palavras suficientes (Tamanho mínimo : {$a} palavras) :';
$string['unextractable'] = 'O conteúdo deste documento não pôde ser extraído';
$string['unextractable_files'] = 'Os seguintes arquivos não podem ser analisados pela Compilatio porque seu conteúdo não pôde ser extraído:';
$string['unextractablefile'] = 'O texto em seu documento não pode ser extraído.';
$string['unknownlang'] = 'Cuidado, o idioma de algumas passagens deste documento não foi reconhecida.';
$string['unknownwarning'] = 'Ocorreu um erro ao tentar enviar este arquivo para a Compilatio';
$string['unsent_documents'] = 'Documento(s) não enviado(s)';
$string['unsent_documents_content'] = 'Esta atividade contém documento(s) não enviado(s) à Compilatio.';
$string['unsupported'] = 'Documento sem suporte';
$string['unsupported_files'] = 'Os seguintes arquivos não podem ser analisados pela Compilatio porque seu formato não é suportado :';
$string['unsupportedfiletype'] = 'Este tipo de arquivo não é suportado pela Compilatio';
$string['update_in_progress'] = 'Atualização de informações';
$string['update_meta'] = 'Executar as operações programadas da Compilatio';
$string['updatecompilatioresults'] = 'Atualize as informações';
$string['updated_analysis'] = 'Os resultados da análise de compilatio foram atualizados.';
$string['use_compilatio'] = 'Permitir a detecção de similaridade com Compilatio';
$string['waiting_time_content'] = 'Incluindo {$a->queue} na fila e {$a->analysis_time} de análise<br><br>Clique <a href=\'.../.../plagiarismo/compilatio/helpcenter.php?page=moodle-info-waiting&idgroupe=';
$string['waiting_time_content_help'] = '\' target=\'_blank\'>aqui</a> para ver as melhores práticas a seguir para otimizar o tempo de processamento das análises do Compilatio.';
$string['waiting_time_title'] = 'O tempo estimado de processamento para uma análise iniciada agora é';
$string['waitingforanalysis'] = 'Este arquivo será processado em {$a}';
$string['webservice_not_ok'] = 'O servidor não foi capaz de se conectar ao serviço web. Seu firewall pode estar bloqueando a conexão.';
$string['webservice_ok'] = 'O servidor é capaz de se conectar com o serviço web.';
$string['webservice_unreachable_content'] = 'Compilatio está atualmente indisponível. Pedimos desculpas pelo inconveniente.';
$string['webservice_unreachable_title'] = 'Compilatio não está disponível';
