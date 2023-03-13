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
 * Strings for component 'tool_usertours', language 'pt_br', version '4.1'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Acima';
$string['actions'] = 'Ações';
$string['appliesto'] = 'Aplica-se a';
$string['backdrop'] = 'Mostrar com plano de fundo';
$string['backdrop_help'] = 'Você pode usar um plano de fundo para realçar a parte da página para onde está apontando.

Atenção: os planos de fundo não são compatíveis com algumas partes da página tal como, por exemplo, a barra de navegação.';
$string['below'] = 'Abaixo';
$string['block'] = 'Bloco';
$string['block_named'] = 'Bloco nomeado \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista das etapas da demonstração ao usuário';
$string['cachedef_tourdata'] = 'Lista de informações das demonstrações que são trazidas em todas as páginas';
$string['confirmstepremovalquestion'] = 'Tem certeza que pretende excluir esta etapa?';
$string['confirmstepremovaltitle'] = 'Confirmar a exclusão da etapa';
$string['confirmtourremovalquestion'] = 'Tem certeza que pretende excluir esta demonstração?';
$string['confirmtourremovaltitle'] = 'Confirmar a exclusão da demonstração';
$string['content'] = 'Conteúdo';
$string['content_heading'] = 'Conteúdo';
$string['content_help'] = 'O conteúdo descrevendo cada passo deve ser adicionado como texto plano, podendo usar as tags "multi idiomas" se necessário.';
$string['content_type'] = 'Tipo de conteúdo';
$string['content_type_help'] = '* Manual - o conteúdo é inserido usando um editor de texto
* ID da string do idioma - no formato identificador de string,componente (sem espaço após a vírgula)';
$string['content_type_langstring'] = 'ID da string do idioma';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'Seletor CSS';
$string['defaultvalue'] = 'Padrão ({$a})';
$string['delay'] = 'Atraso antes de mostrar a etapa';
$string['delay_help'] = 'Você pode optar por adicionar um atraso antes que a etapa seja exibida.

Este atraso é em milissegundos.';
$string['description'] = 'Descrição';
$string['description_help'] = 'A descrição de um tour pode ser adicionada como texto simples, entre tags multilíngue (para uso com o filtro de conteúdo multilíngue), se necessário.

