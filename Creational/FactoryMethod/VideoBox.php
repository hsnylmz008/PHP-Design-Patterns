<?php

namespace Creational\FactoryMethod;


class VideoBox extends Box {

    /**
     * @return string
     */
    function getHtml (): string {
        return "<video autoplay loop src='{$this->file->getFilePath()}' />";
    }
}
