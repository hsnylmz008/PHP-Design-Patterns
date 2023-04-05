<?php

namespace Behavioral\Specification;

use DateTime;

class WorkExperience {

    /**
     * @var string
     */
    private string $companyName;

    /**
     * @var DateTime
     */
    private DateTime $start;

    /**
     * @var DateTime
     */
    private DateTime $end;

    /**
     * @param string $companyName
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(string $companyName, DateTime $start, DateTime $end)
    {
        $this->companyName = $companyName;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return int
     */
    public function getWorkedMonths() : int {
        $workedInterval = $this->start->diff($this->end);
        var_dump("months", $workedInterval->m);
        return ($workedInterval->y * 12) + $workedInterval->m;
    }

}