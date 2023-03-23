<?php

namespace Creational\AbstractFactory;
class IndoorDisplay implements IndoorProduct {

    /**
     * @return void
     */
    public function testTouch (): void {
        echo "Testing touch in IndoorDisplay" . PHP_EOL;
    }

    /**
     * @return void
     */
    public function testSensors (): void {
        echo "Testing sensors in IndoorDisplay" . PHP_EOL;
    }
}