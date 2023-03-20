<?php

class __Mustache_8e9973b81d40752315f286895290c17e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="adaptable-page-header-wrapper"';
        $value = $this->resolveValue($context->find('headerbg'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div id="header1" class="above-header stickything">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <nav class="navbar navbar-expand btco-hover-menu">
';
        $value = $context->find('shownavbar');
        $buffer .= $this->section62e22fcafd2fe7578b1d6410f0561056($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="collapse navbar-collapse">
';
        $value = $context->find('menuslinkright');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="my-auto m-1">';
            $value = $this->resolveValue($context->find('topmenus'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '                    <ul class="navbar-nav ml-auto my-auto">
';
        $value = $context->find('menuslinkright');
        $buffer .= $this->section8408aa8053416a684ebeba1ae6d4a1b6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('searchandsocialnavbar');
        $buffer .= $this->section6a04039a710243270c13fbff59a49407($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('shownavbar');
        $buffer .= $this->section2b45d79c02e668d459e751153bae8a98($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('langmenu');
        $buffer .= $this->section2ac8d03f6a20488d4bcb069e968ef9d2($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('loginoruser'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page-header" class="container ';
        $value = $this->resolveValue($context->find('responsiveheader'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="row d-flex justify-content-start align-items-center h-100 ">
';
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->sectionFc3358f4e11c0de4f1e95cff1d82ea34($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="col-lg-8">
';
            $buffer .= $indent . '                <div class="d-flex justify-content-between align-items-center h-100 bd-highlight">
';
            $value = $context->find('sitetitle');
            $buffer .= $this->sectionF3484ef73f3671f3f32205c22c5b4d95($context, $indent, $value);
            $value = $context->find('searchandsocialheader');
            $buffer .= $this->section7d130a1cf862bac5e424612e825b52af($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-lg-4 p-0">
';
            $value = $context->find('sitelogo');
            $buffer .= $this->sectionDc9d2b6defb5e81ae382d3a340ac784b($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="row">
';
            $buffer .= $indent . '            <div class="col-12 p-0 my-auto">
';
            $buffer .= $indent . '                <div id="course-header">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.course_header'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('shownavbar');
        $buffer .= $this->section12adbc97ba0dbc28e22606abc255f396($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function section3d134df36358a2641268d6e4fa0990da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62e22fcafd2fe7578b1d6410f0561056(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
                    <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1" data-side="left">
                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
                        <span class="sr-only">{{#str}}sidepanel{{/str}}</span>
                    </button>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
';
                $buffer .= $indent . '                    <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1" data-side="left">
';
                $buffer .= $indent . '                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section3d134df36358a2641268d6e4fa0990da($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8408aa8053416a684ebeba1ae6d4a1b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="my-auto m-1">{{{topmenus}}}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="my-auto m-1">';
                $value = $this->resolveValue($context->find('topmenus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a04039a710243270c13fbff59a49407(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item navbarsearchsocial mx-md-1 my-auto{{searchandsocialnavbarextra}}">
                            {{{searchandsocialnavbar}}}
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item navbarsearchsocial mx-md-1 my-auto';
                $value = $this->resolveValue($context->find('searchandsocialnavbarextra'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('searchandsocialnavbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b45d79c02e668d459e751153bae8a98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">{{{output.navbar_plugin_output}}}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">';
                $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ac8d03f6a20488d4bcb069e968ef9d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item dropdown ml-2 my-auto">{{{output.lang_menu}}}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item dropdown ml-2 my-auto">';
                $value = $this->resolveValue($context->findDot('output.lang_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1488a54c808009c944c333573135f64c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{sitelogo}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('sitelogo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38a5c8324740ea3f47b715681bbd251(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{sitetitle}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('sitetitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9304f407f9d53d924764dfe13ab9ea74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{searchandsocialheader}}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('searchandsocialheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc3358f4e11c0de4f1e95cff1d82ea34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-8 p-0">
                <div class="bd-highlight d-flex">
                    {{#sitelogo}}{{{sitelogo}}}{{/sitelogo}}
                    {{#sitetitle}}{{{sitetitle}}}{{/sitetitle}}
                </div>
                <div id="course-header">
                    {{{output.course_header}}}
                </div>
            </div>
            <div class="col-lg-4">
                {{#searchandsocialheader}}
                    {{{searchandsocialheader}}}
                {{/searchandsocialheader}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-lg-8 p-0">
';
                $buffer .= $indent . '                <div class="bd-highlight d-flex">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('sitelogo');
                $buffer .= $this->section1488a54c808009c944c333573135f64c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('sitetitle');
                $buffer .= $this->sectionF38a5c8324740ea3f47b715681bbd251($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div id="course-header">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.course_header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="col-lg-4">
';
                $value = $context->find('searchandsocialheader');
                $buffer .= $this->section9304f407f9d53d924764dfe13ab9ea74($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3484ef73f3671f3f32205c22c5b4d95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{sitetitle}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('sitetitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d130a1cf862bac5e424612e825b52af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{searchandsocialheader}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('searchandsocialheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc9d2b6defb5e81ae382d3a340ac784b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex justify-content-end bd-highlight">
                    {{{sitelogo}}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex justify-content-end bd-highlight">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitelogo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12adbc97ba0dbc28e22606abc255f396(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_adaptable/headernavbar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_adaptable/headernavbar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
