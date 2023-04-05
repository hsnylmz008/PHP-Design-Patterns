<?php

namespace Behavioral\Visitor;
use DateTime;

class SickLeave
{
    /**
     * @var DateTime
     */
    private DateTime $start;

    /**
     * @var DateTime
     */
    private DateTime $end;

    /**
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }
}