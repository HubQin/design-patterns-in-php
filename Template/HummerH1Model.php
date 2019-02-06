<?php
namespace hubqin\DesignPatterns\Template;

/**
 * Class HummerH1Model
 * @package hubqin\DesignPatterns\Template
 */
class HummerH1Model extends HummerModel
{
    protected $alarmFlag = true; //要响喇叭

    protected function start()
    {
        echo "悍马H1发动..." . PHP_EOL;
    }

    protected function stop()
    {
        echo "悍马H1停止..." . PHP_EOL;
    }

    protected function alarm()
    {
        echo "悍马H1鸣笛..." . PHP_EOL;
    }

    protected function engineBoom()
    {
        echo "悍马H1引擎声音是这样的..." . PHP_EOL;
    }

    protected function isAlarm()
    {
        return $this->alarmFlag;
    }

    public function setAlarm($isAlarm)
    {
        $this->alarmFlag = $isAlarm;
    }

}