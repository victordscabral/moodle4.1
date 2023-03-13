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
 * Strings for component 'data', language 'pt_br', version '4.1'.
 *
 * @package     data
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['actionsmenu'] = 'Menu de ações';
$string['add'] = 'Adicionar Item';
$string['addcomment'] = 'Adicionar comentário';
$string['addedby'] = 'Adicionado por';
$string['addentries'] = 'Adicionar itens';
$string['addtemplate'] = 'Adicionar modelo de item';
$string['advancedsearch'] = 'Busca avançada';
$string['allowcomments'] = 'Permitir comentários';
$string['alttext'] = 'Texto alternativo';
$string['approvalstatus'] = 'Estado de Aprovação';
$string['approve'] = 'Aprovar';
$string['approved'] = 'Aprovado';
$string['areacontent'] = 'Campos';
$string['ascending'] = 'Crescente';
$string['asearchtemplate'] = 'Modelo de busca avançada';
$string['atmaxentry'] = 'Você atingiu o limite de itens inseridos permitido!';
$string['authorfirstname'] = 'Primeiro nome';
$string['authorlastname'] = 'Último nome';
$string['autogenallforms'] = 'Criar todos os modelos padrão';
$string['autolinkurl'] = 'Criar link automático à URL';
$string['availablefromdate'] = 'Disponível a partir de';
$string['availabletags'] = 'Tags disponíveis';
$string['availabletags_help'] = 'Tags são espaços reservados no modelo, que serão substituídos por dados ou outros itens, como um ícone de edição, quando as entradas forem editadas ou visualizadas.

Os campos tem o seguinte formato: [[fieldname]]. Todas as outras tags têm o formato: ##algumatag##.

Apenas as tags presentes na lista de  "Tags disponíveis" podem ser utilizadas neste modelo.';
$string['availabletodate'] = 'Disponível até';
$string['availabletodatevalidation'] = '"Disponível até" não pode ser anterior a "Disponível a partir de".';
$string['blank'] = 'Vazio';
$string['buttons'] = 'Ações';
$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['calendarend'] = 'Término de {$a}';
$string['calendarstart'] = 'Início de {$a}';
$string['cancel'] = 'Cancelar';
$string['cannotaccesspresentsother'] = 'Você não tem permissão para acessar pré-ajustes de outros usuários';
$string['cannotadd'] = 'Não foi possível adicionar itens!';
$string['cannotapplypreset'] = 'Erro ao aplicar a predefinição.';
$string['cannotdeletepreset'] = 'Erro ao excluir predefinição';
$string['cannotoverwritepreset'] = 'Erro ao sobrescrever configuração';
$string['cannotunziptopreset'] = 'Não foi possível descompactar no diretório selecionado';
$string['checkbox'] = 'Caixas de seleção';
$string['chooseexportfields'] = 'Escolher os campos que você quer exportar:';
$string['chooseexportformat'] = 'Escolher o formato de exportação:';
$string['chooseorupload'] = 'Selecionar arquivo';
$string['choosepreset'] = 'Arquivo predefinido';
$string['closebeforeopen'] = 'Você especificou uma data de fim anterior à data de início.';
$string['columns'] = 'Colunas';
$string['comment'] = 'Comentário';
$string['commentdeleted'] = 'Comentário excluído';
$string['commentempty'] = 'O comentário estava em branco';
$string['comments'] = 'Comentários';
$string['commentsaved'] = 'Comentário gravado';
$string['commentsn'] = '{$a} comentário(s)';
$string['commentsoff'] = 'O recurso de comentários não está habilitado';
$string['completiondetail:entries'] = 'Criar entradas: {$a}';
$string['completionentries'] = 'Itens obrigatórios';
$string['completionentriescount'] = 'Total de itens';
$string['completionentriesdesc'] = 'Número mínimo necessário de itens: {$a}';
$string['configenablerssfeeds'] = 'Esta opção habilita a possibilidade de criação de feeds RSS em todas as bases de dados. Para que os feeds sejam criados é necessário habilitar manualmente a opção em cada base de dados.';
$string['confirmdeletefield'] = 'Tem certeza que quer excluir este campo?';
$string['confirmdeleterecord'] = 'Tem certeza que quer excluir este item?';
$string['confirmdeleterecords'] = 'Tem certeza de que deseja excluir esses itens?';
$string['createactivity'] = 'Crie seus próprios campos para coletar dados ou use uma predefinição que já inclua campos.';
$string['createfields'] = 'Crie campos para coletar diferentes tipos de dados.';
$string['createtemplates'] = 'Os modelos definem a interface da sua atividade. Depois de criar campos, os modelos serão criados automaticamente. Como alternativa, você pode usar uma predefinição, que inclui campos e modelos.';
$string['csstemplate'] = 'CSS customizado';
$string['csvfailed'] = 'Impossível ler os dados deste arquivo CSV';
$string['csvfile'] = 'Arquivo CSV';
$string['csvimport'] = 'Importação de arquivo CSV';
$string['csvimport_help'] = 'Os itens podem ser importados através de um arquivo de texto simples com a primeira linha com a lista de nomes do campos na primeira linha, e em seguida os dados, sendo um registro por linha.


