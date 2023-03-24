<?php

namespace Behavioral\NullObject;

class ArrayCache implements Cache
{
    /**
     * @var array
     */
    private array $data = [];

    /**
     * @param string $key
     * @return false|mixed
     */
    public function get(string $key)
    {
        if ($this->has($key)) {
            return $this->data[$key];
        }
        return false;
    }

    /**
     * @param string $key
     * @param $data
     * @return void
     */
    public function set(string $key, $data): void
    {
        $this->data[$key] = $data;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }
}