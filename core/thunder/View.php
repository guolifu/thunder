<?php
namespace thunder;
trait View{
    public $assign;
    public $replace;
    public function __construct(){
        $this->replace = Conf::get('tpl','TMPL_PARSE_STRING');
        $this->assign = $this->replace;
    }

    public function assign($name,$value){
        $this->assign[$name] = $value;
        $this->assign = array_merge($this->assign,$this->replace);
    }
    public function display($view=''){
        $route = Route::get_instance();
        $m = $route->module;
        $c = $route->ctrl;

        if(empty($view)){
            /*默认当前页*/
            $a = $route->action;
            $view = $c.'/'.$a.TPL;
        }else{
            $view_arr = explode('/',$view);
            $v_n = count($view_arr);

            switch($v_n){
                /*同级目录下*/
                case '1' :{
                    $view = $c.'/'.$view_arr[0].TPL;
                    break;
                }
                /*跨控制器读取页面*/
                case '2' :{
                    $view = $view_arr[0].'/'.$view_arr[1].TPL;
                    break;
                }
                /*跨模块读取页面*/
                case '3' :{
                    $m = ucfirst($view_arr[0]);
                    $view = $view_arr[1].'/'.$view_arr[2].TPL;
                    break;
                }
            }
        }
        $PRE_PATH = APP.'/'.$m.'/views/';

        $view_file = $PRE_PATH.$view;
        if(is_file($view_file)){
            $loader = new \Twig_Loader_Filesystem($PRE_PATH);
            $twig = new \Twig_Environment($loader, array(
                'cache' => THUNDER.'/log/twig',
                'debug'=>DEBUG
            ));
            $template = $twig->load($view);
            $twig->addGlobal('asset', new TwigAsset);
            $template->display($this->assign?$this->assign:array());
        }else{
            throw new \Exception('找不到模版【'.$view_file.'】');
        }
    }
}