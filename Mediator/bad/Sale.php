<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 4:35
 */

namespace hubqin\DesignPatterns\Mediator\bad;


class Sale
{
    //销售IBM电脑
    public function saleIBMComputer($num)
    {
        //访问库存
        $stock = new Stock();
        //访问采购
        $purchase = new Purchase();

        if ($stock->getStockNum() < $num) {  //库存不足
            $purchase->buyIBMComputer($num);
        }
        echo "销售电脑" . $num . "台" . PHP_EOL;

        $stock->decrease($num);
    }

    //反馈销售情况 0-100之间变化
    public function getSaleStatus()
    {
        $status = random_int(1, 100);
        echo "IBM电脑销售情况为：" . $status . PHP_EOL;
        return $status;
    }

    //折价处理
    public function offSale()
    {
        //库存有多少卖多少
        $stock = new Stock();
        echo "折价销售电脑" . $stock->getStockNum() . "台" . PHP_EOL;
    }
}