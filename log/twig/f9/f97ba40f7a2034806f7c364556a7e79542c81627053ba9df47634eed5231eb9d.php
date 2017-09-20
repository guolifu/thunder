<?php

/* index/list1.html */
class __TwigTemplate_11aad39a5a893e6e2e10f9e8a117631c5e87ee134c9932d2535025c7df9d2697 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"zh\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "normalize.css"), "method"), "html", null, true);
        echo " />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "default.css"), "method"), "html", null, true);
        echo "\">
    <link rel='stylesheet prefetch' href=";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "foundation.css"), "method"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "style.css"), "method"), "html", null, true);
        echo ">
    <!--[if IE]>
    <script src=\"http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js\"></script>
    <![endif]-->
</head>
<body>
<div class=\"\" style='width:15%'>
    <!-- This is mtree list -->
    <ul class=mtree>
        <li><a href=\"#\">Africa</a>
            <ul>
                <li><a href=\"#\">Algeria</a></li>
                <li><a href=\"#\">Marocco</a></li>
                <li><a href=\"#\">Libya</a></li>
                <li><a href=\"#\">Somalia</a></li>
                <li><a href=\"#\">Kenya</a></li>
                <li><a href=\"#\">Mauritania</a></li>
                <li><a href=\"#\">South Africa</a></li>
            </ul>
        </li>
        <li><a href=\"#\">America</a>
            <ul>
                <li><a href=\"#\">North-America</a>
                    <ul>
                        <li><a href=\"#\">Canada</a></li>
                        <li><a href=\"#\">USA</a>
                            <ul>
                                <li><a href=\"#\">New York</a></li>
                                <li><a href=\"#\">California</a>
                                    <ul>
                                        <li><a href=\"#\">Los Angeles</a></li>
                                        <li><a href=\"#\">San Diego</a></li>
                                        <li><a href=\"#\">Sacramento</a></li>
                                        <li><a href=\"#\">San Francisco</a></li>
                                        <li><a href=\"#\">Bakersville</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">Lousiana</a></li>
                                <li><a href=\"#\">Texas</a></li>
                                <li><a href=\"#\">Nevada</a></li>
                                <li><a href=\"#\">Montana</a></li>
                                <li><a href=\"#\">Virginia</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href=\"#\">Middle-America</a>
                    <ul>
                        <li><a href=\"#\">Mexico</a></li>
                        <li><a href=\"#\">Honduras</a></li>
                        <li><a href=\"#\">Guatemala</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">South-America</a>
                    <ul>
                        <li><a href=\"#\">Brazil</a></li>
                        <li><a href=\"#\">Argentina</a></li>
                        <li><a href=\"#\">Uruguay</a></li>
                        <li><a href=\"#\">Chile</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href=\"#\">Asia</a>
            <ul>
                <li><a href=\"#\">China</a></li>
                <li><a href=\"#\">India</a></li>
                <li><a href=\"#\">Malaysia</a></li>
                <li><a href=\"#\">Thailand</a></li>
                <li><a href=\"#\">Vietnam</a></li>
                <li><a href=\"#\">Singapore</a></li>
                <li><a href=\"#\">Indonesia</a></li>
                <li><a href=\"#\">Mongolia</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Europe</a>
            <ul>
                <li><a href=\"#\">North</a>
                    <ul>
                        <li><a href=\"#\">Norway</a></li>
                        <li><a href=\"#\">Sweden</a></li>
                        <li><a href=\"#\">Finland</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">East</a>
                    <ul>
                        <li><a href=\"#\">Romania</a></li>
                        <li><a href=\"#\">Bulgaria</a></li>
                        <li><a href=\"#\">Poland</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">South</a>
                    <ul>
                        <li><a href=\"#\">Italy</a></li>
                        <li><a href=\"#\">Greece</a></li>
                        <li><a href=\"#\">Spain</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">West</a>
                    <ul>
                        <li><a href=\"#\">France</a></li>
                        <li><a href=\"#\">England</a></li>
                        <li><a href=\"#\">Portugal</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href=\"#\">Oceania</a>
            <ul>
                <li><a href=\"#\">Australia</a></li>
                <li><a href=\"#\">New Zealand</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Arctica</a></li>
        <li><a href=\"#\">Antarctica</a></li>
    </ul>

</div>

<script src=";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "stopExecutionOnTimeout.js?t=1"), "method"), "html", null, true);
        echo "></script>
<script src=";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "js", array(0 => "jquery.velocity.min.js"), "method"), "html", null, true);
        echo "></script>
