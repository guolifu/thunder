![ss](https://github.com/guolifu/thunder/blob/master/logo.png?raw=true)
## 前言

> Thunder，是一个免费开源的，快速、简单的面向对象的轻量级PHP开发框架。

## 目录结构

project  应用部署目录

	├─app		            应用目录
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
	└─README.md             README 文件
## URL访问
`http://serverName/index.php（或不写）/模块/控制器/操作/[参数名/参数值...]`

>出于优化的URL访问原则，还通过URL重写隐藏入口文件，下面以Apache为例说明隐藏应用入口文件index.php的.htaccess设置。
   

    <IfModule mod_rewrite.c>

        <IfModule mod_negotiation.c>

            Options -MultiViews

        </IfModule>
  
        RewriteEngine On    

        # Redirect Trailing Slashes If Not A Folder...

        RewriteCond %{REQUEST_FILENAME} !-d

        RewriteRule ^(.*)/$ /$1 [L,R=301]
        
        # Handle Front Controller...

        RewriteCond %{REQUEST_FILENAME} !-d

        RewriteCond %{REQUEST_FILENAME} !-f

        RewriteRule ^ index.php [L]    

        # Handle Authorization Header

        RewriteCond %{HTTP:Authorization} .

        RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    </IfModule>

## 命名空间
>如果不清楚命名空间的基本概念，可以参考PHP手册：[命名空间](http://www.php.net/manual/zh/language.namespaces.php)

模型：`namespace  app ;`
控制器：`namespace  模块名 \ controller ;`
## Traits
>简单来讲，PHP是单继承的语言，在PHP 5.4 Traits出现之前，PHP的类无法同时从两个基类继承属性或方法，php的Traits和Go语言的组合功能类似（可以理解为横向扩展），通过在类中使用use关键字声明要组合的Trait名称，而具体某个Trait的声明使用trait关键词，Trait不能直接实例化。Thunder中的视图层则是利用Trait引入。具体用法请看下面的代码：

#### 定义一个trait
	namespace thunder;
	trait View{
	public function display(){
			//
		}
	}

 

#### 使用他
	namespace Home\controller;
	use \thunder\View;
	class IndexController{
	use View;
	public function index(){
			$this->display();
		}
	}

## API模式数据
>API数据的输出

##### 控制器中直接使用return

	namespace Home\controller;
	class IndexController{
	public function index(){
		$data = ['name'=>'thunder','url'=>'guolifu.pw'];
		return ['data'=>$data,'code'=>1,'message'=>'ok'];
		//返回纯数组
		return ['data'=>$data,'code'=>1,'message'=>'ok','TO_ARRAY'=>true];
		//返回jsonp
		return ['data'=>$data,'code'=>1,'message'=>'ok','TO_JSONP'=>true];
		}
	}

##### 浏览器显示：

`{"data":		 {"name":"thunder","url":"guolifu.pw"},"code":1,"message":"ok"}`
## 配置
>配置文件位于` core\config`中，包括数据库，日志存储，模板后缀，默认路由等配置，还可在分组下的common（如` Home\common\config\创建覆盖配置文件`）
>>.env作为全局环境变量配置，目前只定义了数据库配置，具体可根据需求使用`getenv()`全局获取

## 路由
>Thunder中的路由十分简介强大，请看介绍：

#### url中直接访问：

 

`http://serverName/index.php（或不写）/module/controller/action/param1/value1/param2/value2/...`

 
##### 简洁路由注册：绵长冗余的url总是麻烦的。Thunder中支持预注册路由：


	// routes\web.php
	
	use \thunder\Route;
	
	/*注册路由*/

	Route::init('goRoute','Home/index/index');

##### 随后

	http://serverName/index.php（或不写）/goRoute
					<==>	
	http://serverName/index.php（或不写）/goRoute/Home/index/index



***注意！如此注册之后并不代表你可以传递参数***



**需传参写法**

	Route::init('goRoute/{param}','Home/index/index');

##### 随后

	http://serverName/index.php（或不写）/goRoute/param1/value1/param2/value2/.../...
	<==>	
	http://serverName/index.php（或不写）/goRoute/Home/index/index/param1/value1/param2/value2/.../...

 
## 请求
>Thunder中获取类型是简介明了的

##### 获取请求类型

`http_method()`函数获取请求类型

##### 也可以使用

`IS_GET（判断是否为GET请求）`

`IS_POST（判断是否为POST请求）`

 

#### 获取模块、控制器、方法

 

##### 你可以在控制器中使用`route()`函数



	class IndexController{
	
	public function mvc(){
	
			$m = route()->module;
		
			$c = route()->ctrl;
		
			$v = route()->action;
		
			dump('模块：'.$m,'控制器：'.$c,'方法：'.$v);
	
		}
	
	}

***在浏览器中访问http://serverName/home/index/mvc***

##### 依次会打印出

	"模块：Home"
	
	"控制器：Index"
	
	"方法：mvc"


## 数据库操作
>一个灵活的框架必然会有一个灵活强大的数据库操作，Thunder为了满足开发者的各种开发习惯，封装了传统操作和ORM操作两种模式。

  >为了避免开发者重复new来new去，系统提供了一个强大的函数table('表名')，你可以把他想象成为一个你即将操作的数据库对象。下面简单了解一下

#### 单条查询：
	class IndexController{

		public function sql(){
	
			table('student')->find();		//默认查找 student 表第一条数据
	
			table('student')->find(2);		//返回ID为2的行的
	
	
			table('student')->find(2,'name');	//返回ID为2的学生的name值(返回字符串)
	
	
			table('student')->find(2,'id,name');	//返回ID为2的学生的id和name(返回的是数组)
	
			<==>
	
			table('student')->find(2,['id','name']);//为了清晰，可以使用数组形式(推荐)
	
		}

	}

 

  

#### 多条查询：

	class IndexController{
	
		public function sql(){
		
			table('student')->all();//返回student表中全部数据
		
		}
	
	}


#### 基本条件查询：


##### 你可以在查询中使用`where()`

	class IndexController{

		public function sql(){
	
			table('student')->where(['name'=>'thunder'])->find();	
	
			table('student')->where(['id'=>1])->all();    //WHERE id  = 1		
	
			table('student')->where(['id[>]'=>1])->all(); //WHERE id > 1		
	
			table('student')->where(['id[!]'=>1])->all(); //WHERE id != 1		
	
			table('student')->where(['id[>=]'=>1])->all();//WHERE id >= 1
	
			table('student')->where(['id[<=]'=>1])->all();//WHERE id <= 1
	
			table('student')->where(['id[<>]'=>[1,10]])->all();//WHERE id BETWEEN 1 AND 10
	
			table('student')->where(['id[><]'=>[1,10]])->all();//WHERE id NOT BETWEEN 1 AND 10
	
			table('student')->where('city[~]'=>'lon')->all();//WHERE "city" LIKE '%lon%'
	
			table('student')->where('city[!~]'=>'lon')->all();//WHERE "city" NOT LIKE '%lon%'
	
			table('student')->where('city[~]'=>['lon','foo','bar'])->all();//WHERE "city" LIKE '%lon%' OR "city" LIKE '%foo%' OR "city" LIKE '%bar%'
	
			table('student')->where(["OR" => [
	
					"student_id" => [2, 123, 234, 54],
	
					"email" => ["foo@bar.com", "cat@dog.com", "admin@medoo.in"]
	
				]])->all();
	
				
	
				// WHERE
	
				// student_id IN (2,123,234,54) OR
	
				// email IN ('foo@bar.com','cat@dog.com','admin@medoo.in')		
	
						
	
			// 多条件查询
	
			table('student')->where(["OR" => [
	
				"AND" => [
	
					"user_name[!]" => "foo",
	
					"student_id[!]" => 1024,
	
					"email[!]" => ["foo@bar.com", "cat@dog.com", "admin@medoo.in"],
	
					"city[!]" => null,
	
					"promoted[!]" => true
	
				]
	
			]])->all();
	
			// WHERE
	
			// `user_name` != 'foo' AND
	
			// `student_id` != 1024 AND
	
			// `email` NOT IN ('foo@bar.com','cat@dog.com','admin@medoo.in') AND
	
			// `city` IS NOT NULL
	
			// `promoted` != 1	
	
		}

	}

 

  

#### 复合查询：你可以使用"AND" 或 "OR" 来拼接非常复杂的SQL语句

 

	class IndexController{

		public function sql(){
	
			table('student')->where(["OR" => [
	
				"AND" => [     //实际应用时这儿可以使用AND或者OR
	
					"OR" => [  //第一个条件
	
						"user_name" => "foo",
	
						"email" => "foo@bar.com"
	
					],
	
					"OR" => [ //第二个条件
	
						"user_name" => "bar",
	
						"email" => "bar@foo.com"
	
					]
	
				]
	
			]])->all();
	
				
	
			// WHERE (
	
			//  (
	
			//      "user_name" = 'foo' OR "email" = 'foo@bar.com'
	
			//  )
	
			//  AND
	
			//  (
	
			//      "user_name" = 'bar' OR "email" = 'bar@foo.com'
	
			//  )
	
			// )
	
		}

	}



#### 关联查询：

`
[>] == LEFT JOIN
[<] == RIGH JOIN
[<>] == FULL JOIN
[><] == INNER JOIN
`
	class IndexController{
	
		public function sql(){
		
			table('student')->join(["[>]class"=>['s_id'=>'class_id']])->all();		
			// LEFT JOIN `class` ON `student`.`class_id` =`s_id`
		
		}
	
	}

#### 连贯操作：

 

//之前的条件查询where()就是连贯操作的一种，剩下的请看例子，非常容易理解。

	class IndexController{

	public function sql(){

		//field()筛选字段 参数可以如下写，也可以写做数组形式

		table('student')->field('name(别名),num')->all();

		table('student')->field(['name','num(别名)'])->all();

		

		//order()排序 参数可写多个，靠前权重高

		table('student')->order(['字段名'=>'排序（如ASC，DESC需大写）'])->all();

		

		//limit()条数限制

		table('student')->limit(l)->all();//表示从返回结果集中取l条数据;

		table('student')->limit([n,m])->all();//表示从返回结果集中的第n+1条开始，取m条数据;

		

		//以上方法均可连贯操作

		table('student')->join(["[>]class"=>['s_id'=>'class_id']])->where(['class[>]'=>1])->limit([5,10])->order(['id'=>'DESC'])->field('name')->all();

	    }

	}



#### 新增数据：
	public function sql(){

		$data = ['name'=>'xiaoming','age'=>18];

		table('student')->add($data);

		

		//也可以批量新增

		$data = [

			['name'=>'xiaoming','age'=>18],

			['name'=>'zhangsan','age'=>17],

			['name'=>'liergou','age'=>16]

		];

		table('student')->add($data);

	}



#### 修改数据：

	public function sql(){

		$data = ['name'=>'xiaoming','email'=>'631929063@qq.com'];

		//使用update()时可以连贯使用where()作为条件。

		table('student')->where(['student_id'=>3])->update($data);

		//根据id修改数据时系统提供简介方法

		table('student')->setOne(1,$data);

	}

#### 删除数据：
	public function sql(){

		table('student')->destroy(1);	//根据id删除数据

		table('student')->flushall();	//清空数据表（慎重使用）

	}


#### 统计数据：
	public function sql(){

		table('student')->count();	//统计条数

		table('student')->max();	//统计字段最大

		table('student')->min();	//统计字段最小

		table('student')->avg();	//统计字段平均值

		table('student')->sum();	//统计字段求和

	}



#### 原生查询：

 

	public function sql(){

		table()->query("SELECT * FROM student")->fetchAll();

	}



#### 事物操作：

 

//不是每个数据库引擎都支持事务。你必须在使用前检查。如果返回false，则回滚事务。

	public function sql(){

		$database = table('student');

		$database->action(function ($database){

			$database->add(['name'=>'事物']);

			$res = $database->setOne(1,['name'=>'action']);

			return $res->rowCount()==0? false:true;

			return false;

		});

	}

	//如果修改没有成功，返回false，则回滚事务。不会修改成功也不会添加成功。


## 模型
>这里的ORM模型就不详细说明了，系统提供了model('表名')函数以供调用ORM模型。具体请移步到https://docs.golaravel.com/docs/4.1/eloquent/
## 视图
>Thunder封装了强大的模板引擎供开发者使用。在控制器中use \thunder\View;并且在类中use View;你就可以尽情的使用强大的引擎来协助你的工作



#### 模板赋值：




	class IndexController{
	
	public function index(){
	
		// 模板变量赋值
		
		$this->assign('name','Thunder');
		
		$this->assign('email','Thunder@qq.com');
		
		// 或者批量赋值
		
		$this->assign([
		
		'name'  => 'Thunder',
		
		'email' => 'Thunder@qq.com'
		
		]);
		
		// 模板输出
		
		$this->display();
		
		$this->display('index1');	  //同级目录下
		
		$this->display('index/url');	  //跨控制器输出	
		
		$this->display('api/index/views');//跨模块输出
	
	
	
		}
	
	}

#### 输出替换：

**在tpl配置文件中自定义规则**

	return array(
	
		'TMPL_PARSE_STRING'     =>array(         //自定义模板变量
		
			'__PUBLIC__'        => __PUBLIC__,
		
			'__ADMIN__'        => __PUBLIC__.'/'.'Admin',
		
		)
	
	);

	//在html中使用{{__PUBLIC__}}调用

#### 资源加载：

    {{asset.css('路径')}}	//规则：server/public/模块/css/路径;
    {{asset.js('路径')}}	//规则：server/public/模块/js/路径;
    {{asset.asset('路径')}}	//规则：server/public/模块/路径;

*该方法支持第二个参数*

`{{asset.css('路径',true)}} //规则：server/public/Public/css/路径;代表模块公共目录路径`
#### 变量输出：


`html中使用{{变量名}}`

	{{name}}

	
*在页面中显示*

`Thunder`

 **更多模板操作请参考[twig手册](https://twig.symfony.com/)**


## 其他
>Thunder的一些其他操作

##### session的使用：




	class IndexController{
	
		public function index(){
		
			session()->set('name','val');
			
			session()->get('name');
			
			session()->del('name');
			
			session()->clear();
		
		}
		
	}
	





#### cookie的使用：

	use \thunder\Cookie;
	
	class IndexController{
	
		public function index(){
		
			cookie::set('name','val');
			
			cookie::get('name');
			
			cookie::del('name');
		
		}
	
	}






#### 验证码：



	public function create_verify(){

		$v = verify();
	
		$v->length = 4;	//设置长度
	
		$v->useNoise = false;//是否添加杂点
	
		$v->useCurve = false;//是否画混淆曲线
	
		$v->create();//生成验证码

	}

##### 验证

	public function verify(){
	
		$code = input('post.code');
		
		$v = verify();
		
		if($v->check($code))
		
		header('Location:./index?login=1');
		
		$this->display();
	
	}

	





#### 文件上传：




	public function upload(){
	
		if(IS_POST){
		
			$up = new \thunder\Upload();
			
			//设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
			
			$up -> set("path",__UPLOAD__.'/images');
			
			$up -> set("maxsize", 2000000);
			
			$up -> set("allowtype", array("gif", "png", "jpg","jpeg",'xls'));
			
			$up -> set("israndname", false);
		
			if($up -> upload("photo")) {
			
			//获取上传后文件名子
			
			var_dump($up->getFileName());
			
			}else {
			
				//获取上传失败以后的错误提示
				
				var_dump($up->getErrorMsg());
			
			}
		
		}
	
		$this->display();
	
	}	

	

***Created by leileida.***
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