<?php

class __Mustache_06b694abf5c99de45148d668880b5691 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-login">
';
        $value = $context->find('isloggedin');
        $buffer .= $this->section8f2f80e58201fe1985d6e3baea06e482($context, $indent, $value);
        $value = $context->find('isloggedin');
        if (empty($value)) {
            
            $buffer .= $indent . '    <form class="loginform" id="login" method="post" action="login/index.php">
';
            $buffer .= $indent . '        <div class="form-container">
';
            $buffer .= $indent . '            <div class="header">
';
            $buffer .= $indent . '                <img src="';
            $value = $this->resolveValue($context->findDot('output.favicon'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" alt="Saberes">
';
            $buffer .= $indent . '                <h2>Acesso</h2>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <input type="hidden" name="logintoken" value="';
            $value = $this->resolveValue($context->find('logintoken'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div class="username">
';
            $buffer .= $indent . '                <label for="login_username">CPF</label>
';
            $buffer .= $indent . '                <br />
';
            $buffer .= $indent . '                <div class="input-group">
';
            $buffer .= $indent . '                    <input type="text" name="username" id="login_username">
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div class="password">
';
            $buffer .= $indent . '                <label for="login_password">Senha</label>
';
            $buffer .= $indent . '                <br />
';
            $buffer .= $indent . '                <div class="input-group">
';
            $buffer .= $indent . '                    <input type="password" name="password" id="login_password">
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div class="ru-fp">
';
            $buffer .= $indent . '                <div class="rememberusername">
';
            $buffer .= $indent . '                    <input type="checkbox" name="rememberusername" id="rememberusername" value="1">
';
            $buffer .= $indent . '                    <label for="rememberusername">Lembrar CPF</label>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="forgot-password">
';
            $buffer .= $indent . '                    <span><a href="';
            $value = $this->resolveValue($context->find('moodle_url'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '/login/forgot_password.php">Esqueceu sua senha?</a></span>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div class="footer-form">
';
            $buffer .= $indent . '                <div class="signup">
';
            $buffer .= $indent . '                    <span>Não possui uma conta?</span>
';
            $buffer .= $indent . '                    <br>
';
            $buffer .= $indent . '                    <a href="login/signup.php">Cadastre-se</a>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <input class="btn btn-primary" type="submit" value="Acessar">
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </form>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8f2f80e58201fe1985d6e3baea06e482(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="user-profile">
        <div class="user-container">
            <div class="header">
                <img src="{{{ output.favicon }}}" alt="Saberes">
                <h2>Bem vindo ao Saberes!</h2>
            </div>

            <div class="user-data">
                <div class="user-picture">
                    <a href="{{{userprofileurl}}}">
                        <img class="img-circle" alt="Foto do Perfil" src="{{{userpictureurl}}}" width="70px;" />
                    </a>
                </div>
    
                <div class="user-info">
                    <span>{{{ firstname }}} {{{ lastname }}}</span>
                    <span class="user-adress">{{{ usercity }}} / {{{ usercountry }}}</span>
                </div>
            </div>

            <div class="buttons">
                <a href="{{{ moodle_url }}}/my" class="btn-meus-cursos">
                    <span>Meus cursos</span>
                </a>
                <!-- <a href="{{{ moodle_url }}}/" class="btn-certificados">
                    <span>Certificados</span>
                </a> -->
                <a href="{{{ moodle_url }}}/login/logout.php?sesskey={{{ sessKey }}}" class="btn-sair">
                    <span>Sair</span>
                </a>
            </div>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="user-profile">
';
                $buffer .= $indent . '        <div class="user-container">
';
                $buffer .= $indent . '            <div class="header">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->findDot('output.favicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="Saberes">
';
                $buffer .= $indent . '                <h2>Bem vindo ao Saberes!</h2>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="user-data">
';
                $buffer .= $indent . '                <div class="user-picture">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('userprofileurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <img class="img-circle" alt="Foto do Perfil" src="';
                $value = $this->resolveValue($context->find('userpictureurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" width="70px;" />
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '                <div class="user-info">
';
                $buffer .= $indent . '                    <span>';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('lastname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span class="user-adress">';
                $value = $this->resolveValue($context->find('usercity'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('usercountry'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="buttons">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('moodle_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/my" class="btn-meus-cursos">
';
                $buffer .= $indent . '                    <span>Meus cursos</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <!-- <a href="';
                $value = $this->resolveValue($context->find('moodle_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/" class="btn-certificados">
';
                $buffer .= $indent . '                    <span>Certificados</span>
';
                $buffer .= $indent . '                </a> -->
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('moodle_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/login/logout.php?sesskey=';
                $value = $this->resolveValue($context->find('sessKey'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn-sair">
';
                $buffer .= $indent . '                    <span>Sair</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