<p align="center"><strong>Importar de um arquivo CSV</strong></p>

<p>CSV significa, em português, Valores Separados por Vírgulas (Comma-Separated-Values
   em inglês). É um formato comum para intercâmbio de textos envolvendo dados.</p>

<p>O formato é um arquivo de texto simples, com uma lista de nomes de
   campos na primeira linha. Os dados vem em seguida, um registro por linha.</p>

<p>O separador de campo padrão é a virgula e a delimitação de campo não é definida por padrão
   (os delimitadores de campo são caracteres que marcam o começo e o fim do campo).

<p>Os registros devem ser delimitados por novas linhas (normalmente geradas quando se
   pressiona RETURN ou ENTER no seu editor de texto). As tabulações podem ser especificadas
   usando-se t e novas linhas ou mudança de linha por n. </p>

<p>Arquivo de Exemplo:</p>
<pre>
  nome,altura,peso
  Kai,180cm,80kg
  Kim,170cm,60kg
  Koo,190cm,20kg
</pre>
</p>

<p>Atenção: Alguns tipos de campos podem não estar de acordo com os formatos suportados.</p>';
$string['csvwithselecteddelimiter'] = '<abbr title="Valores separados por vírgulas">CSV</abbr>';
$string['data:addinstance'] = 'Adicionar nova base de dados';
$string['data:approve'] = 'Aprovar e desfazer itens aprovados';
$string['data:comment'] = 'Escrever comentário';
$string['data:exportallentries'] = 'Exportar todos os itens da base de dados';
$string['data:exportentry'] = 'Exportar um item da base de dados';
$string['data:exportownentry'] = 'Exportar um próprio item da base de dados';
$string['data:exportuserinfo'] = 'Exportar informações do usuário';
$string['data:managecomments'] = 'Gerenciar comentários';
$string['data:manageentries'] = 'Gerenciar itens';
$string['data:managetemplates'] = 'Gerenciar modelos';
$string['data:manageuserpresets'] = 'Gerenciar predefinições';
$string['data:rate'] = 'Avaliar itens';
$string['data:readentry'] = 'Ler itens';
$string['data:view'] = 'Ver atividade base de dados';
$string['data:viewallratings'] = 'Ver a pontuação total recebida';
$string['data:viewalluserpresets'] = 'Ver os modelos padrão de todos os usuários';
$string['data:viewanyrating'] = 'Ver total de avaliações recebidas por todos';
$string['data:viewentry'] = 'Ver itens';
$string['data:viewrating'] = 'Ver a nota total que você recebeu';
$string['data:writeentry'] = 'Escrever itens';
$string['date'] = 'Data';
$string['dateentered'] = 'Data de inserção';
$string['datemodified'] = 'Última modificação:';
$string['defaultfielddelimiter'] = '(o padrão é a vírgula)';
$string['defaultfieldenclosure'] = '(o padrão é nenhum)';
$string['defaultsortfield'] = 'Campo de ordenação padrão';
$string['delcheck'] = 'Exclusão em massa de Checkbox';
$string['delete'] = 'Cancelar';
$string['deleteallentries'] = 'Excluir todos os itens';
$string['deletecomment'] = 'Tem certeza que quer excluir este comentário?';
$string['deleteconfirm'] = 'Excluir predefinição {$a}?';
$string['deleted'] = 'excluído';
$string['deleteentry'] = 'Excluir item';
$string['deletefield'] = 'Excluir campo';
$string['deletenotenrolled'] = 'Excluir itens de usuários não inscritos';
$string['deletewarning'] = 'Excluindo uma predefinição, você remove esta predefinição da lista de predefinições disponíveis em todos os cursos.';
$string['descending'] = 'Decrescente';
$string['directorynotapreset'] = '{$a->directory} não é un conjunto de modelos: arquivos faltando: {$a->missing_files}';
$string['disapprove'] = 'Desfazer aprovação';
$string['download'] = 'Baixar';
$string['edit'] = 'Editar';
$string['editcomment'] = 'Editar comentário';
$string['editentry'] = 'Editar item';
$string['editfield'] = 'Editar campo';
$string['editordisable'] = 'Desabilitar editor';
$string['editorenable'] = 'Habilitar o editor de código';
$string['editpreset'] = 'Editar predefinição';
$string['emptyadd'] = 'O modelo está vazio, usando um formulário padrão...';
$string['emptyaddform'] = 'Você não completou nenhum campo!';
$string['emptypresetname'] = 'O nome ou arquivo predefinido não pode estar vazio';
$string['enabletemplateeditorcheck'] = 'Tem certeza que quer ativar o editor? Isto pode resultar numa alteração de conteúdo quando o modelo for gravado.';
$string['entries'] = 'Itens';
$string['entrieslefttoadd'] = 'Você precisa adicionar mais {$a->entriesleft} item(ns) para completar esta atividade';
$string['entrieslefttoaddtoview'] = 'Você precisa adicionar mais {$a->entrieslefttoview} item(ns) antes de poder ver os itens dos outros participantes.';
$string['entry'] = 'Item';
$string['entrysaved'] = 'O seu item foi gravado';
$string['errormustbeteacher'] = 'Apenas os professores podem usar esta página!';
$string['errormustsupplyvalue'] = 'Você precisa fornecer um valor aqui.';
$string['errorpresetexists'] = 'Já existe uma predefinição com este nome.';
$string['errorpresetexistsbutnotoverwrite'] = 'Já existe uma predefinição com este nome. Escolha um nome diferente.';
$string['errorpresetnotfound'] = 'Predefinição com nome {$a} não encontrada.';
$string['eventfieldcreated'] = 'Campo criado';
$string['eventfielddeleted'] = 'Campo apagado';
$string['eventfieldupdated'] = 'Campo atualizado';
$string['eventrecordcreated'] = 'Registro criado';
$string['eventrecorddeleted'] = 'Registro excluído';
$string['eventrecordupdated'] = 'Registro atualizado';
$string['eventtemplateupdated'] = 'Modelo atualizado';
$string['eventtemplateviewed'] = 'Modelos visualizados';
$string['example'] = 'Exemplo de Base de dados';
$string['excel'] = 'Excel';
$string['expired'] = 'Sinto muito, mas esta atividade foi fechada em {$a} e não está mais disponível';
$string['export'] = 'Exportar';
$string['exportaszip'] = 'Exportar como zip';
$string['exportaszip_help'] = '<p align="center"><strong>Exportar como Zip</strong></p>
<p>Isso permite que você baixe os modelos para seu computador, que podem ser enviados mais tarde para outra base de dados, com o comando de importar arquivos zip.</p>';
$string['exportedtozip'] = 'Exportar em zip provisório...';
$string['exportentries'] = 'Exportar conteúdo';
$string['exportformat'] = 'Formato de exportação';
$string['exportoptions'] = 'Opções de exportação';
$string['exportownentries'] = 'Exportar somente seus próprios itens? ({$a->mine}/{$a->all})';
$string['exportpreset'] = 'Exportar um preset';
$string['failedpresetdelete'] = 'Foi encontrado um erro ao tentar excluir a predefinição.';
$string['fieldadded'] = 'Campo acrescentado';
$string['fieldallowautolink'] = 'Permitir link automático';
$string['fielddeleted'] = 'Campo excluído';
$string['fielddelimiter'] = 'Separador de campo';
$string['fielddescription'] = 'Descrição do campo';
$string['fieldenclosure'] = 'Anexo do campo';
$string['fieldheight'] = 'Altura';
$string['fieldheightlistview'] = 'Altura (em pixels) na exibição de lista';
$string['fieldheightsingleview'] = 'Altura (em pixels) na exibição única';
$string['fieldids'] = 'IDs dos campos';
$string['fieldmappings'] = 'Mapeamentos de campos';
$string['fieldmappings_help'] = 'Esse menu permite guardar os dados de uma base de dados existente. Para preservar os dados em um campo, você deve mapeá-lo para um novo campo, onde os dados aparecerão. Os campos também podem ficar em branco, para que nenhuma informação seja copiada nele. Os campos antigos não mapeados para um novo serão perdidos e todos os dados removidos.

