<?php
namespace core\lib;
class Conf
{
    /**
     * 缓存配置文件
     * @var array $configs
     */
    public static $configs = [];
    /**
     * 取得一个配置文件的所有配置或其中一个配置项
     * @param  string $name 配置文件名
     * @param  string $key  配置项名
     * @return mixed        找不到配置时返回false，当$key为空时返回文件所有配置，否则只返回$key这配置项
     */
    public static function get($name, $key=null)
    {
        // 没有缓存过配置的话就导入配置文件
        if (!isset(self::$configs[$name])) {
            $file = CONF_PATH . '/' . $name . '.php';
            // 没有找到配置文件就返回false
            if (!is_file($file)) {
                return false;
            }
            self::$configs[$name] = include $file;
        }
        $config = self::$configs[$name];
        // 如果$key为null则返回配置文件的所有设置
        if (is_null($key)) {
            return $config;
        }
        // 返回配置项或false
        return isset($config[$key]) ? $config[$key] : false;
    }
}