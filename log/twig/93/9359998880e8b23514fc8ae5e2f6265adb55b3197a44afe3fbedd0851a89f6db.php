<?php

/* index/upload.html */
class __TwigTemplate_c515567198c8bf86b4840bac0cefe8682ed66ad0c21fa66cd476bd4f9c991b0f extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<form action=\"\" enctype=\"multipart/form-data\" method=\"post\" >
    <input type=\"text\" name=\"test\" />
    <input type=\"file\" name=\"photo[]\" />
    <input type=\"file\" name=\"photo[]\" />
    <input type=\"submit\" value=\"提交\" >
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/upload.html";
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<form action=\"\" enctype=\"multipart/form-data\" method=\"post\" >
    <input type=\"text\" name=\"test\" />
    <input type=\"file\" name=\"photo[]\" />
    <input type=\"file\" name=\"photo[]\" />
    <input type=\"submit\" value=\"提交\" >
</form>
</body>
</html>", "index/upload.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\Index\\upload.html");
    }
}
