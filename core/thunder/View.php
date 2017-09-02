<?php
namespace thunder;
trait View{
    public $assign;
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