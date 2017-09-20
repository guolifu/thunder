<?php

/* index/form.html */
class __TwigTemplate_852f61a4d3479a3304887df84d0e7e2075f18b710998b4b6649a7ecaf828bdb0 extends Twig_Template
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

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>表单</title>
\t\t<meta name=\"renderer\" content=\"webkit\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\">

\t\t<link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/css/layui.css"), "method"), "html", null, true);
        echo " media=\"all\" />

\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/font-awesome/css/font-awesome.min.css"), "method"), "html", null, true);
        echo "\">
\t</head>

\t<body>
\t\t<div style=\"margin: 15px;\">
\t\t\t<fieldset class=\"layui-elem-field layui-field-title\" style=\"margin-top: 20px;\">
\t\t\t\t<legend>响应式的表单集合</legend>
\t\t\t</fieldset>

\t\t\t<form class=\"layui-form\" action=\"\">
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">单行输入框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证必填项</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"username\" lay-verify=\"required\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证手机</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" lay-verify=\"phone\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证邮箱</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">验证数字</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"number\" lay-verify=\"number\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">验证日期</label>
\t\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"date\" id=\"date\" lay-verify=\"date\" placeholder=\"yyyy-mm-dd\" autocomplete=\"off\" class=\"layui-input\" onclick=\"layui.laydate({elem: this})\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">验证链接</label>
\t\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"url\" lay-verify=\"url\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证身份证</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"identity\" lay-verify=\"identity\" placeholder=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">自定义验证</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<input type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-form-mid layui-word-aux\">请填写6到12位密码</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">范围</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"price_min\" placeholder=\"￥\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-form-mid\">-</div>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"price_max\" placeholder=\"￥\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">单行选择框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<select name=\"interest\" lay-filter=\"aihao\">
\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t<option value=\"0\">写作</option>
\t\t\t\t\t\t\t<option value=\"1\" selected=\"\">阅读</option>
\t\t\t\t\t\t\t<option value=\"2\">游戏</option>
\t\t\t\t\t\t\t<option value=\"3\">音乐</option>
\t\t\t\t\t\t\t<option value=\"4\">旅行</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">分组选择框</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz\">
\t\t\t\t\t\t\t<option value=\"\">请选择问题</option>
\t\t\t\t\t\t\t<optgroup label=\"城市记忆\">
\t\t\t\t\t\t\t\t<option value=\"你工作的第一个城市\">你工作的第一个城市</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<optgroup label=\"学生时代\">
\t\t\t\t\t\t\t\t<option value=\"你的工号\">你的工号</option>
\t\t\t\t\t\t\t\t<option value=\"你最喜欢的老师\">你最喜欢的老师</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">行内选择框</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz1\">
\t\t\t\t\t\t\t<option value=\"\">请选择省</option>
\t\t\t\t\t\t\t<option value=\"浙江\" selected=\"\">浙江省</option>
\t\t\t\t\t\t\t<option value=\"你的工号\">江西省</option>
\t\t\t\t\t\t\t<option value=\"你最喜欢的老师\">福建省</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz2\">
\t\t\t\t\t\t\t<option value=\"\">请选择市</option>
\t\t\t\t\t\t\t<option value=\"杭州\">杭州</option>
\t\t\t\t\t\t\t<option value=\"宁波\" disabled=\"\">宁波</option>
\t\t\t\t\t\t\t<option value=\"温州\">温州</option>
\t\t\t\t\t\t\t<option value=\"温州\">台州</option>
\t\t\t\t\t\t\t<option value=\"温州\">绍兴</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz3\">
\t\t\t\t\t\t\t<option value=\"\">请选择县/区</option>
\t\t\t\t\t\t\t<option value=\"西湖区\">西湖区</option>
\t\t\t\t\t\t\t<option value=\"余杭区\">余杭区</option>
\t\t\t\t\t\t\t<option value=\"拱墅区\">临安市</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">复选框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"like[write]\" title=\"写作\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"like[read]\" title=\"阅读\" checked=\"\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"like[game]\" title=\"游戏\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">开关-关</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" title=\"开关\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">开关-开</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" title=\"开关\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">单选框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"男\" title=\"男\" checked=\"\">
\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"女\" title=\"女\">
\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"禁\" title=\"禁用\" disabled=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item layui-form-text\">
\t\t\t\t\t<label class=\"layui-form-label\">普通文本域</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<textarea placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item layui-form-text\">
\t\t\t\t\t<label class=\"layui-form-label\">编辑器</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<textarea class=\"layui-textarea layui-hide\" name=\"content\" lay-verify=\"content\" id=\"LAY_demo_editor\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
\t\t\t\t\t\t<button type=\"reset\" class=\"layui-btn layui-btn-primary\">重置</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/layui.js"), "method"), "html", null, true);
        echo "\"></script>

