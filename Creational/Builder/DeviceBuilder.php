<?php

namespace Creational\Builder;
interface DeviceBuilder {

    /**
     * @return mixed
     */
    public function setHardware ();

    /**
     * @return mixed
     */
    public function setSoftware ();

    /**
     * @return mixed
     */
    public function setupSLA ();

    /**
     * @return mixed
     */
    public function createDevice ();

    /**
     * @return mixed
     */
    public function getDevice ();

}