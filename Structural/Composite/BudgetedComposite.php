<?php

namespace Structural\Composite;

use SplObjectStorage;

interface BudgetedComposite extends Budgeted {

    /**
     * @return int
     */
    public function calculateBudget (): int;

    /**
     * @return SplObjectStorage
     */
    public function getDependent (): SplObjectStorage;

    /**
     * @param Budgeted $item
     * @return void
     */
    public function addDependent (Budgeted $item): void;
}