<?php

namespace Behavioral\State;

class Neutral extends Mood {

    /**
     * @param Person $context
     * @return mixed|void
     */
    public function insult (Person $context) {
        $context->say("What the heck do you want?");
        $context->setState(new Angry());
    }

    /**
     * @param Person $context
     * @return mixed|void
     */
    public function hug (Person $context) {
        $context->say("Thanks");
        $context->setState(new Happy());
    }

    /**
     * @param Person $context
     * @param string $name
     * @return mixed|void
     */
    public function getName (Person $context, string $name) {
        $context->say("My name is {$name}");
    }

}