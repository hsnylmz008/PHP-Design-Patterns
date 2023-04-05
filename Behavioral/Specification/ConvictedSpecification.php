<?php

namespace Behavioral\Specification;
class ConvictedSpecification implements Specification
{
    /**
     * @param Candidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return $candidate->isConvicted();
    }
}