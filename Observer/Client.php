<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 3:03
 */

namespace hubqin\DesignPatterns\Observer;

require __DIR__ . '/../vendor/autoload.php';


class Client
{
    public function index()
    {
        //三个观察者产生出来
        $liSi = new LiSi();
        $wangSi = new WangSi();
        $liuSi = new LiuSi();

        //定义出韩非子
        $hanFeiZi = new HanFeiZi();

        $hanFeiZi->addObserver($liSi);
        $hanFeiZi->addObserver($wangSi);
        $hanFeiZi->addObserver($liuSi);
        //$hanFeiZi->deleteObserver($liuSi);

        $hanFeiZi->haveBreakfast();
        $hanFeiZi->haveFun();
    }
}

$index = new Client();
$index->index();