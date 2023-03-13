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
 * Strings for component 'tool_wp', language 'pt_br', version '4.1'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutexportfile'] = 'Sobre este arquivo';
$string['activitycompletion'] = 'Conclusão de atividade';
$string['allcohorts'] = 'Todos os coortes';
$string['allcohorts_help'] = 'Todos os coortes que esse usuário pode gerenciar';
$string['alldata'] = 'Todos os dados';
$string['allsystemcohorts'] = 'Todos os coortes do sistema';
$string['certificates'] = 'Certificados';
$string['certificatetemplates'] = 'Modelos de certificado';
$string['certificatetemplates_help'] = 'Incluir modelos de certificados, páginas e elementos. Note que os certificados emitidos não são incluídos';
$string['certificatetemplatesdetails'] = 'Detalhes dos modelos de certificado';
$string['cleanupexpiredimportsexports'] = 'Limpar exportações e importações expiradas';
$string['codechanged'] = 'O código de emissão foi alterado de \'{$a->from}\' para \'{$a->to}\'';
$string['cohortdetails'] = 'Detalhes do coorte';
$string['cohortdetails_help'] = 'Detalhes do coorte para cada instância selecionada';
$string['cohortdetailswithmembers'] = 'Detalhes do coorte incluindo membros';
$string['cohortdetailswithmembers_help'] = 'Detalhes do coorte incluindo informações de membros. Note que os usuários não são incluídos';
$string['cohortmembers'] = 'Membros do coorte';
$string['cohortmembers_help'] = 'Apenas as informações dos membros do coorte serão incluídas, mas nenhum usuário em si será incluído';
$string['confighideparentlang'] = 'Ocultar no Workplace os pacotes principais';
$string['confighideparentlangdesc'] = 'Se habilitado, o pacote principal de qualquer idioma instalado no Workplace não será exibido no menu de idiomas. Por exemplo, \'English (en)\' não será exibido se \'English for Workplace (en_wp)\' estiver instalado.';
$string['confirmdeleteexport'] = 'Você tem certeza que quer excluir essa exportação?';
$string['confirmdeleteimport'] = 'Você tem certeza que quer excluir essa importação?';
$string['confirmprevbutton'] = 'Sair do site? Mudanças que você fez não serão salvas.';
$string['confirmprocess'] = 'Ao clicar em "Continuar", o processo irá iniciar em breve. Você receberá uma notificação assim que acabar.';
$string['conflictidnumber'] = 'Adicionar um sufixo numérico ao id number do coorte';
$string['conflicts'] = 'Conflitos';
$string['conflictshortname'] = 'Adicionar um sufixo numérico ao nome breve do curso';
$string['content'] = 'Conteúdo';
$string['copiedtoclipboard'] = 'Texto copiado para a área de transferência';
$string['copytoclipboard'] = 'Copiar para a área de transferência';
$string['coursecontentbackup'] = 'Permitir backup de conteúdo de curso';
$string['coursecontentbackupdesc'] = 'Essa configuração controla se usuários que podem fazer backup dos cursos tem a permissão de incluir o conteúdo do curso como parte da exportação. Se não for definida, apenas usuários que podem editar a configuração do site poderão exportar o conteúdo do curso como parte da migração. Manter essa configuração desabilitada ajudará a reduzir o tamanho do arquivo exportado.';
$string['coursereset'] = 'Redefinir curso para usuário específico';
$string['coursesadmintab'] = 'Aprendizagem';
$string['createdby'] = 'Criado por';
$string['csvcolumn'] = 'Coluna CSV';
$string['csvdefaultvalue'] = 'Valor padrão';
$string['csvfieldsmapping'] = 'Mapeamento de campo';
$string['csvmappingnotspecified'] = 'Não especificado';
$string['csvwpcolumn'] = 'Moodle Workplace';
$string['descriptionformat'] = 'Formato da descrição';
$string['descriptionformatdefault'] = 'Formato padrão da descrição';
$string['doexport'] = 'Exportar';
$string['doimport'] = 'Importar';
$string['entitiescountpostfix'] = '({$a})';
$string['entitycertificateissues'] = 'Certificados emitidos';
$string['entitycertificateissueuser'] = 'Certificado emitido: {$a}';
$string['entitycoursereset'] = 'Redefinir dados do curso';
$string['entityidentifier'] = '{$a->name} ({$a->idnumber})';
$string['errorcantdeleteexport'] = 'Impossível excluir a exportação';
$string['errorcantdeleteimport'] = 'Impossível excluir a importação';
$string['errorcohortsameidnumber'] = 'Um coorte com o mesmo idnumber já existe';
$string['errorcouldnotallocatecohort'] = 'Não foi possível alocar o usuário \'{$a->originaluserfullname}\' ao coorte \'{$a->name}\'';
$string['errorcouldnotimportissue'] = 'Não foi possível importar certificado emitido \'{$a}\'';
$string['errorcoursesdonotexist'] = 'Alguns cursos não existem';
$string['errorcoursessameshortname'] = 'Cursos com o mesmo nome breve já existem';
$string['errorcustomfielddoesnotexist'] = 'Campo personalizado não existe, impossível importar dado \'{$a}\'';
$string['errorcustomfieldnotfound'] = 'Instância de campo personalizado não encontrada';
$string['errorcustomfieldnotfounddetail'] = 'Campo personalizado \'{$a}\' não encontrado';
$string['eventcoursemodulereset'] = 'Redefinir módulo do curso para usuário específico';
$string['eventcoursereset'] = 'Redefinir curso para usuário específico';
$string['eventexportcreated'] = 'Exportação criada';
$string['eventexportdeleted'] = 'Exportação excluída';
$string['eventexportupdated'] = 'Exportação atualizada';
$string['eventimportcreated'] = 'Importação criada';
$string['eventimportdeleted'] = 'Importação excluída';
$string['eventimportupdated'] = 'Importação atualizada';
$string['export_content'] = 'Detalhes do modelo de certificado';
$string['export_content_help'] = 'Modelos, páginas e elementos do certificado';
$string['export_issued'] = 'Certificados emitidos';
$string['export_issued_help'] = 'Certificados emitidos aos usuários. Uma cópia dos usuários em si não será incluída.';
$string['exportcoursecategoriescontent'] = 'Detalhes da categoria de cursos';
$string['exportcoursecategoriescontent_help'] = 'Incluir detalhes da categoria de cursos. Atribuições de papéis e filtros das categorias não serão incluídos.';
$string['exportcoursecontent'] = 'Estrutura do curso';
$string['exportcoursecontent_help'] = 'Isso inclui tudo no curso exceto o conteúdo.

