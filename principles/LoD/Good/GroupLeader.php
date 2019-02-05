<?php
namespace hubqin\DesignPatterns\principles\LoD\Good;

/**
 * Class GroupLeader
 * @package hubqin\DesignPatterns\principles\LoD\Bad
 */
class GroupLeader
{
    private $list = [];

    public function __construct($list)
    {
        $this->list = $list;
    }


    public function countGirls()
    {
        return count($this->list);
    }
}
