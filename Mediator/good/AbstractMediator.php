<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 5:04
 */

namespace hubqin\DesignPatterns\Mediator\good;


use hubqin\DesignPatterns\Mediator\bad\Purchase;

abstract class AbstractMediator
{
    protected $stock = null;
    protected $sale = null;
    protected $purchase = null;

    public function __construct()
    {
        $this->stock = new Stock($this);
        $this->sale = new Sale($this);
        $this->purchase = new Purchase($this);
    }

    //中介者最重要的方法叫做事件方法，处理多个对象之间的关系
    public abstract function execute($str, ...$objs);
}