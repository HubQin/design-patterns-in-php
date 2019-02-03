<?php
namespace hubqin\DesignPatterns\Strategy;

/**
 * Class CashRebate
 * @package hubqin\DesignPatterns\Strategy
 */
class CashRebate implements CashSuper
{
    /**
     * @var
     */
    private $moneyRebate;

    /**
     * @param $moneyRebate
     */
    public function __construct($moneyRebate)
    {
        $this->moneyRebate = $moneyRebate;
    }

    /**
     * @param $money
     * @return mixed
     */
    public function acceptCash($money)
    {
        return $money * $this->moneyRebate;
    }

}