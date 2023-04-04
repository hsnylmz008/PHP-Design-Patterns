<?php

namespace Structural\DependencyInjection;

class User {

    /**
     * @var Storage
     */
    protected Storage $userStorage;

    /**
     * @param Storage $userStorage
     */
    public function __construct (Storage $userStorage) {
        $this->userStorage = $userStorage;
    }

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    protected function validate ($email, $password): bool
    {
        if (strlen($email) > 3 && strlen($password) > 3) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function register (string $email, string $password): bool
    {
        if ($this->validate($email, $password)
            && $this->userStorage->save($email, $password)) {

            return true;
        } else {
            return false;
        }
    }
}