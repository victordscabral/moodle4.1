<?php

class __Mustache_723d964ca3651242fc4d94c901650148 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('heading');
        $buffer .= $this->section317d5294b0743e273e8398186fd5d009($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('usercanedit');
        $buffer .= $this->section8b6a360ae5e0dc127606b3f225bde367($context, $indent, $value);
        $value = $context->find('usercanedit');
        if (empty($value)) {
            
            $value = $context->find('actionmenu');
            $buffer .= $this->section21d4be695daf912c44015932022207c7($context, $indent, $value);
        }

        return $buffer;
    }

    private function section317d5294b0743e273e8398186fd5d009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{heading}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<h2>';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cfe550406578806e8d74cc4ae4ff275(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-3">
                {{> core_contentbank/contentbankmenu }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-3">
';
                if ($partial = $this->mustache->loadPartial('core_contentbank/contentbankmenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6c25f6b096d01e4fd16dde79d3dd890(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'exit, core_contentbank';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'exit, core_contentbank';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b6a360ae5e0dc127606b3f225bde367(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="cb-toolbar-container container-fluid my-2">
    <div class="row">
        <div class="d-flex">
            <a href="{{editcontenturl}}" class="btn btn-primary" data-action="edit-content">
                {{#str}}edit{{/str}}
            </a>
        </div>

        {{#actionmenu}}
            <div class="ml-3">
                {{> core_contentbank/contentbankmenu }}
            </div>
        {{/actionmenu}}

        <div class="ml-auto">
            <a href="{{closeurl}}" class="btn btn-secondary" data-action="close-content">
                {{#str}}exit, core_contentbank{{/str}}
            </a>
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
                
                $buffer .= $indent . '<div class="cb-toolbar-container container-fluid my-2">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '        <div class="d-flex">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('editcontenturl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary" data-action="edit-content">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('actionmenu');
                $buffer .= $this->section1cfe550406578806e8d74cc4ae4ff275($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="ml-auto">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('closeurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-secondary" data-action="close-content">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionD6c25f6b096d01e4fd16dde79d3dd890($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21d4be695daf912c44015932022207c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_contentbank/contentbankmenu }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_contentbank/contentbankmenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
