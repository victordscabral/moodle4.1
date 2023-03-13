<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_ilbead', language 'en'.
 *
 * @package    enrol_ilbead
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['cohortnonmemberinfo'] = 'Apenas membros da coorte \'{$a}\' podem autoinscrever-se.';
$string['cohortonly'] = 'Apenas membros da coorte';
$string['cohortonly_help'] = 'A autoinscrição pode ser restingida aos membros de uma coorte específica. Observe que alterar esta configuração não provoca nenhum efeito nas inscrições já existentes.';
$string['customwelcomemessage'] = 'Mensagem personalizada de boas-vindas';
$string['customwelcomemessage_help'] = 'Uma mensagem personalizada de boas-vindas pode ser adicionada como texto plano ou no padrão de autoformatação Moodle, incluindo tags HTML e multi-linguagem.

Os seguintes marcadores podem ser incluídos na mensagem:

* Nome do curso {$a->coursename}
* Link para a página de perfil do usuário {$a->profileurl}';
$string['defaultrole'] = 'Papel padrão ao inscrever-se';
$string['defaultrole_desc'] = 'Selecione o papel que será atribuído aos usuários quando eles se inscreverem no curso';
$string['enrolenddate'] = 'Data final de inscrição';
$string['enrolenddate_help'] = 'Se habilitado, usuários poderão se inscrever-se apenas até esta data.';
$string['enrolenddaterror'] = 'A data final de inscrição não pode ser anterior à data inicial de inscrição';
$string['enrolme'] = 'Matricular-se';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'A quantidade de tempo que a inscrição será válida. Se for igual a zero, a duração da inscrição será ilimitada.';
$string['enrolperiod_help'] = 'A quantidade de tempo que a inscrição será válida, a partir do momento que o usuário se inscreve. Se desabilitado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data inicial de inscrição';
$string['enrolstartdate_help'] = 'Se habilitada, usuários poderão se inscrever apenas a partir desta data.';
$string['expiredaction'] = 'Ação de expiração de inscrição';
$string['expiredaction_help'] = 'Selecione a ação a realizar quando a inscrição do usuário expirar. Por favor, observe que algumas informações e configurações do usuário serão eliminados do curso se sua inscrição for eliminada.';
$string['expirymessageenrollersubject'] = 'Notificação de expiração da inscrição';
$string['expirymessageenrollerbody'] = 'A inscrição no curso \'{$a->course}\' irá expirar em {$a->threshold} para os seguintes usuários:

{$a->users}

