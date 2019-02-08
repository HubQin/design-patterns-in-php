<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 9:52
 */

namespace hubqin\DesignPatterns\Responsibility;


interface IWomen
{
    //获得个人状况
    public function getType();
    //获得个人请示，你要干什么？出去逛街？约会?还是看电影？
    public function getRequest();
}