<?php

namespace Behavioral\Visitor;

interface Visitable
{
    /**
     * @param Visitor $visitor
     * @return mixed
     */
    public function accept(Visitor $visitor);
}