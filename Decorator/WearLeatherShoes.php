<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Finery
 * @package hubqin\DesignPatterns\Decorator
 */
class WearLeatherShoes extends Finery
{
    public function show()
    {
        echo "Wear Leather Shoes!" . PHP_EOL;
        parent::show();
    }

}