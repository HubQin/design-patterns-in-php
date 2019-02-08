<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 3:46
 */

namespace hubqin\DesignPatterns\State;


abstract class LiftState
{
    //定义一个环境角色，也就是封装状态的变化引起的功能变化
    protected $context = null;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    //首先电梯门开启动作
    public abstract function open();
    //电梯门有开启，那当然也就有关闭了
    public abstract function close();
    //电梯要能上能下，运行起来
    public abstract function run();
    //电梯还要能停下来
    public abstract function stop();
}