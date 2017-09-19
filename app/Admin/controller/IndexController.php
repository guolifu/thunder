<?php
namespace Admin\controller;
use \thunder\View;
class IndexController{
    use View;
    public function index(){
        $this->display();
    }
    public function main(){
        $this->display();
    }
    public function form(){
        $this->display();
    }
    public function table(){
        $this->display();
    }
    public function edit_form(){
        $this->display();
    }
}