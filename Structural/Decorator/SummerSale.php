<?php

namespace Structural\Decorator;

class SummerSale extends ProductDecorator {

    const DISCOUNT_FACTOR = 0.9;

    /**
     * @return string
     */
    public function getName (): string {
        return "SUMMER SALES 10% OFF - {$this->product->getName()} ONLY {$this->getPrice()} EUR";
    }

    /**
     * @return float
     */
    public function getPrice (): float {
        return $this->product->getPrice() * self::DISCOUNT_FACTOR;
    }

}