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
 * Strings for component 'enrol_lti', language 'pt_br', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Adicionar conteúdo';
$string['adddeployment:deploymentid_help'] = 'Cada implantação da ferramenta (este site) em uma plataforma receberá um ID de implantação exclusivo para o registro. O ID de implantação deve ser registrado com a ferramenta (este site) antes que os lançamentos da respectiva implantação da ferramenta sejam permitidos.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID de implantação inválido. A ID de implantação já existe para este registro de aplicativo.';
$string['adddeployment:name'] = 'Nome da implantação';
$string['addtocourse'] = 'Adicionar ao curso';
$string['addtogradebook'] = 'Adicionar ao livro de notas';
$string['allowframeembedding'] = 'Nota: Recomenda-se que a configuração de administração do site \'Permitir incorporação de "frame"\' esteja habilitada, para que as ferramentas sejam exibidas dentro de um "frame" ao invés de uma nova janela.';
$string['authltimustbeenabled'] = 'Nota: Esse plugin requer que o plugin de autenticação LTI também esteja habilitado.';
$string['cartridgeurl'] = 'URL do pacote';
$string['copiedtoclipboard'] = '{$a} copiado para a área de transferência';
$string['copytoclipboard'] = 'Copiar para área de transferência';
$string['couldnotestablishproxy'] = 'Não foi possível estabelecer proxy com o consumidor.';
$string['customproperties'] = 'Propriedades personalizadas';
$string['deeplinkingurl'] = 'URL de link direto';
$string['deletedactivity'] = 'Atividade excluída';
$string['deletedactivityalt'] = 'A atividade compartilhada por esta instância foi excluída';
$string['deletedactivitydescription'] = 'A atividade compartilhada por esta instância foi excluída. Você pode selecionar outra atividade para compartilhar editando a instância ou, se não for mais necessário, pode simplesmente excluir a instância. A exclusão da instância removerá todas as inscrições de usuários associadas.';
$string['deploymentadd'] = 'Adicionar uma implantação';
$string['deploymentaddnotice'] = 'Implantação adicionada';
$string['deploymentdelete'] = 'Excluir implantação';
$string['deploymentdeleteconfirm'] = 'Aviso: A exclusão de uma implantação resultará na perda de acesso de qualquer usuário que siga os links de recursos vinculados a essa implantação de ferramenta na plataforma. Os serviços de sincronização de membros e notas também serão removidos para esses recursos. Tem certeza de que deseja excluir o ID de implantação \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Implantação excluída';
$string['deploymentid'] = 'ID de implantação';
$string['deployments'] = 'Implantações';
$string['deploymentsinfo'] = 'Um ID de implantação é gerado pela plataforma quando a ferramenta é disponibilizada em um contexto. Isso pode ocorrer no ato da inscrição, ou posteriormente, quando a ferramenta for disponibilizada para um curso ou categoria específica. O ID de implantação deve ser inserido aqui antes que os lançamentos da implantação da ferramenta sejam permitidos.';
$string['details'] = 'Detalhes';
$string['editplatformdetails'] = 'Editar detalhes da plataforma';
$string['endpointltiversionnotice'] = 'Os endpoints da ferramenta abaixo são apenas para configuração manual do LTI 1.3. Para versões anteriores (1.1/2.0), os detalhes para os consumidores podem ser encontrados na página \'Publicados como ferramentas LTI\', acessível através da navegação do curso.';
$string['enrolenddate'] = 'Data de término';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem acessar até essa data, somente.';
$string['enrolenddateerror'] = 'A data de término da inscrição não pode ser anterior à data de início';
$string['enrolisdisabled'] = 'O plugin \'Publicar como ferramenta LTI\' está desabilitado.';
$string['enrolmentfinished'] = 'Inscrição concluída.';
$string['enrolmentnotstarted'] = 'A inscrição ainda não foi iniciada.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_help'] = 'Duração na qual a inscrição é válida, começando com o momento em que o usuário se inscreve no sistema remoto. Se desabilitada, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários só poderão acessar a partir dessa data.';
$string['existingregistrationerror'] = 'Já existe um registro para este emissor e ID do cliente.';
$string['failedrequest'] = 'Falha na solicitação. Motivo: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acessar a ferramenta, por favor, utilize o "link" abaixo.';
$string['gradesync'] = 'Sincronização de notas';
$string['gradesync_help'] = 'Se as notas por meio da ferramenta são enviadas para o sistema remoto (consumidor LTI).';
$string['incorrecttoken'] = 'O "token" estava incorreto. Por favor, verifique a URL e tente novamente, ou entre em contato com o administrador dessa ferramenta.';
$string['invalidexpiredregistrationurl'] = 'URL de registro inválido ou expirado. Verifique o URL e tente novamente.';
$string['invalidrequest'] = 'Solicitação inválida';
$string['invalidtoolconsumer'] = 'Ferramenta de consumidor inválida.';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Detalhes do lançamento';
$string['launchdetails_help'] = 'Um pacote URL (também chamado de URL de configuração) mais um segredo ou um URL de inicialização são necessários para configurar a ferramenta.';
$string['launchurl'] = 'Launch URL';
$string['loginurl'] = 'Iniciar URL de login';
$string['lti13launchdetails_help'] = 'A URL de inicialização e as propriedades personalizadas são necessárias apenas ao configurar manualmente um link de recurso na plataforma. Sempre que possível, os professores devem favorecer o processo de seleção de conteúdo (deep linking) para a criação de links de recursos.';
$string['lti:config'] = 'Configurar instâncias \'Publicar como ferramenta LTI\'';
$string['lti:unenrol'] = 'Desinscrever usuários do curso';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Ocorreu um problema ao buscar a configuração OpenID da plataforma. O resultado não foi um JSON válido. Isso também pode ser causado pela configuração de hosts bloqueados. Certifique-se de que seu site esteja configurado para se conectar ao domínio da plataforma e tente novamente usando um novo URL de registro.';
$string['ltiadvlauncherror:invalidregistration'] = 'Dados de inicialização ou configuração de ferramenta inválidos. Não foi possível encontrar um registro de plataforma (emissor: {$a->platform}, ID do cliente: {$a->clientid}).';
$string['ltilegacy'] = 'LTI legado (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'As ferramentas legadas de LTI (1.1/2.0) estão obsoletas. O conteúdo agora deve ser compartilhado usando o LTI Advantage.';
$string['ltiversion'] = 'Versão LTI';
$string['ltiversion_help'] = 'A versão do LTI que será usada para acessar o conteúdo publicado.

