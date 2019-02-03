<?php
namespace hubqin\DesignPatterns\SimpleFactory;

/**
 * Class OperationDiv
 * @package hubqin\DesignPatterns\SimpleFactory
 */
class OperationDiv extends Operation
{
    /**
     * @return float|int
     * @throws \Exception
     */
    public function getResult()
    {
        if ($this->numB == 0) {
            throw new \Exception('除数不能为0');
        }
        return $this->numA / $this->numB;
    }

}