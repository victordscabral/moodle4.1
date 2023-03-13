<?php

class __Mustache_fc127647e912725608a3515e72ad0b1c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr class="nofields"><td colspan="4">';
        $value = $context->find('str');
        $buffer .= $this->section2c400fedea7e192b865fc52b34b2964b($context, $indent, $value);
        $buffer .= '</td></tr>
';

        return $buffer;
    }

    private function section2c400fedea7e192b865fc52b34b2964b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' therearenofields, core_customfield ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' therearenofields, core_customfield ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
