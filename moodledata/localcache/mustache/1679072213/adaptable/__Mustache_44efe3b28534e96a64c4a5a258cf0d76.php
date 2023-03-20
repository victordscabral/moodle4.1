<?php

class __Mustache_44efe3b28534e96a64c4a5a258cf0d76 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('warnings');
        $buffer .= $this->sectionA5f732fc92c79feae20c6f6e590c7db6($context, $indent, $value);
        $value = $context->find('infos');
        $buffer .= $this->section8cc80b38caaa57affb95dc73d9a9fdb4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="box">
';
        $buffer .= $indent . '    <div class="top-nav d-flex">
';
        $value = $context->find('newmodelmenu');
        $buffer .= $this->section62d810b13fd7ffe401815393ad03677c($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <table id="predictionmodelslist" class="generaltable fullwidth">
';
        $buffer .= $indent . '        <caption>';
        $value = $context->find('str');
        $buffer .= $this->sectionDf32515729290fbc1ed658bbe79eedc6($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section6a211723783b727ffbc951a76aea0f38($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionE00a790b87dcca7916d70bf9a1e78224($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionDc5b56ebf3e634838511c5aef3b01995($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section45ab0cdf6c79dc9cd35f81173520ac84($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section150c504581e957d5fca6fb36165c7b8c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section2ad2fdcc9b858451e82e60edfcdcf48d($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        $value = $context->find('models');
        $buffer .= $this->sectionB8136e36e9dc827bacc1c8ae1339c8e3($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section7867d163e4708ebaafb9864b2ca51dae($context, $indent, $value);

        return $buffer;
    }

    private function sectionA5f732fc92c79feae20c6f6e590c7db6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_warning}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_warning')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cc80b38caaa57affb95dc73d9a9fdb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_info}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62d810b13fd7ffe401815393ad03677c(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf32515729290fbc1ed658bbe79eedc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'analyticmodels, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'analyticmodels, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a211723783b727ffbc951a76aea0f38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'modelname, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'modelname, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE00a790b87dcca7916d70bf9a1e78224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enabled, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'enabled, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc5b56ebf3e634838511c5aef3b01995(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'indicators, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'indicators, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45ab0cdf6c79dc9cd35f81173520ac84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'modeltimesplitting, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'modeltimesplitting, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section150c504581e957d5fca6fb36165c7b8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'insights, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'insights, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ad2fdcc9b858451e82e60edfcdcf48d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'actions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a166bd7630c0d5bf630d7c5796339f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="model-name">{{>core/inplace_editable}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="model-name">';
                if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c74390ddf3bc71fbd0c6afbe0ccd21d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>core/help_icon}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d56240b217f929d4677ce34bb80d3a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yes';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'yes';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17d96d37069abe003ef139f3bb9a5f04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/checked, core, {{#str}}yes{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/checked, core, ';
                $value = $context->find('str');
                $buffer .= $this->section0d56240b217f929d4677ce34bb80d3a8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fb9326bd098ed77c2e9b9dfe0f3fce4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}i/checked, core, {{#str}}yes{{/str}}{{/pix}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section17d96d37069abe003ef139f3bb9a5f04($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0ac7f20e9de08dda74d7d5716455c77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'no';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'no';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13c763d16daa767e9f95a21afcc52783(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clicktohideshow ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' clicktohideshow ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section394c83e885ccb37ad872eab4b123f72a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' indicatorsnum, tool_analytics, {{indicatorsnum}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' indicatorsnum, tool_analytics, ';
                $value = $this->resolveValue($context->find('indicatorsnum'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6514d6aa5d81a9a4f55e29b386701c52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{>core/help_icon}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9c42710e3eb687f1dee00ac18ab6dd3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            {{name}}
                            {{#help}}
                                {{>core/help_icon}}
                            {{/help}}
                        </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $value = $context->find('help');
                $buffer .= $this->section6514d6aa5d81a9a4f55e29b386701c52($context, $indent, $value);
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB51f4664d1edcb218160609e48c7d602(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{timesplitting}}
                        {{#timesplittinghelp}}
                            {{>core/help_icon}}
                        {{/timesplittinghelp}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('timesplitting'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $value = $context->find('timesplittinghelp');
                $buffer .= $this->section1c74390ddf3bc71fbd0c6afbe0ccd21d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0abb70ae18750ddd8e47a6e9b7be6c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notdefined, tool_analytics';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notdefined, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf5268e4ff93a003e0739803ecb5f63d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/single_select }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5f0206ce258af4c1be318e3027092f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{.}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa368b13d36df95dfc90917d6f84e164(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/action_menu}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8136e36e9dc827bacc1c8ae1339c8e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr data-model-name="{{modelname}}">
                <td>
                    {{#name}}
                        <span class="model-name">{{>core/inplace_editable}}</span>
                    {{/name}}
                    <div>
                        <small class="target-class">{{targetclass}}</small>
                        {{#targethelp}}
                            {{>core/help_icon}}
                        {{/targethelp}}
                    </div>
                </td>
                <td>
                    {{#enabled}}
                        {{#pix}}i/checked, core, {{#str}}yes{{/str}}{{/pix}}
                    {{/enabled}}
                    {{^enabled}}
                        {{#str}}no{{/str}}
                    {{/enabled}}
                </td>
                <td>
                    <a data-widget="toggle"
                           title="{{#str}} clicktohideshow {{/str}}"
                           aria-expanded="false"
                           aria-controls="indicators-{{id}}"
                           role="button"
                           href="">
                        {{#str}} indicatorsnum, tool_analytics, {{indicatorsnum}} {{/str}}
                    </a>
                    <ul class="hidden" id="indicators-{{id}}">
                    {{#indicators}}
                        <li>
                            {{name}}
                            {{#help}}
                                {{>core/help_icon}}
                            {{/help}}
                        </li>
                    {{/indicators}}
                    </ul>
                </td>
                <td>
                    {{#timesplitting}}
                        {{timesplitting}}
                        {{#timesplittinghelp}}
                            {{>core/help_icon}}
                        {{/timesplittinghelp}}
                    {{/timesplitting}}
                    {{^timesplitting}}
                        {{#str}}notdefined, tool_analytics{{/str}}
                        {{#timesplittinghelp}}
                            {{>core/help_icon}}
                        {{/timesplittinghelp}}
                    {{/timesplitting}}
                </td>
                <td>
                    {{! models_list renderer is responsible of sending one or the other}}
                    {{#insights}}
                        {{> core/single_select }}
                    {{/insights}}
                    {{#noinsights}}
                        {{.}}
                    {{/noinsights}}
                </td>
                <td>
                    {{#actions}}
                        {{> core/action_menu}}
                    {{/actions}}
                </td>
            </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <tr data-model-name="';
                $value = $this->resolveValue($context->find('modelname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <td>
';
                $value = $context->find('name');
                $buffer .= $this->section2a166bd7630c0d5bf630d7c5796339f6($context, $indent, $value);
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        <small class="target-class">';
                $value = $this->resolveValue($context->find('targetclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</small>
';
                $value = $context->find('targethelp');
                $buffer .= $this->section1c74390ddf3bc71fbd0c6afbe0ccd21d($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                $value = $context->find('enabled');
                $buffer .= $this->section3fb9326bd098ed77c2e9b9dfe0f3fce4($context, $indent, $value);
                $value = $context->find('enabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD0ac7f20e9de08dda74d7d5716455c77($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                $buffer .= $indent . '                    <a data-widget="toggle"
';
                $buffer .= $indent . '                           title="';
                $value = $context->find('str');
                $buffer .= $this->section13c763d16daa767e9f95a21afcc52783($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                           aria-expanded="false"
';
                $buffer .= $indent . '                           aria-controls="indicators-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                           role="button"
';
                $buffer .= $indent . '                           href="">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section394c83e885ccb37ad872eab4b123f72a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    <ul class="hidden" id="indicators-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('indicators');
                $buffer .= $this->sectionA9c42710e3eb687f1dee00ac18ab6dd3($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                $value = $context->find('timesplitting');
                $buffer .= $this->sectionB51f4664d1edcb218160609e48c7d602($context, $indent, $value);
                $value = $context->find('timesplitting');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD0abb70ae18750ddd8e47a6e9b7be6c7($context, $indent, $value);
                    $buffer .= '
';
                    $value = $context->find('timesplittinghelp');
                    $buffer .= $this->section1c74390ddf3bc71fbd0c6afbe0ccd21d($context, $indent, $value);
                }
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                $value = $context->find('insights');
                $buffer .= $this->sectionCf5268e4ff93a003e0739803ecb5f63d($context, $indent, $value);
                $value = $context->find('noinsights');
                $buffer .= $this->sectionE5f0206ce258af4c1be318e3027092f7($context, $indent, $value);
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                $value = $context->find('actions');
                $buffer .= $this->sectionEa368b13d36df95dfc90917d6f84e164($context, $indent, $value);
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7867d163e4708ebaafb9864b2ca51dae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {

    // Toggle the visibility of the indicators list.
    $(\'#predictionmodelslist\').on(\'click\', \'[data-widget="toggle"]\', function(e) {
        e.preventDefault();
        var toggle = $(e.currentTarget);
        var listid = toggle.attr(\'aria-controls\');

        $(document.getElementById(listid)).toggle();

        if (toggle.attr(\'aria-expanded\') == \'false\') {
            toggle.attr(\'aria-expanded\', \'true\');
        } else {
            toggle.attr(\'aria-expanded\', \'false\');
        }
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    // Toggle the visibility of the indicators list.
';
                $buffer .= $indent . '    $(\'#predictionmodelslist\').on(\'click\', \'[data-widget="toggle"]\', function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        var toggle = $(e.currentTarget);
';
                $buffer .= $indent . '        var listid = toggle.attr(\'aria-controls\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(document.getElementById(listid)).toggle();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        if (toggle.attr(\'aria-expanded\') == \'false\') {
';
                $buffer .= $indent . '            toggle.attr(\'aria-expanded\', \'true\');
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            toggle.attr(\'aria-expanded\', \'false\');
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
