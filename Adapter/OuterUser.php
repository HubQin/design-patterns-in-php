<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 11:01
 */

namespace hubqin\DesignPatterns\Adapter;


class OuterUser implements IOuterUser
{
    public function getUserBaseInfo()
    {
        return ['username' => '混世魔王', 'mobilePhone' => '员工手机是...'];
    }

    public function getUserOfficeInfo()
    {
        return ['officeTelNumber' => '办公室电话...', 'jobPosition' => '职位是BOSS...'];
    }

    public function getUserHomeInfo()
    {
        return ['homeTelNumber' => '家庭电话...', 'homeAddress' => '住址是...'];
    }

}