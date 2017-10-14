<?php
use \thunder\Route;
/*
 *
 * 注册路由
 *
 * */
Route::init('goapi','api/index/api');

Route::init('goapi2/add/{param}','api/index/index');

Route::init('gohome/{param}','home/index/url');

Route::init('get_dish','api/index/get_dish');

Route::init('vue','api/index/vue');

Route::init('manual','home/index/manual');

Route::init('rj1241','home/class/index');

Route::init('ctk','api/index/checkThisWebIsOk/');

Route::init('c_p','api/index/checkThisWebIsOk_php/');

Route::init('centos_install','home/article/centos_install/');
Route::init('composer_install','home/article/composer_install/');
Route::init('port','home/article/port/');
Route::init('php_install','home/article/php_install/');