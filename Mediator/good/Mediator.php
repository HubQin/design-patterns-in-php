<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 5:09
 */

namespace hubqin\DesignPatterns\Mediator\good;


class Mediator extends AbstractMediator
{
    public function execute($str, ...$objs)
    {
        if ($str == 'purchase.buy') {  //采购电脑
            $this->buyComputer($objs[0]);
        } elseif ($str == 'sale.sell') { //销售电脑
            $this->sellComputer($objs[0]);
        } elseif ($str == 'sale.offsell') { //折价销售
            $this->offsell();
        } elseif ($str == 'stock.clear') { //清仓处理
            $this->clearStock();
        }
    }

    //采购电脑
    private function buyComputer($num)
    {
        $saleStatus = $this->sale->getSaleStatus();
        if ($saleStatus > 80) { //销售情况良好
            echo "采购IBM" . $num . "台" . PHP_EOL;
        } else { //销售情况不好
            echo "采购IBM" . $num/2 . "台" . PHP_EOL; //折半采购
        }
    }

    //销售电脑
    private function sellComputer($num)
    {
        if ($this->stock->getStockNum() < $num) { //库存数量不够销售
            $this->purchase->buyIBMComputer($num);
        }

        $this->stock->decrease($num);
    }

    //折价销售电脑
    private function offSell()
    {
        echo "折价销售IBM电脑" . $this->stock->getStockNum() . "台" . PHP_EOL;
    }

    //清仓处理
    private function clearStock()
    {
        //要求清仓销售
        $this->sale->offSale();
        //要求采购人员不要采购
        $this->purchase->refuseBuyIBM();
    }
}