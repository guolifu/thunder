<?php

/* header.html */
class __TwigTemplate_c8cc5427f177cf9a73554a881ebd33cd959bf2dab421b2d3fa0f70f5a4c5f93f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : null), "html", null, true);
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
        return new Twig_Source("<script src=\"{{ asset }}/node_modules/_vue@2.4.2@vue/dist/vue.min.js\"></script>", "header.html", "E:\\WWW\\thunder\\app\\views\\header.html");
    }
}
