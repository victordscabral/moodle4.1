<?php

class __Mustache_115e153f00865e49795ce95affbfb587 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="templatecompetenciespage">
';
        $buffer .= $indent . '    <h2>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('template.shortname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->findDot('template.canmanage');
        $buffer .= $this->section8d95b0298fc2c2d4ad99ac63b1270528($context, $indent, $value);
        $buffer .= $indent . '    </h2>
';
        $buffer .= $indent . '    <div>';
        $value = $this->resolveValue($context->findDot('template.description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $value = $context->find('canmanagetemplatecompetencies');
        $buffer .= $this->section880e8bb7d7c187bbbda17a45a0735c62($context, $indent, $value);
        $buffer .= $indent . '    <h3 class="mt-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionCecef47f24ab96d76209155f00a90f21($context, $indent, $value);
        $buffer .= '</h3>
';
        $value = $context->find('statistics');
        $buffer .= $this->section59827cc86d47c53a5d3b3a1fedba6193($context, $indent, $value);
        $buffer .= $indent . '    <div data-region="templatecompetencies">
';
        $buffer .= $indent . '        <div class="managecompetencies">
';
        $buffer .= $indent . '            <div class="drag-parentnode">
';
        $value = $context->find('competencies');
        $buffer .= $this->section81bc63133799ff9cfbd499221582bf62($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('competencies');
        if (empty($value)) {
            
            $buffer .= $indent . '        <p class="alert alert-info">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->sectionBff79f99a43b8eab5d9b9f1e961f1570($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </p>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="actions">
';
        $value = $context->find('canmanagecompetencyframeworks');
        $buffer .= $this->section1fbf3c868520ae65ed899015ac8b8bc4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section645072eedfdc8eb2718c95dc4af806dc($context, $indent, $value);

        return $buffer;
    }

    private function section083627aa7727faae88e993f15753f9c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edittemplate, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edittemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d73a06efd755fcc05019787e0171f1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}edittemplate, tool_lp{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core, ';
                $value = $context->find('str');
                $buffer .= $this->section083627aa7727faae88e993f15753f9c1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d95b0298fc2c2d4ad99ac63b1270528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/edittemplate.php?id={{template.id}}&amp;pagecontextid={{pagecontextid}}">{{#pix}}t/edit, core, {{#str}}edittemplate, tool_lp{{/str}}{{/pix}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/edittemplate.php?id=';
                $value = $this->resolveValue($context->findDot('template.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->section4d73a06efd755fcc05019787e0171f1d($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74c408bed971bae2754501c7f31c29df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addtemplatecompetencies, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addtemplatecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section880e8bb7d7c187bbbda17a45a0735c62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="actions" class="my-4">
        <button disabled class="btn btn-secondary">{{#str}}addtemplatecompetencies, tool_lp{{/str}}</button>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div data-region="actions" class="my-4">
';
                $buffer .= $indent . '        <button disabled class="btn btn-secondary">';
                $value = $context->find('str');
                $buffer .= $this->section74c408bed971bae2754501c7f31c29df($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCecef47f24ab96d76209155f00a90f21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templatecompetencies, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'templatecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59827cc86d47c53a5d3b3a1fedba6193(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> tool_lp/template_statistics }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_lp/template_statistics')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
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

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section366c78c8430f1694d2675c3fbcd46e52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="drag-handlecontainer float-left"></span>
                        <div class="float-sm-right">
                            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">{{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="drag-handlecontainer float-left"></span>
';
                $buffer .= $indent . '                        <div class="float-sm-right">
';
                $buffer .= $indent . '                            <a href="#" data-action="delete-competency-link" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe54f4b4fab8e365aa913d5c1742d204(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> tool_lp/competency_summary }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA09acaa8594cbc572e3991a994f33c9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'linkedcourseslist, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'linkedcourseslist, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section828249c38aeb47e52dd70b5cc6a14a8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="list-inline-item"><a href="{{viewurl}}?id={{id}}">{{{fullname}}} ({{{shortname}}})</a></li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' (';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ')</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f861676c0d4880ade25ca396549ca81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <ul class="inline list-inline">
                        {{#linkedcourses}}
                            <li class="list-inline-item"><a href="{{viewurl}}?id={{id}}">{{{fullname}}} ({{{shortname}}})</a></li>
                        {{/linkedcourses}}
                        </ul>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <ul class="inline list-inline">
';
                $value = $context->find('linkedcourses');
                $buffer .= $this->section828249c38aeb47e52dd70b5cc6a14a8c($context, $indent, $value);
                $buffer .= $indent . '                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87db60fdde5590abde9bb54d15b0323c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nolinkedcourses, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nolinkedcourses, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81bc63133799ff9cfbd499221582bf62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="drag-samenode" data-id="{{competency.id}}">
                    <div class="border p-2 mb-2">
                        {{#canmanagetemplatecompetencies}}
                        <span class="drag-handlecontainer float-left"></span>
                        <div class="float-sm-right">
                            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">{{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                        </div>
                        {{/canmanagetemplatecompetencies}}
                        {{#competency}}
                            {{> tool_lp/competency_summary }}
                        {{/competency}}
                        <strong>{{#str}}linkedcourseslist, tool_lp{{/str}}</strong>
                        {{#hascourses}}
                        <ul class="inline list-inline">
                        {{#linkedcourses}}
                            <li class="list-inline-item"><a href="{{viewurl}}?id={{id}}">{{{fullname}}} ({{{shortname}}})</a></li>
                        {{/linkedcourses}}
                        </ul>
                        {{/hascourses}}
                        {{^hascourses}}
                        <span class="badge badge-info">{{#str}}nolinkedcourses, tool_lp{{/str}}</span>
                        {{/hascourses}}
                    </div>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="drag-samenode" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="border p-2 mb-2">
';
                $value = $context->find('canmanagetemplatecompetencies');
                $buffer .= $this->section366c78c8430f1694d2675c3fbcd46e52($context, $indent, $value);
                $value = $context->find('competency');
                $buffer .= $this->sectionAe54f4b4fab8e365aa913d5c1742d204($context, $indent, $value);
                $buffer .= $indent . '                        <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionA09acaa8594cbc572e3991a994f33c9a($context, $indent, $value);
                $buffer .= '</strong>
';
                $value = $context->find('hascourses');
                $buffer .= $this->section0f861676c0d4880ade25ca396549ca81($context, $indent, $value);
                $value = $context->find('hascourses');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span class="badge badge-info">';
                    $value = $context->find('str');
                    $buffer .= $this->section87db60fdde5590abde9bb54d15b0323c($context, $indent, $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBff79f99a43b8eab5d9b9f1e961f1570(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesintemplate, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesintemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section162358c28b46626a5b0ef954763a36a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecompetenciesandframeworks, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'managecompetenciesandframeworks, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fbf3c868520ae65ed899015ac8b8bc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div>
            <p><a href="{{manageurl}}">{{#str}}managecompetenciesandframeworks, tool_lp{{/str}}</a></p>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <p><a href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section162358c28b46626a5b0ef954763a36a3($context, $indent, $value);
                $buffer .= '</a></p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section645072eedfdc8eb2718c95dc4af806dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencies\'], function(mod) {
    (new mod({{template.id}}, \'template\', {{pagecontextid}}));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/competencies\'], function(mod) {
';
                $buffer .= $indent . '    (new mod(';
                $value = $this->resolveValue($context->findDot('template.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', \'template\', ';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
