<?php

/* index/manual.html */
class __TwigTemplate_f4159b3bb98d7e77fcdea33ba0c8563d875db40e18db9055075f4c2e4df501b4 extends Twig_Template
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
        $this->loadTemplate("layout_top.html", "index/manual.html", 1)->display($context);
        // line 2
        $this->loadTemplate("nav.html", "index/manual.html", 2)->display($context);
        // line 3
        echo "

<link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "list.css", 1 => true), "method"), "html", null, true);
        echo ">

<body>

<div class=\"meny\">
    <h2>More Experiments</h2>
    <ul>
        <li><a href=\"./\">Avgrund</a></li>
        <li><a href=\"#\">Radar</a></li>
        <li><a href=\"#\">forkit.js</a></li>
        <li><a href=\"#\">stroll.js</a></li>
        <li><a href=\"#\">zoom.js</a></li>
        <li><a href=\"#\">reveal.js</a></li>
        <li><a href=\"#\">Sinuous for iOS</a></li>
        <li><a href=\"#\">DOM Tree</a></li>
        <li><a href=\"#\">Holobox</a></li>
        <li><a href=\"#\">404</a></li>
    </ul>
</div>

<div class=\"meny-arrow\"></div>

<div class=\"contents\">
    <article>
        <h1>Meny</h1>
        <p>
            A three dimensional and space efficient menu.
        </p>
        <p>
            Move your mouse towards the arrow &mdash; or swipe in from the arrow if you're on a touch device &mdash; to open.
        </p>
        <p>
            Meny can be positioned on any side of the screen: <br>
            <a href=\"#\">top</a>
            - <a href=\"#\">right</a>
            - <a href=\"#\">bottom</a>
            - <a href=\"#\">left</a>
        </p>
        <p>
            Instructions and download .
        </p>
        <p>
            The name, <em>Meny</em>, is swedish.
        </p>
        <small>
            Created by hakim.se</a>
        </small>
    </article>

</div>

<script src=";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "meny.js", 1 => true), "method"), "html", null, true);
        echo "></script>
<script>
    // Create an instance of Meny
    var meny = Meny.create({
        // The element that will be animated in from off screen
        menuElement: document.querySelector( '.meny' ),

        // The contents that gets pushed aside while Meny is active
        contentsElement: document.querySelector( '.contents' ),

        // [optional] The alignment of the menu (top/right/bottom/left)
        position: Meny.getQuery().p || 'left',

        // [optional] The height of the menu (when using top/bottom position)
        height: 200,

        // [optional] The width of the menu (when using left/right position)
        width: 260,

        // [optional] Distance from mouse (in pixels) when menu should open
        threshold: 40,

        // [optional] Use mouse movement to automatically open/close
        mouse: true,

        // [optional] Use touch swipe events to open/close
        touch: true
    });

    // API Methods:
    // meny.open();
    // meny.close();
    // meny.isOpen();

    // Events:
    // meny.addEventListener( 'open', function(){ console.log( 'open' ); } );
    // meny.addEventListener( 'close', function(){ console.log( 'close' ); } );

    // Embed an iframe if a URL is passed in
    if( Meny.getQuery().u && Meny.getQuery().u.match( /^http/gi ) ) {
        var contents = document.querySelector( '.contents' );
        contents.style.padding = '0px';
        contents.innerHTML = '<div class=\"cover\"></div><iframe src=\"'+ Meny.getQuery().u +'\" style=\"width: 100%; height: 100%; border: 0; position: absolute;\"></iframe>';
    }
</script>";
    }

    public function getTemplateName()
    {
        return "index/manual.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 56,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
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


<link rel=\"stylesheet\" href={{asset.css('list.css',true)}}>

<body>

<div class=\"meny\">
    <h2>More Experiments</h2>
    <ul>
        <li><a href=\"./\">Avgrund</a></li>
        <li><a href=\"#\">Radar</a></li>
        <li><a href=\"#\">forkit.js</a></li>
        <li><a href=\"#\">stroll.js</a></li>
        <li><a href=\"#\">zoom.js</a></li>
        <li><a href=\"#\">reveal.js</a></li>
        <li><a href=\"#\">Sinuous for iOS</a></li>
        <li><a href=\"#\">DOM Tree</a></li>
        <li><a href=\"#\">Holobox</a></li>
        <li><a href=\"#\">404</a></li>
    </ul>
</div>

<div class=\"meny-arrow\"></div>

<div class=\"contents\">
    <article>
        <h1>Meny</h1>
        <p>
            A three dimensional and space efficient menu.
        </p>
        <p>
            Move your mouse towards the arrow &mdash; or swipe in from the arrow if you're on a touch device &mdash; to open.
        </p>
        <p>
            Meny can be positioned on any side of the screen: <br>
            <a href=\"#\">top</a>
            - <a href=\"#\">right</a>
            - <a href=\"#\">bottom</a>
            - <a href=\"#\">left</a>
        </p>
        <p>
            Instructions and download .
        </p>
        <p>
            The name, <em>Meny</em>, is swedish.
        </p>
        <small>
            Created by hakim.se</a>
        </small>
    </article>

</div>

<script src={{asset.js('meny.js',true)}}></script>
<script>
    // Create an instance of Meny
    var meny = Meny.create({
        // The element that will be animated in from off screen
        menuElement: document.querySelector( '.meny' ),

        // The contents that gets pushed aside while Meny is active
        contentsElement: document.querySelector( '.contents' ),

        // [optional] The alignment of the menu (top/right/bottom/left)
        position: Meny.getQuery().p || 'left',

        // [optional] The height of the menu (when using top/bottom position)
        height: 200,

        // [optional] The width of the menu (when using left/right position)
        width: 260,

        // [optional] Distance from mouse (in pixels) when menu should open
        threshold: 40,

        // [optional] Use mouse movement to automatically open/close
        mouse: true,

        // [optional] Use touch swipe events to open/close
        touch: true
    });

    // API Methods:
    // meny.open();
    // meny.close();
    // meny.isOpen();

    // Events:
    // meny.addEventListener( 'open', function(){ console.log( 'open' ); } );
    // meny.addEventListener( 'close', function(){ console.log( 'close' ); } );

    // Embed an iframe if a URL is passed in
    if( Meny.getQuery().u && Meny.getQuery().u.match( /^http/gi ) ) {
        var contents = document.querySelector( '.contents' );
        contents.style.padding = '0px';
        contents.innerHTML = '<div class=\"cover\"></div><iframe src=\"'+ Meny.getQuery().u +'\" style=\"width: 100%; height: 100%; border: 0; position: absolute;\"></iframe>';
    }
</script>", "index/manual.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\Index\\manual.html");
    }
}
