<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 11:06
 */

namespace hubqin\DesignPatterns\Adapter;


class OuterUserInfo extends OuterUser implements IUserInfo
{
    private $baseInfo = [];
    private $homeInfo = [];
    private $officeInfo = [];

    public function __construct()
    {
        $this->baseInfo = $this->getUserBaseInfo();
        $this->homeInfo = $this->getUserHomeInfo();
        $this->officeInfo = $this->getUserOfficeInfo();
    }

    public function getUserName()
    {
        return $this->baseInfo['username'];
    }

    public function getHomeAddress()
    {
        return $this->homeInfo['homeAddress'];
    }

    public function getMobileNumber()
    {
        return $this->baseInfo['mobilePhone'];
    }

    public function getOfficeTelNumber()
    {
        return $this->officeInfo['officeTelNumber'];
    }

    public function getJobPosition()
    {
        return $this->officeInfo['jobPosition'];
    }

    public function getHomeTelNumber()
    {
        return $this->homeInfo['homeTelNumber'];
    }

}