<?php

namespace Behavioral\Specification;

use DateTime;

class StudentSpecification implements Specification {

    /**
     * @param Candidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(Candidate $candidate) : bool
    {
        foreach ($candidate->getEducation() as $education) {
            if ($education->getEndDate() > new DateTime()) {
                return true;
            }
        }

        return false;
    }
}