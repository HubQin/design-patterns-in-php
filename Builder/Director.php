<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/6 0006
 * Time: 下午 11:02
 */
class Director
{
    private $list = [];
    private $benzBuilder = null;
    private $bmwBuilder = null;

    public function __construct()
    {
        $this->benzBuilder = new BenzBuilder();
        $this->bmwBuilder = new BMWBuilder();
    }

    /**
     * A类型的奔驰车模型，先start，然后stop，其他什么引擎、喇叭一概没有
     */
    public function getABenzModel()
    {
        $this->list = [];
        $this->list[] = 'start';
        $this->list[] = 'stop';

        //按照顺序返回一辆奔驰车
        $this->benzBuilder->setSequence($this->list);
        return $this->benzBuilder->getCarModel();
    }

    /**
     * B型号的奔驰车模型，是先发动引擎，然后启动，然后停止，没有喇叭
     */
    public function getBBenzModel()
    {
        $this->list = [];
        $this->list[] = 'engine boom';
        $this->list[] = 'start';
        $this->list[] = 'stop';

        //按照顺序返回一辆奔驰车
        $this->benzBuilder->setSequence($this->list);
        return $this->benzBuilder->getCarModel();
    }

    /**
     * C型号的宝马车是先按下喇叭（炫耀嘛），然后启动，然后停止
     */
    public function getCBMWModel()
    {
        $this->list = [];
        $this->list[] = 'alarm';
        $this->list[] = 'start';
        $this->list[] = 'stop';

        $this->bmwBuilder->setSequence($this->list);
        return $this->bmwBuilder->getCarModel();
    }

    /**
     * D类型的宝马车只有一个功能，就是跑，启动起来就跑，永远不停止
     */
    public function getDBMWModel()
    {
        $this->list = [];
        $this->list[] = 'start';

        $this->bmwBuilder->setSequence($this->list);
        return $this->bmwBuilder->getCarModel();
    }

}