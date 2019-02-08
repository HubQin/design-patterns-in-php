<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 4:34
 */

namespace hubqin\DesignPatterns\State;


class RunningState extends LiftState
{
    public function open()
    {
        // TODO: Implement open() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }

    public function run()
    {
        echo "电梯上下运行..." . PHP_EOL;
    }

    public function stop()
    {
        $this->context->setLiftState(Context::STOPPING_STATE);
        $this->context->getLiftState()->stop();
    }

}