<?php

namespace Behavioral\NullObject;

interface Cache
{
    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key);

    /**
     * @param string $key
     * @param $data
     * @return void
     */
    public function set(string $key, $data): void;
}