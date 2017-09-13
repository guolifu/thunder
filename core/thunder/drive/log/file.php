<?php
namespace thunder\drive\log;
//文件系统
use thunder\Conf;

class File{
    public $path;
    public function __construct(){
        $conf = Conf::get('log','OPTION');
        $this->path = $conf['PATH'];
    }
    public function log($message,$file = 'log'){
		// 设置时区
		date_default_timezone_set('PRC');
        $date_path = date('Ymd');
        if(!is_dir($this->path.$date_path)){
            mkdir($this->path.$date_path,'0777',true);
        }
        $log_name = $this->path.$date_path.'/'.$file.'.php';
        $log_content = date('Y-m-d H:i:s').json_encode($message).PHP_EOL;
        return file_put_contents($log_name,$log_content,FILE_APPEND);
    }
}
