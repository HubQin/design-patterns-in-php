<?php
namespace hubqin\DesignPatterns\principles\LoD\Bad;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Class Client
 * 迪米特法则（Law of Demeter，LoD）也称为最少知识原则（Least Knowledge Principle，LKP）
 * 一个对象应该对其他对象有最少的了解
 * @package hubqin\DesignPatterns\principles\LoD\Bad
 */
class Client
{
    public function index()
    {
        $teacher = new Teacher();
        $result = $teacher->command(new GroupLeader());
        echo $result;
    }
}

$client = new Client();
$client->index();
