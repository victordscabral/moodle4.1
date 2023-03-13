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
 * Strings for component 'accredible', language 'pt_br', version '4.1'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Adicionar um certificado/emblema';
$string['accredible:manage'] = 'Gerenciar um certificado/emblema';
$string['accredible:student'] = 'Obter um certificado/emblema';
$string['accredible:view'] = 'Visualisar um certificado ou emblema';
$string['accrediblegroup'] = 'Grupo da plataforma Accredible';
$string['achievementid'] = 'Id da conquista /  nome do coorte (precisa ser único)';
$string['activitygroupdescription'] = 'Grupos de credenciais precisam ser criados no <a href="{$a}" target="_blank">painel da plataforma Accredible</a> antes que as credenciais possam ser emitidas. Se nenhum aparecer, verifique sua chave de API para garantir que a integração esteja configurada corretamente.';
$string['activityname'] = 'Nome da atividade';
$string['additionalactivitiesone'] = 'Aviso: você está adicionando mais de uma atividade para o curso.<br/>Ambas atividades são visíveis pelos estudantes, então esteja certo de que nomeou as duas com nomes diferentes.';
$string['additionalactivitiesthree'] = 'Esse é o nome que irá aparecer no certificado.';
$string['additionalactivitiestwo'] = 'Os Certificados/Emblemas serão listados apenas na página de atividades se eles foram emitidos com esse ID de conquista.';
$string['apikeyhelp'] = 'Insira sua chave API de accredible.com';
$string['apikeylabel'] = 'Chave da API';
$string['autoissueheader'] = 'Critérios automáticos de emissão';
$string['certificatename'] = 'Nome do Certificado/Emblema';
$string['certificateurl'] = 'URL do Certificado/Emblema';
$string['chooseexam'] = 'Escolha o questionário final';
$string['completionissuecheckbox'] = 'Sim, emitir após a conclusão do curso';
$string['completionissueheader'] = 'Critérios de emissão automática: por conclusão do curso';
$string['dashboardlink'] = 'Link do painel do site Accredible';
$string['dashboardlinktext'] = 'Para excluir ou definir as credenciais, faça o login em <a href="https://dashboard.accredible.com" target="_blank">painel</a>';
$string['datecreated'] = 'Data de criação';
$string['description'] = 'Descrição';
$string['emptygradeattributekeyname'] = 'A nota final do curso será mapeada para o atributo personalizado Accredible selecionado. Se você ainda não criou um atributo personalizado, pode fazê-lo no <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Selecione se deseja hospedar dados na UE (Frankfurt) em vez dos EUA';
$string['eulabel'] = 'Servidor UE (Frankfurt)';
$string['eventcertificatecreated'] = 'Um certificado foi enviado para o Accredible';
$string['gotodashboard'] = 'Para atualizar a aparência dos seus emblemas e certificados, visite: <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Escolha a nota do Moodle para incluir:';
$string['gradeattributekeynameselect'] = 'Escolha um atributo de design Accredible:';
$string['gradeissueheader'] = 'Critério para Auto-gerar: pelo resultado na quiz final';
$string['groupselect'] = 'Grupo';
$string['id'] = 'ID';
$string['includegradeattributecheckbox'] = 'Sim, incluir nota na Credencial.';
$string['includegradeattributedescription'] = 'Incluir Nota do Estudante na Credencial';
$string['indexheader'] = 'Todos os certificados/emblemas para  {$a}';
$string['issued'] = 'Emitido';
$string['manualheader'] = 'Emitir manualmente os certificados/emblemas';
$string['modulename'] = 'Certificados & Emblemas da Accredible';
$string['modulename_help'] = 'O módulo de atividade de certificados & emblemas da Accredible permite emitir certificados ou emblemas de cursos para os estudantes através do site accredible.com.

Adicione a atividade onde você quer que os estudantes vejam seus certificados ou emblemas.';
$string['modulenameplural'] = 'Certificados/Emblemas da Accredible';
$string['nocertificates'] = 'Não há certificados/emblemas';
$string['nouserswarning'] = 'Você precisa escolher um grupo da plataforma Accredible para ver a lista de usuários.';
$string['overview'] = 'Visão geral';
$string['passinggrade'] = 'Nota percentual necessária para aprovação no curso (%)';
$string['pluginadministration'] = 'Administração de certificados/emblemas da Accredible';
$string['pluginname'] = 'Certificados e Emblemas da Accredible';
$string['privacy:metadata:accredible'] = 'Para integrar com a plataforma Accredible, os dados do usuário precisam ser trocados com esse serviço.';
$string['privacy:metadata:accredible:email'] = 'Seu endereço de e-mail será enviado a plataforma Accredible para emitir uma credencial.';
$string['privacy:metadata:accredible:fullname'] = 'Seu nome completo será enviado à plataforma Accredible para emitir uma credencial.';
$string['privacy:metadata:accredible:quizgrade'] = 'Sua nota do questionário pode ser enviada para a plataforma Accredible para emitir uma credencial.';
$string['recipient'] = 'Destinatário';
$string['templatename'] = 'Nome do coorte (do painel)';
$string['unissueddescription'] = 'Esses usuários atenderam aos requisitos desse certificado, mas ainda não receberam um certificado. Selecione aqueles para os quais você deseja emitir certificados.';
$string['unissuedheader'] = 'Certificados/emblemas não emitidos';
$string['usestemplatesdescription'] = 'Verifique se você tem uma coorte no painel com o mesmo nome do seu ID obtido.';
$string['viewheader'] = 'Certificados e emblemas para {$a}';
$string['viewimgcomplete'] = 'Clique para visualizar seu certificado ou emblema';
$string['viewimgincomplete'] = 'Curso ainda em progesso';
$string['viewsubheader'] = 'ID do Grupo: {$a}';
$string['viewsubheaderold'] = 'ID obtido: {$a}';
