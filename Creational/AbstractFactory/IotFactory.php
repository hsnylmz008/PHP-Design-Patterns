<?php

namespace Creational\AbstractFactory;
class IotFactory implements DeviceFactory {

    /**
     * @return IndoorProduct
     */
    public function makeIndoor (): IndoorProduct {
        return new IndoorIot();
    }

    /**
     * @return OutdoorProduct
     */
    public function makeOutdoor (): OutdoorProduct {
        return new OutdoorIot();
    }
}