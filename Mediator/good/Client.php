<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 上午 9:13
 */

namespace hubqin\DesignPatterns\Mediator\good;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public function index()
    {
        $mediator = new Mediator();

        echo "------采购人员采购电脑------" . PHP_EOL;
        $purchase = new Purchase($mediator);
        $purchase->buyIBMComputer(100);

        echo "------销售人员销售电脑------" . PHP_EOL;
        $sale = new Sale($mediator);
        $sale->sellIBMComputer(1);

        echo "------库房管理人员清理库存------" . PHP_EOL;
        $stock = new Stock($mediator);
        $stock->clearStock();
    }
}

$index = new Client();
$index->index();