<?php
namespace hubqin\DesignPatterns\Strategy;

/**
 * Class CashRebate
 * @package hubqin\DesignPatterns\Strategy
 */
class CashReturn implements CashSuper
{

    private $moneyCondition;
    private $moneyReturn;

    /**
     * @param $moneyCondition
     * @param $moneyReturn
     */
    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    /**
     * @param $money
     * @return mixed
     */
    public function acceptCash($money)
    {
        return $money - intval($money / $this->moneyCondition) * $this->moneyReturn;
    }

}