<?php

/* index/url.html */
class __TwigTemplate_c345dd331ed8b9b12fc6b1112ab0713916947132f280a09af5848262df8851a8 extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Vue 测试</title>
    ";
        // line 6
        $this->loadTemplate("header.html", "index/url.html", 6)->display($context);
        // line 7
        echo "</head>
<body>
<div id=\"app\">
    <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "1.css"), "method"), "html", null, true);
        echo "<br/>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "2.js"), "method"), "html", null, true);
        echo "
        ";
        // line 15
        echo "
        {{ message }}
        ";
        echo "
        <br>
        ";
        // line 23
        echo "    </p>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            message: 'Vue!'
        }
    })
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/url.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  42 => 15,  38 => 12,  34 => 11,  28 => 7,  26 => 6,  19 => 1,);
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
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Vue 测试</title>
    {% include \"header.html\" %}
</head>
<body>
<div id=\"app\">
    <p>
        {{ asset.css('1.css') }}<br/>
        {{ asset.js('2.js') }}
        {% verbatim %}
        {{ message }}
        {% endverbatim %}
        <br>
        {#
{%for student in students%}
        {{student.name}}
        <br>
        {% endfor %}
        #}
    </p>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            message: 'Vue!'
        }
    })
</script>
</body>
</html>", "index/url.html", "E:\\WWW\\thunder\\app\\views\\Index\\url.html");
    }
}
