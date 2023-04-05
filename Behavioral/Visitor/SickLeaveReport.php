<?php

namespace Behavioral\Visitor;

class SickLeaveReport implements Visitor
{
    /**
     * @param University $university
     * @return array
     */
    public function visitUniversity(University $university): array
    {
        $messages = [];
        $messages[] = "Generating sick leave report for: \"{$university->getName()}\"";

        foreach ($university->getStudents() as $student) {
            $messages[] = $this->visitStudent($student);
        }

        return $messages;
    }

    /**
     * @param Student $student
     * @return string
     */
    public function visitStudent(Student $student): string
    {
        $daysMissed = 0;

        foreach ($student->getSickLeaves() as $sickLeave) {
            $daysMissed += $sickLeave->getStart()->diff($sickLeave->getEnd())->days + 1;
        }

        return "Student: {$student->getName()} missed {$daysMissed} days";
    }
}