<?php

class __Mustache_fafb160ecdac9f7b3296257d24a70ed5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('alert'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="list-page" id="customfield_catlist" data-component="';
        $value = $this->resolveValue($context->find('component'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-area="';
        $value = $this->resolveValue($context->find('area'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-itemid="';
        $value = $this->resolveValue($context->find('itemid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col align-self-end">
';
        $value = $context->find('usescategories');
        $buffer .= $this->sectionEea2e7a806469246b4e7acd51a95a2ea($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('categories');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('nocategories'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="categorieslist">
';
        $value = $context->find('categories');
        $buffer .= $this->section67e45a1068c7d5943fcee8d213f1cf86($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section01e46618f9f329b360adf4164e7cfe84($context, $indent, $value);

        return $buffer;
    }

    private function section654906d41735a90f4ccc1b3b48c4d392(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addnewcategory, core_customfield';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addnewcategory, core_customfield';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEea2e7a806469246b4e7acd51a95a2ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a tabindex="0" role="button" class="btn btn-secondary float-right" data-role="addnewcategory">{{#str}}addnewcategory, core_customfield{{/str}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a tabindex="0" role="button" class="btn btn-secondary float-right" data-role="addnewcategory">';
                $value = $context->find('str');
                $buffer .= $this->section654906d41735a90f4ccc1b3b48c4d392($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe7210e7e5a6dd24d897ba1cbdd9b0ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' delete, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' delete, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f61e84702ef9af360393cfd79b99c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            t/delete, core, {{#str}} delete, moodle {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                            t/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAe7210e7e5a6dd24d897ba1cbdd9b0ee($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07e3683d6c0076844592df112afc91e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <h3>
                        <span class="movecategory">
                        {{> core/drag_handle}}</span>{{{nameeditable}}}
                        <a href="#" data-role="deletecategory" data-id="{{id}}">{{#pix}}
                            t/delete, core, {{#str}} delete, moodle {{/str}} {{/pix}}</a>
                    </h3>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <h3>
';
                $buffer .= $indent . '                        <span class="movecategory">
';
                $buffer .= $indent . '                        ';
                if ($partial = $this->mustache->loadPartial('core/drag_handle')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>';
                $value = $this->resolveValue($context->find('nameeditable'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        <a href="#" data-role="deletecategory" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->section35f61e84702ef9af360393cfd79b99c4($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf331c9657c9bc5ab86155306f181af5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' customfield, core_customfield ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' customfield, core_customfield ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2b6e712308df9a7d12e91cf84bb49da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' shortname, core_customfield ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' shortname, core_customfield ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD50b7afe4725d0b25df6b85bb45e7751(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' type, core_customfield ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' type, core_customfield ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4bc6153e9d92c4347801ad27b777f65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' action, core_customfield ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' action, core_customfield ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02ab79ea60231c0cc93762b24348518c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7eaf20273b0c4969acc11423dca0559(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                t/edit, core, {{#str}} edit, moodle {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                                t/edit, core, ';
                $value = $context->find('str');
                $buffer .= $this->section02ab79ea60231c0cc93762b24348518c($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51dc1f9c667536942852608d095a8302(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                t/delete, core, {{#str}} delete, moodle {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                                t/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAe7210e7e5a6dd24d897ba1cbdd9b0ee($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7013c2ccf269ce45c824c12b0be0018c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr data-field-name="{{name}}" data-field-id="{{id}}"  class="field">
                        <td class="col-5"><span class="movefield">{{> core/drag_handle}}</span>{{{name}}}</td>
                        <td class="col-3">{{{shortname}}}</td>
                        <td class="col-2">{{{type}}}</td>
                        <td class="col-2 text-right">
                            <a href="#" data-role="editfield" data-name="{{name}}" data-id="{{id}}">{{#pix}}
                                t/edit, core, {{#str}} edit, moodle {{/str}} {{/pix}}</a>
                            <a href="#" data-id="{{id}}" data-role="deletefield">{{#pix}}
                                t/delete, core, {{#str}} delete, moodle {{/str}} {{/pix}}</a>
                        </td>
                    </tr>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr data-field-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-field-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"  class="field">
';
                $buffer .= $indent . '                        <td class="col-5"><span class="movefield">';
                if ($partial = $this->mustache->loadPartial('core/drag_handle')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class="col-3">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class="col-2">';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class="col-2 text-right">
';
                $buffer .= $indent . '                            <a href="#" data-role="editfield" data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->sectionF7eaf20273b0c4969acc11423dca0559($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            <a href="#" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-role="deletefield">';
                $value = $context->find('pix');
                $buffer .= $this->section51dc1f9c667536942852608d095a8302($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67e45a1068c7d5943fcee8d213f1cf86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-category-id="{{id}}" id="category-{{id}}" class="mt-2">
        <div class="row justify-content-between align-items-end">
            <div class="col-6 categoryinstance">
                {{#usescategories}}
                    <h3>
                        <span class="movecategory">
                        {{> core/drag_handle}}</span>{{{nameeditable}}}
                        <a href="#" data-role="deletecategory" data-id="{{id}}">{{#pix}}
                            t/delete, core, {{#str}} delete, moodle {{/str}} {{/pix}}</a>
                    </h3>
                {{/usescategories}}
            </div>
            <div class="col-auto text-right">
                {{{addfieldmenu}}}
            </div>
        </div>
        <div>
            <table class="generaltable fullwidth fieldslist">
                <thead>
                <tr>
                    <th scope="col" class="col-5">{{#str}} customfield, core_customfield {{/str}}</th>
                    <th scope="col" class="col-3">{{#str}} shortname, core_customfield {{/str}}</th>
                    <th scope="col" class="col-2">{{#str}} type, core_customfield {{/str}}</th>
                    <th scope="col" class="col-2 text-right">{{#str}} action, core_customfield {{/str}}</th>
                </tr>
                </thead>
                <tbody>
                {{#fields}}
                    <tr data-field-name="{{name}}" data-field-id="{{id}}"  class="field">
                        <td class="col-5"><span class="movefield">{{> core/drag_handle}}</span>{{{name}}}</td>
                        <td class="col-3">{{{shortname}}}</td>
                        <td class="col-2">{{{type}}}</td>
                        <td class="col-2 text-right">
                            <a href="#" data-role="editfield" data-name="{{name}}" data-id="{{id}}">{{#pix}}
                                t/edit, core, {{#str}} edit, moodle {{/str}} {{/pix}}</a>
                            <a href="#" data-id="{{id}}" data-role="deletefield">{{#pix}}
                                t/delete, core, {{#str}} delete, moodle {{/str}} {{/pix}}</a>
                        </td>
                    </tr>
                {{/fields}}
                {{^fields}}
                    {{> core_customfield/nofields }}
                {{/fields}}
                </tbody>
            </table>
        </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-category-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="category-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="mt-2">
';
                $buffer .= $indent . '        <div class="row justify-content-between align-items-end">
';
                $buffer .= $indent . '            <div class="col-6 categoryinstance">
';
                $value = $context->find('usescategories');
                $buffer .= $this->section07e3683d6c0076844592df112afc91e6($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="col-auto text-right">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('addfieldmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <table class="generaltable fullwidth fieldslist">
';
                $buffer .= $indent . '                <thead>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <th scope="col" class="col-5">';
                $value = $context->find('str');
                $buffer .= $this->sectionEf331c9657c9bc5ab86155306f181af5($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col" class="col-3">';
                $value = $context->find('str');
                $buffer .= $this->sectionC2b6e712308df9a7d12e91cf84bb49da($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col" class="col-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionD50b7afe4725d0b25df6b85bb45e7751($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col" class="col-2 text-right">';
                $value = $context->find('str');
                $buffer .= $this->sectionE4bc6153e9d92c4347801ad27b777f65($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '                </thead>
';
                $buffer .= $indent . '                <tbody>
';
                $value = $context->find('fields');
                $buffer .= $this->section7013c2ccf269ce45c824c12b0be0018c($context, $indent, $value);
                $value = $context->find('fields');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('core_customfield/nofields')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $buffer .= $indent . '                </tbody>
';
                $buffer .= $indent . '            </table>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01e46618f9f329b360adf4164e7cfe84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_customfield/form\'], function(s) {
        s.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_customfield/form\'], function(s) {
';
                $buffer .= $indent . '        s.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
