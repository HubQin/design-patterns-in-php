<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 上午 9:07
 */

namespace hubqin\DesignPatterns\Mediator\good;


class Sale extends AbstractColleague
{
    public function __construct(AbstractMediator $mediator)
    {
        parent::__construct($mediator);
    }

    //销售IBM电脑
    public function sellIBMComputer($num)
    {
        echo "销售IBM电脑" . $num . "台" . PHP_EOL;
        //与其他模块关联的操作都移到中介上去操作
        $this->mediator->execute('sale.sell', $num);
    }

    //反馈销售情况，0～100变化，0代表根本就没人买，100代表非常畅销，出一个卖一个
    public function getSaleStatus()
    {
        $status = random_int(1, 100);
        echo "IBM电脑的销售情况为：" . $status . PHP_EOL;
        return $status;
    }
    //折价处理
    public function offSale()
    {
        //与其他模块关联的操作都移到中介上去操作
        $this->mediator->execute('sale.offsell');
    }

}