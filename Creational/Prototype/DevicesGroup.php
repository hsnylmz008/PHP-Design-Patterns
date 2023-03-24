<?php

namespace Creational\Prototype;

class DevicesGroup {

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location;

    /**
     * @param string $name
     * @param string $location
     */
    public function __construct (string $name, string $location) {
        $this->name = $name;
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getName (): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLocation (): string {
        return $this->location;
    }
}