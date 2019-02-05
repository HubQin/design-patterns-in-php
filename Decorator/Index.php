<?php
namespace hubqin\DesignPatterns\Decorator;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Decorator
 */
class Index
{
    public function index()
    {
        $xc = new Person('小菜');

        $ts = new Tshirts();
        $wt = new WearTie();
        $ws = new WearSuit();

        //设置$component为Person对象，这样$ts->show()里面的调用parent::show
        //即调用Finery的show时，由于Finery的当前$component是属于Person对象（$xc）
        //所以parent::show最终调用的是Person的show，下同
        $ts->setComponent($xc);
        $wt->setComponent($ts);
        $ws->setComponent($wt);

        //会递归往上调用
        $ws->show();
    }
}

$index = new Index();
$index->index();