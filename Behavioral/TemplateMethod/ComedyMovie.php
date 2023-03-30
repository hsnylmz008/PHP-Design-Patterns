<?php

namespace Behavioral\TemplateMethod;

class ComedyMovie extends Movie {

    const AVAILABLE_DIRECTORS = ['Edgar Wright', 'Kevin Smith'];

    const AVAILABLE_ACTORS = ['Jim Carrey', 'Eddie Murphy', 'Steve Carell'];

    /**
     * @return void
     */
    protected function raiseMoney () {
        $this->budget = 500000;
    }

    /**
     * @return void
     */
    protected function castActors () {
        $this->cast[] = 'Adam Sandler';
        $this->cast[] = self::AVAILABLE_ACTORS[array_rand(self::AVAILABLE_ACTORS)];
    }

    /**
     * @return void
     */
    protected function castDirector () {
        $this->director = self::AVAILABLE_DIRECTORS[array_rand(self::AVAILABLE_DIRECTORS)];
    }
}