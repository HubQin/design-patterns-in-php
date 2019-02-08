<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 2:53
 */

namespace hubqin\DesignPatterns\Observer;


class HanFeiZi implements IHanFeiZi, Observable
{
    private $list = [];

    //韩非子要吃饭了
    public function haveBreakfast()
    {
        echo "韩非子:开始吃饭了..." . PHP_EOL;
        $this->notifyObservers("韩非子在吃饭");
    }

    //韩非子开始娱乐了
    public function haveFun()
    {
        echo "韩非子:开始娱乐了..." . PHP_EOL;
        $this->notifyObservers("韩非子在娱乐");
    }

    public function addObserver(Observer $observer)
    {
        $this->list[] = $observer;
    }

    public function deleteObserver(Observer $observer)
    {
        if (($key = array_search($observer, $this->list, true)) !== false) {
            unset($this->list[$key]);
        }
    }

    public function notifyObservers($context)
    {
        foreach ($this->list as $key => $value) {
            $value->update($context);
        }
    }


}