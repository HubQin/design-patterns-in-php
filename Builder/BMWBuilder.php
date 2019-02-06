<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Class BMWBuilder
 * @package hubqin\DesignPatterns\Builder
 */
class BMWBuilder extends CarBuilder
{
    private $bmwModel = null;

    public function __construct()
    {
        $this->bmwModel = new BMWModel();
    }

    public function setSequence(Array $list)
    {
        $this->bmwModel->setSequence($list);
    }

    public function getCarModel(): CarModel
    {
        return $this->bmwModel;
    }

}