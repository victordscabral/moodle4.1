<?php

class __Mustache_a6be7b642a1c8608a4a5dfb8d1574694 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<header>
';
        $buffer .= $indent . '  <div id="header-institucional">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- navbar global -->
';
        $buffer .= $indent . '    <div class="sf-wrapper">
';
        $buffer .= $indent . '      <nav class="Triad navbar_global">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '          <button class="btn btn-lg btn-secondary js-sidebar-action" id="jstoggle" type="button"><i
';
        $buffer .= $indent . '              class="fas fa-bars"></i><span class="u-hideLower title-n"> Menu</span></button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div><a class="navbar_global-brand" href="https://www.senado.leg.br" title="Senado Federal"><img
';
        $buffer .= $indent . '              src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/image/senado.svg" alt="Title"></a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '          <div class="Rail Rail--fenced u-hideLower"><a class="js-vlibras" role="button" title="acessibilidade"><img
';
        $buffer .= $indent . '                src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/image/hands.svg" width="25px"></a><a
';
        $buffer .= $indent . '              class="link link-deep"
';
        $buffer .= $indent . '              href="https://www12.senado.leg.br/institucional/responsabilidade-social/acessibilidade/pages/acessibilidade-no-portal-do-senado">Acessibilidade</a><a
';
        $buffer .= $indent . '              class="link link-deep" href="http://www12.senado.gov.br/institucional/falecomosenado">Fale
';
        $buffer .= $indent . '              com o Senado</a></div>
';
        $buffer .= $indent . '          <a role="button" title="acessibilidade" class="js-vlibras btn u-hideUpper"><img
';
        $buffer .= $indent . '              src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/image/hands.svg" width="25px"></a>
';
        $buffer .= $indent . '          <a class="btn btn-lg btn-secondary u-hideUpper"
';
        $buffer .= $indent . '            href="http://www12.senado.gov.br/institucional/falecomosenado"><i class="fas fa-phone"></i></a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </nav>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- sidebar -->
';
        $buffer .= $indent . '    <div class="sf-wrapper">
';
        $buffer .= $indent . '      <aside class="sidebar" style="visibility: hidden;">
';
        $buffer .= $indent . '        <div class="title mb-2 py-3 text-center border-bottom">MENU</div>
';
        $buffer .= $indent . '        <div class="sidebar-menu">
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '              Institucional</div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary"
';
        $buffer .= $indent . '                    href="https://www12.senado.leg.br/institucional">Institucional</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Sobre o Senado</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Sobre o Senado</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/senado/hotsites/entendaatleg/">Atribuições</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/senado/hotsites/entendaatleg/">Composição</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/estrutura">Estrutura
';
        $buffer .= $indent . '                        Administrativa</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/senado/hotsites/entendaatleg/">Funcionamento</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/documentos/sobre-o-senado/historia">História</a>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/manuais-e-guias-do-senado-federal">Manuais
';
        $buffer .= $indent . '                        e Guias
';
        $buffer .= $indent . '                      </a>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/responsabilidade-social">Responsabilidade
';
        $buffer .= $indent . '                        Social</a>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www2.congressonacional.leg.br/visite">Visite
';
        $buffer .= $indent . '                        o Senado</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Fale com o Senado</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">
';
        $buffer .= $indent . '                        <a class="link link-light--tertiary"
';
        $buffer .= $indent . '                          href="https://www12.senado.leg.br/institucional/falecomosenado">Fale
';
        $buffer .= $indent . '                          com o Senado</a>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/transparencia/LAI/secrh/parla_inter.pdf">Contato
';
        $buffer .= $indent . '                        dos Senadores</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/falecomosenado">Contatos
';
        $buffer .= $indent . '                        do Senado</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/transparencia/LAI/secrh/diretores_inter.pdf">Diretores
';
        $buffer .= $indent . '                        e Coordenadores</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/transparencia/formtransparencia">Lei
';
        $buffer .= $indent . '                        de Acesso à Informação</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/ouvidoria">Ouvidoria</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                        Frequentes</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/redes-sociais">Redes
