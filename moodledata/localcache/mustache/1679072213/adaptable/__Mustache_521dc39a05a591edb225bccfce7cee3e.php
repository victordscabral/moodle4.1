<?php

class __Mustache_521dc39a05a591edb225bccfce7cee3e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="preferences-page-container">
';
        $buffer .= $indent . '    <h2>';
        $value = $context->find('str');
        $buffer .= $this->sectionF892fa52f6bd7f5881021e8392350eb1($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="preferences-container">
';
        $buffer .= $indent . '        <table class="table table-hover preference-table">
';
        $buffer .= $indent . '            <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th></th>
';
        $buffer .= $indent . '                    <th>';
        $value = $context->find('str');
        $buffer .= $this->section1f70090918056dd1de573f6fd55931ef($context, $indent, $value);
        $buffer .= '</th>
';
        $value = $context->find('processors');
        $buffer .= $this->section696eb9242a8fc7d3870ac0897b67f0c9($context, $indent, $value);
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </thead>
';
        $buffer .= $indent . '            <tbody>
';
        $value = $context->find('components');
        $buffer .= $this->section12e0c5af93af6235b9d8c1bb969d01d7($context, $indent, $value);
        $buffer .= $indent . '            </tbody>
';
        $buffer .= $indent . '        </table>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section34f5aaf0a81c4f4818815d12ddf19764($context, $indent, $value);

        return $buffer;
    }

    private function sectionF892fa52f6bd7f5881021e8392350eb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' managemessageoutputs, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' managemessageoutputs, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f70090918056dd1de573f6fd55931ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enabled, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enabled, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section696eb9242a8fc7d3870ac0897b67f0c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <th data-processor-name="{{name}}">{{{displayname}}}</th>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <th data-processor-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b0060da9667da720e6932d1b9543c15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' dimmed_text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c40371443847a86abb7aaf5b5f79a7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forced, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' forced, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54a4b255d0c5b71131cbd480a049787a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="text-left">
                                    <div data-preference="{{{enabledsetting}}}">
                                        <div class="custom-control custom-switch {{#locked}} dimmed_text{{/locked}} pb-1">
                                            <input type="checkbox"
                                                id="{{{enabledsetting}}}"
                                                name="{{{enabledsetting}}}"
                                                class="custom-control-input enabled_message_setting"
                                                {{#enabled}}checked{{/enabled}}
                                            >
                                            <label for="{{{enabledsetting}}}" class="custom-control-label"
                                                title="{{enabledlabel}}">
                                                {{#str}} enabled, core_message {{/str}}
                                            </label>
                                        </div>
                                    </div>
                                    <div data-preference="{{{lockedsetting}}}">
                                        <div class="custom-control custom-switch pt-1">
                                            <input type="checkbox"
                                                id="{{{lockedsetting}}}"
                                                name="{{{lockedsetting}}}"
                                                class="custom-control-input locked_message_setting"
                                                {{#locked}}checked{{/locked}}
                                            >
                                            <label for="{{{lockedsetting}}}" class="custom-control-label"
                                                title="{{lockedlabel}}">
                                                {{#str}} forced, core_message {{/str}}
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <td class="text-left">
';
                $buffer .= $indent . '                                    <div data-preference="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="custom-control custom-switch ';
                $value = $context->find('locked');
                $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                $buffer .= ' pb-1">
';
                $buffer .= $indent . '                                            <input type="checkbox"
';
                $buffer .= $indent . '                                                id="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                name="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                class="custom-control-input enabled_message_setting"
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('enabled');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            >
';
                $buffer .= $indent . '                                            <label for="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="custom-control-label"
';
                $buffer .= $indent . '                                                title="';
                $value = $this->resolveValue($context->find('enabledlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('str');
                $buffer .= $this->section1f70090918056dd1de573f6fd55931ef($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div data-preference="';
                $value = $this->resolveValue($context->find('lockedsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="custom-control custom-switch pt-1">
';
                $buffer .= $indent . '                                            <input type="checkbox"
';
                $buffer .= $indent . '                                                id="';
                $value = $this->resolveValue($context->find('lockedsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                name="';
                $value = $this->resolveValue($context->find('lockedsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                class="custom-control-input locked_message_setting"
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('locked');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            >
';
                $buffer .= $indent . '                                            <label for="';
                $value = $this->resolveValue($context->find('lockedsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="custom-control-label"
';
                $buffer .= $indent . '                                                title="';
                $value = $this->resolveValue($context->find('lockedlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('str');
                $buffer .= $this->section0c40371443847a86abb7aaf5b5f79a7b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF287764345644398b8d3ce2c4c51039d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr class="defaultmessageoutputs">
                            <td>{{{displayname}}}</td>
                            <td>
                                <div data-preference="{{{enabledsetting}}}">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox"
                                            id="{{{enabledsetting}}}"
                                            name="{{{enabledsetting}}}"
                                            class="custom-control-input provider_enabled"
                                            {{#enabled}}checked{{/enabled}}
                                        >
                                        <label for="{{{enabledsetting}}}" class="custom-control-label"
                                            title="{{enabledlabel}}">
                                            <span class="accesshide">{{enabledlabel}}</span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                            {{#settings}}
                                <td class="text-left">
                                    <div data-preference="{{{enabledsetting}}}">
                                        <div class="custom-control custom-switch {{#locked}} dimmed_text{{/locked}} pb-1">
                                            <input type="checkbox"
                                                id="{{{enabledsetting}}}"
                                                name="{{{enabledsetting}}}"
                                                class="custom-control-input enabled_message_setting"
                                                {{#enabled}}checked{{/enabled}}
                                            >
                                            <label for="{{{enabledsetting}}}" class="custom-control-label"
                                                title="{{enabledlabel}}">
                                                {{#str}} enabled, core_message {{/str}}
                                            </label>
                                        </div>
                                    </div>
                                    <div data-preference="{{{lockedsetting}}}">
                                        <div class="custom-control custom-switch pt-1">
                                            <input type="checkbox"
                                                id="{{{lockedsetting}}}"
                                                name="{{{lockedsetting}}}"
                                                class="custom-control-input locked_message_setting"
                                                {{#locked}}checked{{/locked}}
                                            >
                                            <label for="{{{lockedsetting}}}" class="custom-control-label"
                                                title="{{lockedlabel}}">
                                                {{#str}} forced, core_message {{/str}}
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            {{/settings}}
                        </tr>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <tr class="defaultmessageoutputs">
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td>
';
                $buffer .= $indent . '                                <div data-preference="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="custom-control custom-switch">
';
                $buffer .= $indent . '                                        <input type="checkbox"
';
                $buffer .= $indent . '                                            id="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            name="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            class="custom-control-input provider_enabled"
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('enabled');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        >
';
                $buffer .= $indent . '                                        <label for="';
                $value = $this->resolveValue($context->find('enabledsetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="custom-control-label"
';
                $buffer .= $indent . '                                            title="';
                $value = $this->resolveValue($context->find('enabledlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                            <span class="accesshide">';
                $value = $this->resolveValue($context->find('enabledlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </label>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </td>
';
                $value = $context->find('settings');
                $buffer .= $this->section54a4b255d0c5b71131cbd480a049787a($context, $indent, $value);
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12e0c5af93af6235b9d8c1bb969d01d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr class="preference-row"><th colspan="{{{colspan}}}">{{{displayname}}}</th></tr>
                    {{#providers}}
                        <tr class="defaultmessageoutputs">
                            <td>{{{displayname}}}</td>
                            <td>
                                <div data-preference="{{{enabledsetting}}}">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox"
                                            id="{{{enabledsetting}}}"
                                            name="{{{enabledsetting}}}"
                                            class="custom-control-input provider_enabled"
                                            {{#enabled}}checked{{/enabled}}
                                        >
                                        <label for="{{{enabledsetting}}}" class="custom-control-label"
                                            title="{{enabledlabel}}">
                                            <span class="accesshide">{{enabledlabel}}</span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                            {{#settings}}
                                <td class="text-left">
                                    <div data-preference="{{{enabledsetting}}}">
                                        <div class="custom-control custom-switch {{#locked}} dimmed_text{{/locked}} pb-1">
                                            <input type="checkbox"
                                                id="{{{enabledsetting}}}"
                                                name="{{{enabledsetting}}}"
                                                class="custom-control-input enabled_message_setting"
                                                {{#enabled}}checked{{/enabled}}
                                            >
                                            <label for="{{{enabledsetting}}}" class="custom-control-label"
                                                title="{{enabledlabel}}">
                                                {{#str}} enabled, core_message {{/str}}
                                            </label>
                                        </div>
                                    </div>
                                    <div data-preference="{{{lockedsetting}}}">
                                        <div class="custom-control custom-switch pt-1">
                                            <input type="checkbox"
                                                id="{{{lockedsetting}}}"
                                                name="{{{lockedsetting}}}"
                                                class="custom-control-input locked_message_setting"
                                                {{#locked}}checked{{/locked}}
                                            >
                                            <label for="{{{lockedsetting}}}" class="custom-control-label"
                                                title="{{lockedlabel}}">
                                                {{#str}} forced, core_message {{/str}}
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            {{/settings}}
                        </tr>
                    {{/providers}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr class="preference-row"><th colspan="';
                $value = $this->resolveValue($context->find('colspan'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</th></tr>
';
                $value = $context->find('providers');
                $buffer .= $this->sectionF287764345644398b8d3ce2c4c51039d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34f5aaf0a81c4f4818815d12ddf19764(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_message/default_notification_preferences\'], function(NotificationPreferences) {
        NotificationPreferences.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_message/default_notification_preferences\'], function(NotificationPreferences) {
';
                $buffer .= $indent . '        NotificationPreferences.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
