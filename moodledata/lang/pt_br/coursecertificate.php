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
 * Strings for component 'coursecertificate', language 'pt_br', version '4.1'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'Esta atividade está oculta no momento. Ao torná-la visível, os estudantes que atenderem às restrições de acesso receberão automaticamente uma cópia do certificado em PDF.';
$string['archivecertificates'] = 'Arquivar certificados emitidos';
$string['archivecertificates_help'] = 'Os certificados arquivados ainda podem ser verificados e ainda são exibidos na página de perfil do usuário. No entanto, quando um certificado de curso existente é arquivado, um usuário pode receber um novo certificado assim que atender às restrições de acesso à atividade.';
$string['automaticsend_helptitle'] = 'Ajuda com o envio automático';
$string['automaticsenddisabled'] = 'O envio automático do certificado está desabilitado.';
$string['automaticsenddisabled_help'] = 'Ao deixar esta opção desabilitada, os estudantes devem clicar no link da atividade exibido na página do curso para receber o certificado, uma vez que atendam às restrições de acesso desta atividade.<br/><br/>
Ao habilitá-la, os estudantes receberão automaticamente uma cópia em pdf do certificado assim que atendam às restrições de acesso à atividade. Observe que todos os estudantes que já atendem às restrições de acesso desta atividade receberão o certificado quando esta opção for habilitada.';
$string['automaticsenddisabledalert'] = 'Os estudantes que atendem às restrições de acesso desta atividade receberão seu certificado assim que a acessarem.';
$string['automaticsenddisabledinfo'] = 'Atualmente, {$a} estudantes atendem às restrições de acesso a esta atividade e receberão seu certificado assim que a acessarem.';
$string['automaticsendenabled'] = 'O envio automático deste certificado está habilitado.';
$string['automaticsendenabled_help'] = 'Ao deixar esta opção habilitada, os estudantes receberão automaticamente uma cópia em PDF do certificado assim que atenderem às restrições de acesso à atividade.<br/><br/>
Ao desabilitá-la, os estudantes precisarão clicar no link da atividade exibido na página do curso para receberem o certificado, desde que atendam às restrições de acesso à atividade.';
$string['certificateissues'] = 'Emissão de certificado';
$string['certificatesarchived'] = 'Certificados arquivados';
$string['certifiedusers'] = 'Usuários certificados';
$string['chooseatemplate'] = 'Escolha um modelo...';
$string['code'] = 'Código';
$string['coursecertificate:addinstance'] = 'Adicione uma nova atividade de Certificado do curso';
$string['coursecertificate:receive'] = 'Receber certificados emitidos';
$string['coursecertificate:view'] = 'Ver o certificado do curso';
$string['coursecertificate:viewreport'] = 'Ver o relatório de emissão de certificados';
$string['coursecompletiondate'] = 'Data de conclusão';
$string['courseinternalid'] = 'ID interno do curso usado nas URLs';
$string['courseurl'] = 'URL do curso';
$string['disableautomaticsend'] = 'Os estudantes não receberão mais automaticamente uma cópia em PDF do certificado assim que atenderem às restrições de acesso desta atividade. Em vez disso, eles precisarão clicar no link da atividade exibido na página do curso para receber o certificado, desde que atendam às restrições de acesso desta atividade.';
$string['enableautomaticsend'] = 'Todos os estudantes receberão automaticamente uma cópia em PDF do certificado assim que atenderem às restrições de acesso a esta atividade.<br/><br/>
Atualmente, {$a} estudantes atendem às restrições de acesso, mas ainda não acessaram esta atividade. Eles também receberão imediatamente sua cópia.<br/><br/>
Os estudantes que já acessaram esta atividade não receberão o certificado novamente.';
$string['enableautomaticsendpopup'] = 'Todos os estudantes receberão automaticamente uma cópia em PDF do certificado assim que atenderem às restrições de acesso a esta atividade.<br/><br/>
Os estudantes que já atendem às restrições de acesso, mas ainda não acessaram esta atividade, também receberão imediatamente sua cópia.<br/><br/>
Os estudantes que já acessaram esta atividade não receberão o certificado novamente.';
$string['expirydate'] = 'Data de expiração';
$string['issueddate'] = 'Data de emissão';
$string['managetemplates'] = 'Gerenciar modelos de certificado';
$string['modulename'] = 'Certificado do curso';
$string['modulename_help'] = 'O módulo de certificado do curso oferece uma oportunidade para os estudantes comemorarem suas conquistas com a obtenção de certificados.<br/><br/>Ele permite que você escolha entre diferentes modelos de certificado que exibirão automaticamente os dados do usuário como: nome completo, curso, etc.<br/><br/>Os usuários poderão baixar uma cópia do certificado em PDF acessando esta atividade, e existem opções para enviar uma cópia em PDF para eles automaticamente por e-mail.<br/><br/>Se o modelo usado nesta atividade contiver um QR Code, os usuários poderão digitalizá-lo para validar seus certificados.';
$string['modulenameplural'] = 'Certificados do curso';
$string['notemplateselected'] = 'O modelo selecionado não pode ser encontrado. Por favor, selecione outro nas configurações da atividade.';
$string['notemplateselecteduser'] = 'O certificado não está disponível. Por favor, contate o administrador do curso.';
$string['notemplateswarning'] = 'Não existem modelos disponíveis. Por favor, contate o administrador do site.';
$string['notemplateswarningwithlink'] = 'Não existem modelos disponíveis. Por favor, acesse <a href="{$a}">página de gerenciamento de modelos de certificados</a> e crie um novo.';
$string['nouserscertified'] = 'Não há usuários certificados.';
$string['open'] = 'Abrir';
$string['page-mod-coursecertificate-x'] = 'Qualquer página do módulo de certificado de curso';
$string['pluginadministration'] = 'Administração do certificado do curso';
$string['pluginname'] = 'Certificado do curso';
$string['previewcoursefullname'] = 'Nome completo do curso';
$string['previewcourseshortname'] = 'Nome breve do curso';
$string['privacy:metadata'] = 'A atividade Certificado do curso não armazena dados pessoais.';
$string['revoke'] = 'Revogar';
$string['revokeissue'] = 'Tem certeza que deseja revogar a emissão do certificado deste usuário?';
$string['selectdate'] = 'Selecione a data';
$string['selecttemplatewarning'] = 'Assim que esta atividade emitir pelo menos um certificado, este campo ficará bloqueado e não poderá mais ser editado.';
$string['status'] = 'Status';
$string['taskissuecertificates'] = 'Emitir certificados de curso';
$string['template'] = 'Modelo';
