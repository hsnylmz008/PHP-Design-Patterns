<?php

namespace Structural\DependencyInjection;

interface Storage {

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function save($email, $password): bool ;
}