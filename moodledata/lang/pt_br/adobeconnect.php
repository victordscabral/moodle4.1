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
 * Strings for component 'adobeconnect', language 'pt_br', version '4.1'.
 *
 * @package     adobeconnect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Adicionar';
$string['addpresenter'] = 'Adicionar';
$string['admin_httpauth'] = 'Cabeçalho de autenticação HTTP';
$string['admin_httpauth_desc'] = 'O valor HTTP_AUTH_HEADER usado no seu arquivo custom.ini';
$string['admin_login'] = 'Login do Administrador';
$string['admin_login_desc'] = 'Login para a conta principal de Administrador';
$string['admin_password'] = 'Senha para Admin';
$string['admin_password_desc'] = 'Senha para a conta principal de administrador';
$string['adminemptyxml'] = 'Não é possível conectar-se ao servidor Adobe Connect Pro neste momento. Clique em continuar para avançar para a página de configurações de atividade e testar a conexão';
$string['adminnotsetupproperty'] = 'A atividade do módulo não está configurada corretamente. Clique em Continuar para avançar para a Página de Configurações da Atividade e testar a conexão';
$string['adobeconnect'] = 'Adobe Connect';
$string['adobeconnect:meetinghost'] = 'Host da Reunião';
$string['adobeconnect:meetingparticipant'] = 'Participante da Reunião';
$string['adobeconnect:meetingpresenter'] = 'Apresentador da Reunião';
$string['adobeconnectfieldset'] = 'Configurações do Adobe Connect';
$string['adobeconnecthost'] = 'Adobe Connect Host';
$string['adobeconnecthostdescription'] = 'O host pode dar outros privilégios de usuários, inicie e pare uma reunião para além do que um apresentador pode fazer';
$string['adobeconnectintro'] = 'Introdução';
$string['adobeconnectname'] = 'Título da Reunião';
$string['adobeconnectparticipant'] = 'Participante Adobe Connect';
$string['adobeconnectparticipantdescription'] = 'Pode ver, mas não pode modificar qualquer uma das configurações de reunião';
$string['adobeconnectpresenter'] = 'Apresentador Adobe Connect';
$string['adobeconnectpresenterdescription'] = 'O apresentador de uma reunião pode apresentar conteúdo, compartilhar uma tela, enviar mensagens de texto, moderar perguntas, criar notas de texto, transmitir áudio e vídeo e disponibilizar conteúdo de links da web';
$string['allusers'] = 'todos os usuários';
$string['assignadoberole'] = 'Atribuindo Papéis Adobe';
$string['assignadoberoles'] = 'Atribuindo função $a->role para $a->meetname ($a->groupname)';
$string['assignroles'] = 'Atribuir papéis';
$string['availablelist'] = 'Disponível';
$string['backtomeeting'] = 'Voltar para a reunião $a';
$string['cancelchanges'] = 'Cancelar';
$string['connectiontesttitle'] = 'Janela de teste de conexão';
$string['conntestintro'] = '<p>Uma série de testes foram executados, a fim de determinar se o servidor Adobe Connect Pro tem sido configurado adequadamente para essa integração para trabalhar e também determinar se as credenciais de usuário fornecidas nas configurações globais de atividade tem as permissões corretas para executar as tarefas exigidas pelo módulo de atividade. Se qualquer um dos testes abaixo falhou, este módulo de atividade não funcionará corretamente.</p><p>Para obter mais assistência e documentação sobre como configurar o servidor Adobe Connect Pro, por favor consulte a página de ajuda do MoodleDocs para este módulo de atividade <a href = "{$a->url}">Página de Ajuda</a></p>';
$string['duplicatemeetingname'] = 'Um nome de reunião duplicado foi encontrado no servidor';
$string['duplicateurl'] = 'Uma URL de reunião duplicada foi encontrada no servidor';
$string['editingfor'] = 'Edição de: $a';
$string['email_login'] = 'E-mail do login';
$string['email_login_desc'] = 'Marque esta opção somente se o login no servidor Connect Pro está configurado para usar o endereço de e-mail. Note que alternar esta opção de ligar/desligar durante o uso regular deste módulo atividade pode potencialmente criar usuários duplicados no servidor Connect Pro';
$string['emptyxml'] = 'Não é possível conectar-se ao servidor Adobe Connect Pro neste momento. Por favor, informe o administrador do Moodle.';
$string['endtime'] = 'Hora de término';
$string['error1'] = 'Você deve ser um administrador do site para acessar esta página';
$string['error2'] = 'A propriedade \'{$a}\' está vazia, por favor introduza um valor e salve as configurações';
$string['errormeeting'] = 'Erro na recuperação da gravação';
$string['errorrecording'] = 'Incapaz de encontrar sessão de gravação';
$string['event_assign_role'] = 'Usuário atribuído a uma função Connect Pro';
$string['event_join_meeting'] = 'O usuário entrou em uma reunião';
$string['event_unassign_role'] = 'Usuário não atribuído a uma função do Connect Pro';
$string['event_view'] = 'Atividade vista';
$string['event_view_all'] = 'Viu todas as instâncias da atividade';
$string['event_view_recording'] = 'O usuário visualizou uma gravação';
$string['existingusers'] = '$a usuários existentes';
$string['greaterstarttime'] = 'A hora de início não pode ser maior do que a hora de término';
$string['groupswitch'] = 'Filtrar por grupo';
$string['host'] = 'Host';
$string['host_desc'] = 'Para onde chamadas em REST são enviadas';
$string['https'] = 'Conexão HTTPS';
$string['https_desc'] = 'Conecte-se ao servidor do Connect via HTTPS';
$string['invalidadobemeeturl'] = 'Valor inválido para este campo. Clique no link de ajuda para ver valores válidos';
$string['invalidurl'] = 'A URL deve começar com uma letra (a-z)';
$string['joinmeeting'] = 'Participar da reunião';
$string['longurl'] = 'Essa URL da reunião é muito longa. Tente encurtá-la';
$string['meethost_desc'] = 'Domínio onde o servidor Adobe está instalado';
$string['meetinfo'] = 'Mais detalhes da reunião';
$string['meetinfotxt'] = 'Ver os detalhes do servidor da reunião';
$string['meetingend'] = 'Hora de término da Reunião';
$string['meetinggroup'] = 'Grupo da Reunião';
$string['meetinghost'] = 'Domínio da Reunião';
$string['meetinginfo'] = 'Informações da Reunião';
$string['meetingintro'] = 'Resumo da Reunião';
$string['meetingname'] = 'Nome da Reunião';
$string['meetingstart'] = 'Hora de início da Reunião';
$string['meetingtype'] = 'Tipo da Reunião';
$string['meetingtype_help'] = '<p>Um tipo de reunião pública é aquele em que qualquer pessoa que tenha o URL da reunião pode entrar na sala. </p>
<p>Um tipo de reunião privada é aquele em que apenas usuários registrados e participantes podem entrar. A página de login não permite que convidados façam login. Com reuniões privadas, a reunião não começa de fato até que o apresentador ou organizador da reunião entre na reunião.</p>

