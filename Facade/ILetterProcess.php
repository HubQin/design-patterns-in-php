<?php
namespace hubqin\DesignPatterns\Facade;

/**
 * Interface ILetterProcess
 * 使用《设计模式之禅》中的例子
 * @package hubqinj\DesignPatterns\Facade
 */
interface ILetterProcess
{
    //写信的内容
    public function writeContext($string);
    //写信封
    public function fillEnvelope($address);
    //把信放到信封里
    public function letterIntoEnvelope();
    //邮递
    public function sendLetter();
}