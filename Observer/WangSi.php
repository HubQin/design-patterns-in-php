<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 2:57
 */

namespace hubqin\DesignPatterns\Observer;


class WangSi implements Observer
{
    public function update($str)
    {
        echo "王斯:观察到韩非子活动，自己也开始活动了..." . PHP_EOL;
        $this->cry($str);
        echo "王斯：哭死了..." . PHP_EOL;
    }

    //一看韩非子有活动，他就痛哭
    public function cry($reportContext)
    {
        echo "王斯：因为" . $reportContext . "，--所以我悲伤呀！" . PHP_EOL;
    }

}