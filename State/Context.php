<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 3:51
 */

namespace hubqin\DesignPatterns\State;

//上下文类
class Context
{
    //定义出所有的电梯状态
    const OPENING_STATE = 'OpeningState';
    const CLOSING_STATE = 'ClosingState';
    const RUNNING_STATE = 'RunningState';
    const STOPPING_STATE = 'StoppingState';

    //定义一个当前电梯状态
    private $liftState;

    public function getLiftState()
    {
        return $this->liftState;
    }

    public function setLiftState($state)
    {
        $className = __NAMESPACE__ . '\\' . $state;
        $reflectObj = new \ReflectionClass($className);
        $instance = $reflectObj->newInstance();
        $this->liftState = $instance;
        //把当前环境通知到各个实现类中
        $this->liftState->setContext($this);
    }

    public function open()
    {
        $this->liftState->open();
    }

    public function close()
    {
        $this->liftState->close();
    }

    public function run()
    {
        $this->liftState->run();
    }

    public function stop()
    {
        $this->liftState->stop();
    }
}