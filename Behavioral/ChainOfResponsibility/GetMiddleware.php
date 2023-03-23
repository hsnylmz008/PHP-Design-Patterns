<?php

namespace Behavioral\ChainOfResponsibility;

class GetMiddleware extends Middleware {

    /**
     * @var string
     */
    private $allowedMethod = "GET";

    /**
     * @var string
     */
    private $methodKey = "REQUEST_METHOD";

    /**
     * @param Request $request
     * @return bool
     */
    public function process (Request $request) {
        if ($request->hasServerParam($this->methodKey)
            && $request->getServerParam($this->methodKey) === $this->allowedMethod) {

            return parent::process($request);
        } else {
            throw new MiddlewareError("Only GET requests allowed");
        }
    }
}