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
 * Strings for component 'block_completion_progress', language 'pt_br', version '4.1'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Código HTML da cor para elementos que foram concluídos';
$string['completed_colour_title'] = 'Cor de Concluído';
$string['completion_not_enabled'] = 'Acompanhamento de conclusão não está habilitado neste site.';
$string['completion_not_enabled_course'] = 'Acompanhamento de conclusão não está habilitado neste curso.';
$string['completion_progress:addinstance'] = 'Adicionar um novo bloco de Progresso de Conclusão';
$string['completion_progress:myaddinstance'] = 'Adicionar um bloco de Progresso de Conclusão a minha página inicial';
$string['completion_progress:overview'] = 'Visualizar visão geral de curso do Progresso de Conclusão para todos os estudantes';
$string['completion_progress:showbar'] = 'Mostrar a barra no bloco de Progresso de Conclusão';
$string['config_activitiesincluded'] = 'Atividades incluídas';
$string['config_activitycompletion'] = 'Todas as atividades com conclusão configuradas';
$string['config_default_title'] = 'Progresso de Conclusão';
$string['config_group'] = 'Visível apenas para o grupo';
$string['config_header_monitored'] = 'Monitorado';
$string['config_icons'] = 'Usar ícones na barra';
$string['config_longbars'] = 'Como apresentar barras grandes';
$string['config_orderby'] = 'Ordenar barra por';
$string['config_orderby_course_order'] = 'Ordenação do curso';
$string['config_orderby_due_time'] = 'Tempo usando os dados de "{$a}"';
$string['config_percentage'] = 'Mostrar porcentagem aos estudantes';
$string['config_scroll'] = 'Rolagem';
$string['config_selectactivities'] = 'Selecionar atividades';
$string['config_selectedactivities'] = 'Atividades selecionadas';
$string['config_squeeze'] = 'Compressão';
$string['config_title'] = 'Alternar título';
$string['config_wrap'] = 'Envolver';
$string['coursenametoshow'] = 'Nome do curso para mostrar no Painel';
$string['defaultlongbars'] = 'Apresentação padrão para barras grandes';
$string['forceiconsinbar'] = 'Forçar ícones na barra de progresso';
$string['fullname'] = 'Nome do curso completo';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Código HTML da cor para elementos futuros que ainda não foram concluídos';
$string['futureNotCompleted_colour_title'] = 'Cor futura não-concluída';
$string['how_activitiesincluded_works'] = 'Como a inclusão de atividades funciona';
$string['how_activitiesincluded_works_help'] = '<p>Por padrão, todas as atividades com a Conclusão de Atividade configurada são incluídas na barra.</p><p>Você pode também selecionar manualmente as atividades a serem incluídas.</p>';
$string['how_group_works'] = 'Como a visibilidade de grupo funciona';
$string['how_group_works_help'] = '<p>Selecionar um grupo ou agrupamento limitará a exibição desse bloco a esse grupo ou agrupamento.</p>';
$string['how_longbars_works'] = 'Como barras grandes são apresentadas';
$string['how_longbars_works_help'] = '<p>Quando barras excedem um limite estabelecido, elas podem ser apresentadas em uma das seguintes maneiras.</p><ul><li>Comprimido em uma barra horizontal</li><li>Rolagem lateral para mostrar segmentos de barra excedentes</li><li>Revestimento para mostrar todos os segmentos de barra em várias linhas</li></ul><p>Note-se que quando a barra é revestida, o indicador AGORA não será mostrado.</p>';
$string['how_ordering_works'] = 'Como ordenação funciona';
$string['how_ordering_works_help'] = '<p>Existem duas maneiras de ordenar atividades no bloco de Progresso de Conclusão.</p><ul><li><em>Hora usando "Conclusão prevista em" data</em> (default)<br />As datas de conclusão prevista de atividades/recursos são usadas para ordenar a barra. Onde atividades/recursos não possuem uma data de conclusão prevista, é utilizada ordenação no curso. Quando essa opção é usada, o indicador AGORA é mostrado.</li><li><em>Ordenação no curso</em><br />Atividades/recursos são apresentados na mesma ordem em que estão na página do curso. Quando essa opção é usada, datas de conclusão prevista são ignoradas. Quando essa opção é usada, o indicador AGORA não é mostrado.</li></ul>';
$string['how_selectactivities_works'] = 'Como inclusão de atividades funciona';
$string['how_selectactivities_works_help'] = '<p>Para selecionar manualmente atividades para serem incluídas na barra, certifique-se de que "Atividades incluídas" está configurada para "atividades selecionadas".</p><p>Somente atividades com configurações de conclusão de atividade podem ser incluídas.</p><p>Pressione o botão CTRL para selecionar várias atividades.</p>';
$string['lastonline'] = 'Último no curso';
$string['mouse_over_prompt'] = 'Mover o mouse sobre a barra ou clicar nela para informações';
$string['no_activities_config_message'] = 'Não há atividades ou recursos com configuração de conclusão de atividade ou não há atividades ou recursos que foram selecionados. Configure conclusão de atividade em atividades e recursos. Em seguida, configure esse bloco.';
$string['no_activities_message'] = 'Nenhuma atividade ou recurso está sendo monitorado. Use config para configurar o monitoramento.';
$string['no_blocks'] = 'Nenhum bloco de Progresso de Conclusão está configurado para seus cursos.';
$string['no_courses'] = 'Você não está inscrito em nenhum curso. Somente barras de cursos inscritos serão mostradas.';
$string['no_visible_activities_message'] = 'Nenhuma das atividades monitoradas está atualmente disponível';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Código HTML da cor para elementos atuais que ainda não foram concluídos';
$string['notCompleted_colour_title'] = 'Cor não-concluída';
$string['not_all_expected_set'] = 'Nem todas as atividades com conclusão possuem um "{$a}" conjunto de dados.';
$string['now_indicator'] = 'AGORA';
$string['overview'] = 'Visão geral de estudantes';
$string['pluginname'] = 'Progresso de Conclusão';
$string['privacy:metadata'] = 'O bloco Progresso de Conclusão exibe somente dados de conclusão existentes.';
$string['progress'] = 'Progresso';
$string['progressbar'] = 'Progresso de Conclusão';
$string['shortname'] = 'Nome breve do curso';
$string['showallinfo'] = 'Mostrar todas as informações';
$string['showinactive'] = 'Mostrar estudantes inativos em Visão Geral';
$string['submitted'] = 'Enviado';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Código HTML da cor para elementos que foram enviados, mas ainda não estão concluídos';
$string['submittednotcomplete_colour_title'] = 'Cor para enviado mas não concluído';
$string['time_expected'] = 'Prevista';
$string['why_set_the_title'] = 'Por que você pode querer configurar o título da instância do bloco?';
$string['why_set_the_title_help'] = '<p>Podem existir várias instâncias do bloco de Progresso de Conclusão. Você pode usar diferentes blocos de Progresso de Conclusão para monitorar diferentes conjuntos de atividades ou recursos. Por exemplo, você poderia monitorar o  progresso de tarefas em um bloco e questionários em outro. Por essa razão, você pode sobrepor o título padrão e configurar um título de bloco mais apropriado para cada instância.</p>';
$string['why_show_precentage'] = 'Por que mostrar uma porcentagem de progresso aos estudantes?';
$string['why_show_precentage_help'] = '<p>É possível mostrar uma porcentagem global de progresso aos estudantes.</p><p>Isso é calculado como o número de atividades concluídas dividido pelo número total de atividades na barra.</p><p>A porcentagem de progresso aparece até que o estudante mova o mouse sobre um item da barra.</p>';
$string['why_use_icons'] = 'Por que você pode querer usar ícones?';
$string['why_use_icons_help'] = '<p>Você pode querer adicionar ícones de verificação no Progresso de Conclusão para tornar esse bloco visualmente mais  acessível aos estudantes com daltonismo.</p><p>Pode também tornar o significado do bloco mais claro se você acredita que as cores não estão intuitivas, seja por razões culturais ou pessoais.</p>';
$string['wrapafter'] = 'Ao agrupar, limitar linhas para';
