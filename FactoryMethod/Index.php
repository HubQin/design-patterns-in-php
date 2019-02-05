<?php
namespace hubqin\DesignPatterns\FactoryMethod;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\FactoryMethod
 */
class Index
{
    public function index()
    {
        $factory = new UndergraduateFactory();
        $student = $factory->createLeiFeng();
        $student->BuyRice();
        $student->Sweep();
        $student->Wash();
    }
}

$index = new Index();
$index->index();