<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 10:01
 */

namespace hubqin\DesignPatterns\Responsibility;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    public function index()
    {
        //随机挑选几个女性
        $list = [];
        for ($i = 0; $i < 5; $i++) {
            $list[] = new Women(random_int(1, 3), "我要出去逛街");
        }

        //定义三个请示对象
        $father = new Father();
        $husband = new Husband();
        $son = new Son();

        //设置请示顺序
        $father->setNext($husband);
        $husband->setNext($son);

        foreach ($list as $key => $value) {
            $father->handleMessage($value);
        }
    }
}

$index = new Client();
$index->index();