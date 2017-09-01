<?php
namespace core\lib;
class Log{
    static $class;
    static public function init(){
        $drive = conf::get('log','DRIVE');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name,$file='log'){
        self::$class->log($name,$file);
    }
}