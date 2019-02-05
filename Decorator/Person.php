<?php
namespace hubqin\DesignPatterns\Decorator;

/**
 * Class Person
 * @package hubqin\DesignPatterns\Decorator
 */
class Person implements IPerson
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function show()
    {
        echo "装扮的" . $this->name . PHP_EOL;
    }
}