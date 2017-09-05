<?php
namespace thunder;
trait View{
    public $assign;
    public $replace = array(
        'asset'    => __PUBLIC__
    );
    public function assign($name,$value){
        $this->assign[$name] = $value;
        $this->assign = array_merge($this->assign,$this->replace);
    }
    public function display($view=''){
        if(empty($view)){
            $route = new route();
            $c = $route->ctrl;
            $a = $route->action;
            $view = $c.'/'.$a.Conf::get('tpl','TMPL_TEMPLATE_SUFFIX');

        }else{
            $view = $view.Conf::get('tpl','TMPL_TEMPLATE_SUFFIX');
        }
        $view_file = APP.'/views/'.$view;

        if(is_file($view_file)){
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => THUNDER.'/log/twig',
                'debug'=>DEBUG
            ));
            $template = $twig->load($view);
            $template->display($this->assign?$this->assign:array());
        }else{
            throw new \Exception('找不到模版【'.$view_file.'】');
        }
    }
}