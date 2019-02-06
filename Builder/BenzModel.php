<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Class BenzModel
 * @package hubqin\DesignPatterns\Builder
 */
class BenzModel extends CarModel
{
    protected function start()
    {
        echo "奔驰车跑起来是这个样子的..." . PHP_EOL;
    }

    protected function stop()
    {
        echo "奔驰车应该这样停车..." . PHP_EOL;
    }

    protected function alarm()
    {
        echo "奔驰车的喇叭声音是这个样子的..." . PHP_EOL;
    }

    protected function engineBoom()
    {
        echo "奔驰车引擎是这个声音..." . PHP_EOL;
    }

}