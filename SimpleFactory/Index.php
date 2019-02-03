<?php
namespace hubqin\DesignPatterns\SimpleFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\SimpleFactory
 */
class Index
{
    public function index()
    {
        echo 'please input a number: ';
        $numA = trim(fgets(STDIN));

        echo 'please input the other number: ';
        $numB = trim(fgets(STDIN));

        echo 'please input a operator[+,-,*,/]: ';
        $operator = trim(fgets(STDIN));

        $op = OperationFactory::createOperation($operator);
        $op->numA = $numA;
        $op->numB = $numB;
        $result = $op->getResult();

        echo $numA . ' ' . $operator . ' ' . $numB . ' = ' . $result;
    }
}

$index = new Index();
$index->index();
