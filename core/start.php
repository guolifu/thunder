<?php
namespace thunder;
use Illuminate\Database\Capsule\Manager as Capsule;
/*
*   注册自动加载
*
*/
spl_autoload_register('\thunder\thunder::load');
/*ORM数据库*/
$data = conf::get('database','ORM');
$capsule = new Capsule;
$capsule->addConnection($data);
$capsule->bootEloquent();
/*
 * 加载注册路由
 * */
include ROUTES.'/web.php';

/*
 *
 * 执行
 *
 */
thunder::run();