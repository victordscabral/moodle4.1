<?php

class __Mustache_0b34035acacb0e3ae7604e73137892dd extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '  <!-- ILB -->
';
        $buffer .= $indent . '  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
';
        $buffer .= $indent . '  <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '  <meta name="DC.creator" content="master">
';
        $buffer .= $indent . '  <meta name="DC.format" content="text/plain">
';
        $buffer .= $indent . '  <meta name="DC.language" content="pt-br">
';
        $buffer .= $indent . '  <meta name="DC.type" content="Folder">
';
        $buffer .= $indent . '  <meta name="DC.distribution" content="Global">
';
        $buffer .= $indent . '  <meta name="robots" content="ALL">
';
        $buffer .= $indent . '  <meta name="distribution" content="Global">
';
        $buffer .= $indent . '  <meta name="viewport" content="width=device-width, initial-scale=1">
';
        $buffer .= $indent . '  <meta name="generator" content="Plone - http://plone.org">
';
        $buffer .= $indent . '  <meta property="og:url" content="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '  <meta property="og:title" content="Instituto Legislativo Brasileiro - ILB">
';
        $buffer .= $indent . '  <meta property="og:description" content="">
';
        $buffer .= $indent . '  <meta property="og:image" content="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/image/logo_600x600.png">
';
        $buffer .= $indent . '  <meta property="og:image:type" content="image/png">
';
        $buffer .= $indent . '  <meta property="og:image:width" content="500">
';
        $buffer .= $indent . '  <meta property="og:image:height" content="450">
';
        $buffer .= $indent . '  <meta property="og:site_name" content="Portal Institucional do Senado Federal">
';
        $buffer .= $indent . '  <base href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/">
';
        $buffer .= $indent . '  <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <title>Instituto Legislativo Brasileiro - ILB</title>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Estilos ILB -->
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/ilb/css/main.css">
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/ilb/css/carousel.css">
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/ilb/css/login.css">
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/ilb/css/categories.css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Portal Senado -->
';
        $buffer .= $indent . '  <link rel="stylesheet" type="text/css"
';
        $buffer .= $indent . '    href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/base-cachekey8086.css">
';
        $buffer .= $indent . '  <link rel="stylesheet" type="text/css"
';
        $buffer .= $indent . '    href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/resourceconfigcssbasic-cachekey7493.css">
';
        $buffer .= $indent . '  <link rel="stylesheet" type="text/css" media="screen"
';
        $buffer .= $indent . '    href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/resourcestaticcssplone_fixes_senado-cachekey7119.css">
';
        $buffer .= $indent . '  <link rel="stylesheet" type="text/css" media="all"
';
        $buffer .= $indent . '    href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/ploneCustom-cachekey1883.css">
';
        $buffer .= $indent . '  <link rel="kinetic-stylesheet" type="text/css"
';
        $buffer .= $indent . '    href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/at-cachekey7903.kss">
';
        $buffer .= $indent . '  <script type="text/javascript"
';
        $buffer .= $indent . '    src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/js/resourceconfigjqueryjquery-1.11.2.min-cachekey3167.js"></script>
';
        $buffer .= $indent . '  <script type="text/javascript"
';
        $buffer .= $indent . '    src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/js/resourceconfigbootstrapbootstrap.min-cachekey6467.js"></script>
';
        $buffer .= $indent . '  <script type="text/javascript"
';
        $buffer .= $indent . '    src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/js/resourcestaticjscalendario-cachekey0880.js"></script>
';
        $buffer .= $indent . '  <script type="text/javascript"
';
        $buffer .= $indent . '    src="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/js/resourcestaticjsphoto-gallery-cachekey4998.js"></script>
';
        $buffer .= $indent . '  <link rel="kss-base-url" href="https://www12.senado.leg.br/institucional/escoladegoverno/">
';
        $buffer .= $indent . '  <link rel="apple-touch-icon" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/image/touch_icon.png">
';
        $buffer .= $indent . '  <link rel="home" href="https://www12.senado.leg.br/institucional" title="Página inicial">
';
        $buffer .= $indent . '  <link rel="contents" href="https://www12.senado.leg.br/institucional/sitemap" title="Mapa do Site">
';
        $buffer .= $indent . '  <link rel="search" href="https://www12.senado.leg.br/institucional/search_form" title="Buscar neste site">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Bootstrap -->
';
        $buffer .= $indent . '  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
';
        $buffer .= $indent . '    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Estilos -->
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/basic.css" type="text/css">
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/essencial.css" type="text/css">
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/tema.css" type="text/css">
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('moodle_url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/theme/ilb/assets/portal_senado/css/plone-adapter.css" type="text/css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <script>
';
        $buffer .= $indent . '    window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
';
        $buffer .= $indent . '    ga(\'create\', \'UA-27295293-6\', \'auto\');
';
        $buffer .= $indent . '    ga(\'create\', \'UA-101435193-1\', \'auto\', \'global\', { \'alwaysSendReferrer\': true });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ga(\'send\', \'pageview\');
';
        $buffer .= $indent . '    ga(\'global.send\', \'pageview\');
';
        $buffer .= $indent . '  </script>
';
        $buffer .= $indent . '</head>';

        return $buffer;
    }
}