<script>
    ;(function (\$, window, document, undefined) {
        if (\$('ul.mtree').length) {
            var collapsed = true;
            var close_same_level = false;
            var duration = 400;
            var listAnim = true;
            var easing = 'easeOutQuart';
            \$('.mtree ul').css({
                'overflow': 'hidden',
                'height': collapsed ? 0 : 'auto',
                'display': collapsed ? 'none' : 'block'
            });
            var node = \$('.mtree li:has(ul)');
            node.each(function (index, val) {
                \$(this).children(':first-child').css('cursor', 'pointer');
                \$(this).addClass('mtree-node mtree-' + (collapsed ? 'closed' : 'open'));
                \$(this).children('ul').addClass('mtree-level-' + (\$(this).parentsUntil(\$('ul.mtree'), 'ul').length + 1));
            });
            \$('.mtree li > *:first-child').on('click.mtree-active', function (e) {
                if (\$(this).parent().hasClass('mtree-closed')) {
                    \$('.mtree-active').not(\$(this).parent()).removeClass('mtree-active');
                    \$(this).parent().addClass('mtree-active');
                } else if (\$(this).parent().hasClass('mtree-open')) {
                    \$(this).parent().removeClass('mtree-active');
                } else {
                    \$('.mtree-active').not(\$(this).parent()).removeClass('mtree-active');
                    \$(this).parent().toggleClass('mtree-active');
                }
            });
            node.children(':first-child').on('click.mtree', function (e) {
                var el = \$(this).parent().children('ul').first();
                var isOpen = \$(this).parent().hasClass('mtree-open');
                if ((close_same_level || \$('.csl').hasClass('active')) && !isOpen) {
                    var close_items = \$(this).closest('ul').children('.mtree-open').not(\$(this).parent()).children('ul');
                    if (\$.Velocity) {
                        close_items.velocity({ height: 0 }, {
                            duration: duration,
                            easing: easing,
                            display: 'none',
                            delay: 100,
                            complete: function () {
                                setNodeClass(\$(this).parent(), true);
                            }
                        });
                    } else {
                        close_items.delay(100).slideToggle(duration, function () {
                            setNodeClass(\$(this).parent(), true);
                        });
                    }
                }
                el.css({ 'height': 'auto' });
                if (!isOpen && \$.Velocity && listAnim)
                    el.find(' > li, li.mtree-open > ul > li').css({ 'opacity': 0 }).velocity('stop').velocity('list');
                if (\$.Velocity) {
                    el.velocity('stop').velocity({
                        height: isOpen ? [
                            0,
                            el.outerHeight()
                        ] : [
                            el.outerHeight(),
                            0
                        ]
                    }, {
                        queue: false,
                        duration: duration,
                        easing: easing,
                        display: isOpen ? 'none' : 'block',
                        begin: setNodeClass(\$(this).parent(), isOpen),
                        complete: function () {
                            if (!isOpen)
                                \$(this).css('height', 'auto');
                        }
                    });
                } else {
                    setNodeClass(\$(this).parent(), isOpen);
                    el.slideToggle(duration);
                }
                e.preventDefault();
            });
            function setNodeClass(el, isOpen) {
                if (isOpen) {
                    el.removeClass('mtree-open').addClass('mtree-closed');
                } else {
                    el.removeClass('mtree-closed').addClass('mtree-open');
                }
            }
            if (\$.Velocity && listAnim) {
                \$.Velocity.Sequences.list = function (element, options, index, size) {
                    \$.Velocity.animate(element, {
                        opacity: [
                            1,
                            0
                        ],
                        translateY: [
                            0,
                            -(index + 1)
                        ]
                    }, {
                        delay: index * (duration / size / 2),
                        duration: duration,
                        easing: easing
                    });
                };
            }
            if (\$('.mtree').css('opacity') == 0) {
                if (\$.Velocity) {
                    \$('.mtree').css('opacity', 1).children().css('opacity', 0).velocity('list');
                } else {
                    \$('.mtree').show(200);
                }
            }
        }
    }(jQuery, this, this.document));
    \$(document).ready(function () {
        var mtree = \$('ul.mtree');

        var skins = [
            'transit'
        ];
        mtree.addClass(skins[0]);

        var s = \$('.mtree-skin-selector');
        \$.each(skins, function (index, val) {
            s.find('ul').append('<li><button class=\"small skin\">' + val + '</button></li>');
        });
        s.find('ul').append('<li><button class=\"small csl active\">Close Same Level</button></li>');
        s.find('button.skin').each(function (index) {
            \$(this).on('click.mtree-skin-selector', function () {
                s.find('button.skin.active').removeClass('active');
                \$(this).addClass('active');
                mtree.removeClass(skins.join(' ')).addClass(skins[index]);
            });
        });
        s.find('button:first').addClass('active');
        s.find('.csl').on('click.mtree-close-same-level', function () {
            \$(this).toggleClass('active');
        });
    });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/list1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 130,  161 => 129,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"zh\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href={{asset.css('normalize.css')}} />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset.css('default.css')}}\">
    <link rel='stylesheet prefetch' href={{asset.css('foundation.css')}}>
    <link rel=\"stylesheet\" type=\"text/css\" href={{asset.css('style.css')}}>
    <!--[if IE]>
    <script src=\"http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js\"></script>
    <![endif]-->
