<?php

class Thunder{
    public static $classMap = array();
    public $assign;
    static public function run(){
        session_start();

        \thunder\Log::init();
        define('NOW_TIME',      $_SERVER['REQUEST_TIME']);
        define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
        define('IS_GET',        REQUEST_METHOD =='GET' ? true : false);
        define('IS_POST',       REQUEST_METHOD =='POST' ? true : false);
        $route = new \thunder\Route();

        $ctrlClass_name = $route->ctrl;
        $action = $route->action;
        $controller_file = APP.'/controller/'.$ctrlClass_name.'Controller.php';
        $ctrlClass = '\\'.MODULE.'\controller\\'.$ctrlClass_name.'Controller';
        if(is_file($controller_file)){
            /*载入控制器文件*/
            include $controller_file;
            /*实例化控制器类*/
            $controller = new $ctrlClass();
            if(!in_array($action,get_class_methods($controller))){
                throw new \Exception('找不到方法【'.$action.'】');
            }

            /*调用方法*/
            $controller->$action();
            \thunder\Log::log('ctrl:'.$ctrlClass_name.'=>'.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器【'.$ctrlClass_name.'】');
        }
    }
    static public function load($class){
//        自动加载类
        if(isset($classMap[$class])){
            return true;
        }else {
            $class = str_replace('\\', '/', $class);
            $class_arr = explode('/',$class);

            $file = ($class_arr[0] =='app' && $class_arr[1]=='model')?
			 THUNDER .'/'. $class . '.php':

            CORE .'/'. $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

}