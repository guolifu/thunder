<?php

/* Index/url.html */
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
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "/Public/js/vendor/jquery-1.11.2.min.js\"></script>

<html>
<head>
    <meta charset=\"utf-8\">
    <title>Vue 测试</title>
    ";
        // line 8
        $this->loadTemplate("header.html", "Index/url.html", 8)->display($context);
        // line 9
        echo "</head>
<body>
<button onclick=\"change()\">点击更改显示的路由组件</button>
<div id=\"app\">
    ";
        // line 14
        echo "    <p>";
        echo (isset($context["b"]) ? $context["b"] : null);
        echo "
    ";
        // line 16
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "route", array(0 => "goapi"), "method"), "html", null, true);
        echo "<br/>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "1.css"), "method"), "html", null, true);
        echo "<br/>
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "2.js"), "method"), "html", null, true);
        echo "<br>
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "1111.js"), "method"), "html", null, true);
        echo "
        ";
        // line 22
        echo "
        {{ message }}
        ";
        echo "
        <br>
        ";
        // line 30
        echo "    </p>
</div>
<div id=\"contents\" >
    <content-title :title=\"title\" ></content-title>
    <content-content  :content=\"content\"  ></content-content>
    <small>
        Created by hakim.se
    </small>
</div>
<script>


Vue.component('content-title',{
    props:['title'],
    template:'<h1>{title}</h1>',
    delimiters:['{', '}']
})
Vue.component('content-content',{
    props:['content'],
    template:'<article>{content}</article>',
    delimiters:['{', '}']
})


var content = new Vue({
    el:\"#contents\",
    data:{
        title:'',
        content:''
    }
})
\$.ajax({
    url:'/home/index/get_manual',
    type:'post',
    success:function(r){
        content.title = r.title;
        content.content = r.content;
    }
})
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Index/url.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  61 => 22,  57 => 19,  53 => 18,  49 => 17,  44 => 16,  39 => 14,  33 => 9,  31 => 8,  22 => 2,  19 => 1,);
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
<script src=\"{{__PUBLIC__}}/Public/js/vendor/jquery-1.11.2.min.js\"></script>

<html>
<head>
    <meta charset=\"utf-8\">
    <title>Vue 测试</title>
    {% include \"header.html\" %}
</head>
<body>
<button onclick=\"change()\">点击更改显示的路由组件</button>
<div id=\"app\">
    {% autoescape false %}
    <p>{{b}}
    {% endautoescape %}
        {{ asset.route('goapi') }}<br/>
        {{ asset.css('1.css') }}<br/>
        {{ asset.js('2.js') }}<br>
        {{ asset.asset('1111.js') }}
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
<div id=\"contents\" >
    <content-title :title=\"title\" ></content-title>
    <content-content  :content=\"content\"  ></content-content>
    <small>
        Created by hakim.se
    </small>
</div>
<script>


Vue.component('content-title',{
    props:['title'],
    template:'<h1>{title}</h1>',
    delimiters:['{', '}']
})
Vue.component('content-content',{
    props:['content'],
    template:'<article>{content}</article>',
    delimiters:['{', '}']
})


var content = new Vue({
    el:\"#contents\",
    data:{
        title:'',
        content:''
    }
})
\$.ajax({
    url:'/home/index/get_manual',
    type:'post',
    success:function(r){
        content.title = r.title;
        content.content = r.content;
    }
})
</script>
</body>
</html>", "Index/url.html", "D:\\phpStudy\\WWW\\thunder\\app\\Home\\views\\Index\\url.html");
    }
}
