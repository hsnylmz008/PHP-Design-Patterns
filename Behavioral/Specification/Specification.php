<?php

namespace Behavioral\Specification;

interface Specification
{
    /**
     * @param Candidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(Candidate $candidate) : bool;
}