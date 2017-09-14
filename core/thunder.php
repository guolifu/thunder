<?php
namespace thunder;
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
        define('EXT',Conf::get('tpl','TMPL_TEMPLATE_SUFFIX'));

        $route = new \thunder\Route();
        $module_name = ucfirst($route->module);
        $ctrlClass_name = ucfirst($route->ctrl);
        $action = $route->action;

        $module_dir = APP.'/'.$module_name;
        if(!is_dir($module_dir)){
            throw new \Exception('找不到模块【'.$module_name.'】');
        }
        $controller_file = $module_dir.'/controller/'.$ctrlClass_name.'Controller.php';
        $ctrlClass = '\\'.$module_name.'\controller\\'.$ctrlClass_name.'Controller';
        if(is_file($controller_file)){
            /*载入控制器文件*/
            include $controller_file;
            /*实例化控制器类*/
            $controller = new $ctrlClass();
            if(!in_array($action,get_class_methods($controller))){
                throw new \Exception('找不到方法【'.$action.'】');
            }

            /*调用方法*/
            $data = $controller->$action();

            Response::send($data);

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