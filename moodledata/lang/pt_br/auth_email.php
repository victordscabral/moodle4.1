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
 * Strings for component 'auth_email', language 'pt_br', version '4.1'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>O auto-cadastro por e-mail permite a um usuário criar sua própria conta pelo botão \'Criar nova conta\' na página de login. O usuário então recebe um e-mail contendo um link seguro para uma página onde podem confirmar a sua conta. Logins futuros basta verificar o nome de usuário e senha contra os valores armazenados no banco de dados do Moodle.</p><p>Nota: Além de ativar o plugin auto-cadastro por email, esta opção também deve estar selecionada na caixa de seleção \'Auto-cadastro\' na página \'Gerenciar autenticação ".</p>';
$string['auth_emailnoemail'] = 'A tentativa de lhe enviar um email falhou!';
$string['auth_emailrecaptcha'] = 'Adiciona uma confirmação visual/sonora para o formulário da página de auto-cadastro de usuários por e-mail. Isso protege seu site contra spammers e contribui para uma causa que vale à pena. Veja http://www.google.com/recaptcha para mais detalhes.';
$string['auth_emailrecaptcha_key'] = 'Ativar elemento reCAPTCHA';
$string['auth_emailsettings'] = 'Configurações';
$string['pluginname'] = 'Auto-cadastro por email';
$string['privacy:metadata'] = 'O plugin de autenticação de auto-inscrição por email não armazena nenhum dado pessoal.';
