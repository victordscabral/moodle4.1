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
 * Strings for component 'tool_analytics', language 'pt_br', version '4.1'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisão';
$string['actionexecutedgroupedusefulness'] = 'Ações agrupadas';
$string['actions'] = 'Ações';
$string['actionsexecutedbyusers'] = 'Ações executadas pelos usuários';
$string['actionsexecutedbyusersfor'] = 'Ações executadas pelos usuários para o modelo "{$a}"';
$string['allpredictions'] = 'Todas previsões';
$string['alltimesplittingmethods'] = 'Todos os intervalos de análise';
$string['analysingsitedata'] = 'Analisando o site';
$string['analysis'] = 'Análise';
$string['analyticmodels'] = 'Modelos de análise';
$string['bettercli'] = 'Avaliar modelos e gerar previsões pode envolver processamento pesado. Recomenda-se executar estas ações a partir da linha de comando.';
$string['cantguessenddate'] = 'Não é possível adivinhar a data final';
$string['cantguessstartdate'] = 'Não é possível adivinhar a data de início';
$string['classdoesnotexist'] = 'A classe {$a} não existe';
$string['clearmodelpredictions'] = 'Tem certeza de que deseja limpar todas as previsões "{$a}"?';
$string['clearpredictions'] = 'Limpar previsões';
$string['clienablemodel'] = 'Você pode habilitar o modelo selecionando um intervalo de análise pelo seu ID. Note que você podem também habilitá-lo usando a interface web (\'nenhum\' para sair).';
$string['clievaluationandpredictions'] = 'Uma tarefa agendada itera através de modelos ativados e obtém previsões. A avaliação de modelos por meio da interface da Web está desativada. Você pode permitir que esses processos sejam executados manualmente por meio da interface da Web, desativando a configuração de análise <a href="{$a}"> \'onlycli\' </a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Uma tarefa agendada itera através de modelos ativados e obtém previsões. A avaliação de modelos por meio da interface da Web está desativada. Pode ser ativado por um administrador do site.';
$string['component'] = 'Componente';
$string['componentcore'] = 'Núcleo';
$string['componentselect'] = 'Selecione todos os modelos fornecidos pelo componente \'{$a}\'';
$string['componentselectnone'] = 'Desmarcar tudo';
$string['contexts'] = 'Contextos';
$string['contexts_help'] = 'O modelo será limitado a esse conjunto de contextos. Nenhuma restrição de contexto será aplicada se nenhum contexto for selecionado.';
$string['createmodel'] = 'Criar modelo';
$string['currenttimesplitting'] = 'Intervalo de análise atual';
$string['delete'] = 'Excluir';
$string['deletemodelconfirmation'] = 'Tem certeza de que deseja excluir "{$a}"? Essas alterações não podem ser desfeitas.';
$string['disabled'] = 'Desativado';
$string['editmodel'] = 'Edita o modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo já foi treinado. Note que alterar seus indicadores ou seu intervalo de análise irá excluir suas previsões anteriores e começar a gerar novas previsões.';
$string['enabled'] = 'Habilitado';
$string['errorcantenablenotimesplitting'] = 'Você precisa selecionar um intervalo de análise antes de habilitar o modelo.';
$string['errornoenabledandtrainedmodels'] = 'Não há modelos habilitados e treinados para prever.';
$string['errornoenabledmodels'] = 'Não há modelos habilitados para treinar.';
$string['errornoexport'] = 'Somente modelos treinados podem ser exportados';
$string['errornostaticevaluated'] = 'Modelos baseados em suposições não podem ser avaliados. Eles estão sempre 100% corretos de acordo com a forma como foram definidos.';
$string['errornostaticlog'] = 'Modelos baseados em suposições não podem ser avaliados porque não há log de desempenho.';
$string['erroronlycli'] = 'Execução permitida somente via linha de comando';
$string['errortrainingdataexport'] = 'Os dados de treinamento do modelo não puderam ser exportados';
$string['evaluate'] = 'Avaliar';
$string['evaluatemodel'] = 'Avaliar modelo';
$string['evaluationinbatches'] = 'O conteúdo do site é calculado e armazenado em lotes. O processo de avaliação pode ser interrompido a qualquer momento. Na próxima vez que for executado, ele continuará a partir do ponto em que foi interrompido.';
$string['evaluationmode'] = 'Modo de avaliação';
$string['evaluationmode_help'] = 'Existem dois modos de avaliação:

* Modelo simulado - os dados do site são usados como dados de teste para avaliar a precisão do modelo simulado.
* Configuração - os dados do site são divididos em dados de simulação e teste, para simular e testar a precisão da configuração do modelo.

