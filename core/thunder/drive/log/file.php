<?php
namespace thunder\drive\log;
//文件系统
use thunder\Conf;

class File{
    public $path;
    private static $_instance;

    public static function get_instance(){
        if( ! (self::$_instance instanceof self) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    private function __construct(){
        $conf = Conf::get('log','OPTION');
        $this->path = $conf['PATH'];
    }
    public function log($message,$file = 'log'){
		// 设置时区
        $date_path = date('Ymd');
        if(!is_dir($this->path.$date_path)){
            mkdir($this->path.$date_path,'0777',true);
        }
        $log_name = $this->path.$date_path.'/'.$file.'.log';
        $log_content = date('Y-m-d H:i:s').json_encode($message).PHP_EOL;
        return file_put_contents($log_name,$log_content,FILE_APPEND);
    }
}
