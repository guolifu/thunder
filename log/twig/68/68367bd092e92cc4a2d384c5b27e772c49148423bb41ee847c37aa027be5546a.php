<?php

/* index/edit_form.html */
class __TwigTemplate_21a912936a785025176ab7c39b1cdc7646f3242f3b5522a78336a61928adc359 extends Twig_Template
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
        echo "<div style=\"margin: 15px;\">
\t<form class=\"layui-form\">
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">输入框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">密码框</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t\t<div class=\"layui-form-mid layui-word-aux\">辅助文字</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">选择框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<select name=\"city\" lay-verify=\"required\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t<option value=\"0\">北京</option>
\t\t\t\t\t<option value=\"1\">上海</option>
\t\t\t\t\t<option value=\"2\">广州</option>
\t\t\t\t\t<option value=\"3\">深圳</option>
\t\t\t\t\t<option value=\"4\">杭州</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">复选框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"checkbox\" name=\"like[write]\" title=\"写作\">
\t\t\t\t<input type=\"checkbox\" name=\"like[read]\" title=\"阅读\" checked>
\t\t\t\t<input type=\"checkbox\" name=\"like[dai]\" title=\"发呆\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">开关</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"checkbox\" name=\"switch\" lay-skin=\"switch\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">单选框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"男\" title=\"男\">
\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"女\" title=\"女\" checked>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item layui-form-text\">
\t\t\t<label class=\"layui-form-label\">文本域</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<textarea name=\"desc\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<button lay-filter=\"edit\" lay-submit style=\"display: none;\"></button>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "index/edit_form.html";
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
        return new Twig_Source("<div style=\"margin: 15px;\">
\t<form class=\"layui-form\">
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">输入框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"text\" name=\"\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">密码框</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"password\" name=\"password\" required lay-verify=\"required\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t\t<div class=\"layui-form-mid layui-word-aux\">辅助文字</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">选择框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<select name=\"city\" lay-verify=\"required\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t<option value=\"0\">北京</option>
\t\t\t\t\t<option value=\"1\">上海</option>
\t\t\t\t\t<option value=\"2\">广州</option>
\t\t\t\t\t<option value=\"3\">深圳</option>
\t\t\t\t\t<option value=\"4\">杭州</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">复选框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"checkbox\" name=\"like[write]\" title=\"写作\">
\t\t\t\t<input type=\"checkbox\" name=\"like[read]\" title=\"阅读\" checked>
\t\t\t\t<input type=\"checkbox\" name=\"like[dai]\" title=\"发呆\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">开关</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"checkbox\" name=\"switch\" lay-skin=\"switch\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item\">
\t\t\t<label class=\"layui-form-label\">单选框</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"男\" title=\"男\">
\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"女\" title=\"女\" checked>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-form-item layui-form-text\">
\t\t\t<label class=\"layui-form-label\">文本域</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<textarea name=\"desc\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<button lay-filter=\"edit\" lay-submit style=\"display: none;\"></button>
\t</form>
</div>", "index/edit_form.html", "D:\\phpStudy\\PHPTutorial\\WWW\\thunder\\app\\Admin\\views\\Index\\edit_form.html");
    }
}
