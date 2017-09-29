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
</article><h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
              API模式数据
          </h1>
          <p>
              <br/>
          </p>
          <article>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                  API数据的输出
              </blockquote>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;控制器中直接使用return
              </p>
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">namespace Home\controller;class IndexController{	public function index(){		$data = [&#39;name&#39;=&gt;&#39;thunder&#39;,&#39;url&#39;=&gt;&#39;guolifu.pw&#39;];		return [&#39;data&#39;=&gt;$data,&#39;code&#39;=&gt;1,&#39;message&#39;=&gt;&#39;ok&#39;];		return [&#39;data&#39;=&gt;$data,&#39;code&#39;=&gt;1,&#39;message&#39;=&gt;&#39;ok&#39;,&#39;TO_ARRAY&#39;=&gt;true];//返回纯数组		return [&#39;data&#39;=&gt;$data,&#39;code&#39;=&gt;1,&#39;message&#39;=&gt;&#39;ok&#39;,&#39;TO_JSONP&#39;=&gt;true];//返回jsonp	}}</pre>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;浏览器显示：
              </p>
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">{&quot;data&quot;:{&quot;name&quot;:&quot;thunder&quot;,&quot;url&quot;:&quot;guolifu.pw&quot;},&quot;code&quot;:1,&quot;message&quot;:&quot;ok&quot;}</pre>
          </article>
          <p>
              <br/>
          </p>
          <h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
              配置
          </h1>
          <p>
              <br/>
          </p>
          <article>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <blockquote class="layui-elem-quote layui-quote-nm" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-width: 1px 1px 1px 5px; border-style: solid; border-color: rgb(226, 226, 226); line-height: 22px; border-radius: 0px 2px 2px 0px; background: 0px 0px;">
                  配置文件位于 core\config 中，包括数据库，日志存储，模板后缀，默认路由等配置，还可在分组下的common（如&nbsp;<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;"><em style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="text-decoration:underline;">Home\common\config\创建覆盖配置文件</span></em></span></a>）
              </blockquote>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <blockquote class="layui-elem-quote layui-quote-nm" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-width: 1px 1px 1px 5px; border-style: solid; border-color: rgb(226, 226, 226); line-height: 22px; border-radius: 0px 2px 2px 0px; background: 0px 0px;">
                  .env作为全局环境变量配置，目前只定义了数据库配置，具体可根据需求使用<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;"><em style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="text-decoration:underline;">getenv()</span></em></span></a>全局获取
              </blockquote>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
          </article>
          <p>
              <small><h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
                  路由
              </h1>
              <article>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                      Thunder中的路由十分简介强大，请看介绍：
                  </blockquote>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;url中直接访问：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">http://serverName/index.php（或不写）/module/controller/action/param1/value1/param2/value2/...</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;简洁路由注册：绵长冗余的url总是麻烦的。Thunder中支持预注册路由：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">// routes\web.phpuse \thunder\Route;/* * * 注册路由 * * */Route::init(&#39;goRoute&#39;,&#39;Home/index/index&#39;);//随后http://serverName/index.php（或不写）/goRoute	&lt;==&gt;	http://serverName/index.php（或不写）/goRoute/Home/index/index/*注意！如此注册之后并不代表你可以传递参数*///需传参写法：Route::init(&#39;goRoute/{param}&#39;,&#39;Home/index/index&#39;);//随后http://serverName/index.php（或不写）/goRoute/param1/value1/param2/value2/...	&lt;==&gt;	http://serverName/index.php（或不写）/goRoute/Home/index/index/param1/value1/param2/value2/...</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;
                  </p>
              </article>
              <h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
                  请求
              </h1>
              <article>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                      Thunder中获取类型是简介明了的
                  </blockquote>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;获取请求类型
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">http_method()函数获取请求类型//也可以使用IS_GET（判断是否为GET请求）IS_POST（判断是否为POST请求）</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;获取模块、控制器、方法
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//你可以在控制器中使用route()函数class IndexController{	public function mvc(){		$m = route()-&gt;module;		$c = route()-&gt;ctrl;		$v = route()-&gt;action;        dump(&#39;模块：&#39;.$m,&#39;控制器：&#39;.$c,&#39;方法：&#39;.$v);	}}</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//在浏览器中访问http://serverName/home/index/mvc依次会打印出&quot;模块：Home&quot;&quot;控制器：Index&quot;&quot;方法：mvc&quot;</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
              </article></small>
          </p>
          <h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
              数据库操作
          </h1>
          <article>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                  一个灵活的框架必然会有一个灵活强大的数据库操作，Thunder为了满足开发者的各种开发习惯，封装了传统操作和ORM操作两种模式。
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
                  &nbsp;为了避免开发者重复new来new去，系统提供了一个强大的函数<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;">table(&#39;表名&#39;)</a>，你可以把他想象成为一个你即将操作的数据库对象。下面简单了解一下用法：
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp; &nbsp;单条查询：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">class IndexController{	public function sql(){		table(&#39;student&#39;)-&gt;find();		//默认查找 student 表第一条数据		table(&#39;student&#39;)-&gt;find(2);		//返回ID为2的行的		table(&#39;student&#39;)-&gt;find(2,&#39;name&#39;);	//返回ID为2的学生的name值(返回字符串)		table(&#39;student&#39;)-&gt;find(2,&#39;id,name&#39;);	//返回ID为2的学生的id和name(返回的是数组)		&lt;==&gt;		table(&#39;student&#39;)-&gt;find(2,[&#39;id&#39;,&#39;name&#39;]);//为了清晰，可以使用数组形式(推荐)	}}</pre>
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
                  &nbsp;&nbsp;
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;多条查询：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">class IndexController{	public function sql(){		table(&#39;student&#39;)-&gt;all();//返回student表中全部数据	}}</pre>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;基本条件查询：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//你可以在查询中使用where()class IndexController{	public function sql(){		table(&#39;student&#39;)-&gt;where([&#39;name&#39;=&gt;&#39;thunder&#39;])-&gt;find();			table(&#39;student&#39;)-&gt;where([&#39;id&#39;=&gt;1])-&gt;all();    //WHERE id  = 1				table(&#39;student&#39;)-&gt;where([&#39;id[&gt;]&#39;=&gt;1])-&gt;all(); //WHERE id &gt; 1				table(&#39;student&#39;)-&gt;where([&#39;id[!]&#39;=&gt;1])-&gt;all(); //WHERE id != 1				table(&#39;student&#39;)-&gt;where([&#39;id[&gt;=]&#39;=&gt;1])-&gt;all();//WHERE id &gt;= 1		table(&#39;student&#39;)-&gt;where([&#39;id[&lt;=]&#39;=&gt;1])-&gt;all();//WHERE id &lt;= 1		table(&#39;student&#39;)-&gt;where([&#39;id[&lt;&gt;]&#39;=&gt;[1,10]])-&gt;all();//WHERE id BETWEEN 1 AND 10		table(&#39;student&#39;)-&gt;where([&#39;id[&gt;&lt;]&#39;=&gt;[1,10]])-&gt;all();//WHERE id NOT BETWEEN 1 AND 10		table(&#39;student&#39;)-&gt;where(&#39;city[~]&#39;=&gt;&#39;lon&#39;)-&gt;all();//WHERE &quot;city&quot; LIKE &#39;%lon%&#39;		table(&#39;student&#39;)-&gt;where(&#39;city[!~]&#39;=&gt;&#39;lon&#39;)-&gt;all();//WHERE &quot;city&quot; NOT LIKE &#39;%lon%&#39;		table(&#39;student&#39;)-&gt;where(&#39;city[~]&#39;=&gt;[&#39;lon&#39;,&#39;foo&#39;,&#39;bar&#39;])-&gt;all();//WHERE &quot;city&quot; LIKE &#39;%lon%&#39; OR &quot;city&quot; LIKE &#39;%foo%&#39; OR &quot;city&quot; LIKE &#39;%bar%&#39;		table(&#39;student&#39;)-&gt;where([&quot;OR&quot; =&gt; [				&quot;student_id&quot; =&gt; [2, 123, 234, 54],				&quot;email&quot; =&gt; [&quot;foo@bar.com&quot;, &quot;cat@dog.com&quot;, &quot;admin@medoo.in&quot;]			]])-&gt;all();						// WHERE			// student_id IN (2,123,234,54) OR			// email IN (&#39;foo@bar.com&#39;,&#39;cat@dog.com&#39;,&#39;admin@medoo.in&#39;)									// 多条件查询		table(&#39;student&#39;)-&gt;where([&quot;OR&quot; =&gt; [			&quot;AND&quot; =&gt; [				&quot;user_name[!]&quot; =&gt; &quot;foo&quot;,				&quot;student_id[!]&quot; =&gt; 1024,				&quot;email[!]&quot; =&gt; [&quot;foo@bar.com&quot;, &quot;cat@dog.com&quot;, &quot;admin@medoo.in&quot;],				&quot;city[!]&quot; =&gt; null,				&quot;promoted[!]&quot; =&gt; true			]		]])-&gt;all();		// WHERE		// `user_name` != &#39;foo&#39; AND		// `student_id` != 1024 AND		// `email` NOT IN (&#39;foo@bar.com&#39;,&#39;cat@dog.com&#39;,&#39;admin@medoo.in&#39;) AND		// `city` IS NOT NULL		// `promoted` != 1		}}</pre>
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
                  &nbsp;&nbsp;
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp; &nbsp;复合查询：你可以使用&quot;AND&quot; 或 &quot;OR&quot; 来拼接非常复杂的SQL语句
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">class IndexController{	public function sql(){		table(&#39;student&#39;)-&gt;where([&quot;OR&quot; =&gt; [			&quot;AND&quot; =&gt; [     //实际应用时这儿可以使用AND或者OR				&quot;OR&quot; =&gt; [  //第一个条件					&quot;user_name&quot; =&gt; &quot;foo&quot;,					&quot;email&quot; =&gt; &quot;foo@bar.com&quot;				],				&quot;OR&quot; =&gt; [ //第二个条件					&quot;user_name&quot; =&gt; &quot;bar&quot;,					&quot;email&quot; =&gt; &quot;bar@foo.com&quot;				]			]		]])-&gt;all();					// WHERE (		//  (		//      &quot;user_name&quot; = &#39;foo&#39; OR &quot;email&quot; = &#39;foo@bar.com&#39;		//  )		//  AND		//  (		//      &quot;user_name&quot; = &#39;bar&#39; OR &quot;email&quot; = &#39;bar@foo.com&#39;		//  )		// )	}}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;关联查询：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">// [&gt;] == LEFT JOIN// [&lt;] == RIGH JOIN// [&lt;&gt;] == FULL JOIN// [&gt;&lt;] == INNER JOINclass IndexController{	public function sql(){		table(&#39;student&#39;)-&gt;join([&quot;[&gt;]class&quot;=&gt;[&#39;s_id&#39;=&gt;&#39;class_id&#39;]])-&gt;all();		// LEFT JOIN `class` ON `student`.`class_id` =`s_id`	}}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp; &nbsp;连贯操作：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//之前的条件查询where()就是连贯操作的一种，剩下的请看例子，非常容易理解。class IndexController{	public function sql(){		//field()筛选字段 参数可以如下写，也可以写做数组形式		table(&#39;student&#39;)-&gt;field(&#39;name(别名),num&#39;)-&gt;all();		table(&#39;student&#39;)-&gt;field([&#39;name&#39;,&#39;num(别名)&#39;])-&gt;all();				//order()排序 参数可写多个，靠前权重高		table(&#39;student&#39;)-&gt;order([&#39;字段名&#39;=&gt;&#39;排序（如ASC，DESC需大写）&#39;])-&gt;all();				//limit()条数限制		table(&#39;student&#39;)-&gt;limit(l)-&gt;all();//表示从返回结果集中取l条数据;		table(&#39;student&#39;)-&gt;limit([n,m])-&gt;all();//表示从返回结果集中的第n+1条开始，取m条数据;				//以上方法均可连贯操作		table(&#39;student&#39;)-&gt;join([&quot;[&gt;]class&quot;=&gt;[&#39;s_id&#39;=&gt;&#39;class_id&#39;]])-&gt;where([&#39;class[&gt;]&#39;=&gt;1])-&gt;limit([5,10])-&gt;order([&#39;id&#39;=&gt;&#39;DESC&#39;])-&gt;field(&#39;name&#39;)-&gt;all();	}}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;新增数据：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">	public function sql(){		$data = [&#39;name&#39;=&gt;&#39;xiaoming&#39;,&#39;age&#39;=&gt;18];		table(&#39;student&#39;)-&gt;add($data);				//也可以批量新增		$data = [			[&#39;name&#39;=&gt;&#39;xiaoming&#39;,&#39;age&#39;=&gt;18],			[&#39;name&#39;=&gt;&#39;zhangsan&#39;,&#39;age&#39;=&gt;17],			[&#39;name&#39;=&gt;&#39;liergou&#39;,&#39;age&#39;=&gt;16]		];		table(&#39;student&#39;)-&gt;add($data);	}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;修改数据：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">	public function sql(){		$data = [&#39;name&#39;=&gt;&#39;xiaoming&#39;,&#39;email&#39;=&gt;&#39;631929063@qq.com&#39;];		//使用update()时可以连贯使用where()作为条件。		table(&#39;student&#39;)-&gt;where([&#39;student_id&#39;=&gt;3])-&gt;update($data);		//根据id修改数据时系统提供简介方法		table(&#39;student&#39;)-&gt;setOne(1,$data);	}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  &nbsp;删除数据：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">	public function sql(){		table(&#39;student&#39;)-&gt;destroy(1);	//根据id删除数据		table(&#39;student&#39;)-&gt;flushall();	//清空数据表（慎重使用）	}</pre>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <p>
                  &nbsp;
              </p>
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
                  统计数据：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">	public function sql(){		table(&#39;student&#39;)-&gt;count();	//统计条数		table(&#39;student&#39;)-&gt;max();	//统计字段最大		table(&#39;student&#39;)-&gt;min();	//统计字段最小		table(&#39;student&#39;)-&gt;avg();	//统计字段平均值		table(&#39;student&#39;)-&gt;sum();	//统计字段求和	}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  原生查询：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">	public function sql(){		table()-&gt;query(&quot;SELECT * FROM student&quot;)-&gt;fetchAll();	}</pre>
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
                  <br/>
              </p>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  事物操作：
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
              <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//不是每个数据库引擎都支持事务。你必须在使用前检查。如果返回false，则回滚事务。	public function sql(){		$database = table(&#39;student&#39;);		$database-&gt;action(function ($database){			$database-&gt;add([&#39;name&#39;=&gt;&#39;事物&#39;]);			$res = $database-&gt;setOne(1,[&#39;name&#39;=&gt;&#39;action&#39;]);			return $res-&gt;rowCount()==0? false:true;			return false;		});	}	//如果修改没有成功，返回false，则回滚事务。不会修改成功也不会添加成功。</pre>
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
                  <br/>
              </p>
          </article>
          <h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
              模型
          </h1>
          <article>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
              <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                  这里的ORM模型就不详细说明了，系统提供了<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;">model(&#39;表名&#39;)</a>函数以供调用ORM模型。具体请移步到<a target="_blank" href="https://docs.golaravel.com/docs/4.1/eloquent/" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); text-decoration-line: none; background-color: transparent; cursor: pointer; transition: color 0.15s ease;">https://docs.golaravel.com/docs/4.1/eloquent/</a>
              </blockquote>
              <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                  <br/>
              </p>
          </article>
          <p></p>
          <h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
              视图
          </h1>
          <p>
              <article>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                      Thunder封装了强大的模板引擎供开发者使用。在控制器中use \thunder\View;并且在类中use View;你就可以尽情的使用强大的引擎来协助你的工作
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
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>模板赋值：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">class IndexController{    public function index()    {        // 模板变量赋值        $this-&gt;assign(&#39;name&#39;,&#39;Thunder&#39;);        $this-&gt;assign(&#39;email&#39;,&#39;Thunder@qq.com&#39;);        // 或者批量赋值        $this-&gt;assign([            &#39;name&#39;  =&gt; &#39;Thunder&#39;,            &#39;email&#39; =&gt; &#39;Thunder@qq.com&#39;        ]);        // 模板输出        $this-&gt;display();		$this-&gt;display(&#39;index1&#39;);	  //同级目录下		$this-&gt;display(&#39;index/url&#39;);	  //跨控制器输出			$this-&gt;display(&#39;api/index/views&#39;);//跨模块输出		    }}	</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>&nbsp;&nbsp;
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      输出替换：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//在tpl配置文件中自定义规则return array(    &#39;TMPL_PARSE_STRING&#39;     =&gt;array(         //自定义模板变量        &#39;__PUBLIC__&#39;        =&gt; __PUBLIC__,        &#39;__ADMIN__&#39;        =&gt; __PUBLIC__.&#39;/&#39;.&#39;Admin&#39;,    ));	</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      //在html中使用<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); background-color: transparent; cursor: pointer; transition: color 0.15s ease;">{{__PUBLIC__}}</a>调用
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;&nbsp;
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;&nbsp;
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      &nbsp;资源加载：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">{{asset.css(&#39;路径&#39;)}}	//规则：server/public/模块/css/路径;{{asset.js(&#39;路径&#39;)}}	//规则：server/public/模块/js/路径;{{asset.asset(&#39;路径&#39;)}}	//规则：server/public/模块/路径;//该方法支持第二个参数{{asset.css(&#39;路径&#39;,true)}} //规则：server/public/Public/css/路径;代表模块公共目录路径	</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>&nbsp;变量输出：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">html中使用{{变量名}}	{{name}}	//在页面中显示	Thunder		</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>更多模板操作请参考<a href="https://twig.symfony.com/" target="_blank" style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(194, 87, 91); text-decoration-line: none; background-color: transparent; cursor: pointer; transition: color 0.15s ease;">twig手册</a>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
              </article>
          </p>
          <h1 style="box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 24px; font-weight: 500; font-family: Lato, Helvetica, sans-serif; line-height: 1.1; color: rgb(34, 34, 34); white-space: normal; background-color: rgb(238, 238, 238);">
              其他
          </h1>
          <p>
              <article>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <blockquote class="layui-elem-quote" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 15px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 17.5px; border-left: 5px solid rgb(0, 150, 136); line-height: 22px; border-radius: 0px 2px 2px 0px; background-color: rgb(242, 242, 242);">
                      Thunder的一些其他操作
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
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>session的使用：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">class IndexController{    public function index()    {       session()-&gt;set(&#39;name&#39;,&#39;val&#39;);       session()-&gt;get(&#39;name&#39;);       session()-&gt;del(&#39;name&#39;);       session()-&gt;clear();		    }}	</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>cookie的使用：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">use \thunder\Cookie;class IndexController{    public function index()    {       cookie::set(&#39;name&#39;,&#39;val&#39;);       cookie::get(&#39;name&#39;);       cookie::del(&#39;name&#39;);		    }}</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      验证码：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">public function create_verify(){	$v = verify();	$v-&gt;length = 4;	//设置长度	$v-&gt;useNoise = false;//是否添加杂点	$v-&gt;useCurve = false;//是否画混淆曲线	$v-&gt;create();//生成验证码}		</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">//验证public function verify(){	$code = input(&#39;post.code&#39;);	$v = verify();	if($v-&gt;check($code))	header(&#39;Location:./index?login=1&#39;);	$this-&gt;display();}	</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>文件上传：
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <pre style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding: 9.5px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); white-space: pre-wrap; word-wrap: break-word; overflow: auto; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: 13px; line-height: 1.42857; color: rgb(51, 51, 51); word-break: break-all; background-color: rgb(245, 245, 245); border: 1px solid rgb(204, 204, 204); border-radius: 4px;">public function upload(){	if(IS_POST){		$up = new \thunder\Upload();		//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)		$up -&gt; set(&quot;path&quot;,__UPLOAD__.&#39;/images&#39;);		$up -&gt; set(&quot;maxsize&quot;, 2000000);		$up -&gt; set(&quot;allowtype&quot;, array(&quot;gif&quot;, &quot;png&quot;, &quot;jpg&quot;,&quot;jpeg&quot;,&#39;xls&#39;));		$up -&gt; set(&quot;israndname&quot;, false);		if($up -&gt; upload(&quot;photo&quot;)) {			//获取上传后文件名子			var_dump($up-&gt;getFileName());		}else {			//获取上传失败以后的错误提示			var_dump($up-&gt;getErrorMsg());		}	}	$this-&gt;display();}				</pre>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <span style="box-sizing: border-box; margin: 0px; padding: 0px;"></span>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
                  <p style="box-sizing: border-box; margin-top: 10px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 1.32;">
                      <br/>
                  </p>
              </article><small>Created by leileida.</small>
          </p>
          <p>
              <br/>
          </p>
          <p>
              <br/>
          </p>
          <p>
              <br/>
          </p>
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