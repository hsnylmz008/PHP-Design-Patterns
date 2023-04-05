<?php

namespace Behavioral\Strategy;

interface OutputFormatter {

    /**
     * @param array $data
     * @return string
     */
    public function format (array $data): string;

}