Alternativamente, um ID de string de idioma pode ser inserido no identificador de formato, componente (sem colchetes ou espaço após a vírgula).';
$string['displaystepnumbers'] = 'Mostrar número de etapas';
$string['displaystepnumbers_help'] = 'Se o número de etapas restantes é exibido na navegação da demonstração';
$string['done'] = 'Concluído';
$string['duplicatetour'] = 'Duplicar demonstração';
$string['duplicatetour_name'] = '{$a} (copy)';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endonesteptour'] = 'Entendi';
$string['endtour'] = 'Terminar demonstração';
$string['endtourlabel'] = 'Rótulo do botão de terminar demonstração';
$string['event_step_shown'] = 'Etapa mostrada';
$string['event_tour_ended'] = 'Demonstração terminada';
$string['event_tour_reset'] = 'Reiniciar demonstração';
$string['event_tour_started'] = 'Demonstração iniciada';
$string['exporttour'] = 'Exportar demonstração';
$string['filter_accessdate'] = 'Data de acesso';
$string['filter_accessdate_enabled'] = 'Habilitar filtro por data de acesso';
$string['filter_accessdate_enabled_help'] = 'Mostrar a demonstração apenas para usuários novos ou que acessaram o site recentemente.';
$string['filter_category'] = 'Categoria';
$string['filter_category_help'] = 'Mostrar a demonstração em uma página associada a um curso na categoria selecionada.';
$string['filter_course'] = 'Cursos';
$string['filter_course_help'] = 'Mostrar a demonstração em uma página que está associada ao curso selecionado.';
$string['filter_courseformat'] = 'Formato de curso';
$string['filter_courseformat_help'] = 'Mostrar a demonstração em uma página que está associada ao curso utilizando o formato de curso selecionado.';
$string['filter_cssselector'] = 'Seletor CSS';
$string['filter_cssselector_help'] = 'Mostrar a demonstração apenas se o seletor CSS especificado for encontrado na página.';
$string['filter_date_account_creation'] = 'Período de data de criação da conta do usuário';
$string['filter_date_first_login'] = 'Período do primeiro acesso do usuário';
$string['filter_date_last_login'] = 'Período do último acesso do usuário';
$string['filter_header'] = 'Filtros da demonstração';
$string['filter_help'] = 'Selecione as condições sob as quais a demonstração será mostrada. Todos os filtros devem corresponder a uma demonstração para ela ser mostrada a um usuário.';
$string['filter_role'] = 'Papel';
$string['filter_role_help'] = 'Uma demonstração pode ser exclusiva para usuários com papel selecionado no contexto em que a demonstração é mostrada. Por exemplo, restringir uma demonstração de Painel do usuário aos usuários com o papel de estudante não funcionará se os usuários tiverem o papel de estudante num curso (como geralmente é o caso). Uma demonstração de Painel do usuário só pode ser restrita a usuários com um papel no nível de sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostrar a demonstração quando o usuário estiver usando um dos temas selecionados.';
$string['importtour'] = 'Importar demonstração';
$string['invalid_lang_id'] = 'ID inválido da string do idioma';
$string['left'] = 'Esquerda';
$string['modifyshippedtourwarning'] = 'Esta é uma demonstração ao usuário que vem com o Moodle. Quaisquer modificações que você fizer poderão ser substituídas durante a próxima atualização do site.';
$string['moodle_language_identifier'] = 'ID da string do idioma';
$string['movestepdown'] = 'Mover etapa para baixo';
$string['movestepup'] = 'Mover etapa para cima';
$string['movetourdown'] = 'Mover demonstração para baixo';
$string['movetourup'] = 'Mover demonstração para cima';
$string['name'] = 'Nome';
$string['newstep'] = 'Nova etapa';
$string['newtour'] = 'Criar nova demonstração';
$string['next'] = 'Próxima';
$string['nextstep'] = 'Próxima';
$string['nextstep_sequence'] = 'Próxima ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opções';
$string['orphan'] = 'Mostrar se o destino não for encontrado';
$string['orphan_help'] = 'Mostrar a etapa se o destino não for encontrado na página.';
$string['pathmatch'] = 'Aplicar à correspondência de URL';
$string['pathmatch_help'] = 'As demonstrações serão mostradas em qualquer página cujo URL corresponda a este valor.

Você pode usar o caractere % como curinga para significar qualquer coisa.
Alguns exemplos de valores:

* /my/% - para corresponder ao Painel do usuário
* /course/view.php?id=2 - para corresponder a determinada disciplina
* /mod/forum/view.php% - para corresponder à lista de discussão do fórum
* /user/profile.php% - para corresponder à página de perfil do usuário

Se pretender mostrar uma demonstração na Página inicial do site, pode usar o valor: "FRONTPAGE".';
$string['pausetour'] = 'Pausar';
$string['placement'] = 'Posicionamento';
$string['placement_help'] = 'Uma etapa pode ser colocada acima, abaixo, à esquerda ou à direita do destino. Acima ou abaixo é recomendado, uma vez que se ajustam melhor em dispositivos móveis.

Se não for possível ajustar a etapa no local especificado de uma determinada página, ela será automaticamente colocada noutro lugar.';
$string['pluginname'] = 'Demonstrações ao usuário';
$string['previousstep'] = 'Anterior';
$string['privacy:metadata:preference:completed'] = 'A hora em que um usuário concluiu pela última vez um tour do usuário.';
$string['privacy:metadata:preference:requested'] = 'A hora em que um usuário solicitou pela última vez um tour do usuário.';
$string['privacy:request:preference:completed'] = 'Você marcou pela última vez a visita do usuário "{$a->name}" como concluída em {$a->time}';
$string['privacy:request:preference:requested'] = 'A última vez que você solicitou o tour do usuário "{$a->name}" foi em {$a->time}';
$string['reflex'] = 'Clique para avançar';
$string['reflex_help'] = 'Ir para a próxima etapa quando clicar no destino.';
$string['resettouronpage'] = 'Redefinir o tour de usuário nessa página';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Direita';
$string['select_block'] = 'Selecione um bloco';
$string['selector_defaulttitle'] = 'Inserir um título descritivo';
$string['selectordisplayname'] = 'Um seletor CSS correspondente a \'{$a}\'';
$string['selecttype'] = 'Selecionar o tipo de etapa';
$string['sharedtourslink'] = 'Repositório de demonstrações';
$string['skip'] = 'Pular';
$string['skip_tour'] = 'Pular demonstração';
$string['target'] = 'Destino';
$string['target_block'] = 'Bloco';
$string['target_heading'] = 'Destino da etapa';
$string['target_selector'] = 'Seletor';
$string['target_selector_targetvalue'] = 'Seletores CSS';
$string['target_selector_targetvalue_help'] = 'Um seletor CSS pode ser usado para selecionar quase qualquer elemento da página. O seletor apropriado pode ser facilmente encontrado através das ferramentas de desenvolvimento para o seu navegador da Web.';
$string['target_unattached'] = 'Mostrar no meio da página';
$string['targettype'] = 'Tipo de destino';
$string['targettype_help'] = 'Cada etapa é associada a uma parte da página - o destino. Os tipos de destino são:

* Bloco - para mostrar uma etapa ao lado de um bloco específico
* Seletor CSS - para definir com precisão a área de destino usando CSS
* Mostrar no meio da página - para uma etapa que não precisa de ser associada a uma parte específica da página';
$string['title'] = 'Título';
$string['title_help'] = 'O título de uma etapa pode ser adicionado como texto simples, entre em "tags multi-idioma" se for necessário (para uso com o filtro de conteúdo em vários idiomas).

Em alternativa, um ID de string do idioma pode ser inserido no formato identificador,componente (sem parênteses ou espaço após a vírgula).';
$string['tour1_content_addingblocks'] = 'Na verdade, pense cuidadosamente sobre como incluir quaisquer blocos em suas páginas. Os blocos não são mostrados no aplicativo do Moodle Mobile, portanto, como regra geral, é muito melhor certificar-se de que seu site funciona bem sem nenhum bloco.';
$string['tour1_content_blockregion'] = 'Ainda há uma região de bloco aqui. Recomendamos remover completamente os blocos de Navegação e Administração, já que toda a funcionalidade está em outro lugar no tema Boost.';
$string['tour1_content_customisation'] = 'Para personalizar a aparência do seu site e da página principal, use o menu de configurações no canto deste cabeçalho. Tente ativar a edição agora.';
$string['tour1_content_end'] = 'Esta foi uma demonstração ao usuário, um novo recurso no Moodle 3.2. Não será mostrada novamente a menos que a reinicie através do link existente no rodapé. Como administrador, você também pode criar as suas demonstrações!';
$string['tour1_content_navigation'] = 'A navegação principal é agora através deste menu de navegação. O conteúdo atualiza dependendo de onde você está no site. Use o botão na parte superior para ocultá-lo ou mostrá-lo.';
$string['tour1_content_welcome'] = 'Bem-vindo ao tema Boost. Se já usou o Moodle antes, irá notar que as coisas estão um pouco diferentes.';
$string['tour1_title_addingblocks'] = 'Adicionando blocos';
$string['tour1_title_blockregion'] = 'Região dos blocos';
$string['tour1_title_customisation'] = 'Personalizar';
$string['tour1_title_end'] = 'Fim da demonstração';
$string['tour1_title_navigation'] = 'Navegação';
$string['tour1_title_welcome'] = 'Bem-vindo(a)';
$string['tour2_content_addblock'] = 'Se você ativar o modo de edição, poderá adicionar blocos da caixa de navegação. No entanto, pense cuidadosamente sobre incluir alguns blocos nas suas páginas. Os blocos não são mostrados no aplicativo móvel do Moodle, por isso, para uma melhor experiência do usuário é melhor certificar-se de que o curso funciona bem sem os blocos.';
$string['tour2_content_addingblocks'] = 'Você pode adicionar blocos a esta página usando deste botão. No entanto, pense cuidadosamente sobre incluir quaisquer blocos nas suas páginas. Os blocos não são mostrados na aplicação móvel do Moodle, por isso, para uma melhor experiência do usuário é melhor garantir que seu curso funciona bem sem quaisquer blocos.';
$string['tour2_content_customisation'] = 'Para alterar as configurações do curso, use o menu de configurações no canto deste cabeçalho. Você encontrará um menu de configurações semelhante na página inicial de todas as atividades. Tente ativar a edição agora.';
$string['tour2_content_end'] = 'Esta foi uma demonstração para o usuário, um novo recurso no Moodle 3.2. Ele não será exibido novamente a menos que você redefina usando o link no rodapé. O administrador do site também pode criar demosntrações adicionais para este site, se necessário.';
$string['tour2_content_navigation'] = 'A navegação é agora através deste menu de navegação. Use o botão na parte superior para ocultá-lo ou mostrá-lo. Você verá que existem links para seções de seu curso.';
$string['tour2_content_opendrawer'] = 'Tente abrir o menu de navegação agora.';
$string['tour2_content_participants'] = 'Ver os participantes aqui. Também é onde você pode adicionar ou remover estudantes.';
$string['tour2_content_welcome'] = 'Bem-vindo(a) ao tema Boost . Se já usou o Moodle antes, irá notar que as coisas estão um pouco diferentes aqui na página do curso.';
$string['tour2_title_addblock'] = 'Adicionar um bloco';
$string['tour2_title_addingblocks'] = 'Adicionando blocos';
$string['tour2_title_customisation'] = 'Personalização';
$string['tour2_title_end'] = 'Fim da demonstração';
$string['tour2_title_navigation'] = 'Navegação';
$string['tour2_title_opendrawer'] = 'Abra o menu de navegação';
$string['tour2_title_participants'] = 'Participantes do curso';
$string['tour2_title_welcome'] = 'Bem-vindo(a)';
$string['tour3_content_dashboard'] = 'Seu novo painel de controle tem muitos recursos para ajudá-lo a acessar facilmente as informações mais importantes para você.';
$string['tour3_content_displayoptions'] = 'Cursos podem ser ordenados pelo nome do curso, pelo nome breve ou pela última data de acesso.