Você só pode mapear campos de um mesmo tipo, em modo que cada caixa de seleção tenha campos diferentes. Tenha cuidado também para não tentar mapear um campo antigo para mais de um campo novo.';
$string['fieldname'] = 'Nome do Campo';
$string['fieldnametype'] = '{$a->name} ({$a->type})';
$string['fieldnotmatched'] = 'Os seguintes campos do seu arquivo não são conhecidos neste database: {$a}';
$string['fieldoptions'] = 'Opções (uma por linha)';
$string['fields'] = 'Campos';
$string['fieldupdated'] = 'Campos atualizados';
$string['fieldwidth'] = 'Largura';
$string['fieldwidthlistview'] = 'Largura (em pixels) na exibição de lista';
$string['fieldwidthsingleview'] = 'Largura (em pixels) em exibição única';
$string['file'] = 'Arquivo';
$string['fileencoding'] = 'Codificação';
$string['filesnotgenerated'] = 'Alguns arquivos não foram criados: {$a}';
$string['filtername'] = 'Link automático à base de dados';
$string['footer'] = 'Pé de página';
$string['forcelinkname'] = 'Nome obrigatório do link';
$string['foundnorecords'] = 'Nenhum registro foi encontrado. <a href="{$a->reseturl}">Limpar tudo</a>';
$string['foundrecords'] = 'Encontrado {$a->num} de {$a->max} registros. <a href="{$a->reseturl}">Limpar tudo</a>';
$string['fromfile'] = 'Importar de arquivo zip';
$string['fromfile_help'] = '<p align=\'center\'><strong>Importar predefinições de um Zip</strong></p>
<p>Use isso para enviar predefinições que foram salvas no seu computador usando a opção de exportar.</p>';
$string['generateerror'] = 'Nem todos os arquivos gerados!';
$string['header'] = 'Cabeçalho';
$string['headeraddtemplate'] = 'Define a interface para adicionar ou alterar itens';
$string['headerasearchtemplate'] = 'Definir a interface para a pesquisa avançada.';
$string['headercsstemplate'] = 'Adicionar CSS personalizado aos modelos.';
$string['headerjstemplate'] = 'Adicionar JavaScript customizado para os modelos de registro Lista, Único ou Adicionar.';
$string['headerlisttemplate'] = 'Definir a aparência da visualização em lista.';
$string['headerrsstemplate'] = 'Definir a aparência das entradas em feeds RSS.';
$string['headersingletemplate'] = 'Define a interface de navegação de um item único';
$string['id'] = 'ID do item';
$string['importandapply'] = 'Importar predefinição e aplicar';
$string['importapreset'] = 'Importar uma predefinição';
$string['importentries'] = 'Importar conteúdo';
$string['importpreset'] = 'Importar predefinição';
$string['importpreset_desc'] = 'A predefinição será aplicada a esta atividade, criando campos e modelos.
  Ele não aparecerá na lista de predefinições.';
