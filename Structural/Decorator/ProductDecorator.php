<?php

namespace Structural\Decorator;

abstract class ProductDecorator implements Product {

    /**
     * @var Product
     */
    protected Product $product;

    /**
     * @param Product $product
     */
    public function __construct (Product $product) {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public abstract function getName (): string;

    /**
     * @return float
     */
    public abstract function getPrice (): float;

}