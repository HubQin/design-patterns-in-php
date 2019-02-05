<?php
namespace hubqin\DesignPatterns\Prototype;

/**
 * Class Resume
 * @package hubqin\DesignPatterns\Prototype
 */
class Resume implements Prototype
{
    /**
     * 浅复制/深复制
     * @return Resume
     */
    public function copy()
    {
        //return clone $this; //使用浅复制开启这一行，注释掉下面的深复制

        //使用深复制
        $seriallizeObj = serialize($this);
        $cloneObj = unserialize($seriallizeObj);
        return $cloneObj;
    }

    private $name;
    private $sex;
    private $age;

    private $workExperience;

    public function __construct($name, WorkExperience $workExperience)
    {
        $this->name = $name;
        $this->workExperience = $workExperience;
    }

    //设置个人信息
    public function setPersonalInfo($sex, $age)
    {
        $this->age = $age;
        $this->sex = $sex;
    }

    //设置工作经历
    public function setWordExperience($workDate, $company)
    {
        $this->workExperience->workDate = $workDate;
        $this->workExperience->company = $company;
    }

    //显示
    public function display()
    {
        echo $this->name . ' ' . $this->sex . ' ' . $this->age . PHP_EOL;
        echo $this->workExperience->workDate . ' ' . $this->workExperience->company . PHP_EOL;
    }
}