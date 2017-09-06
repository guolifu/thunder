<?php

/* index/url.html */
class __TwigTemplate_73f986bc4e3130a827c58cb48a3db9f7abea2fb40be83849f920ec16de810d5b extends Twig_Template
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
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : null), "html", null, true);
        echo "\">
    ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : null), "html", null, true);
        echo "
</a>
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
        return array (  32 => 9,  28 => 8,  19 => 1,);
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
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
<a href=\"{{ asset }}\">
    {{ asset }}
</a>
</body>
</html>", "index/url.html", "E:\\WWW\\thunder\\app\\views\\Index\\url.html");
    }
}
