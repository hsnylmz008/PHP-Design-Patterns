<?php

namespace Behavioral\TemplateMethod;

class ActionMovie extends Movie {

    const AVAILABLE_DIRECTORS = ['Michael Bay', 'James Cameron', 'Steven Spielberg'];
    const AVAILABLE_ACTORS = ['Sylvester Stallone', 'Bruce Willis', 'Al Pacino', 'Arnold Schwarzenegger'];
    const NUM_ROLES = 2;

    /**
     * @return void
     */
    protected function raiseMoney () {
        $this->budget = 100000;
    }

    /**
     * @return void
     */
    protected function castActors () {
        foreach (array_rand(self::AVAILABLE_ACTORS, self::NUM_ROLES) as $actor) {
            $this->cast[] = self::AVAILABLE_ACTORS[$actor];
        }
    }

    /**
     * @return void
     */
    protected function castDirector () {
        $this->director = self::AVAILABLE_DIRECTORS[array_rand(self::AVAILABLE_DIRECTORS)];
    }
}