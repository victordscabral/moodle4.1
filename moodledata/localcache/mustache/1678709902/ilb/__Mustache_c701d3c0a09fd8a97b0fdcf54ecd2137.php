<?php

class __Mustache_c701d3c0a09fd8a97b0fdcf54ecd2137 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="content-bank-container ';
        $value = $context->find('viewlist');
        $buffer .= $this->section19dda5f76a8e3fbe9fbc9198731628ca($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('viewlist');
        if (empty($value)) {
            
            $buffer .= 'view-grid';
        }
        $buffer .= '"
';
        $buffer .= $indent . 'data-region="contentbank">
';
        $buffer .= $indent . '    <div class="d-flex justify-content-between">
';
        $buffer .= $indent . '        <div class="cb-search-container mb-2 mr-2">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="cb-toolbar-container mb-2 d-flex">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/toolbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="cb-navigation-container mb-2">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="pb-3 border">
';
        $buffer .= $indent . '        <div class="content-bank">
';
        $buffer .= $indent . '            <div class="cb-navbar bg-light p-2 border-bottom">
';
        $buffer .= $indent . '                <div class="cb-navbar-breadbrumb">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section4ec86c7bf92eb63a8dd66d116814df49($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="cb-navbar-totalsearch d-none">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $value = $context->findDot('contents.0');
        $buffer .= $this->section85d586522f88dd33a08bf6dd777692ad($context, $indent, $value);
        $value = $context->findDot('contents.0');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="cb-content-wrapper d-flex flex-wrap p-2" data-region="filearea">
';
            $buffer .= $indent . '                    <div class="w-100 p-3 text-center text-muted">
';
            $buffer .= $indent . '                        ';
            $value = $context->find('str');
            $buffer .= $this->sectionB63c34da46c8607bf8757e3d2073b6ec($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section19dda5f76a8e3fbe9fbc9198731628ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'view-list';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'view-list';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ec86c7bf92eb63a8dd66d116814df49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/folder ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/folder ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ab2cbfa1bd43690d3c6afa9d16f367b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'table';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'table';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdf10024f2b2a45fb7c99b4a624ac94f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contentbank, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contentbank, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section845910319cbe96cb256eaefb223c5fd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'role="row"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'role="row"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16b72b97b5c0445020984e1e0b4658b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'role="columnheader"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'role="columnheader"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfb060e8e340aeef038a9f361ae84863(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contentname, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contentname, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09e81649e361630dba5bdcdc8f81f0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} contentname, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionEfb060e8e340aeef038a9f361ae84863($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6676d097e5edc564b845ec63da2c3ca1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/sort, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa1de90e7a163727565fb8217ff9921a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort_desc, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/sort_desc, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c14fcd6d6b6d67578841fb64a73faf4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort_asc, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/sort_asc, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcf19a95522adab83126f605063b6ad7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' uses, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' uses, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b5130c103c6fa67c632d55f426cab44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} uses, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAcf19a95522adab83126f605063b6ad7($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD991ac8c3a8732e5beba939c72b9b033(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastmodified, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastmodified, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16861daffd416dd352c34f90b67af6ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} lastmodified, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionD991ac8c3a8732e5beba939c72b9b033($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f3049b376b3c382ea32b3d74c46c120(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' size, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' size, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBee1cbe9c7e14fb1a44fc8da0f4dda49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} size, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->section9f3049b376b3c382ea32b3d74c46c120($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01b2c4e2861d98a63b5cea7e807c6c31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' type, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' type, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c1371b59553fb5335a576b903796d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} type, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->section01b2c4e2861d98a63b5cea7e807c6c31($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE87fcaabdead8162e6c818fca20a54cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' author, contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' author, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57945adec13d7308ecb9d1022868811f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortbyx, core, {{#str}} author, contentbank {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortbyx, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionE87fcaabdead8162e6c818fca20a54cb($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa192024ff24af5bf24af89dd7f3b575(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'row';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'row';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a5dfe4660baa62f7bdf21a7b9cf5f30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cb-unlisted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cb-unlisted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa9b681a9dc64a7fb65ade41eabae2f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'role="cell"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'role="cell"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c16870499a70829fcce540bcae4c23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetimeshort, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedatetimeshort, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC65fb0e3104962a85688b3451c5eaa8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $context->find('str');
                $buffer .= $this->section3c16870499a70829fcce540bcae4c23e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fa8df660bb8452031c5baec0044f8e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div role="{{#viewlist}}row{{/viewlist}}{{^viewlist}}listitem{{/viewlist}}"
                        class="cb-listitem {{#visibilityunlisted}}cb-unlisted{{/visibilityunlisted}}"
                        data-file="{{ title }}"
                        data-name="{{ name }}"
                        data-bytes="{{ bytes }}"
                        data-uses="{{ uses }}"
                        data-timemodified="{{ timemodified }}"
                        data-type="{{ type }}"
                        data-author="{{ author }}">
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-file cb-column position-relative">
                            <div class="cb-thumbnail" style="background-image: url(\'{{{ icon }}}\');">
                            </div>
                            <a href="{{{ link }}}" class="cb-link stretched-link">
                                <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
                                    {{{ name }}}
                                </span>
                            </a>
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-uses cb-column small">
                            {{ uses }}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-date cb-column small">
                            {{#userdate}} {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-size cb-column small">
                            {{ size }}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-type cb-column small">
                            {{{ type }}}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-type cb-column last small">
                            {{{ author }}}
                        </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div role="';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa192024ff24af5bf24af89dd7f3b575($context, $indent, $value);
                $value = $context->find('viewlist');
                if (empty($value)) {
                    
                    $buffer .= 'listitem';
                }
                $buffer .= '"
';
                $buffer .= $indent . '                        class="cb-listitem ';
                $value = $context->find('visibilityunlisted');
                $buffer .= $this->section0a5dfe4660baa62f7bdf21a7b9cf5f30($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        data-file="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        data-bytes="';
                $value = $this->resolveValue($context->find('bytes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        data-uses="';
                $value = $this->resolveValue($context->find('uses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        data-timemodified="';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        data-author="';
                $value = $this->resolveValue($context->find('author'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa9b681a9dc64a7fb65ade41eabae2f3($context, $indent, $value);
                $buffer .= ' class="cb-file cb-column position-relative">
';
                $buffer .= $indent . '                            <div class="cb-thumbnail" style="background-image: url(\'';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');">
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="cb-link stretched-link">
';
                $buffer .= $indent . '                                <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa9b681a9dc64a7fb65ade41eabae2f3($context, $indent, $value);
                $buffer .= ' class="cb-uses cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('uses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa9b681a9dc64a7fb65ade41eabae2f3($context, $indent, $value);
                $buffer .= ' class="cb-date cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('userdate');
                $buffer .= $this->sectionC65fb0e3104962a85688b3451c5eaa8e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa9b681a9dc64a7fb65ade41eabae2f3($context, $indent, $value);
                $buffer .= ' class="cb-size cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('size'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa9b681a9dc64a7fb65ade41eabae2f3($context, $indent, $value);
                $buffer .= ' class="cb-type cb-column small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->sectionDa9b681a9dc64a7fb65ade41eabae2f3($context, $indent, $value);
                $buffer .= ' class="cb-type cb-column last small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('author'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85d586522f88dd33a08bf6dd777692ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div role="{{#viewlist}}table{{/viewlist}}{{^viewlist}}list{{/viewlist}}" aria-label="{{#str}} contentbank, contentbank {{/str}}"
                    class="cb-content-wrapper d-flex px-2" data-region="filearea">
                    <div {{#viewlist}}role="row"{{/viewlist}} class="cb-heading bg-white">
                        <div {{#viewlist}}role="columnheader"{{/viewlist}} aria-sort="none" class="cb-file cb-column d-flex">
                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="contentname" data-action="sortname"
                                title="{{#str}} sortbyx, core, {{#str}} contentname, contentbank {{/str}} {{/str}}">
                                <span class="title">{{#str}} contentname, contentbank {{/str}}</span>
                                <span class="default">{{#pix}} t/sort, core {{/pix}}</span>
                                <span class="desc">{{#pix}} t/sort_desc, core {{/pix}}</span>
                                <span class="asc">{{#pix}} t/sort_asc, core {{/pix}}</span>
                            </button>
                        </div>
                        <div {{#viewlist}}role="columnheader"{{/viewlist}} aria-sort="none" class="cb-uses cb-column d-flex">
                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="uses" data-action="sortuses"
                            title="{{#str}} sortbyx, core, {{#str}} uses, contentbank {{/str}} {{/str}}">
                                <span class="title">{{#str}} uses, contentbank {{/str}}</span>
                                <span class="default">{{#pix}} t/sort, core {{/pix}}</span>
                                <span class="desc">{{#pix}} t/sort_desc, core {{/pix}}</span>
                                <span class="asc">{{#pix}} t/sort_asc, core {{/pix}}</span>
                            </button>
                        </div>
                        <div {{#viewlist}}role="columnheader"{{/viewlist}} aria-sort="none" class="cb-date cb-column d-flex">
                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="lastmodified" data-action="sortdate"
                            title="{{#str}} sortbyx, core, {{#str}} lastmodified, contentbank {{/str}} {{/str}}">
                                <span class="title">{{#str}} lastmodified, contentbank {{/str}}</span>
                                <span class="default">{{#pix}} t/sort, core {{/pix}}</span>
                                <span class="desc">{{#pix}} t/sort_desc, core {{/pix}}</span>
                                <span class="asc">{{#pix}} t/sort_asc, core {{/pix}}</span>
                            </button>
                        </div>
                        <div {{#viewlist}}role="columnheader"{{/viewlist}} aria-sort="none" class="cb-size cb-column d-flex">
                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="size" data-action="sortsize"
                            title="{{#str}} sortbyx, core, {{#str}} size, contentbank {{/str}} {{/str}}">
                                <span class="title">{{#str}} size, contentbank {{/str}}</span>
                                <span class="default">{{#pix}} t/sort, core {{/pix}}</span>
                                <span class="desc">{{#pix}} t/sort_desc, core {{/pix}}</span>
                                <span class="asc">{{#pix}} t/sort_asc, core {{/pix}}</span>
                            </button>
                        </div>
                        <div {{#viewlist}}role="columnheader"{{/viewlist}} aria-sort="none" class="cb-type cb-column d-flex">
                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="type" data-action="sorttype"
                            title="{{#str}} sortbyx, core, {{#str}} type, contentbank {{/str}} {{/str}}">
                                <span class="title">{{#str}} type, contentbank {{/str}}</span>
                                <span class="default">{{#pix}} t/sort, core {{/pix}}</span>
                                <span class="desc">{{#pix}} t/sort_desc, core {{/pix}}</span>
                                <span class="asc">{{#pix}} t/sort_asc, core {{/pix}}</span>
                            </button>
                        </div>
                        <div {{#viewlist}}role="columnheader"{{/viewlist}} aria-sort="none" class="cb-author cb-column d-flex last">
                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="author" data-action="sortauthor"
                            title="{{#str}} sortbyx, core, {{#str}} author, contentbank {{/str}} {{/str}}">
                                <span class="title">{{#str}} author, contentbank {{/str}}</span>
                                <span class="default">{{#pix}} t/sort, core {{/pix}}</span>
                                <span class="desc">{{#pix}} t/sort_desc, core {{/pix}}</span>
                                <span class="asc">{{#pix}} t/sort_asc, core {{/pix}}</span>
                            </button>
                        </div>
                    </div>
                {{#contents}}
                    <div role="{{#viewlist}}row{{/viewlist}}{{^viewlist}}listitem{{/viewlist}}"
                        class="cb-listitem {{#visibilityunlisted}}cb-unlisted{{/visibilityunlisted}}"
                        data-file="{{ title }}"
                        data-name="{{ name }}"
                        data-bytes="{{ bytes }}"
                        data-uses="{{ uses }}"
                        data-timemodified="{{ timemodified }}"
                        data-type="{{ type }}"
                        data-author="{{ author }}">
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-file cb-column position-relative">
                            <div class="cb-thumbnail" style="background-image: url(\'{{{ icon }}}\');">
                            </div>
                            <a href="{{{ link }}}" class="cb-link stretched-link">
                                <span class="cb-name word-break-all clamp-2" data-region="cb-content-name">
                                    {{{ name }}}
                                </span>
                            </a>
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-uses cb-column small">
                            {{ uses }}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-date cb-column small">
                            {{#userdate}} {{ timemodified }}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-size cb-column small">
                            {{ size }}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-type cb-column small">
                            {{{ type }}}
                        </div>
                        <div {{#viewlist}}role="cell"{{/viewlist}} class="cb-type cb-column last small">
                            {{{ author }}}
                        </div>
                    </div>
                {{/contents}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div role="';
                $value = $context->find('viewlist');
                $buffer .= $this->section6ab2cbfa1bd43690d3c6afa9d16f367b($context, $indent, $value);
                $value = $context->find('viewlist');
                if (empty($value)) {
                    
                    $buffer .= 'list';
                }
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionAdf10024f2b2a45fb7c99b4a624ac94f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    class="cb-content-wrapper d-flex px-2" data-region="filearea">
';
                $buffer .= $indent . '                    <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section845910319cbe96cb256eaefb223c5fd9($context, $indent, $value);
                $buffer .= ' class="cb-heading bg-white">
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section16b72b97b5c0445020984e1e0b4658b4($context, $indent, $value);
                $buffer .= ' aria-sort="none" class="cb-file cb-column d-flex">
';
                $buffer .= $indent . '                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="contentname" data-action="sortname"
';
                $buffer .= $indent . '                                title="';
                $value = $context->find('str');
                $buffer .= $this->section09e81649e361630dba5bdcdc8f81f0df($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="title">';
                $value = $context->find('str');
                $buffer .= $this->sectionEfb060e8e340aeef038a9f361ae84863($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="default">';
                $value = $context->find('pix');
                $buffer .= $this->section6676d097e5edc564b845ec63da2c3ca1($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="desc">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAa1de90e7a163727565fb8217ff9921a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="asc">';
                $value = $context->find('pix');
                $buffer .= $this->section5c14fcd6d6b6d67578841fb64a73faf4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section16b72b97b5c0445020984e1e0b4658b4($context, $indent, $value);
                $buffer .= ' aria-sort="none" class="cb-uses cb-column d-flex">
';
                $buffer .= $indent . '                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="uses" data-action="sortuses"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section2b5130c103c6fa67c632d55f426cab44($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="title">';
                $value = $context->find('str');
                $buffer .= $this->sectionAcf19a95522adab83126f605063b6ad7($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="default">';
                $value = $context->find('pix');
                $buffer .= $this->section6676d097e5edc564b845ec63da2c3ca1($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="desc">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAa1de90e7a163727565fb8217ff9921a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="asc">';
                $value = $context->find('pix');
                $buffer .= $this->section5c14fcd6d6b6d67578841fb64a73faf4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section16b72b97b5c0445020984e1e0b4658b4($context, $indent, $value);
                $buffer .= ' aria-sort="none" class="cb-date cb-column d-flex">
';
                $buffer .= $indent . '                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="lastmodified" data-action="sortdate"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section16861daffd416dd352c34f90b67af6ed($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="title">';
                $value = $context->find('str');
                $buffer .= $this->sectionD991ac8c3a8732e5beba939c72b9b033($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="default">';
                $value = $context->find('pix');
                $buffer .= $this->section6676d097e5edc564b845ec63da2c3ca1($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="desc">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAa1de90e7a163727565fb8217ff9921a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="asc">';
                $value = $context->find('pix');
                $buffer .= $this->section5c14fcd6d6b6d67578841fb64a73faf4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section16b72b97b5c0445020984e1e0b4658b4($context, $indent, $value);
                $buffer .= ' aria-sort="none" class="cb-size cb-column d-flex">
';
                $buffer .= $indent . '                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="size" data-action="sortsize"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionBee1cbe9c7e14fb1a44fc8da0f4dda49($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="title">';
                $value = $context->find('str');
                $buffer .= $this->section9f3049b376b3c382ea32b3d74c46c120($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="default">';
                $value = $context->find('pix');
                $buffer .= $this->section6676d097e5edc564b845ec63da2c3ca1($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="desc">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAa1de90e7a163727565fb8217ff9921a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="asc">';
                $value = $context->find('pix');
                $buffer .= $this->section5c14fcd6d6b6d67578841fb64a73faf4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section16b72b97b5c0445020984e1e0b4658b4($context, $indent, $value);
                $buffer .= ' aria-sort="none" class="cb-type cb-column d-flex">
';
                $buffer .= $indent . '                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="type" data-action="sorttype"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section0c1371b59553fb5335a576b903796d65($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="title">';
                $value = $context->find('str');
                $buffer .= $this->section01b2c4e2861d98a63b5cea7e807c6c31($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="default">';
                $value = $context->find('pix');
                $buffer .= $this->section6676d097e5edc564b845ec63da2c3ca1($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="desc">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAa1de90e7a163727565fb8217ff9921a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="asc">';
                $value = $context->find('pix');
                $buffer .= $this->section5c14fcd6d6b6d67578841fb64a73faf4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div ';
                $value = $context->find('viewlist');
                $buffer .= $this->section16b72b97b5c0445020984e1e0b4658b4($context, $indent, $value);
                $buffer .= ' aria-sort="none" class="cb-author cb-column d-flex last">
';
                $buffer .= $indent . '                            <button class="btn btn-block cb-btnsort dir-none text-left" data-string="author" data-action="sortauthor"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section57945adec13d7308ecb9d1022868811f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="title">';
                $value = $context->find('str');
                $buffer .= $this->sectionE87fcaabdead8162e6c818fca20a54cb($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="default">';
                $value = $context->find('pix');
                $buffer .= $this->section6676d097e5edc564b845ec63da2c3ca1($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="desc">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAa1de90e7a163727565fb8217ff9921a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="asc">';
                $value = $context->find('pix');
                $buffer .= $this->section5c14fcd6d6b6d67578841fb64a73faf4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $value = $context->find('contents');
                $buffer .= $this->section2fa8df660bb8452031c5baec0044f8e9($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB63c34da46c8607bf8757e3d2073b6ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocontentavailable, core_contentbank ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nocontentavailable, core_contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
