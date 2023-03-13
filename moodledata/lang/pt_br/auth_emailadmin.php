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
 * Strings for component 'auth_emailadmin', language 'pt_br', version '4.1'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Olá Administrador do Moodle,

Uma nova conta foi solicitada em \'{$a->sitename}\' com os seguintes dados:

Qualquer exemplo de campo específico de usuário:
user->lastname: {$a->lastname}

Todos os campos customizados:
{$a->customfields}

Todos os campos de usuário + campos customizados:
{$a->userdata}

Para confirmar a nova conta, por favor vá para o seguinte endereço web:

{$a->link}

Na maioria dos programas de email, isto deve aparecer como um link azul no qual você pode apenas clicá-lo. Se isso não funcionar, então corte e cole o endereço na linha de endereço no topo da janela de seu navegador.

Você também pode confirmar contas pelo Moodle indo em
Administração do Site -> Usuários';
$string['auth_emailadminconfirmationsubject'] = '{$a}: confirmação de conta';
$string['auth_emailadminconfirmsent'] = '<p>Sua conta foi registrada e está pendente de confirmação pelo administrador.
Você pode tanto receber uma confirmação quanto ser contactado para maiores esclarecimentos.</p>';
$string['auth_emailadmindescription'] = '<p>A autoinscriçao por email com confirmação do Admininistrador permite que um usuário crie sua própria conta pelo botão "Criar uma conta", na página de login. Os administradores do site então recebem um email contendo um link seguro para uma página onde eles podem confirmar a conta. Logins Futuros apenas verificarão o nome de usuário e senha em comparação com os valores armazenados no banco de dados do Moodle.</p><p>Nota: Além de habilitar o plugin, também deverá ser escolhida a opção "Autoinscriçao por email com confirmação do Admininistrador" no menu de seleção da página "Gerenciar Autenticação".</p>';
$string['auth_emailadminnoadmin'] = 'Nenhum administrador foi encontrado com base na estratégia de notificação. Por favor cheque a configuração do auth_emailadmin';
$string['auth_emailadminnoemail'] = 'Houve uma tentativa de te enviar um email, mas ela falhou!';
$string['auth_emailadminnotif_failed'] = 'Não foi possível enviar a notificação de registro para:';
$string['auth_emailadminnotif_strategy'] = 'Define a estratégia para enviar notificações de registro. As opções disponíveis são "first" para o primeiro usuário admin, "all" para todos os usuários admin ou um usuário admin específico.';
$string['auth_emailadminnotif_strategy_all'] = 'Todos os usuários administradores';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Todos os administradores e usuários com capacidade de atualizar usuário.';
$string['auth_emailadminnotif_strategy_first'] = 'Primeiro usuário administrador';
$string['auth_emailadminnotif_strategy_key'] = 'Estratégia de notificação:';
$string['auth_emailadminrecaptcha'] = 'Adiciona um elemento de formulário para confirmação visual/áudio na página de inscrição para usuários com autoinscrição por email. Isto protege seu site contra spammers e contribui para uma causa válida. Veja em http://www.google.com/recaptcha/learnmore para mais detalhes.<br /><em>a extensão PHP cURL é requerida.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Habilita o elemento reCAPTCHA';
$string['auth_emailadminsettings'] = 'Configurações';
$string['auth_emailadminuserconfirmation'] = '';
$string['pluginname'] = 'Autoinscrição por email com confirmação do administrador';
