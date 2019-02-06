<?php
namespace hubqin\DesignPatterns\Builder;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Builder
 */
class Index
{
    public function index()
    {
        /**********************没有Director时的代码*********************/
        //只有一种顺序
        //要一辆奔驰
        /*$benzBuilder = new BenzBuilder();
        $list = ['engine boom', 'start', 'stop'];

        $benzBuilder->setSequence($list);
        $benModel = $benzBuilder->getCarModel();
        $benModel->run();*/

        //按照同样顺序要一辆宝马
        /*$bmwBuilder = new BMWBuilder();
        $bmwBuilder->setSequence($list);
        $bmwModel = $bmwBuilder->getCarModel();
        $bmwModel->run();*/

        /*********************有Director时的代码*************************/
        //已把各种顺序封装好，直接调用
        $director = new Director();

        //要10辆A类型的奔驰车
        for ($i = 0; $i < 10; $i++) {
            $director->getABenzModel()->run();
        }

        //要5辆B类型的奔驰车
        for ($i = 0; $i < 5; $i++) {
            $director->getBBenzModel()->run();
        }

        //要2辆C类型的宝马车
        for ($i = 0; $i < 2; $i++) {
            $director->getCBMWModel()->run();
        }

        //要3辆D类型的宝马车
        for ($i = 0; $i < 3; $i++) {
            $director->getDBMWModel()->run();
        }


    }
}

$index = new Index();
$index->index();