$string['importpresetmissingcapability'] = 'Você não tem permissão para importar uma predefinição.';
$string['importsuccess'] = 'Predefinição aplicada.';
$string['includeapproval'] = 'Incluir estado de aprovação';
$string['includetags'] = 'Incluir tags';
$string['includetime'] = 'Incluir tempo adicionado / modificado';
$string['includeuserdetails'] = 'Incluir detalhes do usuário';
$string['indicator:cognitivedepth'] = 'Indicador cognitivo da Base de dados';
$string['indicator:cognitivedepth_help'] = 'Este indicador baseia-se na profundidade cognitiva alcançada pelo estudante em uma atividade Base de dados.';
$string['indicator:cognitivedepthdef'] = 'Base de dados cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'O participante alcançou este percentual de engajamento cognitivo oferecido pelas atividades Base de dados durante este intervalo de análise (níveis = Sem visualização, Visualização, Envio)';
$string['indicator:socialbreadth'] = 'Indicador social da Base de Dados';
$string['indicator:socialbreadth_help'] = 'Este indicador baseia-se na amplitude social alcançada pelo estudante em uma atividade Base de dados.';
$string['indicator:socialbreadthdef'] = 'Base da dados social';
$string['indicator:socialbreadthdef_help'] = 'O participante alcançou este percentual de engajamento social oferecido pelas atividades Base de dados durante esse intervalo de análise (Níveis = Sem participação, Participante único)';
$string['insufficiententries'] = 'mais são itens necessários antes de visualizar esta base de dados';
$string['intro'] = 'Descrição';
$string['invalidaccess'] = 'Esta página não foi acessada corretamente';
$string['invalidfieldid'] = 'O ID do campo está incorreto';
$string['invalidfieldname'] = 'Escolha um outro nome para este campo';
$string['invalidfieldtype'] = 'Tipo de campo está incorreto';
$string['invalidid'] = 'ID de dados incorreta';
$string['invalidpreset'] = '{$a} não é um predefinido.';
$string['invalidrecord'] = 'Registro incorreto';
$string['invalidurl'] = 'A URL inserida não é válida';
$string['jstemplate'] = 'JavaScript personalizado';
$string['latitude'] = 'Latitude';
$string['latlong'] = 'Coordenadas (latitude/longitude)';
$string['latlongboth'] = 'Tanto a Latitude quanto a Longitude devem ser preenchidas.';
$string['latlongdownloadallhint'] = 'Baixar link de todos os itens como KML';
$string['latlongkmllabelling'] = 'Como adicionar descrição a itens em arquivos KML (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Serviços Link-out visualizados';
$string['latlongotherfields'] = 'Outros campos';
$string['list'] = 'Ver lista';
$string['listtemplate'] = 'Modelo de Lista';
$string['listview'] = 'Ver lista';
$string['longitude'] = 'Longitude';
$string['manageapproved'] = 'Permitir a edição de itens aprovados';
$string['manageapproved_help'] = 'Se desabilitado, itens aprovados não poderão ser editados ou excluídos pelo usuário que as adicionou. Essa configuração não tem efeito a menos que \'Aprovação necessária\' esteja habilitada.';
$string['managefields'] = 'Gerenciar campos';
$string['mapexistingfield'] = '	
Mapear para {$a}';
$string['mapnewfield'] = 'Criar um novo campo';
$string['mapping:applypresets'] = 'Aplicar predefinição';
$string['mapping:dialogtitle:usepreset'] = 'Aplicar predefinição {$a}?';
$string['mapping:fieldstocreate'] = 'Campos a serem criados: {$a}';
$string['mapping:fieldstodelete'] = 'Campos existentes a serem excluídos: {$a}';
$string['mapping:mapfields'] = 'Mapear Campos';
$string['mapping:warningmessagedelete'] = 'Se os campos a serem excluídos forem do mesmo tipo que os novos campos na predefinição que você está aplicando, você poderá mapeá-los em Mapear campos.';
$string['mapping:warningmessagedeleteandcreate'] = 'Se os campos a serem excluídos forem do mesmo tipo dos campos a serem criados, você poderá mapeá-los em Mapear campos.';
$string['mappingwarning'] = 'Todos os campos antigos que não forem mapeados para um novo campo serão perdidos e todos os dados naquele campo serão removidos.';
$string['maxentries'] = 'Número máximo de itens';
$string['maxentries_help'] = 'O número máximo de itens que um estudante pode inserir nesta atividade.';
$string['maxsize'] = 'Tamanho máximo';
$string['menu'] = 'Menu';
$string['menuchoose'] = 'Selecionar...';
$string['missingdata'] = 'Identificador de dados ou objeto deve ser fornecido para a classe do campo';
$string['missingfield'] = 'Erro de programação: você deve especificar um campo e/ou dados quando estiver definindo a classe do campo.';
$string['missingfieldtype'] = 'Tipo de campo para {$a->name} não encontrado';
$string['missingfieldtypeimport'] = 'Os campos a seguir não foram importados porque seus tipos de campo correspondentes não estão instalados:';
$string['missingfieldtypes'] = 'Os campos a seguir não têm seus tipos de campo correspondentes instalados e não serão incluídos nos formulários ao adicionar ou editar itens.
Seus rótulos ainda podem ser exibidos no formulário, portanto, atualize o "Adicionar modelo de item" de acordo:';
$string['modulename'] = 'Base de dados';
$string['modulename_help'] = 'O módulo de atividade Base de Dados permite aos participantes criar, manter e pesquisar uma coleção de itens (ou seja, registros).

