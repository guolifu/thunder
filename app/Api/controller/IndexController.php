<?php
namespace Api\controller;
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
            'database_name' => 'webchain',
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            // 可选
            'port' => 3306,
            // 可选，定义表的前缀
            'prefix' => 'pre_',
        );

        $r = model('admin',$da);
        $res = $r->lists();
//        $res = $r->test();

//        dump($res);die;
        return $res;
//        return ['api'=>1];
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
    public function post(){
        $data['name'] = input('name');
        $data['age'] = 1;
        $data['sex'] = 5;
        return $data;

    }
}
