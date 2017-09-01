<?php

/* layout.html */
class __TwigTemplate_361bb5385d1a8acce6db49a4edbdabc088e3be94f1ffe8a9696227e2bb50392d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
    </title>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class=\"flex-center position-ref full-height\">


    <div class=\"content\">
        <div class=\"title m-b-md\">
            ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "            ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
        </div>

    </div>
</div>
</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "        ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 73,  120 => 72,  116 => 9,  113 => 8,  100 => 74,  98 => 72,  32 => 10,  30 => 8,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>
        {% block title %}
        {% endblock %}
        {{title}}
    </title>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class=\"flex-center position-ref full-height\">


    <div class=\"content\">
        <div class=\"title m-b-md\">
            {% block content %}
            {% endblock %}
            {{name}}
        </div>

    </div>
</div>
</body>
</html>
", "layout.html", "D:\\phpStudy\\WWW\\thunder\\app\\views\\layout.html");
    }
}
