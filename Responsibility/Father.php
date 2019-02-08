<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 9:57
 */

namespace hubqin\DesignPatterns\Responsibility;


class Father extends Handler
{
    public function __construct()
    {
        parent::__construct(Handler::FATHER_LEVEL_REQUEST);
    }

    public function response(IWomen $women)
    {
        echo "------女儿向父亲请示------" . PHP_EOL;
        echo $women->getRequest() . PHP_EOL;
        echo "父亲回答是：同意" . PHP_EOL;
    }
}