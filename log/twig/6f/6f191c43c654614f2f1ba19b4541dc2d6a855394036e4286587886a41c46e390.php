<?php

/* index/verify1.html */
class __TwigTemplate_0c1a68392e687219db3e09efb819ddd88888655c78c08c106bb6b4b06d3f4f37 extends Twig_Template
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

登录成功；
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/verify1.html";
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
        return new Twig_Source("<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>

登录成功；
</body>
</html>", "index/verify1.html", "E:\\WWW\\thunder\\app\\views\\Index\\verify1.html");
    }
}
