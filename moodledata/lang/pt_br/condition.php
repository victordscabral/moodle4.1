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
 * Strings for component 'condition', language 'pt_br', version '4.1'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Adicionar {no} condições de atividades ao formulário';
$string['addgrades'] = 'Adicionar {no} condições de avaliação ao formulário';
$string['adduserfields'] = 'Adicionar {no} campos de condição ao formulário';
$string['availabilityconditions'] = 'Restringir acesso';
$string['availablefrom'] = 'Permitir o acesso de';
$string['availablefrom_help'] = 'As datas de acesso desde/até determinam quando os cursistas podem ter acesso às atividades pelas referências na página do curso.

A diferença entre as data de acesso deste/até e a configuração de data de disponibilidade da atividade é que fora das datas configuradas esta última opção permite que os cursistas vejam a descrição da atividade, enquanto as datas de acesso desde/até impede qualquer acesso.';
$string['availableuntil'] = 'Permitir o acesso até';
$string['badavailabledates'] = 'Datas inválidas. Se você definir ambas as datas, a data "Permitir acesso de " deve ser anterior à data "até".';
$string['badgradelimits'] = 'Caso você escolha um limite de nota alto e baixo, o limite alto deve ser maior que o limite baixo.';
$string['completion_complete'] = 'deve ser marcada como concluída';
$string['completion_fail'] = 'deve ser concluída com nota de reprovação';
$string['completion_incomplete'] = 'não deve ser marcada como concluída';
$string['completion_pass'] = 'deve ser concluída com nota de aprovação';
$string['completioncondition'] = 'Condição de conclusão de atividades';
$string['completioncondition_help'] = 'Esta configuração determina qualquer condição de conclusão de outras atividades que deva ser satisfeita para ter acesso a esta atividade. Note que antes deve ter sido habilitado o acompanhamento de conclusão de atividades.

Se desejado pode se estabelecer múltiplas condições de conclusão. Nesse caso, o acesso à atividade só será permitido quando TODAS as condições forem satisfeitas.';
$string['completionconditionsection'] = 'Condição para conclusão da atividade';
$string['completionconditionsection_help'] = 'Esta configuração determina quais condições precisam ser satisfeitas para que um estudante possa acessar a seção. Note que o monitoramento de conclusão precisa estar configurado antes que uma condição de conclusão de atividade possa ser configurada.

Múltiplas condições de conclusão podem ser configuradas, se desejado. Neste caso, o acesso a seção será permitido somente quando TODAS as condições forem satisfeitas.';
$string['configenableavailability'] = 'Se habilitada, esta opção permite configurar condições que controlam quando é permitido o acesso a uma atividade, baseado em datas, notas ou conclusão de outras atividades.';
$string['contains'] = 'contém';
$string['doesnotcontain'] = 'não contém';
$string['enableavailability'] = 'Permitir o acesso condicional';
$string['endswith'] = 'termina com';
$string['fielddeclaredmultipletimes'] = 'Você não pode declarar o mesmo campo mais de uma vez por atividade.';
$string['grade_atleast'] = 'deve ser pelo menos';
$string['grade_upto'] = 'e menos de';
$string['gradecondition'] = 'Condição para a nota';
$string['gradecondition_help'] = 'Esta configuração determina qualquer condição de avaliação que tenha que ser satisfeita para ter acesso à atividade.

Podem ser estabelecidas condições de avaliação múltiplas. Nesse caso, a atividade só permitirá o acesso quando TODAS as condições de avaliação forem satisfeitas.
';
$string['gradeconditionsection'] = 'Condição de nota';
$string['gradeconditionsection_help'] = 'Esta condição determina quais condições tem que ser satisfeitas para acessar o tópico.

