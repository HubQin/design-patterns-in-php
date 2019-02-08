<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 3:07
 */

namespace hubqin\DesignPatterns\Observer;

//被观察者接口
interface Observable
{
    //增加一个观察者
    public function addObserver(Observer $observer);

    //删除一个观察者
    public function deleteObserver(Observer $observer);

    //既然要观察，我发生改变了他也应该有所动作，通知观察者
    public function notifyObservers($context);
}