<?php

/* manual/add_form.html */
class __TwigTemplate_5cb97fbde3fb402ba8ab8a46951987a2951f5cde44924481a5da44f5d964083a extends Twig_Template
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
\t<form class=\"layui-form\" method=\"post\" action=\"./add\">
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">标题</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"title\" placeholder=\"请输入\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">摘要</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"abs\" placeholder=\"请输入\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>

\t\t<textarea name=\"content\" lay-verify=\"content\" class=\"layui-textarea\" id=\"LAY_demo1\" style=\"display: none\"></textarea>

\t\t<button lay-filter=\"add\" lay-submit style=\"display: none;\"></button>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "manual/add_form.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
\t<form class=\"layui-form\" method=\"post\" action=\"./add\">
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">标题</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"title\" placeholder=\"请输入\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">摘要</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"abs\" placeholder=\"请输入\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>

\t\t<textarea name=\"content\" lay-verify=\"content\" class=\"layui-textarea\" id=\"LAY_demo1\" style=\"display: none\"></textarea>

\t\t<button lay-filter=\"add\" lay-submit style=\"display: none;\"></button>
\t</form>
</div>
", "manual/add_form.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Admin\\views\\Manual\\add_form.html");
    }
}