';
        $buffer .= $indent . '                        Sociais</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Páginas Institucionais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Páginas Institucionais</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/responsabilidade-social/acessibilidade">Acessibilidade</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/eventos">Agenda
';
        $buffer .= $indent . '                        de Eventos</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/arquivo">Arquivo</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/biblioteca">Biblioteca</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/datasenado">DataSenado</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/delegacia-virtual">Delegacia
';
        $buffer .= $indent . '                        Virtual</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/responsabilidade-social/equidade">Equidade</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/escoladegoverno">Escola
';
        $buffer .= $indent . '                        de Governo</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://livraria.senado.leg.br">Livraria</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/museu">Museu</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/responsabilidade-social/oel">Observatório
';
        $buffer .= $indent . '                        Equidade no Legislativo</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/omv">Observatório
';
        $buffer .= $indent . '                        da Mulher</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/ouvidoria">Ouvidoria</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/presidencia">Presidência</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/procuradoria">Procuradoria
';
        $buffer .= $indent . '                        da Mulher</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/sis">SIS/Saúde</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/responsabilidade-social/sustentabilidade">Sustentabilidade</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Serviços</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Serviços</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/carta-de-servicos">Carta
';
        $buffer .= $indent . '                        de Serviços</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/senado/hotsites/guialocalizacaosenado/index.html">Guia
';
        $buffer .= $indent . '                        de Localização</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/pessoas/pessoas">Página
';
        $buffer .= $indent . '                        Pessoas</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/jovemsenador">Programa
';
        $buffer .= $indent . '                        Jovem Senador</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/estagio">Programa
';
        $buffer .= $indent . '                        de Estágio</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">Senadores
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary" href="https://www25.senado.leg.br/web/senadores">Senadores</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Legislatura Atual</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">
';
        $buffer .= $indent . '                        <a class="link link-light--tertiary"
';
        $buffer .= $indent . '                          href="https://www25.senado.leg.br/web/senadores">Legislatura
';
        $buffer .= $indent . '                          Atual</a>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/em-exercicio">Senadores
';
        $buffer .= $indent . '                        em Exercício</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/comissao-diretora">Comissão
';
        $buffer .= $indent . '                        Diretora</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/liderancas-parlamentares">Lideranças
';
        $buffer .= $indent . '                        Parlamentares</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/fora-de-exercicio">Senadores
';
        $buffer .= $indent . '                        Fora de Exercício</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www25.senado.leg.br/web/senadores/legislaturas-anteriores">Legislaturas
';
        $buffer .= $indent . '                  Anteriores</a>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Presidentes</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">
';
        $buffer .= $indent . '                        <a class="link link-light--tertiary"
';
        $buffer .= $indent . '                          href="https://www25.senado.leg.br/web/senadores/presidentes">Presidentes</a>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/presidentes/imperio">Império
';
        $buffer .= $indent . '                        (1826-1889)</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/republica-velha">República
';
        $buffer .= $indent . '                        Velha (1889 - 1930)</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/pos-1930">Pós-1930</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/pos-1964">Pós-1964</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/nova-republica">Nova
';
        $buffer .= $indent . '                        República</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Mais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Mais</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/senadores/posse">Posse
';
        $buffer .= $indent . '                        de Senadores</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/dados-abertos">Dados
';
        $buffer .= $indent . '                        Abertos</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                        Frequentes</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">Atividade
';
        $buffer .= $indent . '              Legislativa</div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary" href="https://www25.senado.leg.br/web/atividade">Atividade
';
        $buffer .= $indent . '                    Legislativa</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Plenário</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">
';
        $buffer .= $indent . '                        <a class="link link-light--tertiary"
';
        $buffer .= $indent . '                          href="https://www25.senado.leg.br/web/atividade/sessao-plenaria">Plenário</a>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/sessao-plenaria">Sessão
';
        $buffer .= $indent . '                        Plenária</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/atividade/plenario/ordemdodia">Ordem
';
        $buffer .= $indent . '                        do Dia</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://legis.senado.leg.br/diarios/ver">Diários</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/pronunciamentos">Pronunciamentos</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Comissões</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">
