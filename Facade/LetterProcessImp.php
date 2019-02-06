<?php
namespace hubqin\DesignPatterns\Facade;

/**
 * Class LetterProcessImp
 * @package hubqin\DesignPatterns\Facade
 */
class LetterProcessImp implements ILetterProcess
{
    public function writeContext($string)
    {
        echo $string . PHP_EOL;
    }

    public function fillEnvelope($address)
    {
        echo $address . PHP_EOL;
    }

    public function letterIntoEnvelope()
    {
        echo "把信放进信封..." . PHP_EOL;
    }

    public function sendLetter()
    {
        echo "邮递信件..." . PHP_EOL;
    }

}