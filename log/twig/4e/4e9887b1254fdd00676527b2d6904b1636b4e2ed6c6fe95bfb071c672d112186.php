<?php

/* index/vue.html */
class __TwigTemplate_61ceb77ea959a519f149319149a7fb5838f0a8e5181fe7c6d5b57171da36eccc extends Twig_Template
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
<head>
    <meta charset=\"utf-8\">
    ";
        // line 5
        $this->loadTemplate("header.html", "index/vue.html", 5)->display($context);
        // line 6
        echo "</head>
<body>


<div id=\"example-3\">

    <child message1=\"child\"></child>

    <zujian msg=\"zujian\"
            v-for=\"(item,index) in groceryList\"
            :todo=\"item\"
            :index=\"index\"
            :key=\"item.id\"
            :one=\"groceryList\"
    ></zujian>

    <button @click=\"go\" v-if=\"is_search === 1\">search</button>
</div>
</body>
</html>

<script>
Vue.component('child',{
    props: ['message1'],
    template:'<span>\${message1}</span>',
    delimiters:['\${', '}']

});
Vue.component('zujian',{
    props: ['msg','todo','index','one'],
    template:'<span>\${msg}\${one.name}</span>',
    delimiters:['\${', '}']

});
    var sea = new Vue({
        el: '#example-3',
        methods: {
            go: function () {
                \$.ajax({url:'/api/index/post',
                    type:'post',
                    data:{
                        name:999
                    },
                    success:function(r){
                        sea.is_search = 0;
                        sea.groceryList = r;
                    }
                })
            }
        },
        data:{
            is_search: 1,
            groceryList:''
        },
        delimiters:['\${', '}']
    })
</script>";
    }

    public function getTemplateName()
    {
        return "index/vue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  19 => 1,);
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
<head>
    <meta charset=\"utf-8\">
    {% include \"header.html\" %}
</head>
<body>


<div id=\"example-3\">

    <child message1=\"child\"></child>

    <zujian msg=\"zujian\"
            v-for=\"(item,index) in groceryList\"
            :todo=\"item\"
            :index=\"index\"
            :key=\"item.id\"
            :one=\"groceryList\"
    ></zujian>

    <button @click=\"go\" v-if=\"is_search === 1\">search</button>
</div>
</body>
</html>

<script>
Vue.component('child',{
    props: ['message1'],
    template:'<span>\${message1}</span>',
    delimiters:['\${', '}']

});
Vue.component('zujian',{
    props: ['msg','todo','index','one'],
    template:'<span>\${msg}\${one.name}</span>',
    delimiters:['\${', '}']

});
    var sea = new Vue({
        el: '#example-3',
        methods: {
            go: function () {
                \$.ajax({url:'/api/index/post',
                    type:'post',
                    data:{
                        name:999
                    },
                    success:function(r){
                        sea.is_search = 0;
                        sea.groceryList = r;
                    }
                })
            }
        },
        data:{
            is_search: 1,
            groceryList:''
        },
        delimiters:['\${', '}']
    })
</script>", "index/vue.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Api\\views\\index\\vue.html");
    }
}
