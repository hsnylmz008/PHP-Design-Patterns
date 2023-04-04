<?php

namespace Structural\Adapter;

interface FileAdapter {

    /**
     * @param string $path
     * @return File
     */
    public function get (string $path): File;

    /**
     * @param string $path
     * @param string $name
     * @return void
     */
    public function save (string $path, string $name): void;

    /**
     * @param string $name
     * @return void
     */
    public function delete (string $name): void;
}