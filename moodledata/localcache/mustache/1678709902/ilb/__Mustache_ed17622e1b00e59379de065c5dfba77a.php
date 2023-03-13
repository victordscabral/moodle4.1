<?php

class __Mustache_ed17622e1b00e59379de065c5dfba77a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'blockF2371b58ebd8d7849997969cd56fd306'),
                'placeholder' => array($this, 'blockD4602ae911eb48135585b28317b48360'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section9a2e2e24e18974597642a4ec95edfce6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        searchcontentbankbyname, contentbank
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        searchcontentbankbyname, contentbank
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dbf37a0f544ff636ac78cdadec0a0c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockF2371b58ebd8d7849997969cd56fd306($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section9a2e2e24e18974597642a4ec95edfce6($context, $indent, $value);
    
        return $buffer;
    }

    public function blockD4602ae911eb48135585b28317b48360($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
    
        return $buffer;
    }
}
