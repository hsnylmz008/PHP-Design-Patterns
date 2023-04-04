<?php

namespace Structural\Adapter;

class File {

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $content;

    /**
     * @param string $name
     * @param string $content
     */
    public function __construct (string $name, string $content) {
        $this->name = $name;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent (): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getName (): string
    {
        return $this->name;
    }
}