<?php

class __Mustache_a2e7754293c0afec101d08befa3b729a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a href="#" data-action="filter-event-type" data-eventtype="';
        $value = $this->resolveValue($context->find('eventtype'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-eventtype-hidden="';
        $value = $this->resolveValue($context->find('hidden'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('hidden');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="calendar_event_';
            $value = $this->resolveValue($context->find('eventtype'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            $value = $context->find('pix');
            $buffer .= $this->section3ce74d98901b789d3d1a5bcdd76ed037($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
            $buffer .= $indent . '        <span>&nbsp;</span>
';
            $buffer .= $indent . '        <span class="eventname">';
            $value = $context->find('str');
            $buffer .= $this->sectionA1af10f8d9e5921331c0cfd62627b5a7($context, $indent, $value);
            $buffer .= '</span>
';
        }
        $value = $context->find('hidden');
        $buffer .= $this->section4deaee1e2039de16873412a4b5b26978($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function sectionA1af10f8d9e5921331c0cfd62627b5a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hideeventtype, calendar, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hideeventtype, calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ce74d98901b789d3d1a5bcdd76ed037(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/hide, core, {{#str}}hideeventtype, calendar, {{name}}{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/hide, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionA1af10f8d9e5921331c0cfd62627b5a7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cdd975a5dc5ad631b91b19a2e829318(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showeventtype, calendar, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showeventtype, calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdcac34012040f5d9dbe02c12254eac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/show, core, {{#str}}showeventtype, calendar, {{name}}{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/show, core, ';
                $value = $context->find('str');
                $buffer .= $this->section0cdd975a5dc5ad631b91b19a2e829318($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4deaee1e2039de16873412a4b5b26978(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="calendar_event_{{eventtype}}">
            {{#pix}}i/show, core, {{#str}}showeventtype, calendar, {{name}}{{/str}}{{/pix}}
        </span>
        <span>&nbsp;</span>
        <span class="eventname">{{#str}}showeventtype, calendar, {{name}}{{/str}}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="calendar_event_';
                $value = $this->resolveValue($context->find('eventtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->section2bdcac34012040f5d9dbe02c12254eac($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '        <span>&nbsp;</span>
';
                $buffer .= $indent . '        <span class="eventname">';
                $value = $context->find('str');
                $buffer .= $this->section0cdd975a5dc5ad631b91b19a2e829318($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
