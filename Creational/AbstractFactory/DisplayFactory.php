<?php

namespace Creational\AbstractFactory;
class DisplayFactory implements DeviceFactory {

    /**
     * @return IndoorProduct
     */
    public function makeIndoor (): IndoorProduct {
        return new IndoorDisplay();
    }

    /**
     * @return OutdoorProduct
     */
    public function makeOutdoor (): OutdoorProduct {
        return new OutdoorDisplay();
    }
}