<?php

namespace Creational\AbstractFactory;
class OutdoorIot implements OutdoorProduct {

    /**
     * @return void
     */
    public function testForWeatherConditions (): void {
        echo "Testing weather conditions in OutdoorIot" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function testForVandalism (): void {
        echo "Testing vandals in OutdoorIot" . PHP_EOL;
    }
}