';
        $buffer .= $indent . '                        <a class="link link-light--tertiary" href="https://legis.senado.leg.br/comissoes">Comissões</a>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://legis.senado.leg.br/comissoes">Agenda</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://legis.senado.leg.br/comissoes">Senado</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://legis.senado.leg.br/comissoes">Congresso</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://legis.senado.leg.br/comissoes/pesquisa_comissao">Pesquisar
';
        $buffer .= $indent . '                        Comissões</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Projetos e Matérias</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Projetos e Matérias</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/materias">Pesquisas</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/materias/acompanhamento/minhas-materias">Acompanhamento
';
        $buffer .= $indent . '                        de Matérias</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Informações
';
        $buffer .= $indent . '                    Legislativas</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Informações Legislativas</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/relatorios-mensais">Relatórios
';
        $buffer .= $indent . '                        Mensais</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/relatorio-da-presidencia">Relatórios
';
        $buffer .= $indent . '                        da Presidência</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www9.senado.gov.br/QvAJAXZfc/opendoc.htm?document=senado%2Fpainel%20legislativo.qvw&amp;host=QVS%40www9&amp;anonymous=true">Estatísticas</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/autoridades">Autoridades</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/relatorios-legislativos/covid-19">Enfrentamento
';
        $buffer .= $indent . '                        ao Coronavírus</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/institucional/falecomosenado/processo-legislativo">Atendimento
';
        $buffer .= $indent . '                        ao Usuário</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www25.senado.leg.br/web/atividade/legislacao">Legislação</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www25.senado.leg.br/web/atividade/conselhos">Órgãos
';
        $buffer .= $indent . '                  do parlamento</a>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Mais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Mais</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/autoridades">Autoridades</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/simplificou">Simplificou</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                        Frequentes</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.leg.br/senado/hotsites/entendaatleg/">Entenda
';
        $buffer .= $indent . '                        a Atividade Legislativa</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">Comunicação
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">Comunicação</div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary" href="http://www12.senado.leg.br/noticias">Senado
';
        $buffer .= $indent . '                  Notícias</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="http://www12.senado.leg.br/radio">Rádio Senado</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary" href="http://www12.senado.leg.br/tv">TV Senado</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary" href="http://www12.senado.leg.br/multimidia">Senado
';
        $buffer .= $indent . '                  Multimídia</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="http://www12.senado.leg.br/verifica">Senado Verifica</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary" href="http://www12.senado.leg.br/fotos">Senado
';
        $buffer .= $indent . '                  Fotos</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="http://www12.senado.leg.br/assessoria-de-imprensa">Assessoria
';
        $buffer .= $indent . '                  de Imprensa</a>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">Publicações
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary" href="https://www12.senado.leg.br/publicacoes">Publicações</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Publicações Oficiais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">
';
        $buffer .= $indent . '                        <a class="link link-light--tertiary" href="https://www12.senado.leg.br/publicacoes">Publicações
';
        $buffer .= $indent . '                          Oficiais</a>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://legis.senado.leg.br/diarios/ver">Diários</a> <a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="http://www.senado.leg.br/atividade/const/constituicao-federal.asp">Constituição
';
        $buffer .= $indent . '                        Federal</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/regimento-interno">Regimento
';
        $buffer .= $indent . '                        Interno</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/relatorio-da-presidencia">Relatório
';
        $buffer .= $indent . '                        da Presidência</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www25.senado.leg.br/web/atividade/relatorios-mensais">Relatórios
';
        $buffer .= $indent . '                        Mensais</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="http://www.senado.leg.br/publicacoes/anais/asp/PQ_Pesquisar.asp">Anais
';
        $buffer .= $indent . '                        do Senado</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/publicacoes/estudos-legislativos/homeestudoslegislativos">Estudos
';
        $buffer .= $indent . '                  Legislativos</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/orcamento/estudos-orcamentarios">Estudos
';
        $buffer .= $indent . '                  Orçamentários</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/publicacoes/conselho-editorial-1">Conselho
