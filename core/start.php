<?php
namespace thunder;

/*
*   注册自动加载
*
*/
spl_autoload_register('\thunder\thunder::load');
/*
 *
 * 执行
 *
 */
thunder::run();