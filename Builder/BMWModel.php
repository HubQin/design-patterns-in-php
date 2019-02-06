<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Class BMWModel
 * @package hubqin\DesignPatterns\Builder
 */
class BMWModel extends CarModel
{
    protected function start()
    {
        echo "宝马车跑起来是这个样子的..." . PHP_EOL;
    }

    protected function stop()
    {
        echo "宝马车应该这样停车..." . PHP_EOL;
    }

    protected function alarm()
    {
        echo "宝马车的喇叭声音是这个样子的..." . PHP_EOL;
    }

    protected function engineBoom()
    {
        echo "宝马车引擎是这个声音..." . PHP_EOL;
    }

}