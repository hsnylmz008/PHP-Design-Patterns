<?php

namespace Structural\Flyweight;
class DeviceTypeFactory {

    /**
     * @var array
     */
    protected array $deviceTypes = [];

    /**
     * @param string $location
     * @param string $resolution
     * @param string $producer
     * @param string $operatingSystem
     * @return DeviceType
     */
    public function getType (
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem): DeviceType {

        $key = $this->getKey(
            $location,
            $resolution,
            $producer,
            $operatingSystem);

        if (!array_key_exists($key, $this->deviceTypes)) {
            $this->deviceTypes[$key] = new DeviceType(
                $location,
                $resolution,
                $producer,
                $operatingSystem
            );
        }

        return $this->deviceTypes[$key];
    }

    /**
     * @param string $location
     * @param string $resolution
     * @param string $producer
     * @param string $operatingSystem
     * @return string
     */
    protected function getKey (
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem): string
    {

        return md5(implode("_", func_get_args()));
    }
}