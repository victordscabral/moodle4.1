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
 * Strings for component 'adaptivequiz', language 'pt_br', version '4.1'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Capacidade estimada';
$string['abilityestimated_help'] = 'A capacidade estimada de um estudante se alinha com a dificuldade da questão na qual o estudante tem 50% de probabilidade de responder corretamente à questão. Para identificar o nível de desempenho, combine o valor da capacidade com o intervalo do nível das questões (veja o intervalo após o símbolo \'/\').';
$string['activityreports'] = 'Relatório de tentativas';
$string['adaptivequiz:addinstance'] = 'Adicionar um novo questionário adaptativo';
$string['adaptivequiz:attempt'] = 'Questionário com tentativa adaptativa';
$string['adaptivequiz:reviewattempts'] = 'Reveja submissões do questionário adaptativo';
$string['adaptivequiz:viewreport'] = 'Ver relatórios do questionário adaptativo';
$string['adaptivequizname'] = 'Nome';
$string['adaptivequizname_help'] = 'Digite o nome da instância do Questionário Adaptativo';
$string['all_attempts_deleted'] = 'Todas as tentativas do questionário adaptativo foram excluídas';
$string['all_grades_removed'] = 'Todas as notas do questionário adaptativo foram removidas';
$string['answer'] = 'Responder';
$string['answerdistgraph_numrightwrong'] = 'Num errado (-) / Num certo (+)';
$string['answerdistgraph_questiondifficulty'] = 'Nível da questão';
$string['answerdistgraph_right'] = 'Correto';
$string['answerdistgraph_title'] = 'Distribuição de respostas por {$a->firstname} {$a->lastname}';
$string['answerdistgraph_wrong'] = 'Errado';
$string['answers_display_name'] = 'Respostas';
$string['attempt_questiondetails'] = 'Detalhes da questão';
$string['attempt_state'] = 'Estado da tentativa';
$string['attempt_summary'] = 'Resumo da tentativa';
$string['attempt_user'] = 'Usuário';
$string['attemptclosed'] = 'A tentativa foi fechada manualmente.';
$string['attemptclosedstatus'] = 'Fechada manualmente por {$a->current_user_name} (user-id: {$a->current_user_id}) em {$a->now}.';
$string['attemptdeleted'] = 'Tentativa excluída por {$a->name} submetida em {$a->timecompleted}';
$string['attemptfeedback'] = 'Feedback da tentativa';
$string['attemptfeedback_help'] = 'O feedback da tentativa é exibido ao usuário quando a tentativa for concluída';
$string['attemptfeedbackdefaulttext'] = 'Você finalizou a tentativa, obrigado por responder o questionário!';
$string['attemptfinishedtimestamp'] = 'Hora de término da tentativa';
$string['attemptfirst'] = 'Primeira tentativa';
$string['attemptlast'] = 'Última tentativa';
$string['attemptnofirstquestion'] = 'Desculpe, mas não foi possível definir a primeira questão para iniciar a tentativa, o questionário possivelmente está mal configurado.';
$string['attemptquestion_ability'] = 'Medida de habilidade';
$string['attemptquestion_abilitylogits'] = 'Habilidade medida (logística)';
$string['attemptquestion_difficulty'] = 'Dificuldade da questão (logística)';
$string['attemptquestion_diffsum'] = 'Somatório da dificuldade';
$string['attemptquestion_error'] = 'Erro Padrão (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Nível da questão';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Certo/Errado';
$string['attemptquestion_stderr'] = 'Erro padrão (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Tentativas permitidas';
$string['attemptsallowed_help'] = 'O número de vezes que um estudante pode responder esta atividade';
$string['attemptstarttime'] = 'Hora de início da tentativa';
$string['attemptstate'] = 'Estado da tentativa';
$string['attemptstopcriteria'] = 'Motivo para parar tentativa';
$string['attemptsusernoprevious'] = 'Você ainda não realizou este teste.';
$string['attemptsuserprevious'] = 'Suas tentativas anteriores';
$string['attempttotaltime'] = 'Tempo total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Voltar a todas as questões';
$string['bestscore'] = 'Melhor Pontuação';
$string['bestscorestderror'] = 'Erro Padrão';
$string['browsersecurity'] = 'Segurança do navegador';
$string['browsersecurity_help'] = 'Se "Pop-up em tela cheia com alguma segurança de JavaScript" for selecionado, o questionário só será iniciado se o estudante tiver um navegador da web habilitado para JavaScript, o questionário aparece em uma janela popup em tela cheia que cobre todas as outras janelas e não tem navegação controles e os estudantes são impedidos, na medida do possível, de usar recursos como copiar e colar';
$string['calcerrorwithinlimits'] = 'O calculo de erro padrão de ($a->calerror) está dentro dos limites impostos pela atividade ($a->definederror)';
$string['closeattempt'] = 'Fechar tentativa';
$string['confirmcloseattempt'] = 'Tem certeza que você deseja fechar e finalizar essa tentativa de {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} perguntas foram respondidas e a pontuação até agora é {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Esta tentativa foi iniciado em {$a->started} e última atualização em {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando a exclusão da tentativa de ($a->name) submetida em ($a->timecompleted)';
$string['deleteattemp'] = 'Excluir Tentativa';
$string['discrimination_display_name'] = 'Discriminação';
$string['downloadcsv'] = 'Baixar CSV';
$string['enterrequiredpassword'] = 'Digite a senha necessária';
$string['errorattemptstate'] = 'Ocorreu um erro ao determinar o estado da tentativa';
$string['errorclosingattempt_alreadycomplete'] = 'Esta tentativa foi concluída, ela não pode ser fechada manualmente.';
$string['errorfetchingquest'] = 'Não foi possível buscar uma questão para o nível {$a->level}';
$string['errorlastattpquest'] = 'Erro ao verificar o valor da resposta para a última tentativa da questão';
$string['errornumattpzero'] = 'Erro com o número de questões tentadas igual a zero, mas o usuário enviou uma resposta à questão anterior';
$string['errorsumrightwrong'] = 'O somatório das respostas corretas e incorretas não é igual ao número total de tentativas das questões';
$string['formelementdecimal'] = 'Insira um número decimal. Comprimento máximo de 10 dígitos e máximo de 5 dígitos à direita do ponto decimal';
$string['formelementempty'] = 'Introduza um número inteiro positivo de 1 a 999';
$string['formelementnegative'] = 'Introduza um número inteiro positivo de 1 a 999';
$string['formelementnumeric'] = 'Introduza um número inteiro positivo de 1 a 999';
$string['formlowlevelgreaterthan'] = 'O nível mais baixo deve ser menor do que o nível mais alto';
$string['formminquestgreaterthan'] = 'Número mínimo de perguntas deve ser menor do que o número máximo de perguntas';
$string['formquestionpool'] = 'Selecione pelo menos uma categoria questão';
$string['formstartleveloutofbounds'] = 'O nível inicial deve ser um número que está entre o mais baixo e o mais alto nível';
$string['formstderror'] = 'Deve inserir uma porcentagem menor do que 50 e maior ou igual a 0';
$string['functiondisabledbysecuremode'] = 'Essa funcionalidade está atualmente desativada';
$string['gradehighest'] = 'Nota mais alta';
$string['grademethod'] = 'Método de Avaliação';
$string['grademethod_help'] = 'Quando várias tentativas são permitidas, os seguintes métodos estão disponíveis para o cálculo da nota final questionário:

