<?php

namespace Structural\Bridge;

abstract class Content {

    /**
     * @var string
     */
    protected string $filePath;

    /**
     * @param string $filePath
     */
    public function __construct (string $filePath) {
        $this->filePath = $filePath;
    }

    /**
     * @return string
     */
    abstract public function getHtml (): string;

    /**
     * @return string
     */
    abstract public function getCss (): string;

}