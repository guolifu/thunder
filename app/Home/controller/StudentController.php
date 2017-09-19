<?php
namespace Home\controller;
use \thunder\View;
class StudentController{
    use View;
    public function index(){
//        $this->assign('name','thunder');
        $this->display();
//        $this->display('index1');
//        $this->display('index/url');
//        $this->display('api/index/views');
    }
}