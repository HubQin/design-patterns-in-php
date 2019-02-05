<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Finery
 * @package hubqin\DesignPatterns\Decorator
 */
class WearSuit extends Finery
{
    public function show()
    {
        echo "Wear Suit!" . PHP_EOL;
        parent::show();
    }

}