<?php

namespace Creational\FactoryMethod;

interface Factory {

    /**
     * @param FileItem $item
     * @return Box
     */
    public static function createBox (FileItem $item): Box;
}