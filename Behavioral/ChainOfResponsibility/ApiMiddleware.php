<?php

namespace Behavioral\ChainOfResponsibility;

class ApiMiddleware extends Middleware {

    /**
     * @var array|string[]
     */
    private array $apiKeys = [
        "12345",
        "qwerty"
    ];

    /**
     * @var string
     */
    private string $apiKeyName = "apiKey";

    /**
     * @param Request $request
     * @return true
     */
    public function process (Request $request) {
        if ($request->hasParam($this->apiKeyName)
            && in_array($request->getParam($this->apiKeyName), $this->apiKeys)) {

            return parent::process($request);
        } else {
            throw new MiddlewareError("Api key validation error");
        }
    }
}