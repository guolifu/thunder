<?php
namespace thunder;
class Route{
    public $module;

    public $ctrl;

    public $action;

    public $path;

    public $route;

    private static $rules = [];

    private static $_instance;
    /*外部调用*/
    private static $pub_path;

    public static function get_instance(){
        if( ! (self::$_instance instanceof self) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __clone()
    {
        //覆盖方法禁止外部clone
    }

    private function __construct()
    {
        /*获取 script_name */
        $SCRIPT_NAME = $_SERVER['SCRIPT_NAME'];
        /*获取文件名*/
        $base_name = basename($SCRIPT_NAME);
        /*获取长度*/
        $base_name_len = strlen($base_name);
        /*提取多余路径*/
        $before_SCRIPT_NAME = substr($SCRIPT_NAME,0,-$base_name_len);

        if(isset($_SERVER['REDIRECT_URL'])){
            /*多余路径长度*/
            $before_SCRIPT_NAME_LEN = strlen($before_SCRIPT_NAME);
            /*获取REDIRECT_URL后长度*/
            $PATH_ALL_LEN = strlen($_SERVER['REDIRECT_URL']);
            /*提取路径*/
            $real_path = substr($_SERVER['REDIRECT_URL'],$before_SCRIPT_NAME_LEN,$PATH_ALL_LEN);
        }

        /*PATH_INFO访问*/
        if(isset($_SERVER['PATH_INFO'])){
            $real_path = substr($_SERVER['PATH_INFO'],1);
        }

        $this->route = Conf::get('route');

        /*存在注册列表时查看*/
        if(!empty(self::$rules) && isset($real_path)){
            /*获取注册路由*/
            $real_path = self::_get_route_path($real_path);
        }


        isset($real_path)?
            $this->routine_routes($real_path):
            $this->default_routes();

    }
    /*
     * 获取注册路由
     * */
    public static function _get_route_path($path){
        if(!empty(self::$rules))
        $rules = self::$rules;

        /*$path 为用户输入url，$rules_key 为规则键名*/
        foreach($rules as $rule){
            /*含param时*/
            if($rule['param']){
                $rules_key = str_replace('/','\/',$rule['real_rules'].'/');
                $preg_rule = preg_match("/^$rules_key/",$path,$match);
            }else{
                $rules_key = str_replace('/','\/',$rule['real_rules']);
                $preg_rule = preg_match("/^$rules_key$/",$path,$match);
            }
            /*匹配成功时*/
            if($preg_rule){
                $param = str_replace($match[0],'',$path);
                $path = $rule['rules'].'/'.$param;
            }

        }

        self::$pub_path = $rule['rules'];

        return $path;
    }
    /*
     * 提供外部调用
     * */
    public static function _get_pub_path(){
        return self::$pub_path;
    }

    public static function _get_module(){
        return self::$_instance->module;
    }

    public static function _get_ctrl(){
        return self::$_instance->ctrl;
    }

    public static function _get_action(){
        return self::$_instance->action;
    }



    public static function init($rules,$route){
        $r = array();
        /*解析传入路由*/
        $analysis_rules = self::_analysis_route_path($rules,$route);
        $r[$analysis_rules['real_rules']] = $analysis_rules;
        self::$rules = array_merge(self::$rules,$r);
    }

    /*
     *
     * 解析路由
     *
     * */
    public static function _analysis_route_path($rules,$route){
        $rules_arr = explode('/',$rules);

        $analysis_rules['rules'] = $route;

        $analysis_rules['param'] = end($rules_arr)=='{param}' ? true : false;
        if(end($rules_arr)=='{param}'){
            array_pop($rules_arr);
            $analysis_rules['real_rules'] = implode('/',$rules_arr);
        }else{
            $analysis_rules['real_rules'] = $rules;
        }
        return $analysis_rules;
    }
    /*
     *
     * 常规路由
     *
     * */
    public function routine_routes($real_path){
        $route = $this->route;

        $pathStr = str_replace($_SERVER['SCRIPT_NAME'], '', $real_path);
            //丢掉?以及后面的参数
            $path = explode('?', $pathStr);
            //去掉多余的分隔符
            $path = explode('/', trim($path[0], '/'));
             (isset($path[0]) && $path[0])?
                $this->module = $this->ucfirst_name($path[0]) :
                $this->module = $this->ucfirst_name($route['DEFAULT_MODULE']);

            unset($path[0]);

             (isset($path[1]) && $path[1]) ?
                $this->ctrl = $this->ucfirst_name($path[1]):
                $this->ctrl = $this->ucfirst_name($route['DEFAULT_CTRL']);

            unset($path[1]);


            if (isset($path[2]) && $path[2]) {
                $have = strstr($path[2], '?', true);
                ($have)?
                $this->action = $have:
                $this->action = $path[2];
            } else {
                $this->action = $route['DEFAULT_ACTION'];
            }
            unset($path[2]);

            $this->path = array_merge($path);
            $path_lenth = count($path);
            $i = 0;
            while ($i < $path_lenth) {
                if (isset($this->path[$i + 1])) {
                    $_GET[$this->path[$i]] = $this->path[$i + 1];
                }
                $i = $i + 2;
            }
    }
    /*
     *
     * 默认路由
     *
     * */
    public function default_routes(){
        $route = $this->route;
        $this->module = $route['DEFAULT_MODULE'];
        $this->ctrl = $route['DEFAULT_CTRL'];
        $this->action = $route['DEFAULT_ACTION'];
    }

    public function ucfirst_name($val){
        return ucfirst(strtolower($val));
    }
}