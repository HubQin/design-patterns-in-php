<?php
namespace hubqin\DesignPatterns\Template;

/**
 * Class HummerH2Model
 * @package hubqin\DesignPatterns\Template
 */
class HummerH2Model extends HummerModel
{

    protected function start()
    {
        echo "悍马H2发动..." . PHP_EOL;
    }

    protected function stop()
    {
        echo "悍马H2停止..." . PHP_EOL;
    }

    protected function alarm()
    {
        echo "悍马H2鸣笛..." . PHP_EOL;
    }

    protected function engineBoom()
    {
        echo "悍马H2引擎声音是这样的..." . PHP_EOL;
    }

    protected function isAlarm()
    {
        return false;
    }
}