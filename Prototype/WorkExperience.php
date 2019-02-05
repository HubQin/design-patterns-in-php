<?php
namespace hubqin\DesignPatterns\Prototype;

/**
 * Class WorkExperience
 * @package hubqin\DesignPatterns\Prototype
 */
class WorkExperience
{
    private $workDate;
    private $company;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
}