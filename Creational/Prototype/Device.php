<?php

namespace Creational\Prototype;

interface Device {

    /**
     * @param DevicesGroup $group
     */
    public function __construct (DevicesGroup $group);

    /**
     * @param string $uid
     * @return void
     */
    public function setUid (string $uid): void;

    /**
     * @return void
     */
    public function save (): void;
}