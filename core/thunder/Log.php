<?php
namespace thunder;
class Log{
    static $class;
    static public function init(){
        $drive = Conf::get('log','DRIVE');
        $class = '\thunder\drive\log\\'.$drive;
        self::$class =  $class::get_instance();
    }

    static public function log($name,$file='log'){
        self::$class->log($name,$file);
    }
}