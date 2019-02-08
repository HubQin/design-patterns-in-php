<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 9:53
 */

namespace hubqin\DesignPatterns\Responsibility;


class Women implements IWomen
{
    /**
    * 通过一个int类型的参数来描述妇女的个人状况
    * 1--未出嫁
    * 2--出嫁
    * 3--夫死
    */
    private $type = 0;

    //妇女的请示
    private $request = "";

    public function __construct($type, $request)
    {
        $this->type = $type;

        switch ($this->type) {
            case 1:
                $this->request = "女儿的请求是：" . $request;
                break;
            case 2:
                $this->request = "妻子的请求是：" . $request;
                break;
            case 3:
                $this->request = "母亲的请求是：" . $request;
                break;
        }
    }

    //获得自己的状况
    public function getType()
    {
        return $this->type;
    }

    //获得妇女的请求
    public function getRequest()
    {
        return $this->request;
    }


}