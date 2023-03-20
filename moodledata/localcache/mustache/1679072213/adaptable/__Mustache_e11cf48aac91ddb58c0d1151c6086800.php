<?php

class __Mustache_e11cf48aac91ddb58c0d1151c6086800 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionC4191facdcef81f1c74cae19949444f4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="savediscardsection" style="margin-top: ';
        $value = $this->resolveValue($context->find('topmargin'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';">
';
        $buffer .= $indent . '<input id="adminresetbutton" class="form-submit" style="float: right; margin-right: 20px;" type="reset"
';
        $buffer .= $indent . '    form="adminsettings" value=" ';
        $value = $this->resolveValue($context->find('discardtext'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '<input id="adminsubmitbutton" style="float: right; margin-right: 20px;" type="submit" form="adminsettings" value=" ';
        $value = $this->resolveValue($context->find('savetext'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC4191facdcef81f1c74cae19949444f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_adaptable/savebutton\'], function(mod) {
    mod.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_adaptable/savebutton\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
