<?php

/* nav.html */
class __TwigTemplate_82ae6436fbf3dad7f1b55379dfd85453756ae8cb30a71a9043771bc7fab2b9e3 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Thunder Framework</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <form class=\"navbar-form navbar-right\" role=\"form\">
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html";
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
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Thunder Framework</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <form class=\"navbar-form navbar-right\" role=\"form\">
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>
        </div>
    </div>
</nav>", "nav.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\nav.html");
    }
}
