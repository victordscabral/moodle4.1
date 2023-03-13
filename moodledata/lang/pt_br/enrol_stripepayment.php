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
 * Strings for component 'enrol_stripepayment', language 'pt_br', version '4.1'.
 *
 * @package     enrol_stripepayment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Aplicar Código';
$string['assignrole'] = 'Atribuir papel';
$string['buy_now'] = 'Comprar Agora';
$string['canntenrol'] = 'A inscrição está desabilitada ou inativa';
$string['charge_description1'] = 'criar cliente para recebimento de email';
$string['charge_description2'] = 'Cobrança pelo Custo de Inscrição do Curso.';
$string['cost'] = 'Custo de inscrição';
$string['costerror'] = 'O custo de inscrição não é numérico';
$string['costorkey'] = 'Por favor, escolha um dos seguintes métodos de inscrição.';
$string['couponcode'] = 'Código do cupom';
$string['create_user_token'] = 'Para que o retorno de chamada do Stripe funcione, habilite o protocolo Moodle REST em seu site';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos usuários durante as inscrições do Stripe';
$string['enable_coupon_section'] = 'Ativar seção de cupom';
$string['enabled_rest_protocol'] = 'Por favor, crie também seu token';
$string['enrol'] = 'Inscrever';
$string['enrol_now'] = 'Inscreva-se agora';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem ser inscritos somente até esta data.';
$string['enrolenddaterror'] = 'A data de término da inscrição não pode ser anterior à data de início';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Período padrão de tempo em que a inscrição é válida. Se definido como zero, a duração da inscrição será ilimitada por padrão.';
$string['enrolperiod_help'] = 'Período de tempo em que a inscrição é válida, começando no momento em que o usuário é inscrito. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários podem ser inscritos somente a partir desta data.';
$string['expiredaction'] = 'Ação de expiração de inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do usuário expirar. Observe que alguns dados e configurações do usuário são eliminados do curso durante o cancelamento da inscrição.';
$string['final_cost'] = 'Custo final';
$string['from_here'] = 'daqui';
$string['invalidcouponcode'] = 'Código de cupom inválido';
$string['invalidcouponcodevalue'] = 'Código do cupom {$a} não é válido!';
$string['mailadmins'] = 'Notificar o administrador';
$string['mailstudents'] = 'Notificar os estudantes';
$string['mailteachers'] = 'Notificar os professores';
$string['maxenrolled'] = 'Máximo de usuários inscritos';
$string['maxenrolled_help'] = 'Especifica o número máximo de usuários que podem se inscrever no pagamento parcelado. 0 significa sem limite.';
$string['maxenrolledreached'] = 'O número máximo de usuários com permissão para inscrição de pagamento parcelado já foi atingido.';
$string['messageprovider:stripe_enrolment'] = 'Mensagens de inscrição Stripe';
$string['messageprovider:stripepayment_enrolment'] = 'Provedor de mensagens';
$string['newcost'] = 'Novo custo';
$string['nocost'] = 'Não há nenhum custo associado à inscrição neste curso!';
$string['please_wait'] = 'Por favor aguarde...';
$string['pluginname'] = 'Pagamento Stripe';
$string['pluginname_desc'] = 'O módulo Stripe permite configurar os cursos pagos. Se o preço de qualquer curso for zero, os estudantes não serão convidados a pagar para obter acesso. Há um preço global que você define aqui como padrão para todo o site. mas nas configurações do curso você pode definir um preço para cada curso individualmente . O preço do curso sobrepõe o  do site.';
$string['publishablekey'] = 'Chave publicável Stripe';
$string['publishablekey_desc'] = 'A chave publicável da API da conta Stripe';
$string['secretkey'] = 'Chave Secreta Stripe';
$string['secretkey_desc'] = 'A Chave Secreta da conta Stripe';
$string['sendpaymentbutton'] = 'Enviar pagamento via Stripe';
$string['status'] = 'Permitir inscrições do Stripe';
$string['status_desc'] = 'Permitir que os usuários usem o Stripe para se inscrever em um curso por padrão.';
$string['stripe:config'] = 'Configurar instâncias de inscrição do Stripe';
$string['stripe:manage'] = 'Gerenciar usuários inscritos';
$string['stripe:unenrol'] = 'Cancelar a inscrição de usuários do curso';
$string['stripe:unenrolself'] = 'Cancelar a sua inscrição no curso';
$string['stripe_sorry'] = 'Desculpe, você não pode usar o script dessa maneira.';
$string['stripeaccepted'] = 'Stripe pagamentos aceitos';
$string['stripepayment:config'] = 'Configurar';
$string['stripepayment:manage'] = 'Gerenciar';
$string['stripepayment:unenrol'] = 'Cancelar inscricão';
$string['stripepayment:unenrolself'] = 'Desinscrever-se';
$string['token_empty_error'] = 'O token de Web Service não pode estar vazio';
$string['unenrolselfconfirm'] = 'Deseja mesmo cancelar a sua inscrição no curso "{$a}"?';
$string['webservice_token_string'] = 'Token de usuário';