O arquivo exportado irá conter as mesmas configurações que aquelas definidas nesse site quando criando um backup de curso padrão. Nenhum dado de usuário será incluído.';
$string['exported'] = 'Exportado';
$string['exporter'] = 'Exportador';
$string['exporterdesc'] = 'Certificados emitidos e modelos';
$string['exporterdescription'] = 'Cursos sem dados de usuários, usando a configuração padrão de backup de cursos';
$string['exporterdescriptioncategories'] = 'Categorias de cursos e subcategorias';
$string['exporterdescriptioncohorts'] = 'Coortes, incluindo membros sem dados de usuários';
$string['exporternotavailable'] = 'Exportador \'{$a}\' não disponível aqui';
$string['exporternotfound'] = 'Exportador \'{$a}\' não foi encontrado';
$string['exportgeneralsettings'] = 'Configurações gerais';
$string['exportgeneralsettingsdesc'] = 'Selecione qual exportador você quer usar. No próximo passo você poderá limitar sua seleção e especificar quais elementos você quer exportar.';
$string['exportimport'] = 'Migração';
$string['exportimportconflictsuffix'] = 'Adicionar um sufixo numério ao campo \'{$a}\'';
$string['exportimportentityunavailable'] = '{$a} (Indisponível)';
$string['exportimporterrorentityexists'] = 'Um instância com o mesmo \'{$a}\' já existe';
$string['exportimportfieldchanged'] = 'O campo \'{$a->field}\' mudou de \'{$a->from}\' para \'{$a->to}\'';
$string['exportimportsettings'] = 'Configurações de migração';
$string['exportimportstatuscompleted'] = 'Sucesso';
$string['exportimportstatuscreated'] = 'Não está pronto';
$string['exportimportstatuserror'] = 'Erro';
$string['exportimportstatusinprogress'] = 'Em progresso';
$string['exportimportstatusscheduled'] = 'Agendado';
$string['exportimportuserfieldserror'] = 'Não foi possível importar o campo de perfil de usuário \'{$a}\'';
$string['exportimportusersall'] = 'Selecionar todos os usuários';
$string['exportimportusersdescription'] = 'Usuários do site e do tenant';
$string['exportimportuserserror'] = 'Não foi possível criar o usuário \'{$a}\'';
$string['exportimportusersmanual'] = 'Selecionar usuários manualmente...';
$string['exportimportuserspicture'] = 'Imagens de usuário';
$string['exportimportusersprofile'] = 'Perfis de usuário';
$string['exportimportuserssuccess'] = 'O usuário \'{$a}\' foi criado';
$string['exportimportuserssuspended'] = 'Incluir usuários suspensos';
$string['exportimportuserstenant'] = 'Selecionar todos os usuários de \'{$a}\'';
$string['exportnotfound'] = 'Exportação não encontrada';
$string['exportoptions'] = 'Opções';
$string['exportoptionsdesc'] = 'Especifique quais elementos você quer exportar selecionando-os.';
$string['exportreview'] = 'Revisão';
$string['exportreviewdesc'] = 'Verifique se tudo está correto antes de exportar o arquivo.';
$string['exports'] = 'Exportações';
$string['exportstatus'] = 'Estado';
$string['filecontent'] = 'Conteúdo do arquivo';
$string['grade'] = 'Nota';
$string['idnumberchanged'] = 'O ID number foi alterado de \'{$a->from}\' para \'{$a->to}\'';
$string['import_content'] = 'Detalhes do modelo do certificado';
$string['import_content_help'] = 'Modelos, páginas e elementos do certificado';
$string['import_issued'] = 'Certificados emitidos';
$string['import_issued_help'] = 'Emissões deste certificado aos usuários';
$string['importallselectedcategory'] = 'Importar tudo na categoria selecionada';
$string['importallsystemcontext'] = 'Importar tudo no contexto do sistema';
$string['importchoosetenant'] = 'Escolha o tenant';
$string['importconflictcreatecourse'] = 'Criar curso vazio';
$string['importconflictcreatecourseincategory'] = 'Criar curso vazio na categoria \'{$a}\'';
$string['importconflictincategory'] = 'na categoria';
$string['importconflictinstances'] = 'Instâncias ({$a}):';
$string['importconflicts'] = 'Conflitos';
$string['importconflictsdesc'] = 'Resolva os conflitos, se necessário';
$string['importconflictskip'] = 'Não importar';
$string['importcoursecontent'] = 'Backups de usuários sem dados de usuários';
$string['importcoursecontent_help'] = 'Importar backups de cursos para cada instância selecionada';
$string['importdestination'] = 'Destino';
$string['imported'] = 'Importado';
$string['importer'] = 'Importador';
$string['importformat'] = 'Formato do arquivo';
$string['importformatauto'] = 'Detectar automaticamente';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Formato Workplace';
$string['importfromfile'] = 'Nova importação a partir deste arquivo';
$string['importgeneralsettings'] = 'Configurações gerais';
$string['importgeneralsettingsalt'] = 'Selecione o destino dos dados importados. Você poderá especificar quais elementos quer importar no próximo passo.';
$string['importincrementidnumber'] = 'Adicionar um sufixo numérico ao ID Number';
$string['importintothecurrenttenant'] = 'Importar no tenant atual';
$string['importlogerror'] = 'Não foi possível importar o modelo de certificado \'{$a->name}\'';
$string['importlogexception'] = 'Exceção: {$a}';
$string['importlogfailed'] = 'Não foi possível importar o curso \'{$a->fullname}\'';
$string['importlogfailedcohort'] = 'Não foi possível importar o coorte \'{$a->name}\'';
$string['importlogfailedcoursecategory'] = 'Não foi possível importar a categoria de curso \'{$a->name}\'';
$string['importlogsuccess'] = 'Novo curso criado \'<a href="{$a->url}">{$a->fullname}</a>\'';
$string['importlogsuccesscertificates'] = 'Criado novo modelo de certificado  \'<a href="{$a->url}">{$a->name}</a>\' com {$a->pagescount} páginas e {$a->elementscount} elementos.';
$string['importlogsuccesscohort'] = 'Novo coorte \'<a href="{$a->url}">{$a->name}</a>\' criado';
$string['importlogsuccesscohortallocations'] = 'O usuário \'{$a->userfullname}\' foi alocado ao coorte \'{$a->name}\'';
$string['importlogsuccesscoursecategory'] = 'Criar nova categoria \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccessissue'] = 'Criada nova emissão de certificado em \'{$a->template}\' para usuário: \'{$a->originaluserfullname}';
$string['importnotenant'] = 'Disponível para todos os tenants';
$string['importnotfound'] = 'Importação não encontrada';
$string['importoptions'] = 'Opções';
$string['importoptionsdesc'] = 'Especifique quais elementos você quer importar selecionando-os.';
$string['importproblem'] = 'Problema: {$a}';
$string['importproblemaffects'] = 'Isto afeta:';
$string['importreview'] = 'Revisão';
$string['importreviewdesc'] = 'Verifique se tudo está correto antes de importar um arquivo.';
$string['imports'] = 'Importações';
$string['importselectsource'] = 'Selecionar fonte';
$string['importselectsourcedesc'] = 'Envie um arquivo válido no formato CSV ou Moodle Workplace. Nos próximos passos você poderá definir quais elementos quer importar desse arquivo.';
$string['importselecttenant'] = 'Selecionar tenant...';
$string['importsetidnumbertoempty'] = 'Definir "ID number" como uma "string" vazia';
$string['importsolution'] = 'Solução:';
$string['importstatus'] = 'Estado';
$string['importunknownerror'] = 'Erro desconhecido {$a}';
$string['importunknownformat'] = 'Não foi possível detectar o formato do arquivo a partir de sua extensão, por favor, selecione o formato';
$string['includecoursecontent'] = 'Conteúdo do curso inválido';
$string['includecoursecontent_help'] = 'Incluir todo o conteúdo do curso como atividades, filtros, eventos de calendário, etc.

