<?php

/* header.html */
class __TwigTemplate_8117490ee8ec8587b1395efae3775e2315cef31bdec237318c4e9a5128951016 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "/node_modules/_vue@2.4.2@vue/dist/vue.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<script src=\"{{ __PUBLIC__ }}/node_modules/_vue@2.4.2@vue/dist/vue.min.js\"></script>", "header.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\header.html");
    }
}
