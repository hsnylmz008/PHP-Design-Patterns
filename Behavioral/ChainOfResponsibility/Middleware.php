<?php

namespace Behavioral\ChainOfResponsibility;

abstract class Middleware {

    /**
     * @var
     */
    protected $next;

    /**
     * @param Middleware $middleware
     * @return Middleware
     */
    public final function setNext (Middleware $middleware): Middleware
    {
        $this->next = $middleware;

        return $middleware;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function process (Request $request): bool
    {
        if ($this->next) {
            return $this->next->process($request);
        } else {
            return true;
        }
    }
}