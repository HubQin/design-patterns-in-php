<?php
namespace hubqin\DesignPatterns\Template;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Template
 */
class Index
{
    public function index()
    {
        echo "H1型号悍马..." . PHP_EOL;

        echo "是否需要鸣笛：[0]否  [1]是 " . PHP_EOL;

        $alarmFlag = trim(fgets(STDIN));

        $H1 = new HummerH1Model();

        //设置是否鸣笛 将影响父类的run方法的行为
        if (!$alarmFlag) {
            $H1->setAlarm(false);
        }
        $H1->run();

        echo "H2型号悍马..." . PHP_EOL;
        $H2 = new HummerH2Model();
        $H2->run();
    }
}

$index = new Index();
$index->index();