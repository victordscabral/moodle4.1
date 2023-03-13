<?php

class __Mustache_9b798798dfc38103102b44bc2b49c07c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="btn-group mr-1" role="group">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-action="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-content"
';
        $buffer .= $indent . '            aria-haspopup="true" aria-expanded="false" ';
        $value = $context->find('contenttypes');
        if (empty($value)) {
            
            $buffer .= 'title="';
            $value = $context->find('str');
            $buffer .= $this->sectionE998c0f9363104d087843170139eef46($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '            disabled';
        }
        $buffer .= '>
';
        $buffer .= $indent . '        ';
        $value = $context->find('name');
        $buffer .= $this->section84d9e595ebdf661daaff6a03141c9a2b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-scrollable dropdown-menu-right">
';
        $value = $context->find('contenttypes');
        $buffer .= $this->sectionF7b0de6888d13d720d4b22c2e2781426($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE998c0f9363104d087843170139eef46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocontenttypes, core_contentbank';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocontenttypes, core_contentbank';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84d9e595ebdf661daaff6a03141c9a2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32be32769fede85ba9fa7e06023e83ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <img alt="" class="icon" src="';
                $value = $this->resolveValue($context->find('typeicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB99149906c83356a14a4ab8af54979fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' b/h5p_library, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' b/h5p_library, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section434693ee9d46f3958889c4099c933e5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="dropdown-item icon-size-4" href="{{{ baseurl }}}&{{{ typeeditorparams }}}">
                        {{#typeicon}}
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        {{/typeicon}}
                        {{^typeicon}}
                            {{#pix}} b/h5p_library, core {{/pix}}
                        {{/typeicon}} {{ typename }}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="dropdown-item icon-size-4" href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '&';
                $value = $this->resolveValue($context->find('typeeditorparams'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $value = $context->find('typeicon');
                $buffer .= $this->section32be32769fede85ba9fa7e06023e83ce($context, $indent, $value);
                $value = $context->find('typeicon');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionB99149906c83356a14a4ab8af54979fc($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                        ';
                }
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('typename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section541aecd19f7d72a4c36e5baa881b68db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^typeeditorparams}}
                    <h6 class="dropdown-header">{{ typename }}</h6>
                {{/typeeditorparams}}
                {{#typeeditorparams}}
                    <a class="dropdown-item icon-size-4" href="{{{ baseurl }}}&{{{ typeeditorparams }}}">
                        {{#typeicon}}
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        {{/typeicon}}
                        {{^typeicon}}
                            {{#pix}} b/h5p_library, core {{/pix}}
                        {{/typeicon}} {{ typename }}
                    </a>
                {{/typeeditorparams}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('typeeditorparams');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <h6 class="dropdown-header">';
                    $value = $this->resolveValue($context->find('typename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h6>
';
                }
                $value = $context->find('typeeditorparams');
                $buffer .= $this->section434693ee9d46f3958889c4099c933e5e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7b0de6888d13d720d4b22c2e2781426(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#types}}
                {{^typeeditorparams}}
                    <h6 class="dropdown-header">{{ typename }}</h6>
                {{/typeeditorparams}}
                {{#typeeditorparams}}
                    <a class="dropdown-item icon-size-4" href="{{{ baseurl }}}&{{{ typeeditorparams }}}">
                        {{#typeicon}}
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        {{/typeicon}}
                        {{^typeicon}}
                            {{#pix}} b/h5p_library, core {{/pix}}
                        {{/typeicon}} {{ typename }}
                    </a>
                {{/typeeditorparams}}
            {{/types}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('types');
                $buffer .= $this->section541aecd19f7d72a4c36e5baa881b68db($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
