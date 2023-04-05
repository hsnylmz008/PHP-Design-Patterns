<?php

namespace Behavioral\State;

class Person {

    /**
     * @var int
     */
    private int $currentMood;

    /**
     * @var string
     */
    private string $name;

    /**
     * @param Mood $mood
     * @param string $name
     */
    public function __construct (Mood $mood, string $name) {
        $this->setState($mood);
        $this->name = $name;
    }

    /**
     * @param Mood $mood
     * @return void
     */
    public function setState (Mood $mood) {
        $this->currentMood = $mood;
    }

    /**
     * @return void
     */
    public function insult () {
        $this->currentMood->insult($this);
    }

    /**
     * @return void
     */
    public function getName () {
        $this->currentMood->getName($this, $this->name);
    }

    /**
     * @return void
     */
    public function hug () {
        $this->currentMood->hug($this);
    }

    /**
     * @param string $msg
     * @return void
     */
    public function say (string $msg) {
        echo($msg . PHP_EOL);
    }
}