<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 2:57
 */

namespace hubqin\DesignPatterns\Observer;


class LiuSi implements Observer
{
    public function update($str)
    {
        echo "刘斯:观察到韩非子活动，自己也开始活动了..." . PHP_EOL;
        $this->happy($str);
        echo "刘斯：乐死了..." . PHP_EOL;
    }

    //一看韩非子有变化，他就快乐
    public function happy($reportContext)
    {
        echo "刘斯：因为" . $reportContext . "，--所以我快乐呀！" . PHP_EOL;
    }

}