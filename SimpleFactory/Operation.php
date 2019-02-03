<?php
namespace hubqin\DesignPatterns\SimpleFactory;

/**
 * Class Operation
 * @package hubqin\DesignPatterns\SimpleFactory
 */

abstract class Operation
{
    /**
     * @var int
     */
    protected $numA = 0;

    /**
     * @var int
     */
    protected  $numB = 0;

    /**
     * @return mixed
     */
    abstract public function getResult();

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        return $this->$name = $value;
    }



}