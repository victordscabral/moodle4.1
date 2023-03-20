<?php

class __Mustache_71ee4d22d360d769d7da6624a03f8b01 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="headersearch ';
        $value = $this->resolveValue($context->find('pagelayout'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' d-none d-lg-block float-right">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('search'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
