<?php

/* Index/main.html */
class __TwigTemplate_a92bc40f90e94c0cc2b5a7472620ee44ff0e55db4a7d07acaa710e81e5228504 extends Twig_Template
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
\t\t<title></title>
\t\t<link rel=\"stylesheet\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "asset", array(0 => "plugins/layui/css/layui.css"), "method"), "html", null, true);
        echo " media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "css", array(0 => "main.css"), "method"), "html", null, true);
        echo "\" />
\t</head>

\t<body>
\t\t<div class=\"admin-main\">
\t\t\t<blockquote class=\"layui-elem-quote\">
\t\t\t\t<p>本模板基于LayUI实现 ,支持所有LayUI组件.</p>
\t\t\t\tLayUI文档地址：
\t\t\t\t<a href=\"http://www.layui.com/doc\" target=\"_blank\">http://www.layui.com/doc</a>
\t\t\t\t<p>项目地址：
\t\t\t\t\t<a href=\"http://git.oschina.net/besteasyteam/beginner_admin\" target=\"_blank\">http://git.oschina.net/besteasyteam/beginner_admin</a>
\t\t\t\t</p>
\t\t\t\t<p>建议反馈和问题收集地址:
\t\t\t\t\t<a href=\"http://fly.zhengjinfan.cn/\" target=\"_blank\">http://fly.zhengjinfan.cn/</a>
\t\t\t\t</p>
\t\t\t\t<p>交流群：248049395</p>
\t\t\t\t<br/>
\t\t\t\t<p style=\"color: #01AAED;\">子窗体弹出对话框编辑表单的一些建议：如果是处理表单的，建议在子窗口弹出。把背景设置为无，如果只是提示信息，可以在父窗口弹出。</p>
\t\t\t</blockquote>
\t\t\t<fieldset class=\"layui-elem-field\">
\t\t\t\t<legend>更新日志</legend>
\t\t\t\t<div class=\"layui-field-box\">
                    <fieldset class=\"layui-elem-field layui-field-title\">
                        <legend>版本号:# v0.2.2 2017-04-01</legend>
                        <div class=\"layui-field-box\">
                            <p>1、tab组件，添加onSwitch事件，切换时发生，回调参数data.id ,data,index,data.elem 详情见index.js示例(21行代码)</p>
                            <p>2、tab组件，添加getCurrentTabId方法，用于获取当前焦点的tabId</p>
                            <p>3、tab组件，添加deleteTab,删除指定tab ，参数为tabId. 示例：parent.tab.deleteTab(parent.tab.getCurrentTabId());</p>
                        </div>
                    </fieldset>
                    <fieldset class=\"layui-elem-field layui-field-title\">
                        <legend>版本号:# v0.2.1 2017-03-30</legend>
                        <div class=\"layui-field-box\">
                            <p>1、paging组件，添加renderBefore方法</p>
                            <p>2、paging组件，修改数据结构：code(number)改成rel(boolean)</p>
                            <p>3、btable组件，添加openWait属性[是否显示加载等待框]</p>
                            <p>4、btable组件，添加onSuccess回调方法[数据加载成功之后触发]</p>
                            <p>5、btable组件，添加isSelected方法[获取当前是否有选中行]</p>
                            <p>6、btable组件，columns属性添加format属性，用于格式化显示</p>
                            <p>7、btable组件，添加序号列</p>
                            <p>8、修复若干已知bug.</p>
                        </div>
                    </fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.9 2017-03-06</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复table组件一些样式问题。</p>\t\t\t
