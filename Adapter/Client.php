<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/8 0008
 * Time: 下午 11:15
 */

namespace hubqin\DesignPatterns\Adapter;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    public function index()
    {
//        $youngGirl = new UserInfo();
        $youngGirl = new OuterUserInfo();
        for ($i = 0; $i < 100; $i++) {
            $youngGirl->getMobileNumber();
        }
    }
}

$index = new Client();
$index->index();