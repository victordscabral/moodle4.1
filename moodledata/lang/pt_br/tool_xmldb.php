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
 * Strings for component 'tool_xmldb', language 'pt_br', version '4.1'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Atual';
$string['addpersistent'] = 'Adicionar campos obrigatórios de "persistent"';
$string['aftertable'] = 'Depois da tabela:';
$string['back'] = 'Voltar';
$string['backtomainview'] = 'Voltar para principal';
$string['cannotuseidfield'] = 'Não é possível inserir o campo "id". É uma coluna auto-numérica';
$string['change'] = 'Mudar';
$string['charincorrectlength'] = 'Tamanho incorreto para campo "char"';
$string['check_bigints'] = 'Procurar "inteiros" incorretos no BD';
$string['check_defaults'] = 'Procurar valores padrão inconsistentes';
$string['check_foreign_keys'] = 'Procurar por violações de chave estrangeira';
$string['check_indexes'] = 'Procurar índices ausentes no banco de dados';
$string['check_oracle_semantics'] = 'Procurar semânticas de comprimento incorretas';
$string['checkbigints'] = 'Verifique inteiros';
$string['checkdefaults'] = 'Verificar padrões';
$string['checkforeignkeys'] = 'Verificar chaves estrangeiras';
$string['checkindexes'] = 'Verificar índices';
$string['checkoraclesemantics'] = 'Verificação semântica';
$string['completelogbelow'] = '(veja abaixo o log completo da pesquisa)';
$string['confirmcheckbigints'] = 'Essa funcionalidade irá procurar por <a href="http://tracker.moodle.org/browse/MDL-11038">possíveis campos inteiros errados</a> no servidor do seu Moodle, gerando (mas não executando) automaticamente as instruções SQL necessárias para ter todos os inteiross definidos corretamente no seu BD.

Uma vez geradas você pode copiar tais instruções e executá-las com sua interface SQL favorita (não esqueça de fazer uma cópia de segurança dos seus dados antes de fazer isso).

É altamente recomendável estar rodando a versão mais recente (versão +) disponível do Moodle antes de executar a busca por inteiros errados.

Essa funcionalidade não executa ações contra o BD (somente lê dele), então pode ser executada seguramente a qualquer momento.';
$string['confirmcheckdefaults'] = 'Essa funcionalidade procura valores padrão inconsistentes no seu Moodle, gerando (mas não executando!) as instruções SQL necessárias para ter os valores padrão definidos corretamente.

Uma vez geradas, você pode copiar tais instruções e executá-las com sua interface SQL favorita (não esqueça de fazer um hackup dos seus dados antes de fazer isso).

É altamente recomendável a versão mais recente (versão +) do Moodle antes de excutar a busca por valores padrão inconsistentes.

Essa funcionalidade não executa ações contra o BD (somente lê dele), então pode ser executada seguramente a qualquer momento.';
$string['confirmcheckforeignkeys'] = 'Esta funcionalidade irá procurar por possíveis violações das chaves estrangeiras nas definições contidas em install.xml. (Atualmente, o Moodle não gera restrições reais de chave estrangeira no banco de dados, e é por isso que dados inválidos podem estar presentes.)

É altamente recomendável executar o lançamento mais recente (+ versão) disponível de sua versão do Moodle antes de executar a pesquisa de possíveis violações das chaves estrangeiras.

Esta funcionalidade não executa nenhum ação contra o DB (somente efetua sua leitura), isso pode ser executado de forma segura a qualquer momento.';
$string['confirmcheckindexes'] = 'Essa funcionalidade procura possíveis índices que estejam faltando no seu Moodle, gerando (mas não executando!) automaticamente as instruções SQL para manter tudo atualizado.

Uma vez geradas você pode copiar tais instruções e executá-las com sua interface SQL favorita (não esqueça de fazer uma cópia de segurança dos seus dados antes de fazer isso).

É altamente recomendável estar com a versão mais recente (+ versão) do Moodle  antes de executar a busca por índices ausentes.

Essa funcionalidade pode ser executada com segurança a qualquer momento pois acessa o BD apenas como leitura.';
$string['confirmcheckoraclesemantics'] = 'Esta funcionalidade irá procurar por <a href="http://tracker.moodle.org/browse/MDL-29322">colunas VARCHAR2 no Oracle usando semântica BYTE</a> em seu servidor Moodle, gerando (mas não executando!) automaticamente as instruções necessárias SQL para que todas as colunas sejam convertidas para usar a semântica CHAR (melhor para compatibilidade entre bancos de dados e comprimento máximo de conteúdo aumentado).

Uma vez gerada, você pode copiar tais declarações e executá-las com segurança com sua interface SQL favorita (não se esqueça de fazer backup de seus dados antes de fazer isso).

