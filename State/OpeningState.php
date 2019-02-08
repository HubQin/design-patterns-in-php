<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 3:49
 */

namespace hubqin\DesignPatterns\State;


class OpeningState extends LiftState
{
    public function open()
    {
        echo "电梯门开启..." . PHP_EOL;
    }

    public function close()
    {
        //状态修改关门状态
        $this->context->setLiftState(Context::CLOSING_STATE);
        //动作委托为CloseState来执行
        $this->context->getLiftState()->close();
    }

    public function run()
    {
        // TODO: Implement run() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

}