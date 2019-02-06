<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/6 0006
 * Time: 下午 10:26
 */
abstract class CarBuilder
{
    public abstract function setSequence(Array $list);

    public abstract function getCarModel() : CarModel;
}