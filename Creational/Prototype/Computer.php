<?php

namespace Creational\Prototype;
class Computer implements Device {

    private $uid;

    /**
     * @var DevicesGroup
     */
    private DevicesGroup $group;

    /**
     * @param DevicesGroup $group
     */
    public function __construct (DevicesGroup $group) {
        $this->group = $group;
    }

    /**
     * @param string $uid
     * @return void
     */
    public function setUid (string $uid): void {
        $this->uid = $uid;
    }

    /**
     * @return void
     */
    public function save (): void {
        echo "Saving device with UID {$this->uid} to group {$this->group->getName()}" . PHP_EOL;
    }
}