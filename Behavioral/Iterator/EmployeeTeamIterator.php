<?php

namespace Behavioral\Iterator;

use Iterator, Countable;
class EmployeeTeamIterator implements Iterator, Countable {

    /**
     * @var int
     */
    private int $position = 0;

    /**
     * @var array
     */
    private array $teamMembers = [];

    /**
     * @param CompanyEmployeeTeam $employee
     */
    public function __construct (CompanyEmployeeTeam $employee) {
        $this->addTeam($employee);
        $this->position = 0;
    }

    /**
     * @param CompanyEmployeeTeam $employee
     * @return void
     */
    protected function addTeam (CompanyEmployeeTeam $employee): void {
        foreach ($employee->getSubordinates() as $member) {
            array_push($this->teamMembers, $member);
            $this->addTeam($member);
        }
    }

    /**
     * @return CompanyEmployeeTeam
     */
    public function current (): CompanyEmployeeTeam {
        return $this->teamMembers[$this->position];
    }

    /**
     * @return void
     */
    public function next (): void {
        ++$this->position;
    }

    /**
     * @return int
     */
    public function key (): int {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid (): bool {
        return isset($this->teamMembers[$this->position]);
    }

    /**
     * @return void
     */
    public function rewind (): void {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count (): int {
        return count($this->teamMembers);
    }
}