';
        $buffer .= $indent . '                  Editorial</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ril">Revista de Informação
';
        $buffer .= $indent . '                  Legislativa</a>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Mais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Mais</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                        Frequentes</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">Orçamento
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary" href="https://www12.senado.leg.br/orcamento">Orçamento</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/orcamento/legislacao-orcamentaria">Legislação
';
        $buffer .= $indent . '                  Orçamentária</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/orcamento/estudos-orcamentarios">Estudos
';
        $buffer .= $indent . '                  Orçamentários</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/orcamento/sigabrasil">SIGA
';
        $buffer .= $indent . '                  Brasil</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/orcamentofacil">Orçamento
';
        $buffer .= $indent . '                  Fácil</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www25.senado.leg.br/web/congresso/legislacao-e-publicacoes/glossario-orcamentario">Glossário</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                  Frequentes</a>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '              Transparência</div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary"
';
        $buffer .= $indent . '                    href="https://www12.senado.leg.br/transparencia">Transparência</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www25.senado.leg.br/web/transparencia/sen">Senadores</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/transparencia/prestacao-de-contas/transparencia-e-prestacao-de-contas">Prestação
';
        $buffer .= $indent . '                  de Contas</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/transparencia/gestgov/HP-gestao-e-governanca">Gestão
';
        $buffer .= $indent . '                  e Governança</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/transparencia/licitacoes-e-contratos/licitacoes-e-contratos">Licitações
';
        $buffer .= $indent . '                  e Contratos</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/transparencia/rh/HP-recursos-humanos">Gestão
';
        $buffer .= $indent . '                  de Pessoas</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/transparencia/orcamento-e-financas/orcamento-e-financas">Orçamento
';
        $buffer .= $indent . '                  e Finanças</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/dados-abertos">Dados
';
        $buffer .= $indent . '                  Abertos</a>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Mais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Mais</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/transparencia/sobre-1">Transparência
';
        $buffer .= $indent . '                        Pública</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/transparencia/leg/legislacao-relacionada">Legislação
';
        $buffer .= $indent . '                        Relacionada</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/transparencia/indice-de-transparencia-legislativa">Índice
';
        $buffer .= $indent . '                        de Transparência</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                        Frequentes</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/transparencia/ctcs/conselho-de-transparencia">Conselho
';
        $buffer .= $indent . '                        de Transparência</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="sidebar-branch">
';
        $buffer .= $indent . '            <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">e-Cidadania
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="sidebar-wrapper">
';
        $buffer .= $indent . '              <div class="sidebar-menu">
';
        $buffer .= $indent . '                <div class="sidebar-title">
';
        $buffer .= $indent . '                  <a class="link link-light--tertiary" href="https://www12.senado.leg.br/ecidadania">e-Cidadania</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ecidadania/sobre">Sobre</a><a
';
        $buffer .= $indent . '                  class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ecidadania/principalideia">Ideia
';
        $buffer .= $indent . '                  Legislativa</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ecidadania/principalaudiencia">Evento
';
        $buffer .= $indent . '                  Interativo</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ecidadania/principalmateria">Consulta
';
        $buffer .= $indent . '                  Pública</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ecidadania/oficinalegislativa">Oficina
';
        $buffer .= $indent . '                  Legislativa</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                  href="https://www12.senado.leg.br/ecidadania/login">Entrar</a>
';
        $buffer .= $indent . '                <div class="sidebar-branch">
';
        $buffer .= $indent . '                  <div class="sidebar-toggle" aria-haspopup="true" aria-expanded="false" tabindex="0">
';
        $buffer .= $indent . '                    Mais</div>
';
        $buffer .= $indent . '                  <div class="sidebar-wrapper">
';
        $buffer .= $indent . '                    <div class="sidebar-menu">
';
        $buffer .= $indent . '                      <div class="sidebar-title">Mais</div>
';
        $buffer .= $indent . '                      <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/ecidadania/documentos/home/resultados">Relatórios</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/ecidadania/termo">Termos
