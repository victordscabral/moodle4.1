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
 * Strings for component 'auth_oauth2', language 'pt_br', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Já existe um usuário neste site com esse nome de usuário. Se esta é a sua conta, faça o login inserindo seu nome de usuário e senha e adicione-o como um login vinculado pela sua página de preferências.';
$string['alreadylinked'] = 'Esta conta externa já está vinculada a uma conta neste site.';
$string['auth_oauth2description'] = 'Autenticação baseada em padrões OAuth2';
$string['auth_oauth2settings'] = 'Configurações de autenticação OAuth2.';
$string['confirmaccountemail'] = 'Oi {$a->fullname},

Uma nova conta foi solicitada em \'{$a->sitename}\' usando seu endereço de e-mail.

Para confirmar sua nova conta, acesse o endereço:

{$a->link}

Na maioria dos clientes de e-mail, isso deve aparecer como um link azul que você pode clicar. Se isso não funcionar, então copie e cole o endereço na barra de endereço na parte superior da janela do navegador.

Se precisar de ajuda, entre em contato com o administrador do site,
{$a->admin}

Se você não fez isso, outra pessoa pode estar tentando comprometer sua conta.
Entre em contato com o administrador do site imediatamente.';
$string['confirmaccountemailsubject'] = '{$a}: confirmação de conta';
$string['confirmationinvalid'] = 'O link de confirmação é inválido ou expirou. Por favor inicie o processo de login novamente para gerar um novo e-mail de confirmação.';
$string['confirmationpending'] = 'Esta conta está aguardando confirmação por e-mail.';
$string['confirmlinkedloginemail'] = 'Oi {$a->fullname},

Foi feita uma solicitação para vincular o {$a->issuername} login {$a->linkedemail} em sua conta em \'{$a->sitename}\' usando seu endereço de e-mail.

Para confirmar esta solicitação e vincular esses logins, vá para este endereço da Internet:

{$a->link}

Na maioria dos programas de correio, isso deve aparecer como um link azul que você pode clicar. Se isso não funcionar, então copie e cole o endereço na linha de endereço na parte superior da janela do navegador.

Se precisar de ajuda, entre em contato com o administrador do site,
{$a->admin}

Se você não fez isso, outra pessoa pode estar tentando comprometer sua conta.
Entre em contato com o administrador do site imediatamente.';
$string['confirmlinkedloginemailsubject'] = '{$a}: confirmação de login vinculado';
$string['createaccountswarning'] = 'Este plugin de autenticação permite aos usuários criar contas no seu site. Se você usa este plugin e não quer permitir a criação de contas habilite a configuração "Impedir a criação de conta ao autenticar" .';
$string['createnewlinkedlogin'] = 'Vincular uma nova conta ({$a})';
$string['emailconfirmlink'] = 'Vincular suas contas';
$string['emailconfirmlinksent'] = '<p> Já existe uma conta com este endereço de e-mail, mas ainda não está vinculada. </p> <p> As contas devem estar vinculadas antes de iniciar sessão. </p> <p> Um e-mail deve ter sido enviado para o seu endereço em <b> {$a} </b>. </p> <p> O e-mail contém instruções fáceis para vincular suas contas. </p> <p> Se você tiver alguma dificuldade, entre em contato com o administrador do site. </p>';
$string['emailpasswordchangeinfo'] = 'Oi {$a->firstname},

Alguém (provavelmente você) solicitou uma nova senha para sua conta em \'{$a->sitename}\'.

No entanto, sua senha não pode ser redefinida porque você está usando sua conta em outro site para fazer login.

Faça o login como antes, usando o link da página de login.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Modificar informação da senha';
$string['info'] = 'Conta externa';
$string['issuer'] = 'Serviço OAuth 2';
$string['issuernologin'] = 'Este provedor de serviço não pode ser utilizado para login';
$string['key'] = 'Chave';
$string['linkedlogins'] = 'Logins vinculados';
$string['linkedloginshelp'] = 'Ajuda com logins vinculados';
$string['loggedin'] = 'Usuário autenticado com sucesso no provedor.';
$string['loginerror_authenticationfailed'] = 'O processo de autenticação falhou.';
$string['loginerror_cannotcreateaccounts'] = 'A conta com seu endereço de e-mail não foi encontrada.';
$string['loginerror_invaliddomain'] = 'Este endereço de e-mail não é permitido no site.';
$string['loginerror_nouserinfo'] = 'Nenhuma informação retornada do usuário. O serviço OAuth 2 pode estar configurado incorretamente.';
$string['loginerror_userincomplete'] = 'As informações retornadas do usuário não contém um nome de usuário e endereço de e-mail. O serviço OAuth2 pode estar configurado incorretamente.';
$string['noconfiguredidps'] = 'Não há provedores OAuth2 configurados.';
$string['noissuersavailable'] = 'Nenhum dos serviços OAuth 2 configurados permite vincular contas de login.';
$string['notenabled'] = 'Desculpe, plugin de autenticação OAuth2 não habilitado';
$string['notloggedindebug'] = 'Tentativa de login falhou. Motivo: {$a}';
$string['notwhileloggedinas'] = 'Os logins vinculados não podem ser gerenciados enquanto você estiver logado como outro usuário.';
$string['oauth2:managelinkedlogins'] = 'Gerenciar contas de login vinculadas';
$string['plugindescription'] = 'Este plugin de autenticação mostra uma lista dos provedores de identidade configurados na página de login. Selecionar um provedor de identidade permite aos usuários fazer login com suas credenciais de um provedor OAuth2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autenticação OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Este plugin está conectado ao subsistema de autenticação.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'O token de confirmação';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'O registro de data e hora em que o token de confirmação expira.';
$string['privacy:metadata:auth_oauth2:email'] = 'O email externo que mapeado para esta conta.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'O ID do emissor do OAuth 2 para esse login do OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Contas OAuth 2 vinculadas à conta Moodle de um usuário.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'O registro de data e hora em que a conta do usuário foi vinculada ao login do OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'A data e hora (timestamp) em que este registro foi modificado.';
$string['privacy:metadata:auth_oauth2:userid'] = 'O ID da conta de usuário que o login do OAuth 2 está vinculado.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'O ID do usuário que modificou esta conta.';
$string['privacy:metadata:auth_oauth2:username'] = 'O nome de usuário externo que mapeia para esta conta.';
$string['testidplogin'] = 'Testar login com:';
$string['userinfo'] = 'Dados do usuário do provedor:';
$string['value'] = 'Valor';
