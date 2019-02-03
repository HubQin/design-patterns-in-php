<?php
namespace hubqin\DesignPatterns\SimpleFactory;

/**
 * Class OperationAdd
 * @package hubqin\DesignPatterns\SimpleFactory
 */
class OperationAdd extends Operation
{
    /**
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numA + $this->numB;
    }

}