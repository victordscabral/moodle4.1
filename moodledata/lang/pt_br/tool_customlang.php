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
 * Strings for component 'tool_customlang', language 'pt_br', version '4.1'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Salvar termos no pacote de idioma';
$string['checkout'] = 'Abrir pacote de idioma para edição';
$string['checkoutdone'] = 'Pacote de idioma carregado';
$string['checkoutinprogress'] = 'Carregando pacote de idioma';
$string['cliexportfileexists'] = 'O arquivo para {$a->lang} já existe, ignorando. Se você deseja sobrescrever, adicione a opção --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Arquivo {$a->filepath} não encontrado para o idioma {$a->lang}. Ignorando este arquivo.';
$string['cliexportheading'] = 'Começando a exportar arquivos lang.';
$string['cliexportnofilefoundforlang'] = 'Nenhum arquivo encontrado para exportar. Ignorando exportação para este idioma.';
$string['cliexportstartexport'] = 'Exportando idioma {$a}';
$string['cliexportzipdone'] = 'Zip criado: {$a}';
$string['cliexportzipfail'] = 'Não é possível criar zip {$a}';
$string['clifiles'] = 'Arquivos para importar para {$a}';
$string['cliimporting'] = 'Importar strings de arquivos (modo {$a})';
$string['climissingfiles'] = 'Arquivos válidos ausentes';
$string['climissinglang'] = 'Idioma ausente';
$string['climissingmode'] = 'Modo ausente ou inválido (válido é tudo, novo ou atualização)';
$string['climissingsource'] = 'Arquivo ou pasta ausente';
$string['clinolog'] = 'Nada para importar para {$a}';
$string['confirmcheckin'] = 'Você está prestes a salvar modificações no seu pacote de idioma local. Isto irá exportar os termos personalizados do tradutor para seu diretório de dados do Moodle (moodledata) e o moodle passará a usar os termos modificados. Clique em "Continuar" para salvar.';
$string['customlang:edit'] = 'Editar tradução local';
$string['customlang:export'] = 'Exportar tradução local';
$string['customlang:view'] = 'Ver tradução local';
$string['editlangpack'] = 'Editar pacote de idiomas';
$string['export'] = 'Exportar strings personalizadas';
$string['exportfilter'] = 'Selecione o(s) componente(s) para exportar';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Filtrar strings';
$string['filtercomponent'] = 'Mostrar strings desses componentes';
$string['filtercustomized'] = 'Somente personalizadas';
$string['filtermodified'] = 'Modificada somente nessa sessão';
$string['filteronlyhelps'] = 'Somente Ajuda';
$string['filtershowstrings'] = 'Exibir texto';
$string['filterstringid'] = 'Identificador de string';
$string['filtersubstring'] = 'Somente strings contendo';
$string['headingcomponent'] = 'Componente';
$string['headinglocal'] = 'Personalização local';
$string['headingstandard'] = 'Texto padrão';
$string['headingstringid'] = 'Texto';
$string['import'] = 'Importar strings personalizadas';
$string['import_all'] = 'Crie ou atualize todas as strings do(s) componente(s)';
$string['import_mode'] = 'Modo de importação';
$string['import_new'] = 'Crie apenas strings sem personalização local';
$string['import_update'] = 'Atualize apenas strings com personalização local';
$string['importfile'] = 'Importar arquivo';
$string['langpack'] = 'Componente(s) de idioma';
$string['markinguptodate'] = 'Marcar a personalização como atualizada';
$string['markinguptodate_help'] = 'Traduções personalizadas podem ficar desatualizadas se a "string" original em inglês ou a tradução principal forem modificadas depois  que a string for personalizada no seu site. Revise a tradução personalizada. Se ela estiver atualizada, clique no checkbox. Caso contrário, edite a "string".';
$string['markuptodate'] = 'marcar como atualizado';
$string['modifiedno'] = 'Não há strings modificadas para salvar.';
$string['modifiednum'] = 'Há {$a} strings modificadas. Você deseja salvar essas alterações no pacote de idioma local?';
$string['nolocallang'] = 'Nenhuma string local encontrada.';
$string['nostringsfound'] = 'Nenhuma string encontrada, por favor altere as configurações de filtragem';
$string['notice_ignorenew'] = 'Ignorando a string {$a->component}/{$a->stringid} porque ela não é personalizada.';
$string['notice_ignoreupdate'] = 'Ignorando a string {$a->component}/{$a->stringid} porque ela já está definida.';
$string['notice_inexitentstring'] = 'String {$a->component}/{$a->stringid} não encontrada.';
$string['notice_missingcomponent'] = 'Componente ausente {$a->component}.';
$string['notice_success'] = 'String {$a->component}/{$a->stringid} atualizada com sucesso.';
$string['placeholder'] = 'Placeholders';
$string['placeholder_help'] = 'Placeholders são declarações como `{$a}` ou `{$a->algumacoisa}` dentro das strings. Estes são substituidos por valores quando a string é impressa.

É importante copiá-los exatamente como na string original. Não os traduza nem altere a orientação da esquerda para a direita.';
$string['placeholderwarning'] = 'string contém um placehoder';
$string['pluginname'] = 'Personalização de idioma';
$string['privacy:metadata'] = 'O plugin Personalização de idiomas não armazena nenhum dado pessoal.';
$string['savecheckin'] = 'Salvar alterações no pacote de idioma';
$string['savecontinue'] = 'Aplicar mudanças e continuar editando';
