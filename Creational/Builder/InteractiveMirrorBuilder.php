<?php

namespace Creational\Builder;

class InteractiveMirrorBuilder implements DeviceBuilder {

    private $device;

    /**
     * @return void
     */
    public function setHardware () {
        $components = ['display', 'glass', 'PC', 'frame'];

        foreach ($components as $component) {
            $this->device->hardware[] = $component;
        }
    }

    /**
     * @return void
     */
    public function setSoftware () {
        $this->device->software = 'Mirror software';
    }

    /**
     * @return void
     */
    public function setupSLA () {
        $this->device->sla = 'Mirror SLA V2';
    }

    /**
     * @return void
     */
    public function createDevice () {
        $this->device = new InteractiveMirror();
    }

    /**
     * @return mixed
     */
    public function getDevice () {
        return $this->device;
    }
}