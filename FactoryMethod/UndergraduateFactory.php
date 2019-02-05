<?php
namespace hubqin\DesignPatterns\FactoryMethod;

/**
 * Class UndergraduateFactory
 * @package hubqin\DesignPatterns\FactoryMethod
 */
class UndergraduateFactory implements IFactory
{
    public function createLeiFeng()
    {
        return new Undergraduate();
    }

}
