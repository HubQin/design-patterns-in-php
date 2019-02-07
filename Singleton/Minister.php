<?php
namespace hubqin\DesignPatterns\Singleton;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Minister
 * 《设计模式之禅》的例子
 * @package hubqin\DesignPatterns\Singleton
 */
class Minister
{
    public function index()
    {
        for ($i = 0; $i < 3; $i++) {
            $emperor = Emperor::getInstance();
            $emperor->say();
        }
    }
}

$index = new Minister();
$index->index();