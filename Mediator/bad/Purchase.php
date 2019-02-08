<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 4:36
 */

namespace hubqin\DesignPatterns\Mediator\bad;


class Purchase
{
    //采购IBM电脑
    public function buyIBMComputer($num)
    {
        //访问库存
        $stock = new Stock();
        //访问销售
        $sale = new Sale();
        //电脑的销售情况
        $saleStatus = $sale->getSaleStatus();
        if ($saleStatus > 80) { //销售情况良好
            echo "采购IBM电脑" . $num . "台" . PHP_EOL;
        } else{ //销售情况不好
            echo "采购IBM电脑" . $num/2 . "台" . PHP_EOL;
        }
    }

    //不再采购IBM电脑
    public function refuseBuyIBM()
    {
        echo "不再采购IBM电脑" . PHP_EOL;
    }
}