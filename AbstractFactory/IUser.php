<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 上午 9:32
 */

namespace hubqin\DesignPatterns\AbstractFactory;


interface IUser
{
    public function insert(User $user);

    public function getUser($id);
}