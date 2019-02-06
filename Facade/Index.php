<?php
namespace hubqin\DesignPatterns\Facade;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Facade
 */
class Index
{
    public function index()
    {
        $postOffice = new ModenPostOffice();
        $postOffice->sendLetter('填写信的内容...', '填写信封...');
    }
}

$index = new Index();
$index->index();