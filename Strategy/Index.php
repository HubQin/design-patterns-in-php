<?php
namespace hubqin\DesignPatterns\Strategy;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Strategy
 */
class Index
{
    public function index()
    {
        $total = 0;

        while (true) {
            echo '请输入一种优惠类型:' . PHP_EOL . ' [1]正常收费 [2]打八折 [3]满300返100' . PHP_EOL;

            $type = intval(trim(fgets(STDIN)));
            $cc = new CashContext($type);

            echo '请输入商品单价： ';
            $prices = trim(fgets(STDIN));
            echo '请输入商品数量： ';
            $num = trim(fgets(STDIN));

            $totalPrices = $cc->getResult(intval($prices) * intval($num));
            $total = $total + $totalPrices;

            echo '商品数量：' . $num . '  商品单价￥：' . $prices . '  优惠类型：' . $type . '  实付￥：' . $totalPrices . PHP_EOL;
            echo '当前总额￥：' . $total . PHP_EOL ;
        }
    }
}

$index = new Index();
$index->index();