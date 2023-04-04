<?php

namespace Structural\Flyweight;

class Device {

    /**
     * @var string
     */
    protected string $uid;

    /**
     * @var string
     */
    protected string $ip;

    /**
     * @var DeviceType
     */
    protected DeviceType $type;

    /**
     * @param string $uuid
     * @param string $ip
     * @param DeviceType $type
     */
    public function __construct (
        string $uuid,
        string $ip,
        DeviceType $type
    ) {
        $this->uid = $uuid;
        $this->ip = $ip;
        $this->type = $type;
    }

    /**
     * @return void
     */
    public function ping () {
        echo "Checking if device {$this->uid} is active" . PHP_EOL;
        echo "Calling it on ip {$this->ip}" . PHP_EOL;
    }
}