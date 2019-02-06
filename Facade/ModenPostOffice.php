<?php
namespace hubqin\DesignPatterns\Facade;

/**
 * Class ModenPostOffice
 * 这个类作为一个Facade
 * @package hubqin\DesignPatterns\Facade
 */
class ModenPostOffice
{
    //在成员变量声明依赖另一个类的实例，是一种聚合关系（UML图空心菱形头表示）
    private $letterProcess = null;
    private $police = null;

    public function __construct()
    {
        $this->letterProcess = new LetterProcessImp();
        $this->police = new Police();
    }

    public function sendLetter($context, $address)
    {
        //写信
        $this->letterProcess->writeContext($context);
        //写信封
        $this->letterProcess->fillEnvelope($address);
        //警察检查信件
        $this->police->checkLetter();
        //放进信封
        $this->letterProcess->letterIntoEnvelope();
        //邮递
        $this->letterProcess->sendLetter();
    }
}