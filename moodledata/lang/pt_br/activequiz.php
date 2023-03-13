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
 * Strings for component 'activequiz', language 'pt_br', version '4.1'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Adicione uma instância ativa do questionário';
$string['activequiz:attempt'] = 'Tente um questionário ativo';
$string['activequiz:control'] = 'Controlar um questionário ativo. (Apenas para os instrutores)';
$string['activequiz:editquestions'] = 'Edite perguntas para um questionário ativo.';
$string['activequiz:seeresponses'] = 'Veja outras respostas dos estudantes para classificá-los';
$string['activequiz:viewownattempts'] = 'Permite que os estudantes visualizem suas próprias tentativas de um questionário';
$string['activequizintro'] = 'Introdução';
$string['activequizsettings'] = 'Configurações Gerais do questionário ativo';
$string['activitygrades'] = 'Notas das atividades:';
$string['addquestion'] = 'Adicionar questão';
$string['addtoquiz'] = 'Adicionar';
$string['anonymousresponses'] = 'Tornar anônimas as respostas dos estudantes';
$string['anonymousresponses_help'] = 'Tornar as respostas dos estudantes anônimas para visualização do instrutor, de modo que, na tela deles, nomes de estudantes ou de grupos não serão mostrados';
$string['anonymoususer'] = 'Usuário anônimo';
$string['assessed'] = 'Avaliado';
$string['assessed_help'] = 'Marque esta caixa para que seu questionário seja avaliado';
$string['attempt_grade'] = 'Nota da tentativa';
$string['attemptno'] = 'Número de tentativas';
$string['attempts'] = 'Tentativas';
$string['attemptstarted'] = 'Uma tentativa já foi iniciada por você, por favor, clique abaixo para continuar a sua tentativa aberta';
$string['attemptstartedalready'] = 'Uma tentativa já foi iniciada por um dos membros do seu grupo';
$string['attemptview'] = 'Ver tentativa';
$string['cantaddquestiontwice'] = 'Você não pode adicionar a mesma pergunta mais de uma vez a um questionário';
$string['cantinitattempts'] = 'Você não pode inicializar tentativas';
$string['closesession'] = 'Fechar sessão';
$string['closingsession'] = 'Fechando sessão...';
$string['countdatasetlabel'] = 'Número de Respostas';
$string['defaultquestiontime'] = 'Tempo padrão para as questões';
$string['defaultquestiontime_help'] = 'O tempo padrão para exibir cada questão.<br />
Isso pode ser substituído por questões individuais.';
$string['edit'] = 'Editar questionário';
$string['editpage_opensession_error'] = 'Você não pode editar uma pergunta do quiz ou o layout enquanto uma sessão está aberta.';
$string['enabledquestiontypes'] = 'Habilitar tipos de questões';
$string['enabledquestiontypes_info'] = 'Tipos de questões que estão habilitadas para uso em instâncias da atividade de questionário ativo.';
$string['endquestion'] = 'Questão Final';
$string['errorregrade'] = 'Desculpe, ocorreu um erro ao tentar reavaliar todos os questionários';
$string['eventattemptstarted'] = 'A tentativa começou';
$string['eventattemptviewed'] = 'Tentativa visualizada';
$string['eventquestionanswered'] = 'Questão respondida para tentativa';
$string['eventquestionmanuallygraded'] = 'Pergunta classificada manualmente';
$string['feedbackintro'] = 'Feedback para sua pergunta. Por favor aguarde o instrutor para começar a próxima pergunta';
$string['firstsession'] = 'Primeira sessão';
$string['fullanonymize'] = 'Anonimizar por completo as respostas dos estudantes';
$string['fullanonymize_help'] = 'Tornar totalmente anônimas as respostas do estudante. Observe que, se você selecionar esta opção, as respostas desta sessão não serão avaliadas e aplicadas para os estudantes.';
$string['gatheringresults'] = 'Coletando resultados...';
$string['gotosession'] = 'Ir para a sessão em andamento';
$string['grademethod'] = 'Método de classificação da sessão';
$string['grademethod_help'] = 'Este é o método usado quando há classificação . Este método descobre a classificação com várias sessões no mesmo questionário ativo.';
$string['gradesettings'] = 'Definições da Categoria';
$string['groupattendance'] = 'Permitir acompanhamento em grupo';
$string['groupattendance_help'] = 'Se esta opção estiver ativada, o estudante respondendo ao questionário pode selecionar quais os estudantes em seu grupo que estão participando.';
$string['grouping'] = 'Agrupamento';
$string['grouping_help'] = 'Selecione o grupo que você gostaria de usar para o agrupamento de estudantes';
$string['groupmembership'] = 'Participação em grupo';
$string['groupworksettings'] = 'Configurações do grupo';
$string['hide_correct_answer'] = 'Esconder resposta correta';
$string['hidenotresponded'] = 'Esconder não respondeu';
$string['hidestudentresponses'] = 'Ocultar respostas';
$string['highestsessiongrade'] = 'Nota mais alta da sessão';
$string['indvquestiontime'] = 'Tempo da questão';
$string['indvquestiontime_help'] = 'Tempo da questão em segundos.';
$string['instructorquizinst'] = '<p>Por favor espere nesta página até que estudantes tenham se conectado. Ao clicar <b>início teste</b> o teste se iniciará na primeira questão</p>
    <p>
