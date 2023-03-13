<?php

class __Mustache_708fb0989489520a2c7ec29cfcf21e77 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<iframe src="';
        $value = $this->resolveValue($context->find('embedurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" name="h5player" width=":w" height=":h"
';
        $buffer .= $indent . '   allowfullscreen="allowfullscreen" class="h5p-player w-100 border-0"
';
        $buffer .= $indent . '   style="height: 0px;" id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-h5player">
';
        $buffer .= $indent . '</iframe>
';
        $buffer .= $indent . '
';
        $value = $context->find('editurl');
        $buffer .= $this->sectionAcb60a1b796622a8357b7eeea4b0f8cd($context, $indent, $value);

        return $buffer;
    }

    private function section05a7161c72ba9fac795a63dac71a0b35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editcontent, core_h5p';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editcontent, core_h5p';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcb60a1b796622a8357b7eeea4b0f8cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{editurl}}">{{#str}}editcontent, core_h5p{{/str}}</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section05a7161c72ba9fac795a63dac71a0b35($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
