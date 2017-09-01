<?php
namespace core\lib;
class Route{
    public $ctrl;
    public $action;
    public $path;
    public $route;

    public function __construct()
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
        $route = Conf::get('route');
        if (isset($real_path)) {
            $pathStr = str_replace($_SERVER['SCRIPT_NAME'], '', $real_path);
            //丢掉?以及后面的参数
            $path = explode('?', $pathStr);
            //去掉多余的分隔符
            $path = explode('/', trim($path[0], '/'));
            if (isset($path[0]) && $path[0]) {
                $this->ctrl = $path[0];
            } else {
                $this->ctrl = $route['DEFAULT_CTRL'];
            }
            unset($path[0]);
            //检测是否包含路由缩写
            if (isset($route['ROUTE'][$this->ctrl])) {
                $this->action = $route['ROUTE'][$this->ctrl][1];
                $this->ctrl = $route['ROUTE'][$this->ctrl][0];
            } else {
                if (isset($path[1]) && $path[1]) {
                    $have = strstr($path[1], '?', true);
                    if ($have) {
                        $this->action = $have;
                    } else {
                        $this->action = $path[1];
                    }

                } else {
                    $this->action = $route['DEFAULT_ACTION'];
                }
                unset($path[1]);
            }

            $this->path = array_merge($path);
            $path_lenth = count($path);
            $i = 0;
            while ($i < $path_lenth) {
                if (isset($this->path[$i + 1])) {
                    $_GET[$this->path[$i]] = $this->path[$i + 1];
                }
                $i = $i + 2;
            }
        } else {

            $this->ctrl = conf::get('route','DEFAULT_CTRL');
            $this->action = conf::get('route','DEFAULT_ACTION');
        }
    }
}