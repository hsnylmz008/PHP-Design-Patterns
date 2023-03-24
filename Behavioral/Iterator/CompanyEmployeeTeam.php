<?php

namespace Behavioral\Iterator;

use SplObjectStorage, IteratorAggregate, Countable;
class CompanyEmployeeTeam implements IteratorAggregate, Countable {

    /**
     * @var Employee
     */
    public Employee $person;

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $subordinates;

    /**
     * @param Employee $person
     */
    public function __construct (Employee $person) {
        $this->subordinates = new SplObjectStorage();
        $this->person = $person;
    }

    /**
     * @param CompanyEmployeeTeam $subordinate
     * @return void
     */
    public function addSubordinate (CompanyEmployeeTeam $subordinate): void {
        $this->subordinates->attach($subordinate);
    }

    /**
     * @param CompanyEmployeeTeam $subordinate
     * @return void
     */
    public function removeSubordinate (CompanyEmployeeTeam $subordinate): void {
        $this->subordinates->detach($subordinate);
    }

    /**
     * @return SplObjectStorage
     */
    public function getSubordinates (): SplObjectStorage {
        return $this->subordinates;
    }

    /**
     * @return EmployeeTeamIterator
     */
    public function getIterator (): EmployeeTeamIterator {
        return new EmployeeTeamIterator($this);
    }

    /**
     * @return int
     */
    public function count (): int {
        return count(new EmployeeTeamIterator($this));
    }

    /**
     * @return string
     */
    public function getName (): string {
        return $this->person->name;
    }

    /**
     * @return string
     */
    public function getPosition (): string {
        return $this->person->position;
    }
}