<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 上午 9:37
 */

namespace hubqin\DesignPatterns\AbstractFactory;


class AccessUser implements IUser
{
    public function insert(User $user)
    {
        echo "在ACCESS中给User增加一条记录..." . PHP_EOL;
    }

    public function getUser($id)
    {
        echo "在ACCESS中根据ID得到User表一条记录..." . PHP_EOL;
        return $id;
    }

}