O arquivo exportado irá conter as mesmas configurações que aquelas definidas nesse site quando criando um backup de curso padrão. Nenhum dado de usuário será incluído.';
$string['instances'] = 'Instâncias';
$string['instancescount'] = 'Instâncias ({$a}):';
$string['invaliddevice'] = 'Você está tentando acessar um site Moodle Workplace com o app Moodle. Por favor, faça o download do app Moodle Workplace para continuar.';
$string['loading'] = 'Carregando...';
$string['log'] = 'Log';
$string['managecoursecategories'] = 'Gerenciar categorias de cursos';
$string['mappingerrorbadgeheader'] = 'Alguns emblemas não existem';
$string['mappingerrorbadgelog'] = 'Emblema {$a} não foi encontrado';
$string['mappingerrorcohortheader'] = 'Alguns coortes não existem';
$string['mappingerrorcohortlog'] = 'Coorte {$a} não foi encontrado';
$string['mappingerrorcompetencyheader'] = 'Algumas competências não existem';
$string['mappingerrorcompetencylog'] = 'Competência {$a} não foi encontrada';
$string['mappingerrorcontextnotfound'] = 'Contexto não foi encontrado';
$string['mappingerrorcoursenotfound'] = 'Curso {$a} não foi encontrado';
$string['mappingerroruserfieldheader'] = 'Alguns campos de perfil de usuário não existem';
$string['mappingerroruserfieldlog'] = 'O campo de perfil de usuário {$a} não foi encontrado';
$string['mappingerrorusernotfound'] = 'Não foi possível encontrar o usuário {$a} no tenant atual';
$string['mappingnoticecoursecreated'] = 'Curso vazio <a href="{$a->courseurl}">{$a->fullname}</a> foi criado';
$string['mappingnoticecourseidnumber'] = 'Um curso com nome breve \'{$a->shortname}\' não foi encontrado. <a href="{$a->courseurl}">Outro curso </a> com o idnumber \'{$a->idnumber}\' foi encontrado, mas este curso tem um nome breve diferente';
$string['mappingnoticeuseremail'] = 'Um usuário com identificação \'{$a->username}\' não foi encontrado. <a href="{$a->profileurl}">Outro usuário</a> com o email {$a->email} foi encontrado, mas este usuário tem uma identificação diferente';
$string['messagefullexportcomplete'] = 'Sua exportação foi concluída em {$a->date}