Diversas condições de ota pode ser configuradas, se desejado. Se optar por essa opção, o tópico somente estará acessível quando TODAS as condições forem satisfeitas.';
$string['gradeitembutnolimits'] = 'Você deve escolher um limite alto ou baixo , ou ambos.';
$string['gradelimitsbutnoitem'] = 'Você deve escolher um item de nota';
$string['gradesmustbenumeric'] = 'As notas mínimas e máximas devem ser numéricas (ou vazias)';
$string['groupingnoaccess'] = 'Você não pertence a um grupo que tem acesso a este tópico.';
$string['isempty'] = 'está vazio';
$string['isequalto'] = 'é igual a';
$string['isnotempty'] = 'não está vazio';
$string['none'] = '(nenhum)';
$string['notavailableyet'] = 'Não disponível ainda';
$string['requires_completion_0'] = 'Disponível apenas se a atividade <strong>{$a}</strong> estiver incompleta.';
$string['requires_completion_1'] = 'Disponível apenas quando a atividade <strong>{$a}</strong> for marcada como concluída.';
$string['requires_completion_2'] = 'Disponível apenas quando a atividade <strong>{$a}</strong> estiver concluída e aprovada.';
$string['requires_completion_3'] = 'Disponível apenas quando a atividade <strong>{$a}</strong> estiver concluída e não aprovada.';
$string['requires_date'] = 'Disponível a partir de {$a}.';
$string['requires_date_before'] = 'Disponível até {$a}.';
$string['requires_date_both'] = 'Disponível de {$a->from} até {$a->until}.';
$string['requires_date_both_single_day'] = 'Disponível em {$a}';
$string['requires_grade_any'] = 'Não disponível até que você tenha uma nota de <strong>{$a}</strong>';
$string['requires_grade_max'] = 'Não disponível a menos que você obtenha a nota necessária em <strong> {$a} </strong>.';
$string['requires_grade_min'] = 'Não disponível até que você atinja a nota necessária em <strong> {$a} </strong>.';
$string['requires_grade_range'] = 'Não está disponível a menos que você consiga uma pontuação particular em <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Disponível apenas para agrupamento <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'Não está disponível a menos que seu <strong>{$a->field}</strong> contenha <strong>{$a->value}.</strong>';
$string['requires_user_field_doesnotcontain'] = 'Não disponível se o seu <strong>{$a->field}</strong> contenha <strong>{$a->value}.</strong>';
$string['requires_user_field_endswith'] = 'Não está disponível a menos que seu <strong>{$a->field}</strong> termina com <strong>{$a->value}.</strong>';
$string['requires_user_field_isempty'] = 'Não está disponível a menos que seu <strong>{$a->field}</strong> esteja vazio.';
$string['requires_user_field_isequalto'] = 'Não está disponível a menos que seu <strong>{$a->field}</strong> seja igual a <strong>{$a->value}.</strong>';
$string['requires_user_field_isnotempty'] = 'Não disponível se o seu <strong>{$a->field}</strong> estiver vazio.';
$string['requires_user_field_startswith'] = 'Não está disponível a menos que seu <strong>{$a->field}</strong> comece com <strong>{$a->value}</strong> .';
$string['showavailability'] = 'Antes da atividade poder ser acessada';
$string['showavailability_hide'] = 'Ocultar atividade inteiramente no curso e livro de notas';
$string['showavailability_show'] = 'Mostrar a atividade em cinza, com informação sobre a restrição';
$string['showavailabilitysection'] = 'Antes de tópico ser acessado';
$string['showavailabilitysection_hide'] = 'Esconder interiamente o tópico';
$string['showavailabilitysection_show'] = 'Exibir tópico acinzentado com informações sobre a(s) restrição(ões)';
$string['startswith'] = 'começa com';
$string['userfield'] = 'Campo de usuário';
$string['userfield_help'] = 'Você pode restringir o acesso baseado em qualquer campo do perfil do usuário.';
$string['userrestriction_hidden'] = 'Restrito (completamente escondido, nenhuma mensagem): {$a}';
$string['userrestriction_visible'] = 'Restrições: ‘{$a}’';
