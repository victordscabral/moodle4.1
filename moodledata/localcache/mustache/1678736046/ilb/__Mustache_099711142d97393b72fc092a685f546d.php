<?php

class __Mustache_099711142d97393b72fc092a685f546d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="carouselILB" class="carousel slide" data-bs-ride="carousel">
';
        $buffer .= $indent . '  <div class="carousel-inner">
';
        $buffer .= $indent . '    <div class="carousel-item active" data-bs-interval="3000000" >
';
        $buffer .= $indent . '      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/mvqFvkBF0PE?rel=0&loop=1" frameborder="0" allowfullscreen title="Novo vídeo sobre os cursos online da Plataforma Saberes" ></iframe>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('semitem');
        $buffer .= $this->section7688a14871b0cd9e42072a86f1ded277($context, $indent, $value);
        $value = $context->find('semitem');
        if (empty($value)) {
            
            $value = $context->find('itenscarrossel');
            $buffer .= $this->section10ba4add5678a9b0d9ea21d780a757b7($context, $indent, $value);
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <button class="carousel-control-prev" type="button" data-bs-target="#carouselILB"
';
            $buffer .= $indent . '    data-bs-slide="prev">
';
            $buffer .= $indent . '    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
            $buffer .= $indent . '    </button>
';
            $buffer .= $indent . '    <button class="carousel-control-next" type="button" data-bs-target="#carouselILB"
';
            $buffer .= $indent . '    data-bs-slide="next">
';
            $buffer .= $indent . '    <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
            $buffer .= $indent . '    </button>
';
            $buffer .= $indent . '  </div>
';
        }

        return $buffer;
    }

    private function section7688a14871b0cd9e42072a86f1ded277(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        </div>
      </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10ba4add5678a9b0d9ea21d780a757b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_ilb/frontpage/sections/carousel_item }}
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_ilb/frontpage/sections/carousel_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
