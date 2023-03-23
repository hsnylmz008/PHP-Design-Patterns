<?php

namespace Structural\Composite;

class Employee implements Budgeted {

    private $name;
    private $salary;

    /**
     * @param $name
     * @param $salary
     */
    public function __construct ($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @return int
     */
    public function calculateBudget (): int {
        return $this->salary;
    }
}