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
 * Strings for component 'videotime', language 'pt_br', version '4.1'.
 *
 * @package     videotime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = 'Nome da Atividade';
$string['activity_name_help'] = 'Nome exibido no curso para esta atividade Video Time';
$string['albums'] = 'Álbuns';
$string['api_not_authenticated'] = 'API do Vimeo não autenticada';
$string['api_not_configured'] = 'API do Vimeo não está configurada';
$string['apply'] = 'Aplicar';
$string['authenticate_vimeo'] = 'Autenticar usando o Vímeo';
$string['authenticate_vimeo_success'] = 'Autenticação Vímeo realizada com sucesso. Agora você pode usar recursos que dependem da API do Vimeo.';
$string['authenticated'] = 'Autenticado';
$string['averageviewtime'] = 'Tempo médio de visualização';
$string['browsevideos'] = 'Procurar vídeos';
$string['choose_video'] = 'Escolher vídeos';
$string['choose_video_confirm'] = 'Tem certeza que deseja escolher este vídeo?';
$string['cleanupalbumsandtags'] = 'Limpar álbuns e tags';
$string['client_id'] = 'ID do Cliente Vimeo';
$string['client_id_help'] = 'O ID do cliente é gerado quando você cria um "Aplicativo" em sua conta do Vimeo. Vá para https://developer.vimeo.com/apps/new para iniciar este processo.';
$string['client_secret'] = 'Chave secreta do Cliente Vimeo';
$string['client_secret_help'] = 'A chave secreta é gerada quando você cria um "Aplicativo" em sua conta do Vimeo. Acesse https://developer.vimeo.com/apps/new para iniciar este processo.';
$string['columns'] = 'Colunas';
$string['columns_help'] = 'Escolha a largura deste vídeo quando exibido no modo de pré-visualização. O número de colunas é quantos vídeos podem ser exibidos em uma linha.';
$string['completion_hide_detail'] = 'Esconder detalhes de conclusão';
$string['completion_on_finish'] = 'Conclusão no final do vídeo';
$string['completion_on_percent'] = 'Conclusão por meio de porcentagem';
$string['completion_on_percent_value'] = 'Valor do percentual de visualização para conclusão';
$string['completion_on_view'] = 'Tempo de visualização para conclusão';
$string['completion_on_view_seconds'] = 'Tempo em segundos de visualização para conclusão';
$string['completiondetail:_on_finish'] = 'Vídeo terminado';
$string['completiondetail:_on_percent'] = 'Assistido {$a} porcento';
$string['completiondetail:_on_view_time'] = 'Visto por {$a}';
$string['configure_vimeo_first'] = 'Você deve configurar o aplicativo Vimeo antes de se autenticar.';
$string['configure_vimeo_help'] = '<ol><li>Vá para <a href="https://developer.vimeo.com/apps/new">https://developer.vimeo.com/apps/new</a>  e realize login com sua conta Vímeo</li>
<li>Digite a descrição de seu aplicativo. Examplo: Video Time - API Repositório</li>
<li>Certifique-se de que a caixa de seleção "Não. As únicas contas do Vimeo que terão acesso ao aplicativo são minhas "está selecionada</li>
<li>Aceite as condições de serviços do Vimeo e clique em  "Criar App"</li>
<li>Agora você deve ser levado para o seu novo aplicativo</li>
<li>Clique em  "Editar Configurações"</li>
<li>Insira uma descrição do aplicativo, que será exibida aos administradores durante a autenticação com o Vimeo</li>
<li>Insira o URL do aplicativo, ele deve ser definido como <b>{$a->redirect_url}</b></li>
<li>Clique em "Atualizar"</li>
<li>Adicione um URL de retorno, ele deve ser definido como <b>{$a->redirect_url}</b></li>
<li>Copie o identificador do cliente (próximo ao topo) e a chave secreta do cliente (Gerenciar chaves do aplicativo)</li>
<li>Insira o Id do Cliente e a Chave Secreta <a href="{$a->configure_url}">aqui</a></li></ol>';
$string['confirmation'] = 'Confirmação';
$string['create_vimeo_app'] = 'Criar Aplicativo Vimeo';
$string['currentwatchtime'] = 'Tempo de exibição atual';
$string['datasource:videotime_sessions_data_source'] = 'Sessões de Vídeo';
$string['datasource:videotime_stats_data_source'] = 'Estatísticas de tempo de vídeo';
$string['default'] = 'Padrão';
$string['deletesessiondata'] = 'Excluir informações de sessão';
$string['discover_videos'] = 'Descobrir vídeos do Vimeo';
$string['discovering_videos'] = 'Descobrindo {$a->count} vídeos';
$string['display_options'] = 'Mostrar opções';
$string['done'] = 'Feito';
$string['duration'] = 'Duração';
$string['embed_options'] = 'Opções de incorporação';
$string['embed_options_defaults'] = 'Opções de incorporação padrão';
$string['embeds'] = 'Incorporações';
$string['estimated_request_time'] = 'Tempo restante estimado';
$string['firstsession'] = 'Primeira sessão';
$string['force'] = 'Forçar configuração';
$string['force_help'] = 'Se marcado, este padrão irá substituir a configuração da instância.';
$string['goback'] = 'Voltar';
$string['gradeitemnotcreatedyet'] = 'Não existe um item do livro de notas para esta atividade. Marque <b>Definir nota igual à porcentagem de visualização</b> acima, salve e edite esta atividade novamente para definir a categoria da nota e a nota de aprovação.';
$string['insert_video_metadata'] = 'Inserir metadados do vídeo (pode substituir as configurações de atividade)';
$string['invalid_session_state'] = 'Estado de sessão inválido.';
$string['label_mode'] = 'Modo de rótulo';
$string['lastsession'] = 'Última sessão';
$string['mode'] = 'Modo';
$string['mode_help'] = '<b>Modo normal</b>: exibeiro link de atividade padrão, sem extras na página do curso.<br>
<b>Modo de rótulo</b>: incorporar vídeo no layout do curso, semelhante à atividade de etiqueta.<br>
<b>Modo de imagem de pré-visualização</b>: Exibir uma imagem  miniatura do vídeo na página do curso com links para a atividade (somente Video Time Repository).';
$string['modulename'] = 'Video Time';
$string['modulename_help'] = 'A atividade Video Time Pro permite ao professor
<ul>
     <li>incorporar facilmente vídeos do Vimeo, apenas adicionando o url</li>
     <li>incorporar conteúdo acima e abaixo do player de vídeo</li>
     <li>Monitorar o tempo de visualização do usuário usando a conclusão da atividade</li>
     <li>Obter insights sobre o tempo de visualização de cada usuário</li>
     <li>Definir opções de incorporação padrão para o plugin</li>
     <li>Substituir as opções de incorporação das instâncias globalmente.</li>