Estado: {$a->status}

 <a href="{$a->url}">Clique aqui</a> para ver os detalhes';
$string['messagefullimportcomplete'] = 'Sua importação foi concluída em {$a->date}

Estado: {$a->status}

 <a href="{$a->url}">Clique aqui</a> para ver os detalhes';
$string['messageprovider:exportcomplete'] = 'Exportação concluída';
$string['messageprovider:importcomplete'] = 'Importação concluída';
$string['noavailableimporter'] = 'Não encontramos um importador disponível para este arquivo.';
$string['nocategoriesavailable'] = 'Não existem categorias disponíveis';
$string['noconflictsfound'] = 'Nenhum conflito encontrado';
$string['nodetails'] = 'Nenhum detalhe encontrado';
$string['nonproductionsite'] = 'Site não de produção';
$string['nonproductionsitemessage'] = 'Este é um site que não é de produção';
$string['nopermissioncategoryimport'] = 'Você não tem permissão para importar nesta categoria.';
$string['nopermissioncategoryrestore'] = 'Você não tem permissão para restaurar nesta categoria.';
$string['nopermissionform'] = 'Você não tem permissão para acessar esse formulário.';
$string['nopermissiontab'] = 'Você não tem permissão para acessar essa página.';
$string['nothing'] = 'Nada';
$string['nothingtoexport'] = 'Nada para exportar';
$string['nothingtoimport'] = 'Nada para importar';
$string['notpossible'] = 'Impossível';
$string['numhour'] = '{$a} hora';
$string['outcomes'] = 'Resultados';
$string['performanceinfo'] = 'Informação de performance da aba: (Escritas/leituras no BD: {$a->reads}/{$a->writes})';
$string['pluginname'] = 'Workplace';
$string['privacy:metadata:certificationid'] = 'O id da certificação de onde vem esse curso.';
$string['privacy:metadata:courseid'] = 'O curso foi redefinido.';
$string['privacy:metadata:exportcreatedby'] = 'O ID do usuário que executou a exportação.';
$string['privacy:metadata:exportstatus'] = 'O estado da exportação.';
$string['privacy:metadata:grade'] = 'A nota que o estudante tinha no curso antes de ser redefinido.';
$string['privacy:metadata:importcreatedby'] = 'O ID do usuário que executou a importação.';
$string['privacy:metadata:importstatus'] = 'O estado da importação.';
$string['privacy:metadata:programid'] = 'O id do programa de onde vem esse curso.';
$string['privacy:metadata:reason'] = 'O motivo pelo qual esse curso foi redefinido.';
$string['privacy:metadata:resetinfo'] = 'Informação sobre o que foi redefinido neste curso.';
$string['privacy:metadata:resetstatus'] = 'Estado da redefinição.';
$string['privacy:metadata:tenantid'] = 'O ID do tenant relacionado.';
$string['privacy:metadata:timecreated'] = 'A data de criação.';
$string['privacy:metadata:timemodified'] = 'A data de modificação.';
$string['privacy:metadata:timerequested'] = 'A data em que a redefinição foi solicitada.';
$string['privacy:metadata:tool_wp_course_reset'] = 'Redefinir curso.';
$string['privacy:metadata:tool_wp_export'] = 'Informações sobre exportações executadas no site.';
$string['privacy:metadata:tool_wp_import'] = 'Informações sobre importações executadas no site.';
$string['privacy:metadata:userid'] = 'O usuário que teve o curso redefinido.';
$string['privacy:metadata:usermodified'] = 'O usuário modificado.';
$string['privacy:metadata:userrequested'] = 'Usuário que solicitou a redefinição de curso.';
$string['privacy:metadata:wascompleted'] = 'Se o curso foi concluído pelo usuário antes da redefinição.';
$string['problem'] = 'Problema';
$string['proceed'] = 'Avançar';
$string['processing'] = 'Processando';
$string['productionsite'] = 'Site de produção';
$string['productionstate'] = 'Estado de produção';
$string['productionstatedesc'] = 'Sites que não são de produção terão um aviso no canto inferior direito da página.';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'Motivo para redefinir';
$string['recovercoursegrades'] = 'Ao habilitar esta configuração, certifique-se de habilitar também a configuração \'Excluir histórico de notas durante a redefinição do curso\'.';
$string['refresh'] = 'Recarregar';
$string['reg_moodleproduct'] = 'Produto Moodle ({$a})';
$string['reg_wpactiveusers'] = 'Número de usuários únicos que acessaram no último mês ({$a})';
$string['reg_wpcertificates'] = 'Número de certificados ({$a})';
$string['reg_wpcertificatesissues'] = 'Número de certificados emitidos ({$a})';
$string['reg_wpparticipantnumberaverage'] = 'Número médio de participantes ativos no último mês ({$a})';
$string['reg_wpplugins'] = 'Lista dos plugins instalados e habilitados, número de instâncias ({$a})';
$string['resetinfo'] = 'Redefinir a informação';
$string['resetstatus'] = 'Estado de redefinição';
$string['safenavigation'] = 'É seguro continuar navegando neste site.';
$string['selectallcategoriesinthisfile'] = 'Selecionar todas as categorias de cursos nesse arquivo';
$string['selectallcohortsinthisfile'] = 'Selecionar todos os coortes nesse arquivo';
$string['selectallcoursesinthisfile'] = 'Selecionar todos os cursos nesse arquivo';
$string['selectalltemplates'] = 'Selecionar todos os modelos de certificado';
$string['selectalltemplatesinfile'] = 'Selecionar todos os modelos de certificado neste arquivo';
$string['selectatleastonecategory'] = 'Selecione pelo menos uma categoria';
$string['selectatleastonecohort'] = 'Selecione ao menos um coorte';
$string['selectatleastonecourse'] = 'Selecione pelo menos um curso';
$string['selectatleastonetemplate'] = 'Selecione ao menos um modelo';
$string['selectcoursecategory'] = 'Selecionar categoria de curso';
$string['selectcoursesmanually'] = 'Selecionar cursos manualmente...';
$string['selectedcoursecategory'] = 'Categoria de curso selecionada: {$a}';
$string['selectexporter'] = 'Selecionar exportador';
$string['selectimporter'] = 'Selecionar importador';
$string['selectmanually'] = 'Selecionar manualmente...';
$string['selectmanuallycategories'] = 'Selecionar categorias e subcategorias manualmente';
$string['selectmanuallycertificates'] = 'Selecionar modelos de certificado manualmente';
$string['shortnamechanged'] = 'Nome breve alterado de \'{$a->from}\' para \'{$a->to}\'';
$string['showless'] = 'Mostrar menos';
$string['showxmore'] = 'Mostrar mais {$a} ...';
$string['solution'] = 'Solução';
$string['stepx'] = 'Passo {$a}.';
$string['tenant'] = 'Tenant';
$string['thissite'] = '(Este site)';
$string['timerequested'] = 'Data da solicitação';
$string['timereseted'] = 'Data da redefinição';
$string['uploadimportfile'] = 'Enviar um arquivo';
$string['userrequested'] = 'Usuário que solicitou';
$string['viewexport'] = 'Ver exportação';
$string['viewimport'] = 'Ver importação';
$string['viewlicense'] = 'Ver licença';
$string['wascompleted'] = 'Foi concluído';
$string['willbeimported'] = 'Será importado';
$string['workplacelicenseheader'] = 'Licença do Moodle Workplace';
$string['workplacelicensenew'] = 'Moodle Workplace - Copyright © 2018 em diante, Moodle Pty Ltd
Moodle - Copyright © 1999 em diante, Martin Dougiamas

