<?php

class __Mustache_751394023ea87af06190c88d0b0a7925 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->find('resizeurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></script>';

        return $buffer;
    }
}
