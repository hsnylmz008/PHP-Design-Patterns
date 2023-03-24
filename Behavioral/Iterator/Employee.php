<?php

namespace Behavioral\Iterator;

class Employee {

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $position;

    /**
     * @param string $name
     * @param string $position
     */
    public function __construct (string $name, string $position) {
        $this->name = $name;
        $this->position = $position;
    }
}