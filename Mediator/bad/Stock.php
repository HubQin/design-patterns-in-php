<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 4:41
 */

namespace hubqin\DesignPatterns\Mediator\bad;


class Stock
{
    //刚开始有100台电脑
    private static $computer_num = 100;

    //库存增加
    public function increase($num)
    {
        static::$computer_num += $num;
        echo "库存数为：" . static::$computer_num .PHP_EOL;
    }

    //减低库存
    public function decrease($num)
    {
        static::$computer_num -= $num;
        echo "库存数为：" . static::$computer_num .PHP_EOL;
    }

    //获取库存数
    public function getStockNum()
    {
        return static::$computer_num;
    }

    //存货压力大，就要通知采购人员不要采购，销售人员尽快销售
    public function clearStock()
    {
        $purchase = new Purchase();
        $sale = new Sale();
        echo "清理存货数量为" . static::$computer_num . PHP_EOL;

        //要求折价销售
        $sale->offSale();
        //要求采购人员不要采购
        $purchase->refuseBuyIBM();
    }
}