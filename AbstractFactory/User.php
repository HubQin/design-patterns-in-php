<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 上午 9:34
 */

namespace hubqin\DesignPatterns\AbstractFactory;


class User
{
    private $id;
    private $name;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}