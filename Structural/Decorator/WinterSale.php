<?php

namespace Structural\Decorator;

class WinterSale extends ProductDecorator {

    const DISCOUNT_FACTOR = 0.5;

    /**
     * @return string
     */
    public function getName (): string {
        return "WINTER SALES 50% OFF - {$this->product->getName()} ONLY {$this->getPrice()} EUR";
    }

    /**
     * @return float
     */
    public function getPrice (): float {
        return $this->product->getPrice() * self::DISCOUNT_FACTOR;
    }

}