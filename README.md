v2.0.0
修正了路由规则<br>
增加了多模块机制<br>
控制器方法重构<br>
加入api开发模式，控制器return数组自动转换为json格式等。<br>
模型层重构，模型层分离未独立层：<br>
demo:<br>
<?php
namespace app;
use \thunder\Model;
class Student extends Model{
    public function test(){
        return 'test!';
    }
}
视图机制优化，支持跨控制器，跨模块输出页面<br>
demo:<br>
<?php
namespace home\controller;
use \thunder\View;
class StudentController{
    use View;
    public function index(){
//        $this->assign('name','thunder');
//        $this->display();
//        $this->display('index1');
//        $this->display('index/url');
        $this->display('api/index/views');
    }
}
