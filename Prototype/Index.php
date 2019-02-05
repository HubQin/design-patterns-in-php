<?php
namespace hubqin\DesignPatterns\Prototype;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\Prototype
 */
class Index
{
    public function index()
    {
        $resume = new Resume('小菜', new WorkExperience());

        $resume->setPersonalInfo('男', '22');
        $resume->setWordExperience('2019-01-02', 'Google');

        $resume2 = $resume->copy();
        $resume2->setWordExperience('2018-05-06', 'Microsoft');

        $resume->display();
        $resume2->display();
    }
}

$index = new Index();
$index->index();