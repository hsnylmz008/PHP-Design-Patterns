<?php

namespace Behavioral\ChainOfResponsibility;

final class App {

    /**
     * @var Request
     */
    private Request $request;

    /**
     * @var
     */
    private $middleware;

    public function __construct () {
        $this->request = new Request($_GET, $_SERVER);
        $this->setMiddleware();
    }

    /**
     * @return void
     */
    private function setMiddleware () {
        $this->middleware = new GetMiddleware();
        $this->middleware->setNext(new ApiMiddleware());
    }

    /**
     * @return void|null
     */
    public function run () {
        if ($this->middleware->process($this->request)) {
            return (new Response($this->request))->handle();
        }
    }
}