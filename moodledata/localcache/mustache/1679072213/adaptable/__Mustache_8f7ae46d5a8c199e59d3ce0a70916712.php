<?php

class __Mustache_8f7ae46d5a8c199e59d3ce0a70916712 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="view-selector">
';
        $buffer .= $indent . '    <button id="calendarviewdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
        $buffer .= $indent . '        <span class="d-sm-inline-block" data-active-item-text>
';
        $buffer .= $indent . '            ';
        $value = $context->find('viewingmonth');
        $buffer .= $this->section6a090eecc461408576a8f210bfbc02bf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('viewingday');
        $buffer .= $this->section4556cb73417e8d93d762ac8c800b3d7a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('viewingupcoming');
        $buffer .= $this->section2b4975bed387950ef3d9ac9fae06ed7e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <ul class="dropdown-menu" data-show-active-item aria-labelledby="calendarviewdropdown">
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item ';
        $value = $context->find('viewingmonth');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" data-view="month"
';
        $buffer .= $indent . '                data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-day="';
        $value = $this->resolveValue($context->findDot('date.mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionF83c5ca19f7ca389f49e7d4194786f53($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item ';
        $value = $context->find('viewingday');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" data-view="day" data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                data-day="';
        $value = $this->resolveValue($context->findDot('date.mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section66759212e38ee53916e857aa610460bb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item ';
        $value = $context->find('viewingupcoming');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" data-view="upcoming"
';
        $buffer .= $indent . '                data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-day="';
        $value = $this->resolveValue($context->findDot('date.mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionB52b0bc95c9203a82475b21b16aadeca($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF83c5ca19f7ca389f49e7d4194786f53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' month ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' month ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a090eecc461408576a8f210bfbc02bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} month {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionF83c5ca19f7ca389f49e7d4194786f53($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66759212e38ee53916e857aa610460bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' day, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' day, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4556cb73417e8d93d762ac8c800b3d7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} day, core_calendar {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section66759212e38ee53916e857aa610460bb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB52b0bc95c9203a82475b21b16aadeca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' upcomingevents, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' upcomingevents, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b4975bed387950ef3d9ac9fae06ed7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} upcomingevents, core_calendar {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionB52b0bc95c9203a82475b21b16aadeca($context, $indent, $value);
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

}
