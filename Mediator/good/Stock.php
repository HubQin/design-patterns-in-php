<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 5:37
 */

namespace hubqin\DesignPatterns\Mediator\good;


class Stock extends AbstractColleague
{
    private $computer_num = 100;

    public function __construct(AbstractMediator $mediator)
    {
        parent::__construct($mediator);
    }

    //增加库存
    public function increase($num)
    {
        $this->computer_num += $num;
        echo "库存数为：" . $this->computer_num . PHP_EOL;
    }

    //降低库存
    public function decrease($num)
    {
        $this->computer_num -= $num;
        echo "库存数为：" . $this->computer_num . PHP_EOL;
    }

    //获得库存数量
    public function getStockNum()
    {
        return $this->computer_num;
    }

    //存货压力大了，就要通知采购人员不要采购，销售人员要尽快销售
    public function clearStock()
    {
        echo "清理存货数量为：" . $this->computer_num . PHP_EOL;
        $this->mediator->execute('stock.clear');
    }

}