<h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
    前言
</h1>
<p></p>
<article>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <blockquote class="layui-elem-quote layui-quote-nm" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-width: 1px 1px 1px 5px; border-style: solid; border-color: rgb(226, 226, 226); line-height: 22px; border-radius: 0px 2px 2px 0px; background: 0px 0px;">
        <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">Thunder</span>，是一个免费开源的，快速、简单的面向对象的轻量级PHP开发框架。
    </blockquote>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;"></p>
</article>
<h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
    目录结构
</h1>
<article>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">├─app		            应用目录
│  │ 
│  ├─模块1              项目模块1（例 Home）
│  │  ├─common      	配置目录
│  │  ├─controller      控制器目录
│  │  └─views     	视图
│  │  
│  ├─模块2              项目模块2（例 Admin）
│  │  ├─common      	配置目录
│  │  ├─controller      控制器目录
│  │  └─views     	视图
│  │  
│  ├─模型1              （例Student.php）
│  │  
│  ├─模型2              （例Teacher.php）
│  │  
│  └─ ...
├─core	                框架系统目录
│
├─log	                日志及缓存目录
│
├─public                WEB 部署目录（对外访问目录）
│
├─routes                路由配置文件目录
│  └─www.php            
│
├─vendor                第三方类库目录（Composer）
│
├─.env             	env全局配置文件
│
├─.htaccess             用于 apache 的重写
│
├─composer.json         composer 定义文件
│
├─index.php             入口文件
│
└─README.md             README 文件</pre>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
</article><small><h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
    URL访问
</h1>
<article>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        http://serverName/index.php（或不写）/模块/控制器/操作/[参数名/参数值...]
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
        出于优化的URL访问原则，还通过URL重写隐藏入口文件，下面以Apache为例说明隐藏应用入口文件index.php的.htaccess设置。
    </blockquote>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <blockquote class="layui-elem-quote layui-quote-nm" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-width: 1px 1px 1px 5px; border-style: solid; border-color: rgb(226, 226, 226); line-height: 22px; border-radius: 0px 2px 2px 0px; background: 0px 0px;">
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            <br/>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&lt;IfModule mod_rewrite.c&gt;</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; &lt;IfModule mod_negotiation.c&gt;</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; &nbsp; &nbsp; Options -MultiViews</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; &lt;/IfModule&gt;</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteEngine On</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; # Redirect Trailing Slashes If Not A Folder...</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteCond %{REQUEST_FILENAME} !-d</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteRule ^(.*)/$ /$1 [L,R=301]</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; # Handle Front Controller...</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteCond %{REQUEST_FILENAME} !-d</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteCond %{REQUEST_FILENAME} !-f</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteRule ^ index.php [L]</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; # Handle Authorization Header</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteCond %{HTTP:Authorization} .</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&nbsp; &nbsp; RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]</span>
        </p>
        <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 16px; line-height: 1.32;">
            &nbsp; &nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px;">&lt;/IfModule&gt;</span>
        </p>
    </blockquote>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
</article><small><h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
    命名空间
</h1>
<article>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
        如果不清楚命名空间的基本概念，可以参考PHP手册：<span style="box-sizing: border-box; margin: 0px; padding: 0px;"><a target="_blank" href="http://www.php.net/manual/zh/language.namespaces.php" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); text-decoration-line: none; background-color: transparent; cursor: pointer; transition: color 0.15s ease;">命名空间</a></span>
    </blockquote>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        模型：<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;">namespace&nbsp; app ;</a>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        控制器：<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;">namespace&nbsp; 模块名 \ controller ;</a>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
</article>
<h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
    Traits
</h1>
<article>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
        简单来讲，PHP是单继承的语言，在PHP 5.4 Traits出现之前，PHP的类无法同时从两个基类继承属性或方法，php的Traits和Go语言的组合功能类似（可以理解为横向扩展），通过在类中使用use关键字声明要组合的Trait名称，而具体某个Trait的声明使用trait关键词，Trait不能直接实例化。Thunder中的视图层则是利用Trait引入。具体用法请看下面的代码：
    </blockquote>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        &nbsp;定义一个trait
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        &nbsp;
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">namespace thunder;trait View{	public function display(){		//	}}</pre>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        &nbsp;
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        &nbsp;使用他
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">namespace Home\controller;use \thunder\View;class IndexController{	use View;	public function index(){		$this-&gt;display();	}}</pre>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        &nbsp;
    </p>
    <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
        <br/>
    </p>
</article><small>Created by leileida.</small></small></small>
<p></p>
v2.0.0<br>
1.修正了路由规则<br>
2.增加了多模块机制<br>
3.控制器方法重构<br>
4.api开发模式，控制器return数组自动转换为json格式等。<br>
<hr>
5.模型层重构，模型层分离为独立层：<br>
demo:<br>

namespace app;<br>
use \thunder\Model;<br>
class Student extends Model{<br>
    　public function test(){<br>
        　　　return 'test!';<br>
    　}<br>
<hr>
6.视图机制优化，支持跨控制器，跨模块输出页面<br>

demo:<br>

namespace home\controller;<br>
use \thunder\View;<br>
class StudentController{<br>
    　use View;<br>
    　public function index(){<br>
        　　　$this->display();<br>
        　　　$this->display('index1');<br>
        　　　$this->display('index/url');<br>
        　　　$this->display('api/index/views');<br>
    　}<br>
}<br>
1. fixed the routing rule <br>
2. increased the multi module mechanism <br>
3. controller method refactoring <br>
4. join the API development model, the controller return array automatically converted to JSON format. <br>
<hr>
5. model layer is reconstructed, and model layer is separated into independent layer: <br>
demo:<br>

namespace app;<br>
use \thunder\Model;<br>
class Student extends Model{<br>
    　public function test(){<br>
        　　　return 'test!';<br>
    　}<br>
    }<br>
<br>

<hr>
6. view mechanism optimization, support cross controller, cross module output page <br>

namespace home\controller;<br>
use \thunder\View;<br>
class StudentController{<br>
    　use View;<br>
    　public function index(){<br>
        　　　$this->display();<br>
        　　　$this->display('index1');<br>
        　　　$this->display('index/url');<br>
        　　　$this->display('api/index/views');<br>
    　}<br>
}<br>