<?php

class __Mustache_e601e1b5e09c172139d6ae0d17dbcaa7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
';
        $buffer .= $indent . '    <div id="nav-drawer-inner">
';
        $buffer .= $indent . '        <nav class="list-group">
';
        $buffer .= $indent . '            <ul class="list-unstyled components">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('navigationmenudrawer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('disablecustommenu');
        if (empty($value)) {
            
            $buffer .= $indent . '                <li>
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.custom_menu_drawer'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </li>
';
        }
        $value = $context->find('toolsmenudrawer');
        $buffer .= $this->section31b21c2cffc109e4140df1d1ddb78ae8($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <nav class="list-group m-t-1">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.context_mobile_settings_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </nav>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="main-navbar" class="d-none d-lg-block">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="navbar navbar-expand btco-hover-menu">
';
        $buffer .= $indent . '            <nav aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB5f3fe981d4e1c31c23b73eb1e4a081a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <ul class="navbar-nav">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('navigationmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('disablecustommenu');
        if (empty($value)) {
            
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $value = $context->find('toolsmenu');
        $buffer .= $this->section3dee50e2d54da53c06ee5d0bf658376a($context, $indent, $value);
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <ul class="navbar-nav ml-auto d-flex flex-wrap">
';
        $value = $context->find('showcog');
        $buffer .= $this->sectionA37e833d331192548922a8a668cb7a4b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('pageheadingbutton');
        $buffer .= $this->sectionA99af1b3c72970a48579a51ce3706744($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('showhideblocks');
        $buffer .= $this->sectionF08bd732e3c68604c820cb6415f9b09a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('enablezoom');
        $buffer .= $this->section2a048407f7f11653930ee3abf2efadf1($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section31b21c2cffc109e4140df1d1ddb78ae8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    {{{toolsmenudrawer}}}
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('toolsmenudrawer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5f3fe981d4e1c31c23b73eb1e4a081a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitelinkslabel, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitelinkslabel, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3dee50e2d54da53c06ee5d0bf658376a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{output.tools_menu}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('output.tools_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section639f46d0aca47da487a070395bc7611b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="nav-item mr-2">
                    <div class="context-header-settings-menu">
                        {{{coursemenucontent}}}
                    </div>
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="nav-item mr-2">
';
                $buffer .= $indent . '                    <div class="context-header-settings-menu">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('coursemenucontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3fa97c7d524824e843bd503b8957684(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="nav-item mr-2">
                    <div id="region-main-settings-menu" class="region-main-settings-menu">
                        {{{othermenucontent}}}
                    </div>
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="nav-item mr-2">
';
                $buffer .= $indent . '                    <div id="region-main-settings-menu" class="region-main-settings-menu">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('othermenucontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA37e833d331192548922a8a668cb7a4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#coursemenucontent}}
                <li class="nav-item mr-2">
                    <div class="context-header-settings-menu">
                        {{{coursemenucontent}}}
                    </div>
                </li>
                {{/coursemenucontent}}

                {{#othermenucontent}}
                <li class="nav-item mr-2">
                    <div id="region-main-settings-menu" class="region-main-settings-menu">
                        {{{othermenucontent}}}
                    </div>
                </li>
                {{/othermenucontent}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('coursemenucontent');
                $buffer .= $this->section639f46d0aca47da487a070395bc7611b($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('othermenucontent');
                $buffer .= $this->sectionF3fa97c7d524824e843bd503b8957684($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA99af1b3c72970a48579a51ce3706744(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li id="editingbutton" class="nav-item mx-0 my-auto">
                    {{{pageheadingbutton}}}
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li id="editingbutton" class="nav-item mx-0 my-auto">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section760340095d415f611925b3c2e433da22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="showhideblocksdesc">{{showhideblockszoominicontitle}}</span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="showhideblocksdesc">';
                $value = $this->resolveValue($context->find('showhideblockszoominicontitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF08bd732e3c68604c820cb6415f9b09a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="nav-item mr-1">
                    <div id="zoominicon" class="{{showhideblockszoomside}} nav-link" title="{{showhideblockszoominicontitle}}" data-hidetitle="{{showhideblockshidetitle}}" data-showtitle="{{showhideblocksshowtitle}}">
                        <i class="fa fa-lg fa-{{showhideblocksicontype}}" aria-hidden="true"></i>
                        {{#showhideblockstext}}
                        <span class="showhideblocksdesc">{{showhideblockszoominicontitle}}</span>
                        {{/showhideblockstext}}
                    </div>
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="nav-item mr-1">
';
                $buffer .= $indent . '                    <div id="zoominicon" class="';
                $value = $this->resolveValue($context->find('showhideblockszoomside'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' nav-link" title="';
                $value = $this->resolveValue($context->find('showhideblockszoominicontitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-hidetitle="';
                $value = $this->resolveValue($context->find('showhideblockshidetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-showtitle="';
                $value = $this->resolveValue($context->find('showhideblocksshowtitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa fa-lg fa-';
                $value = $this->resolveValue($context->find('showhideblocksicontype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-hidden="true"></i>
';
                $value = $context->find('showhideblockstext');
                $buffer .= $this->section760340095d415f611925b3c2e433da22($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a7c186b96d8d71a5750a3e8739e29e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullscreen, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fullscreen, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF33ea8db9c8f543da92f50adcc0850ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="zoomdesc">';
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7427f43aec250eace0045e20a2622b11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardview, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'standardview, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d5e85435b013c368ff941c9fe5814d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="zoomdesc">';
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a048407f7f11653930ee3abf2efadf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="nav-item mx-0 hbll">
                    <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}fullscreen, theme_adaptable{{/str}}">
                        <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
                        {{#enablezoomshowtext}}
                        <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                        {{/enablezoomshowtext}}
                    </a>
                </li>
                <li class="nav-item mx-0 sbll">
                    <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}standardview, theme_adaptable{{/str}}">
                        <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
                        {{#enablezoomshowtext}}
                        <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                        {{/enablezoomshowtext}}
                    </a>
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="nav-item mx-0 hbll">
';
                $buffer .= $indent . '                    <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
';
                $value = $context->find('enablezoomshowtext');
                $buffer .= $this->sectionF33ea8db9c8f543da92f50adcc0850ac($context, $indent, $value);
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="nav-item mx-0 sbll">
';
                $buffer .= $indent . '                    <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
';
                $value = $context->find('enablezoomshowtext');
                $buffer .= $this->section2d5e85435b013c368ff941c9fe5814d6($context, $indent, $value);
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
