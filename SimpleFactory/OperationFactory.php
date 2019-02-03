<?php
namespace hubqin\DesignPatterns\SimpleFactory;

/**
 * Class OperationFactory
 * @package hubqin\DesignPatterns\SimpleFactory
 */
class OperationFactory
{
    /**
     * @param $operation
     * @return OperationAdd|OperationDiv|OperationMul|OperationSub|null
     */
    public static function createOperation($operation)
    {
        $op = null;

        switch ($operation) {
            case '+':
                $op = new OperationAdd();
                break;
            case '-':
                $op = new OperationSub();
                break;
            case '*':
                $op = new OperationMul();
                break;
            case '/':
                $op = new OperationDiv();
                break;
        }
        return $op;
    }
}
