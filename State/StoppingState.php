<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 4:36
 */

namespace hubqin\DesignPatterns\State;


class StoppingState extends LiftState
{
    public function open()
    {
        $this->context->setLiftState(Context::OPENING_STATE);
        $this->context->getLiftState()->open();
    }

    public function close()
    {
        //do nothing
    }

    public function run()
    {
        $this->context->setLiftState(Context::RUNNING_STATE);
        $this->context->getLiftState()->run();
    }

    public function stop()
    {
        echo "电梯停止..." . PHP_EOL;
    }

}