O Moodle Workplace ™ Code é a coleção de scripts de software (plugins e modificações, e quaisquer derivações dos mesmos) que são de propriedade exclusiva e licenciada pelo Moodle sob os termos desta licença proprietária do Moodle Workplace ("MWL") juntamente com o pacote de software aberto do Moodle ("Core ") que pode ser baixado gratuitamente em "download.moodle.org" e que é fornecido pelo Moodle sob uma única GNU General Public License versão 3.0, datada de 29 de junho de 2007 ("GPL"). A MWL é estritamente controlada pela Moodle Pty Ltd e seus parceiros premium certificados. Onde quer que existam termos conflitantes, os termos da MWL são vinculantes e devem prevalecer.

O pacote de software Moodle Core governado pela GPL está sujeito à proteção de direitos autorais a partir de 1999 por Martin Dougiamas com partes contribuídas/com direitos autorais por outros contribuidores. Esse software aberto Moodle® e a documentação correspondente são distribuídos na esperança de que sejam úteis, mas sem qualquer garantia; sem mesmo a garantia implícita de comercialização ou adequação a uma finalidade específica.

Ao acessar o Moodle Workplace™ que é regido pelo MWL, você concorda que assinou um MWL com o Moodle Pty Ltd garantindo (entre outras coisas) que você:
- não possuirá o Código Moodle Workplace™ sem estar sujeito aos termos do MWL;
- deixará de usar o Moodle Workplace ™ e excluirá imediatamente todas as cópias do Código Moodle Workplace ™ de seus servidores e quaisquer computadores sob seu controle se você não for mais um Moodle Certified Premium Partner ou cliente de um Moodle Certified Premium Partner. Você deve confirmar isso por escrito ao Moodle dentro de 7 dias após a ocorrência de tal evento;
- não distribuirá cópias do Moodle Workplace ™ Code a terceiros que não sejam parte do MWL que você assinou e você deve indenizar o Moodle por qualquer perda sofrida pelo Moodle devido à falha sua em cumprir o MWL;
- concorda que quaisquer melhorias no Moodle Workplace ™ Code devem ser explicitamente compartilhadas com a Moodle Pty Ltd e seus parceiros premium certificados, com tais direitos nas melhorias atribuídas à Moodle Pty Ltd, permitindo assim à Moodle Pty Ltd direitos totais para incluir essas melhorias em versões futuras do Código Moodle Workplace™.
- indenizar e isentar o Moodle Pty Ltd e seus parceiros premium certificados por quaisquer danos, multas, penalidades ou outras responsabilidades decorrentes de qualquer entrada de dados por você e seus usuários finais.

Os sites Moodle Workplace™ podem incluir um pixel de rastreamento para fins estatísticos e monitoramento de conformidade. Nenhum dado pessoal é coletado ou processado, apenas a URL do site.

Este é apenas um resumo: para os termos completos do MWL, consulte o MWL que você assinou.';
$string['workplacelicensenotagreed'] = 'Você não pode ver esse conteúdo até que o administrador do site concorde com a licença do Moodle Workplace.';
$string['wp:manageexportimport'] = 'Gerenciar exportação e importação do Workplace';
$string['wp:useexportimport'] = 'Usar exportação e importação do Workplace';