Você também pode escolher mostrar os cursos em uma lista, com o sumário do curso, ou a visualização padrão em \'cartão\'.';
$string['tour3_content_overview'] = 'O bloco de visão geral do curso mostra todos os cursos em que você está inscrito.

Você pode optar por mostrar os cursos em andamento ou no passado ou no futuro, ou os cursos marcados com estrela.';
$string['tour3_content_recentcourses'] = 'O bloco dos Cursos acessados recentemente mostra os cursos que você acessou ultimamente, permitindo que você volte a eles rapidamente.';
$string['tour3_content_starring'] = 'Você pode escolher favoritar um curso para destacá-lo ou ocultar um curso que não é mais importante para você.

Essas ações afetam apenas sua visualização.

Você também pode optar por exibir os cursos em uma lista, ou com informações resumidas ou a visualização padrão por \'cartão\'.';
$string['tour3_content_timeline'] = 'O bloco da linha do tempo mostra seus próximos eventos importantes.

Você pode optar por mostrar atividades na próxima semana, mês ou no futuro.

Você também pode mostrar itens que estão atrasados.';
$string['tour3_title_dashboard'] = 'Seu painel';
$string['tour3_title_displayoptions'] = 'Opções de exibição';
$string['tour3_title_overview'] = 'Resumo dos cursos';
$string['tour3_title_recentcourses'] = 'Cursos acessados recentemente';
$string['tour3_title_starring'] = 'Favoritando e ocultando cursos';
$string['tour3_title_timeline'] = 'Bloco da linha do tempo';
$string['tour4_content_groupconvo'] = 'Se você é membro de um grupo com mensagens de grupo ativadas, você verá conversas em grupo aqui.

As conversas em grupo de cursos permitem que você interaja com as outras pessoas do seu grupo em um local particular e conveniente.';
$string['tour4_content_icon'] = 'Você pode acessar suas mensagens a partir de qualquer página usando este ícone.

Se você tiver alguma mensagem não lida, o número de mensagens não lidas será exibido aqui também.

Clique no ícone para abrir bloco de mensagens e continuar a demonstração.';
$string['tour4_content_messaging'] = 'Novos recursos de mensagens incluem mensagens em grupo dentro de em um curso e melhor controle sobre quem pode enviar mensagens para você.';
$string['tour4_content_settings'] = 'Você pode acessar suas configurações de mensagens através do ícone de engrenagem. Uma nova configuração de privacidade permite restringir quem pode enviar mensagens para você.';
$string['tour4_content_starred'] = 'Você pode optar por marcar conversas específicas para torná-las mais fáceis de encontrar.';
$string['tour4_title_groupconvo'] = 'Agrupar mensagens';
$string['tour4_title_icon'] = 'Mensagens';
$string['tour4_title_messaging'] = 'Nova interface de mensagens';
$string['tour4_title_settings'] = 'Configurações de mensagens';
$string['tour4_title_starred'] = 'Favoritos';
$string['tour_activityinfo_activity_student_content'] = 'As datas da atividade e o que mais você precisa fazer para concluir a atividade é mostrado na página da atividade.';
$string['tour_activityinfo_activity_student_title'] = 'Novo: Informações da atividade';
$string['tour_activityinfo_activity_teacher_content'] = 'As datas das atividades e as condições de conclusão agora são exibidas para os estudantes em cada página de atividade (e opcionalmente na página do curso).

