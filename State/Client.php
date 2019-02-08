<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 4:40
 */

namespace hubqin\DesignPatterns\State;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    public function index()
    {
        $context = new Context();
        $context->setLiftState(Context::CLOSING_STATE);
        $context->open();
        $context->close();
        $context->run();
        $context->stop();
    }
}

$index = new Client();
$index->index();