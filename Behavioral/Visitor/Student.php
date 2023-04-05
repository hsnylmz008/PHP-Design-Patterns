<?php

namespace Behavioral\Visitor;

use DateTime;

class Student implements Visitable
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $sickLeaves = [];

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param DateTime $start
     * @param DateTime $end
     * @return void
     */
    public function addSickLeave(DateTime $start, DateTime $end) : void
    {
        $this->sickLeaves[] = new SickLeave($start, $end);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getSickLeaves(): array
    {
        return $this->sickLeaves;
    }

    /**
     * @param Visitor $visitor
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitStudent($this);
    }
}