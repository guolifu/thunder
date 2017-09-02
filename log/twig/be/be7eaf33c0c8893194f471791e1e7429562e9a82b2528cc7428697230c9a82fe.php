<?php

/* student/index1.html */
class __TwigTemplate_4e5d53ed8ae77cd520c6b725c6456c3b96a37a116d9fcc60234aa83ab9674576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "student/index1.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "student-
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "student
";
    }

    public function getTemplateName()
    {
        return "student/index1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block title %}
student-
{% endblock %}

{% block content %}
student
{% endblock %}", "student/index1.html", "D:\\phpStudy\\WWW\\thunder2.0\\app\\views\\Student\\index1.html");
    }
}
