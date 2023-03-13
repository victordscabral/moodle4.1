<?php

class __Mustache_6925c4654cfff063aa517141fff5d615 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span tabindex="0" role="button" aria-haspopup="true" data-drag-type="move" title="';
        $value = $this->resolveValue($context->find('movetitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('pix');
        $buffer .= $this->section648f46438270696dfb0f3d2cd0dbad93($context, $indent, $value);
        $buffer .= '</span>
';

        return $buffer;
    }

    private function section648f46438270696dfb0f3d2cd0dbad93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/dragdrop, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/dragdrop, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
