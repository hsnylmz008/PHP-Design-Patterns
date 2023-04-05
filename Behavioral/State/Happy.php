<?php

namespace Behavioral\State;
class Happy extends Mood {

    /**
     * @param Person $context
     * @return void
     */
    public function insult (Person $context) {
        $context->say("Oh! That wasn't nice");
        $context->setState(new Neutral());
    }

    /**
     * @param Person $context
     * @return void
     */
    public function hug (Person $context) {
        $context->say("Oh! That was nice, thanks");
    }

    /**
     * @param Person $context
     * @param string $name
     * @return void
     */
    public function getName (Person $context, string $name) {
        $context->say("Oh! Hello dear friend. My name is {$name}");
    }
}