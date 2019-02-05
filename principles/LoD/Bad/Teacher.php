<?php
namespace hubqin\DesignPatterns\principles\LoD\Bad;

/**
 * Class Teacher
 * 一个类只和朋友类交流
 * 朋友类的定义：出现在成员变量、方法的输入输出参数中的类称为成员朋友类，而出现在方法体内部的类不属于朋友类
 * Teacher类不应该依赖Girl类
 * @package hubqin\DesignPatterns\principles\LoD\Bad
 */
class Teacher
{
    /**
     * @param GroupLeader $groupLeader
     * @return int
     */
    public function command(GroupLeader $groupLeader)
    {
        $listGirl = [];

        for ($i = 0; $i < 20; $i++) {
            $listGirl[] = new Girl();
        }

        return $groupLeader->countGirls($listGirl);
    }
}