\t\t\t\t\t\t\t<p>详情请查看：<span style=\"color: #01AAED;\">基本元素->表格</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.8 2017-03-05</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加table组件。</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>2、paging组件添加elemType属性。</p>
\t\t\t\t\t\t\t<p>详情请查看：<span style=\"color: #01AAED;\">基本元素->表格</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.7 2017-03-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、更新table.html的实现，基于paging组件。</p>
\t\t\t\t\t\t\t<p>详情请查看：<span style=\"color: #01AAED;\">基本元素->表格</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.6 2017-03-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复<a href=\"layout.html\" target=\"_blank\">layout.html</a>显示不正常的一些bug</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.5 2017-03-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复tab选项卡向上移动的bug</p>
\t\t\t\t\t\t\t<p>2、layui 更新到1.0.9_rls</p>\t
\t\t\t\t\t\t\t<p>3、新增子窗口提交表单并刷新当前窗口的demo,详见 <span style=\"color: #01AAED;\">基本元素->表格->添加信息(按钮)</span></p>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p><a href=\"http://fly.layui.com/jie/7582.html\" target=\"_blank\">layui1.0.9_rls更新日志</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.4 2017-02-23</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复若干个bug</p>
\t\t\t\t\t\t\t<p>2、添加在子页面打开选项卡的demo,详见 -- 其他 -> 子窗体中打开选项卡</p>
\t\t\t\t\t\t\t<p>3、layui 更新到1.0.8</p>
\t\t\t\t\t\t\t<p>4、最后添加了你们期待已久的tab选项卡右键菜单。需要设置contextMenu为true</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>...</p>
\t\t\t\t\t\t\t<p>好啦啦~~~本次更新的内容就是这些，有疑问可以在群里面提出哦~~~~~</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.9 2016-12-22</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加锁屏界面，按Alt+L组合键也能触发哦 ~~~~</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.8 2016-12-21</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、navbar组件 添加属性 <cite style=\"color: #1AA094;\">spreadOne </cite>\"设置是否只展开一个二级菜单，默认为false\"</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.8 2016-12-05</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、对navbar组件添加缓存支持</p>
\t\t\t\t\t\t\t<p>2、更新navbar组件说明文档</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.8 2016-12-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、layui版本更新到1.0.7</p>
\t\t\t\t\t\t\t<p>2、添加layout三级菜单布局页面
\t\t\t\t\t\t\t\t<a href=\"http://m.zhengjinfan.cn/layout.html\" style=\"color: #1AA094;\" target=\"_blank\">点击这里查看演示</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.7 2016-11-29</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、layui版本更新到1.0.6</p>
\t\t\t\t\t\t\t<p>2、添加常用的正则</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.6 2016-11-27</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加tab组件</p>
\t\t\t\t\t\t\t<p>2、使用tab组件优化tab选项卡的代码</p>
\t\t\t\t\t\t\t<p>3、将index.html页面的js代码独立出来</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.5 2016-11-26</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加隐藏左侧导航栏功能</p>
\t\t\t\t\t\t\t<p>2、修改tab选项卡样式</p>
\t\t\t\t\t\t\t<p>3、添加左侧nav导航栏选中状态</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.4 2016-11-25</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加Navbar组件（动态渲染nav）</p>
\t\t\t\t\t\t\t<p>2、更新首页nav的渲染方式 (使用Navbar组件动态渲染)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.3 2016-11-22</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、table 添加单选，全选功能</p>
\t\t\t\t\t\t\t<p>&nbsp;&nbsp;&nbsp;&nbsp;1.1、依赖组件iCheck 文档地址：
\t\t\t\t\t\t\t\t<a href=\"http://www.bootcss.com/p/icheck/\" target=\"_blank\">http://www.bootcss.com/p/icheck/</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>2、添加登录页面</p>
\t\t\t\t\t\t\t<p>--------------------------------------------------------------------</p>
\t\t\t\t\t\t\t<p>3、top样式修改</p>
\t\t\t\t\t\t\t<p>4、修复直接选中checkbox时背景色没变化，感谢
\t\t\t\t\t\t\t\t<a href=\"http://fly.layui.com/u/2451288/\" target=\"_blank\">@瀮月</a>的反馈</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.1 2016-11-20</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、基本布局 tab + iframe</p>
\t\t\t\t\t\t\t<p>2、动态添加，删除tab</p>
\t\t\t\t\t\t\t<p>3、表格样式</p>
\t\t\t\t\t\t\t<p>4、分页组件</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Index/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
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
\t\t<title></title>
\t\t<link rel=\"stylesheet\" href={{asset.asset('plugins/layui/css/layui.css')}} media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"{{asset.css('main.css')}}\" />
\t</head>

