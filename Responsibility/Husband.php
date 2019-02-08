<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 9:57
 */

namespace hubqin\DesignPatterns\Responsibility;


class Husband extends Handler
{
    public function __construct()
    {
        parent::__construct(Handler::HUSBAND_LEVEL_REQUEST);
    }

    public function response(IWomen $women)
    {
        echo "------妻子向丈夫请示------" . PHP_EOL;
        echo $women->getRequest() . PHP_EOL;
        echo "丈夫回答是：同意" . PHP_EOL;
    }
}