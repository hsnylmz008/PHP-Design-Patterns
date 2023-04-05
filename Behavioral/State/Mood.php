<?php

namespace Behavioral\State;

abstract class Mood {

    /**
     * @param Person $context
     * @return mixed
     */
    public abstract function insult (Person $context);

    /**
     * @param Person $context
     * @return mixed
     */
    public abstract function hug (Person $context);

    /**
     * @param Person $context
     * @param string $name
     * @return mixed
     */
    public abstract function getName (Person $context, string $name);
}