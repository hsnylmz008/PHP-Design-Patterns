<?php

namespace Creational\AbstractFactory;
interface DeviceFactory {

    /**
     * @return IndoorProduct
     */
    public function makeIndoor (): IndoorProduct;

    /**
     * @return OutdoorProduct
     */
    public function makeOutdoor (): OutdoorProduct;
}