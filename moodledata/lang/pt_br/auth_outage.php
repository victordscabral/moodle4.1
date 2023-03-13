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
 * Strings for component 'auth_outage', language 'pt_br', version '4.1'.
 *
 * @package     auth_outage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Quando a lista de IPs permitidos estiver vazia, não bloquearemos ninguém. Você pode adicionar seu próprio endereço IP (<i>{$a->ip} </i>) e bloquear todos os outros IPs.';
$string['allowedipshasmyip'] = 'Seu IP (<i>{$a->ip}</i>) está na lista e você não será bloqueado durante uma interrupção';
$string['allowedipshasntmyip'] = 'Seu IP (<i> {$a->ip} </i>) não está na lista e você será bloqueado durante uma interrupção.';
$string['allowedipsnoconfig'] = 'Seu config.php não tem a configuração extra para permitir o bloqueio via IP. <br/> Consulte nosso <a href = "https://github.com/catalyst/moodle-auth_outage#installation" target = "_ blank" > Arquivo README.md </a> para mais informações.';
$string['auth_outagedescription'] = 'Plugin auxiliar que avisa os usuários sobre uma interrupção futura e os impede de efetuar login assim que a interrupção iniciar';
$string['autostart'] = 'Ativar automaticamente o modo de manutenção.';
$string['autostart_help'] = 'Se selecionado, quando a interrupção iniciar, ele ativará automaticamente o modo de manutenção do Moodle.';
$string['clicreatehelp'] = 'Cria uma nova interrupção.';
$string['clicreateparamautostart'] = 'deve ser S ou N, define se a interrupção dispara automaticamente o modo de manutenção.';
$string['clicreateparamblock'] = 'bloqueia até o início da interrupção.';
$string['clicreateparamclone'] = 'clonar outra interrupção, exceto para a hora de início.';
$string['clicreateparamdescription'] = 'a descrição da interrupção.';
$string['clicreateparamduration'] = 'quantos segundos a interrupção deve durar.';
$string['clicreateparamhelp'] = 'mostra os parâmetros de ajuda.';
$string['clicreateparamonlyid'] = 'mostra somente o novo id da interrupção, útil para scripts.';
$string['clicreateparamstart'] = 'em quantos segundos essa interrupção deve iniciar. Necessário.';
$string['clicreateparamtitle'] = 'o título da interrupção.';
$string['clicreateparamwarn'] = 'mostrar um aviso quantos segundos antes de começar.';
$string['clierrorinvalidvalue'] = 'Valor inválido para o parâmetro: {$a->param}';
$string['clierrormissingparamaters'] = 'Você deve definir a hora de início, use --help para mais informações.';
$string['clierroroutagechanged'] = 'A interrupção foi alterada durante a espera.';
$string['clierroroutageended'] = 'A interrupção terminou.';
$string['clierroroutagenotfound'] = 'Interrupção não encontrada.';
$string['clifinishhelp'] = 'Termina uma interrupção em andamento.';
$string['clifinishnotongoing'] = 'A interrupção não está em andamento.';
$string['clifinishparamactive'] = 'termina a interrupção atualmente ativa.';
$string['clifinishparamhelp'] = 'mostra os parâmetros da ajuda.';
$string['clifinishparamoutageid'] = 'o ID da interrupção para terminar.';
$string['cliinmaintenancemode'] = 'O modo de manutenção do Moodle está habilitado. Use "php admin/cli/maintenance.php --disable" para desabilitá-lo antes de terminar a interrupção.';
$string['clioutagecreated'] = 'Interrupção criada, id: {$a->id}';
$string['cliwaitforiterroridxoractive'] = 'Você deve usar o parâmetro --outageid=# ou --active, mas não ambos.';
$string['cliwaitforithelp'] = 'Espera até o início de uma interrupção';
$string['cliwaitforitoutagestarted'] = 'Interrupção iniciada!';
$string['cliwaitforitoutagestartingin'] = 'Interrupção iniciando em {$a->countdown}.';
$string['cliwaitforitparamactive'] = 'aguarde a interrupção atualmente ativa.';
$string['cliwaitforitparamhelp'] = 'mostra os parâmetros da ajuda.';
$string['cliwaitforitparamoutageid'] = 'a id da interrupção para esperar até que ela inicie.';
$string['cliwaitforitparamsleep'] = 'quantidade máxima de segundos antes da saída do status.';
$string['cliwaitforitparamverbose'] = 'habilite o modo detalhado.';
$string['clone'] = 'Clonar';
$string['configurationdisabled'] = 'O plugin de autenticação \'Interrupção\' está desabilitado. Por favor, habilite-o na administração do site e tente novamente.';
$string['configurationinaccessiblewwwroot'] = 'Não foi possível acessar <b> {$a->wwwroot} </b> do servidor, a criação de interrupções pode falhar.';
$string['configurationwarning'] = 'O plugin de interrupção não está configurado corretamente, consulte <a href="https://github.com/catalyst/moodle-auth_outage/blob/master/README.md#installation" target="_blank">README.md</a> para obter mais informações.';
$string['datetimeformat'] = '%a %d %h %Y em %I:%M%P %Z';
$string['defaultdescription'] = 'Descrição';
$string['defaultdescriptiondescription'] = 'Mensagem de aviso padrão para interrupções. Usar {{start}} e {{stop}} placeholders é necessário.';
$string['defaultdescriptionvalue'] = 'Há uma manutenção programada de {{start}} a {{stop}} e nosso sistema não estará disponível durante esse período.';
$string['defaultlayoutcss'] = 'Layout CSS';
$string['defaultlayoutcssdescription'] = 'Este código CSS pode ser usado para substituir o CSS da barra de aviso de interrupção.';
$string['defaultoutageautostart'] = 'Interrupção de inicio automático';
$string['defaultoutageautostartdescription'] = 'Se a interrupção deve iniciar automaticamente o modo de manutenção assim que iniciar, bloqueando todo o site.';
$string['defaultoutageduration'] = 'Duração da interrupção';
$string['defaultoutagedurationdescription'] = 'Duração padrão (em minutos) de uma interrupção.';
$string['defaulttitle'] = 'Título';
$string['defaulttitledescription'] = 'Título padrão para interrupções. Usar {{start}} e {{stop}} placeholders é necessário.';
$string['defaulttitlevalue'] = 'Sistema inativo de {{start}} por {{duration}}.';
$string['defaultwarningduration'] = 'Duração do aviso';
$string['defaultwarningdurationdescription'] = 'Tempo de aviso padrão (em minutos) para interrupções.';
$string['description'] = 'Descrição Pública';
$string['description_help'] = 'Uma descrição completa da interrupção, visível publicamente por todos os usuários.';
$string['finish'] = 'Terminar';
$string['info15secondsbefore'] = '15 segundos antes';
$string['infoendofoutage'] = 'fim da interrupção';
$string['infofrom'] = 'De:';
$string['infohidewarning'] = 'sem barra de aviso';
$string['infopagestaticgenerated'] = 'Este aviso foi gerado em {$a->time}.';
$string['infostart'] = 'iniciar';
$string['infostartofwarning'] = 'início do aviso';
$string['infostaticpage'] = 'página estática';
$string['infountil'] = 'Até:';
$string['menumanage'] = 'Gerenciar interrupções';
$string['menusettings'] = 'Configurações';
$string['messageoutagebackonline'] = 'Estamos online de volta!';
$string['messageoutagebackonlinedescription'] = 'Você pode retomar a navegação com segurança.';
$string['messageoutageongoing'] = 'Online novamente em {$a->stop}.';
$string['messageoutagewarning'] = 'Desligando em {{countdown}}';
$string['na'] = 'não se aplica';
$string['notfound'] = 'Nenhuma interrupção encontrada.';
$string['outageclone'] = 'Clonar interrupção';
$string['outageclonecrumb'] = 'Clonar';
$string['outagecreate'] = 'Criar interrupção';
$string['outagecreatecrumb'] = 'Criar';
$string['outagedelete'] = 'Excluir interrupção';
$string['outagedeletewarning'] = 'Você está prestes a excluir permanentemente a interrupção abaixo. Isto não pode ser desfeito.';
$string['outageduration'] = 'Duração da interrupção';
$string['outageduration_help'] = 'Quanto tempo dura a interrupção após o início.';
$string['outagedurationerrorinvalid'] = 'A duração da interrupção deve ser positiva.';
$string['outageedit'] = 'Editar interrupção';
$string['outageeditcrumb'] = 'Editar';
$string['outagefinish'] = 'Terminar a interrupção';
$string['outagefinishwarning'] = 'Você está prestes a marcar esta interrupção como concluída. O sistema estará imediatamente online novamente.';
$string['outageslistfuture'] = 'Interrupções planejadas';
$string['outageslistpast'] = 'Histórico de interrupção';
$string['pluginname'] = 'Gerenciador de interrupção';
$string['privacy:no_data_reason'] = 'O plugin de autenticação de interrupção não armazena nenhum dado pessoal.';
$string['removeselectors'] = 'Remover seletores';
$string['removeselectorsdescription'] = 'Seletores CSS a serem removidos ao renderizar uma página de manutenção com tema estático. Um seletor por linha.';
$string['settingssectiondefaults'] = 'Parâmetros de interrupção padrão';
$string['settingssectiondefaultsdescription'] = 'Configure os valores padrão usados para criar novas interrupções.';
$string['settingssectionplugin'] = 'Configuração do Plugin';
$string['settingssectionplugindescription'] = 'Configurações gerais do plugin de gerenciamento de interrupção.';
$string['starttime'] = 'Data e hora de início';
$string['starttime_help'] = 'Em que data e hora a interrupção começa, impedindo o acesso geral ao sistema.';
$string['tableheaderduration'] = 'Duração';
$string['tableheaderdurationactual'] = 'Duração real';
$string['tableheaderdurationplanned'] = 'Duração planejada';
$string['tableheaderstartedtime'] = 'Começou em';
$string['tableheaderstarttime'] = 'Começa em';
$string['tableheadertitle'] = 'Título';
$string['tableheaderwarnbefore'] = 'Avisa antes';
$string['tablestarttimefutureformat'] = '{$a->absolute} <br/> Em {$a->relative}';
$string['tablestarttimepastformat'] = '{$a->absolute} <br/> {$a->relative} atrás';
$string['taskupdatestaticpage'] = 'Atualizar página de interrupção estática';
$string['textplaceholdershint'] = 'Você pode usar {{start}}, {{stop}} e {{duration}} como marcadores de posição no título e na descrição.';
$string['title'] = 'Título';
$string['title_help'] = 'Um breve título para para esta interrupção. Ele será exibido na barra de aviso e no calendário.';
$string['titleerrorinvalid'] = 'O título não pode ser deixado em branco.';
$string['titleerrortoolong'] = 'O título não pode ter mais de {$a} caracteres.';
$string['warningduration'] = 'Duração do aviso';
$string['warningduration_help'] = 'Quanto tempo antes do início da interrupção o aviso deve ser exibido.';
$string['warningdurationerrorinvalid'] = 'A duração do aviso deve ser positiva.';
