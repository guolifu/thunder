<?php
namespace Home\controller;
use \thunder\View;
class ArticleController{
    use View;
    public function centos_install(){
        $this->display();
    }
    public function composer_install(){
        $this->display();
    }
    public function php_install(){
        $this->display();
    }
    public function port(){
        $this->display();
    }
}