<?php

class __Mustache_fc68965e234dba4e1c8f2d3097bf780f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-container">
';
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/carousel')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/login_form')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
