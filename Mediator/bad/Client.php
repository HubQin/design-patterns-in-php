<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 4:57
 */

namespace hubqin\DesignPatterns\Mediator\bad;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public function index()
    {
        echo "------采购人员采购电脑------" . PHP_EOL;
        $purchase = new Purchase();
        $purchase->buyIBMComputer(100);

        echo "------销售人员销售电脑------" . PHP_EOL;
        $sale = new Sale();
        $sale->saleIBMComputer(1);

        echo "------库房管理人员清理库存------" . PHP_EOL;
        $stock = new Stock();
        $stock->clearStock();
    }

}

$index = new Client();
$index->index();