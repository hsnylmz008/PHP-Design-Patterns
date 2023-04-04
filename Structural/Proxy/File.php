<?php

namespace Structural\Proxy;

interface File {

    /**
     * @param string $name
     * @param string $path
     * @return void
     */
    public function add (string $name, string $path): void;

    /**
     * @param string $name
     * @return void
     */
    public function get (string $name): void;

    /**
     * @param string $name
     * @return void
     */
    public function remove (string $name): void;
}