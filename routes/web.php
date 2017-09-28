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

Route::init('ctk','api/index/checkThisWebIsOk/');  //创建路由规则

Route::init('c_p','api/index/checkThisWebIsOk_php/');  //创建路由规则