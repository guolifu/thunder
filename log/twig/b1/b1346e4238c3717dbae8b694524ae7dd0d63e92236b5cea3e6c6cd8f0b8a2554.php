<?php

/* Index/manual.html */
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
        echo "<link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/css/layui.css"), "method"), "html", null, true);
        echo ">
";
        // line 2
        $this->loadTemplate("header.html", "Index/manual.html", 2)->display($context);
        // line 3
        $this->loadTemplate("layout_top.html", "Index/manual.html", 3)->display($context);
        // line 4
        $this->loadTemplate("nav.html", "Index/manual.html", 4)->display($context);
        // line 5
        echo "<style>
    a{
        cursor: pointer;
    }
</style>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "/Public/js/vendor/jquery-1.11.2.min.js\"></script>


<link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "list.css"), "method"), "html", null, true);
        echo ">


<body>

<div class=\"meny\" >
    <h2>Thunder manual</h2>
    <ul id=\"left-nav\" >
        <left-nav v-for=\"(item,index) in nav_list\"
                  :nav=\"item\"
                  :index=\"index\"
                  :key=\"item.id\"
                  @click.native=\"go(item.id)\"
        ></left-nav>
    </ul>
</div>

<div  class=\"meny-arrow\"></div>
<div id=\"display\">
    <con-display v-if=\"display==1\"></con-display>
</div>


<div  class=\"contents\">
    <article  id=\"contents\" >
        <content-title :title=\"title\" ></content-title>
        <content-content   v-html=\"content\"  ></content-content>
        <small>
            Created by leileida.
        </small>
    </article>

</div>

<script src=";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "meny.js"), "method"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/layui.js"), "method"), "html", null, true);
        echo "\"></script>
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
    Vue.component('left-nav',{
        props:['nav'],
        template:'<li><a>{nav.title}</a></li>',
        delimiters:['{', '}']
    })
    var leftNav = new Vue({
        el:\"#left-nav\",
        data:{
            nav_list:''
        },
        methods:{
            go:function (id) {
                if(id == content.id) return false;
                dis.display = 1;
                    \$.ajax({
                    url:'./home/index/get_manual',
                    type:'post',
                    data:{
                      id:id
                    },
                    success:function(r){
                        content.id = r.id;
                        content.title = r.title;
                        content.content = r.content;
                        dis.display = 0;
                        document.getElementById(\"contents\").scrollIntoView();
                    }
                })

            }
        }

    })

    Vue.component('content-title',{
        props:['title'],
        template:'<h1>{title}</h1>',
        delimiters:['{', '}']
    })
    Vue.component('content-content',{
        props:['content'],
        template:'<article>{content}</article>',
        delimiters:['{', '}']
    })



    var content = new Vue({
        el:\"#contents\",
        data:{
            id:'',
            title:'',
            content:''
        }
    })
    \$.ajax({
        url:'./home/index/get_manual',
        type:'post',
        success:function(r){
            content.title = r.title;
            content.content = r.content;
            \$.ajax({
                url:'./home/index/get_manualList',
                type:'post',
                success:function(r){
                    leftNav.nav_list = r;
                    dis.display=0;
                }
            })
        }
    })
    Vue.component('con-display',{
        template:'<div style=\"position:fixed;width:100%;height:100%;z-index: 1;background-color: rgb(0, 0, 0);opacity: 0.3;\" ><img style=\"position:relative;top:40%;left: 48%\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "\\\\Admin\\\\plugins\\\\layui\\\\css\\\\modules\\\\layer\\\\default\\\\loading-2.gif\"/></div>'
    })
    var dis = new Vue({
        el:'#display',
        data:{
            display:'1'
        }
    })

</script>";
    }

    public function getTemplateName()
    {
        return "Index/manual.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 164,  84 => 48,  80 => 47,  43 => 13,  37 => 10,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href={{asset.asset('plugins/layui/css/layui.css')}}>
{% include \"header.html\" %}
{% include \"layout_top.html\" %}
{% include \"nav.html\" %}
<style>
    a{
        cursor: pointer;
    }
</style>
<script src=\"{{__PUBLIC__}}/Public/js/vendor/jquery-1.11.2.min.js\"></script>


<link rel=\"stylesheet\" href={{asset.css('list.css')}}>


<body>

<div class=\"meny\" >
    <h2>Thunder manual</h2>
    <ul id=\"left-nav\" >
        <left-nav v-for=\"(item,index) in nav_list\"
                  :nav=\"item\"
                  :index=\"index\"
                  :key=\"item.id\"
                  @click.native=\"go(item.id)\"
        ></left-nav>
    </ul>
</div>

<div  class=\"meny-arrow\"></div>
<div id=\"display\">
    <con-display v-if=\"display==1\"></con-display>
</div>


<div  class=\"contents\">
    <article  id=\"contents\" >
        <content-title :title=\"title\" ></content-title>
        <content-content   v-html=\"content\"  ></content-content>
        <small>
            Created by leileida.
        </small>
    </article>

</div>

<script src={{asset.js('meny.js')}}></script>
<script src=\"{{asset.asset('plugins/layui/layui.js')}}\"></script>
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
    Vue.component('left-nav',{
        props:['nav'],
        template:'<li><a>{nav.title}</a></li>',
        delimiters:['{', '}']
    })
    var leftNav = new Vue({
        el:\"#left-nav\",
        data:{
            nav_list:''
        },
        methods:{
            go:function (id) {
                if(id == content.id) return false;
                dis.display = 1;
                    \$.ajax({
                    url:'./home/index/get_manual',
                    type:'post',
                    data:{
                      id:id
                    },
                    success:function(r){
                        content.id = r.id;
                        content.title = r.title;
                        content.content = r.content;
                        dis.display = 0;
                        document.getElementById(\"contents\").scrollIntoView();
                    }
                })

            }
        }

    })

    Vue.component('content-title',{
        props:['title'],
        template:'<h1>{title}</h1>',
        delimiters:['{', '}']
    })
    Vue.component('content-content',{
        props:['content'],
        template:'<article>{content}</article>',
        delimiters:['{', '}']
    })



    var content = new Vue({
        el:\"#contents\",
        data:{
            id:'',
            title:'',
            content:''
        }
    })
    \$.ajax({
        url:'./home/index/get_manual',
        type:'post',
        success:function(r){
            content.title = r.title;
            content.content = r.content;
            \$.ajax({
                url:'./home/index/get_manualList',
                type:'post',
                success:function(r){
                    leftNav.nav_list = r;
                    dis.display=0;
                }
            })
        }
    })
    Vue.component('con-display',{
        template:'<div style=\"position:fixed;width:100%;height:100%;z-index: 1;background-color: rgb(0, 0, 0);opacity: 0.3;\" ><img style=\"position:relative;top:40%;left: 48%\" src=\"{{__PUBLIC__}}\\\\Admin\\\\plugins\\\\layui\\\\css\\\\modules\\\\layer\\\\default\\\\loading-2.gif\"/></div>'
    })
    var dis = new Vue({
        el:'#display',
        data:{
            display:'1'
        }
    })

</script>", "Index/manual.html", "D:\\phpStudy\\WWW\\thunder\\app\\Home\\views\\Index\\manual.html");
    }
}
