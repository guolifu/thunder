<?php

/* index/views.html */
class __TwigTemplate_7bd6b7d93947507e1c8f207c2691e2723891c984632e0cc66f12ea586b60befc extends Twig_Template
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
        echo "api-view";
    }

    public function getTemplateName()
    {
        return "index/views.html";
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
        return new Twig_Source("api-view", "index/views.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Api\\views\\index\\views.html");
    }
}
