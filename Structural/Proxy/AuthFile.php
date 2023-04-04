<?php

namespace Structural\Proxy;

class AuthFile implements File {


    const ALLOWED_USERS = [
        "Jan",
        "John"
    ];

    /**
     * @var File
     */
    private File $file;

    /**
     * @param File $file
     */
    public function __construct (File $file) {
        $this->file = $file;
    }

    /**
     * @param string $name
     * @param string $path
     * @return void
     */
    public function add (string $name, string $path): void {
        if ($this->loggedIn()) {
            $this->file->add($name, $path);
        }
    }

    /**
     * @param string $name
     * @return void
     */
    public function get (string $name): void {
        if ($this->loggedIn()) {
            $this->file->get($name);
        }
    }

    /**
     * @param string $name
     * @return void
     */
    public function remove (string $name): void {
        if ($this->loggedIn()) {
            $this->file->remove($name);
        }
    }

    /**
     * @return bool
     */
    private function loggedIn (): bool
    {
        if (isset($_SESSION["username"]) && in_array($_SESSION["username"], self::ALLOWED_USERS)) {
            echo "User can perform action" . PHP_EOL;

            return true;
        } else {
            echo "User can not perform action" . PHP_EOL;

            return false;
        }
    }
}