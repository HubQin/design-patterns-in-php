<?php
namespace hubqin\DesignPatterns\principles\LoD\Good;

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
        //将$listGirl的初始化从Teacher类移出放在客户端
        //Teacher类不再依赖Girl类
        //一个方法尽量不引入一个类中不存在的对象（比如Teacher类的command方法不引入Girl类的对象）
        $listGirl = [];
        for ($i = 0; $i < 20; $i++) {
            $listGirl[] = new Girl();
        }

        $teacher = new Teacher();
        $result = $teacher->command(new GroupLeader($listGirl));
        echo $result;
    }
}

$client = new Client();
$client->index();
