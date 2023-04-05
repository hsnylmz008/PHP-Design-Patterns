<?php

namespace Behavioral\Visitor;

interface Visitor
{
    /**
     * @param University $university
     * @return array
     */
    public function visitUniversity(University $university): array;

    /**
     * @param Student $student
     * @return string
     */
    public function visitStudent(Student $student): string;
}

