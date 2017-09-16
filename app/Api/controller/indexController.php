<?php
namespace api\controller;

class IndexController{
    public function index(){
        return "api";
    }
    public function api(){
        return ['api'=>1,'TO_JSONP'=>true];
    }
}