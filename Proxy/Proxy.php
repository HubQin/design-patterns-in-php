<?php
namespace hubqin\DesignPatterns\Proxy;

/**
 * Class Pursuit
 * @package hubqin\DesignPatterns\Proxy
 */
class Proxy
{
    private $gg = null;

    public function __construct(SchoolGirl $mm)
    {
        if ($this->gg == null) {
            $this->gg = new Pursuit($mm);
        }
    }

    public function giveDolls()
    {
        $this->gg->giveDolls();
    }

    public function giveFlowers()
    {
        $this->gg->giveFlowers();
    }

    public function giveChocolate()
    {
        $this->gg->giveChocolate();
    }

}