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
        // line 13
        echo "
        {{ message }}
        ";
        echo "

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
        return array (  34 => 13,  28 => 7,  26 => 6,  19 => 1,);
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
        {% verbatim %}
        {{ message }}
        {% endverbatim %}

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
