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
 * Strings for component 'grading', language 'pt_br', version '4.1'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' está selecionado como o método de avaliação para a área \'{$a->area}\'';
$string['activemethodinfonone'] = 'Não há nenhum método de avaliação avançado selecionado para a área \'{$a->area}\'. Avaliação simples será usada.';
$string['changeactivemethod'] = 'Muda o método de avaliação para';
$string['clicktoclose'] = 'clique para fechar';
$string['error:gradingunavailable'] = 'O método de avaliação avançada não está definido corretamente. Verifique todas as opções de avaliação do fórum nas configurações do fórum.';
$string['error:notinrange'] = 'Nota fornecida inválida \'{$a->nota}\'. As notas devem estar entre 0 e {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Não foi possível inicializar o elemento de formulário de avaliação';
$string['formnotavailable'] = 'Um método de avaliação avançado foi selecionado, mas o formulário de avaliação ainda precisa ser definido.';
$string['gradingformunavailable'] = 'Aviso: o formulário de avaliação avançada não está pronto ainda. O método simples de avaliação será usado até que o formulário tenha um status válido.';
$string['gradingmanagement'] = 'Avaliação avançada';
$string['gradingmanagementtitle'] = 'Avaliação avançada: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Método de avaliação';
$string['gradingmethod_help'] = 'Escolha o método avançado de avaliação que deve ser utilizado para cálculo de notas no contexto atual.

Para desabilitar a avaliação avançada e retornar ao método de avaliação padrão, escolha \'Avaliação simples direta\'';
$string['gradingmethodnone'] = 'Método simples de avaliação';
$string['gradingmethods'] = 'Métodos de avaliação';
$string['manageactionclone'] = 'Criar avaliação a partir de um modelo';
$string['manageactiondelete'] = 'Excluir o formulário atualmente definido';
$string['manageactiondeleteconfirm'] = 'Você vai apagar o formulário de avaliação \'{$a->formname}\' e todas as informações associadas do \'{$a->component} ({$a->area})\'. Por favor, certifique-se que entende as seguintes consequências:

* Não há como reverter essa operação.
* Você pode mudar para outro método de avaliação incluindo o \'Método simples de avaliação\' sem apagar esse formulário.
* Todas as informações sobre como os formulários são preenchidos serão perdidas.
* As notas calculadas guardadas no livro de notas não serão afetadas. Mas a explicação sobre como elas foram calculadas não estará disponível.
* Essa operação não afeta eventuais cópias desse formulário em outras atividades.';
$string['manageactiondeletedone'] = 'O formulário foi excluído com sucesso';
$string['manageactionedit'] = 'Editar a definição atual de formulário';
$string['manageactionnew'] = 'Definir nova avaliação do início';
$string['manageactionshare'] = 'Publicar o formulário como novo modelo';
$string['manageactionshareconfirm'] = 'Você está prestes a fazer uma cópia do formulário de avaliação \'{$a}\' um novo modelo público. Outros usuários do site serão capazes de criar novos formulários de avaliação baseados neste modelo.';
$string['manageactionsharedone'] = 'O formulário foi salvo com sucesso como modelo';
$string['noitemid'] = 'Avaliação não é possível. O item de nota não existe.';
$string['nosharedformfound'] = 'Nenhum modelo encontrado';
$string['privacy:metadata:grading_definitions'] = 'Informações básicas sobre um formulário de avaliação avançado definido em uma área de avaliação.';
$string['privacy:metadata:grading_definitions:areaid'] = 'O ID da área em que o formulário de notas avançada está definido.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'O ID de definição de notas de onde isso foi copiado.';
$string['privacy:metadata:grading_definitions:description'] = 'A descrição do método de notas avançada.';
$string['privacy:metadata:grading_definitions:method'] = 'O método de nota que é responsável pela definição.';
$string['privacy:metadata:grading_definitions:name'] = 'O nome da definição de nota avançada.';
$string['privacy:metadata:grading_definitions:options'] = 'Algumas configurações desta definição de nota.';
$string['privacy:metadata:grading_definitions:status'] = 'O status desta definição avançada de nota.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'A hora em que a definição de nota foi copiada.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'A hora em que a definição de nota foi criada.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'A hora em que a definição de nota foi modificada pela última vez.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'O ID do usuário que criou a definição de nota.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'O ID do usuário que modificou a definição de nota pela última vez.';
$string['privacy:metadata:grading_instances'] = 'Registro de avaliação para um item avaliado por um avaliador.';
$string['privacy:metadata:grading_instances:feedback'] = 'O feedback dado pelo usuário.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'O formato de texto do feedback dado pelo usuário.';
$string['privacy:metadata:grading_instances:raterid'] = 'O ID do usuário que avaliou a instância de avaliação.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'A nota para a instância de avaliação.';
$string['privacy:metadata:grading_instances:status'] = 'O status desta instância de avaliação.';
$string['privacy:metadata:grading_instances:timemodified'] = 'A hora em que a instância de avaliação foi modificada pela última vez.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Dados para o método de nota.';
$string['searchownforms'] = 'Incluir meus próprios formulários';
$string['searchtemplate'] = 'Busca de formulários de avaliação';
$string['searchtemplate_help'] = 'Você pode procurar uma forma de classificação e usá-lo como um modelo para a nova forma de classificação aqui. Basta digitar as palavras que devem aparecer em algum lugar no nome do formulário, a sua descrição ou o próprio corpo formulário. Para procurar uma frase, envolva toda a consulta entre aspas duplas.

Por padrão, apenas as formas de classificação que tenham sido salvos como modelos compartilhados são incluídos nos resultados da pesquisa. Você também pode incluir todas as suas próprias formas de classificação nos resultados da pesquisa. Dessa forma, você pode simplesmente re-utilizar as suas formas de classificação, sem compartilhá-los. Únicas formas marcadas como \'Pronto para uso "pode ser re-utilizado desta forma.';
$string['statusdraft'] = 'Rascunho';
$string['statusready'] = 'Pronto para uso';
$string['templatedelete'] = 'Excluir';
$string['templatedeleteconfirm'] = 'Você está prestes a apagar o modelo compartilhado \'{$a}\'. Apagá-lo não afetará os formulários que foram criados a partir dele.';
$string['templateedit'] = 'Editar';
$string['templatepick'] = 'Usar este modelo';
$string['templatepickconfirm'] = 'Você quer usar o formulário de avaliação \'{$a->formname}\' como modelo para o novo formulário \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Usar este fomulário como modelo';
$string['templatesource'] = 'Localização: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Meus formulários';
$string['templatetypeshared'] = 'Modelo compartilhado';
