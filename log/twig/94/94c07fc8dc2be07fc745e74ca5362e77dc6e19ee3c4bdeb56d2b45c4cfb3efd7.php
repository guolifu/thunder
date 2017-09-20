<?php

/* index/url.html */
class __TwigTemplate_cb75c4b3abd222c2f85ffdb771507a81527912ae6b17f0e52aea5451af472ae9 extends Twig_Template
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
    ";
        // line 11
        echo "    <p>";
        echo (isset($context["b"]) ? $context["b"] : null);
        echo "
    ";
        // line 13
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "route", array(0 => "goapi"), "method"), "html", null, true);
        echo "<br/>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "1.css"), "method"), "html", null, true);
        echo "<br/>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "2.js"), "method"), "html", null, true);
        echo "
        ";
        // line 18
        echo "
        {{ message }}
        ";
        echo "
        <br>
        ";
        // line 26
        echo "    </p>
</div>

<div id=\"app-2\">
  <span v-bind:title=\"message\">
    鼠标悬停几秒钟查看此处动态绑定的提示信息！
  </span>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    })
    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: '页面加载于 ' + new Date().toLocaleString()
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
        return array (  58 => 26,  51 => 18,  47 => 15,  43 => 14,  38 => 13,  33 => 11,  28 => 7,  26 => 6,  19 => 1,);
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
    {% autoescape false %}
    <p>{{b}}
    {% endautoescape %}
        {{ asset.route('goapi') }}<br/>
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

<div id=\"app-2\">
  <span v-bind:title=\"message\">
    鼠标悬停几秒钟查看此处动态绑定的提示信息！
  </span>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    })
    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: '页面加载于 ' + new Date().toLocaleString()
        }
    })
</script>
</body>
</html>", "index/url.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\Index\\url.html");
    }
}