* Nota mais alta de todas as tentativas
* Primeira tentativa (todas as outras tentativas são ignoradas)
* Última tentativa (todas as outras tentativas são ignoradas)';
$string['graphlegend_error'] = 'Erro padrão';
$string['graphlegend_target'] = 'Nível alvo';
$string['highestlevel'] = 'O mais alto nível de dificuldade';
$string['highestlevel_help'] = 'O nível mais alto ou mais difícil do qual a avaliação pode selecionar questões. Durante uma tentativa, a atividade não irá além deste nível de dificuldade';
$string['highlevelusers'] = 'Usuários acima do nível da questão';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Relatório de tentativas de usuário individual para {$a}';
$string['leveloutofbounds'] = 'Nível solicitado {$a->level} fora dos limites para a tentativa';
$string['lowestlevel'] = 'Menor nível de dificuldade';
$string['lowestlevel_help'] = 'O nível mais baixo ou menos difícil do qual a avaliação pode selecionar questões. Durante uma tentativa, a atividade não irá além deste nível de dificuldade';
$string['lowlevelusers'] = 'Usuários abaixo do nível da questão';
$string['maximumquestions'] = 'Número máximo de questões';
$string['maximumquestions_help'] = 'O número máximo de questões que o estudante pode tentar';
$string['maxquestattempted'] = 'Número máximo de questões tentadas';
$string['midlevelusers'] = 'Usuários próximos ao nível da questão';
$string['minimumquestions'] = 'Número mínimo de questões';
$string['minimumquestions_help'] = 'O número mínimo de questões que o estudante precisa tentar';
$string['missingtagprefix'] = 'Prefixo de tag ausente';
$string['modulename'] = 'Questionário adaptativo';
$string['modulename_help'] = 'A atividade Questionário adaptativo permite que um professor crie questionários que medem com eficiência as habilidades dos participantes. Os questionários adaptativos são compostos de questões selecionadas do banco de questões que são marcadas com uma pontuação de sua dificuldade. As questões são escolhidas para corresponder ao nível de habilidade estimado do atual candidato. Se o candidato for bem-sucedido em uma questão, uma questão mais desafiadora será apresentada a seguir. Se o candidato responder a uma questão incorretamente, uma questão menos desafiadora será apresentada a seguir. Essa técnica se desenvolverá em uma sequência de questão convergindo no nível de habilidade efetiva do candidato. O questionário para quando a habilidade do candidato é determinada com a precisão necessária.