A estrutura dos itens é definida usando diferentes tipos de campo, como: texto curto, caixa de seleção, botões de rádio, menu dropdown, área de texto, URL, imagem e arquivo.

Como professor, você pode comentar e avaliar os itens. Você também pode permitir que os estudantes avaliem e comentem os itens (avaliação por pares). As avaliações podem ser agregadas para formar uma nota final registrada no livro de notas.

Se o filtro de auto-ligação da base de dados estiver habilitado, todos os itens da base de dados (palavras ou frases) serão automaticamente vinculados quando aparecerem no curso.

Atividades de base de dados tem muitos usos, como

* Um acervo colaborativo de links da web, livros, resenhas de livros, referências de jornal etc.
* Para exibir fotos, cartazes, sites ou poemas criados por estudantes para comentários e revisões em pares';
$string['modulename_link'] = 'mod/data/view';
$string['modulenameplural'] = 'Bases de dados';
$string['more'] = 'Mais';
$string['moreurl'] = 'Mais URL';
$string['movezipfailed'] = 'Impossível mover arquivo zip';
$string['multientry'] = 'Repetir item';
$string['multimenu'] = 'Menu (múltipla-escolha)';
$string['multipletags'] = 'Múltiplas tags encontradas! O Modelo não foi salvo';
$string['newentry'] = 'Novo item';
$string['newfield'] = 'Criar um campo';
$string['newfield_help'] = 'Um campo permite a entrada de dados. Cada entrada em uma atividade de base de dados pode ter vários campos de vários tipos, como um campo de data, que permite aos participantes selecionar um dia, mês e ano em um menu suspenso, um campo de imagem, que permite aos participantes enviar um arquivo de imagem, ou um campo de caixa de seleção, que permite aos participantes selecionar uma ou mais opções.

