<?php

namespace Behavioral\NullObject;

class DummyCache implements Cache
{
    /**
     * @param string $key
     * @return mixed|void
     */
    public function get(string $key)
    {

    }

    /**
     * @param string $key
     * @param $data
     * @return void
     */
    public function set(string $key, $data): void
    {

    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return false;
    }
}