</head>
<body>
<div class=\"\" style='width:15%'>
    <!-- This is mtree list -->
    <ul class=mtree>
        <li><a href=\"#\">Africa</a>
            <ul>
                <li><a href=\"#\">Algeria</a></li>
                <li><a href=\"#\">Marocco</a></li>
                <li><a href=\"#\">Libya</a></li>
                <li><a href=\"#\">Somalia</a></li>
                <li><a href=\"#\">Kenya</a></li>
                <li><a href=\"#\">Mauritania</a></li>
                <li><a href=\"#\">South Africa</a></li>
            </ul>
        </li>
        <li><a href=\"#\">America</a>
            <ul>
                <li><a href=\"#\">North-America</a>
                    <ul>
                        <li><a href=\"#\">Canada</a></li>
                        <li><a href=\"#\">USA</a>
                            <ul>
                                <li><a href=\"#\">New York</a></li>
                                <li><a href=\"#\">California</a>
                                    <ul>
                                        <li><a href=\"#\">Los Angeles</a></li>
                                        <li><a href=\"#\">San Diego</a></li>
                                        <li><a href=\"#\">Sacramento</a></li>
                                        <li><a href=\"#\">San Francisco</a></li>
                                        <li><a href=\"#\">Bakersville</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">Lousiana</a></li>
                                <li><a href=\"#\">Texas</a></li>
                                <li><a href=\"#\">Nevada</a></li>
                                <li><a href=\"#\">Montana</a></li>
                                <li><a href=\"#\">Virginia</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href=\"#\">Middle-America</a>
                    <ul>
                        <li><a href=\"#\">Mexico</a></li>
                        <li><a href=\"#\">Honduras</a></li>
                        <li><a href=\"#\">Guatemala</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">South-America</a>
                    <ul>
                        <li><a href=\"#\">Brazil</a></li>
                        <li><a href=\"#\">Argentina</a></li>
                        <li><a href=\"#\">Uruguay</a></li>
                        <li><a href=\"#\">Chile</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href=\"#\">Asia</a>
            <ul>
                <li><a href=\"#\">China</a></li>
                <li><a href=\"#\">India</a></li>
                <li><a href=\"#\">Malaysia</a></li>
                <li><a href=\"#\">Thailand</a></li>
                <li><a href=\"#\">Vietnam</a></li>
                <li><a href=\"#\">Singapore</a></li>
                <li><a href=\"#\">Indonesia</a></li>
                <li><a href=\"#\">Mongolia</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Europe</a>
            <ul>
                <li><a href=\"#\">North</a>
                    <ul>
                        <li><a href=\"#\">Norway</a></li>
                        <li><a href=\"#\">Sweden</a></li>
                        <li><a href=\"#\">Finland</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">East</a>
                    <ul>
                        <li><a href=\"#\">Romania</a></li>
                        <li><a href=\"#\">Bulgaria</a></li>
                        <li><a href=\"#\">Poland</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">South</a>
                    <ul>
                        <li><a href=\"#\">Italy</a></li>
                        <li><a href=\"#\">Greece</a></li>
                        <li><a href=\"#\">Spain</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">West</a>
                    <ul>
                        <li><a href=\"#\">France</a></li>
                        <li><a href=\"#\">England</a></li>
                        <li><a href=\"#\">Portugal</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href=\"#\">Oceania</a>
            <ul>
                <li><a href=\"#\">Australia</a></li>
                <li><a href=\"#\">New Zealand</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Arctica</a></li>
        <li><a href=\"#\">Antarctica</a></li>
    </ul>

</div>

