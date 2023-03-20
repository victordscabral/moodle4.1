<?php

class __Mustache_fa218b96f62309b7fccf6024059dfdce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '    <div class="col-1">';
        $value = $context->find('pix');
        $buffer .= $this->section6be3adb0908b228dedf0eff20110c54c($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="col-11">';
        $value = $this->resolveValue($context->find('formattedtime'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('normalisedeventtypetext');
        $buffer .= $this->sectionE67a161220bdb07fde0e2f3af59e85d1($context, $indent, $value);
        $value = $context->find('description');
        $buffer .= $this->sectionC42228a084356b6c484ff9a1129cb11d($context, $indent, $value);
        $value = $context->find('formattedlocation');
        $buffer .= $this->section9feb5839416553399aff8ee3f7105b4d($context, $indent, $value);
        $value = $context->find('iscategoryevent');
        $buffer .= $this->section8ec0a7c2c83ac5d3a8c7dc52da9f2fde($context, $indent, $value);
        $value = $context->findDot('course.viewurl');
        $buffer .= $this->section3ff798ad3e3d02713c1e2d7e919ce7be($context, $indent, $value);
        $value = $context->find('groupname');
        $buffer .= $this->sectionCeeea2b42030acd813c5e818b9483678($context, $indent, $value);
        $value = $context->find('subscription');
        $buffer .= $this->section8091c2e9c2e1bf03aeeeaf3deda1328d($context, $indent, $value);

        return $buffer;
    }

    private function sectionEf8f2154b04fe8c00ab9a13a388b8c2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' when, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' when, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6be3adb0908b228dedf0eff20110c54c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/calendareventtime, core, {{#str}} when, core_calendar {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/calendareventtime, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionEf8f2154b04fe8c00ab9a13a388b8c2e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6121a1ec35054535565b4373434c2727(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' eventtype, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' eventtype, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30ac7ea0def6035332bdfc0b10687057(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/calendar, core, {{#str}} eventtype, core_calendar {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/calendar, core, ';
                $value = $context->find('str');
                $buffer .= $this->section6121a1ec35054535565b4373434c2727($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE67a161220bdb07fde0e2f3af59e85d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row mt-1">
        <div class="col-1">{{#pix}} i/calendar, core, {{#str}} eventtype, core_calendar {{/str}} {{/pix}}</div>
        <div class="col-11">{{normalisedeventtypetext}}</div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row mt-1">
';
                $buffer .= $indent . '        <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->section30ac7ea0def6035332bdfc0b10687057($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="col-11">';
                $value = $this->resolveValue($context->find('normalisedeventtypetext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b257672dfa14e719ae30834047be479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e0601dce233fabe3a3db70b821c1404(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/calendareventdescription, core, {{#str}} description {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/calendareventdescription, core, ';
                $value = $context->find('str');
                $buffer .= $this->section0b257672dfa14e719ae30834047be479($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC42228a084356b6c484ff9a1129cb11d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row mt-1">
        <div class="col-1">{{#pix}} i/calendareventdescription, core, {{#str}} description {{/str}} {{/pix}}</div>
        <div class="description-content col-11">{{{.}}}</div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row mt-1">
';
                $buffer .= $indent . '        <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->section8e0601dce233fabe3a3db70b821c1404($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="description-content col-11">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33037c1b27c327d75f61d1862326883f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' location ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' location ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48bff0c36c2bd05ed59096bf1364aa70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/location, core, {{#str}} location {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/location, core, ';
                $value = $context->find('str');
                $buffer .= $this->section33037c1b27c327d75f61d1862326883f($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9feb5839416553399aff8ee3f7105b4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row mt-1">
        <div class="col-1">{{#pix}} i/location, core, {{#str}} location {{/str}} {{/pix}}</div>
        <div class="location-content col-11">{{{.}}}</div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row mt-1">
';
                $buffer .= $indent . '        <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->section48bff0c36c2bd05ed59096bf1364aa70($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="location-content col-11">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE43b42c12bbb9701c0718f36208c22de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' category ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' category ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1404f2fdfa3a2418bcfe7950899b6a4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/categoryevent, core, {{#str}} category {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/categoryevent, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionE43b42c12bbb9701c0718f36208c22de($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ec0a7c2c83ac5d3a8c7dc52da9f2fde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row mt-1">
        <div class="col-1">{{#pix}} i/categoryevent, core, {{#str}} category {{/str}} {{/pix}}</div>
        <div class="col-11">{{{category.nestedname}}}</div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row mt-1">
';
                $buffer .= $indent . '        <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->section1404f2fdfa3a2418bcfe7950899b6a4b($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="col-11">';
                $value = $this->resolveValue($context->findDot('category.nestedname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section935207dbb135155d9033286c71d96189(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1020e2fe138aa99ea4e53f07a53fe2cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/courseevent, core, {{#str}} course {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/courseevent, core, ';
                $value = $context->find('str');
                $buffer .= $this->section935207dbb135155d9033286c71d96189($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ff798ad3e3d02713c1e2d7e919ce7be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row mt-1">
        <div class="col-1">{{#pix}} i/courseevent, core, {{#str}} course {{/str}} {{/pix}}</div>
        <div class="col-11"><a href="{{course.viewurl}}">{{{course.fullname}}}</a></div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row mt-1">
';
                $buffer .= $indent . '        <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->section1020e2fe138aa99ea4e53f07a53fe2cf($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="col-11"><a href="';
                $value = $this->resolveValue($context->findDot('course.viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('course.fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE10e67c26381a00abdb5aebb9294085d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' group ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' group ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ba56462573389af503d51fff082bf90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/groupevent, core, {{#str}} group {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/groupevent, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionE10e67c26381a00abdb5aebb9294085d($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCeeea2b42030acd813c5e818b9483678(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row mt-1">
        <div class="col-1">{{#pix}} i/groupevent, core, {{#str}} group {{/str}} {{/pix}}</div>
        <div class="col-11">{{{groupname}}}</div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row mt-1">
';
                $buffer .= $indent . '        <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->section4ba56462573389af503d51fff082bf90($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="col-11">';
                $value = $this->resolveValue($context->find('groupname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa0ce1c2b2446e2d77a9bccefdafe72d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' eventsource, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' eventsource, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFee51d8deaea5dcdaaa2552efb90f782(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/rss, core, {{#str}} eventsource, core_calendar {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/rss, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionDa0ce1c2b2446e2d77a9bccefdafe72d($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87b7d971d18ed241a537f3f78c441cb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscriptionsource, core_calendar, {{{subscriptionname}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'subscriptionsource, core_calendar, ';
                $value = $this->resolveValue($context->find('subscriptionname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc5f1211b604d6e7f682a2a0eba1ac3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p><a href="{{subscriptionurl}}">{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</a></p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p><a href="';
                $value = $this->resolveValue($context->find('subscriptionurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section87b7d971d18ed241a537f3f78c441cb1($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83b40ecedd943083bf2de93e330e659b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="row mt-1">
            <div class="col-1">{{#pix}} i/rss, core, {{#str}} eventsource, core_calendar {{/str}} {{/pix}}</div>
            <div class="col-11">
                {{#subscriptionurl}}
                    <p><a href="{{subscriptionurl}}">{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</a></p>
                {{/subscriptionurl}}
                {{^subscriptionurl}}
                    <p>{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</p>
                {{/subscriptionurl}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="row mt-1">
';
                $buffer .= $indent . '            <div class="col-1">';
                $value = $context->find('pix');
                $buffer .= $this->sectionFee51d8deaea5dcdaaa2552efb90f782($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="col-11">
';
                $value = $context->find('subscriptionurl');
                $buffer .= $this->sectionAc5f1211b604d6e7f682a2a0eba1ac3c($context, $indent, $value);
                $value = $context->find('subscriptionurl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <p>';
                    $value = $context->find('str');
                    $buffer .= $this->section87b7d971d18ed241a537f3f78c441cb1($context, $indent, $value);
                    $buffer .= '</p>
';
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8091c2e9c2e1bf03aeeeaf3deda1328d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#displayeventsource}}
        <div class="row mt-1">
            <div class="col-1">{{#pix}} i/rss, core, {{#str}} eventsource, core_calendar {{/str}} {{/pix}}</div>
            <div class="col-11">
                {{#subscriptionurl}}
                    <p><a href="{{subscriptionurl}}">{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</a></p>
                {{/subscriptionurl}}
                {{^subscriptionurl}}
                    <p>{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</p>
                {{/subscriptionurl}}
            </div>
        </div>
    {{/displayeventsource}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('displayeventsource');
                $buffer .= $this->section83b40ecedd943083bf2de93e330e659b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
