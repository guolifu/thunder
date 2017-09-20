<?php

/* header.html */
class __TwigTemplate_8ebf59d12110d173292627cb296b84743699530ce5860c471709691fac54ed01 extends Twig_Template
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
        echo "/node_modules/_vue@2.4.2@vue/dist/vue.min.js\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "/node_modules/_axios@0.16.2@axios/dist/axios.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "main.js"), "method"), "html", null, true);
        echo "\"></script>";
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
        return array (  29 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ __PUBLIC__ }}/node_modules/_vue@2.4.2@vue/dist/vue.min.js\"></script>
<script src=\"{{ __PUBLIC__ }}/node_modules/_axios@0.16.2@axios/dist/axios.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"{{ asset.js('main.js') }}\"></script>", "header.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Api\\views\\header.html");
    }
}
