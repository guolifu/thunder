<?php
use \thunder\Route;
/*
 *
 * 注册路由
 *
 * */
Route::init('goapi','api/index/index');

Route::init('goapi2/add/{param}','api/index/index');

Route::init('gohome/{param}','home/index/url');
