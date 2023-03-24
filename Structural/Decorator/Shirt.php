<?php

namespace Structural\Decorator;

class Shirt implements Product {

    /**
     * @var float
     */
    protected float $price;

    /**
     * @var string
     */
    protected string $name;
    const TAX_RATE = 1.1;

    /**
     * @param float $price
     * @param string $name
     */
    public function __construct (float $price, string $name) {
        $this->price = $price;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName (): string {
        return "Shirt {$this->name}";
    }

    /**
     * @return float
     */
    public function getPrice (): float {
        return $this->price * self::TAX_RATE;
    }
}