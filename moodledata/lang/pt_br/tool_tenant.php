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
 * Strings for component 'tool_tenant', language 'pt_br', version '4.1'.
 *
 * @package     tool_tenant
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetenants'] = 'Tenants ativos';
$string['addtenant'] = 'Novo tenant';
$string['adduser'] = 'Novo usuário';
$string['admin'] = 'Administrador';
$string['administrators'] = 'Administradores';
$string['advanced'] = 'Avançado';
$string['allocateusers'] = 'Alocar usuários';
$string['alltenants'] = 'Todos os tenants';
$string['allusers'] = 'Todos os usuários';
$string['archivedtenants'] = 'Tenants arquivados';
$string['archivetenant'] = 'Arquivar tenant';
$string['assigntenantadmins'] = 'Atribuir papel de Administrador de Tenant';
$string['basicinformation'] = 'Informações básicas';
$string['brand'] = 'Barra de navegação';
$string['brand_help'] = 'A cor usada na barra de navegação do topo (cabeçalho)';
$string['branding'] = 'Marca';
$string['cachedef_mytenant'] = 'Informação sobre o tenant atual';
$string['cachedef_tenants'] = 'Lista de tenants';
$string['cannotarchivetenant'] = 'Não é possível arquivar o tenant padrão.';
$string['category'] = 'Categoria de curso';
$string['category_help'] = 'Os administradores de tenant terão atribuído automaticamente o papel \'Administrador de tenant na categoria de curso\' nessa categoria de curso. Eles poderão criar cursos, atribuir papéis, etc. Todos os usuários do tenant terão atribuído automaticamente o papel \'Usuário de tenant\' nessa categoria. <br/><br/>Apenas categorias de nível superior (primeiro nível) podem ser selecionadas como categorias de Tenants.<br/>Se \'Nova categoria\' for selecionada, uma categoria com o mesmo nome do Tenant será criada.';
$string['categorynameexist'] = 'Uma categoria com o nome \'{$a}\' já existe no primeiro nível. Por favor, selecione essa categoria ou escolha outro nome.';
$string['categorytaken'] = 'Essa categoria está vinculada a outro tenant.';
$string['chooseexistingcategory'] = 'Escolher uma categoria existente';
$string['colours'] = 'Cores';
$string['confirmallocateusers'] = 'Você tem certeza que quer alocar os usuários selecionados ao tenant selecionado?';
$string['confirmarchivetenant'] = 'Você tem certeza que quer arquivar o tenant \'{$a}\'? Todos os usuários alocados a esse tenant serão movidos para o tenant padrão.';
$string['confirmassigntenantadmins'] = 'Você tem certeza que quer atribuir o papel de administrador do tenant para os usuários selecionados?';
$string['confirmdeletetenant'] = 'Você tem certeza que quer excluir o tenant \'{$a}\'? Essa ação não pode ser desfeita.';
$string['confirmdeleteuser'] = 'Você tem certeza que quer excluir esse usuário? Essa ação não pode ser desfeita.';
$string['confirmdeleteusers'] = 'Você tem certeza que quer excluir os usuários selecionados? Essa ação não pode ser desfeita.';
$string['confirmrestoretenant'] = 'Você tem certeza que quer restaurar o tenant \'{$a}\'?';
$string['confirmsuspenduser'] = 'Você tem certeza que quer suspender esse usuário?';
$string['confirmsuspendusers'] = 'Você tem certeza que quer suspender os usuários selecionados?';
$string['confirmunassigntenantadmins'] = 'Você tem certeza que quer remover o papel de administrador de tenant dos usuários selecionados?';
$string['confirmunsuspenduser'] = 'Você tem certeza que quer reativar esse usuário?';
$string['confirmunsuspendusers'] = 'Você tem certeza que quer reativar os usuários selecionados?';
$string['createnewcategory'] = 'Criar nova categoria';
$string['customcss'] = 'SCSS personalizado';
$string['defaultname'] = 'Tenant padrão';
$string['defaulttenantmobileconfig'] = 'Esse é o tenant padrão, então sua configuração sempre será usada pelo aplicativo móvel.';
$string['deletetenant'] = 'Excluir tenant';
$string['deleteuser'] = 'Excluir usuário';
$string['deleteusers'] = 'Excluir usuários';
$string['editdetails'] = 'Editar detalhes';
$string['editdetailsinsharedspace'] = 'Editar no Espaço Compartilhado';
$string['edittenant'] = 'Editar tenant \'{$a}\'';
$string['edittenantname'] = 'Editar nome';
$string['edituser'] = 'Editar conta de usuário';
$string['edituserwithname'] = 'Editar usuário \'{$a}\'';
$string['enablesharedspace'] = 'Habilitar Espaço Compartilhado';
$string['enrolinseparategroups'] = 'Esse curso pode ser compartilhado com outros tenants mas usuários de tenants diferentes serão alocados em grupos separados';
$string['enrolwithoutgroups'] = 'Usuários de outros tenants podem ser inscritos nesse curso e poderão ver uns aos outros por que esse curso não está no modo de grupos separados';
$string['errorcannotallocate'] = 'Não foi possível alocar ao tenant';
$string['errorinvalidtenant'] = 'Tenant inválido \'{$a}\'';
$string['eventtenantcreated'] = 'Tenant criado';
$string['eventtenantdeleted'] = 'Tenant excluído';
$string['eventtenantupdated'] = 'Tenant atualizado';
$string['eventtenantusercreated'] = 'Usuário alocado ao tenant';
$string['eventtenantuserupdated'] = 'A alocação do usuário ao tenant mudou';
$string['favicon'] = 'Favicon';
$string['footertext'] = 'Texto de rodapé';
$string['forceforalltenants'] = 'Forçar para todos os tenants';
$string['gotosharedspace'] = 'Ir para o Espaço Compartilhado';
$string['headerlogo'] = 'Logo do cabeçalho';
$string['idnumber'] = 'ID number';
$string['idnumber_help'] = 'O \'ID number\' de um tenant só é usado quando comparando com sistemas externos ou na ferramenta \'Carregar lista de usuários\' e não é mostrado em nenhum outro lugar do site. Se o tenant tem um "código" oficial, ele deve ser informado aqui. Em outros casos esse campo pode ser deixado em branco.';
$string['images'] = 'Imagens';
$string['invalidcolour'] = 'O código da cor não está no formato correto. Por favor use o formato #000 ou #000000.';
$string['loginbackground'] = 'Imagem de fundo do login';
$string['loginlogo'] = 'Logo do login';
$string['loginurl'] = 'URL de login';
$string['loginurl_help'] = 'As URLs selecionadas serão mostradas para os administradores de tenants e eles podem passá-las aos seus usuários para que tenham o tema do tenant aplicados desde o início. Se o \'ID number\' não for especificado, o link com ele não será disponibilizado mesmo se for selecionado. Note que durante a criação do tenant o \'id\' não está disponível.';
$string['management'] = 'Administração';
$string['managetenants'] = 'Gerenciar tenants';
$string['migrationcoursecategories'] = 'Categorias de cursos, com coortes e estrutura de cursos';
$string['migrationcreate'] = 'Criar novos tenants';
$string['migrationdestinationsummary'] = 'Destino: {$a}';
$string['migrationexporterdescription'] = 'Tenants com todas as entidades contidas neles';
$string['migrationlogerror'] = 'Não foi possível importar o tenant \'{$a}\'';
$string['migrationlogsuccess'] = 'Tenant \'<a href="{$a->url}">{$a->name}</a>\' importado';
$string['migrationmappingerror'] = 'Alguns tenants não existem';
$string['migrationmappingerrorlog'] = 'O tenant {$a} não foi encontrado';
$string['migrationmerge'] = 'Mesclar com tenant existente...';
$string['migrationmerge_help'] = 'Mesclar informações de tenants com as entidades selecionadas em um tenant existente. Note que os detalhes e a aparência serão sobrescritos se selecionados.';
$string['migrationmergeselecttenant'] = 'Selecione o tenant no qual mesclar';
$string['migrationmergetoomany'] = 'Apenas uma única instância pode ser selecionada para mesclar com um tenant existente';
$string['migrationselectalltenants'] = 'Selecionar todos os tenants';
$string['migrationselectexcludingarchived'] = 'Selecionar todos os tenants (excluindo arquivados)';
$string['migrationselectincludingarchived'] = 'Selecionar todos os tenants (incluindo arquivados)';
$string['migrationselectmanually'] = 'Selecionar tenants manualmente...';
$string['movebetweentenants'] = 'Mover entre os tenants';
$string['movetenant'] = 'Mover tenant \'{$a}\'';
$string['name'] = 'Nome do tenant';
$string['newname'] = 'Novo tenant \'{$a}\'';
$string['newnamefor'] = 'Novo nome para \'{$a}\'';
$string['nocategory'] = 'Nenhuma categoria';
$string['nomanualassignment'] = 'Esse papel não pode ser atribuído manualmente em nenhum contexto';
$string['notnow'] = 'Não agora';
$string['notspecified'] = 'Não especificado';
$string['organisationadmintab'] = 'Organização';
$string['pluginname'] = 'Multi-tenancy';
$string['primary'] = 'Links';
$string['primary_help'] = 'A cor usada para links e elementos interativos.';
$string['privacy:metadata:user'] = 'Alocação de usuários em tenants';
$string['privacy:metadata:user:component'] = 'Componente responsável pela alocação';
$string['privacy:metadata:user:id'] = 'ID';
$string['privacy:metadata:user:reason'] = 'Motivo para alocação';
$string['privacy:metadata:user:tenantid'] = 'Tenant';
$string['privacy:metadata:user:timecreated'] = 'Data e hora de alocação';
$string['privacy:metadata:user:timemodified'] = 'Data e hora de modificação';
$string['privacy:metadata:user:userid'] = 'Usuário';
$string['privacy:metadata:user:usermodified'] = 'Usuário que modificou o registro';
$string['reg_wptenants'] = 'Número de tenants ({$a})';
$string['restoretenant'] = 'Restaurar tenant';
$string['selecttenant'] = 'Selecionar tenant';
$string['selectuser'] = 'Selecionar usuário \'{$a}\'';
$string['sharedspace'] = 'Espaço compartilhado';
$string['sharedspaceconfirmationtext'] = 'O Espaço Compartilhado é um local para você compartilhar entidades entre todos os tenants. Tudo que você criar nesse espaço ficará disponível instantaneamente para os usuários em qualquer tenant. Essa ação não pode ser desfeita.<br/><br/>Você quer habilitar o Espaço Compartilhado?';
$string['sharedspaceenabledmessage'] = 'O espaço compartilhado foi habilitado com sucesso. Use o menu de tenants para acessá-lo.';
$string['sitename'] = 'Nome do site';
$string['sitename_help'] = 'Permite sobrescrever o nome padrão do site para usuários desse tenant';
$string['siteshortname'] = 'Nome breve do site';
$string['siteshortname_help'] = 'Permite sobrescrever o nome breve do site para usuários desse tenant';
$string['suspenduser'] = 'Suspender usuário';
$string['suspendusers'] = 'Suspender usuários';
$string['switchedto'] = 'Você trocou para \'{$a}\'';
$string['switchtenant'] = 'Trocar de tenant';
$string['tenant'] = 'Tenant';
$string['tenant:allocate'] = 'Alocar usuários a todos os tenants';
$string['tenant:browseusers'] = 'Navegue nos usuários do tenant atual';
$string['tenant:manage'] = 'Gerenciar a inclusão e edição de tenants';
$string['tenant:managetheme'] = 'Gerenciar configurações de tema para o tenant atual';
$string['tenant:manageusers'] = 'Adicionar e editar usuários do tenant atual';
$string['tenantadmin'] = 'Administrador de tenant';
$string['tenantadmincapabilitieslimit'] = 'As "capabilities" que não são compatíveis com Multi-tenancy não são listadas aqui. <a href="{$a}">Mais informações</a>';
$string['tenantadmindescription'] = 'O papel de administrador de tenant do workplace. Atribuído automaticamente ao administrador de tema no contexto do sistema.';
$string['tenantadministration'] = 'Administração de tenant';
$string['tenantadministrator'] = 'Esse usuário é um administrador de tenant';
$string['tenantcategorycapabilitieslimit'] = 'Apenas "capabilities" que podem ser definidas no contexto de categoria de curso são mostradas aqui';
$string['tenantdetails'] = 'Detalhes';
$string['tenantlimit'] = 'Limite de tenants';
$string['tenantlimit_desc'] = 'Número máximo de tenants permitidos no sistema. Tanto tenants ativos quanto arquivados são contabilizados.';
$string['tenantlimitenabled'] = 'Habilitar o limite de tenants';
$string['tenantlimitenabled_desc'] = 'Se isso estiver habilitado é possível limitar o número de tenants nesse site.';
$string['tenantlimitreached'] = 'O limite de tenants foi alcançado';
$string['tenantlimitreached1'] = 'A funcionalidade de multi-tenancy não está habilitada nesse site.';
$string['tenantlimitreachedmult'] = 'Você só pode criar {$a} tenants nesse site. Por favor, note que tenants arquivados também contam para esse limite.';
$string['tenantmanager'] = 'Administrador de tenant na categoria de curso';
$string['tenantmanagerdescription'] = 'O segundo papel do workplace para administrador de tenant. Atribuído automaticamente aos administradores de tenant no contexto da categoria de curso.';
$string['tenantnotfound'] = 'Tenant não encontrado';
$string['tenants'] = 'Tenants';
$string['tenantuser'] = 'Usuário do tenant';
$string['tenantuserdescription'] = 'O papel de usuário de tenant do workplace. Atribuído automaticamente a todos os usuários do tenant no contexto da categoria de curso.';
$string['themesettingssaved'] = 'As configurações de tema foram salvas. Pode levar alguns minutos até que as configurações fiquem visíveis no site.';
$string['toomanytenantstoshow'] = 'Muitos tenants para mostrar';
$string['unassigntenantadmins'] = 'Remover papel de administrador de tenant';
$string['unsuspenduser'] = 'Reativar usuário';
$string['unsuspendusers'] = 'Reativar usuários';
$string['userdeletedfail'] = '{$a} usuários não foram encontrados ou não puderam ser excluídos';
$string['userdeletedsuccess'] = '{$a} usuários foram excluídos';
$string['usermanagement'] = 'Gerenciamento de usuários';
$string['usermovetotenant'] = '{$a->count} usuários foram movidos para o tenant {$a->tenant}';
$string['usersassignedtenantadminfail'] = 'O papel de administrador de tenant não foi atribuído a {$a} usuários';
$string['usersassignedtenantadminsuccess'] = 'O papel de administrador de tenant foi atribuído a {$a} usuários';
$string['userscount'] = 'Usuários';
$string['userssuspendedfail'] = '{$a} usuários não foram encontrados ou não puderam ser suspensos';
$string['userssuspendedsuccess'] = '{$a} usuários foram suspensos';
$string['usersunassignedtenantadminfail'] = 'O papel de administrador de tenant não foi removido de {$a} usuários';
$string['usersunassignedtenantadminsuccess'] = 'O papel de administrador de tenant foi removido de {$a} usuários';
$string['usersunsuspendedfail'] = '{$a} usuários não foram encontrados ou não puderam ser suspendidos';
$string['usersunsuspendedsuccess'] = '{$a} usuários foram suspensos';
$string['usersuspendedsuccess'] = 'Usuário suspenso com sucesso';
$string['userunsuspendedsuccess'] = 'Usuário reativado com sucesso';
$string['viewusers'] = 'Gerenciar tenant \'{$a}\'';
