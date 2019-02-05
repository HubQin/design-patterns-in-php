<?php
namespace hubqin\DesignPatterns\FactoryMethod;

/**
 * Class VolunteerFactory
 * @package hubqin\DesignPatterns\FactoryMethod
 */
class VolunteerFactory implements IFactory
{
    public function createLeiFeng()
    {
        return new Volunteer();
    }

}
