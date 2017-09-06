<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('require PHP > 5.4.0 !');
header("Content-type:text/html;charset=utf-8");
define('_PHP_FILE_',rtrim($_SERVER['SCRIPT_NAME'],'/'));
$_root  =   rtrim(dirname(_PHP_FILE_),'/');
define('__ROOT__',  (($_root=='/' || $_root=='\\')?'':$_root));
define('__PUBLIC__',  __ROOT__.'/public');
define('__UPLOAD__','./public/uploads');
define('THUNDER',realpath('./'));
define('CORE',THUNDER.'/core');
define('APP',THUNDER.'/app');
define('MODULE','app');
define('CONF_PATH',CORE.'/config');

include "vendor/autoload.php";
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
//sss();
include CORE.'/common/function.php';

include CORE.'/thunder.php';

spl_autoload_register('\thunder::load');
\thunder::run();
