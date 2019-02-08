<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 10:50
 */

namespace hubqin\DesignPatterns\Adapter;


interface IUserInfo
{
    //获得用户姓名
    public function getUserName();
    //获得家庭地址
    public function getHomeAddress();
    //手机号码，这个太重要，手机泛滥呀
    public function getMobileNumber();
    //办公电话，一般是座机
    public function getOfficeTelNumber();
    //这个人的职位是什么
    public function getJobPosition();
    //获得家庭电话，这有点不好，我不喜欢打家庭电话讨论工作
    public function getHomeTelNumber();
}