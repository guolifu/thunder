<?php

namespace core;
use \core\lib\Route;
use \core\lib\Conf;
class Thunder{
    public static $classMap = array();
    public $assign;
    static public function run(){
        session_start();
        \core\lib\Log::init();
        $route = new route();

        $ctrlClass_name = $route->ctrl;
        $action = $route->action;
        $controller_file = APP.'/controller/'.$ctrlClass_name.'Controller.php';
        $ctrlClass = '\\'.MODULE.'\controller\\'.$ctrlClass_name.'Controller';
        if(is_file($controller_file)){
            /*载入控制器文件*/
            include $controller_file;
            /*实例化控制器类*/
            $controller = new $ctrlClass();
            /*调用方法*/
            $controller->$action();
            \core\lib\Log::log('ctrl:'.$ctrlClass_name.'=>'.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass_name);
        }
    }
    static public function load($class){
//        自动加载类
        if(isset($classMap[$class])){
            return true;
        }else {
            $class = str_replace('\\', '/', $class);
            $file = THUNDER .'/'. $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
    public function assign($name,$value){
        $this->assign[$name] = $value;
    }
    public function display($view=''){
        if(empty($view)){
            $route = new route();
            $view = $route->action;
        }
        $view = $view.Conf::get('tpl','TMPL_TEMPLATE_SUFFIX');
        $view_file = APP.'/views/'.$view;
        if(is_file($view_file)){
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => THUNDER.'/log/twig',
                'debug'=>DEBUG
            ));
            $template = $twig->load($view);
            $template->display($this->assign?$this->assign:array());
        }
    }
}