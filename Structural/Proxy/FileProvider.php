<?php

namespace Structural\Proxy;

class FileProvider implements File {

    /**
     * @param string $name
     * @param string $path
     * @return void
     */
    public function add (string $name, string $path): void {
        echo "File {$name} from {$path} was added to storage" . PHP_EOL;
    }

    /**
     * @param string $name
     * @return void
     */
    public function get (string $name): void {
        echo "File {$name} was downloaded from storage" . PHP_EOL;
    }

    /**
     * @param string $name
     * @return void
     */
    public function remove (string $name): void {
        echo "File {$name} was removed from storage" . PHP_EOL;
    }
}