';
        $buffer .= $indent . '                        de Uso</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/ecidadania/validar-declaracao">Validação
';
        $buffer .= $indent . '                        de Declaração</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.gov.br/bi-arqs/Arquimedes/ecidadania/relatorio-simplificado-ingles-pdf.pdf">English</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www.senado.gov.br/bi-arqs/Arquimedes/ecidadania/relatorio-simplificado-espanhol-pdf.pdf">Español</a><a
';
        $buffer .= $indent . '                        class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/ecidadania/avalie">Fale
';
        $buffer .= $indent . '                        Conosco</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '                        href="https://www12.senado.leg.br/perguntas-frequentes">Perguntas
';
        $buffer .= $indent . '                        Frequentes</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="border-top my-2"></div>
';
        $buffer .= $indent . '          <a class="sidebar-leaf link link-light--tertiary u-fontNormal"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/presidencia">Presidência</a><a
';
        $buffer .= $indent . '            class="sidebar-leaf link link-light--tertiary u-fontNormal"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/ouvidoria">Ouvidoria</a><a
';
        $buffer .= $indent . '            class="sidebar-leaf link link-light--tertiary u-fontNormal"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/procuradoria">Procuradoria
';
        $buffer .= $indent . '            da Mulher</a><a class="sidebar-leaf link link-light--tertiary u-fontNormal"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/omv">Observatório
';
        $buffer .= $indent . '            da Mulher</a><a class="sidebar-leaf link link-light--tertiary u-fontNormal"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/interlegis">Interlegis</a><a
';
        $buffer .= $indent . '            class="sidebar-leaf link link-light--tertiary u-fontNormal"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/ifi">Instituição Fiscal
';
        $buffer .= $indent . '            Independente</a>
';
        $buffer .= $indent . '          <div class="border-top my-2"></div>
';
        $buffer .= $indent . '          <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/falecomosenado">Fale
';
        $buffer .= $indent . '            com o Senado</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/transparencia/formtransparencia">Acesso
';
        $buffer .= $indent . '            à Informação</a><a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/carta-de-servicos">Carta
';
        $buffer .= $indent . '            de Serviços</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/redes-sociais">Redes
';
        $buffer .= $indent . '            Sociais</a> <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '            href="https://www12.senado.leg.br/institucional/documentos/politica-de-uso-do-portal-do-senado-federal">Política
';
        $buffer .= $indent . '            de uso</a>
';
        $buffer .= $indent . '          <div class="border-top my-2"></div>
';
        $buffer .= $indent . '          <div class="Rail Rail--fenced">
';
        $buffer .= $indent . '            <a class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '              href="https://www12.senado.leg.br/institucional/carta-de-servicos/en/carta-de-servicos">English</a><a
';
        $buffer .= $indent . '              class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '              href="https://www12.senado.leg.br/institucional/carta-de-servicos/es/carta-de-servicos">Français</a><a
';
        $buffer .= $indent . '              class="sidebar-leaf link link-light--tertiary"
';
        $buffer .= $indent . '              href="https://www12.senado.leg.br/institucional/carta-de-servicos/fr/carta-de-servicos">Español</a>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="border-top my-2"></div>
';
        $buffer .= $indent . '          <a class="sidebar-leaf link link-light--tertiary" href="https://intranet.senado.leg.br"><i
';
        $buffer .= $indent . '              class="fas fa-lock mr-1"></i>&nbsp;Intranet</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </aside>
';
        $buffer .= $indent . '      <div class="sidebar-overlay"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="sf-wrapper">
';
        $buffer .= $indent . '  <div class="menu-local">
';
        $buffer .= $indent . '    <div class="pt-2">
';
        $buffer .= $indent . '      <div class="nav_control-title">
';
        $buffer .= $indent . '        <h1><a id="portal-home-link" href="https://www12.senado.leg.br/institucional"
';
        $buffer .= $indent . '            accesskey="0">Institucional</a><span class="next-title"><a href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/?redirect=0">Instituto
';
        $buffer .= $indent . '              Legislativo Brasileiro</a></span></h1>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <button class="btn_control-res btn btn-tertiary btn-lg" type="button" data-toggle="collapse.se"
