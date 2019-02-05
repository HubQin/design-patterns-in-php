<?php
namespace hubqin\DesignPatterns\principles\LoD\Good;

/**
 * Class Teacher
 * @package hubqin\DesignPatterns\principles\LoD\Bad
 */
class Teacher
{
    /**
     * @param GroupLeader $groupLeader
     * @return int
     */
    public function command(GroupLeader $groupLeader)
    {
        return $groupLeader->countGirls();
    }
}