É altamente recomendável estar executando a versão mais recente (+) disponível da sua versão do Moodle antes de executar a pesquisa da semântica BYTE.

Esta funcionalidade não executa qualquer ação contra o banco de dados (apenas leitura), então pode ser executado com segurança a qualquer momento.';
$string['confirmdeletefield'] = 'Você está certo de que quer excluir o campo:';
$string['confirmdeleteindex'] = 'Você está certo de que quer excluir o índice:';
$string['confirmdeletekey'] = 'Você está certo de que quer excluir a chave:';
$string['confirmdeletetable'] = 'Você está certo de que quer excluir a tabela:';
$string['confirmdeletexmlfile'] = 'Você está certo de que quer excluir o arquivo:';
$string['confirmrevertchanges'] = 'Você está absolutamente certo de que quer desfazer as mudanças realizadas em:';
$string['create'] = 'Criar';
$string['createtable'] = 'Criar tabela:';
$string['defaultincorrect'] = 'Padrão incorreto';
$string['delete'] = 'Excluir';
$string['delete_field'] = 'Excluir campo';
$string['delete_index'] = 'Excluir índice';
$string['delete_key'] = 'Excluir chave';
$string['delete_table'] = 'Excluir tabela';
$string['delete_xml_file'] = 'Excluir arquivo XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Índice da documentação:';
$string['documentationintro'] = 'Esta documentação é gerada automaticamente a partir das definições do banco de dados no XMLDB. Ela está disponível somente em Inglês.';
$string['down'] = 'Abaixo';
$string['duplicate'] = 'Duplicar';
$string['duplicatefieldname'] = 'Existe outro campo com esse nome';
$string['duplicatefieldsused'] = 'Duplicar campos usados';
$string['duplicateindexname'] = 'Nome de índice duplicado';
$string['duplicatekeyname'] = 'Existe outra chave com este nome';
$string['duplicatetablename'] = 'Existe outra table com este nome';
$string['edit'] = 'Editar';
$string['edit_field'] = 'Editar campo';
$string['edit_field_save'] = 'Salvar campo';
$string['edit_index'] = 'Editar índice';
$string['edit_index_save'] = 'Salvar índice';
$string['edit_key'] = 'Editar chave';
$string['edit_key_save'] = 'Salvar chave';
$string['edit_table'] = 'Editar tabela';
$string['edit_table_save'] = 'Salvar tabela';
$string['edit_xml_file'] = 'Editar arquivo XML';
$string['enumvaluesincorrect'] = 'Valores incorretos para campo "enum"';
$string['expected'] = 'Esperado';
$string['extensionrequired'] = 'Desculpe - a extensão \'{$a}\' do PHP é necessária para esta ação. Por favor instale a extensão se você quer utilizar este recurso.';
$string['extraindexesfound'] = 'Índices extras encontrados';
$string['field'] = 'Campo';
$string['fieldnameempty'] = 'Campo "nome" vazio';
$string['fields'] = 'Campos';
$string['fieldsnotintable'] = 'Campo não existe na tabela';
$string['fieldsusedinindex'] = 'Este campo é utilizado como índice.';
$string['fieldsusedinkey'] = 'Este campo é utilizado como chave.';
$string['filemodifiedoutfromeditor'] = 'Aviso: O arquivo modificado localmente enquanto estiver usando o Editor XMLDB. Salvar vai substituir as alterações locais.';
$string['filenotwriteable'] = 'Arquivo não pode ser escrito';
$string['fkunknownfield'] = 'Chave estrangeira {$a->keyname} na tabela {$a->tablename} de pontos a um campo inexistente {$a->reffield} na tabela referenciada {$a->reftable}.';
$string['fkunknowntable'] = 'Chave estrangeira {$a->keyname} na tabela {$a->tablename} de pontos a uma tabela inexistente {$a->reftable}.';
$string['fkviolationdetails'] = 'A chave estrangeira {$a->keyname} na tabela {$a->tablename} foi violada por {$a->numviolations} de {$a->numrows} linhas.';
$string['float2numbernote'] = 'Aviso: Embora campos "float" sejam 100% suportados pelo XMLDB, é recomendável migrar para o campos "number".';
$string['floatincorrectdecimals'] = 'Número incorreto de decimais para campo "float"';
$string['floatincorrectlength'] = 'Tamanho incorreto para campo "float"';
$string['generate_all_documentation'] = 'Toda a documentação';
$string['generate_documentation'] = 'Documentação';
$string['gotolastused'] = 'Ir para último arquivo usado';
$string['incorrectfieldname'] = 'Nome incorreto';
$string['incorrectindexname'] = 'Nome de índice incorreto';
$string['incorrectkeyname'] = 'Nome de chave incorreto';
$string['incorrecttablename'] = 'Nome de tabela incorreto';
$string['index'] = 'Índice';
$string['indexes'] = 'Índices';
$string['indexnameempty'] = 'O nome do índice é vazio';
$string['integerincorrectlength'] = 'Tamanho incorreto para campo "inteiro"';
$string['key'] = 'Chave';
$string['keynameempty'] = 'O nome da chave não pode ser vazio';
$string['keys'] = 'Chaves';
$string['listreservedwords'] = 'Lista de palavras reservadas<br/>(utilizada para manter as <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">Palavras reservadas do XMLDB</a> atualizadas)';
$string['load'] = 'Carregar';
$string['main_view'] = 'Visão principal';
$string['masterprimaryuniqueordernomatch'] = 'Os campos em sua chave externa devem ser listadas na mesma ordem em que são listados na CHAVE ÚNICA na tabela referenciada.';
$string['missing'] = 'Faltando';
$string['missingindexes'] = 'Foram encontrados índices ausentes';
$string['mustselectonefield'] = 'Você deve selecionar um campo para ver as ações relacionadas ao campo!';
$string['mustselectoneindex'] = 'Você deve selecionar um índice para ver as ações relacionadas ao índice!';
$string['mustselectonekey'] = 'Você deve selecionar uma chave para visualizar ações relacionas à chave!';
$string['new_table_from_mysql'] = 'Nova tabela do MySQL';
$string['newfield'] = 'Novo campo';
$string['newindex'] = 'Novo índice';
$string['newkey'] = 'Nova chave';
$string['newtable'] = 'Nova tabela';
$string['newtablefrommysql'] = 'Nova tabela do MySQL';
$string['nofieldsspecified'] = 'Nenhum campo especificado';
$string['nomasterprimaryuniquefound'] = 'A(s) coluna(s) que sua chave estrangeira referencia, deve(m) ser chave primária ou exclusiva na tabela referenciada. Nota que a coluna estar em um índice exclusivo não é o suficiente.';
$string['nomissingorextraindexesfound'] = 'Nenhum índice ausente ou extra foi encontrado, portanto, nenhuma ação adicional é necessária.';
$string['noreffieldsspecified'] = 'Nenhuma referência a campo especificada';
$string['noreftablespecified'] = 'Tabela de referências especificadas não encontrada';
$string['noviolatedforeignkeysfound'] = 'Nenhuma violação de chave estrangeira encontrada';
$string['nowrongdefaultsfound'] = 'Não foram encontrados valores padrão inconsistentes, seu banco de dados não precisa de mais ações.';
$string['nowrongintsfound'] = 'Não foi encontrado nenhum inteiro errado, seu BD não precisa de outras ações.';
$string['nowrongoraclesemanticsfound'] = 'Não há colunas Oracle usando semântica BYTE foram encontrados, a DB não precisa de novas acções.';
$string['numberincorrectdecimals'] = 'Número incorreto de decimais para campo numérico';
$string['numberincorrectlength'] = 'Tamanho incorreto para campo numérico';
$string['numberincorrectwholepart'] = 'Parte de número inteiro muito grande para o campo de número';
$string['pendingchanges'] = 'Aviso: Você realizou alterações neste arquivo. Elas podem ser salvas a qualquer momento.';
$string['pendingchangescannotbesaved'] = 'Existem alterações neste arquivo, mas elas não puderam ser salvas! Por favor verifique se o arquivo "install.xml" e o diretório onde ele está tem permissão de escrita para o servidor web';
$string['pendingchangescannotbesavedreload'] = 'Existem alterações neste arquivo, mas elas não puderam ser salvas! Por favor verifique se o arquivo "install.xml" e o diretório tem permissão de escrita para o servidor web. Então recarregue este página e você poderá salvar essas alterações.';
$string['persistentfieldscomplete'] = 'Os seguintes campos foram adicionados:';
$string['persistentfieldsconfirm'] = 'Deseja adicionar os seguintes campos?';
$string['persistentfieldsexist'] = 'Os seguintes campos já existem:';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Chaves primárias não podem ser nulas';
$string['privacy:metadata'] = 'O plugin do editor XMLDB não armazena nenhum dado pessoal.';
$string['reconcile_files'] = 'Buscar arquivos XMLD que precism de reconciliação';
$string['reconcile_files_intro'] = 'Essa funcionalidade olha o conteúdo de todos os arquivos XMLDB para verificar se eles casam com os resultados gerados para eles pelo editor XMLDB.

