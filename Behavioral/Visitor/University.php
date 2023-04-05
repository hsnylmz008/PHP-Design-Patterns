<?php

namespace Behavioral\Visitor;

class University implements Visitable
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $students;

    /**
     * @param string $name
     * @param array $students
     */
    public function __construct(string $name, array $students)
    {
        $this->name = $name;
        $this->students = $students;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param Visitor $visitor
     * @return array
     */
    public function accept(Visitor $visitor): array
    {
        return $visitor->visitUniversity($this);
    }
}