<p>Controls:</p>
    <ul>
        <li>
            Re-contar questão
            <ul>
                <li>
                    Permite ao instrutor re-contar a questão atual ou anterior (disponível durante a revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
            Próxima questão
            <ul>
                <li>
                   Continue na próxima questão (disponível durante revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
            Fim questão
            <ul>
                <li>
                    Fim da questão corrente. Também permite ao instrutor terminar antecipadamente uma questão com tempo determinado (disponível enquanto a questão está em execução). <i>se a questão não tem limite de tempo, será solicitado um clique ao instrutor <b>fim questão.</b></i>
                </li>
            </ul>
        </li>
        <li>
            Vai para questão
            <ul>
                <li>
                    Abre uma caixa de diálogo para direcionar todos usuários para uma questão específica no teste (disponível durante a revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
          Fecha sessão
            <ul>
                <li>
                    Fecha a sessão corrente, bem como todas tentativas para os estudantes. Isso classifica automaticamente todas tentativas (disponível a qualquer momento).
                </li>
            </ul>
        </li>
        <li>
            Recarrega resultados
            <ul>
                <li>
                    Recarrega as respostas dos estudantes na caixa de informação. Permite ao instrutor ver quantos estudantes ou grupos responderam e quantos tem ainda que responder (disponível durante a revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
            Esconde/Exibe Não Respondido
            <ul>
                <li>
                    Esconde ou exibe a caixa de informação que exibe quantos estudantes ou grupos responderam e quais estudantes ou grupos ainda tem que responder (disponível quando a questão está em revisão).
                </li>
            </ul>
        </li>
        <li>
            Mostra resposta correta
            <ul>
                <li>
                    Dá ao instrutor a visão da questão com a resposta correta selecionada (disponível durante a revisão de uma questão). Isto não mostra a resposta correta  para tipos de questões avaliadas manualmente, como questões de múltipla escolha.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = 'Existe uma sessão em progresso. Por favor, clique no botão abaixo para ir para a sessão';
$string['invalid_indvquestiontime'] = 'O tempo das perguntas deve ser um número inteiro maior ou igual a 0';
$string['invalid_numberoftries'] = 'Número de tentativas deve ser um número inteiro maior ou igual a 1';
$string['invalid_points'] = 'Os pontos são obrigatórios e devem ser um número maior do que 0';
$string['invalidattemptaccess'] = 'Você não tem permissão para acessar essa tentativa';
$string['invalidgroupid'] = 'Um id válido de grupo é necessário para estudantes.';
$string['invalidquestionattempt'] = 'Pergunta Inválida ($a->questionname) sendo adicionada a tentativa do questionário.';
$string['isanonymous'] = 'Todas as respostas para este questionário ativo são anônimas';
$string['joinquiz'] = 'Junte-se ao questionário';
$string['joinquizinstructions'] = 'Clique abaixo para juntar-se ao questionário';
$string['jumptoquesetioninstructions'] = 'Selecione uma pergunta que você gostaria de ir:';
$string['jumptoquestion'] = 'Ir para a pergunta:';
$string['lastsession'] = 'Última sessão';
$string['loading'] = 'Inicializar Questionário';
$string['manualcomment'] = 'Comentário Manual';
$string['manualcomment_help'] = 'O comentário que os instrutores podem adicionar quando uma tentativa for classificada';
$string['marks'] = 'Notas';
$string['marks_help'] = 'A nota numérica para cada questão é a pontuação total da tentativa';
$string['modulename'] = 'Questionário ativo';
$string['modulename_help'] = 'Equipe<p>A atividade Questionário Ativo permite ao instrutor criar e administrar questionários em tempo real. Todas as questões regulares dos questionários podem ser usadas no Questionário Ativo.</p>
<p>Questionário Ativo permite a participação de indivíduos ou grupos. Participação de grupos é possível pois os pontos dados durante o questionário ativo serão aplicados somente aos participantes que responderam à sessão. Questões podem ser configuradas para permitir respostas múltiplas. Um limite de tempo pode ser configurado para encerrar automaticamente uma questão, ou o instrutor pode terminar a questão manualmente e seguir para a próxima. O instrutor também tem a alternativa de saltar para questões diferentes enquanto executando a sessão. Instrutores podem monitorar a participação de grupos ou indivíduos, resposta dos participantes em tempo real e a questão sendo avaliada. <p>
<p>Cada resposta do questionário é marcada automaticamente como questionário regular (com a exceção de questões de múltipla escolha) e a avaliação é registrada num livro de avaliação. Avaliação para participação de grupos podem ser feitas automaticamente transferindo a avaliação de um indivíduo para os outros membros do grupo. <p>
<p>O instrutor tem opções para mostrar sugestões, dar retorno e mostram respostas corretas para estudantes mediante a conclusão do questionário.</p>
<p>Questionários Ativos podem ser usados como veículo para encaminhar Aprendizado em Time dentro do Moodle.</p>';
$string['modulenameplural'] = 'Questionários ativos';
$string['nextquestion'] = 'Próxima questão';
$string['no_questions'] = 'Não há nenhuma pergunta adicionada a este questionário.';
$string['nochangegroups'] = 'Você não pode mudar de grupo após a criação de sessões ou não há grupos definidos para este curso.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'Não há feedback para esta questão';
$string['nosession'] = 'Não há sessão aberta';
$string['notime'] = 'Sem limite de tempo';
$string['notime_help'] = 'Marque este campo para não utilizar o cronômetro nesta questão. <p>Será necessário que o instrutor clique no botão de finalizar questão para que a questão seja finalizada</p>';
$string['notresponded'] = 'Número de tentativas não respondidas';
$string['notries'] = 'Você não possui mais tentativas para esta questão';
$string['numberoftries'] = 'Número de tentativas';
$string['numberoftries_help'] = 'Número de tentativas em uma questão para um usuário. Os estudantes ainda ainda estarão sujeitos ao limite de tempo da questão.';
$string['overallgrade'] = 'Nota geral: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Porcentagem de respostas dadas';
$string['pluginadministration'] = 'Administração questionário ativo';
$string['pluginname'] = 'Questionário ativo';
$string['points'] = 'Pontos das questões';
$string['points_help'] = 'O número de pontos que você gostaria que essa questão valesse para valer a pena';
$string['qdeleteerror'] = 'Não foi possível excluir questão';
$string['qdeletesucess'] = 'Questão excluída com sucesso';
$string['qmoveerror'] = 'Não foi possível mover questão';
$string['qmovesuccess'] = 'Questão movida com sucesso';
$string['question'] = 'Questão';
$string['questiondelete'] = 'Excluir questão {$a}';
$string['questionedit'] = 'Editar questão';
$string['questionfinished'] = 'Questão finalizada, à espera de resultados';
$string['questionlist'] = 'Lista de Questões';
$string['questionmovedown'] = 'Mover questão {$a} para baixo';
$string['questionmoveup'] = 'Mover questão {$a} para cima';
$string['quiznotrunning'] = 'Questionário não funcionando no momento - espere o seu professor para iniciá-lo. Use o botão de recarga para recarregar esta página para verificar novamente';
$string['regradeallgrades'] = 'Reavaliar todas as notas';
$string['reload_results'] = 'Atualizar Resultados';
$string['repollquestion'] = 'Questão de nova votação';
$string['response_attempt_controls'] = 'Editar / Ver Tentativa';
$string['responses'] = 'Veja as respostas';
$string['reviewafter'] = 'Após as sessões serem fechadas';
$string['reviewoptionsettings'] = 'Opções de revisão';
$string['savequestion'] = 'Salvar questão';
$string['scale'] = 'Nota Máxima';
$string['scale_help'] = 'Este valor (inteiro) irá dimensionar quaisquer pontos que são recebidos no questionário para este valor.';
$string['select_group'] = 'Selecione seu grupo';
$string['selectsession'] = 'Selecione sessão para ver:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Média da Sessão';
$string['sessionclosed'] = 'Sessão está encerrada';
$string['sessionname'] = 'Nome da sessão';
$string['sessionname_required'] = 'O nome da sessão é necessário';
$string['sessionnametext'] = '<span style="font-weight: bold">Sessão: </span>';
$string['show_correct_answer'] = 'Mostrar resposta correta';
$string['showhistoryduringquiz'] = 'Mostrar histórico de respostas';
$string['showhistoryduringquiz_help'] = '';
$string['shownotresponded'] = 'Mostrar não respondeu';
$string['showstudentresponses'] = 'Mostrar respostas';
$string['start_session'] = 'Início da Sessão';
$string['startedon'] = 'Iniciado em';
$string['startquiz'] = 'Início do questionário';
$string['studentquizinst'] = '<p> Por favor, aguarde o instrutor para iniciar o questionário. Uma vez iniciado, você verá um cronômetro em contagem regressiva quando a primeira pergunta começar </p>';
$string['successregrade'] = 'Questionário reavaliado com sucesso';
$string['teacherjoinquizinstruct'] = 'Use isto se você quiser fazer uma tentativa no questionário você mesmo<br />(você também precisará iniciar o questionário em uma janela separada)';
$string['teacherstartinstruct'] = 'Use isto para iniciar o questionário para os estudantes responderem<br/>Use a caixa de texto para definir um nome para esta sessão (para ajudar na análise dos resultados posteriormente).';
$string['theattempt'] = 'A tentativa';
$string['theattempt_help'] = 'Se o estudante pode rever a tentativa inteira.';
$string['timecompleted'] = 'Tempo concluído';
$string['timemodified'] = 'Tempo modificado';
$string['timertext'] = 'Sua questão irá acabar e será entregue automaticamente em:';
$string['trycount'] = 'Você tem {$a->tries} tentativas restantes.';
$string['unabletocreate_session'] = 'Não é possível criar sessão';
$string['view'] = 'Ver questionário';
$string['viewstats'] = 'Ver estatísticas do questionário';
$string['waitforquestion'] = 'Aguardando o envio da questão em:';
$string['waitforquestiontime'] = 'Aguarde o tempo das questões';
$string['waitforquestiontime_help'] = 'O tempo de espera para uma pergunta se iniciar / conduzir no tempo.';
$string['waitforrevewingend'] = 'O instrutor está atualmente revendo a questão anterior. Por favor, aguarde para a próxima questão começar';
$string['waitstudent'] = 'Esperando estudantes para se conectar';
$string['workedingroups'] = 'Trabalhará em grupos.';
$string['workedingroups_help'] = 'Marque esta caixa para indicar que os estudantes trabalharão em grupos. Certifique-se de selecionar um agrupamento abaixo';
