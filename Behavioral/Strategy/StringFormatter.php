<?php

namespace Behavioral\Strategy;

class StringFormatter implements OutputFormatter {

    const DELIMITER = ",";

    /**
     * @param array $data
     * @return string
     */
    public function format (array $data): string {
        return implode(self::DELIMITER, $data);
    }
}