Para extender suas inscrições, acesse {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração de inscrição';
$string['expirymessageenrolledbody'] = 'Prezado {$a->user},

Esta é uma notificação automática de que sua inscrição no curso \'{$a->course}\' vai expirar em {$a->timeend}.

Se precisar de ajuda, por favor contacte o ILB/Senado: {$a->enroller}.';
$string['groupkey'] = 'Usar a chave de inscrição em grupo';
$string['groupkey_desc'] = 'Usar chaves de inscrição em grupo por padrão.';
$string['groupkey_help'] = 'Restringe o acesso ao curso para apenas aqueles que têm uma chave e, adicionalmente, separa os usuários em grupos distintos.

Observação: Uma chave de inscrição para o curso deve ser especificada nas configurações da inscrição assim como chaves de inscrição em grupo devem ser especificadas nas configurações de grupos.';
$string['longtimenosee'] = 'Desinscrever usuários inativos depois de';
$string['longtimenosee_help'] = 'Se os usuários não acessaram o curso por um longo tempo então eles são automaticamente desinscritos. Este parâmetro especifica o tempo limite de inatividade.';
$string['maxenrolled'] = 'Número máximo de usuários inscritos';
$string['maxenrolled_help'] = 'Especifca o número máximo de usuários que podem se inscrever. Zero significa sem limite.';
$string['maxenrolledreached'] = 'O número máximo de usuários com permissão de se inscreverem foi atingido.';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrição';
$string['newenrols'] = 'Permitir novas inscrições';
$string['newenrols_desc'] = 'Permite que usuários se inscrevam em cursos EAD do ILB.';
$string['newenrols_help'] = 'Este parâmetro define se um usuário pode se inscrever neste curso.';
$string['nopassword'] = 'Nenhuma chave de inscrição é necessária.';
$string['password'] = 'Chave de inscrição';
$string['password_help'] = 'Uma chave de inscrição permite que o acesso ao curso seja restringido para apenas aqueles que conhecem a chave.

Se o campo for deixado em branco, qualquer usuário poderá se inscrever no curso.

Se uma chave de inscrição for especificada, quaisquer usuários que tentarem se inscrever no curso terão que informar a chave. Observe que o usuário só precisará informar a chave UMA VEZ, no momento da inscrição.';
$string['passwordinvalid'] = 'Chave de inscrição inválida, por favor tente novamente';
$string['passwordinvalidhint'] = 'A chave de inscrição estava incorreta, por favor, tente novamente<br />
(Uma dica: a chave começa com \'{$a}\')';
$string['pluginname'] = 'Inscrição EAD do ILB';
$string['pluginname_desc'] = 'O plugin de inscrição EAD do ILB permite que usuários escolham quais cursos de EAD desejam participar, restringindo o número de cursos simultâneos e definindo punições por abandono ou reprovação. Internamente, a inscrição é realizada pelo plugin de inscrições manuais, que deve estar habilitado no curso.';
$string['requirepassword'] = 'Exigir chave de inscrição';
$string['requirepassword_desc'] = 'Requer chave de inscrição em novos cursos e previne remoção de chaves de inscrição de cursos existentes.';
$string['role'] = 'Papel atribuído por padrão';
$string['ilbead:config'] = 'Configurar instâncias de Inscrição EAD do ILB';
$string['ilbead:manage'] = 'Gerenciar usuários inscritos';
$string['ilbead:unenrol'] = 'Desinscrever usuários do curso';
$string['ilbead:unenrolilbead'] = 'Desinscrever-se do curso';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de boas-vindas';
$string['sendcoursewelcomemessage_help'] = 'Se habilitado, usuários receberão uma mensagem de boas-vindas por e-mail quando eles se inscreverem no curso.';
$string['showhint'] = 'Mostrar dica';
$string['showhint_desc'] = 'Mostra a primeira letra da chave de acesso para visitantes.';
$string['status'] = 'Habilitar inscrições existentes';
$string['status_desc'] = 'Habilita o método de Inscrição EAD do ILB em novos cursos.';
$string['status_help'] = 'Se desmarcado, todas as inscrições existentes serão suspensas a novos usuários não poderão se inscrever.';
$string['unenrol'] = 'Desinscrever usuário';
$string['unenrolilbeadconfirm'] = 'Você realmente deseja desinscrever-se do curso "{$a}"?';
$string['unenroluser'] = 'Você realmente deseja desinscrever "{$a->user}" do curso "{$a->course}"?';
$string['usepasswordpolicy'] = 'Usar política de senhas';
$string['usepasswordpolicy_desc'] = 'Use a política padrão de senhas para as chaves de inscrição.';
$string['welcometocourse'] = 'Bem-vindo(a) ao curso {$a}';
$string['welcometocoursetext'] = 'Bem-vindo(a) ao curso {$a->coursename}!

A primeira coisa a fazer é editar o seu Perfil de Usuário do curso para que possamos saber mais sobre você:

  {$a->profileurl}';
$string['maxongoing'] = 'Máximo de cursos EAD simultâneos';
$string['maxongoing_help'] = 'Máximo de cursos simultâneos de EAD que o usuário pode se inscrever.';
$string['ongoingcourses'] = 'Lista de cursos que você não concluiu';
$string['abandonedcourses'] = 'Cursos abandonados';
$string['enrolledat'] = 'inscrito em';
$string['abandonalert'] = 'Você abandonou curso(s) e não pode se inscrever em novos cursos.';
$string['abandonpunishment'] = 'Dias de suspensão por abandono/reprovação';
$string['abandonpunishment_help'] = 'Número de dias que o aluno não poderá se inscrever em outro curso EAD do ILB depois de ter abandonado um curso.';
$string['coursename'] = 'Nome do curso';
$string['timestart'] = 'Data de início';
$string['timeend'] = 'Data prevista de término';
$string['maxongoingmessage'] = 'Você já está matriculado em {$a} curso(s) sem tutoria, Novas matrículas somente serão aceitas após a conclusão de pelo menos um deles.';
$string['customenrolmessage'] = 'Mensagem personalizada de matrícula';
$string['customenrolmessage_help'] = 'Uma mensagem personalizada que pode ser exibida no formulário de inscrição como um texto plano ou no padrão de autoformatação Moodle, incluindo tags HTML e multi-linguagem.';
$string['samecoursealert'] = 'Turma errada!';
$string['samecoursemessage'] = 'Você já está matriculado neste curso, mas em outra turma!<br/>
Sua turma correta é {$a}.';
$string['alreadyenroled'] = 'Você já está inscrito neste curso mas não pode acessá-lo.';