Uma lista dos arquivos que precisam ser reconciliados (gerados novamente) será mostrada e o editor XMLDB pode ser usado para corrigí-los.';
$string['reconcile_files_no'] = 'Todos os arquivos estão OK. Nenhuma reconciliação é necessária.';
$string['reconcile_files_yes'] = 'Arquivos encontrados para reconciliar:';
$string['reconcilefiles'] = 'Reconciliar arquivos XMLDB';
$string['reserved'] = 'Reservado';
$string['reservedwords'] = 'Palavras reservadas';
$string['revert'] = 'Desfazer';
$string['revert_changes'] = 'Desfazer mudanças';
$string['save'] = 'Salvar';
$string['searchresults'] = 'Resultados da busca';
$string['selectaction'] = 'Selecionar ação:';
$string['selectdb'] = 'Selecionar base de dados:';
$string['selectfieldkeyindex'] = 'Selecionar campo/chave/índice:';
$string['selectonecommand'] = 'Por favor, selecione uma ação da lista para visualizar o código PHP';
$string['selectonefieldkeyindex'] = 'Por favor, selecione um campo/chave/índice da lista para visualizar o código PHP';
$string['selecttable'] = 'Selecionar tabela:';
$string['table'] = 'Tabela';
$string['tablenameempty'] = 'O nome da tabela não pode ficar vazio.';
$string['tables'] = 'Tabelas';
$string['unknownfield'] = 'Refere-se a um campo desconhecido';
$string['unknowntable'] = 'Refere-se a uma tabela desconhecida';
$string['unload'] = 'Descarregar';
$string['up'] = 'Acima';
$string['view'] = 'Ver';
$string['view_reserved_words'] = 'Ver palavras reservadas';
$string['view_structure_php'] = 'Ver estrutura PHP';
$string['view_structure_sql'] = 'Ver estrutura SQL';
$string['view_table_php'] = 'Ver tabela PHP';
$string['view_table_sql'] = 'Ver tabela SQL';
$string['viewedited'] = 'Ver editado';
$string['vieworiginal'] = 'Ver original';
$string['viewphpcode'] = 'Ver código PHP';
$string['viewsqlcode'] = 'Ver código SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Chaves estrangeiras violadas';
$string['violatedforeignkeysfound'] = 'Encontradas chaves estrangeiras violadas';
$string['violations'] = 'Violações';
$string['wrong'] = 'Errado';
$string['wrongdefaults'] = 'Encontrados padrões errados';
$string['wrongints'] = 'Encontrados inteiros errados';
$string['wronglengthforenum'] = 'Tamanho incorreto para campo enum';
$string['wrongnumberofreffields'] = 'Número errado de campos de referência';
$string['wrongoraclesemantics'] = 'Semântica BYTE erradas da Oracle encontrado';
$string['wrongreservedwords'] = 'Palavras reservadas utilizadas atualmente<br />(note que os nomes das tabelas não são importantes se utilizar $CFG->prefix)';
$string['yesextraindexesfound'] = 'Os seguintes índices adicionais foram encontrados.';
$string['yesmissingindexesfound'] = '<p>Alguns índices não foram encontrados no seu BD. Aqui estão os detalhes e as instruções SQL que devem ser executadas em sua interface SQL favorita para criar todos eles . Não esqueça de fazer uma cópia de segurança dos seus dados antes .</p>
<p>Após fazer isso, é altamente recomendável executar essa funcionalidade novamente para para verificar se não há mais índices ausentes.</p>';
$string['yeswrongdefaultsfound'] = '<p>Foram encontradas inconsistências nos valores padrão no seu BD. Aqui estão os detalhes e as instruções SQL que devem ser executadas em sua interface SQL favorita para criar todos eles.
 Não esqueça de fazer uma cópia de segurança dos seus dados antes.</p>
<p>Após fazer isso, é altamente recomendável executar essa funcionalidade novamente para verificar se outras inconsistências serão encontradas.</p>';
$string['yeswrongintsfound'] = '<p>Foram encontrados alguns números inteiros com erro no seu banco de dados. Para corrigi-los, aqui estão os detalhes e as instruções SQL necessárias para serem executadas em sua interface SQL favorita. Lembre-se de fazer backup dos seus dados primeiro!</p>
<p>Após corrigi-los, é altamente recomendável executar este utilitário novamente para verificar se não foram encontrados mais números inteiros errados.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Algumas colunas Oracle usando semântica BYTE foram encontrados em seu banco de dados. Para converte-las, aqui estão os detalhes e as instruções SQL necessárias para serem executadas em sua interface SQL favorita. Lembre-se de fazer backup dos seus dados primeiro!</p>
<p>Depois disso, é altamente recomendável executar esse utilitário novamente para verificar se não há mais erros de semântica.</p>';
