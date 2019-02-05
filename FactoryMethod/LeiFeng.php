<?php
namespace hubqin\DesignPatterns\FactoryMethod;

/**
 * Class LeiFeng
 * @package hubqin\DesignPatterns\FactoryMethod
 */
class LeiFeng
{
    public function Sweep()
    {
        echo "扫地" . PHP_EOL;
    }

    public function Wash()
    {
        echo "洗衣" . PHP_EOL;
    }

    public function BuyRice()
    {
        echo "买米" .PHP_EOL;
    }
}
