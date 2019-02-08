<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 2:52
 */

namespace hubqin\DesignPatterns\Observer;


interface IHanFeiZi
{
    //韩非子也是人，也要吃早饭的
    public function haveBreakfast();
    //韩非之也是人，是人就要娱乐活动
    public function haveFun();
}