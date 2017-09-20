<?php

/* layout.html */
class __TwigTemplate_1545def7ca8c3dbcaced85143abe5504a9f1a1b18a1673d76a7eb18fd09efab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("layout_top.html", "layout.html", 1)->display($context);
        // line 2
        $this->loadTemplate("nav.html", "layout.html", 2)->display($context);
        // line 3
        echo "
";
        // line 5
        $this->displayBlock('list', $context, $blocks);
        // line 8
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Hello Thunder</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href='manual' role=\"button\">Learn more &raquo;</a></p>
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2015</p>
    </footer>
</div> <!-- /container -->
<script>window.jQuery || document.write('<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "/Public/js/vendor/jquery-1.11.2.min.js\"><\\/script>')</script>

<script src=";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "vendor/bootstrap.min.js", 1 => true), "method"), "html", null, true);
        echo "></script>

<script src=";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "main.js", 1 => true), "method"), "html", null, true);
        echo "></script>

";
        // line 51
        echo "<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
";
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
        // line 21
        echo "            <h2>Heading</h2>
            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  106 => 20,  101 => 6,  98 => 5,  84 => 51,  79 => 48,  74 => 46,  69 => 44,  46 => 23,  44 => 20,  30 => 8,  28 => 5,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"layout_top.html\" %}
{% include \"nav.html\" %}

{# Main jumbotron for a primary marketing message or call to action #}
{% block list %}

{% endblock %}
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Hello Thunder</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href='manual' role=\"button\">Learn more &raquo;</a></p>
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        <div class=\"col-md-4\">
            {% block head %}
            <h2>Heading</h2>
            {% endblock %}
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2015</p>
    </footer>
</div> <!-- /container -->
<script>window.jQuery || document.write('<script src=\"{{__PUBLIC__}}/Public/js/vendor/jquery-1.11.2.min.js\"><\\/script>')</script>

<script src={{asset.js('vendor/bootstrap.min.js',true)}}></script>

<script src={{asset.js('main.js',true)}}></script>

{# Google Analytics: change UA-XXXXX-X to be your site's ID. #}
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
", "layout.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\layout.html");
    }
}
