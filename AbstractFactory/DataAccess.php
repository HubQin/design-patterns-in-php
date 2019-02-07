<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 2:37
 */

namespace hubqin\DesignPatterns\AbstractFactory;

/**
 * Class DataAccess
 * 简单工厂模式并使用反射类获取实例
 * @package hubqin\DesignPatterns\AbstractFactory
 */
class DataAccess
{
    private static $db = 'Access';

    public static function createUser()
    {
        $className = __NAMESPACE__ . '\\' . static::$db . 'User';
        $reflectionObj = new \ReflectionClass($className);
        $result = $reflectionObj->newInstance();

        return $result;
    }

    public static function createDepartment()
    {
        $className = __NAMESPACE__ . '\\' . static::$db . 'Department';
        $reflectionObj = new \ReflectionClass($className);
        $result = $reflectionObj->newInstance();

        return $result;
    }
}