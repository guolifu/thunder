<?php
namespace thunder;
class TwigAsset
{
    public function css($path){
        return __PUBLIC__.'/css/'.$path;
    }
    public function js($path){
        return __PUBLIC__.'/js/'.$path;
    }
    public function route($path){
        return Route::_get_pub_path($path);
    }

}