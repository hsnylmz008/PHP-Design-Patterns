<?php

namespace Structural\Proxy;

class User {

    /**
     * @param $name
     * @return void
     */
    public function login ($name) {
        echo "Logging in as {$name}" . PHP_EOL;
        $_SESSION["username"] = $name;
    }

    /**
     * @return void
     */
    public function logOut () {
        echo "Logging out" . PHP_EOL;
        unset($_SESSION["username"]);
    }

}