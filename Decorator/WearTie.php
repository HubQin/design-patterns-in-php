<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Finery
 * @package hubqin\DesignPatterns\Decorator
 */
class WearTie extends Finery
{
    public function show()
    {
        echo "Wear Tie!" . PHP_EOL;
        parent::show();
    }

}