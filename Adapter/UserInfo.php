<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 10:51
 */

namespace hubqin\DesignPatterns\Adapter;

class UserInfo implements IUserInfo
{
    public function getUserName()
    {
        echo "姓名是..." . PHP_EOL;
    }

    public function getHomeAddress()
    {
        echo "家庭地址是..." . PHP_EOL;
    }

    public function getMobileNumber()
    {
        echo "手机号码是..." . PHP_EOL;
    }

    public function getOfficeTelNumber()
    {
        echo "办公电话是..." . PHP_EOL;
    }

    public function getJobPosition()
    {
        echo "职位是..." . PHP_EOL;
    }

    public function getHomeTelNumber()
    {
        echo "家庭电话是..." . PHP_EOL;
    }

}