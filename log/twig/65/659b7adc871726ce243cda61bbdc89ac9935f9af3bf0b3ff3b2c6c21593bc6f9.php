<?php

/* index/verify.html */
class __TwigTemplate_ee8a16a7c35f13ad3f4cccb4aae04445818d0b099aaccf250e02ea35182ecc75 extends Twig_Template
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
<img src=\"./c_verify\" alt=\"\"/>

<form action=\"\" method=\"post\">
    <input type=\"text\" name=\"code\"/>
    <input type=\"submit\" value=\"提交\"/>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/verify.html";
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
<img src=\"./c_verify\" alt=\"\"/>

<form action=\"\" method=\"post\">
    <input type=\"text\" name=\"code\"/>
    <input type=\"submit\" value=\"提交\"/>
</form>
</body>
</html>", "index/verify.html", "E:\\WWW\\thunder\\app\\views\\Index\\verify.html");
    }
}
