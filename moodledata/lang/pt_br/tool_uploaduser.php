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
 * Strings for component 'tool_uploaduser', language 'pt_br', version '4.1'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir remoções';
$string['allowrenames'] = 'Permitir renomeação';
$string['allowsuspends'] = 'Habilitar suspensão e ativação de contas';
$string['assignedsysrole'] = 'Papel do Sistema atribuído {$a}';
$string['clidefault'] = 'Padrão:';
$string['clierrorargument'] = 'Valor para o argumento - {$a->name} não é válido. Valores permitidos: {$a->values}';
$string['clifile'] = 'Caminho para o arquivo CSV com os dados dos usuários. Obrigatório.';
$string['clifilenotreadable'] = 'O arquivo {$a} não existe ou não é legível';
$string['clihelp'] = 'Imprime essa ajuda.';
$string['climissingargument'] = 'O argumento --{$a} é obrigatório';
$string['clititle'] = 'Ferramenta de upload de usuários por linha de comando';
$string['clivalidationerror'] = 'Erro de validação:';
$string['csvdelimiter'] = 'Delimitador do CSV';
$string['defaultvalues'] = 'Valores padrões';
$string['deleteerrors'] = 'Excluir erros';
$string['duplicateemail'] = 'Múltiplos usuários com {$a} emails detectados';
$string['encoding'] = 'Codificação';
$string['errormnetadd'] = 'Não é possível adicionar usuários remotos';
$string['errorprefix'] = 'Erro:';
$string['errors'] = 'Erros';
$string['examplecsv'] = 'Exemplo de arquivo de texto';
$string['examplecsv_help'] = 'Para usar o arquivo de texto de exemplo, descarregue-o, e abra-o em um editor de texto ou de planilhas. Deixe a primeira linha inalterada, e edite as linhas seguintes (registros), acrescentando seus dados de usuário, adicionando mais linhas, se necessário. Salve o arquivo como CSV, e faça o seu upload.

O arquivo de texto de exemplo também pode ser usado para testes, pois permite que você pré-visualize os dados de usuário e que possa escolher cancelar a ação antes que se criem as contas de usuário.';
$string['infoprefix'] = 'Informação:';
$string['invalidtheme'] = 'O tema "{$a}" não está instalado e será ignorado.';
$string['invalidupdatetype'] = 'Não pode selecionar esta opção com o \'Tipo de carregamento\' escolhido.';
$string['invaliduserdata'] = 'Foram detectados dados inválidos para o usuário {$a} que foram apagados automaticamente.';
$string['linex'] = 'Linha {$a}';
$string['nochanges'] = 'Nenhuma mudança';
$string['notheme'] = 'Nenhum tema está definido para este usuário.';
$string['pluginname'] = 'Upload de usuário';
$string['privacy:metadata'] = 'O plugin de upload do usuário não armazena nenhum dado pessoal.';
$string['renameerrors'] = 'Renomear erros';
$string['requiredtemplate'] = 'Necessário. Você deve usar sintaxe padrão aqui (%l = lastname, %f = firstname, %u = username). Veja ajuda para detalhes e exemplos.';
$string['rowpreviewnum'] = 'Linhas de pré-visualização';
$string['unassignedsysrole'] = 'Atribuição de papel de sistema removida {$a}';
$string['uploadpicture_baduserfield'] = 'O atributo de usuário especificado não é válido. Favor tentar novamente.';
$string['uploadpicture_cannotmovezip'] = 'Não pode mover arquivo zip para o diretório temporário.';
$string['uploadpicture_cannotprocessdir'] = 'Não consegue processar arquivos unzipados.';
$string['uploadpicture_cannotsave'] = 'Não pode salvar imagem para o usuário {$a}. Verifique o arquivo de imagem original.';
$string['uploadpicture_cannotunzip'] = 'Não consegue unzipar arquivos de imagens.';
$string['uploadpicture_invalidfilename'] = 'Arquivo de imagem {$a} tem caracteres inválidos em seu nome. Saltando.';
$string['uploadpicture_overwrite'] = 'Sobreescrever as imagens de usuários?';
$string['uploadpicture_userfield'] = 'Atributo de usuário a ser usado para comparar imagens:';
$string['uploadpicture_usernotfound'] = 'Usuário com um \'{$a->userfield}\' com valor de \'{$a->uservalue}\'';
$string['uploadpicture_userskipped'] = 'Saltando usuário {$a} (já tem uma imagem).';
$string['uploadpicture_userupdated'] = 'Imagem atualizada para o usuário {$a}.';
$string['uploadpictures'] = 'Carregar imagens de usuários';
$string['uploadpictures_help'] = '<p>Imagens de usuários podem ser carregadas através de um arquivo compactado (zip) de arquivos de imagens. Os arquivos de imagens devem ter o nome na forma <i>atributo-do-usuário.extensão</i>. Por exemplo, se o atributo de usuário escolhido para identificar as imagens for o usuário (username) e o usuário for usuario1234, então o nome do arquivo deverá ser usuario1234.jpg.</p>
<p>Os tipos de arquivos de imagens aceitos são gif, jpg, e png.</p>
<p>Nome de arquivos de imagem não diferenciam maiúsculas de minúsculas.</p>';
$string['uploaduser:uploaduserpictures'] = 'Upload de fotos de usuários';
$string['uploadusers'] = 'Carregar lista de usuários';
$string['uploadusers_help'] = 'Usuários podem ser enviados (e opcionalmente inscritos em cursos) por arquivo de texto. O formato deste arquivo deve ser o seguinte:

