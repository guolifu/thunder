<?php
namespace api\controller;
header("Access-Control-Allow-Origin: *");
class IndexController{
    public function index(){
        return "api";
    }
    public function api(){
        return ['api'=>1];
    }
    public function get_dish(){
        $dish = model('dish');
        $res = $dish->lists();
        return ($res) ;
    }
}