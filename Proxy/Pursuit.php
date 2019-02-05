<?php
namespace hubqin\DesignPatterns\Proxy;

/**
 * Class Pursuit
 * @package hubqin\DesignPatterns\Proxy
 */
class Pursuit implements GiveGift
{
    private $mm = null;

    public function __construct(SchoolGirl $mm)
    {
        $this->mm = $mm;
    }

    public function giveDolls()
    {
        echo "送你洋娃娃" . PHP_EOL;
    }

    public function giveFlowers()
    {
        echo "送你鲜花" . PHP_EOL;
    }

    public function giveChocolate()
    {
        echo "送你巧克力" . PHP_EOL;
    }

}