Para atividades que exigem que os estudantes marquem manualmente uma atividade como concluída, um botão \'Marcar como concluída\' é exibido na página da atividade.';
$string['tour_activityinfo_activity_teacher_title'] = 'Novo: Informações da atividade';
$string['tour_activityinfo_course_student_content'] = 'As datas e/ou o que fazer para concluir a atividade são exibidos na página do curso.';
$string['tour_activityinfo_course_student_title'] = 'Novo: Informações da atividade';
$string['tour_activityinfo_course_teacher_content'] = 'As novas configurações do curso \'Mostrar condições de conclusão\' e \'Mostrar datas da atividade\' permitem que você escolha se as condições de conclusão da atividade (se definidas) e/ou datas são exibidas para os estudantes na página do curso.';
$string['tour_activityinfo_course_teacher_title'] = 'Novo: Informações da atividade';
$string['tour_final_step_content'] = 'Este é o final da sua demonstração. Ela não será exibida novamente, a menos que você redefina isso usando o link no rodapé.';
$string['tour_final_step_title'] = 'Fim da demonstração';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Poste notícias importantes aqui.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Algo para contar a todos?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Adicione novo conteúdo ou edite o conteúdo existente.';
$string['tour_navigation_course_edit_teacher_title'] = 'Ativar modo de edição';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Navegue pelas atividades e acompanhe seu progresso.';
$string['tour_navigation_course_index_student_title'] = 'Encontrar seu caminho';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Arraste e solte as atividades para reordenar o conteúdo do curso.';
$string['tour_navigation_course_index_teacher_title'] = 'Índice do curso';
$string['tour_navigation_course_student_tour_des'] = 'Onde navegar pelas atividades em um curso';
$string['tour_navigation_course_student_tour_name'] = 'Índice do curso';
$string['tour_navigation_course_teacher_tour_des'] = 'Modo de edição, arrastar e soltar atividades e postar anúncios em um curso';
$string['tour_navigation_course_teacher_tour_name'] = 'Edição do curso';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Este painel lateral pode conter mais recursos.';
$string['tour_navigation_dashboard_title'] = 'Expandir para explorar';
$string['tour_navigation_dashboard_tour_des'] = 'Onde os blocos podem ser encontrados';
$string['tour_navigation_dashboard_tour_name'] = 'Gaveta de blocos';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Adicione, copie, exclua e oculte cursos neste menu.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Eu entendo';
$string['tour_navigation_mycourses_title'] = 'Cursos e categorias';
$string['tour_navigation_mycourses_tour_des'] = 'Opções de gerenciamento de curso na página Meus cursos';
$string['tour_navigation_mycourses_tour_name'] = 'Gerenciamento de curso';
$string['tour_resetforall'] = 'O estado da demonstração foi redefinido. Será mostrada novamente a todos os usuários.';
$string['tourconfig'] = 'Arquivo de configuração da demonstração para importar';
$string['tourisenabled'] = 'Demonstração ativada';
$string['tourlist_explanation'] = 'Você pode criar as demonstrações que quiser e habilitá-las para diferentes partes do Moodle. Apenas uma demonstração pode ser criada por página.';
$string['tours'] = 'Demonstrações';
$string['usertours'] = 'Demonstrações ao usuário';
$string['usertours:managetours'] = 'Criar, editar e excluir demonstrações';
$string['viewtour_edit'] = 'Você pode <a href="{$a->editlink}">editar os valores predefinidos da demonstração</a> e <a href="{$a->resetlink}">forçar a demonstração a ser mostrada</a> a todos os usuários novamente.';
$string['viewtour_info'] = 'Esta é a demonstração \'{$a->tourname}\'. Aplica-se ao caminho \'{$a->path}\'.';