O LTI Advantage permite que o conteúdo seja publicado em plataformas pré-cadastradas sem a necessidade de fazer alterações na plataforma sempre que um novo conteúdo for publicado. O contrato de segurança é entre a plataforma e a ferramenta.

As versões legadas (1.1 e 2.0) exigem que um novo registro de ferramenta seja criado no consumidor para cada conteúdo recém-publicado porque cada conteúdo publicado tem seu próprio contrato de segurança com o site do consumidor e deve ser configurado em um caso por base de caso.';
$string['maxenrolled'] = 'Máximo de usuários inscritos';
$string['maxenrolled_help'] = 'O número máximo de usuários remotos que podem acessar a ferramenta. Se definido como zero, o número de usuários inscritos é ilimitado.';
$string['maxenrolledreached'] = 'O número máximo de usuários remotos autorizados a acessar a ferramenta foi alcançado.';
$string['membersync'] = 'Sincronização de usuário';
$string['membersync_help'] = 'Se uma tarefa agendada sincroniza os usuários inscritos no sistema remoto com inscrições nesse curso, criando uma conta para cada usuário remoto, de acordo com a necessidade, e inscrevendo ou desinscrevendo-os como requerido.

Se configurado como não, no momento em que um usuário remoto acessa a ferramenta, uma conta será criada para ele e este será automaticamente inscrito.';
$string['membersyncmode'] = 'Modo de sincronização de usuário';
$string['membersyncmode_help'] = 'Se os usuários remotos devem ser inscritos e/ou desinscritos deste curso';
$string['membersyncmodeenrolandunenrol'] = 'Inscrever novos e desinscrever usuários ausentes';
$string['membersyncmodeenrolnew'] = 'Inscrever novos usuários';
$string['membersyncmodeunenrolmissing'] = 'Desinscrever usuários ausentes';
$string['moodle'] = 'Moodle';
$string['nopublishedcontent'] = 'Nenhum recurso ou atividade foi publicado ainda';
$string['noregisteredplatforms'] = 'Nenhuma plataforma cadastrada';
$string['notoolsprovided'] = 'Nenhuma ferramenta fornecida';
$string['opensslconfiginvalid'] = 'O LTI 1.3 requer que um openssl.cnf válido seja configurado e esteja disponível para seu servidor web. Entre em contato com o administrador do site para configurar e habilitar o openssl para este site.';
$string['opentool'] = 'Ferramenta aberta';
$string['platformdetails'] = 'Detalhes da plataforma';
$string['platformdetailsinfo'] = 'Uma vez configurada a ferramenta na plataforma, os dados da plataforma devem ser registrados aqui para concluir o registro.
<ul>
<li>Para registros dinâmicos, essas informações serão definidas automaticamente e nenhuma alteração adicional será necessária.</li>
<li>Para registros manuais, essas informações devem ser copiadas manualmente da plataforma.</li>
</ul>';
$string['pluginname'] = 'Publicar como ferramenta LTI';
$string['pluginname_desc'] = 'O plugin \'Publicar como ferramenta LTI\', juntamente com o plugin de autenticação LTI, permite que usuários remotos acessem cursos e atividades selecionadas. Em outras palavras, o Moodle funciona como um provedor de ferramentas LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'A lista de usuários inscritos via um provedor LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'A hora em que o usuário acessou o curso pela última vez';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'A última nota registrada para o usuário';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'A hora em que o usuário foi inscrito';
$string['privacy:metadata:enrol_lti_users:userid'] = 'O ID do usuário';
$string['provisioningmode_help'] = 'Essa configuração determina como as contas são tratadas na primeira inicialização. Vários modos são suportados:
<ul>
<li>Apenas novas contas (automático). As contas serão criadas automaticamente para usuários que iniciam a partir da plataforma. Esse é o padrão para inicialização de estudantes.</li>
<li>Contas existentes e novas (aviso). O usuário poderá escolher o que fazer. Eles podem decidir vincular uma conta existente ou criar uma nova conta para eles. Esta é a opção mais flexível e padrão para inicialização de professores.</li>
<li>Apenas contas existentes (aviso). O usuário será solicitado a vincular uma conta existente e não poderá acessar os recursos da ferramenta sem fazer isso.</li>
</ul>';
$string['publishedcontent'] = 'Conteúdo publicado';
$string['publishedcontent_help'] = 'Um recurso ou atividade publicada pode ser usado em plataformas cadastradas por meio do fluxo de seleção de conteúdo (deep linking). Além disso, um link de recurso pode ser criado manualmente na plataforma usando o URL de inicialização e as propriedades personalizadas fornecidas.';
$string['registeredplatforms'] = 'Plataformas cadastradas';
$string['registeredplatformsltiversionnotice'] = 'As plataformas listadas abaixo são registradas para comunicação LTI 1.3. Para versões anteriores, o registro do consumidor não é necessário.';
$string['registerplatform:accesstokenurl'] = 'URL do token de acesso';
$string['registerplatform:accesstokenurl_help'] = 'A URL para a qual as solicitações de token de acesso serão enviadas pela ferramenta. Será fornecido pela plataforma.';
$string['registerplatform:authrequesturl'] = 'URL de solicitação de autenticação';
$string['registerplatform:clientid'] = 'ID do Cliente';
$string['registerplatform:clientid_help'] = 'String utilizada para identificar o cadastro da ferramenta na plataforma. Será fornecido pela plataforma.';
$string['registerplatform:duplicateregistrationerror'] = 'ID de cliente inválido. Este ID do cliente já está registrado para o ID da plataforma fornecido.';
$string['registerplatform:invalidurlerror'] = 'URL inválida. Você incluiu http:// ou https://?';
$string['registerplatform:jwksurl'] = 'URL do conjunto de chaves públicas';
$string['registerplatform:name'] = 'Nome da plataforma';
$string['registerplatform:name_help'] = 'Um nome curto que descreve a plataforma. Isso pode ser alterado a qualquer momento.';
$string['registerplatform:platformid'] = 'ID da plataforma (emissor)';
$string['registerplatform:platformid_help'] = 'URL que identifica a plataforma de aprendizagem de terceiros. Será fornecido pela plataforma.';
$string['registerplatformadd'] = 'Registrar uma plataforma';
$string['registerplatformaddnotice'] = 'Registro da plataforma adicionado';
$string['registerplatformdelete'] = 'Excluir registro da plataforma';
$string['registerplatformdeletenotice'] = 'Registro da plataforma excluído';
$string['registerplatformedit'] = 'Editar registro';
$string['registerplatformeditnotice'] = 'Registro da plataforma atualizado';
$string['registration'] = 'Registro de ferramentas publicadas';
$string['registrationdeeplinklabel'] = 'Adicionar conteúdo de {$a}';
$string['registrationdynamic'] = 'Registro dinâmico';
$string['registrationmanual'] = 'Registro manual';
$string['registrationstatus'] = 'Status';
$string['registrationstatusactive'] = 'Ativo';
$string['registrationstatuspending'] = 'Pendente';
$string['registrationurl'] = 'Registro de URL';
$string['registrationurl_help'] = 'Se um registro de URL (também chamado de URL de proxy) for usado, a ferramenta será automaticamente configurada.';
$string['registrationurlinfomessage'] = 'Se a plataforma suportar registro dinâmico, use a URL de registro abaixo. Para mais informações sobre registro dinâmico, veja a documentação <a href="{$a}">Publicar como ferramenta LTI</a>.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Requerer curso ou conclusão da atividade antes da sincronização de notas';
$string['returnurlnotset'] = 'A URL de retorno não foi definida.';
$string['roleinstructor'] = 'Papel do professor';
$string['roleinstructor_help'] = 'O papel atribuído na ferramenta ao professor remoto.';
$string['rolelearner'] = 'Papel do estudante';
$string['rolelearner_help'] = 'O papel atribuído na ferramenta ao estudante remoto.';
$string['secret'] = 'Segredo';
$string['secret_help'] = 'Uma sequência de caracteres que é compartilhada com o sistema remoto (consumidor LTI) para prover acesso à ferramenta.';
$string['sharedexternaltools'] = 'Publicado como ferramentas LTI';
$string['successfulregistration'] = 'Registro bem-sucedido';
$string['tasksyncgrades'] = 'Publicar como ferramenta LTI de sincronização de notas';
$string['tasksyncmembers'] = 'Publicar como ferramenta LTI de sincronização de usuários';
$string['tooldetails'] = 'Detalhes da ferramenta';
$string['toolsprovided'] = 'Ferramentas publicadas';
$string['toolsprovided_help'] = 'Uma ferramenta pode ser compartilhada com outro site fornecendo detalhes de lançamento ou uma URL de registro.';
$string['tooltobeprovided'] = 'Ferramenta a ser publicada';
$string['toolurl'] = 'Ferramenta de URL';
$string['userdefaultvalues'] = 'Valores padrão do usuário';
$string['viewplatformdetails'] = 'Ver detalhes da plataforma';
