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
 * Strings for component 'media_videojs', language 'pt_br', version '4.1'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Classe CSS para áudio';
$string['audioextensions'] = 'Extensões de arquivos de áudio';
$string['configaudiocssclass'] = 'Uma classe CSS que será adicionada ao elemento <audio>.';
$string['configaudioextensions'] = 'Uma lista separada por vírgulas de extensões de arquivos de áudio compatíveis. O VideoJS tentará usar o player de vídeo nativo do navegador quando disponível ou a funcionalidade nativa do VideoJS.';
$string['configlimitsize'] = 'Se ativar esta opção, e a largura e altura não forem especificadas, o vídeo será exibido com a largura e a altura predefinidas. Caso contrário, irá esticar até à largura máxima possível.';
$string['configrtmp'] = 'Se habilitado, os links que começam com rtmp: // serão manipulados pelo plugin, independentemente da extensão estar habilitada na configuração de extensões de arquivo de vídeo (videoextensions). O fallback do Flash deve estar ativado para que o RTMP funcione.';
$string['configuseflash'] = 'Utilizar o Flash player se o formato de vídeo não for suportado nativamente pelo navegador e/ou nativamente pelo VideoJS player. Se habilitado, o VideoJS será ativado para qualquer extensão de arquivo da lista acima sem verificação do navegador. Observe que o Flash não está disponível em navegadores móveis e é desencorajado em muitos computadores.';
$string['configvideocssclass'] = 'Uma classe CSS que será adicionada ao elemento <video>. Por exemplo, a classe CSS "vjs-big-play-centered" irá colocar o botão de reprodução no meio. Para obter detalhes, incluindo como definir uma skin personalizada, consulte docs.videojs.com.';
$string['configvideoextensions'] = 'Uma lista separada por vírgulas de extensões de arquivo de vídeo compatíveis. O VideoJS tentará usar o player de vídeo nativo do navegador quando disponível.';
$string['configyoutube'] = 'Utilizar VideoJS para reproduzir vídeos do YouTube. Tenha cuidado que as listas de reprodução do YouTube ainda não são suportadas pelo VideoJS.';
$string['limitsize'] = 'Tamanho limite';
$string['pluginname'] = 'Player do VideoJS';
$string['pluginname_help'] = 'Um wrapper JavaScript para arquivos de vídeo reproduzidos pelo player de vídeo nativo do navegador. (O suporte ao formato depende do navegador.)';
$string['privacy:metadata'] = 'O plugin de mídia VideoJS player não armazena nenhum dado pessoal.';
$string['rtmp'] = 'RTMP streams';
$string['useflash'] = 'Usar Flash fallback';
$string['videocssclass'] = 'Classe CSS para vídeo';
$string['videoextensions'] = 'Extensões de arquivos de vídeo';
$string['youtube'] = 'Vídeos do YouTube';
