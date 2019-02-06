<?php
namespace hubqin\DesignPatterns\Template;

/**
 * Class HummerModel
 * 使用《设计模式之禅中》的例子
 * @package hubqin\DesignPatterns\Template
 */
abstract class HummerModel
{
    protected abstract function start();

    protected abstract function stop();

    protected abstract function alarm();

    protected abstract function engineBoom();

    final public function run()
    {
        $this->start();
        $this->engineBoom();

        if ($this->isAlarm()) {
            $this->alarm();
        }

        $this->stop();
    }

    //钩子方法，默认喇叭是会响的
    protected function isAlarm()
    {
        return true;
    }
}