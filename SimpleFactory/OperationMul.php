<?php
namespace hubqin\DesignPatterns\SimpleFactory;

/**
 * Class OperationMul
 * @package hubqin\DesignPatterns\SimpleFactory
 */
class OperationMul extends Operation
{
    public function getResult()
    {
        return $this->numA * $this->numB;
    }

}