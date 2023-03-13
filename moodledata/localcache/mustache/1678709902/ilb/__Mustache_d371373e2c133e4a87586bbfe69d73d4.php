<?php

class __Mustache_d371373e2c133e4a87586bbfe69d73d4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="column-categories">
';
        $buffer .= $indent . '  <div class="row-categories">
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '      <h3>Cursos On-line <br/> Sem Tutoria</h3>
';
        $buffer .= $indent . '      <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/sem-tutoria.svg" alt="">
';
        $buffer .= $indent . '      <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '        <h3>Cursos On-line <br/> Com Tutoria</h3>
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/com-tutoria.svg" alt="">
';
        $buffer .= $indent . '        <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '      <h3>Formação Interna</h3>
';
        $buffer .= $indent . '      <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/formacao-interna.svg" alt="">
';
        $buffer .= $indent . '      <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '      <h3>Pós-Graduação</h3>
';
        $buffer .= $indent . '      <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/pos-graduacao.svg" alt="">
';
        $buffer .= $indent . '      <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="row-categories">
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '      <h3>Oficinas Interlegis</h3>
';
        $buffer .= $indent . '      <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/oficinas-interlegis.svg" alt="">
';
        $buffer .= $indent . '      <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '        <h3>Vídeoaulas</h3>
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/video-aulas.svg" alt="">
';
        $buffer .= $indent . '        <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '      <h3>Projetos Especiais</h3>
';
        $buffer .= $indent . '      <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/projetos-especiais.svg" alt="">
';
        $buffer .= $indent . '      <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="#" class="card-category">
';
        $buffer .= $indent . '      <h3>Conheça o Senado Federal</h3>
';
        $buffer .= $indent . '      <img src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/ilb/assets/ilb/img/conheca-o-senado.svg" alt="">
';
        $buffer .= $indent . '      <div class="circle"></div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