</ul>

Estamos constantemente melhorando o plugin, portanto, fique atento para as próximas versões. Você pode ver no que estamos trabalhando e adicionar solicitações de recursos em nosso roteiro público em <a href="https://bdecent.de/products/videotimepro/roadmap"> https://bdecent.de/products/videotimepro/roadmap</a>.

Por favor, deixe-nos saber se você tem algum feedback.';
$string['modulenameplural'] = 'Instâncias Video Time';
$string['more'] = 'Mais';
$string['needs_authentication'] = 'Necessita de autenticação';
$string['next_activity'] = 'Próxima atividade';
$string['next_activity_auto'] = 'Automaticamente vá para a próxima atividade';
$string['next_activity_auto_help'] = 'Carregar automaticamente a próxima atividade quando o estudante terminar o vídeo.';
$string['next_activity_button'] = 'Habilitar botão de Próxima Atividade';
$string['next_activity_button_help'] = 'Exibir um botão acima do vídeo para a próxima atividade que o usuário deve concluir.';
$string['next_activity_in_course'] = 'Padrão: próxima atividade em curso';
$string['nocompletioncriteriaset'] = 'Nenhum critério de conclusão definido. Selecione os critérios abaixo.';
$string['normal_mode'] = 'Modo normal';
$string['not_authenticated'] = 'Não autenticado';
$string['of'] = 'de';
$string['option_autoplay'] = 'Reprodução automática';
$string['option_autoplay_help'] = 'Iniciar automaticamente a reprodução do vídeo. Observe que isso não funcionará em alguns dispositivos ou navegadores que possuem bloqueio.';
$string['option_byline'] = 'Assinatura';
$string['option_byline_help'] = 'Mostre a assinatura no vídeo.';
$string['option_color'] = 'Cor';
$string['option_color_help'] = 'Especifique a cor dos controles de vídeo. As cores podem ser substituídas pelas configurações de incorporação do vídeo.';
$string['option_forced'] = '{$a->option} é globalmente forçado a: {$a->value}';
$string['option_height'] = 'Altura';
$string['option_height_help'] = 'A altura exata do vídeo. O padrão é a altura da maior versão disponível do vídeo.';
$string['option_maxheight'] = 'Altura máxima';
$string['option_maxheight_help'] = 'Igual à altura, mas o vídeo não excederá o tamanho nativo do vídeo.';
$string['option_maxwidth'] = 'Largura máxima';
$string['option_maxwidth_help'] = 'Igual à largura, mas o vídeo não excederá o tamanho original do vídeo.';
$string['option_muted'] = 'Silenciado';
$string['option_muted_help'] = 'Silenciar este vídeo ao carregar. Necessário para reprodução automática em determinados navegadores.';
$string['option_playsinline'] = 'Reproduzir em linha';
$string['option_playsinline_help'] = 'Reproduza o vídeo em linha em dispositivos móveis, para ir automaticamente para tela cheia na reprodução, defina este parâmetro como false.';
$string['option_portrait'] = 'Retrato';
$string['option_portrait_help'] = 'Mostrar o retrato no vídeo';
$string['option_preventfastforwarding'] = 'Impedir avanço rápido';
$string['option_responsive'] = 'Responsivo';
$string['option_responsive_help'] = 'Se marcada, o player de vídeo será responsivo e se adaptará ao tamanho da página ou da tela.';
$string['option_speed'] = 'Velocidade';
$string['option_speed_help'] = 'Mostrar os controles de velocidade no menu de preferências e habilitar a taxa de reprodução API (disponível para contas PRO e Business).';
$string['option_title'] = 'Título';
$string['option_title_help'] = 'Mostrar o título no vídeo.';
$string['option_transparent'] = 'Transparente';
$string['option_transparent_help'] = 'O player responsivo e o fundo transparente são habilitados por padrão, para desabilitar defina este parâmetro como falso.';
$string['option_width'] = 'Largura';
$string['option_width_help'] = 'A largura exata do vídeo. O padrão é a largura da maior versão disponível do vídeo.';
$string['percentageofvideofinished'] = 'Percentual do vídeo finalizado';
$string['pluginadministration'] = 'Administração - Video Time';
$string['pluginname'] = 'Vídeo Time';
$string['preventfastforwarding'] = 'Impedir avanço rápido';
$string['preventfastforwarding_help'] = 'Impedir que o usuário avance o vídeo além do que ele tenha assistido.';
$string['preview_mode'] = 'Modo de imagem de pré-visualização';
$string['preview_picture'] = 'Imagem de Pré-visualização';
$string['preview_picture_help'] = 'Imagem exibida para o usuário.';
$string['preview_picture_linked'] = 'Imagem de pré-visualização vinculada';
$string['preview_picture_url'] = 'URL da Imagem de pré-visualização';
$string['privacy:metadata'] = 'O módulo de atividade Video Time não armazena nenhum dado pessoal.';
$string['process_videos'] = 'Processar videos';
$string['process_videos_help'] = 'Os vídeos serão processados por meio de tarefa agendada. Para contas maiores do Vimeo, pode levar algum tempo para processar totalmente todos os vídeos.';
$string['pull_from_vimeo'] = 'Extrair Metadados do Vimeo';
$string['pull_from_vimeo_invalid_videoid'] = 'Não foi possível determinar o ID do vídeo. Certifique-se de ter inserido um URL do Vimeo (exemplo: https://vimeo.com/635473456).';
$string['pull_from_vimeo_loading'] = 'Extraindo metadados do Vimeo ...';
$string['pull_from_vimeo_success'] = 'Os metadados foram extraídos com sucesso do Vimeo. Algumas das configurações da atividade foram substituídas.';
$string['rate_limit'] = 'Limite de solicitação da API Vimeo';
$string['refreshpage'] = 'Favor atualizar sua página para ver a atividade duplicada';
$string['results'] = 'resultados';
$string['resume_playback'] = 'Retomar a reprodução';
$string['resume_playback_help'] = 'Retomar o vídeo automaticamente quando o usuário retornar à atividade. A reprodução começa onde o usuário parou.';
$string['run_discovery_task'] = 'Execute esta tarefa "Descubra vídeos do Vimeo" para começar a extrair seus dados de vídeo. Caso contrário, você pode esperar até que ele seja executado automaticamente.';
$string['search:activity'] = 'Video Time - informações de atividade';
$string['search_help'] = 'Pesquisar nome, descrição, álbuns, tags ...';
$string['seconds'] = 'Segundos';
$string['session_not_found'] = 'Sessão do usuário não encontrada.';
$string['set_client_id_and_secret'] = 'Definir ID do cliente e Chave Secreta';
$string['settings'] = 'Configurações Video Time';
$string['setup_repository'] = 'Repositório de configuração';
$string['show_description'] = 'Mostrar descrição';
$string['show_duration'] = 'Mostrar duração';
$string['show_tags'] = 'Mostrar tags';
$string['show_title'] = 'Mostrar título';
$string['show_viewed_duration'] = 'Mostrar duração de visualização';
$string['showdescription'] = 'Mostrar descrição';
$string['showdescription_help'] = 'A descrição é exibida acima do vídeo e pode ser exibida na página do curso.';
$string['showing'] = 'Mostrando';
$string['state'] = 'Estado';
$string['state_finished'] = 'Finalizado';
$string['state_help'] = 'O usuário terminou o vídeo?';
$string['state_incomplete'] = 'Incompleto';
$string['status'] = 'Status';
$string['store_pictures'] = 'Armazenar miniaturas';
$string['store_pictures_help'] = 'Se habilitado, as miniaturas do Vimeo serão armazenadas localmente. Caso contrário, as imagens serão entregues externamente do Vimeo.';
$string['subplugintype_videotimeplugin'] = 'Video Time Plugin';
$string['subplugintype_videotimeplugin_plural'] = 'Video Time Plugins';
$string['tablealias_vt'] = 'Video Time';
$string['taskscheduled'] = 'Tarefa agendada para a próxima execução do cron';
$string['timestarted'] = 'Data de início';
$string['todo'] = 'Para Fazer';
$string['totaluniquevisitors'] = 'Total de usuários únicos';
$string['totalvideotime'] = 'Tempo total do vídeo: {$a->time}';
$string['totalviews'] = 'Total de Visualizações';
$string['totara_video_discovery_help'] = '<p>Você pode executar esta tarefa manualmente executando um comando CLI:</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\discover_videos</b></p>
<p>Caso contrário, você terá que esperar até que a tarefa agendada seja executada.</p>
<p>Você também pode executar o comando para obter as informações do álbum manualmente (em vez de esperar):</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\update_albums</b></p>';
$string['update_albums'] = 'Atualizar albuns de vídeos';
$string['upgrade_vimeo_account'] = 'AVISO: Considere atualizar sua conta do Vimeo. Seu limite de solicitação de API é muito baixo.';
$string['use'] = 'Usar';
$string['video_description'] = 'Anotações';
$string['video_description_help'] = 'Anotações são exibidas abaixo do vídeo';
$string['videocreated'] = 'Vídeo criado';
$string['videos_discovered'] = 'Vídeos descobertos';
$string['videos_processed'] = 'Vídeos processados';
$string['videotime:addinstance'] = 'Adicionar um novo módulo Video Time';
$string['videotime:view'] = 'Visualizar Video Time Vídeo';
$string['videotime:view_report'] = 'Visualizar relatório (Pro only)';
$string['videotimelink'] = 'Link';
$string['videotimeurl'] = 'URL';
$string['view_report'] = 'Ver relatório';
$string['viewpercentgrade'] = 'Definir a nota igual à porcentagem de visualização.';
$string['viewpercentgrade_help'] = 'Crie um item de nota para este vídeo. O estudante receberá uma nota igual à porcentagem de visualização do vídeo.';
$string['views'] = 'Visualizações';
$string['views_help'] = 'Número de vezes que a atividade foi visualizada.';
$string['vimeo_overview'] = 'Visão geral e configuração';
$string['vimeo_url'] = 'Vimeo URL';
$string['vimeo_url_help'] = 'URL completa do vídeo do Vimeo.';
$string['vimeo_url_invalid'] = 'O URL do Vimeo é inválido. Copie diretamente do navegador da web.';
$string['vimeo_url_missing'] = 'A URL do Vimeo não foi definida.';
$string['vimeo_video_not_found'] = 'O vídeo não existe na base de dados.';
$string['vimeo_video_not_processed'] = 'O vídeo ainda não foi totalmente processado. Por favor, volte mais tarde.';
$string['watch_percent'] = 'Visualizar percentual';
$string['watch_percent_help'] = 'O último momento no vídeo que o estudante assistiu.';
$string['watch_time'] = 'Visualizar tempo';
$string['watch_time_help'] = 'Quanto tempo o estudante assistiu ao vídeo no total (em etapas de 5 segundos).';
$string['with_play_button'] = 'com botão play';
