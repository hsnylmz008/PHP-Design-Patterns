<?php

namespace Structural\Flyweight;

class DeviceType {
    /**
     * @var string
     */
    protected string $location;

    /**
     * @var string
     */
    protected string $resolution;

    /**
     * @var string
     */
    protected string $producer;

    /**
     * @var string
     */
    protected string $operatingSystem;

    /**
     * @param string $location
     * @param string $resolution
     * @param string $producer
     * @param string $operatingSystem
     */
    public function __construct (
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem
    ) {
        $this->location = $location;
        $this->resolution = $resolution;
        $this->producer = $producer;
        $this->operatingSystem = $operatingSystem;
    }

    /**
     * @return string
     */
    public function reportType () {
        return "Working on device in {$this->location} with resolution {$this->resolution} crated by {$this->producer} and running {$this->operatingSystem}";
    }
}