Esta atividade é mais adequada para determinar uma medida de habilidade ao longo de uma escala unidimensional. Embora a escala possa ser muito ampla, todas as questão devem fornecer uma medida de habilidade ou aptidão na mesma escala. Em um teste de nivelamento, por exemplo, as questões mais baixas na escala que os novatos são capazes de responder corretamente também devem ser respondidas por especialistas, enquanto as questões mais altas na escala devem ser respondidas apenas por especialistas ou um palpite de sorte. Questões que não discriminam os participantes de diferentes habilidades tornam o teste ineficaz e podem fornecer resultados inconclusivos.

As questão usadas no Questionário Adaptativo devem

* ser pontuadas automaticamente como corretas/incorretas
* e ser marcadas com sua dificuldade usando \'adpq_\' seguido por um número inteiro positivo que esteja dentro do intervalo do questionário

O Questionário Adaptativo pode ser configurado para

* definir a gama de dificuldades de questões/habilidades do usuário a serem medidas. 1-10, 1-16 e 1-100 são exemplos de intervalos válidos.
* definir a precisão necessária antes que o questionário seja interrompido. Freqüentemente, um erro de 5% na medida de habilidade é uma regra de parada apropriada
* requer um número mínimo de questões a serem respondidas
* requer um número máximo de questões que podem ser respondidas

