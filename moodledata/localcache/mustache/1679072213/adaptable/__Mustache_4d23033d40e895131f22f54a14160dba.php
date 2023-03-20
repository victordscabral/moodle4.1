<?php

class __Mustache_4d23033d40e895131f22f54a14160dba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/drawer')) {
            $context->pushBlockContext(array(
                'drawercontent' => array($this, 'block0f5b47ec174676b3e6dcfdc3fe418b29'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section1fcc04eff45f5b454bf5b8703c3f2ac3($context, $indent, $value);

        return $buffer;
    }

    private function section29c757f7e4b4143731d7f32ce8d916eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messages, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' messages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB69af701c3da068c4b63a9d598702913(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglemessagemenu, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglemessagemenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF47e3eea310cc7171a295986d00ab8d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/window_close, core, {{#str}} togglemessagemenu, message {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/window_close, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionB69af701c3da068c4b63a9d598702913($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fcc04eff45f5b454bf5b8703c3f2ac3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_message/message_drawer\', \'core_message/message_popover\'], function($, MessageDrawer, Popover) {
    var root = $(\'#message-drawer-{{uniqid}}\');
    MessageDrawer.init(root);

    var toggle = $(\'#message-drawer-close-{{uniqid}}\');
    Popover.init(toggle);
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_message/message_drawer\', \'core_message/message_popover\'], function($, MessageDrawer, Popover) {
';
                $buffer .= $indent . '    var root = $(\'#message-drawer-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    MessageDrawer.init(root);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var toggle = $(\'#message-drawer-close-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    Popover.init(toggle);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block0f5b47ec174676b3e6dcfdc3fe418b29($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="drawer-top p-2 border-bottom bg-messageheader">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section29c757f7e4b4143731d7f32ce8d916eb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <a id="message-drawer-close-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="pull-right" href="#" role="button">
';
        $buffer .= $indent . '                ';
        $value = $context->find('pix');
        $buffer .= $this->sectionF47e3eea310cc7171a295986d00ab8d9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="message-drawer-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="message-app" data-region="message-drawer" role="region">
';
        $buffer .= $indent . '            <div class="header-container position-relative" data-region="header-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="body-container position-relative" data-region="body-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contact_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_group_info_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="footer-container position-relative" data-region="footer-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