Cada campo deve ter um nome de campo único. A descrição do campo é opcional.';
$string['noaccess'] = 'Você não tem permissão de acesso a esta página';
$string['nodefinedfields'] = 'O novo conjunto de modelos não tem campos definidos!';
$string['nofieldcontent'] = 'Conteúdo do campo não encontrado';
$string['nofieldindatabase'] = 'Nenhum campo definido nesta base de dados.';
$string['nofields'] = 'Nenhum campo ainda';
$string['nolisttemplate'] = 'O modelo da lista ainda não foi definido';
$string['nomatch'] = 'Nenhum item correspondente encontrado!';
$string['nomaximum'] = 'Nenhum máximo';
$string['nopreviewavailable'] = 'Nenhuma visualização disponível para {$a}';
$string['norecords'] = 'Nenhum item ainda';
$string['nosingletemplate'] = 'O modelo para item único ainda não foi definido';
$string['notapproved'] = 'Aprovação pendente';
$string['notapprovederror'] = 'O item ainda não foi aprovado.';
$string['notemplates'] = 'Nenhum modelo ainda';
$string['notinjectivemap'] = 'Não é um mapa injetivo';
$string['notopenyet'] = 'Desculpe, esta atividade não está disponível até {$a}';
$string['number'] = 'Número';
$string['numberrssarticles'] = 'As inscrições no feed RSS';
$string['numnotapproved'] = 'Pendente';
$string['numrecords'] = '{$a} itens';
$string['ods'] = '<abbr title="Planilha OpenDocument">ODS</abbr>&nbsp;(OpenOffice)';
$string['openafterclose'] = 'Você espcificou uma data de início posterior à data de fim.';
$string['optionaldescription'] = 'Descrição breve (opcional)';
$string['optionalfilename'] = 'Nome do arquivo (opcional)';
$string['other'] = 'Outro';
$string['overrwritedesc'] = 'Substitua a predefinição existente por este nome e sobrescreva seu conteúdo';
$string['overwrite'] = 'Substituir';
$string['overwritesettings'] = 'Sobrescrever as configurações atuais, como comentários, avaliações, etc.';
$string['page-mod-data-x'] = 'Qualquer página de base de dados';
$string['pagesize'] = 'Itens por página';
$string['participants'] = 'Participantes';
$string['picture'] = 'Imagem';
$string['pleaseaddsome'] = 'Por favor crie alguns ou <a href="{$a}">escolha um novo conjunto-padrão</a> antes de iniciar.';
$string['pluginadministration'] = 'Administração da atividade de base de dados';
$string['pluginname'] = 'Base de dados';
$string['portfolionotfile'] = 'Exportar um portfólio ao invés de um arquivo (somente CSV e leap2a)';
$string['presetdeleted'] = 'Predefinição excluída.';
$string['presetinfo'] = 'Salvar como conjunto-padrão para que os modelos sejam públicos. Outros usuários poderão usar estes modelos.';
$string['presetnotselected'] = 'Nenhum preset foi selecionado.';
$string['presets'] = 'Conjuntos de modelos padrão';
$string['presetshelp'] = 'Escolha uma predefinição para usar como ponto de partida.';
$string['preview'] = 'Visualização de {$a}';
$string['privacy:metadata:commentpurpose'] = 'Comentários nos registros da base de dados';
$string['privacy:metadata:data_content'] = 'O conteúdo de um campo';
$string['privacy:metadata:data_content:content'] = 'Conteúdo';
$string['privacy:metadata:data_content:content1'] = 'Conteúdo adicional 1';
$string['privacy:metadata:data_content:content2'] = 'Conteúdo adicional 2';
$string['privacy:metadata:data_content:content3'] = 'Conteúdo adicional 3';
$string['privacy:metadata:data_content:content4'] = 'Conteúdo adicional 4';
$string['privacy:metadata:data_content:fieldid'] = 'ID de definição de campo';
$string['privacy:metadata:data_records'] = 'Registros na atividade de base de dados';
$string['privacy:metadata:data_records:approved'] = 'Status de aprovação';
$string['privacy:metadata:data_records:groupid'] = 'Grupo';
$string['privacy:metadata:data_records:timecreated'] = 'Horário em que o registro foi criado';
$string['privacy:metadata:data_records:timemodified'] = 'Horário em que o registro foi modificado pela última vez';
$string['privacy:metadata:data_records:userid'] = 'Usuário que criou o registro';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Campos para o módulo de atividade de base de dados';
$string['privacy:metadata:filepurpose'] = 'Arquivo anexado ao registro da base de dados';
$string['privacy:metadata:ratingpurpose'] = 'Registros de avaliações do banco de dados';
$string['privacy:metadata:tagpurpose'] = 'Tags nos registros da base de dados';
$string['radiobutton'] = 'Botões de opção';
$string['recordapproved'] = 'Item aprovado';
$string['recorddeleted'] = 'Item excluído';
$string['recorddisapproved'] = 'Item não aprovado';
$string['recordsnotsaved'] = 'Nenhum item foi registrado. Por favor controle o formato do arquivo carregado no servidor.';
$string['recordssaved'] = 'Item gravado';
$string['removealldatatags'] = 'Excluir todas as tags da base de dados';
$string['requireapproval'] = 'Aprovação necessária';
$string['requireapproval_help'] = 'Se habilitado, os itens têm que ser aprovados pelo professor para que sejam visíveis a todos.';
$string['required'] = 'Obrigatório';
$string['requiredentries'] = 'Itens necessários para a conclusão';
$string['requiredentries_help'] = '<p align="center"><strong>Itens Obrigatórios</strong></p>