Esta descrição e o processo de teste nesta atividade são baseados em <a href="http://www.rasch.org/memo69.pdf">Teste adaptativo por computador: uma metodologia cuja hora chegou</a> por John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. Memorando MESA No. 69.';
$string['modulenameplural'] = 'Questionário adaptativo';
$string['na'] = 'não aplicável';
$string['name'] = 'Nome';
$string['noattemptsallowed'] = 'Não são permitidas mais tentativas para esta atividade';
$string['nonewmodules'] = 'Nenhuma instância de questionário adaptativo encontrado';
$string['nopermission'] = 'Você não possui permissão para visualizar este recurso';
$string['notinprogress'] = 'Esta tentativa não está em progresso';
$string['notyourattempt'] = 'Esta não é a sua tentativa para esta atividade';
$string['numofattemptshdr'] = 'Número de tentativas';
$string['numright'] = 'Num correto';
$string['numwrong'] = 'Num errado';
$string['percent_correct_display_name'] = '% Correta';
$string['pluginadministration'] = 'Questionário adaptativo';
$string['pluginname'] = 'Questionário adaptativo';
$string['question_report'] = 'Análise de Questão';
$string['questionanalysisbtn'] = 'Análise de Questão';
$string['questionnumber'] = 'Questão #';
$string['questionpool'] = 'Banco de questões';
$string['questionpool_help'] = 'Selecione a(s) categoria(s) de onde a atividade retirará as questões durante uma tentativa.';
$string['questions_report'] = 'Relatório de Questões';
$string['questionsattempted'] = 'Somatório das tentativas das questões';
$string['questionspoolerrornovalidstartingquestions'] = 'As categorias de questões selecionadas não contêm questões que estejam devidamente marcadas para corresponder ao nível inicial de dificuldade selecionado.';
$string['recentactquestionsattempted'] = 'Tentativas das questões: {$a}';
$string['recentattemptstate'] = 'Estado da tentativa:';
$string['recentcomplete'] = 'Concluído';
$string['recentinprogress'] = 'Em progresso';
$string['reportattemptanswerdistributiontab'] = 'Distribuição de respostas';
$string['reportattemptanswerdistributiontabletitle'] = 'Visualização de Tabela de Distribuição de Respostas';
$string['reportattemptgraphtab'] = 'Gráfico de tentativas';
$string['reportattemptgraphtabletitle'] = 'Visualização da Tabela do Gráfico de Tentativas';
$string['reportattemptquestionsdetailstab'] = 'Detalhes das questões';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - revisando tentativa de {$a->fullname} enviada em {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'todos os usuários que já fizeram tentativas';
$string['reportattemptsenrolledwithattempts'] = 'participantes que fizeram tentativas';
$string['reportattemptsenrolledwithnoattempts'] = 'participantes sem tentativas feitas';
$string['reportattemptsfilterformheader'] = 'Filtragem';
$string['reportattemptsfilterformsubmit'] = 'Filtro';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Incluir usuários com inscrições inativas';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Incluir ou não usuários com inscrições suspensas.';
$string['reportattemptsfilterusers'] = 'Mostrar';
$string['reportattemptsnotenrolled'] = 'usuários não inscritos que fizeram tentativas';
$string['reportattemptspersistentfilter'] = 'Filtro persistente';
$string['reportattemptspersistentfilter_help'] = 'Quando marcadas, as configurações de filtro abaixo serão armazenadas quando enviadas e aplicadas sempre que você visitar a página do relatório.';
$string['reportattemptsprefsformheader'] = 'Preferências de Relatório';
$string['reportattemptsprefsformsubmit'] = 'Aplicar';
$string['reportattemptsresetfilter'] = 'Redefinir filtro';
$string['reportattemptsshowinitialbars'] = 'Mostrar barra inicial';
$string['reportattemptsummarytab'] = 'Resumo da tentativa';
$string['reportattemptsusersperpage'] = 'Número de usuários exibidos:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - relatório individual de tentativas de {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - relatório de questões';
$string['reportuserattemptstitleshort'] = 'tentativas de {$a}';
$string['requirepassword'] = 'Senha obrigatória';
$string['requirepassword_help'] = 'Estudantes devem digitar a senha antes de iniciar a sua tentativa';
$string['requirepasswordmessage'] = 'Para começar este questionário você precisa saber a senha do questionário';
$string['resetadaptivequizsall'] = 'Excluir todas as tentativas do questionário adaptativo';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisar tentativa';
$string['reviewattemptreport'] = 'Revisando a tentativa de ($a->fullname) submetida em ($a->finished)';
$string['score'] = 'Pontuação';
$string['showabilitymeasure'] = 'Mostrar nível de capacidade para os estudantes';
$string['showabilitymeasure_help'] = 'Às vezes, pode ser útil revelar estimativas de capacidade aos estudantes depois de fazer um questionário adaptativo. Com esta configuração habilitada, um estudante pode ver a estimativa de capacidade no resumo de tentativas e logo após finalizar uma tentativa também.';
$string['standarderror'] = 'Erro padrão para parar';
$string['standarderror_help'] = 'Quando a quantidade de erros na medida da habilidade do usuário cair abaixo desse valor, o questionário será interrompido. Ajuste este valor do padrão de 5% para exigir mais ou menos precisão na medida de habilidade';
$string['standarderrorhdr'] = 'Erro padrão';
$string['startattemptbtn'] = 'Iniciar tentativa';
$string['startinglevel'] = 'Nível inicial de dificuldade';
$string['startinglevel_help'] = 'O estudante inicia uma tentativa, a atividade selecionará aleatoriamente uma questão correspondente ao nível de dificuldade';
$string['statistic'] = 'Estatística';
$string['stopingconditionshdr'] = 'Condições de parada';
$string['submitanswer'] = 'Enviar resposta';
$string['times_used_display_name'] = 'Tempo usado';
$string['updateattempterror'] = 'Erro ao tentar atualizar o registro da tentativa';
$string['user'] = 'Usuário';
$string['value'] = 'Valor';
$string['wrongpassword'] = 'A senha está incorreta';
