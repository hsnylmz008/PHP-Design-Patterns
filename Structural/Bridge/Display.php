<?php

namespace Structural\Bridge;

abstract class Display {

    protected Content $content;

    /**
     * @param Content $content
     */
    public function __construct (Content $content) {
        $this->content = $content;
    }

    /**
     * @return string
     */
    abstract public function render (): string;

}