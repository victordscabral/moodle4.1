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
 * Strings for component 'analytics', language 'pt_br', version '4.1'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analisador {$a->analysableid} não utilizado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analisador {$a->analysableid} não é valido para este destino: {$a->result}';
$string['analysisinprogress'] = 'Ainda sendo analisado por uma execução anterior';
$string['analytics'] = 'Análise de Aprendizagem';
$string['analyticsdisabled'] = 'A Análise de Aprendizagem está desabilitada. Você pode habilitá-la em "Administração do site > Recursos avançados".';
$string['analyticslogstore'] = 'Logs utilizados para Análise de Aprendizagem';
$string['analyticslogstore_help'] = 'O armazenamento de log que será utilizado pela API de Análise de Aprendizagem para ler a atividade do usuário';
$string['analyticssettings'] = 'Configurações da Análise de Aprendizagem';
$string['analyticssiteinfo'] = 'Informação do site';
$string['calclifetime'] = 'Manter cálculos analíticos para';
$string['configlcalclifetime'] = 'Isso especifica por quanto tempo você deseja manter os dados de cálculo - isso não excluirá as previsões, mas excluirá os dados usados para gerar as previsões. Usar a opção padrão aqui é melhor, pois mantém o uso do disco sob controle; no entanto, se você estiver usando tabelas de cálculo para outros fins, poderá aumentar esse valor.';
$string['defaultpredictionsprocessor'] = 'Processador de previsão padrão';
$string['defaultpredictoroption'] = 'Processador padrão ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervalos de análise padrão para avaliação do modelo';
$string['defaulttimesplittingmethods_help'] = 'O intervalo de análise define quando o sistema calculará as previsões e a parte dos logs de atividades que serão consideradas para essas previsões. O processo de avaliação modelo irá percorrer esses intervalos de análise, a menos que um intervalo de análise específico seja definido.';
$string['disabledmodel'] = 'Modelo desabilitado';
$string['erroralreadypredict'] = 'O arquivo {$a} já foi utilizado para gerar previsões.';
$string['errorcannotreaddataset'] = 'Arquivo de Dataset {$a} não pode ser lido';
$string['errorcannotusetimesplitting'] = 'O intervalo de análise fornecido não pode ser usado neste modelo.';
$string['errorcannotwritedataset'] = 'Arquivo de Dataset {$a} não pode ser escrito';
$string['errorexportmodelresult'] = 'O modelo de aprendizado de máquina não pode ser exportado.';
$string['errorimport'] = 'Erro ao importar o arquivo JSON fornecido.';
$string['errorimportmissingclasses'] = 'Os seguintes componentes de análise não estão disponíveis neste site: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'O modelo fornecido requer a instalação dos seguintes plugins: {$a}. Observe que as versões não precisam necessariamente corresponder às versões instaladas no seu site. Instalar a mesma versão ou uma versão mais recente do plugin deve funcionar bem na maioria dos casos.';
$string['errorimportversionmismatches'] = 'A versão dos seguintes componentes difere da versão instalada neste site: {$a}. Você pode usar a opção \'Ignorar incompatibilidades de versão\' para ignorar essas diferenças.';
$string['errorinvalidcontexts'] = 'Alguns dos contextos selecionados não podem ser utilizados neste objetivo.';
$string['errorinvalidindicator'] = 'Indicador {$a} inválido';
$string['errorinvalidtarget'] = 'Objetivo {$a} inválido';
$string['errorinvalidtimesplitting'] = 'Intervalo de análise inválido; por favor, assegure-se de ter adicionado totalmente o nome da classe qualificada';
$string['errornocontextrestrictions'] = 'O alvo selecionado não suporta restrições de contexto';
$string['errornoexportconfig'] = 'Houve um problema ao exportar a configuração do modelo.';
$string['errornoexportconfigrequirements'] = 'Somente modelos não estáticos com um intervalo de análise podem ser exportados.';
$string['errornoindicators'] = 'Este modelo não possui indicadores.';
$string['errornopredictresults'] = 'Nenhum resultado retornado do processador de previsões. Verifique o conteúdo do diretório de saída para mais informações.';
$string['errornoroles'] = 'Papéis de estudante ou professor não foram definidos. Defina-os na página de configurações do analytics.';
$string['errornotarget'] = 'Este modelo não possui nenhum alvo.';
$string['errornotimesplittings'] = 'Este modelo não tem um intervalo de análise.';
$string['errorpredictioncontextnotavailable'] = 'Esse contexto de previsão não está mais disponível.';
$string['errorpredictionformat'] = 'Formato de cálculos de previsão incorreto';
$string['errorpredictionnotfound'] = 'Previsão não encontrada';
$string['errorpredictionsprocessor'] = 'Erro no processador de previsões: {$a}';
$string['errorpredictwrongformat'] = 'O retorno do processador de previsões não pode ser decodificado: "{$a}"';
$string['errorprocessornotready'] = 'O processador de previões selecionado não está pronto: "{$a}"';
$string['errorsamplenotavailable'] = 'O modelo previsto não está mais disponível';
$string['errorunexistingmodel'] = 'Modelo não existente {$a}';
$string['errorunexistingtimesplitting'] = 'O intervalo de análise selecionado não está disponível.';
$string['errorunknownaction'] = 'Ação desconhecida';
$string['eventinsightsviewed'] = 'Insights vistos';
$string['eventpredictionactionstarted'] = 'Processo de previsão iniciado';
$string['fixedack'] = 'Aceitar';
$string['incorrectlyflagged'] = 'Sinalizado incorretamente';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'O sistema gerou um insight para você.';
$string['insightinfomessageplain'] = 'O sistema gerou um insight para você: {$a}';
$string['insightmessagesubject'] = 'Novo insight para "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Não pode ser analisado usando o intervalo de análise {$a}.';
$string['invalidtimesplitting'] = 'O modelo com ID {$a} precisa de um intervalo de análise antes de ser utilizado para treinamento.';
$string['levelinstitution'] = 'Nível de educação';
$string['levelinstitutionisced0'] = 'Educação infantil ("menor que o primário" para obtenção de escolaridade)';
$string['levelinstitutionisced1'] = 'Educação primária';
$string['levelinstitutionisced2'] = 'Ensino básico';
$string['levelinstitutionisced3'] = 'Ensino médio';
$string['levelinstitutionisced4'] = 'Ensino técnico não superior (pode incluir treinamento corporativo ou comunitário/ONG)';
$string['levelinstitutionisced5'] = 'Ensino superior de ciclo curto (pode incluir treinamento corporativo ou comunitário/ONG)';
$string['levelinstitutionisced6'] = 'Bacharel ou nível equivalente';
$string['levelinstitutionisced7'] = 'Mestre ou nível equivalente';
$string['levelinstitutionisced8'] = 'Doutor ou nível equivalente';
$string['modeinstruction'] = 'Modos de instrução';
$string['modeinstructionblendedhybrid'] = 'Misturado ou híbrido';
$string['modeinstructionfacetoface'] = 'Presencial';
$string['modeinstructionfullyonline'] = 'Totalmente online';
$string['modeloutputdir'] = 'Diretório de saída dos modelos';
$string['modeloutputdirinfo'] = 'Diretório onde os processadores de previsão armazenam todas as informações de avaliação. Útil para depuração e pesquisa.';
$string['modeloutputdirwithdefaultinfo'] = 'Diretório onde os processadores de previsão armazenam todas as informações de avaliação. Útil para depuração e pesquisa. Se vazio, então \'<strong>{$a}</strong>\' será usado como padrão.';
$string['modeltimelimit'] = 'Limite de tempo de análise por modelo';
$string['modeltimelimitinfo'] = 'Esta configuração limita o tempo que cada modelo gasta analisando o conteúdo do site.';
$string['neutral'] = 'Neutro';
$string['neverdelete'] = 'Nunca excluir cálculos';
$string['nocourses'] = 'Sem cursos para analisar';
$string['nodata'] = 'Sem dados para analisar';
$string['noevaluationbasedassumptions'] = 'Modelos baseados em premissas não podem ser avaliados.';
$string['noinsights'] = 'Sem insights reportados';
$string['noinsightsmodel'] = 'Este modelo não gera insights';
$string['nonewdata'] = 'Nenhum novo dado disponível. O modelo será analisado após o próximo intervalo de análise.';
$string['nonewranges'] = 'Nenhuma nova previsão ainda. O modelo será analisado após o próximo intervalo de análise.';
$string['nopredictionsyet'] = 'Nenhuma previsão disponível ainda';
$string['noranges'] = 'Nenhuma previsão ainda';
$string['notapplicable'] = 'Não aplicável';
$string['notrainingbasedassumptions'] = 'Modelos baseados em premissas não precisam de treinamento';
$string['notuseful'] = 'Inútil';
$string['novaliddata'] = 'Não há dados válidos disponíveis';
$string['novalidsamples'] = 'Nenhum exemplo válido disponível';
$string['onlycli'] = 'Execução dos processos do analytics somente por linha de comando';
$string['onlycliinfo'] = 'Processos analíticos, como modelos de avaliação, treinamento de algoritmos de aprendizado de máquina ou obtenção de previsões podem levar algum tempo. Eles são executados como tarefas cron ou podem ser forçados via linha de comando. Se desabilitada, esses processos analíticos podem ser executados manualmente pela interface web.';
$string['percentonline'] = 'Porcentagem online';
$string['percentonline_help'] = 'Se sua organização oferece cursos híbridos ou de aprendizagem combinada, que porcentagem do trabalho do estudante é realizada on-line no Moodle? Digite um número entre 0 e 100.';
$string['predictionsprocessor'] = 'Processador de previsões';
$string['predictionsprocessor_help'] = 'Um processador de previsões é a aprendizagem de máquina no servidor que processa os conjuntos de dados gerados calculando indicadores e metas dos modelos. Cada modelo pode usar um processador diferente. O especificado aqui será o padrão.
Obs: Todos os algoritmos e previsões treinados serão excluídos se você mudar para outro processador de previsões.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Modelos de análise';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'O usuário que modificou o modelo';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'O log usado para modelos de análise';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'O usuário que modificou o log';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Cálculos de indicadores';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'O contexto';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Cálculo e tempo';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'A classe da calculadora do indicador';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'O ID da amostra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'A tabela de origem da amostra';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Hora de início do cálculo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Quando a previsão foi feita';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'O valor calculado';
$string['privacy:metadata:analytics:predictionactions'] = 'Ações de previsão';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'O nome da ação';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'O ID de previsão';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Quando a ação de previsão foi executada';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'O usuário que fez a ação';
$string['privacy:metadata:analytics:predictions'] = 'Previsões';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos de indicador';
$string['privacy:metadata:analytics:predictions:contextid'] = 'O contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID do modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'A previsão';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'A pontuação de previsão';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'O índice do intervalo de análise';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'O ID da amostra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quando a previsão foi feita';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Término do cálculo';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Início do cálculo';
$string['processingsitecontents'] = 'Processando o conteúdo do site';
$string['successfullyanalysed'] = 'Analisado com sucesso';
$string['timesplittingmethod'] = 'Intervalo de análise';
$string['timesplittingmethod_help'] = 'O intervalo de análise define quando o sistema calculará previsões e a parte dos logs de atividades que serão considerados para essas previsões. Por exemplo, a duração do curso pode ser dividida em partes, com uma previsão gerada no final de cada parte.
Recomenda-se que você habilite apenas os métodos de divisão de tempo que você está interessado em utilizar, pois quanto mais métodos estiverem habilitados, mais lento será o processo de avaliação.';
$string['typeinstitution'] = 'Tipo de Instituição';
$string['typeinstitutionacademic'] = 'Acadêmico';
$string['typeinstitutionngo'] = 'Organização Não Governamental  (ONG)';
$string['typeinstitutiontraining'] = 'Treinamento Corporativo';
$string['useful'] = 'Útil';
$string['viewdetails'] = 'Ver detalhes';
$string['viewinsight'] = 'Ver insight';
$string['viewinsightdetails'] = 'Ver detalhes de insight';
$string['viewprediction'] = 'Ver detalhes da previsão';
$string['washelpful'] = 'Isto foi útil?';
