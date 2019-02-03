<?php
namespace hubqin\DesignPatterns\SimpleFactory;

/**
 * Class OperationSub
 * @package hubqin\DesignPatterns\SimpleFactory
 */
class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->numA - $this->numB;
    }

}