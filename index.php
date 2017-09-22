<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'7.0.0','<'))  die('require PHP > 7.0.0 !');
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
header("Access-Control-Allow-Origin: *");
define('_PHP_FILE_',rtrim($_SERVER['SCRIPT_NAME'],'/'));
$_root  =   rtrim(dirname(_PHP_FILE_),'/');
define('__ROOT__',  (($_root=='/' || $_root=='\\')?'':$_root));
define('__PUBLIC__',  __ROOT__.'/public');
define('__UPLOAD__','./public/uploads');
define('THUNDER',realpath('./'));
define('CORE',THUNDER.'/core');
define('APP',THUNDER.'/app');
define('ROUTES',THUNDER.'/routes');
define('MODULE','app');
define('CONF_PATH',CORE.'/config');
define('EXT','.php');
define('NOW_TIME',      $_SERVER['REQUEST_TIME']);
define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
define('IS_GET',        REQUEST_METHOD =='GET' ? true : false);
define('IS_POST',       REQUEST_METHOD =='POST' ? true : false);
include "vendor/autoload.php";
/*加载env配置*/
$dotenv  =  new  \Dotenv\Dotenv(__DIR__);
$dotenv->load();
define('DEBUG',true);
if(DEBUG){
    $whoops = new \Whoops\Run;
    $title = '框架出错了';
    $option = new \Whoops\Handler\PrettyPageHandler;
    $option->setPageTitle($title);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

include CORE.'/common/function.php';

require CORE.'/thunder.php';

require CORE.'/start.php';
