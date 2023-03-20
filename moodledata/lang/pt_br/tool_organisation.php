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
 * Strings for component 'tool_organisation', language 'pt_br', version '4.1'.
 *
 * @package     tool_organisation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['addchilddepartment'] = 'Novo sub-departamento para o departamento \'{$a}\'';
$string['addchildposition'] = 'Nova sub-posição para a posição \'{$a}\'';
$string['adddepartment'] = 'Novo departamento para a estrutura \'{$a}\'';
$string['adddepartmentframework'] = 'Nova estrutura de departamento';
$string['addjob'] = 'Novo cargo';
$string['addjobforuser'] = 'Novo cargo para \'{$a}\'';
$string['addposition'] = 'Nova posição para a estrutura \'{$a}\'';
$string['addpositionframework'] = 'Nova estrutura de posição';
$string['allframeworks'] = 'Estruturas de departamento e posição';
$string['anydepartment'] = 'Qualquer';
$string['anyposition'] = 'Qualquer';
$string['assfirstchildof'] = 'Como o primeiro filho de \'{$a}\'';
$string['audienceand'] = 'E';
$string['audiencecustomise'] = 'Personalizar...';
$string['audienceor'] = 'Ou';
$string['audienceselect'] = 'Relação com o visualizador de relatório';
$string['audienceselectinitial'] = 'Selecionar audiência';
$string['audienceself'] = 'Eles mesmos';
$string['audienceusersall'] = 'Todos os usuários';
$string['audienceusersdept'] = 'No mesmo departamento que o visualizador do relatório';
$string['audienceusersreporting'] = 'Responde a quem está acessando o relatório';
$string['audienceusersreporting_help'] = 'Incluir usuário que respondem diretamente a quem está vendo o relatório (que deve ter uma posição de gerente)';
$string['cachedef_myjob'] = 'O cargo do usuário atual e sua equipe';
$string['conditioncanallocateprograms'] = 'Pode alocar aos programas';
$string['conditioncanreceivenotifications'] = 'Pode receber notificações';
$string['conditionuserdepartment'] = 'O usuário está no departamento';
$string['conditionuserdepartmentdescription'] = 'Usuário é alocado no departmento \'{$a->deptname}\'<br />
Sub-departmentos: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'Usuário não é alocado no departmento \'{$a->deptname}\'<br />
Sub-departmentos: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionwithdate'] = 'Usuários é alocado no departmento \'{$a->deptname}\'<br />
Sub-departmentos: {$a->subdeptsinclude}<br/>
A partir de: {$a->conditiondate}';
$string['conditionusernotindepartment'] = 'O usuário não está no departamento';
$string['conditionuserposition'] = 'O usuário tem uma posição';
$string['conditionuserpositiondescription'] = 'Usuário tem a posição \'{$a->posname}\'<br/>
Sub-posições: {$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'Usuário não tem a posição \'{$a->posname}\'<br/>
Sub-posições: {$a->subposinclude}';
$string['conditionuserpositiondescriptionwithdate'] = 'Usuário tem a posição \'{$a->posname}\'<br/>
Sub-posições: {$a->subposinclude}<br/>
A partir de: {$a->conditiondate}';
$string['conditionuserwithoutposition'] = 'O usuário não tem uma posição';
$string['creategenericframework'] = 'Criar uma estrutura genérica';
$string['delete'] = 'Excluir';
$string['deletedepartment'] = 'Excluir o departamento \'{$a}\'';
$string['deletedepartmentconfirm'] = 'Você tem certeza que quer excluir o departamento \'{$a}\'?';
$string['deletedepartmentframework'] = 'Excluir departamento \'{$a}\'';
$string['deleteposition'] = 'Excluir posição \'{$a}\'';
$string['department'] = 'Departamento';
$string['department_help'] = 'Selecione o departamento';
$string['departmentandpositionrequiredforjobcreate'] = 'Departamentos e posições precisam ser creados para continuar com a atribuição de cargos';
$string['departmentdeleted'] = 'O departamento foi excluído com sucesso';
$string['departmentdescription'] = 'Descrição';
$string['departmentframework'] = 'Estrutura de departamento';
$string['departmentframeworkpostfix'] = '{$a} (Estrutura de departamento)';
$string['departmentframeworks'] = 'Estruturas de departamento';
$string['departmenthasjobs'] = 'O departamento não pode ser excluído pois existem cargos associados a ele.';
$string['departmentidentifier'] = 'Identificador do departamento';
$string['departmentidnumber'] = 'ID number';
$string['departmentmanagementicons'] = 'Ícones de gerenciamento do departamento';
$string['departmentmanager'] = 'Líder de departamento';
$string['departmentname'] = 'Nome';
$string['departmentnotfound'] = 'Departamento não encontrado';
$string['departmentparent'] = 'Pai';
$string['departmentrequiredforjobcreate'] = 'Departamentos precisam ser criados para continuar com a atribuição de cargos';
$string['departments'] = 'Departamentos';
$string['departmentwithicons'] = 'Ícones do líder de departamento';
$string['details'] = 'Detalhes';
$string['editdepartment'] = 'Editar departamento \'{$a}\'';
$string['editdepartmentframework'] = 'Editar estrutura de departamento \'{$a}\'';
$string['editdepartmentname'] = 'Editar o nome';
$string['editposition'] = 'Editar a posição \'{$a}\'';
$string['editpositionframework'] = 'Editar a estrutura de posição \'{$a}\'';
$string['editpositionname'] = 'Editar o nome';
$string['enddate'] = 'Data de término';
$string['enddate_help'] = 'Data de término do cargo';
$string['entitydepartment'] = 'Departamento';
$string['entityjob'] = 'Cargo';
$string['entityposition'] = 'Posição';
$string['errorcreatingdepartment'] = 'Um erro ocorreu ao criar o departamento. Por favor, tente novamente.';
$string['errorcreatingjob'] = 'Um erro ocorreu ao criar o cargo. Por favor, tente novamente.';
$string['errorcreatingposition'] = 'Um erro ocorreu ao criar a posição. Por favor, tente novamente.';
$string['errorinvaliddepartment'] = 'Departamento inválido';
$string['errorinvalidposition'] = 'Posição inválida';
$string['errorparentnotfound'] = 'Pai não encontrado';
$string['eventdepartmentcreated'] = 'Departamento criado';
$string['eventdepartmentdeleted'] = 'Departamento excluído';
$string['eventdepartmentupdated'] = 'Departamento atualizado';
$string['eventjobcreated'] = 'Cargo criado';
$string['eventjobdeleted'] = 'Cargo excluído';
$string['eventjobupdated'] = 'Cargo atualizado';
$string['eventpositioncreated'] = 'Posição criada';
$string['eventpositiondeleted'] = 'Posição excluída';
$string['eventpositionupdated'] = 'Posição atualizada';
$string['exporterjobs'] = 'Cargos da estrutura organizacional';
$string['exporterorgstructure'] = 'Estruturas da estrutura organizacional';
$string['frameworks'] = 'Estruturas';
$string['fullcompletionreport'] = 'Relatório completo de conclusão';
$string['fullname'] = 'Usuário';
$string['globalmanagementicons'] = 'Ícones de gerente';
$string['globalmanager'] = 'Gerente';
$string['hasjobdepartment'] = 'Tem um cargo no departamento';
$string['hasjobposition'] = 'Tem um cargo na posição';
$string['hierarchy'] = 'Hierarquia';
$string['importerdepartmentscsv'] = 'Importador de departamentos (CSV)';
$string['importerpositionscsv'] = 'Importador de posições (CSV)';
$string['importlogpossuccess'] = 'Criada nova posição \'{$a->name}\'';
$string['jobdeleted'] = 'O cargo foi excluído com sucesso';
$string['jobnotfound'] = 'Cargo não encontrado';
$string['jobpositiondepartment'] = 'Posição e departamento';
$string['jobs'] = 'Atribuições de cargos';
$string['jobsnumber'] = 'Cargos';
$string['jobstartdateafter'] = 'A data de início do cargo é a partir de';
$string['listdeptsnohierarchy'] = 'Lista de departamentos sem hierarquia';
$string['listposnohierarchy'] = 'Lista de posições sem hierarquia';
$string['missingdepartment'] = 'O departamento está faltando';
$string['missingposition'] = 'A posição está faltando';
$string['missingusers'] = 'Os usuários estão faltando';
$string['myteams'] = 'Equipes';
$string['newframework'] = 'Nova estrutura';
$string['newnamefor'] = 'Novo nome para \'{$a}\'';
$string['notification'] = 'Notificação';
$string['notificationcannotcreatejobs'] = 'Antes de adicionar cargos a usuários, crie alguns departamentos e posições.';
$string['onlycurrent'] = 'Apenas atuais';
$string['onlyfuture'] = 'Apenas futuros';
$string['onlypast'] = 'Apenas passados';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'Alocar usuários a programas/certificações';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = 'Líder de departamento: Alocar usuários a programas/certificações';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'Alocar usuários a programas/certificações';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'Gerente: Alocar usuários a programas/certificações';
$string['organisation:assignjobs'] = 'Atribuir cargos';
$string['organisation:managedepartments'] = 'Gerenciar departamentos';
$string['organisation:managepositions'] = 'Gerenciar posições';
$string['organisation:receivenotificationsdept'] = 'Receber notificações';
$string['organisation:receivenotificationsdept_help'] = 'Líder de departamento: Receber notificações';
$string['organisation:receivenotificationsglob'] = 'Receber notificações';
$string['organisation:receivenotificationsglob_help'] = 'Gerente: Receber notificações';
$string['organisation:viewusersreportdept'] = 'Ver relatórios de usuários';
$string['organisation:viewusersreportdept_help'] = 'Líder de departamento: Ver relatórios de usuários';
$string['organisation:viewusersreportglob'] = 'Ver relatórios de usuários';
$string['organisation:viewusersreportglob_help'] = 'Gerente: Ver relatários de usuários';
$string['organisationadmintab'] = 'Organização';
$string['orgfiltercustomise'] = 'Personalizar';
$string['orgfilterdirectreports'] = 'Mostrar apenas quem responde diretamente a mim';
$string['orgfiltereverybody'] = 'Mostrar todo mundo que responde a mim';
$string['orgstructure'] = 'Estrutura organizacional';
$string['pluginname'] = 'Estrutura organizacional';
$string['position'] = 'Posição';
$string['position_help'] = 'Selecione a posição';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = 'A posição foi excluída com sucesso.';
$string['positiondescription'] = 'Descrição';
$string['positionframework'] = 'Estrutura de posição';
$string['positionframeworkpostfix'] = '{$a} (Estrutura de posição)';
$string['positionframeworks'] = 'Estruturas de posição';
$string['positionhasjobs'] = 'A posição não pode ser excluída pois existem cargos associados a ela.';
$string['positionidentifier'] = 'Identificador da posição';
$string['positionidnumber'] = 'ID number';
$string['positionidnumberconflict'] = 'O ID number da posição já existe';
$string['positionname'] = 'Nome';
$string['positionnotfound'] = 'A posição não foi encontrada';
$string['positionparent'] = 'Pai';
$string['positionpermissions'] = 'Permissões';
$string['positionrequiredforjobcreate'] = 'Posições precisam ser criadas para continuar com a atribuição de cargos.';
$string['positions'] = 'Posições';
$string['positionwithicons'] = 'Posição com ícones de gerente';
$string['privacy:metadata:department'] = 'Departamento do cargo';
$string['privacy:metadata:enddate'] = 'Quando esse cargo termina';
$string['privacy:metadata:jobssummary'] = 'Sumário dos cargos';
$string['privacy:metadata:position'] = 'Posição do cargo';
$string['privacy:metadata:startdate'] = 'Quando esse cargo começa';
$string['privacy:metadata:timecreated'] = 'Quando esse cargo foi criado';
$string['privacy:metadata:timemodified'] = 'Quando esse cargo foi modificado pela última vez';
$string['privacy:metadata:userid'] = 'User id';
$string['reg_wpdepartmentframeworks'] = 'Número de estruturas de departamentos ({$a})';
$string['reg_wpdepartments'] = 'Número de departamentos ({$a})';
$string['reg_wpjobs'] = 'Número de cargos ({$a})';
$string['reg_wppositionframeworks'] = 'Número de estruturas de posição ({$a})';
$string['reg_wppositions'] = 'Número de posições ({$a})';
$string['rolemanager'] = 'Gerente da estrutura organizacional';
$string['rolemanagerdescription'] = 'Permite criar e gerenciar cargos, posições e departamentos no tenant atual';
$string['selectallactivejobs'] = 'Selecionar todos os cargos ativos';
$string['selectalldepartmentframeworks'] = 'Selecionar todas as estruturas de departamentos';
$string['selectallframeworks'] = 'Selecionar todas as estruturas de departamento e posição';
$string['selectalljobs'] = 'Selecionar todos os cargos ativos e passados';
$string['selectalljobsinfile'] = 'Selecionar todos os cargos nesse arquivo';
$string['selectalljobsinframeworks'] = 'Selecionar todos os cargos em qualquer das estruturas selecionadas...';
$string['selectallpositionframeworks'] = 'Selecionar todas as estruturas de posição';
$string['selectexistingframework'] = 'Selecionar estrutura existente';
$string['selectjobsinframeworks'] = 'Selecionar todos os cargos de estruturas específicas...';
$string['showjobs'] = 'Mostrar cargos';
$string['showpastjobs'] = 'Mostrar cargos passados';
$string['somedepartmentsdonotexist'] = 'Alguns departamentos não existem';
$string['somepositionsdonotexist'] = 'Algumas posições não existem';
$string['startdate'] = 'Data de início';
$string['startdate_help'] = 'Data de início do cargo';
$string['timecreated'] = 'Data de criação';
$string['usernotfound'] = 'Usuário não encontrado';
$string['users'] = 'Selecionar usuários';
$string['users_help'] = 'Buscar e selecionar usuários para atribuição de cargo';
$string['validationmsgedateonsdate'] = 'A data de término deve ser após a data de início.';
$string['withoutpermission'] = 'Sem permissão \'{$a}\'';
$string['withpermission'] = 'Com permissão \'{$a}\'';
$string['withsubdepartments'] = 'Incluir sub-departamentos';
$string['withsubpositions'] = 'Incluir sub-posições';
