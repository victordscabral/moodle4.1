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
 * Strings for component 'board', language 'pt_br', version '4.1'.
 *
 * @package     board
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Cancel'] = 'Cancelar';
$string['Ok'] = 'Ok';
$string['addrating'] = 'Avaliação de postagens';
$string['addrating_all'] = 'para Todos';
$string['addrating_none'] = 'Desabilitado';
$string['addrating_students'] = 'para Estudantes';
$string['addrating_teachers'] = 'para Professores';
$string['aria_addmedia'] = 'Adicionar {type} para postagem da coluna {column}';
$string['aria_addmedianew'] = 'Adicionar {type} para uma nova postagem da coluna {column}';
$string['aria_canceledit'] = 'Cancelar a edição da postagem para a postagem {post} da coluna {column}';
$string['aria_cancelnew'] = 'Cancelar nova postagem para a coluna {column}';
$string['aria_choosefileedit'] = 'Selecionar arquivo para postagem {post} na coluna {column}';
$string['aria_choosefilenew'] = 'Selecionar arquivo para nova postagem na coluna {column}';
$string['aria_deleteattachment'] = 'Excluir anexo da postagem {post} na coluna {column}';
$string['aria_deletecolumn'] = 'Excluir coluna {column}';
$string['aria_deletepost'] = 'Excluir postagem {post} na coluna {column}';
$string['aria_newcolumn'] = 'Adicionar nova coluna';
$string['aria_newpost'] = 'Adicionar nova postagem na coluna {column}';
$string['aria_postedit'] = 'Salvar a edição da postagem para a postagem {post} da coluna {column}';
$string['aria_postnew'] = 'Salvar nova postagem na coluna {column}';
$string['aria_ratepost'] = 'Avaliar postagem {post} na coluna {column}';
$string['background_color'] = 'Cor de plano de fundo';
$string['background_color_help'] = 'Deve ser uma cor hexadecimal válida, como #00cc99';
$string['background_image'] = 'Imagem de plano de fundo';
$string['board:addinstance'] = 'Adicionar um novo quadro';
$string['board:manageboard'] = 'Gerenciar as colunas e todas as postagens';
$string['board:view'] = 'Ver o conteúdo do quadro e gerenciar as próprias postagens.';
$string['boardsettings'] = 'Configurações do Quadro';
$string['cancel_button_text'] = 'Cancelar';
$string['choose_file'] = 'Escolher o arquivo de imagem';
$string['column_colours'] = 'Cor das colunas';
$string['column_colours_desc'] = 'As cores usadas no topo de cada coluna. Estas cores são hexadecimais e devem ser colocadas com 3 ou 6 caracteres sendo uma cor por linha. Se algum desses valores não for igual a uma cor, os padrões serão usados.';
$string['default_column_heading'] = 'Cabeçalho';
$string['delete'] = 'Excluir';
$string['event_add_column'] = 'Coluna adicionada';
$string['event_add_column_desc'] = 'O usuário com id \'{$a->userid}\' criou a coluna do quadro com id \'{$a->objectid}\' e nome \'{$a->name}\'.';
$string['event_add_note'] = 'Postagem adicionada';
$string['event_add_note_desc'] = 'O usuário com id \'{$a->userid}\' criou uma postagem no quadro com id \'{$a->objectid}\', cabeçalho \'{$a->heading}\', conteúdo \'{$a->content}\', mídia \'{$a->media}\' na coluna id \'{$a->columnid}\', grupo id \'{$a->groupid}\'.';
$string['event_delete_column'] = 'Coluna excluída';
$string['event_delete_column_desc'] = 'O usuário com id \'{$a->userid}\' excluiu a coluna do quadro com id \'{$a->objectid}\'.';
$string['event_delete_note'] = 'Postagem excluída';
$string['event_delete_note_desc'] = 'O usuário com id \'{$a->userid}\' excluíu do quadro a postagem  com id \'{$a->objectid}\' da coluna id \'{$a->columnid}\'.';
$string['event_move_note'] = 'Postagem movida';
$string['event_move_note_desc'] = 'O usuário com id \'{$a->userid}\' moveu uma postagem no quadro com id \'{$a->objectid}\', para a coluna id \'{$a->columnid}\'.';
$string['event_rate_note'] = 'Postagem avaliada';
$string['event_rate_note_desc'] = 'O usuário com id \'{$a->userid}\' avaliou a postagem no quadro com id \'{$a->objectid}\' para avaliação \'{$a->rating}\'.';
$string['event_update_column'] = 'Coluna atualizada';
$string['event_update_column_desc'] = 'O usuário com id \'{$a->userid}\' atualizou a coluna do quadro com id \'{$a->objectid}\' para \'{$a->name}\'.';
$string['event_update_note'] = 'Postagem atualizada';
$string['event_update_note_desc'] = 'O usuário com id \'{$a->userid}\' atualizou uma postagem no quadro com id \'{$a->objectid}\', para cabeçalho \'{$a->heading}\', conteúdo \'{$a->content}\', mídia \'{$a->media}\' na coluna id \'{$a->columnid}\'.';
$string['export_board'] = 'Exportar CSV';
$string['export_content'] = 'Texto da postagem';
$string['export_email'] = 'Email';
$string['export_firstname'] = 'Primeiro nome';
$string['export_heading'] = 'Cabeçalho da postagem';
$string['export_info'] = 'Título da postagem';
$string['export_lastname'] = 'Sobrenome';
$string['export_submissions'] = 'Exportar envios';
$string['export_timecreated'] = 'Data de criação';
$string['export_url'] = 'URL da postagem';
$string['form_body'] = 'Conteúdo';
$string['form_image_file'] = 'Arquivo de imagem';
$string['form_mediatype'] = 'Mídia';
$string['form_title'] = 'Título da postagem';
$string['groupingid_required'] = 'Um agrupamento de cursos deve ser selecionado para este modo de grupo.';
$string['hideheaders'] = 'Ocultar para os estudantes os cabeçalhos das colunas';
$string['history'] = 'Histórico do quadro';
$string['history_refresh'] = 'Temporizador de atualização do quadro';
$string['history_refresh_desc'] = 'Tempo limite em segundos entre as atualizações automáticas do quadro. Se definido como 0 ou vazio, o quadro será atualizado somente durante as ações do quadro (adicionar/atualizar/etc)';
$string['historyinfo'] = 'A tabela de histórico do quadro é usada apenas para armazenar registros temporários, que são usados por processos javascript para atualizar as visualizações do quadro e, em seguida, são excluídos imediatamente.';
$string['invalid_file_extension'] = 'Extensão de arquivo não aceita para submissão.';
$string['invalid_file_size_max'] = 'Tamanho do arquivo muito grande para ser aceito.';
$string['invalid_file_size_min'] = 'Tamanho do arquivo muito pequeno para ser aceito.';
$string['invalid_youtube_url'] = 'URL do YouTube inválida';
$string['media_selection'] = 'Seleção de mídia';
$string['media_selection_buttons'] = 'Botões';
$string['media_selection_desc'] = 'Configurar como as opções de mídia para as postagens serão exibidas.';
$string['media_selection_dropdown'] = 'Caixa de seleção';
$string['modal_title_edit'] = 'Editar postagem na coluna {column}';
$string['modal_title_new'] = 'Nova postagem na coluna {column}';
$string['modulename'] = 'Quadro';
$string['modulename_help'] = 'Esta é uma nova atividade do Moodle que permite ao professor criar um novo quadro “postit”.';
$string['modulenameplural'] = 'Quadros';
$string['new_column_icon'] = 'Ícone para nova coluna';
$string['new_column_icon_desc'] = 'Ícone exibido no botão para nova coluna';
$string['new_note_icon'] = 'Ícone para nova postagem';
$string['new_note_icon_desc'] = 'Ícone exibido no botão para novas postagens';
$string['note_changed_text'] = 'A postagem que você está editando foi alterada.';
$string['note_changed_title'] = 'Confirmar';
$string['note_deleted_text'] = 'A postagem que você estava editando foi excluída.';
$string['option_empty'] = 'Nenhum';
$string['option_image'] = 'Imagem';
$string['option_image_info'] = 'Texto alternativo';
$string['option_image_url'] = 'URL da imagem';
$string['option_link_info'] = 'Título do link';
$string['option_link_url'] = 'URL do link';
$string['option_youtube'] = 'Video (YouTube)';
$string['option_youtube_info'] = 'Título do vídeo';
$string['option_youtube_url'] = 'URL do YouTube';
$string['pluginadministration'] = 'Administração do módulo Board';
$string['pluginname'] = 'Board';
$string['post_button_text'] = 'Postar';
$string['post_max_length'] = 'Tamanho máximo da postagem.';
$string['post_max_length_desc'] = 'O tamanho máximo permitido do conteúdo. Qualquer coisa acima desse tamanho será cortada.';
$string['postbydate'] = 'Postagem por data';
$string['postbyenabled'] = 'Limitar as postagens dos estudantes por data';
$string['posts'] = 'Postagens';
$string['privacy:metadata:board_history'] = 'O histórico temporário do quadro registra informações, usado por processos javascript para atualizar as visualizações do quadro e, em seguida, excluído imediatamente.';
$string['privacy:metadata:board_history:action'] = 'A ação realizada';
$string['privacy:metadata:board_history:boardid'] = 'o ID do quadro';
$string['privacy:metadata:board_history:content'] = 'Os dados JSON da ação realizada';
$string['privacy:metadata:board_history:timecreated'] = 'O horário que a ação foi realizada';
$string['privacy:metadata:board_history:userid'] = 'O ID do usuário que realizou a ação';
$string['privacy:metadata:board_note_ratings'] = 'Informação sobre as avaliações individuais de cada postagem do quadro.';
$string['privacy:metadata:board_note_ratings:noteid'] = 'O iD da postagem relacionada';
$string['privacy:metadata:board_note_ratings:timecreated'] = 'Horário em que a avaliação da postagem foi criada';
$string['privacy:metadata:board_note_ratings:userid'] = 'O ID do usuário que criou a avaliação da postagem';
$string['privacy:metadata:board_notes'] = 'Informação sobre as postagens individuais para cada quadro.';
$string['privacy:metadata:board_notes:columnid'] = 'A localização da coluna da postagem';
$string['privacy:metadata:board_notes:content'] = 'O conteúdo da postagem';
$string['privacy:metadata:board_notes:heading'] = 'O cabeçalho da postagem';
$string['privacy:metadata:board_notes:info'] = 'As informações de mídia da postagem';
$string['privacy:metadata:board_notes:timecreated'] = 'O horário que a postagem foi criada';
$string['privacy:metadata:board_notes:url'] = 'URL da mídia da postagem';
$string['privacy:metadata:board_notes:userid'] = 'O ID do usuário que criou a postagem';
$string['rate_note_text'] = 'Tem certeza de que deseja avaliar esta postagem?';
$string['ratings'] = 'Avaliações';
$string['remove_column_text'] = 'Tem certeza de que deseja excluir esta coluna "{$a}" e todas as postagens que ela contém?';
$string['remove_column_title'] = 'Confirmar';
$string['remove_note_text'] = 'Tem certeza de que deseja excluir esta postagem e todos os dados que ela contém? Isso afetará todos os outros usuários também.';
$string['remove_note_title'] = 'Confirmar';
$string['sortby'] = 'Ordenar por';
$string['sortbydate'] = 'Data de criação';
$string['sortbynone'] = 'Sem ordenação';
$string['sortbyrating'] = 'Avaliação';
$string['userscanedit'] = 'Permitir que todos os usuários editem o posicionamento de suas próprias postagens.';
$string['warning'] = 'Notificação';