* Cada linha do arquivo contém um registro
* Cada registro é uma sequência de dados separados pelo delimitador definido
* O primeiro registro contém a lista dos nomes dos campos que definem definem o formato do restante dos registros do arquivo
* Os nomes de campos obrigatórios são username,password,firstname,lastname,email';
$string['uploaduserspreview'] = 'Carregar apresentações dos usuários';
$string['uploadusersresult'] = 'Resultados do carregamento de usuários';
$string['useraccountupdated'] = 'Usuário atualizado';
$string['useraccountuptodate'] = 'Usuário atualizado';
$string['userdeleted'] = 'Usuário excluído';
$string['userrenamed'] = 'Usuário renomeado';
$string['userscreated'] = 'Usuários criados';
$string['usersdeleted'] = 'Usuários excluídos';
$string['usersrenamed'] = 'Usuários renomeados';
$string['usersskipped'] = 'Usuários saltados';
$string['usersupdated'] = 'Usuários atualizados';
$string['usersweakpassword'] = 'Usuários com senha fraca';
$string['userthemesnotallowed'] = 'Os temas do usuário não estão habilitados. Portanto, todos os temas incluídos no arquivo de envio de usuários serão ignorados.';
$string['uubulk'] = 'Selecionar operações de usuário em massa';
$string['uubulkall'] = 'Todos usuários';
$string['uubulknew'] = 'Novos usuários';
$string['uubulkupdated'] = 'Atualizar usuários';
$string['uucsvline'] = 'Linha CSV';
$string['uulegacy1role'] = '(Estudante Original) tipoN=1';
$string['uulegacy2role'] = '(Professor Original) tipoN=2';
$string['uulegacy3role'] = '(Professor que não edita original) tipoN=3';
$string['uunoemailduplicates'] = 'Proibir duplicação de endereços de email';
$string['uuoptype'] = 'Tipo de transmissão';
$string['uuoptype_addinc'] = 'Adicionar todos, adicionando números aos nomes de usuário quando necessário';
$string['uuoptype_addnew'] = 'Adicionar somente novos, saltar usuários já existentes';
$string['uuoptype_addupdate'] = 'Adicionar novos e atualizar usuários já existentes';
$string['uuoptype_update'] = 'Somente atualizar usuários já existentes';
$string['uupasswordcron'] = 'Gerado no agendador de tarefas';
$string['uupasswordnew'] = 'Nova senha do usuário';
$string['uupasswordold'] = 'Senha de usuário já existente';
$string['uustandardusernames'] = 'Padronizar identificadores de usuários (usernames)';
$string['uuupdateall'] = 'Sobreponha com o arquivo e padrões';
$string['uuupdatefromfile'] = 'Sobreponha com o arquivo';
$string['uuupdatemissing'] = 'Preencher o que falta no arquivo e em padrões';
$string['uuupdatetype'] = 'Detalhes de usuário existente';
$string['uuusernametemplate'] = 'Modelo para identificação de usuário';
$string['warningprefix'] = 'Aviso:';
