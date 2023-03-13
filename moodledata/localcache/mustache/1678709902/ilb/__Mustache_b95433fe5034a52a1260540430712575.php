<?php

class __Mustache_b95433fe5034a52a1260540430712575 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation" id="action_bar">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('categoryselect');
        $buffer .= $this->section39641967619ebbfc8a75ae816bcfbc18($context, $indent, $value);
        $value = $context->find('search');
        $buffer .= $this->sectionBe1df542266704c434abc327073d3ac3($context, $indent, $value);
        $value = $context->find('additionaloptions');
        $buffer .= $this->sectionF0897b244759b98b659740ed7e42cab9($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section39641967619ebbfc8a75ae816bcfbc18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/url_select }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe1df542266704c434abc327073d3ac3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/search_input }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/search_input')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11352dffef15d7c7875602ba40556abd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moreactions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moreactions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74abb3cc60ffe12f30c02419e1664972(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moremenu';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moremenu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section801bcd19aebdc5786ad20c4358b88203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28253ba2142251efc4b5556387998359(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a role="menuitem" class="dropdown-item" {{#attributes}}{{name}}="{{value}}"{{/attributes}} href="{{url}}" tabindex="-1">{{string}}</a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a role="menuitem" class="dropdown-item" ';
                $value = $context->find('attributes');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" tabindex="-1">';
                $value = $this->resolveValue($context->find('string'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0897b244759b98b659740ed7e42cab9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-auto d-flex">
                <div class="navitem dropdown">
                    <button aria-label="{{#str}}moreactions{{/str}}" class="btn btn-secondary dropdown-toggle" id="dropdown-actions" data-toggle="dropdown" aria-haspopup="true" aria-controls="moreactionsmenu">
                        {{#str}}moremenu{{/str}}
                    </button>

                    <div id="moreactionsmenu" class="dropdown-menu" aria-labelledby="dropdown-actions" role="menu">
                        {{#options}}
                            <a role="menuitem" class="dropdown-item" {{#attributes}}{{name}}="{{value}}"{{/attributes}} href="{{url}}" tabindex="-1">{{string}}</a>
                        {{/options}}
                    </div>
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-auto d-flex">
';
                $buffer .= $indent . '                <div class="navitem dropdown">
';
                $buffer .= $indent . '                    <button aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section11352dffef15d7c7875602ba40556abd($context, $indent, $value);
                $buffer .= '" class="btn btn-secondary dropdown-toggle" id="dropdown-actions" data-toggle="dropdown" aria-haspopup="true" aria-controls="moreactionsmenu">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section74abb3cc60ffe12f30c02419e1664972($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div id="moreactionsmenu" class="dropdown-menu" aria-labelledby="dropdown-actions" role="menu">
';
                $value = $context->find('options');
                $buffer .= $this->section28253ba2142251efc4b5556387998359($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
