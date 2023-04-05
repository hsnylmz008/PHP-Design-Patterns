<?php

namespace Behavioral\Specification;
class WorkExperienceSpecification implements Specification
{
    /**
     * @var int
     */
    private int $minYearsOfExperience;

    /**
     * @param int $minYearsOfExperience
     */
    public function __construct(int $minYearsOfExperience)
    {
        $this->minYearsOfExperience = $minYearsOfExperience;
    }

    /**
     * @param Candidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(Candidate $candidate) : bool
    {
        $totalMonthsOfExperience = 0;

        foreach ($candidate->getWorkExperience() as $experience) {
            $totalMonthsOfExperience += $experience->getWorkedMonths();
        }

        return $totalMonthsOfExperience / 12 >= $this->minYearsOfExperience;
    }
}