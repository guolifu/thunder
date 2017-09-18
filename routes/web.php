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