<script src={{asset.js('stopExecutionOnTimeout.js?t=1')}}></script>
<script src={{asset.js('jquery.velocity.min.js')}}></script>
<script>
    ;(function (\$, window, document, undefined) {
        if (\$('ul.mtree').length) {
            var collapsed = true;
            var close_same_level = false;
            var duration = 400;
            var listAnim = true;
            var easing = 'easeOutQuart';
            \$('.mtree ul').css({
                'overflow': 'hidden',
                'height': collapsed ? 0 : 'auto',
                'display': collapsed ? 'none' : 'block'
            });
            var node = \$('.mtree li:has(ul)');
            node.each(function (index, val) {
                \$(this).children(':first-child').css('cursor', 'pointer');
                \$(this).addClass('mtree-node mtree-' + (collapsed ? 'closed' : 'open'));
                \$(this).children('ul').addClass('mtree-level-' + (\$(this).parentsUntil(\$('ul.mtree'), 'ul').length + 1));
            });
            \$('.mtree li > *:first-child').on('click.mtree-active', function (e) {
                if (\$(this).parent().hasClass('mtree-closed')) {
                    \$('.mtree-active').not(\$(this).parent()).removeClass('mtree-active');
                    \$(this).parent().addClass('mtree-active');
                } else if (\$(this).parent().hasClass('mtree-open')) {
                    \$(this).parent().removeClass('mtree-active');
                } else {
                    \$('.mtree-active').not(\$(this).parent()).removeClass('mtree-active');
                    \$(this).parent().toggleClass('mtree-active');
                }
            });
            node.children(':first-child').on('click.mtree', function (e) {
                var el = \$(this).parent().children('ul').first();
                var isOpen = \$(this).parent().hasClass('mtree-open');
                if ((close_same_level || \$('.csl').hasClass('active')) && !isOpen) {
                    var close_items = \$(this).closest('ul').children('.mtree-open').not(\$(this).parent()).children('ul');
                    if (\$.Velocity) {
                        close_items.velocity({ height: 0 }, {
                            duration: duration,
                            easing: easing,
                            display: 'none',
                            delay: 100,
                            complete: function () {
                                setNodeClass(\$(this).parent(), true);
                            }
                        });
                    } else {
                        close_items.delay(100).slideToggle(duration, function () {
                            setNodeClass(\$(this).parent(), true);
                        });
                    }
                }
                el.css({ 'height': 'auto' });
                if (!isOpen && \$.Velocity && listAnim)
                    el.find(' > li, li.mtree-open > ul > li').css({ 'opacity': 0 }).velocity('stop').velocity('list');
                if (\$.Velocity) {
                    el.velocity('stop').velocity({
                        height: isOpen ? [
                            0,
                            el.outerHeight()
                        ] : [
                            el.outerHeight(),
                            0
                        ]
                    }, {
                        queue: false,
                        duration: duration,
                        easing: easing,
                        display: isOpen ? 'none' : 'block',
                        begin: setNodeClass(\$(this).parent(), isOpen),
                        complete: function () {
                            if (!isOpen)
                                \$(this).css('height', 'auto');
                        }
                    });
                } else {
                    setNodeClass(\$(this).parent(), isOpen);
                    el.slideToggle(duration);
                }
                e.preventDefault();
            });
            function setNodeClass(el, isOpen) {
                if (isOpen) {
                    el.removeClass('mtree-open').addClass('mtree-closed');
                } else {
                    el.removeClass('mtree-closed').addClass('mtree-open');
                }
            }
            if (\$.Velocity && listAnim) {
                \$.Velocity.Sequences.list = function (element, options, index, size) {
                    \$.Velocity.animate(element, {
                        opacity: [
                            1,
                            0
                        ],
                        translateY: [
                            0,
                            -(index + 1)
                        ]
                    }, {
                        delay: index * (duration / size / 2),
                        duration: duration,
                        easing: easing
                    });
                };
            }
            if (\$('.mtree').css('opacity') == 0) {
                if (\$.Velocity) {
                    \$('.mtree').css('opacity', 1).children().css('opacity', 0).velocity('list');
                } else {
                    \$('.mtree').show(200);
                }
            }
        }
    }(jQuery, this, this.document));
    \$(document).ready(function () {
        var mtree = \$('ul.mtree');

        var skins = [
            'transit'
        ];
        mtree.addClass(skins[0]);

        var s = \$('.mtree-skin-selector');
        \$.each(skins, function (index, val) {
            s.find('ul').append('<li><button class=\"small skin\">' + val + '</button></li>');
        });
        s.find('ul').append('<li><button class=\"small csl active\">Close Same Level</button></li>');
        s.find('button.skin').each(function (index) {
            \$(this).on('click.mtree-skin-selector', function () {
                s.find('button.skin.active').removeClass('active');
                \$(this).addClass('active');
                mtree.removeClass(skins.join(' ')).addClass(skins[index]);
            });
        });
        s.find('button:first').addClass('active');
        s.find('.csl').on('click.mtree-close-same-level', function () {
            \$(this).toggleClass('active');
        });
    });
</script>
</body>
</html>", "index/list1.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Home\\views\\Index\\list1.html");
    }
}
