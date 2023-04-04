<?php

namespace Structural\Flyweight;

class DeviceStorage {

    /**
     * @var array
     */
    public $devices = [];

    /**
     * @var DeviceTypeFactory
     */
    public DeviceTypeFactory $deviceFactory;

    public function __construct () {
        $this->deviceFactory = new DeviceTypeFactory();
    }

    /**
     * @param string $uuid
     * @param string $location
     * @param string $resolution
     * @param string $producer
     * @param string $operatingSystem
     * @param string $ip
     * @return void
     */
    public function addDevice (
        string $uuid,
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem,
        string $ip
    ) {
        $type = $this->deviceFactory->getType(
            $location,
            $resolution,
            $producer,
            $operatingSystem
        );

        $this->devices[] = new Device($uuid, $ip, $type);
    }

    /**
     * @return void
     */
    public function checkDevicesHealth () {
        foreach ($this->devices as $device) {
            $device->ping();
        }
    }

}