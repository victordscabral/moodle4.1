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
 * Strings for component 'enrol_coursecompleted', language 'pt_br', version '4.1'.
 *
 * @package     enrol_coursecompleted
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftercourse'] = 'Depois de concluir o curso: {$a}';
$string['compcourse'] = 'Curso concluído';
$string['compcourse_help'] = 'Qual curso deve ser concluído.';
$string['confirmbulkdeleteenrolment'] = 'Tem certeza de que deseja excluir essas inscrições de usuário?';
$string['confirmbulkediteenrolment'] = 'Tem certeza de que deseja alterar essas inscrições de usuário?';
$string['coursecompleted:config'] = 'Configurar instâncias de conclusão de curso de inscrição';
$string['coursecompleted:enrolpast'] = 'Inscrever usuários que concluíram cursos no passado';
$string['coursecompleted:manage'] = 'Gerenciar usuários inscritos';
$string['coursecompleted:unenrol'] = 'Cancelar inscrição de usuários do curso';
$string['coursecompleted:unenrolself'] = 'Desinscrever-se do curso';
$string['customwelcome'] = 'Mensagem de boas-vindas personalizada';
$string['customwelcome_help'] = 'Uma mensagem de boas-vindas personalizada pode ser adicionada como texto simples ou formato padrão do Moodle, incluindo tags HTML e tags multi-idiomas.

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome do curso {$a->coursename}
* Nome do curso concluído {$a->completed}
* Link para a página de perfil do usuário {$a->profileurl}
* Email do usuário {$a ->email}
* Nome completo do usuário {$a->nome completo}';
$string['deleteselectedusers'] = 'Excluir inscrições selecionadas na conclusão do curso';
$string['editselectedusers'] = 'Editar inscrições selecionadas na conclusão do curso';
$string['editusers'] = 'Alterar inscrições de usuários';
$string['group'] = 'Manter grupo';
$string['group_help'] = 'Tentar adicionar usuários a um grupo com o mesmo nome';
$string['keepgroup'] = 'Manter configuração padrão do grupo';
$string['keepgroup_help'] = 'Padrão tenta adicionar usuários a um grupo com o mesmo nome';
$string['pluginname'] = 'Inscrição por curso concluído';
$string['pluginname_desc'] = 'O plugin de inscrição Curso concluído concede acesso aos cursos após a conclusão do curso.';
$string['privacy:metadata'] = 'O plugin de inscrição Curso concluído não armazena nenhuma informação pessoal.';
$string['status'] = 'Habilitado';
$string['status_desc'] = 'Permitir inscrição por curso concluído por padrão.';
$string['status_help'] = 'Esta configuração determina se a inscrição por curso concluído está habilitada.';
$string['svglearnpath'] = 'Exibir caminho de aprendizado';
$string['svglearnpath_help'] = 'Exibir (possível) caminho de aprendizado usando ícones svg.';
$string['unenrolusers'] = 'Cancelar inscrição de usuários';
$string['uponcompleting'] = 'Ao concluir o curso {$a}';
$string['usersenrolled'] = '{$a} Usuários inscritos';
$string['welcome'] = 'Enviar mensagem de boas-vindas do curso';
$string['welcome_help'] = 'Quando um usuário é inscrito no curso porque concluíu outro curso, uma mensagem de boas-vindas pode ser enviada por email.';
$string['welcometocourse'] = 'Bem-vindo ao {$a->coursename}!

Parabéns!

Depois de concluir {$a->completed} com sucesso, agora você está automaticamente inscrito no seguinte curso {$a->coursename}.';
$string['willbeenrolled'] = 'Você será inscrito neste curso quando concluir o curso {$a}';
