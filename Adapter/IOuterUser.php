<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 10:54
 */

namespace hubqin\DesignPatterns\Adapter;


interface IOuterUser
{
    //基本信息，比如名称、性别、手机号码等
    public function getUserBaseInfo();
    //工作区域信息
    public function getUserOfficeInfo();
    //用户的家庭信息
    public function getUserHomeInfo();
}