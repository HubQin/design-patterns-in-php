<?php
namespace hubqin\DesignPatterns\Singleton;

/**
 * Class Emperor
 * @package hubqin\DesignPatterns\Singleton
 */
class Emperor
{
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function say()
    {
        echo "我就是皇帝某某某..." . PHP_EOL;
    }
}