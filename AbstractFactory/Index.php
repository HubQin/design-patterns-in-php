<?php
namespace hubqin\DesignPatterns\AbstractFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class Index
 * @package hubqin\DesignPatterns\AbstractFactory
 */
class Index
{
    public function index()
    {
        $user = new User();
        $iu = DataAccess::createUser();
        $iu->insert($user);
        $iu->getUser(1);

        $department = new Department();
        $id = DataAccess::createDepartment();
        $id->insert($department);
        $id->getDepartment(1);

    }
}

$index = new Index();
$index->index();