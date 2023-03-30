<?php

namespace Behavioral\TemplateMethod;

abstract class Movie {

    /**
     * @var string
     */
    protected string $name;

    protected $budget;

    /**
     * @var array
     */
    protected array $cast = [];

    protected $director;

    /**
     * @param string $name
     */
    public function __construct (string $name) {
        $this->name = $name;
    }

    /**
     * @return void
     */
    public final function publish () {
        $this->raiseMoney();
        $this->castActors();
        $this->castDirector();
        $this->promote();
    }

    /**
     * @return mixed
     */
    abstract protected function raiseMoney ();

    /**
     * @return mixed
     */
    abstract protected function castActors ();

    /**
     * @return mixed
     */
    abstract protected function castDirector ();

    /**
     * @return void
     */
    protected function promote () {
        $actors = implode(", ", $this->cast);
        echo "New movie '{$this->name}' directed by {$this->director}. Starring {$actors} and budget of \${$this->budget}!" . PHP_EOL;
    }
}