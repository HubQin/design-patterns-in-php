<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 5:32
 */

namespace hubqin\DesignPatterns\Mediator\good;


class Purchase extends AbstractColleague
{
    public function __construct(AbstractMediator $mediator)
    {
        parent::__construct($mediator);
    }

    //采购IBM电脑
    public function buyIBMComputer($num)
    {
        //与其他模块关联的操作都移到中介上去操作
        $this->mediator->execute("purchase.buy", $num);
    }

    //不再采购IBM电脑
    public function refuseBuyIBM()
    {
        echo "不再采购IBM电脑" . PHP_EOL;
    }
}