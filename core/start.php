<?php
namespace thunder;
/*
*   注册自动加载
*
*/
spl_autoload_register('\thunder\thunder::load');
/*
 *
 * ORM
 *
 *  */

include CORE.'/Illuminate.php';

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