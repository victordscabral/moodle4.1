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
 * Strings for component 'enrol_manual', language 'pt_br', version '4.1'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avançado';
$string['alterstatus'] = 'Alterar o status';
$string['altertimeend'] = 'Alterar data de fim';
$string['altertimestart'] = 'Alterar data de início';
$string['assignrole'] = 'Atribuir papel';
$string['assignroles'] = 'Definir papéis';
$string['browsecohorts'] = 'Procurar coortes';
$string['browseusers'] = 'Procurar usuários';
$string['confirmbulkdeleteenrolment'] = 'Tem certeza de que deseja excluir essas inscrições de usuário?';
$string['defaultperiod'] = 'Duração padrão da inscrição';
$string['defaultperiod_desc'] = 'Intervalo padrão de tempo no qual a inscrição é válida. Se for definido para zero, a duração de inscrição será ilimitado por padrão.';
$string['defaultperiod_help'] = 'Duração padrão de tempo que a inscrição é válida, iniciando no momento que o usuário é inscrito. Caso desabilitado, a duração da inscrição será ilimitada por padrão.';
$string['defaultstart'] = 'Início de inscrição padrão';
$string['deleteselectedusers'] = 'Excluir as inscrições de usuários selecionados';
$string['editselectedusers'] = 'Editar as inscrições de usuários selecionados';
$string['enrolledincourserole'] = 'Inscrito no curso "{$a->course}" como "{$a->role}"';
$string['enrolusers'] = 'Inscrever usuários';
$string['enroluserscohorts'] = 'Inscrever usuários selecionados e coortes';
$string['expiredaction'] = 'Ação ao término da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser realizada quando a inscrição do usuário terminar. Por favor, observe que alguns dados e configurações do usuário são removidos do curso durante a desinscrição no curso.';
$string['expirymessageenrolledbody'] = 'Caro {$a->user},

Esta é uma notificação de que sua inscrição em &quot;{$a->course}&quot; expira em {$a->timeend}.

Se precisar de ajuda, entre em contato {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração de inscrição';
$string['expirymessageenrollerbody'] = 'Inscrição em &quot;{$a->course}&quot; irá expirar em {$a->threshold} para os seguintes usuários:

{$a->users}

Para extender a inscrição deles, acesse {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração de inscrição';
$string['managemanualenrolements'] = 'Gerenciar inscrições manuais';
$string['manual:config'] = 'Configurar instâncias de inscrição manual';
$string['manual:enrol'] = 'Inscrever usuários';
$string['manual:manage'] = 'Gerenciar inscrições de usuário';
$string['manual:unenrol'] = 'Desinscrever usuários do curso';
$string['manual:unenrolself'] = 'Cancelar a própria inscrição no curso';
$string['manualpluginnotinstalled'] = 'O plugin "Manual" ainda não foi instalado';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrição manual';
$string['now'] = 'Agora';
$string['pluginname'] = 'Inscrições manuais';
$string['pluginname_desc'] = 'O plugin de matrículas manuais permite que os usuários sejam inscritos manualmente através de um link nas configurações de administração do curso, por um usuário com permissões adequadas, como um professor. O plugin deve estar habilitado normalmente, uma vez que certos plugins de inscrição, tais como a auto-inscrição, dependem dele.';
$string['privacy:metadata'] = 'O plugin de inscrições manuais não armazenada nenhum dado pessoal.';
$string['selectcohorts'] = 'Selecionar coortes';
$string['selection'] = 'Seleção';
$string['selectusers'] = 'Selecione os usuários';
$string['sendexpirynotificationstask'] = 'Tarefa de envio de notificações de expiração de inscrição manual';
$string['status'] = 'Habilitar inscrições manuais';
$string['status_desc'] = 'Permitir acesso ao curso por usuários inscritos internamente. Isto deve ser mantido habilitado na maioria dos casos.';
$string['status_help'] = 'Esta configuração determina se usuários podem ser inscritos manualmente, através de um link na configuração da administração de cursos, através de um usuário com permissões apropriadas como um professor.';
$string['statusdisabled'] = 'Desabilitado';
$string['statusenabled'] = 'Habilitado';
$string['syncenrolmentstask'] = 'Tarefa de sincronização de inscrições manuais';
$string['unenrol'] = 'Desinscrever usuário';
$string['unenrolselectedusers'] = 'Desinscrever usuários selecionados';
$string['unenrolselfconfirm'] = 'Você deseja realmente cancelar sua inscrição no curso "{$a}"?';
$string['unenroluser'] = 'Você tem certeza que deseja desinscrever "{$a->user}" do curso "{$a->course}"?';
$string['unenrolusers'] = 'Desinscrever usuários';
$string['wscannotenrol'] = 'A instância do Plugin não permite a inscrição manual de um usuário no curso  id = {$a->courseid}';
$string['wsnoinstance'] = 'A instância do Plugin para inscrição manual não existe ou foi desativada para o curso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Você não tem permissão para atribuir esse papel ({$a->roleid}) para esse usuário  ({$a->userid}) nesse curso ({$a->courseid}).';
