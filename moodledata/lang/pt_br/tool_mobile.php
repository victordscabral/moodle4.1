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
 * Strings for component 'tool_mobile', language 'pt_br', version '4.1'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'O debuggimg ADOdb está habilitado. Ele deve ser desabilitado na autenticação do banco de dados externo ou nas configurações do plugin de inscrição no banco de dados externo.';
$string['androidappid'] = 'O identificador único do aplicativo Android';
$string['androidappid_desc'] = 'Esta configuração pode ser mantida como padrão, a menos que você tenha um aplicativo Android personalizado.';
$string['apppolicy'] = 'URL da política de aplicativos';
$string['apppolicy_help'] = 'O URL de uma política para usuários do aplicativo, listada na página Sobre no aplicativo. Se o campo for deixado em branco, o URL da política do site será usado.';
$string['apprequired'] = 'Essa funcionalidade está disponível apenas quando acessada pelo aplicativo móvel ou Moodle desktop.';
$string['autologinkeygenerationlockout'] = 'A geração automática de chave de login está bloqueada. Você precisa esperar {$a} minutos entre as solicitações.';
$string['autologinmintimebetweenreq'] = 'Tempo mínimo entre requisições de auto-login';
$string['autologinmintimebetweenreq_desc'] = 'O tempo mínimo entre as solicitações de login automático do aplicativo móvel. Se os usuários do aplicativo forem frequentemente solicitados a inserir suas credenciais ao visualizar o conteúdo incorporado do site, defina um valor mais baixo.';
$string['autologinnotallowedtoadmins'] = 'A autenticação automática não é permitida aos administradores do site.';
$string['cachedef_plugininfo'] = 'Isso armazena a lista de plugins com addons móveis';
$string['cachedef_subscriptiondata'] = 'Isso armazena as informações de assinatura do Moodle app.';
$string['clickheretolaunchtheapp'] = 'Clique aqui se a aplicação não abrir automaticamente.';
$string['configmobilecssurl'] = 'Um arquivo CSS para customizar a interface do aplicativo movel.';
$string['customlangstrings'] = 'Strings de idioma personalizadas';
$string['customlangstrings_desc'] = 'Palavras e frases exibidas no aplicativo podem ser personalizadas aqui. Insira cada string de idioma personalizado em uma nova linha com format: string identifier, custom language string e language code, separados por caracteres de pipe. Por exemplo:
<pre>
mm.user.student | Aprendiz | pt
mm.user.student | Aprendiz | es
</pre>
Para obter uma lista completa de identificadores de string, consulte a documentação.';
$string['custommenuitems'] = 'Itens de menu personalizados';
$string['custommenuitems_desc'] = 'Itens adicionais podem ser adicionados ao menu principal do aplicativo, especificando-os aqui. Insira cada item de menu personalizado em uma nova linha com formato: texto do item, URL do link, método de abertura de link e código de idioma (opcional, para exibir o item apenas para usuários do idioma especificado), separados por caracteres de barra vertical.

Os métodos de abertura de links são: app (para vincular a uma atividade suportada pelo aplicativo), inappbrowser (para abrir um link em um navegador sem sair do aplicativo), navegador (para abrir o link no navegador padrão do dispositivo fora do aplicativo) e incorporado (para exibir o link em um iframe em uma nova página no aplicativo).

