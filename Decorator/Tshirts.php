<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Finery
 * @package hubqin\DesignPatterns\Decorator
 */
class Tshirts extends Finery
{
    public function show()
    {
        echo "T-Shirt!" . PHP_EOL;
        parent::show();
    }

}