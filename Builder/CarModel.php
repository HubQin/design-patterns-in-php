<?php
namespace hubqin\DesignPatterns\Builder;

/**
 * Class CarModel
 * @package hubqin\DesignPatterns\Builder
 */
abstract class CarModel
{
    private $list = [];

    protected abstract function start();
    protected abstract function stop();
    protected abstract function alarm();
    protected abstract function engineBoom();

    final public function run()
    {
        for ($i = 0; $i < count($this->list); $i++) {
            $actionName = $this->list[$i];

            if (stripos('start', $actionName) !== false) {
                $this->start();
            } elseif (stripos('stop', $actionName) !== false) {
                $this->stop();
            } elseif (stripos('alarm', $actionName) !== false) {
                $this->alarm();
            } elseif (stripos('engine boom', $actionName) !== false) {
                $this->engineBoom();
            }
        }
    }

    final public function setSequence(Array $list)
    {
        $this->list = $list;
    }
}