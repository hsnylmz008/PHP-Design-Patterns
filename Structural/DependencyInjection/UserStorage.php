<?php

use Structural\DependencyInjection\Storage;

class UserStorage implements Storage {

    /**
     * @return void
     */
    protected function connectDb () {
        echo "Making connection to DB" . PHP_EOL;
    }

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function save ($email, $password): bool {
        $this->connectDb();
        echo "Inserting new user record with email: {$email} and password {$password}";

        return true;

    }
}