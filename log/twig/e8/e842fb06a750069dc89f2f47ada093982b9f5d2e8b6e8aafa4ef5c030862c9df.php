<?php

/* student/index1.html */
class __TwigTemplate_f581a938b47f54a156f0f84282af9c560b25310db4a986787c938fd88eb22d99 extends Twig_Template
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
        echo "student-index1
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "student-index1
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
student-index1
{% endblock %}

{% block content %}
student-index1
{% endblock %}", "student/index1.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\Student\\index1.html");
    }
}
