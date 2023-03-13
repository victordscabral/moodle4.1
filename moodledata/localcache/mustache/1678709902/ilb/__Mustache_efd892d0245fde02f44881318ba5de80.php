<?php

class __Mustache_efd892d0245fde02f44881318ba5de80 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="h5p-iframe-wrapper">
';
        $buffer .= $indent . '    <iframe id="h5p-iframe-';
        $value = $this->resolveValue($context->find('h5pid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="h5p-iframe" data-content-id="';
        $value = $this->resolveValue($context->find('h5pid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        style="height:1px; min-width: 100%" src="about:blank">
';
        $buffer .= $indent . '    </iframe>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
