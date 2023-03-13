<?php

class __Mustache_1e912bcc5fe7f54db9fc3e3bf3e7478c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('tools');
        $buffer .= $this->section5a641dd18f60bc22f8f7500605f5302e($context, $indent, $value);
        $buffer .= $indent . '<button class="icon-no-margin btn btn-secondary ';
        $value = $context->find('viewlist');
        if (empty($value)) {
            
            $buffer .= 'active';
        }
        $buffer .= ' ml-2"
';
        $buffer .= $indent . 'title="';
        $value = $context->find('str');
        $buffer .= $this->sectionD393d30432f1ed8167e50ad70d93d722($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'data-action="viewgrid">
';
        $buffer .= $indent . '    ';
        $value = $context->find('pix');
        $buffer .= $this->sectionEb96bb01c095cdc60ac144eb04829f87($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';
        $buffer .= $indent . '<button class="icon-no-margin btn btn-secondary ';
        $value = $context->find('viewlist');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'title="';
        $value = $context->find('str');
        $buffer .= $this->section6ee07984ce4742385b2226eeb0de8436($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'data-action="viewlist">
';
        $buffer .= $indent . '    ';
        $value = $context->find('pix');
        $buffer .= $this->sectionBe0c318e7eafb3f7fb9a3b9b8acb904d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';

        return $buffer;
    }

    private function section5eb61323e70938f22fa4a368d9a81918(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{>core_contentbank/bankcontent/toolbar_dropdown}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/toolbar_dropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section976b5e1de084a7964a6f2e27a3b85f2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ icon }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a641dd18f60bc22f8f7500605f5302e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#dropdown}}
        {{>core_contentbank/bankcontent/toolbar_dropdown}}
    {{/dropdown}}
    {{^dropdown}}
        <a href="{{ link }}" class="icon-no-margin btn btn-secondary text-nowrap" title="{{ name }}" data-action="{{ action }}">
            {{#pix}} {{{ icon }}} {{/pix}} {{{ name }}}
        </a>
    {{/dropdown}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('dropdown');
                $buffer .= $this->section5eb61323e70938f22fa4a368d9a81918($context, $indent, $value);
                $value = $context->find('dropdown');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <a href="';
                    $value = $this->resolveValue($context->find('link'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="icon-no-margin btn btn-secondary text-nowrap" title="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-action="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '            ';
                    $value = $context->find('pix');
                    $buffer .= $this->section976b5e1de084a7964a6f2e27a3b85f2d($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD393d30432f1ed8167e50ad70d93d722(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '  displayicons, contentbank  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '  displayicons, contentbank  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd10686049994681443b5a00306be4d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displayicons, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' displayicons, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb96bb01c095cdc60ac144eb04829f87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/view_icon_active, core, {{#str}} displayicons, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'a/view_icon_active, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionCd10686049994681443b5a00306be4d5($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ee07984ce4742385b2226eeb0de8436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displaydetails, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' displaydetails, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe0c318e7eafb3f7fb9a3b9b8acb904d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/viewdetails, core, {{#str}} displaydetails, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/viewdetails, core, ';
                $value = $context->find('str');
                $buffer .= $this->section6ee07984ce4742385b2226eeb0de8436($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
