<?php

/* index/btable.html */
class __TwigTemplate_ed17c30ef14206e3e60b2725dad942fa96172f0de05aaac40e03200949ea13d6 extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>btable</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"format-detection\" content=\"telephone=no\">

    <link rel=\"stylesheet\" href=\"plugins/layui/css/layui.css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"plugins/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/btable.css\" />
</head>

<body style=\" background-color: gainsboro;\">

    <div style=\"margin:0px; background-color: white; margin:0 10px;\">
        <blockquote class=\"layui-elem-quote\">
            <button type=\"button\" class=\"layui-btn layui-btn-small\" id=\"getAll\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> 添加</button>
            <form class=\"layui-form\" style=\"float:right;\">
                <div class=\"layui-form-item\" style=\"margin:0;\">
                    <label class=\"layui-form-label\">名称</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"name\" placeholder=\"支持模糊查询..\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\" style=\"padding:0;\">
                        <button lay-filter=\"search\" class=\"layui-btn\" lay-submit><i class=\"fa fa-search\" aria-hidden=\"true\"></i> 查询</button>
                    </div>
                </div>
            </form>
        </blockquote>
        <div id=\"content\" style=\"width: 100%;height: 533px;\"></div>
    </div>

    <script type=\"text/javascript\" src=\"plugins/layui/layui.js\"></script>
    <script>
        layui.config({
            base: 'js/',
            v: new Date().getTime()
        }).use(['btable', 'form'], function () {
            var btable = layui.btable(),
                \$ = layui.jquery,
                layerTips = parent.layer === undefined ? layui.layer : parent.layer, //获取父窗口的layer对象
                layer = layui.layer,//获取当前窗口的layer对象;
                form = layui.form();

            btable.set({
                openWait: true,//开启等待框
                elem: '#content',
                url: 'datas/btable_data.json', //数据源地址
                pageSize: 3,//页大小
                params: {//额外的请求参数
                    t: new Date().getTime()
                },
                columns: [{ //配置数据列
                    fieldName: '昵称', //显示名称
                    field: 'name', //字段名
                    sortable: true //是否显示排序
                }, {
                    fieldName: '加入时间',
                    field: 'createtime',
                    sortable: true
                }, {
                    fieldName: '签名',
                    field: 'sign',
                    format: function (id, obj) {
                        //id
                        console.log(id);
                        //行数据对象
                        console.log(obj);
                        //返回值：格式化的纯文本或html文本
                        return obj.sign;
                    }
                }, {
                    fieldName: '操作',
                    field: 'id',
                    format: function (val,obj) {
                        var html = '<input type=\"button\" value=\"编辑\" data-action=\"edit\" data-id=\"' + val + '\" class=\"layui-btn layui-btn-mini\" /> ' +
                            '<input type=\"button\" value=\"删除\" data-action=\"del\" data-id=\"' + val + '\" class=\"layui-btn layui-btn-mini layui-btn-danger\" />';
                        return html;
                    }
                }],
                even: true,//隔行变色
                field: 'id', //主键ID
                //skin: 'row',
                checkbox: false,//是否显示多选框
                paged: true, //是否显示分页
                singleSelect: false, //只允许选择一行，checkbox为true生效
                onSuccess: function (\$elem) { //\$elem当前窗口的jq对象
                    \$elem.children('tr').each(function () {
                        \$(this).children('td:last-child').children('input').each(function () {
                            var \$that = \$(this);
                            var action = \$that.data('action');
                            var id = \$that.data('id');
                            \$that.on('click', function () {
                                switch (action) {
                                    case 'edit':
                                        layerTips.msg(action + \":\" + id);
                                        break;
                                    case 'del': //删除
                                        var name = \$that.parent('td').siblings('td[data-field=name]').text();
                                        //询问框
                                        layerTips.confirm('确定要删除[ <span style=\"color:red;\">' + name + '</span> ] ？', { icon: 3, title: '系统提示' }, function (index) {
                                            \$that.parent('td').parent('tr').remove();
                                            layerTips.msg('删除成功.');
                                        });
                                        break;
                                }
                            });
                        });
                    });
                }
            });
            btable.render();
            //监听搜索表单的提交事件
            form.on('submit(search)', function (data) {
                btable.get(data.field);
                return false;
            });
            \$(window).on('resize', function (e) {
                var \$that = \$(this);
                \$('#content').height(\$that.height() - 92);
            }).resize();
        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index/btable.html";
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
        return new Twig_Source("﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>btable</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"format-detection\" content=\"telephone=no\">

    <link rel=\"stylesheet\" href=\"plugins/layui/css/layui.css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"plugins/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/btable.css\" />
</head>

<body style=\" background-color: gainsboro;\">

    <div style=\"margin:0px; background-color: white; margin:0 10px;\">
        <blockquote class=\"layui-elem-quote\">
            <button type=\"button\" class=\"layui-btn layui-btn-small\" id=\"getAll\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> 添加</button>
            <form class=\"layui-form\" style=\"float:right;\">
                <div class=\"layui-form-item\" style=\"margin:0;\">
                    <label class=\"layui-form-label\">名称</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"name\" placeholder=\"支持模糊查询..\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\" style=\"padding:0;\">
                        <button lay-filter=\"search\" class=\"layui-btn\" lay-submit><i class=\"fa fa-search\" aria-hidden=\"true\"></i> 查询</button>
                    </div>
                </div>
            </form>
        </blockquote>
        <div id=\"content\" style=\"width: 100%;height: 533px;\"></div>
    </div>

    <script type=\"text/javascript\" src=\"plugins/layui/layui.js\"></script>
    <script>
        layui.config({
            base: 'js/',
            v: new Date().getTime()
        }).use(['btable', 'form'], function () {
            var btable = layui.btable(),
                \$ = layui.jquery,
                layerTips = parent.layer === undefined ? layui.layer : parent.layer, //获取父窗口的layer对象
                layer = layui.layer,//获取当前窗口的layer对象;
                form = layui.form();

            btable.set({
                openWait: true,//开启等待框
                elem: '#content',
                url: 'datas/btable_data.json', //数据源地址
                pageSize: 3,//页大小
                params: {//额外的请求参数
                    t: new Date().getTime()
                },
                columns: [{ //配置数据列
                    fieldName: '昵称', //显示名称
                    field: 'name', //字段名
                    sortable: true //是否显示排序
                }, {
                    fieldName: '加入时间',
                    field: 'createtime',
                    sortable: true
                }, {
                    fieldName: '签名',
                    field: 'sign',
                    format: function (id, obj) {
                        //id
                        console.log(id);
                        //行数据对象
                        console.log(obj);
                        //返回值：格式化的纯文本或html文本
                        return obj.sign;
                    }
                }, {
                    fieldName: '操作',
                    field: 'id',
                    format: function (val,obj) {
                        var html = '<input type=\"button\" value=\"编辑\" data-action=\"edit\" data-id=\"' + val + '\" class=\"layui-btn layui-btn-mini\" /> ' +
                            '<input type=\"button\" value=\"删除\" data-action=\"del\" data-id=\"' + val + '\" class=\"layui-btn layui-btn-mini layui-btn-danger\" />';
                        return html;
                    }
                }],
                even: true,//隔行变色
                field: 'id', //主键ID
                //skin: 'row',
                checkbox: false,//是否显示多选框
                paged: true, //是否显示分页
                singleSelect: false, //只允许选择一行，checkbox为true生效
                onSuccess: function (\$elem) { //\$elem当前窗口的jq对象
                    \$elem.children('tr').each(function () {
                        \$(this).children('td:last-child').children('input').each(function () {
                            var \$that = \$(this);
                            var action = \$that.data('action');
                            var id = \$that.data('id');
                            \$that.on('click', function () {
                                switch (action) {
                                    case 'edit':
                                        layerTips.msg(action + \":\" + id);
                                        break;
                                    case 'del': //删除
                                        var name = \$that.parent('td').siblings('td[data-field=name]').text();
                                        //询问框
                                        layerTips.confirm('确定要删除[ <span style=\"color:red;\">' + name + '</span> ] ？', { icon: 3, title: '系统提示' }, function (index) {
                                            \$that.parent('td').parent('tr').remove();
                                            layerTips.msg('删除成功.');
                                        });
                                        break;
                                }
                            });
                        });
                    });
                }
            });
            btable.render();
            //监听搜索表单的提交事件
            form.on('submit(search)', function (data) {
                btable.get(data.field);
                return false;
            });
            \$(window).on('resize', function (e) {
                var \$that = \$(this);
                \$('#content').height(\$that.height() - 92);
            }).resize();
        });
    </script>
</body>

</html>", "index/btable.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Admin\\views\\Index\\btable.html");
    }
}
