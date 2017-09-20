<?php

/* layout_top.html */
class __TwigTemplate_a0fedd282cb7fa1e919b4bc9496bd41eda6f3bff9e9650e0a38649c59cd67e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "bootstrap.min.css", 1 => true), "method"), "html", null, true);
        echo ">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "bootstrap-theme.min.css", 1 => true), "method"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "main.css", 1 => true), "method"), "html", null, true);
        echo ">
    <script src=";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "/vendor/modernizr-2.8.3-respond-1.4.2.min.js", 1 => true), "method"), "html", null, true);
        echo "></script>
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "layout_top.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  45 => 19,  41 => 18,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href={{asset.css('bootstrap.min.css',true)}}>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel=\"stylesheet\" href={{asset.css('bootstrap-theme.min.css',true)}}>
    <link rel=\"stylesheet\" href={{asset.css('main.css',true)}}>
    <script src={{asset.js('/vendor/modernizr-2.8.3-respond-1.4.2.min.js',true)}}></script>
</head>
<body>", "layout_top.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\layout_top.html");
    }
}
