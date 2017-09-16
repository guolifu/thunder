<?php
namespace api\controller;
header("Access-Control-Allow-Origin: *");
class IndexController{
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

        dump($res);die;
        return ['api'=>1];
    }
    public function get_dish(){
        $dish = model('dish');
        $res = $dish->lists();
        return ($res) ;
    }
}