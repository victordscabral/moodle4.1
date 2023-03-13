<?php

class __Mustache_9be126c04f02ec27ca006ce7fbcc397a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '  
';
        $buffer .= $indent . '<footer id="page-footer" class="p-y-1">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <p>Senado Federal - Praça dos Três Poderes - Brasília DF - CEP 70165-900</p>
';
        $buffer .= $indent . '        <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.home_link'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';

        return $buffer;
    }
}
