<?php

/* Manual/index.html */
class __TwigTemplate_17f65d046851717db05574358017e0d573849feb8e46c3665b27216a82bcbad3 extends Twig_Template
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

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Table</title>
\t\t<link rel=\"stylesheet\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/css/layui.css"), "method"), "html", null, true);
        echo " media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "global.css"), "method"), "html", null, true);
        echo "\" media=\"all\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/font-awesome/css/font-awesome.min.css"), "method"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "table.css"), "method"), "html", null, true);
        echo "\" />
\t</head>

\t<body>
\t\t<div class=\"admin-main\">

\t\t\t<blockquote class=\"layui-elem-quote\">
\t\t\t\t<a href=\"javascript:;\" class=\"layui-btn layui-btn-small\" id=\"add\">
\t\t\t\t\t<i class=\"layui-icon\">&#xe608;</i> 添加文档
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"layui-btn layui-btn-small\" id=\"import\">
\t\t\t\t\t<i class=\"layui-icon\">&#xe608;</i> 导入信息
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"layui-btn layui-btn-small\">
\t\t\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 导出信息
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"layui-btn layui-btn-small\" id=\"getSelected\">
\t\t\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 获取全选信息
\t\t\t\t</a>
\t\t\t\t<a href=\"javascript:;\" class=\"layui-btn layui-btn-small\" id=\"search\">
\t\t\t\t\t<i class=\"layui-icon\">&#xe615;</i> 搜索
\t\t\t\t</a>
\t\t\t</blockquote>
\t\t\t<fieldset class=\"layui-elem-field\">
\t\t\t\t<legend>数据列表</legend>
\t\t\t\t<div class=\"layui-field-box layui-form\">
\t\t\t\t\t<table class=\"layui-table admin-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th style=\"width: 30px;\"><input type=\"checkbox\" lay-filter=\"allselector\" lay-skin=\"primary\"></th>
\t\t\t\t\t\t\t\t<th>标题</th>
\t\t\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t\t\t<th>修改时间</th>
\t\t\t\t\t\t\t\t<th>摘要</th>
\t\t\t\t\t\t\t\t<th>排序</th>
\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"content\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<div class=\"admin-table-page\">
\t\t\t\t<div id=\"paged\" class=\"page\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--模板-->
\t\t<script type=\"text/html\" id=\"tpl\">

\t\t\t<%# layui.each(d.list, function(index, item){ %>
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" lay-skin=\"primary\"></td>
\t\t\t\t<td><% item.title %></td>
\t\t\t\t<td><% item.add_time %></td>
\t\t\t\t<td><% item.update_time %></td>
\t\t\t\t<td><% item.abs %></td>
\t\t\t\t<td><% item.sort %></td>

\t\t\t\t<td>
\t\t\t\t\t<!--<a href=\"/detail-1\" target=\"_blank\" class=\"layui-btn layui-btn-normal layui-btn-mini\">预览</a>-->
\t\t\t\t\t<a href=\"javascript:;\" data-id=\"<% item.id %>\" data-name=\"<% item.title %>\" data-opt=\"edit\" class=\"layui-btn layui-btn-mini\">编辑</a>
\t\t\t\t\t<a href=\"javascript:;\" data-id=\"<% item.id %>\" data-name=\"<% item.title %>\" data-opt=\"del\" class=\"layui-btn layui-btn-danger layui-btn-mini\">删除</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<%# }); %>

\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/layui.js"), "method"), "html", null, true);
        echo "\"></script>

\t\t<script>
\t\t\tlayui.config({
\t\t\t\tbase: '";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["__PUBLIC__"]) ? $context["__PUBLIC__"] : null), "html", null, true);
        echo "/Admin/js/'
\t\t\t});