';
        $buffer .= $indent . '      data-target="#menu-local__form" aria-controls="menu-local__form" aria-expanded="false" aria-label="Exibe busca"><i
';
        $buffer .= $indent . '        class="fas fa-search"></i></button>
';
        $buffer .= $indent . '    <div class="menu-local__social"><a class="link link-deep--facebook" href="https://www.facebook.com/SenadoFederal"
';
        $buffer .= $indent . '        title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a><a class="link link-deep--twitter"
';
        $buffer .= $indent . '        href="https://twitter.com/senadofederal" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a><a
';
        $buffer .= $indent . '        class="link link-deep--instagram" href="https://www.instagram.com/senadofederal" title="Instagram"
';
        $buffer .= $indent . '        target="_blank"><i class="fab fa-instagram"></i></a><a class="link link-deep--youtube"
';
        $buffer .= $indent . '        href="https://www.youtube.com/user/TVSenadoOficial" title="Youtube" target="_blank"><i
';
        $buffer .= $indent . '          class="fab fa-youtube"></i></a><a class="link link-deep--whatsapp"
';
        $buffer .= $indent . '        href="https://www.youtube.com/user/TVSenadoOficial" title="WhatsApp" target="_blank"><i
';
        $buffer .= $indent . '          class="fab fa-whatsapp"></i></a><a class="link link-deep--flickr"
';
        $buffer .= $indent . '        href="https://www.youtube.com/user/TVSenadoOficial" title="Flickr" target="_blank"><i
';
        $buffer .= $indent . '          class="fab fa-flickr"></i></a><a class="link link-deep--telegram"
';
        $buffer .= $indent . '        href="https://www.youtube.com/user/TVSenadoOficial" title="Telegram" target="_blank"><i
';
        $buffer .= $indent . '          class="fab fa-telegram-plane"></i></a><a class="link link-deep--linkedin"
';
        $buffer .= $indent . '        href="https://www.youtube.com/user/TVSenadoOficial" title="Linked In" target="_blank"><i
';
        $buffer .= $indent . '          class="fab fa-linkedin-in"></i></a></div>
';
        $buffer .= $indent . '    <form class="menu-local__form collapse" id="menu-local__form" data-colecao="Institucional" method="get"
';
        $buffer .= $indent . '      action="//www6g.senado.gov.br/busca/">
';
        $buffer .= $indent . '      <div class="search-wrapper">
';
        $buffer .= $indent . '        <input type="hidden" name="portal" value="Institucional">
';
        $buffer .= $indent . '        <input class="form-control search-out" type="search" placeholder="Buscar" name="q" accesskey="3">
';
        $buffer .= $indent . '        <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <nav class="navbar navbar_control navbar-expand-lg navbar--sf">
';
        $buffer .= $indent . '    <div class="navbar-toggler navbar-toggler--sf" role="button" data-toggle="collapse.se"
';
        $buffer .= $indent . '      data-target="#js-navbar-dropdown" aria-controls="js-navbar-dropdown" aria-expanded="false"
';
        $buffer .= $indent . '      aria-label="Exibe navegação">
';
        $buffer .= $indent . '      <button class="btn btn-secondary"><i class="fas fa-bars"></i></button>
';
        $buffer .= $indent . '      <div class="ml-2">MENU DESTA SEÇÃO</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="collapse navbar-collapse-se" id="js-navbar-dropdown">
';
        $buffer .= $indent . '      <ul class="navbar-nav navbar-nav--sf">
';
        $buffer .= $indent . '        <!-- Menu Principal -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <li class="nav-item"><a class="link link--nav" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/pages/sobre.html">Sobre</a></li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <li class="nav-item"><a class="link link--nav" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/pages/perguntas-frequentes.html">Perguntas Frequentes</a></li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <li class="nav-item"><a class="link link--nav" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/pages/contatos.html">Contatos</a></li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <li class="nav-item"><a class="link link--nav" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/pages/certificados.html">Certificados</a></li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </nav>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