<p>Se você estiver criando uma reunião privada, é sempre uma boa prática designar pelo
menos 1 organizador ou apresentador que estará presente na reunião; porque os usuários com a função de participante não poderão ingressar na reunião, a menos que um usuário com as
funções de host ou apresentador já tenha ingressado na reunião.
</p>

<p>
Se a reunião tiver suporte para grupos separados, pelo menos 1 usuário em cada grupo, que
deve estar presente na reunião, deve ter a função de organizador ou apresentador.
</p>';
$string['meettemplates'] = 'Modelos de Reunião';
$string['meettemplates_help'] = '<p> Um modelo de sala de reuniões cria reunião com um layout personalizado para a sala de reunião. </p>';
$string['meeturl'] = 'URL da Reunião';
$string['meeturl_help'] = '<p> Você pode personalizar o URL usado para se conectar à reunião do Adobe Connect. O domínio do Adobe Server sempre permanecerá o mesmo.
  No entanto, a última parte do URL pode ser personalizada.
</p>
<p> Por exemplo, se o domínio do servidor Adobe Connect estava localizado em <b>http://adobe.connect.server/</b>
 ao personalizar o URL para <b mymeeting</b>, o URL para se conectar à reunião seria <b>http://adobe.connect.server/mymeeting</b>. Deixe de fora a barra final
</p>
<p> As entradas de URL válidas consistem no nome com
<ul>
<li mymeeting </li>
<li> /mymeeting </li>
</ul>

