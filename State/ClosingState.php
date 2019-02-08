<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 4:14
 */

namespace hubqin\DesignPatterns\State;


class ClosingState extends LiftState
{
    public function open()
    {
        //设为开门状态
        $this->context->setLiftState(Context::OPENING_STATE);
        //委托OpeningState来开门
        $this->context->getLiftState()->open();
    }

    public function close()
    {
        echo "电梯关门..." . PHP_EOL;
    }

    public function run()
    {
        //设为运行状态
        $this->context->setLiftState(Context::RUNNING_STATE);
        //委托runningState来运行
        $this->context->getLiftState()->run();
    }

    public function stop()
    {
        //设为停止状态
        $this->context->setLiftState(Context::STOPPING_STATE);
    }

}