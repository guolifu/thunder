<?php
namespace api\controller;
use \thunder\View;
header("Access-Control-Allow-Origin: *");
class IndexController{
    use View;
    public function index(){
        return "api";
    }
    public function api(){

        $da = array(
            'database_type' => 'mysql',
            'database_name' => 'test',
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            // 可选
            'port' => 3306,
            // 可选，定义表的前缀
            'prefix' => '',
        );

        $r = model('admin');
        $res = $r->lists();
//        $res = $r->test();

//        dump($res);die;
        return ['api'=>1,'TO_JSONP'=>true];
    }
    public function get_dish(){
        $dish = model('dish');
        $res = $dish->lists();
//        dump($res);die;
        return $res  ;
    }
    public function vue(){
        $this->display();
    }
}