As entradas de URL inválidas consistem em mais de uma barra:
<ul>
<li>minha reunião/minha reunião/</li>
<li>minha reunião/minha reunião//outra reunião </li>
<li>minha reunião/</li>
</ul>

</p>
<p>Assim que a reunião for salva , você não poderá mais editar/ este campo, pois o campo será desativado.
Se atualizar as configurações de atividade e se <b> Modo de grupos</b> estiver definido como nenhum grupo, você verá parte do URL no campo de texto.
Caso contrário, o campo de texto permanecerá em branco, pois cada grupo de curso terá seu próprio URL de reunião.</p>';
$string['missingexpectedgroups'] = 'Não existem grupos disponíveis.';
$string['modulename'] = 'Adobe Connect';
$string['modulenameplural'] = 'Adobe Connect';
$string['noinstances'] = 'Não há instâncias do adobeconnect';
$string['nomeeting'] = 'Nenhuma reunião existe no servidor';
$string['nopresenterrole'] = 'Erro: erro ao buscando papel \'adobeconnectpresenter\'';
$string['notparticipant'] = 'Você não é um participante desta reunião';
$string['notsetupproperty'] = 'O módulo de atividade não está configurado corretamente. Por favor, contate o administrador do Moodle';
$string['participantbtngrp'] = 'Ações dos participantes';
$string['participantsgrp'] = 'Usuários da Reunião';
$string['particpantslabel'] = 'Participantes';
$string['pluginadministration'] = 'Administração do Adobe Connect';
$string['pluginname'] = 'Adobe Connect';
$string['port'] = 'Porta';
$string['port_desc'] = 'Porta utilizada para se conectar ao Adobe Connect';
$string['potentialusers'] = '$a potenciais usuários';
$string['presenterbtngrp'] = 'Ações do apresentador';
$string['presenterlabel'] = 'Apresentador';
$string['private'] = 'Privado';
$string['public'] = 'Público';
$string['record_force'] = 'Forçar gravação de reunião';
$string['record_force_desc'] = 'Força a gravação de todas as reuniões do Adobe Connect. Este é um efeito que abrange todo o site e o servidor Adobe Connect deve ser reiniciado';
$string['recordinghdr'] = 'Gravações';
$string['removeparticipant'] = 'Remover';
$string['removepresenter'] = 'Remover';
$string['roletoassign'] = 'Função para atribuir';
$string['samemeettime'] = 'Tempo de reunião inválido';
$string['savechanges'] = 'Salvar';
$string['selectparticipants'] = 'Atribuir papéis';
$string['settingblurb'] = '<center><img src="{$a->image}" /></center><br />
<p>Adobe Systems Inc. e Remote-Learner.net formaram uma parceria para criar o primeiro disponível publicamente e oficialmente patrocinado, método de integração entre o Moodle e o Adobe Acrobat Connect Pro. Esta nova integração foi projetada para simplificar o uso de eventos síncronos dentro do Moodle. Ele fornece um  login único entre os dois sistemas com fácil criação e gerenciamento de  reuniões do Adobe Connect Pro.</p><br />
<p><center>Sobre o Remote-Learner</center>
O Remote-Learner foi fornecendo serviços de tecnologias educacionais desde 1982 para seus clientes empresariais, educacionais e governamentais. Hoje, programas de código aberto. Remote-Learner é um parceiro oficial do Moodle, parceiro JasperSoft e parceiro Alfresco. A empresa oferece serviços de hospedagem SaaS, contratos de suporte de TI, programação personalizada , treinamento de desenvolvimento de força de trabalho, design instrucional e serviços de consultoria estratégica para organizações que planejam programas de aprendizagem online. </p><br />
<p>Visite o <a href="{$a->url}">Diretório de plug-ins do Adobe Connect Moodle</a> para obter informações sobre suporte empresarial.</p>';
$string['starttime'] = 'Hora de início';
$string['testconnection'] = 'Testar Conexão';
$string['unableretrdetails'] = 'Não foi possível obter detalhes da reunião';
$string['usergrouprequired'] = 'Esta reunião exige que os usuários estejam em um grupo para ingressar';
$string['usernotenrolled'] = 'Somente os usuários inscritos e que tenham uma função neste curso podem participar desta reunião';
