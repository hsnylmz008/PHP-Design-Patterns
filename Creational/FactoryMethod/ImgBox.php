<?php

namespace Creational\FactoryMethod;

class ImgBox extends Box {

    /**
     * @return string
     */
    function getHtml (): string {
        return "<img src='{$this->file->getFilePath()}' />";
    }
}
