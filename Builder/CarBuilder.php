<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Class CarBuilder
 * @package hubqin\DesignPatterns\Builder
 */
abstract class CarBuilder
{
    public abstract function setSequence(Array $list);

    public abstract function getCarModel() : CarModel;
}