\t\t<script>
\t\t\tlayui.use(['form', 'layedit', 'laydate'], function() {
\t\t\t\tvar form = layui.form(),
\t\t\t\t\tlayer = layui.layer,
\t\t\t\t\tlayedit = layui.layedit,
\t\t\t\t\tlaydate = layui.laydate;

\t\t\t\t//创建一个编辑器
\t\t\t\tvar editIndex = layedit.build('LAY_demo_editor');
\t\t\t\t//自定义验证规则
\t\t\t\tform.verify({
\t\t\t\t\ttitle: function(value) {
\t\t\t\t\t\tif(value.length < 5) {
\t\t\t\t\t\t\treturn '标题至少得5个字符啊';
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tpass: [/(.+){6,12}\$/, '密码必须6到12位'],
\t\t\t\t\tcontent: function(value) {
\t\t\t\t\t\tlayedit.sync(editIndex);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//监听提交
\t\t\t\tform.on('submit(demo1)', function(data) {
\t\t\t\t\tlayer.alert(JSON.stringify(data.field), {
\t\t\t\t\t\ttitle: '最终的提交信息'
\t\t\t\t\t})
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index/form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 206,  39 => 16,  34 => 14,  19 => 1,);
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

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>表单</title>
\t\t<meta name=\"renderer\" content=\"webkit\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\">

\t\t<link rel=\"stylesheet\" href={{asset.asset('plugins/layui/css/layui.css')}} media=\"all\" />

\t\t<link rel=\"stylesheet\" href=\"{{asset.asset('plugins/font-awesome/css/font-awesome.min.css')}}\">
\t</head>

\t<body>
\t\t<div style=\"margin: 15px;\">
\t\t\t<fieldset class=\"layui-elem-field layui-field-title\" style=\"margin-top: 20px;\">
\t\t\t\t<legend>响应式的表单集合</legend>
\t\t\t</fieldset>

\t\t\t<form class=\"layui-form\" action=\"\">
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">单行输入框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证必填项</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"username\" lay-verify=\"required\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证手机</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" lay-verify=\"phone\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证邮箱</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">验证数字</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"number\" lay-verify=\"number\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">验证日期</label>
\t\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"date\" id=\"date\" lay-verify=\"date\" placeholder=\"yyyy-mm-dd\" autocomplete=\"off\" class=\"layui-input\" onclick=\"layui.laydate({elem: this})\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">验证链接</label>
\t\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"url\" lay-verify=\"url\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">验证身份证</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"identity\" lay-verify=\"identity\" placeholder=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">自定义验证</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<input type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-form-mid layui-word-aux\">请填写6到12位密码</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\">范围</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"price_min\" placeholder=\"￥\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-form-mid\">-</div>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"price_max\" placeholder=\"￥\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">单行选择框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<select name=\"interest\" lay-filter=\"aihao\">
\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t<option value=\"0\">写作</option>
\t\t\t\t\t\t\t<option value=\"1\" selected=\"\">阅读</option>
\t\t\t\t\t\t\t<option value=\"2\">游戏</option>
\t\t\t\t\t\t\t<option value=\"3\">音乐</option>
\t\t\t\t\t\t\t<option value=\"4\">旅行</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">分组选择框</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz\">
\t\t\t\t\t\t\t<option value=\"\">请选择问题</option>
\t\t\t\t\t\t\t<optgroup label=\"城市记忆\">
\t\t\t\t\t\t\t\t<option value=\"你工作的第一个城市\">你工作的第一个城市</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<optgroup label=\"学生时代\">
\t\t\t\t\t\t\t\t<option value=\"你的工号\">你的工号</option>
\t\t\t\t\t\t\t\t<option value=\"你最喜欢的老师\">你最喜欢的老师</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">行内选择框</label>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz1\">
\t\t\t\t\t\t\t<option value=\"\">请选择省</option>
\t\t\t\t\t\t\t<option value=\"浙江\" selected=\"\">浙江省</option>
\t\t\t\t\t\t\t<option value=\"你的工号\">江西省</option>
\t\t\t\t\t\t\t<option value=\"你最喜欢的老师\">福建省</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz2\">
\t\t\t\t\t\t\t<option value=\"\">请选择市</option>
\t\t\t\t\t\t\t<option value=\"杭州\">杭州</option>
\t\t\t\t\t\t\t<option value=\"宁波\" disabled=\"\">宁波</option>
\t\t\t\t\t\t\t<option value=\"温州\">温州</option>
\t\t\t\t\t\t\t<option value=\"温州\">台州</option>
\t\t\t\t\t\t\t<option value=\"温州\">绍兴</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t<select name=\"quiz3\">
\t\t\t\t\t\t\t<option value=\"\">请选择县/区</option>
\t\t\t\t\t\t\t<option value=\"西湖区\">西湖区</option>
\t\t\t\t\t\t\t<option value=\"余杭区\">余杭区</option>
\t\t\t\t\t\t\t<option value=\"拱墅区\">临安市</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">复选框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"like[write]\" title=\"写作\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"like[read]\" title=\"阅读\" checked=\"\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"like[game]\" title=\"游戏\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">开关-关</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" title=\"开关\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">开关-开</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" title=\"开关\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">单选框</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"男\" title=\"男\" checked=\"\">
\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"女\" title=\"女\">
\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"禁\" title=\"禁用\" disabled=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item layui-form-text\">
\t\t\t\t\t<label class=\"layui-form-label\">普通文本域</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<textarea placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item layui-form-text\">
\t\t\t\t\t<label class=\"layui-form-label\">编辑器</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<textarea class=\"layui-textarea layui-hide\" name=\"content\" lay-verify=\"content\" id=\"LAY_demo_editor\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
\t\t\t\t\t\t<button type=\"reset\" class=\"layui-btn layui-btn-primary\">重置</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<script type=\"text/javascript\" src=\"{{asset.asset('plugins/layui/layui.js')}}\"></script>

\t\t<script>
\t\t\tlayui.use(['form', 'layedit', 'laydate'], function() {
\t\t\t\tvar form = layui.form(),
\t\t\t\t\tlayer = layui.layer,
\t\t\t\t\tlayedit = layui.layedit,
\t\t\t\t\tlaydate = layui.laydate;

\t\t\t\t//创建一个编辑器
\t\t\t\tvar editIndex = layedit.build('LAY_demo_editor');
\t\t\t\t//自定义验证规则
\t\t\t\tform.verify({
\t\t\t\t\ttitle: function(value) {
\t\t\t\t\t\tif(value.length < 5) {
\t\t\t\t\t\t\treturn '标题至少得5个字符啊';
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tpass: [/(.+){6,12}\$/, '密码必须6到12位'],
\t\t\t\t\tcontent: function(value) {
\t\t\t\t\t\tlayedit.sync(editIndex);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//监听提交
\t\t\t\tform.on('submit(demo1)', function(data) {
\t\t\t\t\tlayer.alert(JSON.stringify(data.field), {
\t\t\t\t\t\ttitle: '最终的提交信息'
\t\t\t\t\t})
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>

</html>", "index/form.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Admin\\views\\Index\\form.html");
    }
}
