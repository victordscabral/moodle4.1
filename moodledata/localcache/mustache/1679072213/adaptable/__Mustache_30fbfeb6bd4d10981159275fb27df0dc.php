<?php

class __Mustache_30fbfeb6bd4d10981159275fb27df0dc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('competencycount');
        $buffer .= $this->section24483f379c5ba3dfe7f23236fb8b36c0($context, $indent, $value);

        return $buffer;
    }

    private function sectionAe94f3c7f26852b54ed1cb700c10d3e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xcompetencieslinkedoutofy, tool_lp, { "x": "{{linkedcompetencycount}}", "y": "{{competencycount}}" } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xcompetencieslinkedoutofy, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('linkedcompetencycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('competencycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section595c8911fc8cd0d7e5f3c7a127ba1188(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xplanscompletedoutofy, tool_lp, { "x": "{{completedplancount}}", "y": "{{plancount}}" } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xplanscompletedoutofy, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('completedplancount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('plancount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaccdc49b293c2629392101943aaadee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xplanscompletedoutofy, tool_lp, { "x": "{{completedplancount}}", "y": "{{plancount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{completedplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{completedplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'blockFf784cee70d7e9bb6c5c90483dc6f531'),
                        'percentage' => array($this, 'block745d1d22dd14941a3b200693af2aae23'),
                        'percentlabel' => array($this, 'block2d6e9ef39a32ec2c8fe5eeaf832709b9'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB59ef61de4558aae303d052154bbd5f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'averageproficiencyrate, tool_lp, {{proficientusercompetencyplanpercentageformatted}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'averageproficiencyrate, tool_lp, ';
                $value = $this->resolveValue($context->find('proficientusercompetencyplanpercentageformatted'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4455de4f4a62c99d0b1e95d644e65b44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}averageproficiencyrate, tool_lp, {{proficientusercompetencyplanpercentageformatted}} {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientusercompetencyplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientusercompetencyplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'block4f0a4b7ad0c71760d9472e8d1749aaf6'),
                        'percentage' => array($this, 'block5780b7d106acf39e707ef742dd664e98'),
                        'percentlabel' => array($this, 'blockEf8cc8f050f190d8dcb67c9abe91ec2e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7137b26b8f6b76f90efdf5949b9c3237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competenciesmostoftennotproficient, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'competenciesmostoftennotproficient, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49511c6cdf3cfc0a1af8b1f7137f6706(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="#competency_link_{{id}}">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="#competency_link_';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcc9158379a36c5f64afec22d3f159b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a23b80fc015136651f03bb847336a5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#showcompetencylinks}}
                <a href="#competency_link_{{id}}">
                {{/showcompetencylinks}}
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                {{#showcompetencylinks}}
                </a>
                {{/showcompetencylinks}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showcompetencylinks');
                $buffer .= $this->section49511c6cdf3cfc0a1af8b1f7137f6706($context, $indent, $value);
                $buffer .= $indent . '                <div><p>';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <em>';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</em></p></div>
';
                $value = $context->find('showcompetencylinks');
                $buffer .= $this->sectionCcc9158379a36c5f64afec22d3f159b2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a1efe6bfdab69242e7f0f837d3ef8af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficient, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                {{#showcompetencylinks}}
                <a href="#competency_link_{{id}}">
                {{/showcompetencylinks}}
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                {{#showcompetencylinks}}
                </a>
                {{/showcompetencylinks}}
            {{/leastproficient}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '    <div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <p>';
                $value = $context->find('str');
                $buffer .= $this->section7137b26b8f6b76f90efdf5949b9c3237($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                $value = $context->find('leastproficient');
                $buffer .= $this->section5a23b80fc015136651f03bb847336a5a($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24483f379c5ba3dfe7f23236fb8b36c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="templatestatistics" class="border p-2 mb-2">
    {{< tool_lp/progress_bar}}
        {{$progresstext}}
            {{#str}}xcompetencieslinkedoutofy, tool_lp, { "x": "{{linkedcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
        {{/progresstext}}
        {{$percentage}}{{linkedcompetencypercentage}}{{/percentage}}
        {{$percentlabel}}{{linkedcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
    {{/tool_lp/progress_bar}}
    {{#plancount}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xplanscompletedoutofy, tool_lp, { "x": "{{completedplancount}}", "y": "{{plancount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{completedplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{completedplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/plancount}}
    {{#usercompetencyplancount}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}averageproficiencyrate, tool_lp, {{proficientusercompetencyplanpercentageformatted}} {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientusercompetencyplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientusercompetencyplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/usercompetencyplancount}}
    {{#leastproficientcount}}
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficient, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                {{#showcompetencylinks}}
                <a href="#competency_link_{{id}}">
                {{/showcompetencylinks}}
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                {{#showcompetencylinks}}
                </a>
                {{/showcompetencylinks}}
            {{/leastproficient}}
        </div>
    </div>
    {{/leastproficientcount}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-region="templatestatistics" class="border p-2 mb-2">
';
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'block20a03c85aa8365800b52af9fa638fb47'),
                        'percentage' => array($this, 'block4ce5dfd7fad2c8c1da85587e1613067d'),
                        'percentlabel' => array($this, 'blockA199c49ecd9b57299d87193f223e5716'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $value = $context->find('plancount');
                $buffer .= $this->sectionAaccdc49b293c2629392101943aaadee($context, $indent, $value);
                $value = $context->find('usercompetencyplancount');
                $buffer .= $this->section4455de4f4a62c99d0b1e95d644e65b44($context, $indent, $value);
                $value = $context->find('leastproficientcount');
                $buffer .= $this->section4a1efe6bfdab69242e7f0f837d3ef8af($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block20a03c85aa8365800b52af9fa638fb47($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        $value = $context->find('str');
        $buffer .= $this->sectionAe94f3c7f26852b54ed1cb700c10d3e0($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block4ce5dfd7fad2c8c1da85587e1613067d($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('linkedcompetencypercentage'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockA199c49ecd9b57299d87193f223e5716($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('linkedcompetencypercentageformatted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }

    public function blockFf784cee70d7e9bb6c5c90483dc6f531($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $context->find('str');
        $buffer .= $this->section595c8911fc8cd0d7e5f3c7a127ba1188($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block745d1d22dd14941a3b200693af2aae23($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('completedplanpercentage'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block2d6e9ef39a32ec2c8fe5eeaf832709b9($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('completedplanpercentageformatted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }

    public function block4f0a4b7ad0c71760d9472e8d1749aaf6($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionB59ef61de4558aae303d052154bbd5f0($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block5780b7d106acf39e707ef742dd664e98($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientusercompetencyplanpercentage'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockEf8cc8f050f190d8dcb67c9abe91ec2e($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientusercompetencyplanpercentageformatted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }
}
