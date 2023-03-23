<?php

namespace Creational\AbstractFactory;
class IndoorIot implements IndoorProduct {

    /**
     * @return void
     */
    public function testTouch (): void {
        echo "Testing touch in IndoorIot" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function testSensors (): void {
        echo "Testing sensors in IndoorIot" . PHP_EOL;
    }

}