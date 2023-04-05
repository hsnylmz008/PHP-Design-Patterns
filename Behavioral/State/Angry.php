<?php

namespace Behavioral\State;
class Angry extends Mood {

    /**
     * @param Person $context
     * @return void
     */
    public function insult (Person $context) {
        $context->say("You too...");
    }

    /**
     * @param Person $context
     * @return void
     */
    public function hug (Person $context) {
        $context->say("Hm...");
        $context->setState(new Neutral());
    }

    /**
     * @param Person $context
     * @param string $name
     * @return void
     */
    public function getName (Person $context, string $name) {
        $context->say("{$name}. What's your problem?");
    }

}