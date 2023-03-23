<?php

namespace Creational\AbstractFactory;
class OutdoorDisplay implements OutdoorProduct {

    /**
     * @return void
     */
    public function testForWeatherConditions (): void {
        echo "Testing weather conditions in OutdoorDisplay" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function testForVandalism (): void {
        echo "Testing vandals in OutdoorDisplay" . PHP_EOL;
    }

}