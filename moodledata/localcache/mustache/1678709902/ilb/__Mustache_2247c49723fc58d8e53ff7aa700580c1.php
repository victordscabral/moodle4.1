<?php

class __Mustache_2247c49723fc58d8e53ff7aa700580c1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  <section class="carousel-login">
';
        $buffer .= $indent . '    <div class="container">
';
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/breadcrumbs')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/carousel_login')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '      <div class="divider"></div>
';
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/categories')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '  
';
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '-->';

        return $buffer;
    }
}