\t\t\tlayui.use(['paging','layedit', 'form','code'], function() {
                layui.code({
                    about:false
                }); //引用code方法
\t\t\t\tvar \$ = layui.jquery,
\t\t\t\t\tpaging = layui.paging(),
\t\t\t\t\tlayerTips = parent.layer === undefined ? layui.layer : parent.layer, //获取父窗口的layer对象
\t\t\t\t\tlayer = layui.layer, //获取当前窗口的layer对象
\t\t\t\t\tform = layui.form();
\t\t\t\tvar layedit = layui.layedit;
                paging.init({
                    openWait: true,
                    url: 'datas/laytpl_laypage_data.json?v=' + new Date().getTime(), //地址
\t\t\t\t\telem: '#content', //内容容器
\t\t\t\t\tparams: { //发送到服务端的参数
\t\t\t\t\t},
\t\t\t\t\ttype: 'GET',
\t\t\t\t\ttempElem: '#tpl', //模块容器
\t\t\t\t\tpageConfig: { //分页参数配置
\t\t\t\t\t\telem: '#paged', //分页容器
\t\t\t\t\t\tpageSize: 10 //分页大小
\t\t\t\t\t},
\t\t\t\t\tsuccess: function() { //渲染成功的回调
\t\t\t\t\t\t//alert('渲染成功');
\t\t\t\t\t},
\t\t\t\t\tfail: function(msg) { //获取数据失败的回调
\t\t\t\t\t\t//alert('获取数据失败')
\t\t\t\t\t},
\t\t\t\t\tcomplate: function() { //完成的回调
\t\t\t\t\t\t//alert('处理完成');
\t\t\t\t\t\t//重新渲染复选框
\t\t\t\t\t\tform.render('checkbox');
\t\t\t\t\t\tform.on('checkbox(allselector)', function(data) {
\t\t\t\t\t\t\tvar elem = data.elem;

\t\t\t\t\t\t\t\$('#content').children('tr').each(function() {
\t\t\t\t\t\t\t\tvar \$that = \$(this);
\t\t\t\t\t\t\t\t//全选或反选
\t\t\t\t\t\t\t\t\$that.children('td').eq(0).children('input[type=checkbox]')[0].checked = elem.checked;
\t\t\t\t\t\t\t\tform.render('checkbox');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});

\t\t\t\t\t\t//绑定所有编辑按钮事件\t\t\t\t\t\t
\t\t\t\t\t\t\$('#content').children('tr').each(function() {
\t\t\t\t\t\t\tvar \$that = \$(this);

\t\t\t\t\t\t\t/*删除*/
\t\t\t\t\t\t\t\$that.children('td:last-child').children('a[data-opt=del]').on('click', function() {
\t\t\t\t\t\t\t\tvar title = \$(this).data('name');
\t\t\t\t\t\t\t\tvar del_id = \$(this).data('id');
\t\t\t\t\t\t\t\tlayer.confirm('您确定要删除这条数据吗？', {
\t\t\t\t\t\t\t\t\tbtn: ['确定','取消'], //按钮
\t\t\t\t\t\t\t\t\ttitle: '删除-'+title
\t\t\t\t\t\t\t\t}, function()
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\turl: './delete',
\t\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\t\t'id': del_id
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess : function(res){
\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg(res.msg);
\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t/*编辑*/
\t\t\t\t\t\t\t\$that.children('td:last-child').children('a[data-opt=edit]').on('click', function() {
//\t\t\t\t\t\t\t\tlayer.msg(\$(this).data('name'));
\t\t\t\t\t\t\t\tvar edit_title = \$(this).data('name');
\t\t\t\t\t\t\t\tvar edit_id = \$(this).data('id');
\t\t\t\t\t\t\t\t\$.get('./edit_form/id/'+edit_id, null, function(form) {
\t\t\t\t\t\t\t\t\taddBoxIndex = layer.open({
\t\t\t\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\t\t\t\ttitle: '编辑-'+edit_title,
\t\t\t\t\t\t\t\t\t\tcontent: form,
\t\t\t\t\t\t\t\t\t\tbtn: ['保存', '取消'],
\t\t\t\t\t\t\t\t\t\tshade: false,
//\t\t\t\t\t\t\t\t\t\toffset: ['100px', '30%'],
\t\t\t\t\t\t\t\t\t\tarea: ['1000px', '500px'],
\t\t\t\t\t\t\t\t\t\tmaxmin: true,
\t\t\t\t\t\t\t\t\t\tyes: function(index) {
\t\t\t\t\t\t\t\t\t\t\t//触发表单的提交事件
\t\t\t\t\t\t\t\t\t\t\t\$('form.layui-form').find('button[lay-filter=edit]').click();
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tfull: function(elem) {
\t\t\t\t\t\t\t\t\t\t\tvar win = window.top === window.self ? window : parent.window;
\t\t\t\t\t\t\t\t\t\t\t\$(win).on('resize', function() {
\t\t\t\t\t\t\t\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\telem.width(\$this.width()).height(\$this.height()).css({
\t\t\t\t\t\t\t\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\t\t\t\t\t\t\t\tleft: 0
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\telem.children('div.layui-layer-content').height(\$this.height() - 95);
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess: function(layero, index) {
\t\t\t\t\t\t\t\t\t\t\t//弹出窗口成功后渲染表单
\t\t\t\t\t\t\t\t\t\t\tvar editIndex = layedit.build('LAY_demo1');
\t\t\t\t\t\t\t\t\t\t\tvar form = layui.form();

\t\t\t\t\t\t\t\t\t\t\t//自定义验证规则
\t\t\t\t\t\t\t\t\t\t\tform.verify({
\t\t\t\t\t\t\t\t\t\t\t\tcontent: function(value){
\t\t\t\t\t\t\t\t\t\t\t\t\tlayedit.sync(editIndex);
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\tform.render();
\t\t\t\t\t\t\t\t\t\t\tform.on('submit(edit)', function(data) {
//\t\t\t\t\t\t\t\t\tconsole.log(data.elem) //被执行事件的元素DOM对象，一般为button对象
//\t\t\t\t\t\t\t\t\tconsole.log(data.form) //被执行提交的form对象，一般在存在form标签时才会返回
//\t\t\t\t\t\t\t\t\tconsole.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\turl:'./edit',
\t\t\t\t\t\t\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\t\t\t\t\t\t\tdataType:'json',
\t\t\t\t\t\t\t\t\t\t\t\t\tdata:data.field,
\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg(res.msg);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t//调用父窗口的layer对象

\t\t\t\t\t\t\t\t\t\t\t\t//这里可以写ajax方法提交表单
\t\t\t\t\t\t\t\t\t\t\t\treturn false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t//console.log(layero, index);
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tend: function() {
\t\t\t\t\t\t\t\t\t\t\taddBoxIndex = -1;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t});

\t\t\t\t\t\t});

\t\t\t\t\t},
\t\t\t\t});
\t\t\t\t//获取所有选择的列
\t\t\t\t\$('#getSelected').on('click', function() {
\t\t\t\t\tvar names = '';
\t\t\t\t\t\$('#content').children('tr').each(function() {
\t\t\t\t\t\tvar \$that = \$(this);
\t\t\t\t\t\tvar \$cbx = \$that.children('td').eq(0).children('input[type=checkbox]')[0].checked;
\t\t\t\t\t\tif(\$cbx) {
\t\t\t\t\t\t\tvar n = \$that.children('td:last-child').children('a[data-opt=edit]').data('name');
\t\t\t\t\t\t\tnames += n + ',';
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tlayer.msg('你选择的名称有：' + names);
\t\t\t\t});

\t\t\t\t\$('#search').on('click', function() {
\t\t\t\t\tparent.layer.alert('你点击了搜索按钮')
\t\t\t\t});

\t\t\t\tvar addBoxIndex = -1;
\t\t\t\t\$('#add').on('click', function() {
\t\t\t\t\tif(addBoxIndex !== -1)
\t\t\t\t\t\treturn;
\t\t\t\t\t//本表单通过ajax加载 --以模板的形式，当然你也可以直接写在页面上读取
\t\t\t\t\t\$.get('./add_form', null, function(form) {
\t\t\t\t\t\taddBoxIndex = layer.open({
\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\ttitle: '添加文档',
\t\t\t\t\t\t\tcontent: form,
\t\t\t\t\t\t\tbtn: ['保存', '取消'],
\t\t\t\t\t\t\tshade: false,
\t\t\t\t\t\t\tarea: ['1000px', '500px'],
\t\t\t\t\t\t\tmaxmin: true,
\t\t\t\t\t\t\tyes: function(index) {
\t\t\t\t\t\t\t\t//触发表单的提交事件
\t\t\t\t\t\t\t\t\$('form.layui-form').find('button[lay-filter=add]').click();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tfull: function(elem) {
\t\t\t\t\t\t\t\tvar win = window.top === window.self ? window : parent.window;
\t\t\t\t\t\t\t\t\$(win).on('resize', function() {
\t\t\t\t\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\t\t\t\telem.width(\$this.width()).height(\$this.height()).css({
\t\t\t\t\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\t\t\t\t\tleft: 0
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\telem.children('div.layui-layer-content').height(\$this.height() - 95);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(layero, index) {
\t\t\t\t\t\t\t\t//弹出窗口成功后渲染表单
\t\t\t\t\t\t\t\tvar editIndex = layedit.build('LAY_demo1');
\t\t\t\t\t\t\t\tvar form = layui.form();

\t\t\t\t\t\t\t\t//自定义验证规则
\t\t\t\t\t\t\t\tform.verify({
\t\t\t\t\t\t\t\t\tcontent: function(value){
\t\t\t\t\t\t\t\t\t\tlayedit.sync(editIndex);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tform.render();
\t\t\t\t\t\t\t\tform.on('submit(add)', function(data) {
//\t\t\t\t\t\t\t\t\tconsole.log(data.elem) //被执行事件的元素DOM对象，一般为button对象
//\t\t\t\t\t\t\t\t\tconsole.log(data.form) //被执行提交的form对象，一般在存在form标签时才会返回
//\t\t\t\t\t\t\t\t\tconsole.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\turl:'./add',
\t\t\t\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\t\t\t\tdataType:'json',
\t\t\t\t\t\t\t\t\t\tdata:data.field,
\t\t\t\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg(res.msg);
\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t//调用父窗口的layer对象
//\t\t\t\t\t\t\t\t\tlayerTips.open({
//\t\t\t\t\t\t\t\t\t\ttitle: '这里面是表单的信息',
//\t\t\t\t\t\t\t\t\t\ttype: 1,
//\t\t\t\t\t\t\t\t\t\tcontent: JSON.stringify(data.field),
//\t\t\t\t\t\t\t\t\t\tarea: ['500px', '300px'],
//\t\t\t\t\t\t\t\t\t\tbtn: ['关闭并刷新', '关闭'],
//\t\t\t\t\t\t\t\t\t\tyes: function(index, layero) {
//\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg('你点击了关闭并刷新');
//\t\t\t\t\t\t\t\t\t\t\tlayerTips.close(index);
//\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
//\t\t\t\t\t\t\t\t\t\t}
//
//\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t//这里可以写ajax方法提交表单
\t\t\t\t\t\t\t\t\treturn false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t//console.log(layero, index);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tend: function() {
\t\t\t\t\t\t\t\taddBoxIndex = -1;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$('#import').on('click', function() {
\t\t\t\t\tvar that = this;
\t\t\t\t\tvar index = layer.tips('只想提示地精准些', that, { tips: [1, 'white'] });
\t\t\t\t\t\$('#layui-layer' + index).children('div.layui-layer-content').css('color', '#000000');
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Manual/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 83,  111 => 79,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Table</title>
\t\t<link rel=\"stylesheet\" href={{asset.asset('plugins/layui/css/layui.css')}} media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"{{asset.css('global.css')}}\" media=\"all\">
\t\t<link rel=\"stylesheet\" href=\"{{asset.asset('plugins/font-awesome/css/font-awesome.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset.css('table.css')}}\" />
\t</head>

\t<body>
\t\t<div class=\"admin-main\">

\t\t\t<blockquote class=\"layui-elem-quote\">
\t\t\t\t<a href=\"javascript:;\" class=\"layui-btn layui-btn-small\" id=\"add\">
\t\t\t\t\t<i class=\"layui-icon\">&#xe608;</i> 添加文档
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"layui-btn layui-btn-small\" id=\"import\">
\t\t\t\t\t<i class=\"layui-icon\">&#xe608;</i> 导入信息
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"layui-btn layui-btn-small\">
\t\t\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 导出信息
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"layui-btn layui-btn-small\" id=\"getSelected\">
\t\t\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 获取全选信息
\t\t\t\t</a>
\t\t\t\t<a href=\"javascript:;\" class=\"layui-btn layui-btn-small\" id=\"search\">
\t\t\t\t\t<i class=\"layui-icon\">&#xe615;</i> 搜索
\t\t\t\t</a>
\t\t\t</blockquote>
\t\t\t<fieldset class=\"layui-elem-field\">
\t\t\t\t<legend>数据列表</legend>
\t\t\t\t<div class=\"layui-field-box layui-form\">
\t\t\t\t\t<table class=\"layui-table admin-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th style=\"width: 30px;\"><input type=\"checkbox\" lay-filter=\"allselector\" lay-skin=\"primary\"></th>
\t\t\t\t\t\t\t\t<th>标题</th>
\t\t\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t\t\t<th>修改时间</th>
\t\t\t\t\t\t\t\t<th>摘要</th>
\t\t\t\t\t\t\t\t<th>排序</th>
\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"content\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<div class=\"admin-table-page\">
\t\t\t\t<div id=\"paged\" class=\"page\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--模板-->
\t\t<script type=\"text/html\" id=\"tpl\">

\t\t\t<%# layui.each(d.list, function(index, item){ %>
\t\t\t<tr>
\t\t\t\t<td><input type=\"checkbox\" lay-skin=\"primary\"></td>
\t\t\t\t<td><% item.title %></td>
\t\t\t\t<td><% item.add_time %></td>
\t\t\t\t<td><% item.update_time %></td>
\t\t\t\t<td><% item.abs %></td>
\t\t\t\t<td><% item.sort %></td>

\t\t\t\t<td>
\t\t\t\t\t<!--<a href=\"/detail-1\" target=\"_blank\" class=\"layui-btn layui-btn-normal layui-btn-mini\">预览</a>-->
\t\t\t\t\t<a href=\"javascript:;\" data-id=\"<% item.id %>\" data-name=\"<% item.title %>\" data-opt=\"edit\" class=\"layui-btn layui-btn-mini\">编辑</a>
\t\t\t\t\t<a href=\"javascript:;\" data-id=\"<% item.id %>\" data-name=\"<% item.title %>\" data-opt=\"del\" class=\"layui-btn layui-btn-danger layui-btn-mini\">删除</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<%# }); %>

\t\t</script>
\t\t<script type=\"text/javascript\" src=\"{{asset.asset('plugins/layui/layui.js')}}\"></script>

\t\t<script>
\t\t\tlayui.config({
\t\t\t\tbase: '{{__PUBLIC__}}/Admin/js/'
\t\t\t});

\t\t\tlayui.use(['paging','layedit', 'form','code'], function() {
                layui.code({
                    about:false
                }); //引用code方法
\t\t\t\tvar \$ = layui.jquery,
\t\t\t\t\tpaging = layui.paging(),
\t\t\t\t\tlayerTips = parent.layer === undefined ? layui.layer : parent.layer, //获取父窗口的layer对象
\t\t\t\t\tlayer = layui.layer, //获取当前窗口的layer对象
\t\t\t\t\tform = layui.form();
\t\t\t\tvar layedit = layui.layedit;
                paging.init({
                    openWait: true,
                    url: 'datas/laytpl_laypage_data.json?v=' + new Date().getTime(), //地址
\t\t\t\t\telem: '#content', //内容容器
\t\t\t\t\tparams: { //发送到服务端的参数
\t\t\t\t\t},
\t\t\t\t\ttype: 'GET',
\t\t\t\t\ttempElem: '#tpl', //模块容器
\t\t\t\t\tpageConfig: { //分页参数配置
\t\t\t\t\t\telem: '#paged', //分页容器
\t\t\t\t\t\tpageSize: 10 //分页大小
\t\t\t\t\t},
\t\t\t\t\tsuccess: function() { //渲染成功的回调
\t\t\t\t\t\t//alert('渲染成功');
\t\t\t\t\t},
\t\t\t\t\tfail: function(msg) { //获取数据失败的回调
\t\t\t\t\t\t//alert('获取数据失败')
\t\t\t\t\t},
\t\t\t\t\tcomplate: function() { //完成的回调
\t\t\t\t\t\t//alert('处理完成');
\t\t\t\t\t\t//重新渲染复选框
\t\t\t\t\t\tform.render('checkbox');
\t\t\t\t\t\tform.on('checkbox(allselector)', function(data) {
\t\t\t\t\t\t\tvar elem = data.elem;

\t\t\t\t\t\t\t\$('#content').children('tr').each(function() {
\t\t\t\t\t\t\t\tvar \$that = \$(this);
\t\t\t\t\t\t\t\t//全选或反选
\t\t\t\t\t\t\t\t\$that.children('td').eq(0).children('input[type=checkbox]')[0].checked = elem.checked;
\t\t\t\t\t\t\t\tform.render('checkbox');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});

\t\t\t\t\t\t//绑定所有编辑按钮事件\t\t\t\t\t\t
\t\t\t\t\t\t\$('#content').children('tr').each(function() {
\t\t\t\t\t\t\tvar \$that = \$(this);

\t\t\t\t\t\t\t/*删除*/
\t\t\t\t\t\t\t\$that.children('td:last-child').children('a[data-opt=del]').on('click', function() {
\t\t\t\t\t\t\t\tvar title = \$(this).data('name');
\t\t\t\t\t\t\t\tvar del_id = \$(this).data('id');
\t\t\t\t\t\t\t\tlayer.confirm('您确定要删除这条数据吗？', {
\t\t\t\t\t\t\t\t\tbtn: ['确定','取消'], //按钮
\t\t\t\t\t\t\t\t\ttitle: '删除-'+title
\t\t\t\t\t\t\t\t}, function()
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\turl: './delete',
\t\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\t\t'id': del_id
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess : function(res){
\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg(res.msg);
\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t/*编辑*/
\t\t\t\t\t\t\t\$that.children('td:last-child').children('a[data-opt=edit]').on('click', function() {
//\t\t\t\t\t\t\t\tlayer.msg(\$(this).data('name'));
\t\t\t\t\t\t\t\tvar edit_title = \$(this).data('name');
\t\t\t\t\t\t\t\tvar edit_id = \$(this).data('id');
\t\t\t\t\t\t\t\t\$.get('./edit_form/id/'+edit_id, null, function(form) {
\t\t\t\t\t\t\t\t\taddBoxIndex = layer.open({
\t\t\t\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\t\t\t\ttitle: '编辑-'+edit_title,
\t\t\t\t\t\t\t\t\t\tcontent: form,
\t\t\t\t\t\t\t\t\t\tbtn: ['保存', '取消'],
\t\t\t\t\t\t\t\t\t\tshade: false,
//\t\t\t\t\t\t\t\t\t\toffset: ['100px', '30%'],
\t\t\t\t\t\t\t\t\t\tarea: ['1000px', '500px'],
\t\t\t\t\t\t\t\t\t\tmaxmin: true,
\t\t\t\t\t\t\t\t\t\tyes: function(index) {
\t\t\t\t\t\t\t\t\t\t\t//触发表单的提交事件
\t\t\t\t\t\t\t\t\t\t\t\$('form.layui-form').find('button[lay-filter=edit]').click();
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tfull: function(elem) {
\t\t\t\t\t\t\t\t\t\t\tvar win = window.top === window.self ? window : parent.window;
\t\t\t\t\t\t\t\t\t\t\t\$(win).on('resize', function() {
\t\t\t\t\t\t\t\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\telem.width(\$this.width()).height(\$this.height()).css({
\t\t\t\t\t\t\t\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\t\t\t\t\t\t\t\tleft: 0
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\telem.children('div.layui-layer-content').height(\$this.height() - 95);
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess: function(layero, index) {
\t\t\t\t\t\t\t\t\t\t\t//弹出窗口成功后渲染表单
\t\t\t\t\t\t\t\t\t\t\tvar editIndex = layedit.build('LAY_demo1');
\t\t\t\t\t\t\t\t\t\t\tvar form = layui.form();

\t\t\t\t\t\t\t\t\t\t\t//自定义验证规则
\t\t\t\t\t\t\t\t\t\t\tform.verify({
\t\t\t\t\t\t\t\t\t\t\t\tcontent: function(value){
\t\t\t\t\t\t\t\t\t\t\t\t\tlayedit.sync(editIndex);
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\tform.render();
\t\t\t\t\t\t\t\t\t\t\tform.on('submit(edit)', function(data) {
//\t\t\t\t\t\t\t\t\tconsole.log(data.elem) //被执行事件的元素DOM对象，一般为button对象
//\t\t\t\t\t\t\t\t\tconsole.log(data.form) //被执行提交的form对象，一般在存在form标签时才会返回
//\t\t\t\t\t\t\t\t\tconsole.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\turl:'./edit',
\t\t\t\t\t\t\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\t\t\t\t\t\t\tdataType:'json',
\t\t\t\t\t\t\t\t\t\t\t\t\tdata:data.field,
\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg(res.msg);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t//调用父窗口的layer对象

\t\t\t\t\t\t\t\t\t\t\t\t//这里可以写ajax方法提交表单
\t\t\t\t\t\t\t\t\t\t\t\treturn false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t//console.log(layero, index);
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tend: function() {
\t\t\t\t\t\t\t\t\t\t\taddBoxIndex = -1;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t});

\t\t\t\t\t\t});

\t\t\t\t\t},
\t\t\t\t});
\t\t\t\t//获取所有选择的列
\t\t\t\t\$('#getSelected').on('click', function() {
\t\t\t\t\tvar names = '';
\t\t\t\t\t\$('#content').children('tr').each(function() {
\t\t\t\t\t\tvar \$that = \$(this);
\t\t\t\t\t\tvar \$cbx = \$that.children('td').eq(0).children('input[type=checkbox]')[0].checked;
\t\t\t\t\t\tif(\$cbx) {
\t\t\t\t\t\t\tvar n = \$that.children('td:last-child').children('a[data-opt=edit]').data('name');
\t\t\t\t\t\t\tnames += n + ',';
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tlayer.msg('你选择的名称有：' + names);
\t\t\t\t});

\t\t\t\t\$('#search').on('click', function() {
\t\t\t\t\tparent.layer.alert('你点击了搜索按钮')
\t\t\t\t});

\t\t\t\tvar addBoxIndex = -1;
\t\t\t\t\$('#add').on('click', function() {
\t\t\t\t\tif(addBoxIndex !== -1)
\t\t\t\t\t\treturn;
\t\t\t\t\t//本表单通过ajax加载 --以模板的形式，当然你也可以直接写在页面上读取
\t\t\t\t\t\$.get('./add_form', null, function(form) {
\t\t\t\t\t\taddBoxIndex = layer.open({
\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\ttitle: '添加文档',
\t\t\t\t\t\t\tcontent: form,
\t\t\t\t\t\t\tbtn: ['保存', '取消'],
\t\t\t\t\t\t\tshade: false,
\t\t\t\t\t\t\tarea: ['1000px', '500px'],
\t\t\t\t\t\t\tmaxmin: true,
\t\t\t\t\t\t\tyes: function(index) {
\t\t\t\t\t\t\t\t//触发表单的提交事件
\t\t\t\t\t\t\t\t\$('form.layui-form').find('button[lay-filter=add]').click();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tfull: function(elem) {
\t\t\t\t\t\t\t\tvar win = window.top === window.self ? window : parent.window;
\t\t\t\t\t\t\t\t\$(win).on('resize', function() {
\t\t\t\t\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\t\t\t\telem.width(\$this.width()).height(\$this.height()).css({
\t\t\t\t\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\t\t\t\t\tleft: 0
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\telem.children('div.layui-layer-content').height(\$this.height() - 95);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(layero, index) {
\t\t\t\t\t\t\t\t//弹出窗口成功后渲染表单
\t\t\t\t\t\t\t\tvar editIndex = layedit.build('LAY_demo1');
\t\t\t\t\t\t\t\tvar form = layui.form();

\t\t\t\t\t\t\t\t//自定义验证规则
\t\t\t\t\t\t\t\tform.verify({
\t\t\t\t\t\t\t\t\tcontent: function(value){
\t\t\t\t\t\t\t\t\t\tlayedit.sync(editIndex);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tform.render();
\t\t\t\t\t\t\t\tform.on('submit(add)', function(data) {
//\t\t\t\t\t\t\t\t\tconsole.log(data.elem) //被执行事件的元素DOM对象，一般为button对象
//\t\t\t\t\t\t\t\t\tconsole.log(data.form) //被执行提交的form对象，一般在存在form标签时才会返回
//\t\t\t\t\t\t\t\t\tconsole.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\turl:'./add',
\t\t\t\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\t\t\t\tdataType:'json',
\t\t\t\t\t\t\t\t\t\tdata:data.field,
\t\t\t\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll('dialog');
\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg(res.msg);
\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t//调用父窗口的layer对象
//\t\t\t\t\t\t\t\t\tlayerTips.open({
//\t\t\t\t\t\t\t\t\t\ttitle: '这里面是表单的信息',
//\t\t\t\t\t\t\t\t\t\ttype: 1,
//\t\t\t\t\t\t\t\t\t\tcontent: JSON.stringify(data.field),
//\t\t\t\t\t\t\t\t\t\tarea: ['500px', '300px'],
//\t\t\t\t\t\t\t\t\t\tbtn: ['关闭并刷新', '关闭'],
//\t\t\t\t\t\t\t\t\t\tyes: function(index, layero) {
//\t\t\t\t\t\t\t\t\t\t\tlayerTips.msg('你点击了关闭并刷新');
//\t\t\t\t\t\t\t\t\t\t\tlayerTips.close(index);
//\t\t\t\t\t\t\t\t\t\t\tlocation.reload(); //刷新
//\t\t\t\t\t\t\t\t\t\t}
//
//\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t//这里可以写ajax方法提交表单
\t\t\t\t\t\t\t\t\treturn false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t//console.log(layero, index);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tend: function() {
\t\t\t\t\t\t\t\taddBoxIndex = -1;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$('#import').on('click', function() {
\t\t\t\t\tvar that = this;
\t\t\t\t\tvar index = layer.tips('只想提示地精准些', that, { tips: [1, 'white'] });
\t\t\t\t\t\$('#layui-layer' + index).children('div.layui-layer-content').css('color', '#000000');
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>

</html>", "Manual/index.html", "D:\\phpStudy\\WWW\\thunder\\app\\Admin\\views\\Manual\\index.html");
    }
}
