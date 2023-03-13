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
 * Strings for component 'enrol_paymentpagseguro', language 'pt_br', version '4.1'.
 *
 * @package     enrol_paymentpagseguro
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cost'] = 'Preço cobrado todo mês';
$string['cost2'] = 'Preço para inscrição';
$string['cost2_help'] = 'Valor que o usuário deve pagar para acessar o curso!';
$string['cost_help'] = 'Valor cobrado em cada mês no pagamento mensal!';
$string['costerror'] = 'O preço da assinatura deve ser o número';
$string['costmonthly'] = 'Custo mensal: R$ {$a}';
$string['costunique'] = 'Custo: R$ {$a}';
$string['defaultrole'] = 'Atribuir papel';
$string['defaultrole_help'] = 'Selecione o papel que deve ser atribuído aos usuários durante os cadastros pagos via Pagseguro';
$string['email'] = 'E-mail do PagSeguro';
$string['email_desc'] = 'E-mail do PagSeguro';
$string['enrolenddate'] = 'Prazo de inscrição';
$string['enrolenddate_help'] = 'Se ativado, os usuários só podem se inscrever até essa data.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_help'] = 'O período de tempo em que a assinatura é válida, começando no momento em que o usuário é inscrito. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Início das entradas';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários só podem ser inscritos a partir desta data.';
$string['errorapi'] = 'API PagSeguro!';
$string['errorlowvalue'] = 'O valor é muito baixo!';
$string['errornoenrolment'] = 'Nenhuma inscrição encontrada!';
$string['expiredaction'] = 'Ação após a expiração da inscrição';
$string['expiredaction_help'] = 'Qual ação realizar quando a inscrição expirar?';
$string['faulback'] = 'Desabilitar no padrão?';
$string['faulback_help'] = 'Se o pagamento da mensalidade falhar, a mensalidade deve ser desativada?!';
$string['months'] = 'Número de meses';
$string['months_help'] = 'Se definido como 0 (ZERO) o pagamento é único. Se você definir mais de 3 será mensal!';
$string['monthserror'] = 'O mês deve ser um número inteiro entre 0 e 24!';
$string['monthsmaxerror'] = 'máximo de 24 meses';
$string['nocost'] = '<span style=\'color: #ff0404\'>Nenhum preço definido pelo administrador!</span>';
$string['payforpagseguro'] = 'Pague agora com PagSeguro';
$string['paymentpagseguro:config'] = 'Configure o método de inscrição do PagSeguro';
$string['paymentpagseguro:manage'] = 'Gerenciar usuários inscritos';
$string['paymentpagseguro:unenrol'] = 'Cancelar a inscrição de usuários do curso';
$string['paymentpagseguro:unenrolself'] = 'Remover-me do curso';
$string['paymentredirect'] = '<h2>Criando requisição de pagamento</h2>
     <p>URL de pagamento: <strong>{$a}</strong></p>
     <p><a title=\\"URL de pagamento\\" href=\\"{$a}\\" target=\\_blank\\">Vá para o URL de pagamento.</a></p>';
$string['paytext'] = 'Todo dia {$a->date} será cobrado R$ {$a->costlocaled} pelo curso {$a->fullname}';
$string['pluginname'] = 'Assinatura com pagamento pelo PagSeguro';
$string['pluginname_desc'] = 'Curso Grátis para pagamento via PagSeguro!';
$string['privacy:metadata'] = 'Plugin compartilha dados com o PagSeguro';
$string['requestpayforpagseguro'] = 'Este curso exige o pagamento da taxa de inscrição antes do acesso.';
$string['signforpagseguro'] = 'Cadastre-se agora com o PagSeguro';
$string['status'] = 'Habilitar assinaturas?';
$string['subscriptions'] = 'Habilitar assinaturas no formulário';
$string['subscriptions_desc'] = 'Se marcada, habilita a opção de assinaturas.';
$string['token'] = 'Token de página segura';
$string['token_desc'] = 'Token de página segura';
$string['unenrolselfconfirm'] = 'Deseja realmente desinstalar do curso "{$a}"?';
