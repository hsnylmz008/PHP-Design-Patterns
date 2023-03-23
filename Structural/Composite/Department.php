<?php

namespace Structural\Composite;

use SplObjectStorage;

class Department implements BudgetedComposite {

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $dependencies;

    private $name;

    /**
     * @param $name
     */
    public function __construct ($name) {
        $this->dependencies = new SplObjectStorage();
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function calculateBudget (): int {
        $total = 0;

        foreach ($this->getDependent() as $dependent) {
            $total += $dependent->calculateBudget();
        }

        return $total;
    }

    /**
     * @return SplObjectStorage
     */
    public function getDependent (): SplObjectStorage {
        return $this->dependencies;
    }

    /**
     * @param Budgeted $item
     * @return void
     */
    public function addDependent (Budgeted $item): void {
        $this->dependencies->attach($item);
    }
}