<p>O número de itens obrigatórios que um participante deve enviar. Os usuários verão um lembrete se eles não submeteram o número obrigatório de itens.</p>

<p>A atividade não será considerada completa antes que o usuário tenha enviado o número obrigatório de itens</p>';
$string['requiredentriestoview'] = 'Itens obrigatórios antes da visualização';
$string['requiredentriestoview_help'] = 'O número de itens que um estudante deve enviar para ter permissão de visualizar itens de outros estudantes.

Nota: Se um número de itens for obrigatório antes da visualização, o filtro de auto-ligação da base de dados deve ser desabilitado, porque o filtro de auto-ligação não pode determinar se um usuário enviou o número obrigatório de itens.';
$string['requiredentrieswarning'] = 'Esta configuração foi substituída por uma configuração de conclusão da atividade "Itens obrigatórios"';
$string['requiredfield'] = 'Campo obrigatório';
$string['resetalltemplates'] = 'Redefinir todos os modelos';
$string['resetalltemplatesconfirm'] = 'Você está prestes a remover todos os modelos de sua predefinição atual. Se quiser restaurar os modelos mais tarde, você precisa escolher a predefinição novamente na aba \'Predefinições\'.';
$string['resetalltemplatesconfirmtitle'] = 'Redefinir todos os modelos?';
$string['resetsettings'] = 'Reconfigurar filtros';
$string['resettemplate'] = 'Restaurar modelo';
$string['resettemplateconfirm'] = 'A redefinição de um modelo remove a predefinição existente e quaisquer personalizações feitas no modelo. Você não pode desfazer esta ação.';
$string['resettemplateconfirmtitle'] = 'Redefinir modelo?';
$string['resizingimages'] = 'Redimensionando imagem minimizada...';
$string['rows'] = 'linhas';
$string['rssglobaldisabled'] = 'Desabilitado. Ver configuração das variáveis do site.';
$string['rsstemplate'] = 'Modelo do RSS';
$string['rsstitletemplate'] = 'Modelo do título do RSS';
$string['rsstype'] = 'Alimentador RSS desta atividade';
$string['save'] = 'Gravar';
$string['saveandadd'] = 'Gravar e acrescentar outro';
$string['saveandview'] = 'Gravar e mostrar';
$string['saveaspreset'] = 'Publicar predefinição neste site';
$string['saveaspreset_help'] = '<p align="center"><strong>Salvar como Predefinição</strong></p>
<p>Isto publica os modelos atuais como uma predefinição que qualquer um no site pode ver ou usar. Ela aparecerá na lista de predefinições. Você será habilitado a removê-la a qualquer momento.</p>';
$string['saveaspresetmissingcapability'] = 'O usuário não tem permissão para salvar o banco de dados como uma predefinição.';
$string['savedataaspreset'] = 'Salvar todos os campos e modelos e publicar como predefinição neste site';
$string['savesettings'] = 'Gravar configuração';
$string['savesuccess'] = 'Predefinição salva. <a href="{$a->url}">Visualizar predefinição</a>';
$string['savetemplate'] = 'Gravar modelo';
$string['search'] = 'Busca';
$string['search:activity'] = 'Base de dados - informações da atividade';
$string['search:entry'] = 'Base de dados - itens';
$string['selectedrequired'] = 'Todos os itens selecionados são obrigatórios';
$string['selectexportoptions'] = 'Selecione as opções de exportação';
$string['selectfields'] = 'Selecione os campos';
$string['showall'] = 'Mostrar todos os itens';
$string['showmore'] = 'Mostrar mais';
$string['single'] = 'Ver item único';
$string['singletemplate'] = 'Modelo de item único';
$string['singleview'] = 'Visão única';
$string['startbuilding'] = 'Comece a construir sua atividade';
$string['subplugintype_datafield'] = 'Tipo de campo da base de dados';
$string['subplugintype_datafield_plural'] = 'Tipos de campo da base de dados';
$string['subplugintype_datapreset'] = 'Predefinido';
$string['subplugintype_datapreset_plural'] = 'Predefinidos';
$string['tagarea_data_records'] = 'Registros de dados';
$string['tags'] = 'Tags';
$string['tagsdeleted'] = 'As tags da base de dados foram excluídas';
$string['teachersandstudents'] = '{$a->teachers} e {$a->students}';
$string['templatereset'] = 'Redefinir modelo';
$string['templateresetall'] = 'Todos os modelos redefinidos';
$string['templates'] = 'Modelos';
$string['templatesaved'] = 'Modelo gravado';
$string['text'] = 'Texto';
$string['textarea'] = 'Área de texto';
$string['timeadded'] = 'Tempo adicionado';
$string['timemodified'] = 'Tempo modificado';
$string['todatabase'] = 'nesta base de dados.';
$string['type'] = 'Tipo de campo';
$string['undefinedprocessactionmethod'] = 'Nenhuma ação definida em Data_Preset para lidar com a ação "{$a}".';
$string['unknown'] = 'Campo desconhecido';
$string['unsupportedexport'] = '({$a->fieldtype}) não pode ser exportado.';
$string['unsupportedfields'] = 'Campos não suportados';
$string['unsupportedfieldslist'] = 'Os seguintes campos não podem ser exportados:';
$string['updatefield'] = 'Atualizar campo existente';
$string['uploadfile'] = 'Carregar arquivo';
$string['uploadrecords'] = 'Carregar itens a partir de um arquivo';
$string['uploadrecords_help'] = 'É possível fazer o upload de registros via arquivos de texto. O formato do arquivo deve ser da seguinte forma:

