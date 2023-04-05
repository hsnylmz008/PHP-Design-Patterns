<?php

namespace Behavioral\Strategy;

class JSONFormatter implements OutputFormatter {

    /**
     * @param array $data
     * @return string
     */
    public function format (array $data): string {
        return json_encode($data);
    }
}