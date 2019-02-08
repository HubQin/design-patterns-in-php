<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 5:30
 */

namespace hubqin\DesignPatterns\Mediator\good;

//抽象同事类
abstract class AbstractColleague
{
    protected $mediator = null;

    public function __construct(AbstractMediator $mediator)
    {
        $this->mediator = $mediator;
    }
}