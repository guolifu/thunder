<?php
namespace thunder;
class TwigAsset
{
    public function css($path,$root=false){
        $module = ucfirst(route()->module);
        return $root?__PUBLIC__.'/'.$module.'/css/'.$path:
            __PUBLIC__.'/Public/css/'.$path;
    }
    public function js($path,$root=false){
        $module = ucfirst(route()->module);
        return $root?__PUBLIC__.'/'.$module.'/js/'.$path:
            __PUBLIC__.'/Public/js/'.$path;
    }
    public function route($path){
        return Route::_get_pub_path($path);
    }

}