<?php

namespace Behavioral\Specification;

class NotSpecification implements Specification
{
    /**
     * @var Specification
     */
    private Specification $specification;

    /**
     * @param Specification $specification
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * @param Candidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}