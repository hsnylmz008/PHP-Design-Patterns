<?php

namespace Structural\Composite;

interface Budgeted {

    /**
     * @return int
     */
    public function calculateBudget (): int;
}