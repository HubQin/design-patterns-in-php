<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Finery
 * @package hubqin\DesignPatterns\Decorator
 */
class BigTrouser extends Finery
{
    public function show()
    {
        echo "Big Trouser!" . PHP_EOL;
        parent::show();
    }

}