Por exemplo:
<pre>
Ajuda do aplicativo|https: //someurl.xyz/help|inappbrowser
Minhas notas|https: //someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https: //someurl.xyz/local/mygrades/index.php|incorporado|es
</pre>';
$string['darkmode'] = 'Modo escuro';
$string['disabledfeatures'] = 'Funcionalidades desabilitadas';
$string['disabledfeatures_desc'] = 'Selecione aqui os recursos que deseja desativar no aplicativo Móvel para o seu site. Observe que alguns recursos listados aqui podem já estar desabilitados através de outras configurações do site. Você terá que sair e fazer login novamente no aplicativo para ver as mudanças.';
$string['displayerrorswarning'] = 'Mostrar mensagens de debug (debugdisplay) está habilitado. Ele deve ser desabilitado.';
$string['downloadcourse'] = 'Download do curso';
$string['downloadcourses'] = 'Download dos cursos';
$string['enablesmartappbanners'] = 'Habilitar App Banners';
$string['enablesmartappbanners_desc'] = 'Se habilitado, um banner promovendo o aplicativo móvel será exibido ao acessar o site usando um navegador móvel.';
$string['filetypeexclusionlist'] = 'Lista de exclusão de tipos de arquivos';
$string['filetypeexclusionlist_desc'] = 'Selecione todos os tipos de arquivo que não devem ser usados em um dispositivo móvel. Esses arquivos serão listados no curso e, se um usuário tentar abri-los, um aviso será exibido informando que o tipo de arquivo não é destinado ao uso em um dispositivo móvel. O usuário pode cancelar ou ignorar o aviso e abrir o arquivo de qualquer maneira.';
$string['filetypeexclusionlistplaceholder'] = 'Lista de exclusão dos tipos de arquivos mobile';
$string['forcedurlscheme'] = 'Se quiser permitir que apenas a sua aplicação personalizada da marca seja aberta numa janela do navegador, especifique o esquema de URL aqui. Se você quiser permitir somente o aplicativo oficial, então deixe o valor padrão. Se você quiser permitir qualquer app, deixe esse campo vazio.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forçar sair';
$string['forcelogout_desc'] = 'Se habilitado, usuários serão completamente "deslogados" mesmo quando trocando de contas. Eles devem inserir novamente suas senhas a próxima vez que quiserem acessar o site.';
$string['getmoodleonyourmobile'] = 'Obter o aplicativo para dispositivos móveis';
$string['h5poffline'] = 'Ver conteúdo H5P offline';
$string['httpsrequired'] = 'HTTPS necessário';
$string['insecurealgorithmwarning'] = 'Parece que o certificado HTTPS usa um algoritmo inseguro para assinar (SHA-1). Tente atualizar o certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que a cadeia de certificados é inválida. Esse certificado pode funcionar em um navegador mas não no aplicativo móvel.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que o certificado HTTPS para o site expirou.';
$string['invalidcertificatestartdatewarning'] = 'Parece que o certificado HTTPS para o site ainda não é válido (está com a data de início no futuro).';
$string['invalidprivatetoken'] = 'Token privado inválido. O Token não pode estar vazio ou ser transmitido através do parâmetro GET.';
$string['invaliduserquotawarning'] = 'A quota de usuário (userquota) está definida com um número inválido. Ela deveria estar definida com número válido (um valor inteiro) nas "Configurações de segurança do site".';
$string['iosappid'] = 'Identificador exclusivo do aplicativo IOS';
$string['iosappid_desc'] = 'Esta configuração pode ser deixada com o valor padrão a não que tenha uma aplicação iOS personalizada.';
$string['launchviasiteinbrowser'] = 'Executar pelo site no navegador do sistema';
$string['loginintheapp'] = 'Através da aplicação móvel';
$string['logininthebrowser'] = 'Através de uma janela do navegador (para módulos SSO)';
$string['loginintheembeddedbrowser'] = 'Através de navegador incorporado (para módulos SSO)';
$string['logoutconfirmation'] = 'Você tem certeza que quer fazer o "log out" no app móvel em seus dispositivos móveis? Ao fazer o "log out" você terá que informar novamente seu usuário e senha no app móvel em todos os dispositivos onde você tem o app instalado.';
$string['mainmenu'] = 'Menu principal';
$string['managefiletypes'] = 'Gerenciar tipos de arquivos';
$string['minimumversion'] = 'Se uma versão do aplicativo for definida (3.8.0 ou superior), todos os usuários que usam uma versão mais antiga serão solicitados a atualizar seu aplicativo antes de acessarem o site.';
$string['minimumversion_key'] = 'Versão mínima do aplicativo necessária';
$string['mobileapp'] = 'Aplicativo móvel';
$string['mobileappconnected'] = 'Aplicativo móvel conectado';
$string['mobileappearance'] = 'Aparência em dispositivos móveis';
$string['mobileappenabled'] = 'Este site está habilitado para acesso pelo aplicativo móvel. <br /> <a href="{$a}"> Baixe o aplicativo</a>.';
$string['mobileappsubscription'] = 'Assinatura do Moodle app';
$string['mobileauthentication'] = 'Autenticação em dispositivos móveis';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Funcionalidade Mobile';
$string['mobilenotificationsdisabledwarning'] = 'As notificações móveis não estão habilitadas. Elas devem ser habilitadas em configurações de Notificação.';
$string['mobilesettings'] = 'Configurações para dispositivos móveis';
$string['moodleappsportalfeatureswarning'] = 'Por favor, note que algumas funcionalidades podem ser restritas dependendo da sua assinatura do Moodle app. Para detalhes, visite o <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notifications'] = 'Notificações';
$string['notificationsactivedevices'] = 'Dispositivos ativos';
$string['notificationscurrentactivedevices'] = 'Dispositivos recebendo notificações esse mês';
$string['notificationsignorednotifications'] = 'Notificações não enviadas';
$string['notificationslimitreached'] = 'O limite mensal de dispositivos de usuários ativos foi excedido. Notificações para alguns usuários não serão enviadas. É recomendado que você atualize seu plano de aplicativo no <a href="{$a}" target="_blank">Portal de Aplicativos Moodle</a>.';
$string['notificationsmissingwarning'] = 'Não foi possível recuperar as estatísticas de notificação do aplicativo Moodle. Provavelmente, isso ocorre porque as notificações móveis ainda não estão habilitadas no site. Você pode habilitá-las em Administração do Site / Mensagens / Móvel.';
$string['notificationsnewdevices'] = 'Novos dispositivos';
$string['notificationsseemore'] = 'Nota: as estatísticas de uso do aplicativo Moodle não são calculadas em tempo real. Para acessar estatísticas mais detalhadas, incluindo dados de meses anteriores, faça o login no <a href="{$a}" target="_blank">Portal de Aplicativos Moodle</a>.';
$string['notificationssentnotifications'] = 'Notificações enviadas';
$string['oauth2identityproviders'] = 'Provedores de identidade OAuth 2';
$string['offlineuse'] = 'Uso offline';
$string['openusingembeddedbrowser'] = 'Abrir usando o navegador incorporado';
$string['pluginname'] = 'Ferramentas do Moodle App';
$string['pluginnotenabledorconfigured'] = 'Módulo não ativo ou não configurado.';
$string['privacy:metadata:core_userkey'] = 'As chaves do usuário usadas para criar a chave de login automático para o usuário atual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'A data da última solicitação de chave de login automático. Entre cada solicitação, são necessários 6 minutos.';
$string['qrcodedisabled'] = 'Acesso via QR code desabilitado';
$string['qrcodeformobileappaccess'] = 'QR code para acesso pelo app móvel';
$string['qrcodeformobileapploginabout'] = 'Escaneie o QR Code com seu app móvel e você será autenticado automaticamente. O QR code vai expirar em {$a}.';
$string['qrcodeformobileappurlabout'] = 'Escaneie o QR code com seu app móvel para preencher a URL do seu site no app.';
$string['qrcodetype'] = 'Acesso por QR code';
$string['qrcodetype_desc'] = 'Um QR code pode ser fornecido para usuários do app móvel escanearem. O QR code pode ser usado para preencher a URL do site, ou quando o site for seguro utilizando HTTPS, automaticamente fazer o login do usuário sem ter que digitar novamente o usuário e senha.';
$string['qrcodetypelogin'] = 'QR code com login automático';
$string['qrcodetypeurl'] = 'QR code com a URL do site';
$string['qrkeyttl'] = 'Duração da chave de autenticação do QR Code.';
$string['qrkeyttl_desc'] = 'Por quanto tempo um QR Code para login automático é válido.';
$string['qrsameipcheck_desc'] = 'Se os usuários devem usar a mesma rede para gerar e digitalizar um código QR para login. Desative-o apenas se os usuários relatarem problemas com o login QR.';
$string['qrsiteadminsnotallowed'] = 'Por razões de segurança o login por QR code não é permitido para administradores do site ou se você está acessando como outro usuário.';
$string['readingthisemailgettheapp'] = 'Lendo isso em um e-mail? <a href="{$a}">Baixe o aplicativo móvel e receba as notificações no seu dispositivo móvel</a>.';
$string['remoteaddons'] = 'Complementos remotos';
$string['responsivemainmenuitems'] = 'Itens de menu responsivo';
$string['scanqrcode'] = 'Escanear QR code';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que o certificado HTTPS é autoassinado ou não é confiável. O aplicativo móvel funcionará apenas com sites confiáveis. Use qualquer verificador SSL online para diagnosticar o problema. Se indicar que seu certificado está OK, você pode ignorar este aviso.';
$string['setuplink'] = 'Página de download do aplicativo';
$string['setuplink_desc'] = 'URL da página com links para baixar o aplicativo móvel da App Store e do Google Play. O link para a página de download do app é mostrada no rodapé da página e no perfil do usuário. Deixe em branco para não mostrar um link.';
$string['smartappbanners'] = 'App Banners';
$string['subscription'] = 'Assinatura';
$string['subscriptioncreated'] = 'Data de início';
$string['subscriptionerrorrequest'] = 'Houveu m erro inesperado quando tentando obter as informações da sua assinatura do Moodle app.';
$string['subscriptionexpiration'] = 'Data de expiração';
$string['subscriptionfeaturenotapplied'] = 'Essa funcionalidade está configurada no seu site mas não está incluída no plano do seu Moodle app. Dessa forma a configuração não terá efeito.';
$string['subscriptionfeatures'] = 'Funcionalidades da assinatura';
$string['subscriptionlimitsurpassed'] = 'Limite de assinatura excedido';
$string['subscriptionregister'] = 'Para detalhes sobre os vários planos do app e para acessar as estatísticas de uso do Moodle app, por favor, visite o <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['subscriptionsseemore'] = 'Atenção: A informação mostrada aqui não é atualizada em tempo real. Você deve sair e fazer o login novamente para ver as atualizações. Para informações sobre como fazer um upgrade no seu plano, por favor, faça o login no <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['switchaccount'] = 'Trocar conta';
$string['typeoflogin'] = 'Tipo de autenticação';
$string['typeoflogin_desc'] = 'Se o site usar um método de autenticação de SSO, selecione por meio de uma janela do navegador ou por meio de um navegador incorporado. Um navegador incorporado oferece uma melhor experiência ao usuário, embora não funcione com todos os plugins do SSO.';
$string['viewqrcode'] = 'Ver QR code';
