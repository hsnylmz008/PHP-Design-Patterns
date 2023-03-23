<?php

namespace Creational\FactoryMethod;
abstract class Box {

    protected $file;

    /**
     * @param FileItem $file
     */
    public function __construct (FileItem $file) {

        $this->file = $file;
    }

    /**
     * @return string
     */
    abstract function getHtml (): string;
}