\t<body>
\t\t<div class=\"admin-main\">
\t\t\t<blockquote class=\"layui-elem-quote\">
\t\t\t\t<p>本模板基于LayUI实现 ,支持所有LayUI组件.</p>
\t\t\t\tLayUI文档地址：
\t\t\t\t<a href=\"http://www.layui.com/doc\" target=\"_blank\">http://www.layui.com/doc</a>
\t\t\t\t<p>项目地址：
\t\t\t\t\t<a href=\"http://git.oschina.net/besteasyteam/beginner_admin\" target=\"_blank\">http://git.oschina.net/besteasyteam/beginner_admin</a>
\t\t\t\t</p>
\t\t\t\t<p>建议反馈和问题收集地址:
\t\t\t\t\t<a href=\"http://fly.zhengjinfan.cn/\" target=\"_blank\">http://fly.zhengjinfan.cn/</a>
\t\t\t\t</p>
\t\t\t\t<p>交流群：248049395</p>
\t\t\t\t<br/>
\t\t\t\t<p style=\"color: #01AAED;\">子窗体弹出对话框编辑表单的一些建议：如果是处理表单的，建议在子窗口弹出。把背景设置为无，如果只是提示信息，可以在父窗口弹出。</p>
\t\t\t</blockquote>
\t\t\t<fieldset class=\"layui-elem-field\">
\t\t\t\t<legend>更新日志</legend>
\t\t\t\t<div class=\"layui-field-box\">
                    <fieldset class=\"layui-elem-field layui-field-title\">
                        <legend>版本号:# v0.2.2 2017-04-01</legend>
                        <div class=\"layui-field-box\">
                            <p>1、tab组件，添加onSwitch事件，切换时发生，回调参数data.id ,data,index,data.elem 详情见index.js示例(21行代码)</p>
                            <p>2、tab组件，添加getCurrentTabId方法，用于获取当前焦点的tabId</p>
                            <p>3、tab组件，添加deleteTab,删除指定tab ，参数为tabId. 示例：parent.tab.deleteTab(parent.tab.getCurrentTabId());</p>
                        </div>
                    </fieldset>
                    <fieldset class=\"layui-elem-field layui-field-title\">
                        <legend>版本号:# v0.2.1 2017-03-30</legend>
                        <div class=\"layui-field-box\">
                            <p>1、paging组件，添加renderBefore方法</p>
                            <p>2、paging组件，修改数据结构：code(number)改成rel(boolean)</p>
                            <p>3、btable组件，添加openWait属性[是否显示加载等待框]</p>
                            <p>4、btable组件，添加onSuccess回调方法[数据加载成功之后触发]</p>
                            <p>5、btable组件，添加isSelected方法[获取当前是否有选中行]</p>
                            <p>6、btable组件，columns属性添加format属性，用于格式化显示</p>
                            <p>7、btable组件，添加序号列</p>
                            <p>8、修复若干已知bug.</p>
                        </div>
                    </fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.9 2017-03-06</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复table组件一些样式问题。</p>\t\t\t
