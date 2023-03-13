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
 * Strings for component 'organizer', language 'pt_br', version '4.1'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Error'] = 'Erro';
$string['Info'] = 'Informações';
$string['Warning'] = 'Atenção';
$string['absolutedeadline'] = 'Fim de registro';
$string['absolutedeadline_help'] = 'Marque essa opção para definir o tempo após o qual ações de estudante não serão mais possíveis.';
$string['actionlink_delete'] = 'excluir';
$string['actionlink_edit'] = 'editar';
$string['actionlink_eval'] = 'nota';
$string['actionlink_print'] = 'imprimir';
$string['actions'] = 'Ação';
$string['actions_help'] = 'Ação a executar.';
$string['addappointment'] = 'Adicionar compromisso';
$string['addslots_placesinfo'] = 'Essa ação criará {$a->numplaces} novos locais possíveis, formando um total de {$a->totalplaces} locais possíveis para {$a->numstudents} estudantes.';
$string['addslots_placesinfo_group'] = 'Essa ação criará {$a->numplaces} novos locais possíveis, perfazendo um total de {$a->totalplaces} locais possíveis para {$a->numgroups} grupos.';
$string['allowcreationofpasttimeslots'] = 'Criação de vagas no passado';
$string['allowedprofilefieldsprint'] = 'Campos de perfil de usuário permitidos';
$string['allowedprofilefieldsprint2'] = 'Campos de perfil de usuários permitidos para impressão de vagas do organizador único';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes do organizador e formulário de registro estarão disponíveis de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Início do registro';
$string['allowsubmissionsfromdate_help'] = 'Marque essa opção se você quiser tornar esse organizador disponível para estudantes após um certo período.';
$string['allowsubmissionsfromdatesummary'] = 'Esse organizador aceitará registros de  <strong>{$a}</strong>';
$string['allowsubmissionstodate'] = 'Fim do registro';
$string['alwaysshowdescription'] = 'Sempre mostra descrição';
$string['alwaysshowdescription_help'] = 'Se desabilitada, a Descrição da Tarefa acima só estará visível para os estudantes na data de "Início da inscrição".';
$string['applicant'] = 'Esta é a pessoa que registrou o grupo';
$string['appointment_reminder_student:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso{$a->courseid} {$a->coursefullname}, você tem um compromisso {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.

Sistema de mensagens Moodle';
$string['appointment_reminder_student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso {$a->courseid} {$a->coursefullname}, você tem um compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.

Sistema de mensagens Moodle';
$string['appointment_reminder_student:group:smallmessage'] = 'Você tem um compromisso de grupo {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso de grupo';
$string['appointment_reminder_student:smallmessage'] = 'Você tem um compromisso {$a->sendername} de {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso';
$string['appointment_reminder_teacher:digest:fullmessage'] = 'Olá {$a->receivername}!

Amanhã você tem os seguintes compromissos:

{$a->digest}

Sistema de Mensagens do Moodle';
$string['appointment_reminder_teacher:digest:smallmessage'] = 'Você recebeu uma mensagem com o resumo dos seus compromissos para amanhã.';
$string['appointment_reminder_teacher:digest:subject'] = 'Resumo dos compromissos';
$string['appointment_reminder_teacher:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso {$a->courseid} {$a->coursefullname}, você tem um compromisso com os estudantes {$a->date} às {$a->time} em {$a->location}.

Sistema de Mensagens do Moodle';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = 'Olá {$a->receivername}!

Amanhã você tem os seguintes compromissos:

{$a->digest}

Sistema de Mensagens do Moodle';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = 'Você recebeu uma mensagem com o resumo dos seus compromissos para amanhã.';
$string['appointment_reminder_teacher:group:digest:subject'] = 'Resumo dos compromissos';
$string['appointment_reminder_teacher:smallmessage'] = 'Você tem um compromisso com os estudantes {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso';
$string['appointmentcomments'] = 'Comentários';
$string['appointmentcomments_help'] = 'Informação adicional sobre os compromissos pode ser adicionada aqui.';
$string['appointmentdatetime'] = 'Data & hora';
$string['assign'] = 'Atribuir';
$string['assign_notify_student:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso {$a->courseid} {$a->coursefullname}, um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi atribuído a você por {$a->sendername}.

Professor: {$a->slot_teacher}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso {$a->courseid} {$a->coursefullname}, um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi atribuído ao seu grupo {$a->groupname} por {$a->sendername}.

Professor: {$a->slot_teacher}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_student:group:smallmessage'] = 'Um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi atribuído ao seu grupo {$a->groupname} por {$a->sendername}.';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído pelo professor';
$string['assign_notify_student:smallmessage'] = 'Um compromisso com {$a->slot_teacher}, {$a->date} às {$a->time}, foi atribuído a você por {$a->sendername}.';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído pelo professor';
$string['assign_notify_teacher:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso {$a->courseid} {$a->coursefullname}, um compromisso com {$a->participantname}, {$a->date} às {$a->time}, foi atribuído a você por {$a->sendername}.

Participante: {$a->participantname}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_teacher:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte do curso {$a->courseid} {$a->coursefullname}, um compromisso com o grupo {$a->groupname}, {$a->date} às {$a->time}, foi atribuído a você por {$a->sendername}.

Grupo: {$a->groupname}
Local: {$a->slot_location}
Data: {$a->date} às {$a->time}

Sistema de Mensagens do Moodle';
$string['assign_notify_teacher:group:smallmessage'] = 'Um compromisso com o grupo {$a->groupname} {$a->date} às {$a->time} foi atribuído a você por {$a->sendername}.';
$string['assign_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído';
$string['assign_notify_teacher:smallmessage'] = 'Um compromisso com {$a->groupname} {$a->date} às {$a->time} foi atribuído a você por {$a->sendername}.';
$string['assign_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Compromisso atribuído';
$string['assign_title'] = 'Atribuir compromisso';
$string['assignsuccess'] = 'A vaga foi atribuída com sucesso e os participantes foram notificados.';
$string['assignsuccessnotsent'] = 'A vaga foi atribuída com sucesso, MAS o(s) participante(s) NÃO foi notificado(s).';
$string['atlocation'] = 'em';
$string['attended'] = 'Participou';
$string['auth'] = 'Método de autenticação';
$string['availability'] = 'Disponibilidade';
$string['availablefrom'] = 'Possíveis aplicações de';
$string['availablefrom_help'] = 'Armazenar o quadro de tempo no qual estudantes terão a permissão de registrar esses intervalos. De forma alternativa, marque a opção "Começando agora" para habilitar o registro imediatamente.';
$string['availablegrouplist'] = 'Grupos disponíveis';
$string['availableslotsfor'] = 'Disponibilidade';
$string['back'] = 'Retornar';
$string['btn_add'] = 'Adicionar novos intervalos';
$string['btn_assign'] = 'Ações possíveis';
$string['btn_comment'] = 'Editar comentário';
$string['btn_delete'] = 'Remover intervalos selecionados';
$string['btn_deletesingle'] = 'Remover intervalo selecionado';
$string['btn_edit'] = 'Editar intervalos selecionados';
$string['btn_editsingle'] = 'Editar intervalo selecionado';
$string['btn_eval'] = 'Avaliar intervalos selecionados';
$string['btn_eval_short'] = 'Nota';
$string['btn_evalsingle'] = 'Avaliar intervalos selecionadas';
$string['btn_print'] = 'Imprimir intervalos selecionados';
$string['btn_printsingle'] = 'Imprimir intervalo selecionado';
$string['btn_queue'] = 'Fila de espera';
$string['btn_reeval'] = 'Reavaliar';
$string['btn_register'] = 'Registrar';
$string['btn_remind'] = 'Enviar lembrete';
$string['btn_reregister'] = 'Registrar de novo';
$string['btn_save'] = 'Salvar comentário';
$string['btn_send'] = 'Enviar';
$string['btn_sendall'] = 'Enviar lembretes para todos os estudantes sem compromisso';
$string['btn_start'] = 'Iniciar';
$string['btn_unqueue'] = 'Remover da fila de espera';
$string['btn_unregister'] = 'Cancelar registro';
$string['calendarsettings'] = 'Configurações do calendário';
$string['can_reregister'] = 'Você pode registrar novamente para outro compromisso.';
$string['cannot_eval'] = 'Não pode avaliar, o estudante tem um';
$string['changegradewarning'] = 'Este organizador avaliou os compromissos e alterar as configurações de notas não recalculará automaticamente as notas existentes. Você deve reavaliar todos os compromissos existentes, se desejar alterar a nota.';
$string['collision'] = 'Atenção! Colisão detectada com seguinte(s) evento(s):';
$string['configabsolutedeadline'] = 'Compensar o padrão do seletor de data e hora a partir da data e hora atuais.';
$string['configahead'] = 'adiante';
$string['configallowcreationofpasttimeslots'] = 'É permitido criar intervalos em horários anteriores?';
$string['configday'] = 'dia';
$string['configdays'] = 'dia';
$string['configdigest'] = 'Enviar sumário dos compromissos do dia seguinte ao professor.';
$string['configdigest_label'] = 'Enviar resumo dos compromissos aos professores';
$string['configdontsend'] = 'Não enviar';
$string['configemailteachers'] = 'Enviar notificações de e-mail aos professores sobre mudanças no status de registro.';
$string['configemailteachers_label'] = 'Enviar notificações de e-mail aos professores';
$string['confighour'] = 'hora';
$string['confighours'] = 'horas';
$string['configintro'] = 'Os valores que você armazenou aqui definem os valores padrões que são usados no formulário de configurações quando você cria um novo organizador.';
$string['configlocationlink'] = 'O link para um mecanismo de busca usado para mostrar o caminho para a localização. Coloque $searchstring na URL onde a consulta passa.';
$string['configmaximumgrade'] = 'Armazena o valor padrão selecionado no campo de notas ao criar um novo organizador. Essa é a nota máxima atribuível para um estudante para esse compromisso.';
$string['configminute'] = 'minuto';
$string['configminutes'] = 'minutos';
$string['configmonth'] = 'mês';
$string['configmonths'] = 'meses';
$string['confignever'] = 'Nunca';
$string['configrelativedeadline'] = 'O tempo padrão adiantado de um compromisso quando os participantes devem ser notificados sobre ele.';
$string['configrequiremodintro'] = 'Desabilitar essa opção se não quiser obrigar os usuários a entrar com a descrição de cada atividade.';
$string['configweek'] = 'semana';
$string['configweeks'] = 'semanas';
$string['configyear'] = 'ano';
$string['confirm_delete'] = 'Remover';
$string['confirm_organizer_remind_all'] = 'Enviar';
$string['create'] = 'Criar';
$string['createsubmit'] = 'Criar intervalos de tempo';
$string['datapreviewtitle'] = 'Pré-visualização de dados';
$string['datetemplate'] = '%d.%m.%Y';
$string['day'] = 'dia';
$string['day_0'] = 'Segunda-feira';
$string['day_1'] = 'Terça-feira';
$string['day_2'] = 'Quarta-feira';
$string['day_3'] = 'Quinta-feira';
$string['day_4'] = 'Sexta-feira';
$string['day_5'] = 'Sábado';
$string['day_6'] = 'Domingo';
$string['day_pl'] = 'dias';
$string['delete_organizer_grades'] = 'Removendo notas de todos os organizadores';
$string['deleteheader'] = 'Removendo os seguintes intervalos:';
$string['deletekeep'] = 'Os seguintes compromissos serão cancelados. Estudantes registrados serão notificados e os intervalos serão removidos:';
$string['deletenoslots'] = 'Nenhum intervalo removível selecionado';
$string['deleteorganizergrades'] = 'Remover notas do livro de notas';
$string['downloadfile'] = 'Baixar arquivo';
