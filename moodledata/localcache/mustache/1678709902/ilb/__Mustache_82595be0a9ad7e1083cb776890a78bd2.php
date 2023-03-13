<?php

class __Mustache_82595be0a9ad7e1083cb776890a78bd2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h3 class="mt-3">';
        $value = $context->find('str');
        $buffer .= $this->sectionE0edec52e6aa6a787a32d1816537f180($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link active" id="contenttypes-tab" data-toggle="tab" href="#contenttypes" role="tab" aria-controls="contenttypes" aria-selected="true">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section39283ddde2664de5ee9dda3dbc717a4e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link" id="libraries-tab" data-toggle="tab" href="#libraries" role="tab" aria-controls="libraries" aria-selected="false">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->sectionC546fb6becb189c78f8cdb991b22b854($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '<div class="tab-content" id="myTabContent">
';
        $buffer .= $indent . '    <div class="tab-pane fade show active" id="contenttypes" role="tabpanel" aria-labelledby="contenttypes-tab">
';
        $buffer .= $indent . '        <div class="overview px-3 mb-5">
';
        $buffer .= $indent . '            <table class="admintable generaltable" id="h5pcontenttypes">
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                    <tr>
';
        $buffer .= $indent . '                        <th style="width: 5%">';
        $value = $context->find('str');
        $buffer .= $this->sectionE10d71fb8e13a9fa82c08ab93ea67897($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                        <th>';
        $value = $context->find('str');
        $buffer .= $this->section4490f2b0797ce784552fdf9a35fb25ae($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                        <th>';
        $value = $context->find('str');
        $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                        <th aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB47df06fe6cc9d678318db30c26a9a0f($context, $indent, $value);
        $buffer .= '"></th>
';
        $buffer .= $indent . '                    </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '                <tbody>
';
        $value = $context->find('contenttypes');
        $buffer .= $this->sectionFb84cb590bb4c13af84d3aae4d86be71($context, $indent, $value);
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="tab-pane fade" id="libraries" role="tabpanel" aria-labelledby="libraries-tab">
';
        $buffer .= $indent . '        <div class="overview px-3 mb-5">
';
        $buffer .= $indent . '            <table class="admintable generaltable" id="h5plibraries">
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                    <tr>
';
        $buffer .= $indent . '                        <th>';
        $value = $context->find('str');
        $buffer .= $this->section4490f2b0797ce784552fdf9a35fb25ae($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                        <th>';
        $value = $context->find('str');
        $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                        <th aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB47df06fe6cc9d678318db30c26a9a0f($context, $indent, $value);
        $buffer .= '"></th>
';
        $buffer .= $indent . '                    </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '                <tbody>
';
        $value = $context->find('contenttypes');
        $buffer .= $this->section2e9ba3380b0544831145f91cba16ab98($context, $indent, $value);
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE0edec52e6aa6a787a32d1816537f180(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' installedh5p, h5p ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' installedh5p, h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39283ddde2664de5ee9dda3dbc717a4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' installedcontenttypes, h5p ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' installedcontenttypes, h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC546fb6becb189c78f8cdb991b22b854(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' installedcontentlibraries, h5p ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' installedcontentlibraries, h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE10d71fb8e13a9fa82c08ab93ea67897(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enable, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'enable, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4490f2b0797ce784552fdf9a35fb25ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'description, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'description, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB47df06fe6cc9d678318db30c26a9a0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, core_h5p';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'actions, core_h5p';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6da6dc76d7d0c09e2bca6a83a9b2369a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disable, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disable, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19e56243cfa2315efd516f8c225c8026(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc0cd08fe3aaa1e228e7fcfe4e6d9bb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/hide, core,{{#str}}disable{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/hide, core,';
                $value = $context->find('str');
                $buffer .= $this->section19e56243cfa2315efd516f8c225c8026($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section490ab78e0080f66919eabf9ced8861da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{toggleenabledurl}}}" aria-label="{{#str}}disable, core{{/str}}">{{#pix}}t/hide, core,{{#str}}disable{{/str}}{{/pix}}</a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('toggleenabledurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section6da6dc76d7d0c09e2bca6a83a9b2369a($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->sectionCc0cd08fe3aaa1e228e7fcfe4e6d9bb9($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6f9f8231d272fd6146e9a88a566dd46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'enable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section980c1e7599e2a50764866558d5f3656f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/show, core,{{#str}}enable{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/show, core,';
                $value = $context->find('str');
                $buffer .= $this->sectionE6f9f8231d272fd6146e9a88a566dd46($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4be0db179deafea435c016d7fdbdd44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <img alt=""
                                         class="icon iconsize-big"
                                         src="{{{ icon }}}">
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <img alt=""
';
                $buffer .= $indent . '                                         class="icon iconsize-big"
';
                $buffer .= $indent . '                                         src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB99149906c83356a14a4ab8af54979fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' b/h5p_library, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' b/h5p_library, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e0124bda07da83921044a0548e6c75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{>core/action_menu}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdb96145a936aa550d18f00b53dadcec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr class="">
                            <td class="text-center">
                            {{#enabled}}
                                <a href="{{{toggleenabledurl}}}" aria-label="{{#str}}disable, core{{/str}}">{{#pix}}t/hide, core,{{#str}}disable{{/str}}{{/pix}}</a>
                            {{/enabled}}
                            {{^enabled}}
                                <a href="{{{toggleenabledurl}}}" aria-label="{{#str}}enable, core{{/str}}">{{#pix}}t/show, core,{{#str}}enable{{/str}}{{/pix}}</a>
                            {{/enabled}}
                            </td>
                            <td>
                                {{#icon}}
                                    <img alt=""
                                         class="icon iconsize-big"
                                         src="{{{ icon }}}">
                                {{/icon}}
                                {{^icon}}
                                    {{#pix}} b/h5p_library, core {{/pix}}
                                {{/icon}}
                                {{{ title }}}
                            </td>
                            <td>{{{ major_version }}}.{{{ minor_version }}}.{{{ patch_version }}}</td>
                            <td>
                                {{#actionmenu}}
                                    {{>core/action_menu}}
                                {{/actionmenu}}
                            </td>
                        </tr>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <tr class="">
';
                $buffer .= $indent . '                            <td class="text-center">
';
                $value = $context->find('enabled');
                $buffer .= $this->section490ab78e0080f66919eabf9ced8861da($context, $indent, $value);
                $value = $context->find('enabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="';
                    $value = $this->resolveValue($context->find('toggleenabledurl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionE10d71fb8e13a9fa82c08ab93ea67897($context, $indent, $value);
                    $buffer .= '">';
                    $value = $context->find('pix');
                    $buffer .= $this->section980c1e7599e2a50764866558d5f3656f($context, $indent, $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td>
';
                $value = $context->find('icon');
                $buffer .= $this->sectionD4be0db179deafea435c016d7fdbdd44($context, $indent, $value);
                $value = $context->find('icon');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionB99149906c83356a14a4ab8af54979fc($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('major_version'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '.';
                $value = $this->resolveValue($context->find('minor_version'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '.';
                $value = $this->resolveValue($context->find('patch_version'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td>
';
                $value = $context->find('actionmenu');
                $buffer .= $this->section40e0124bda07da83921044a0548e6c75($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb84cb590bb4c13af84d3aae4d86be71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#runnable}}
                        <tr class="">
                            <td class="text-center">
                            {{#enabled}}
                                <a href="{{{toggleenabledurl}}}" aria-label="{{#str}}disable, core{{/str}}">{{#pix}}t/hide, core,{{#str}}disable{{/str}}{{/pix}}</a>
                            {{/enabled}}
                            {{^enabled}}
                                <a href="{{{toggleenabledurl}}}" aria-label="{{#str}}enable, core{{/str}}">{{#pix}}t/show, core,{{#str}}enable{{/str}}{{/pix}}</a>
                            {{/enabled}}
                            </td>
                            <td>
                                {{#icon}}
                                    <img alt=""
                                         class="icon iconsize-big"
                                         src="{{{ icon }}}">
                                {{/icon}}
                                {{^icon}}
                                    {{#pix}} b/h5p_library, core {{/pix}}
                                {{/icon}}
                                {{{ title }}}
                            </td>
                            <td>{{{ major_version }}}.{{{ minor_version }}}.{{{ patch_version }}}</td>
                            <td>
                                {{#actionmenu}}
                                    {{>core/action_menu}}
                                {{/actionmenu}}
                            </td>
                        </tr>
                        {{/runnable}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('runnable');
                $buffer .= $this->sectionFdb96145a936aa550d18f00b53dadcec($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e9ba3380b0544831145f91cba16ab98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^runnable}}
                        <tr class="">
                            <td>
                                {{{ title }}}
                            </td>
                            <td>{{{ major_version }}}.{{{ minor_version }}}.{{{ patch_version }}}</td>
                            <td>
                                {{#actionmenu}}
                                    {{>core/action_menu}}
                                {{/actionmenu}}
                            </td>
                        </tr>
                        {{/runnable}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('runnable');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <tr class="">
';
                    $buffer .= $indent . '                            <td>
';
                    $buffer .= $indent . '                                ';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                            </td>
';
                    $buffer .= $indent . '                            <td>';
                    $value = $this->resolveValue($context->find('major_version'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '.';
                    $value = $this->resolveValue($context->find('minor_version'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '.';
                    $value = $this->resolveValue($context->find('patch_version'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</td>
';
                    $buffer .= $indent . '                            <td>
';
                    $value = $context->find('actionmenu');
                    $buffer .= $this->section40e0124bda07da83921044a0548e6c75($context, $indent, $value);
                    $buffer .= $indent . '                            </td>
';
                    $buffer .= $indent . '                        </tr>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
