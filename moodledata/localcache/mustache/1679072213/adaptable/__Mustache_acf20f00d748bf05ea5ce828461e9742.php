<?php

class __Mustache_acf20f00d748bf05ea5ce828461e9742 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="searchinput-navbar-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="simplesearchform">
';
        $buffer .= $indent . '    <div class="collapse" id="searchform-navbar">
';
        $buffer .= $indent . '        <form autocomplete="off" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="get" accept-charset="utf-8" class="mform form-inline searchform-navbar">
';
        $value = $context->find('hiddenfields');
        $buffer .= $this->section04b8ae4b53b0a507223620372a841e3e($context, $indent, $value);
        $buffer .= $indent . '            <div class="input-group">
';
        $buffer .= $indent . '                <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '                    <input type="text"
';
        $buffer .= $indent . '                       id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                       class="form-control withclear"
';
        $buffer .= $indent . '                       placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                       data-region="input"
';
        $buffer .= $indent . '                       autocomplete="off"
';
        $buffer .= $indent . '                    >
';
        $buffer .= $indent . '                    <a class="btn btn-close"
';
        $buffer .= $indent . '                        data-action="closesearch"
';
        $buffer .= $indent . '                        data-toggle="collapse"
';
        $buffer .= $indent . '                        href="#searchform-navbar"
';
        $buffer .= $indent . '                        role="button"
';
        $buffer .= $indent . '                    >
';
        $buffer .= $indent . '                        ';
        $value = $context->find('pix');
        $buffer .= $this->section01a1cb688132d57fc41f0070a1ef998d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section256776dc607cdebe9d890b0efd29b5ba($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                <div class="input-group-append">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-submit" data-action="submit">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <a
';
        $buffer .= $indent . '        class="btn btn-open rounded-0 nav-link"
';
        $buffer .= $indent . '        data-toggle="collapse"
';
        $buffer .= $indent . '        data-action="opensearch"
';
        $buffer .= $indent . '        href="#searchform-navbar"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-controls="searchform-navbar"
';
        $buffer .= $indent . '        title="';
        $value = $context->find('str');
        $buffer .= $this->sectionEf182a623a7e3d255977cee5b4aa1302($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionEf182a623a7e3d255977cee5b4aa1302($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionA81dd799000f8202e6b292154d307518($context, $indent, $value);

        return $buffer;
    }

    private function section04b8ae4b53b0a507223620372a841e3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <input type="hidden" name="{{ name }}" value="{{ value }}">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01a1cb688132d57fc41f0070a1ef998d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/cancel, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/cancel, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section256776dc607cdebe9d890b0efd29b5ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' closebuttontitle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' closebuttontitle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a49b2ab335cdb4725ddb42ed8de96c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' a/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf182a623a7e3d255977cee5b4aa1302(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglesearch ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglesearch ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA81dd799000f8202e6b292154d307518(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
],
function(
    $
) {
    var uniqid = "{{uniqid}}";
    var container = $(\'#searchinput-navbar-\' + uniqid);
    var opensearch = container.find(\'[data-action="opensearch"]\');
    var input = container.find(\'[data-region="input"]\');
    var submit = container.find(\'[data-action="submit"]\');

    submit.on(\'click\', function(e) {
        if (input.val() === \'\') {
            e.preventDefault();
        }
    });
    container.on(\'hidden.bs.collapse\', function() {
        opensearch.removeClass(\'d-none\');
        input.val(\'\');
    });
    container.on(\'show.bs.collapse\', function() {
        opensearch.addClass(\'d-none\');
    });
    container.on(\'shown.bs.collapse\', function() {
        input.focus();
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var uniqid = "';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '";
';
                $buffer .= $indent . '    var container = $(\'#searchinput-navbar-\' + uniqid);
';
                $buffer .= $indent . '    var opensearch = container.find(\'[data-action="opensearch"]\');
';
                $buffer .= $indent . '    var input = container.find(\'[data-region="input"]\');
';
                $buffer .= $indent . '    var submit = container.find(\'[data-action="submit"]\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    submit.on(\'click\', function(e) {
';
                $buffer .= $indent . '        if (input.val() === \'\') {
';
                $buffer .= $indent . '            e.preventDefault();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    container.on(\'hidden.bs.collapse\', function() {
';
                $buffer .= $indent . '        opensearch.removeClass(\'d-none\');
';
                $buffer .= $indent . '        input.val(\'\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    container.on(\'show.bs.collapse\', function() {
';
                $buffer .= $indent . '        opensearch.addClass(\'d-none\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    container.on(\'shown.bs.collapse\', function() {
';
                $buffer .= $indent . '        input.focus();
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
