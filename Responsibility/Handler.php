<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 10:13
 */

namespace hubqin\DesignPatterns\Responsibility;


abstract class Handler
{
    const FATHER_LEVEL_REQUEST = 1;
    const HUSBAND_LEVEL_REQUEST = 2;
    const SON_LEVEL_REQUEST = 3;

    //能处理的级别
    private $level = 0;

    //职责传递
    private $nextHandler;

    //每个类都要说明自己能处理哪些请求
    public function __construct($level)
    {
        $this->level = $level;
    }

    //一个女性（女儿、妻子或者是母亲）要求逛街，你要处理这个请求
    public final function handleMessage(IWomen $women)
    {
        if ($women->getType() == $this->level) {
            $this->response($women);
        } else {
            if ($this->nextHandler != null) {  //有后续环节 才把请求往后递送
                $this->nextHandler->handleMessage($women);
            } else { //已经没有后续处理人 不用处理了
                echo "---没地方请示了，按不同意处理---" . PHP_EOL;
            }
        }
    }

    /**
    * 如果不属于你处理的请求，你应该让她找下一个环节的人，如女儿出嫁了，
    * 还向父亲请示是否可以逛街，那父亲就应该告诉女儿，应该找丈夫请示
    */
    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    //有请求当然要回应
    public abstract function response(IWomen $women);
}