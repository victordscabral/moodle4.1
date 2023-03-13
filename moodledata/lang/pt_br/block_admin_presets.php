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
 * Strings for component 'block_admin_presets', language 'pt_br', version '4.1'.
 *
 * @package     block_admin_presets
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado';
$string['actionbase'] = 'Modelos';
$string['actiondelete'] = 'Excluir modelo';
$string['actionexport'] = 'Exportar configurações';
$string['actionimport'] = 'Importar configurações';
$string['actionload'] = 'Carregar configurações';
$string['actionrollback'] = 'Reverter alterações aplicadas';
$string['actualvalue'] = 'Valor atual';
$string['admin_presets:addinstance'] = 'Adicionar um novo bloco Admin Presets';
$string['adminsettings'] = 'Configurações de Administrador';
$string['author'] = 'Autor';
$string['autohidesensiblesettings'] = 'Excluir automaticamente configurações confidenciais';
$string['baseshow'] = 'listar modelos';
$string['created'] = 'Criado';
$string['deleteexecute'] = 'Execução';
$string['deletepreset'] = 'Modelo {$a} será excluído, você tem certeza?';
$string['deletepreviouslyapplied'] = 'Este modelo foi aplicado anteriormente, se você excluí-lo não poderá retornar ao estado anterior';
$string['deleteshow'] = 'Confirmar';
$string['errordeleting'] = 'Erro ao excluir do DB';
$string['errorinserting'] = 'Erro ao excluir do DB';
$string['errornopreset'] = 'Não existe um modelo com esse nome';
$string['errorupgradetablenames'] = 'A atualização de admin_presets falhou,
atualize o Moodle para atualizar admin_presets. Você pode restaurar o código dos blocos / admin_presets anteriores até então';
$string['errorupgradetablenamesdebug'] = 'Os nomes da tabela excedem o limite de caracteres permitidos,
isso é resolvido usando as versões mais recentes do Moodle 2.0, Moodle 2.1 e Moodle 2.2';
$string['eventpresetdeleted'] = 'Modelo excluído';
$string['eventpresetdownloaded'] = 'Modelo baixado';
$string['eventpresetexported'] = 'Modelo exportado';
$string['eventpresetimported'] = 'Modelo importado';
$string['eventpresetloaded'] = 'Modelo carregado';
$string['eventpresetpreviewed'] = 'Modelo visualizado';
$string['eventpresetreverted'] = 'Modelo revertido';
$string['eventpresetslisted'] = 'Os modelos foram listados';
$string['exportexecute'] = 'salvando';
$string['exportshow'] = 'Selecionar Configurações';
$string['falseaction'] = 'Ação não suportada nesta versão';
$string['falsemode'] = 'Modo não suportado nesta versão';
$string['headingload'] = 'Selecione as configurações para carregar';
$string['imported'] = 'Importado';
$string['importexecute'] = 'Importando';
$string['importshow'] = 'Selecione o arquivo';
$string['load'] = 'Carregado';
$string['loadexecute'] = 'Alterações aplicadas';
$string['loading'] = 'carregando';
$string['loadpreview'] = 'Visualizar modelo';
$string['loadselected'] = 'Carregar configurações selecionadas';
$string['loadshow'] = 'Selecione Configurações';
$string['markedasadvanced'] = 'Marcado como avançado';
$string['markedasforced'] = 'Marcado como forçado';
$string['markedaslocked'] = 'Marcado como bloqueado';
$string['markedasnonadvanced'] = 'Marcado como não avançado';
$string['markedasnonforced'] = 'Marcado como não forçado';
$string['markedasnonlocked'] = 'Marcado como não bloqueado';
$string['newvalue'] = 'Novo valor da configuração';
$string['noparamtype'] = 'Não há um tipo de parâmetro para essa configuração';
$string['nopresets'] = 'Você não tem modelos';
$string['nothingloaded'] = 'Todas as configurações do modelo foram ignoradas, elas já estão carregadas';
$string['notpreviouslyapplied'] = 'Modelo não aplicado anteriormente';
$string['novalidsettings'] = 'Configuração inválida';
$string['novalidsettingsselected'] = 'Configuração inválida selecionada';
$string['oldvalue'] = 'Valor anterior da configuração';
$string['pluginname'] = 'Admin presets';
$string['presetmoodlerelease'] = 'Moodle release';
$string['presetname'] = 'Nome do modelo';
$string['presetsettings'] = 'Configurações do modelo';
$string['preview'] = 'Visualizar';
$string['previewpreset'] = 'Visualizar modelo';
$string['privacy:null_reason'] = 'O bloco Admin Presets não afeta nem armazena nenhum dado do usuário';
$string['renamepreset'] = 'Renomear modelo';
$string['rollback'] = 'reverter';
$string['rollbackexecute'] = 'retornar ao estado anterior';
$string['rollbackfailures'] = 'As seguintes configurações não podem ser restauradas,
 os valores atuais diferem dos valores aplicados pelo modelo';
$string['rollbackresults'] = 'Configurações restauradas com sucesso';
$string['rollbackshow'] = 'lista de modelos utilizados';
$string['selectedvalues'] = 'Valores selecionados da configuracão';
$string['selectfile'] = 'Selecionar arquivo';
$string['sensiblesettings'] = 'Configuração confidencial para pular se "Excluir automaticamente configurações confidenciais" estiver marcado';
$string['sensiblesettingstext'] = 'Adicionar os elementos separados por \',\' e com o formato SETTINGNAME@@PLUGINNAME';
$string['settingname'] = 'Nome da configuração';
$string['settingsapplied'] = 'Configurações aplicadas';
$string['settingsnotapplicable'] = 'Configurações não aplicáveis a esta versão do Moodle';
$string['settingsnotapplied'] = 'Configurações ignoradas, todas já estão carregadas';
$string['settingvalue'] = 'com valor';
$string['site'] = 'Site';
$string['successimported'] = 'Modelo importado';
$string['timeapplied'] = 'Horário aplicado';
$string['toexportclick'] = 'Para exportar suas configurações clique {$a}';
$string['toimportclick'] = 'Para importar um admin preset clique {$a}';
$string['value'] = 'valor da configuração';
$string['voidvalue'] = 'essa configuração não tem um valor';
$string['wrongfile'] = 'Arquivo errado';
$string['wrongid'] = 'Id errado';