O modelo simulado só estará disponível se um modelo simulado tiver sido importado para o site e ainda não tiver sido simulado novamente usando os dados do site.';
$string['evaluationmodecolconfiguration'] = 'Configuração';
$string['evaluationmodecoltrainedmodel'] = 'Modelo treinado';
$string['evaluationmodeconfiguration'] = 'Avalie a configuração do modelo';
$string['evaluationmodeinfo'] = 'Este modelo foi importado para o site. Você pode avaliar o desempenho do modelo ou pode avaliar o desempenho da configuração do modelo usando dados do site.';
$string['evaluationmodetrainedmodel'] = 'Avalie o modelo treinado';
$string['executescheduledanalysis'] = 'Executar análise agendada';
$string['export'] = 'Exportar';
$string['exportincludeweights'] = 'Inclui os pesos do modelo treinado';
$string['exportmodel'] = 'Exportar configuração';
$string['exporttrainingdata'] = 'Exportar dados de treinamento';
$string['extrainfo'] = 'Informações';
$string['generalerror'] = 'Erro de avaliação. Código de status {$a}';
$string['goodmodel'] = 'Este é um bom modelo para usar para obter previsões. Ativá-lo para começar a obter previsões.';
$string['ignoreversionmismatches'] = 'Ignorar incompatibilidades de versão';
$string['ignoreversionmismatchescheckbox'] = 'Ignore as diferenças entre esta versão e a versão do site original.';
$string['importedsuccessfully'] = 'O modelo foi importado com sucesso';
$string['importmodel'] = 'Importar modelo';
$string['indicators'] = 'Indicadores';
$string['indicators_help'] = 'Os indicadores são o que você acredita que levará a uma previsão precisa do alvo.';
$string['indicatorsnum'] = 'Número de indicadores: {$a}';
$string['info'] = 'Informações';
$string['insights'] = 'Insights';
$string['insightsreport'] = 'Relatório de Insights';
$string['invalidanalysables'] = 'Elementos de site inválidos';
$string['invalidanalysablesinfo'] = 'Esta página lista este site analisável elementos que não podem ser utilizados por este modelo de previsão. Os elementos listados não podem ser usados nem para treinar o modelo de previsão, nem o modelo de previsão pode obter previsões para eles.';
$string['invalidanalysablestable'] = 'Tabela de elementos analisáveis do site inválida';
$string['invalidcurrenttimesplitting'] = 'O intervalo de análise atual é inválido para o destino deste modelo. Selecione um intervalo diferente.';
$string['invalidindicatorsremoved'] = 'Um novo modelo foi adicionado. Indicadores que não funcionam com o objetivo selecionado foram removidos automaticamente.';
$string['invalidprediction'] = 'Inválido para receber previsões';
$string['invalidtimesplitting'] = 'O intervalo de análise selecionado é inválido para o alvo selecionado.';
$string['invalidtimesplittinginmodels'] = 'O intervalo de análise usado por alguns dos modelos é inválido. Selecione um intervalo diferente para os seguintes modelos: {$a}';
$string['invalidtraining'] = 'Inválido para treinar o modelo';
$string['loginfo'] = 'Registrar informação extra';
$string['missingmoodleversion'] = 'Arquivo importado não define um número de versão';
$string['modelid'] = 'ID do modelo';
$string['modelinvalidanalysables'] = 'Elementos analisáveis inválidos para o modelo "{$a}"';
$string['modelname'] = 'Nome do modelo';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'Intervalo de análise';
$string['newmodel'] = 'Novo modelo';
$string['nextpage'] = 'Próxima página';
$string['noactionsfound'] = 'Os usuários não executaram nenhuma ação nos insights gerados.';
$string['nodatatoevaluate'] = 'Não há dados para avaliar o modelo';
$string['nodatatopredict'] = 'Nenhum novo elemento para o qual obter previsões.';
$string['nodatatotrain'] = 'Não há novos dados que possam ser usados para treinamento.';
$string['noinvalidanalysables'] = 'Este site não contém nenhum elemento analisável inválido.';
$string['notdefined'] = 'Ainda não definido';
$string['pluginname'] = 'Modelos analíticos';
$string['predictionprocessfinished'] = 'Processo de previsão finalizado';
$string['predictionresults'] = 'Resultados da previsão';
$string['predictmodels'] = 'Prever modelos';
$string['predictorresultsin'] = 'Informações registradas pelo preditor no diretório {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata'] = 'O plugin de modelos analíticos não armazena nenhum dado pessoal.';
$string['restoredefault'] = 'Restaurar os modelos padrão';
$string['restoredefaultempty'] = 'Selecione os modelos a serem restaurados.';
$string['restoredefaultinfo'] = 'Esses modelos padrão estão ausentes ou foram alterados desde a instalação. Você pode restaurar os modelos padrão selecionados.';
$string['restoredefaultnone'] = 'Todos os modelos padrão fornecidos pelo núcleo e plugins instalados foram criados. Nenhum novo modelo foi encontrado; não há nada para restaurar.';
$string['restoredefaultsome'] = 'Novo modelo(s) {$a->count} recriado com sucesso.';
$string['restoredefaultsubmit'] = 'Restaurar selecionado';
$string['sameenddate'] = 'A data final atual está ok';
$string['samestartdate'] = 'A data inicial atual está ok';
$string['scheduledanalysisresults'] = 'Resultados usando {$a->name} divisão do tempo do curso';
$string['scheduledanalysisresultscli'] = 'Resultados usando {$a->name} (id: {$a->id}) duração do curso dividido';
$string['selecttimesplittingforevaluation'] = 'Selecione o intervalo de análise que deseja usar para avaliar a configuração do modelo.';
$string['target'] = 'Meta';
$string['target_help'] = 'O alvo é o que o modelo irá prever.';
$string['timesplittingnotdefined'] = 'Intervalo de análise não definido.';
$string['timesplittingnotdefined_help'] = 'Você precisa selecionar um intervalo de análise antes de habilitar o modelo.';
$string['trainandpredictmodel'] = 'Modelo de treinamento e cálculo de previsões';
$string['trainingprocessfinished'] = 'Processo de treinamento concluído';
$string['trainingresults'] = 'Resultados de treinamento';
$string['trainmodels'] = 'Treinar modelos';
$string['versionnotsame'] = 'O arquivo importado era de uma versão ({$a->importedversion}), diferente da versão atual ({$a->version})';
$string['viewlog'] = 'Log das avaliações';
$string['weeksenddateautomaticallyset'] = 'Data de término definida automaticamente com base na data de início e no número de seções';
$string['weeksenddatedefault'] = 'Data de término calculada automaticamente a partir da data de início do curso.';