\t\t\t\t\t\t\t<p>详情请查看：<span style=\"color: #01AAED;\">基本元素->表格</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.8 2017-03-05</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加table组件。</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>2、paging组件添加elemType属性。</p>
\t\t\t\t\t\t\t<p>详情请查看：<span style=\"color: #01AAED;\">基本元素->表格</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.7 2017-03-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、更新table.html的实现，基于paging组件。</p>
\t\t\t\t\t\t\t<p>详情请查看：<span style=\"color: #01AAED;\">基本元素->表格</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.6 2017-03-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复<a href=\"layout.html\" target=\"_blank\">layout.html</a>显示不正常的一些bug</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.5 2017-03-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复tab选项卡向上移动的bug</p>
\t\t\t\t\t\t\t<p>2、layui 更新到1.0.9_rls</p>\t
\t\t\t\t\t\t\t<p>3、新增子窗口提交表单并刷新当前窗口的demo,详见 <span style=\"color: #01AAED;\">基本元素->表格->添加信息(按钮)</span></p>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p><a href=\"http://fly.layui.com/jie/7582.html\" target=\"_blank\">layui1.0.9_rls更新日志</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.1.4 2017-02-23</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、修复若干个bug</p>
\t\t\t\t\t\t\t<p>2、添加在子页面打开选项卡的demo,详见 -- 其他 -> 子窗体中打开选项卡</p>
\t\t\t\t\t\t\t<p>3、layui 更新到1.0.8</p>
\t\t\t\t\t\t\t<p>4、最后添加了你们期待已久的tab选项卡右键菜单。需要设置contextMenu为true</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>...</p>
\t\t\t\t\t\t\t<p>好啦啦~~~本次更新的内容就是这些，有疑问可以在群里面提出哦~~~~~</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.9 2016-12-22</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加锁屏界面，按Alt+L组合键也能触发哦 ~~~~</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.8 2016-12-21</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、navbar组件 添加属性 <cite style=\"color: #1AA094;\">spreadOne </cite>\"设置是否只展开一个二级菜单，默认为false\"</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.8 2016-12-05</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、对navbar组件添加缓存支持</p>
\t\t\t\t\t\t\t<p>2、更新navbar组件说明文档</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.8 2016-12-02</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、layui版本更新到1.0.7</p>
\t\t\t\t\t\t\t<p>2、添加layout三级菜单布局页面
\t\t\t\t\t\t\t\t<a href=\"http://m.zhengjinfan.cn/layout.html\" style=\"color: #1AA094;\" target=\"_blank\">点击这里查看演示</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.7 2016-11-29</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、layui版本更新到1.0.6</p>
\t\t\t\t\t\t\t<p>2、添加常用的正则</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.6 2016-11-27</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加tab组件</p>
\t\t\t\t\t\t\t<p>2、使用tab组件优化tab选项卡的代码</p>
\t\t\t\t\t\t\t<p>3、将index.html页面的js代码独立出来</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.5 2016-11-26</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加隐藏左侧导航栏功能</p>
\t\t\t\t\t\t\t<p>2、修改tab选项卡样式</p>
\t\t\t\t\t\t\t<p>3、添加左侧nav导航栏选中状态</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.4 2016-11-25</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、添加Navbar组件（动态渲染nav）</p>
\t\t\t\t\t\t\t<p>2、更新首页nav的渲染方式 (使用Navbar组件动态渲染)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.3 2016-11-22</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、table 添加单选，全选功能</p>
\t\t\t\t\t\t\t<p>&nbsp;&nbsp;&nbsp;&nbsp;1.1、依赖组件iCheck 文档地址：
\t\t\t\t\t\t\t\t<a href=\"http://www.bootcss.com/p/icheck/\" target=\"_blank\">http://www.bootcss.com/p/icheck/</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>2、添加登录页面</p>
\t\t\t\t\t\t\t<p>--------------------------------------------------------------------</p>
\t\t\t\t\t\t\t<p>3、top样式修改</p>
\t\t\t\t\t\t\t<p>4、修复直接选中checkbox时背景色没变化，感谢
\t\t\t\t\t\t\t\t<a href=\"http://fly.layui.com/u/2451288/\" target=\"_blank\">@瀮月</a>的反馈</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t\t<legend>版本号:# v0.0.1 2016-11-20</legend>
\t\t\t\t\t\t<div class=\"layui-field-box\">
\t\t\t\t\t\t\t<p>1、基本布局 tab + iframe</p>
\t\t\t\t\t\t\t<p>2、动态添加，删除tab</p>
\t\t\t\t\t\t\t<p>3、表格样式</p>
\t\t\t\t\t\t\t<p>4、分页组件</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</body>

</html>", "Index/main.html", "D:\\phpStudy\\WWW\\thunder\\app\\Admin\\views\\Index\\main.html");
    }
}
