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
 * Strings for component 'qtype_ddmarker', language 'pt_br', version '4.1'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Espaços em branco para mais {no} marcadores';
$string['alttext'] = 'Texto alternativo';
$string['answer'] = 'Resposta';
$string['bgimage'] = 'Imagem de fundo';
$string['clearwrongparts'] = 'Mova os marcadores colocados incorretamente de volta para a posição padrão inicial abaixo da imagem';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['draggableimage'] = 'Imagem arrastável';
$string['draggableitem'] = 'Item arrastável';
$string['draggableitemheader'] = 'Item arrastável {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastável';
$string['dropbackground'] = 'Imagem de fundo com local para onde arrastar os marcadores';
$string['dropzone'] = 'Área de arrastar e soltar {$a}';
$string['dropzoneheader'] = 'Áreas de arrastar e soltar';
$string['dropzones'] = 'Áreas de arrastar e soltar';
$string['dropzones_help'] = 'Regiões alvo são definidas por coordenadas digitadas ou arrastadas para a posição na visualização acima.

Selecionar primeiro uma forma (círculo, retângulo ou polígono) adicionará uma nova forma de região alvo no canto superior esquerdo da visualização. Pode ser útil minimizar a seção Marcadores para que você possa ver a visualização enquanto edita as Regiões alvo.

Para editar de uma forma clique na forma na visualização para ver os pontos de edição. Você pode mover a forma usando o ponto central ou ajustar as dimensões da forma com os pontos do vértice.

Apenas para polígonos, segurar o botão control (botão command no Mac) enquanto clica em um ponto de vértice adicionará um novo vértice ao polígono. Por favor, mantenha a forma poligonal o mais simples possível, sem cruzar linhas.

Para informação, as três formas usam coordenadas desta forma:

* Círculo: center_x, center_y; raio por exemplo: <code>80, 100; 50</code>
* Retângulo: top_left_x, top_left_y; largura, altura, por exemplo: <code>20, 60; 80, 40</code>
* Polígono: x1, y1; x2, y2; ...; xn, yn por exemplo: <code>20, 60; 100, 60; 20, 100</code>

Selecionar um texto de marcador adicionará esse texto à forma na visualização.';
$string['followingarewrong'] = 'Os seguintes marcadores foram colocados na área errada: {$a}.';
$string['followingarewrongandhighlighted'] = 'Os seguintes marcadores foram incorretamente colocados: {$a} . Marcador(es) realçado(s) (é)são agora mostrado(s) com a colocação correta(s) . <br /> Clique no marcador para destacar a área permitida.';
$string['formerror_nobgimage'] = 'Você precisa selecionar uma imagem para usar como plano de fundo para a área de arrastar e soltar.';
$string['formerror_noitemselected'] = 'Você especificou uma área para soltar, mas não escolheu um marcador que deve ser arrastado para essa área.';
$string['formerror_nosemicolons'] = 'Não há ponto e vírgula em sua seqüência de coordenadas. Suas coordenadas para a {$a->shape} deve ser expressa como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Apenas "{$a}" tags são permitidas no rótulo para um marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Por favor, use apenas números inteiros positivos para especificar coordenadas x, y e / ou largura e altura de formas. Suas coordenadas para a {$a->shape} deve ser expressa como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para uma forma poligonal você precisa especificar pelo menos 3 pontos. Suas coordenadas para a {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Você digitou as mesmas coordenadas duas vezes. Cada ponto deve ser exclusivo. Suas coordenadas para a {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'A forma que você definiu sai dos limites da imagem de fundo.';
$string['formerror_toomanysemicolons'] = 'Há também muitas partes separadas por ponto e vírgula para as coordenadas especificadas. Suas coordenadas para a {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'A largura e altura que você especificou são inválidas. Para um {$a->shape} as coordenada devem ser indicadas como - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'As coordenadas x, y que você especificou são inválidas. Para um {$a->shape} as coordenada devem ser indicadas como - {$a->coordsstring}.';
$string['infinite'] = 'Infinito';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'Sem texto para etiqueta';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'Sua resposta não está completa, você deve colocar ao menos um marcador na imagem.';
$string['pluginname'] = 'Arrastar e soltar nos marcadores';
$string['pluginname_help'] = 'Arrastar e soltar nos marcadores requer que o estudante arraste um rótulo de texto para dentro da região alvo na imagem de fundo.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Adicionando arrastar e soltar nos marcadores';
$string['pluginnameediting'] = 'Editando arrastar e soltar nos marcadores';
$string['pluginnamesummary'] = 'Marcadores são arrastados e soltos em cima de uma imagem de fundo.

Observação: esse tipo de questão não é acessível a usuários com deficiência visual.';
$string['previewareaheader'] = 'Pré-visualizar';
$string['previewareamessage'] = 'Selecione um arquivo de imagem de fundo, insira rótulos de texto para os marcadores e defina as regiões alvo na imagem de fundo para a qual eles devem ser arrastados.';
$string['privacy:metadata'] = 'O plugin de tipo de questão Arrastar e soltar marcadores permite que os autores das questões definam opções padrão como preferências do usuário.';
$string['privacy:preference:defaultmark'] = 'A marca padrão definida para uma determinada questão.';
$string['privacy:preference:penalty'] = 'A penalidade para cada tentativa incorreta quando as questões são executadas usando o comportamento \'Interativo com múltiplas tentativas\' ou \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Se as respostas devem ser embaralhadas automaticamente.';
$string['refresh'] = 'Atualizar pré-visualização';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Circular';
$string['shape_circle_coords'] = 'x,y;r (onde x,y são as coordenadas do centro do circulo e r o raio)';
$string['shape_circle_lowercase'] = 'circulo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (onde x1 e y1 são as coordenadas do primeiro vértice, x2 e y2 são a coordenada do segundo e assim por adiante. Não há necessidade de repetir as coordenadas para o primeiro vértice para fechar o polígono.)';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Retângulo';
$string['shape_rectangle_coords'] = 'x,y;w,h (onde x e y são as coordenadas do canto superior esquerdo do retângulo e w e h são a largura e altura do retângulo)';
$string['shape_rectangle_lowercase'] = 'retângulo';
$string['showmisplaced'] = 'Destacar regiões alvo que não tiveram o marcador correto informado';
$string['shuffleimages'] = 'Embaralhar os itens de arrastar da questão toda vez que for realizada uma tentativa';
$string['stateincorrectlyplaced'] = 'Indique quais marcadores estão colocados incorretamente';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Região alvo  {$a}';
$string['ytop'] = 'Topo';
