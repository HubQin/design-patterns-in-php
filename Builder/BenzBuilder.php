<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Class BenzBuilder
 * @package hubqin\DesignPatterns\Builder
 */
class BenzBuilder extends CarBuilder
{
    private $benzModel = null;

    public function __construct()
    {
        $this->benzModel = new BenzModel();
    }

    public function setSequence(Array $list)
    {
        $this->benzModel->setSequence($list);
    }

    public function getCarModel(): CarModel
    {
        return $this->benzModel;
    }

}