<?php

class __Mustache_126c4a0aeefb033f01ad9177efacd469 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div';
        $buffer .= ' data-type="event"';
        $buffer .= ' data-course-id="';
        $value = $this->resolveValue($context->findDot('course.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-event-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="event mt-3"';
        $buffer .= ' data-event-component="';
        $value = $this->resolveValue($context->find('component'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-event-eventtype="';
        $value = $this->resolveValue($context->find('eventtype'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-eventtype-';
        $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '="1"';
        $buffer .= ' data-event-title="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-event-count="';
        $value = $this->resolveValue($context->find('eventcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="card rounded">
';
        $buffer .= $indent . '        <div class="box card-header clearfix calendar_event_';
        $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="commands float-sm-right">
';
        $value = $context->find('canedit');
        $buffer .= $this->section50dff46af9ff88ef835436710be3da4b($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            ';
        $value = $context->find('icon');
        $buffer .= $this->sectionDa1698ac12c50ba793051ba8f97689ae($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div class="d-inline-block">
';
        $buffer .= $indent . '                <h3 class="name d-inline-block">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="description card-body">
';
        if ($partial = $this->mustache->loadPartial('core_calendar/event_details')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $value = $context->findDot('action.actionable');
        $buffer .= $this->sectionA029c7a961b8af23a1e1f8c3b49f31e8($context, $indent, $value);
        $value = $context->findDot('action.actionable');
        if (empty($value)) {
            
            $value = $context->find('isactionevent');
            $buffer .= $this->section91d7ea5b7feb9feb6806b621b5eb64d7($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc43fc972e7be636807f79a3364b9d8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1bd19af7a9a1da6cc79c9c30a89ba81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{deleteurl}}" data-action="delete" aria-label="{{#str}}delete{{/str}}" title="{{#str}}delete{{/str}}">
                            {{#pix}}t/delete, core{{/pix}}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('deleteurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="delete" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionDc43fc972e7be636807f79a3364b9d8a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
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

    private function sectionFbfbf734947d6abf9cff877b7b854cbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50dff46af9ff88ef835436710be3da4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#candelete}}
                        <a href="{{deleteurl}}" data-action="delete" aria-label="{{#str}}delete{{/str}}" title="{{#str}}delete{{/str}}">
                            {{#pix}}t/delete, core{{/pix}}
                        </a>
                    {{/candelete}}
                    {{^isactionevent}}
                        <a href="{{editurl}}" data-action="edit" aria-label="{{#str}}edit{{/str}}" title="{{#str}}edit{{/str}}">
                            {{#pix}}t/edit, core{{/pix}}
                        </a>
                    {{/isactionevent}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('candelete');
                $buffer .= $this->sectionF1bd19af7a9a1da6cc79c9c30a89ba81($context, $indent, $value);
                $value = $context->find('isactionevent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <a href="';
                    $value = $this->resolveValue($context->find('editurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-action="edit" aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                    $buffer .= '" title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                            ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionFbfbf734947d6abf9cff877b7b854cbe($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17144e6457bffc9fa0437cc7e3d39509(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{key}}, {{component}}, {{alttext}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('alttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa1698ac12c50ba793051ba8f97689ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="d-inline-block mt-1 align-top">{{#pix}} {{key}}, {{component}}, {{alttext}} {{/pix}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="d-inline-block mt-1 align-top">';
                $value = $context->find('pix');
                $buffer .= $this->section17144e6457bffc9fa0437cc7e3d39509($context, $indent, $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA029c7a961b8af23a1e1f8c3b49f31e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="card-footer text-right bg-transparent">
                <a href="{{action.url}}" class="card-link">{{{action.name}}}</a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="card-footer text-right bg-transparent">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('action.url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="card-link">';
                $value = $this->resolveValue($context->findDot('action.name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21174b37ce739ab4be8aef3612806b79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotoactivity, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gotoactivity, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91d7ea5b7feb9feb6806b621b5eb64d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="card-footer text-right bg-transparent">
                <a href="{{url}}" class="card-link">{{#str}} gotoactivity, core_calendar {{/str}}</a>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="card-footer text-right bg-transparent">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="card-link">';
                $value = $context->find('str');
                $buffer .= $this->section21174b37ce739ab4be8aef3612806b79($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
