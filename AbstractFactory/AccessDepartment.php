<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7 0007
 * Time: 下午 2:34
 */

namespace hubqin\DesignPatterns\AbstractFactory;


class AccessDepartment implements IDepartment
{
    public function insert(Department $department)
    {
        echo "在ACCESS中给Department增加一条记录..." . PHP_EOL;
    }

    public function getDepartment($id)
    {
        echo "在ACCESS中根据ID得到Department表一条记录..." . PHP_EOL;
        return $id;
    }

}