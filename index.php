<?php
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
