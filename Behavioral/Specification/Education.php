<?php

namespace Behavioral\Specification;

use DateTime;

class Education {

    /**
     * @var string
     */
    private string $university;

    /**
     * @var DateTime
     */
    private DateTime $start;

    /**
     * @var DateTime
     */
    private DateTime $end;

    /**
     * @param string $university
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(string $university, DateTime $start, DateTime $end)
    {
        $this->university = $university;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return DateTime
     */
    public function getEndDate() : DateTime {
        return $this->end;
    }

}