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
 * Strings for component 'enrol_fee', language 'pt_br', version '4.1'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuir papel';
$string['cost'] = 'Taxa de inscrição';
$string['costerror'] = 'A taxa de inscrição deve ser um número.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione o papel a ser atribuído aos usuários após realizarem um pagamento.';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Se ativado, os usuários podem ser inscritos apenas até esta data.';
$string['enrolenddaterror'] = 'A data de término da inscrição não pode ser anterior à data de início.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Tempo de duração padrão em que a inscrição é válida. Se definido como zero, a duração da inscrição será ilimitada por padrão.';
$string['enrolperiod_help'] = 'Tempo de duração da inscrição, a partir do momento em que o usuário se inscreve. Se desabilitado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, usuários poderão se inscrever apenas a partir dessa data.';
$string['expiredaction'] = 'Ação de expiração de inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição de um usuário expirar. Observe que alguns dados e configurações do usuário são excluídos quando a inscrição de um usuário é cancelada.';
$string['fee:config'] = 'Configure instâncias de inscrição após pagamento';
$string['fee:manage'] = 'Gerenciar usuários inscritos';
$string['fee:unenrol'] = 'Desinscrever usuários do curso';
$string['fee:unenrolself'] = 'Desinscrever-me do curso';
$string['nocost'] = 'Não há custo para se inscrever neste curso!';
$string['paymentaccount'] = 'Conta de pagamento';
$string['paymentaccount_help'] = 'As taxas de inscrição serão pagas nesta conta.';
$string['pluginname'] = 'Inscrição mediante pagamento';
$string['pluginname_desc'] = 'O método de inscrição mediante pagamento permite configurar cursos que exigem pagamento. Se a taxa de qualquer curso for definida como zero, os estudante não serão obrigados a pagar pela inscrição. Há uma taxa para que você define aqui como padrão para todo o site e, em seguida, uma configuração que pode ser definida para cada curso individualmente. A taxa do curso substitui a taxa do site.';
$string['privacy:metadata'] = 'O plugin de inscrições mediante pagamento não armazena dados pessoais.';
$string['purchasedescription'] = 'Inscrição no curso {$a}';
$string['sendpaymentbutton'] = 'Selecione o tipo de pagamento';
$string['status'] = 'Permitir inscrição em inscrições mediante pagamento';
$string['status_desc'] = 'Permitir que os usuários façam um pagamento para se inscrever nesse curso por padrão.';
