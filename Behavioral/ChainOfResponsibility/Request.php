<?php

namespace Behavioral\ChainOfResponsibility;

class Request {

    /**
     * @var array
     */
    private array $params;

    /**
     * @var array
     */
    private array $server;

    /**
     * @param array $params
     * @param array $server
     */
    public function __construct (array $params, array $server) {
        $this->params = $params;
        $this->server = $server;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getParam ($name) {
        return $this->params[$name];
    }

    /**
     * @return array
     */
    public function getParams (): array
    {
        return $this->params;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasParam (string $name): bool
    {
        return array_key_exists($name, $this->params);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getServerParam (string $name) {
        return $this->server[$name];
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasServerParam (string $name): bool
    {
        return array_key_exists($name, $this->server);
    }
}