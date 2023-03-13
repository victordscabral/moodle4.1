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
 * Strings for component 'tool_migratehvp2h5p', language 'pt_br', version '4.1'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Tentativas de usuários';
$string['cannot_migrate'] = 'Não é possível migrar a atividade';
$string['contenttype'] = 'Tipo de conteúdo';
$string['copy2cb'] = 'Esses conteúdos devem ser adicionados ao banco de conteúdo?';
$string['copy2cb_no'] = 'Não, eles devem ser criados apenas na atividade.';
$string['copy2cb_yeswithlink'] = 'Sim, e um link para esses arquivos deve ser usado na atividade';
$string['copy2cb_yeswithoutlink'] = 'Sim, mas uma cópia será usada na atividade (alterações no banco de conteúdo não serão refletidas na atividade)';
$string['error_contenttypeh5p_disabled'] = 'O tipo de banco de conteúdo H5P está desativado. Deve ser habilitado para migrar atividades de mod_hvp e adicioná-los ao banco de conteúdo também. Você pode habilitar este tipo de conteúdo em \'Administração do Site | Plugins | Banco de conteúdo | Gerenciar tipos de conteúdo\' ou execute novamente a ferramenta de migração e selecione \'Não, eles devem ser criados apenas na atividade.\' (ou \'copy2cb = 0\' se você está executando a CLI) para evitar a criação de arquivos no banco de conteúdo.';
$string['error_modh5pactivity_disabled'] = 'A atividade H5P está desativada. Deve ser habilitado para migrar atividades de mod_hvp';
$string['event_hvp_migrated'] = 'mod_hvp migrou para mod_h5pactivity';
$string['graded'] = 'Usuários avaliados';
$string['hvpactivities'] = 'Atividades mod_hvp pendentes';
$string['id'] = 'Id';
$string['keeporiginal'] = 'Selecione o que fazer com a atividade original depois de migrada';
$string['keeporiginal_delete'] = 'Excluir a atividade original';
$string['keeporiginal_hide'] = 'Ocultar a atividade original';
$string['keeporiginal_nothing'] = 'Deixe a atividade original como está';
$string['migrate'] = 'Migrar';
$string['migrate_fail'] = 'Erro na migração da atividade hvp com id {$a}';
$string['migrate_gradesoverridden'] = 'Atividade original do mod_hvp "{$a->name}", com id {$a->id}, migrada com sucesso. Contudo,
    ela tem algumas informações de avaliação substituídas, como feedback, que não foi migrada porque a atividade original está
    configurada com uma nota máxima inválida (deve ser maior que 0 para ser migrada para o livro de notas).';
$string['migrate_gradesoverridden_notdelete'] = 'Atividade original do mod_hvp "{$a->name}", com id {$a->id}, migrada com sucesso.
    No entanto, ela tem algumas informações de avaliação substituídas, como feedback, que não foi migrada porque a atividade original
    está configurada com uma nota máxima inválida (deve ser maior que 0 para ser migrada para o livro de notas).
    A atividade original foi ocultada em vez de removida.';
$string['migrate_success'] = 'Atividade Hvp com id {$a} migrada com sucesso';
$string['nohvpactivities'] = 'Não há atividades mod_hvp para migrar para mod_h5pactivity.';
$string['pluginname'] = 'Migrar conteúdo de mod_hvp para mod_h5pactivity';
$string['privacy:metadata'] = 'Migrar conteúdo de mod_hvp para mod_h5pactivity não armazena nenhum dado pessoal';
$string['savedstate'] = 'Estado salvo';
$string['selecthvpactivity'] = 'Selecione {$a} atividade mod_hvp';
$string['settings'] = 'Configurações de migração';
