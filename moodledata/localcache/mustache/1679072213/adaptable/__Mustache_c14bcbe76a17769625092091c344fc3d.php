<?php

class __Mustache_c14bcbe76a17769625092091c344fc3d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('displayloginbox');
        $buffer .= $this->section3c19c3100743ea51386ce79ddbdc00d1($context, $indent, $value);
        $value = $context->find('displayloginbox');
        if (empty($value)) {
            
            $value = $context->find('hasoidc');
            $buffer .= $this->sectionF10e14a4d8ebe071c8b9109059a4e32a($context, $indent, $value);
            $value = $context->find('hasoidc');
            if (empty($value)) {
                
                $buffer .= $indent . '        <a class="btn-login d-inline-block" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionD031cd4909ee891fac38226ae5f4c5d7($context, $indent, $value);
                $buffer .= '</a>
';
            }
        }

        return $buffer;
    }

    private function section24d3596515a964fba3d361c1ba5e658e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginplaceholder, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loginplaceholder, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5c657f56faa7fa957469bd29784965b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'passwordplaceholder, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'passwordplaceholder, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD031cd4909ee891fac38226ae5f4c5d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'logintextbutton, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'logintextbutton, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c19c3100743ea51386ce79ddbdc00d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form id="pre-login-form" class="form-inline my-2 my-lg-0" action="{{{url}}}" method="post">
    <input type="hidden" name="logintoken" value="{{token}}"/>
    <input type="text" name="username" placeholder="{{#str}}loginplaceholder, theme_adaptable{{/str}}" size="11">
    <input type="password" name="password" placeholder="{{#str}}passwordplaceholder, theme_adaptable{{/str}}" size="11">
    <button class="btn-login" type="submit">{{#str}}logintextbutton, theme_adaptable{{/str}}</button>
</form>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<form id="pre-login-form" class="form-inline my-2 my-lg-0" action="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" method="post">
';
                $buffer .= $indent . '    <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('token'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>
';
                $buffer .= $indent . '    <input type="text" name="username" placeholder="';
                $value = $context->find('str');
                $buffer .= $this->section24d3596515a964fba3d361c1ba5e658e($context, $indent, $value);
                $buffer .= '" size="11">
';
                $buffer .= $indent . '    <input type="password" name="password" placeholder="';
                $value = $context->find('str');
                $buffer .= $this->sectionE5c657f56faa7fa957469bd29784965b($context, $indent, $value);
                $buffer .= '" size="11">
';
                $buffer .= $indent . '    <button class="btn-login" type="submit">';
                $value = $context->find('str');
                $buffer .= $this->sectionD031cd4909ee891fac38226ae5f4c5d7($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '</form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA07ab87c1d958756469765ae33c19d42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img src="{{iconurl}}" alt="{{name}}">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e6ed1f894f49085252c73b6604b3d41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{url}}" title="{{name}}" class="btn-login d-inline-block">
                {{#iconurl}}
                <img src="{{iconurl}}" alt="{{name}}">
                {{/iconurl}}
                {{name}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn-login d-inline-block">
';
                $value = $context->find('iconurl');
                $buffer .= $this->sectionA07ab87c1d958756469765ae33c19d42($context, $indent, $value);
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db7273f9381ea6119f2f10fc6cd7ddf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'logintextbuttonwhenoidc, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'logintextbuttonwhenoidc, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF10e14a4d8ebe071c8b9109059a4e32a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#oidcdata}}
            <a href="{{url}}" title="{{name}}" class="btn-login d-inline-block">
                {{#iconurl}}
                <img src="{{iconurl}}" alt="{{name}}">
                {{/iconurl}}
                {{name}}
            </a>
        {{/oidcdata}}
            <a class="btn-login d-inline-block" href="{{{url}}}">{{#str}}logintextbuttonwhenoidc, theme_adaptable{{/str}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('oidcdata');
                $buffer .= $this->section2e6ed1f894f49085252c73b6604b3d41($context, $indent, $value);
                $buffer .= $indent . '            <a class="btn-login d-inline-block" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section5db7273f9381ea6119f2f10fc6cd7ddf($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
