<?php
namespace api\controller;

class IndexController{
    public function index(){
        return "api";
    }
    public function api(){

//        $da = array(
//            'database_type' => 'mysql',
//            'database_name' => 'webchain',
//            'server' => '192.168.7.96',
//            'username' => 'glf',
//            'password' => 'glf',
//            'charset' => 'utf8',
//            // 可选
//            'port' => 3306,
//            // 可选，定义表的前缀
//            'prefix' => 'pre_',
//        );

        $r = model('student');
        $res = $r->lists();
        dump($res);die;
        return ['api'=>1];
    }
}