<?php
namespace hubqin\DesignPatterns\Strategy;

/**
 * Class CashContext
 * @package hubqin\DesignPatterns\Strategy
 */
class CashContext
{
    /**
     * @var CashReturn|null 
     */
    private $cs = null;

    /**
     * CashContext constructor.
     * @param $type
     */
    public function __construct($type)
    {
        switch ($type) {
            case '1':
                $this->cs = new CashNormal(); //正常收费
                break;
            case '2':
                $this->cs = new CashRebate(0.8); //打8折
                break;
            case '3':
                $this->cs = new CashReturn(300, 100); //满300减100
                break;
        }
    }

    /**
     * @param $money
     * @return mixed
     */
    public function getResult($money)
    {
        return $this->cs->acceptCash($money);
    }
}