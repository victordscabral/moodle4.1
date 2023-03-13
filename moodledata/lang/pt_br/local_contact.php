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
 * Strings for component 'local_contact', language 'pt_br', version '4.1'.
 *
 * @package     local_contact
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurar esse plugin';
$string['confirmationemail'] = '<p>Prezado(a) [fromname],</p>
<p>Obrigado por entrar em contato conosco. Se necessário, entraremos em contato com você em breve.</p>
<p>Atenciosamente,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Obrigado por entrar em contato. Se necessário, vamos respondê-lo em breve.';
$string['confirmationpage'] = 'Status';
$string['confirmationsent'] = 'Um email foi enviado para seu endereço em {$a}.';
$string['defaultsubject'] = 'Nova mensagem';
$string['duplicateemailaddresses'] = 'Existem vários usuários com o mesmo endereço de email.';
$string['errorsending'] = 'Um erro ocorreu ao enviar esta mensagem. Por favor, tente novamente mais tarde.';
$string['errorsendingtitle'] = 'Falha ao enviar e-mail';
$string['extrainfo'] = '<hr>
<p><strong>Informações Adicionais do Usuário</strong></p>
<ul>
    <li><strong>Usuário do site:</strong> [userstatus]</li>
    <li><strong>Idioma preferido:</strong> [lang]</li>
    <li><strong>Endereço IP:</strong> [userip]</li>
    <li><strong>Navegador da Web:</strong> [http_user_agent]</li>
    <li><strong>Formulário da Web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'email';
$string['field-message'] = 'mensagem';
$string['field-name'] = 'nome';
$string['field-subject'] = 'assunto';
$string['forbidden'] = 'Proibido';
$string['globalhelp'] = 'Formulário de Contato é um plugin para o Moodle que permite que seu site processe informações enviadas por meio de formulários HTML para o endereço de email de suporte do site.';
$string['lockedout'] = 'BLOQUEADO';
$string['loginrequired'] = 'Login obrigatório';
$string['loginrequired_description'] = 'Permitir que apenas usuários autenticados enviem os formulários de contato. Os visitantes não são considerados autenticados.';
$string['norecaptcha'] = 'Sem ReCAPTCHA';
$string['norecaptcha_description'] = 'Não usar o Recaptcha com formulários processados pelo Formulário de Contato.';
$string['noreplyto'] = 'Sem resposta para';
$string['noreplyto_description'] = 'Alguns servidores SMTP rejeitam emails se os campos de Noreply-to no cabeçalho forem diferentes. Habilite esta opção para garantir que o campo no-reply corresponda à este endereço de email, em vez do endereço de email do remetente.';
$string['nosubjectsitename'] = 'Não adicionar o nome do site no campo do assunto do email';
$string['nosubjectsitename_description'] = 'Não adicionar [site name] como prefixo no assunto do email . Isso não afeta a configuração <strong>Texto do prefixo do assunto do email</strong> do Moodle.';
$string['notconfirmed'] = 'NÃO CONFIRMADO';
$string['pluginname'] = 'Formulário de contato';
$string['privacy:metadata'] = 'O plugin Formulário de Contato não armazena dados pessoais de nenhum usuário.';
$string['recapchainfo'] = 'Usando ReCAPTCHA';
$string['recapchainfo_description'] = 'O ReCAPTCHA está atualmente habilitado no Moodle. Você <strong>deve</strong>:<br>
<ul>
  <li>Certificar-se de que a tag {recaptcha} esteja incluída em todos os formulários processados pelo Formulário de contato para Moodle.</li>
  <li>Certificar-se de que o <a href="https://moodle.org/plugins/filter_filtercodes">plugin FilterCodes</a> esteja instalado e habilitado.</li>
</ul>';
$string['recipient_list'] = 'Lista de destinatários disponíveis';
$string['recipient_list_description'] = 'Você pode configurar uma lista de destinatários em potencial aqui, onde qualquer um pode ser usado no formulário de contato para definir o destinatário usando um campo de texto oculto ou em uma lista suspensa para permitir que os usuários selecionem o destinatário sem divulgar o endereço de email do destinatário. Se a lista estiver vazia, os emails serão enviados para o endereço de email do Moodle, que pode ser o endereço de email de suporte ou o administrador principal do Moodle.
Cada linha deve conter um alias/rótulo de texto único, um endereço de email único e um nome, cada um separado por um caracter de barra vertical. Por exemplo:
<pre>
tech support|support@example.com|Joe Fixit
webmaster|admin@example.com|Mr. Moodle
electrical|nikola.tesla@example.com|Nikola
history|charles.darwin@example.com|Mr. Darwin
law|issac.newton@example.com|Isaac Newton
math|galileo.galilei@example.com|Galileo
english|mark.twain@example.com|Mark Twain
physics|albert.einstein@example.com|Albert
science|thomas.edison@example.com|Mr. Edison
philosophy|aristotle@example.com|Aristotle
</pre>';
$string['senderaddress'] = 'Remetente personalizado';
$string['senderaddress_description'] = 'Os e-mails serão enviados desse endereço de email. Se esse campo for deixado vazio, os e-mails serão enviados a partir do endereço de não responda (no-reply).';
