<?php
namespace app\controller;
use \thunder\View;
class studentController{
    use View;
    public function index(){
        $this->display('student/index1');
    }
}