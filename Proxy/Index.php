<?php
namespace hubqin\DesignPatterns\Proxy;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Proxy
 */
class Index
{
    public function index()
    {
        $lily = new SchoolGirl();

        $proxy = new Proxy($lily);

        $proxy->giveDolls();
        $proxy->giveFlowers();
        $proxy->giveChocolate();
    }
}

$index = new Index();
$index->index();