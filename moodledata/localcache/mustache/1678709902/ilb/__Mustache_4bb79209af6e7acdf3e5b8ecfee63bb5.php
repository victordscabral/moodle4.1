<?php

class __Mustache_4bb79209af6e7acdf3e5b8ecfee63bb5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="attfiltercontrols mb-3">
';
        $buffer .= $indent . '
';
        $value = $context->find('modeallsessions');
        $buffer .= $this->sectionA725e13ec041e29e9c00d20539e344e4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="row m-n2">
';
        $value = $context->find('sessgroupselector');
        $buffer .= $this->sectionDc7d728d6da994f6c147f23676a96a0a($context, $indent, $value);
        $value = $context->find('addsession');
        $buffer .= $this->sectionC698a550a262502426fdc30e6a24011f($context, $indent, $value);
        $value = $context->find('curdatecontrols');
        $buffer .= $this->section2197f5c7fe26be66ecc82e22a9f13199($context, $indent, $value);
        $value = $context->find('pagingcontrols');
        $buffer .= $this->sectionAf582271b9df0efdc5afc63b42c0bdc7($context, $indent, $value);
        $value = $context->find('viewcontrols');
        $buffer .= $this->section2289ce0b803eadd9da9fe7494730dbc3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section9503279d82b082b13dce685c5980a382(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="groupingcontrols col-auto px-2">
                        {{{groupingcontrols}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="groupingcontrols col-auto px-2">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('groupingcontrols'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d96ec37c418813230ce574ab2852b2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="coursecontrols col-auto px-2">
                        {{{coursecontrols}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="coursecontrols col-auto px-2">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('coursecontrols'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA725e13ec041e29e9c00d20539e344e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="modeallsessions mb-3">
            <div class="row mx-n2 justify-content-between flex-xl-column align-items-xl-end">
                {{#groupingcontrols}}
                    <div class="groupingcontrols col-auto px-2">
                        {{{groupingcontrols}}}
                    </div>
                {{/groupingcontrols}}
                {{#coursecontrols}}
                    <div class="coursecontrols col-auto px-2">
                        {{{coursecontrols}}}
                    </div>
                {{/coursecontrols}}   
            </div> 
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="modeallsessions mb-3">
';
                $buffer .= $indent . '            <div class="row mx-n2 justify-content-between flex-xl-column align-items-xl-end">
';
                $value = $context->find('groupingcontrols');
                $buffer .= $this->section9503279d82b082b13dce685c5980a382($context, $indent, $value);
                $value = $context->find('coursecontrols');
                $buffer .= $this->section4d96ec37c418813230ce574ab2852b2d($context, $indent, $value);
                $buffer .= $indent . '            </div> 
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc7d728d6da994f6c147f23676a96a0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="sessgroupselector col-auto p-2">
                {{{sessgroupselector}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="sessgroupselector col-auto p-2">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('sessgroupselector'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC698a550a262502426fdc30e6a24011f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="addsession col-auto p-2">
                {{{addsession}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="addsession col-auto p-2">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('addsession'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2197f5c7fe26be66ecc82e22a9f13199(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="curdatecontrols col-auto d-flex align-items-center p-2">
                {{{curdatecontrols}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="curdatecontrols col-auto d-flex align-items-center p-2">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('curdatecontrols'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf582271b9df0efdc5afc63b42c0bdc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="pagingcontrols col-auto d-flex align-items-center p-2 ml-xl-auto">
                {{{pagingcontrols}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="pagingcontrols col-auto d-flex align-items-center p-2 ml-xl-auto">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('pagingcontrols'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2289ce0b803eadd9da9fe7494730dbc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="viewcontrols col-auto p-2 {{^pagingcontrols}}ml-xl-auto{{/pagingcontrols}}">
                {{{viewcontrols}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="viewcontrols col-auto p-2 ';
                $value = $context->find('pagingcontrols');
                if (empty($value)) {
                    
                    $buffer .= 'ml-xl-auto';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('viewcontrols'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
