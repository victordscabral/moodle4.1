<?php

class __Mustache_155598684696bf706a9d5d3b94951cf4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '    <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/saberes4/theme/ilb/scss/ilb/courselist.scss">
';
        $buffer .= $indent . '</head>';

        return $buffer;
    }
}
