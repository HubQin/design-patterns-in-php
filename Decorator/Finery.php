<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Finery
 * @package hubqin\DesignPatterns\Decorator
 */
class Finery implements IPerson
{
    protected $component = null;

    public function setComponent(IPerson $component)
    {
        $this->component = $component;
    }

    public function show()
    {
        if ($this->component != null) {
            $this->component->show();
        }
    }
}