* Cada linha do arquivo contém um registro
* Cada registro é uma série de dados separados pelo delimitador selecionado
* O primeiro registro contém uma lista dos nomes dos campos definindo o formato do restante do arquivo

O delimitador de campo é um caractere que envolve cada campo em cada registro. Ele pode ser normalmente deixado indefinido.';
$string['uploadrecords_link'] = 'mod/data/import';
$string['url'] = 'URL';
$string['usedate'] = 'Incluir na busca.';
$string['usepredefinedset'] = 'Usar um definição predefinida';
$string['usepreset'] = 'Usar predefinição';
$string['usestandard'] = 'Usar um predefinido';
$string['usestandard_help'] = '<p align="center"><strong>Usar Predefinição</strong></p>
<p> Usar um modelo disponível para o site inteiro.</p>
<p> Se você adicionou a predefinição à biblioteca usando a opção \'Salvar como Predefinição\', você pode apagá-la.</p>';
$string['viewfromdate'] = 'Somente leitura a partir de';
$string['viewtemplates'] = 'Visualizar modelos';
$string['viewtodate'] = 'Apenas leitura até';
$string['viewtodatevalidation'] = 'A data do campo \'Visível até\' não pode ser anterior a data do campo \'Visível a partir de\'';
$string['wrongdataid'] = 'ID de dados errado';
