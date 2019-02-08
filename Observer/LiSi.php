<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 2:57
 */

namespace hubqin\DesignPatterns\Observer;


class LiSi implements Observer
{
    public function update($str)
    {
        echo "李斯:观察到韩非子活动，开始向老板汇报了..." . PHP_EOL;
        $this->reportToQinShiHuang($str);
        echo "李斯：汇报完毕..." . PHP_EOL;
    }

    public function reportToQinShiHuang($reportContext)
    {
        echo "李斯：报告，秦老板！韩非子有活动了--->" . $reportContext . PHP_EOL;
    }

}