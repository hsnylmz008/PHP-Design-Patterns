<?php

namespace Behavioral\Strategy;
use http\Exception\InvalidArgumentException;

class Context {

    /**
     * @var JSONFormatter|StringFormatter|XMLFormatter
     */
    private $formatter;

    /**
     * @param string $outputType
     */
    public function __construct (string $outputType) {
        switch ($outputType) {
            case "json":
                $this->formatter = new JSONFormatter();
                break;
            case "xml":
                $this->formatter = new XMLFormatter();
                break;
            case "string":
                $this->formatter = new StringFormatter();
                break;
            default:
                throw new InvalidArgumentException("{$outputType} is not supported");
        }
    }

    /**
     * @param array $data
     * @return string
     */
    public function formatData (array $data): string {
        return $this->formatter->format($data);
    }
}