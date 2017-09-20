<?php

/* manual/edit_form.html */
class __TwigTemplate_9db92bf77a475cbd5f4c5d1e908487335a506ddb6a192afc3ec4b11d6d6e2ff8 extends Twig_Template
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
        echo "<div style=\"margin: 15px;\">
\t<form class=\"layui-form\" method=\"post\" action=\"\">
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">标题</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"title\" placeholder=\"请输入\" class=\"layui-input\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "title", array()), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">摘要</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"abs\" placeholder=\"请输入\" class=\"layui-input\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "abs", array()), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>


\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo "\">

\t\t<textarea name=\"content\" lay-verify=\"content\" class=\"layui-textarea\" id=\"LAY_demo1\" style=\"display: none\">";
        // line 19
        echo $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "content", array());
        echo "</textarea>

\t\t<button lay-filter=\"edit\" lay-submit style=\"display: none;\"></button>
\t</form>
</div>
<script>

</script>";
    }

    public function getTemplateName()
    {
        return "manual/edit_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  43 => 17,  35 => 12,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"margin: 15px;\">
\t<form class=\"layui-form\" method=\"post\" action=\"\">
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">标题</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"title\" placeholder=\"请输入\" class=\"layui-input\" value=\"{{info.title}}\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">摘要</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"abs\" placeholder=\"请输入\" class=\"layui-input\" value=\"{{info.abs}}\">
\t\t\t</div>
\t\t</div>


\t\t<input type=\"hidden\" name=\"id\" value=\"{{info.id}}\">

\t\t<textarea name=\"content\" lay-verify=\"content\" class=\"layui-textarea\" id=\"LAY_demo1\" style=\"display: none\">{% autoescape false %}{{info.content}}{% endautoescape %}</textarea>

\t\t<button lay-filter=\"edit\" lay-submit style=\"display: none;\"></button>
\t</form>
</div>
<script>

</script>", "manual/edit_form.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Admin\\views\\Manual\\edit_form.html");
    }
}
