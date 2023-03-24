<?php

namespace Structural\Decorator;

interface Product {

    /**
     * @return string
     */
    public function getName (): string;

    /**
     * @return float
     */
    public function getPrice (): float;
}