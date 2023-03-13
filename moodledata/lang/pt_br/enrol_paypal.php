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
 * Strings for component 'enrol_paypal', language 'pt_br', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuir papel';
$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'O endereço de email de sua conta de negócios PayPal';
$string['cost'] = 'Preço da inscrição';
$string['costerror'] = 'O custo de inscrição não é numérico';
$string['costorkey'] = 'Por favor escolha um dos seguintes métodos de inscrição.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione papel que deseja inscrever usuários durante inscrição PayPal';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem ser inscritos apenas até esta data.';
$string['enrolenddaterror'] = 'A data final de inscrições não pode ser anterior a data de início';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Intervalo de tempo padrão em que a inscrição será válida. Se configurada como zero a inscrição terá duração ilimitada por padrão.';
$string['enrolperiod_help'] = 'Duração de tempo que a inscrição é válida, iniciando no momento que o usuário é inscrito. Caso desabilitado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários só podem ser inscritos a partir desta data.';
$string['errdisabled'] = 'O plugin de inscrição do PayPal está desabilitado e não lida com notificações de pagamento.';
$string['erripninvalid'] = 'A notificação instantânea de pagamento não foi verificada pelo PayPal.';
$string['errpaypalconnect'] = 'Não foi possível conectar a {$a->url} para verificar a notificação de pagamento instantâneo: {$a->result}';
$string['expiredaction'] = 'Ação ao término da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser realizada quando a inscrição do usuário terminar. Por favor, observe que alguns dados e configurações do usuário são removidos do curso durante a desinscrição no curso.';
$string['mailadmins'] = 'Avisar admin';
$string['mailstudents'] = 'Avisar estudantes';
$string['mailteachers'] = 'Avisar professores';
$string['messageprovider:paypal_enrolment'] = 'Mensagem de inscrição via PayPal';
$string['nocost'] = 'Não há custos associados com a inscrição neste curso!';
$string['paypal:config'] = 'Configurar as instâncias da inscrição PayPal';
$string['paypal:manage'] = 'Gerenciar usuários inscritos';
$string['paypal:unenrol'] = 'Desinscrever usuários do curso';
$string['paypal:unenrolself'] = 'Desinscrever-se do curso';
$string['paypalaccepted'] = 'Aceitamos pagamentos com PayPal';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'O módulo Paypal permite configurar os cursos pagos. Se o preço de qualquer curso for zero, então os estudantes não serão convidados a pagar para obter acesso. Há um preço global que você define aqui como padrão para todo o site. mas nas configurações do curso você pode definir um preço para cada curso individualmente . O preço do curso sobrepõe o do site.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informações sobre as transações do PayPal para inscrições PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Endereço de email ou ID da conta do PayPal do destinatário do pagamento (ou seja, o vendedor).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'O ID do curso que é vendido.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'O ID da instância de inscrição no curso.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'O nome completo do curso que sua inscrição é vendida.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Uma anotação inserida pelo comprador no campo de anotação de pagamentos do site do PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nome completo do comprador.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'No caso de reembolso, estorno ou estorno cancelado, esse seria o ID da transação original.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'O status do pagamento';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'O motivo pelo qual o status do pagamento está pendente (se houver).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'O motivo pelo qual o status do pagamento está Estornado, Reembolsado, Estorno Cancelado ou Negado (se o status for um deles).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Endereço de email principal do destinatário do pagamento (ou seja, o comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID exclusivo da conta do PayPal do destinatário do pagamento (ou seja, o comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Valor do imposto cobrado no pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Horário em que o Moodle foi notificado pelo PayPal sobre o pagamento.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'O número de identificação da transação original do comerciante para o pagamento do comprador, contra o qual o caso foi registrado';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'O ID do usuário que comprou a inscrição no curso.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'O plugin de inscrição PayPal transmite dados do usuário do Moodle para o site do PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Endereço do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Cidade do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'País do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Uma sequência de caracteres separada por hífen, que contém o ID do usuário (o comprador), o ID do curso, o ID da instância de inscrição.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Endereço de email do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Primeiro nome do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Sobrenome do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nome completo do comprador.';
$string['processexpirationstask'] = 'Tarefa de envio de notificações de expiração da inscrição no PayPal';
$string['sendpaymentbutton'] = 'Enviar pagamento via Paypal';
$string['status'] = 'Permitir inscrições PayPal';
$string['status_desc'] = 'Permitir a inscrição em um curso utilizando PayPal por padrão.';
$string['transactions'] = 'Transações PayPal';
$string['unenrolselfconfirm'] = 'Você realmente deseja retirar sua inscrição do curso "{$a}" ?';
