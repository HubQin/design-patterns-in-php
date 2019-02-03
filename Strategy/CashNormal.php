<?php
namespace hubqin\DesignPatterns\Strategy;

/**
 * Class CashNormal
 * @package hubqin\DesignPatterns\Strategy
 */
class CashNormal implements CashSuper
{
    public function acceptCash($money)
    {
        return $money;
    }

}