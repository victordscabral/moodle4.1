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
 * Strings for component 'payment', language 'pt_br', version '4.1'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arquivado';
$string['accountconfignote'] = 'Os gateways de pagamento para esta conta serão configurados separadamente';
$string['accountdeleteconfirm'] = 'Se esta conta tem pagamentos anteriores, ela será arquivada, caso contrário, seus dados de configuração serão excluídos permanentemente. Você tem certeza que quer continuar?';
$string['accountidnumber'] = 'Número do ID';
$string['accountidnumber_help'] = 'O número de ID é usado apenas ao comparar a conta com sistemas externos e não é exibido em nenhum lugar do site. Se a conta tiver um código de nome oficial, ele pode ser inserido, caso contrário, o campo pode ser deixado em branco.';
$string['accountname'] = 'Nome da conta';
$string['accountname_help'] = 'Como essa conta será identificada por professores ou gerentes que configuram pagamentos (por exemplo, no plugin de inscrição no curso).';
$string['accountnotavailable'] = 'Indisponível';
$string['createaccount'] = 'Criar conta de pagamento';
$string['deleteorarchive'] = 'Excluir ou arquivar';
$string['editpaymentaccount'] = 'Editar conta de pagamento';
$string['eventaccountcreated'] = 'Conta de pagamento criada';
$string['eventaccountdeleted'] = 'Conta de pagamento excluída';
$string['eventaccountupdated'] = 'Conta de pagamento atualizada';
$string['feeincludesurcharge'] = '{$a->fee} (inclui {$a->surcharge}% de taxa adicional para usar este tipo de pagamento)';
$string['gatewaycannotbeenabled'] = 'O gateway de pagamento não pôde ser habilitado porque a configuração está incompleta.';
$string['gatewaydisabled'] = 'Desabilitado';
$string['gatewayenabled'] = 'Habilitado';
$string['gatewaynotfound'] = 'Gateway não encontrado';
$string['gotomanageplugins'] = 'Habilitar e desabilitar os gateways de pagamento e definir sobretaxas por meio de {$a}.';
$string['gotopaymentaccounts'] = 'Você pode criar várias contas de pagamento usando qualquer um desses gateways na página {$a}';
$string['hidearchived'] = 'Ocultar arquivados';
$string['noaccountsavilable'] = 'Nenhuma conta de pagamento está disponível.';
$string['nocurrencysupported'] = 'Nenhum pagamento em nenhuma moeda é suportado. Certifique-se de que pelo menos um gateway de pagamento esteja habilitado.';
$string['nogateway'] = 'Não há plataforma de pagamento que possa ser usada.';
$string['nogatewayselected'] = 'Você primeiro precisa selecionar uma plataforma de pagamento.';
$string['paymentaccount'] = 'Conta de pagamento';
$string['paymentaccounts'] = 'Contas de pagamento';
$string['paymentaccountsexplained'] = 'Criar uma ou várias contas de pagamento para este site. Cada conta inclui configuração para gateways de pagamento disponíveis. A pessoa que configurar os pagamentos no site (por exemplo, pagamento da inscrição no curso) poderá escolher entre as contas disponíveis.';
$string['payments'] = 'Pagamentos';
$string['privacy:metadata:database:payments'] = 'Informação sobre os pagamentos.';
$string['privacy:metadata:database:payments:amount'] = 'O valor do pagamento.';
$string['privacy:metadata:database:payments:currency'] = 'A moeda do pagamento.';
$string['privacy:metadata:database:payments:gateway'] = 'A plataforma de pagamento usada para o pagamento.';
$string['privacy:metadata:database:payments:timecreated'] = 'A hora em que o pagamento foi feito.';
$string['privacy:metadata:database:payments:timemodified'] = 'A hora em que o registro de pagamento foi atualizado pela última vez.';
$string['privacy:metadata:database:payments:userid'] = 'O usuário que fez o pagamento.';
$string['restoreaccount'] = 'Restaurar';
$string['selectpaymenttype'] = 'Selecione o tipo de pagamento';
$string['showarchived'] = 'Mostrar arquivado';
$string['supportedcurrencies'] = 'Moedas suportadas';
$string['surcharge'] = 'Sobretaxa (porcentagem)';
$string['surcharge_desc'] = 'A sobretaxa é uma porcentagem adicional cobrada dos usuários que optam por pagar usando este gateway de pagamento.';
