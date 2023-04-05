<?php

namespace Behavioral\Strategy;

use SimpleXMLElement;

class XMLFormatter implements OutputFormatter {

    /**
     * @param array $data
     * @return string
     */
    public function format (array $data): string {
        $xml = $this->addData($data, new SimpleXMLElement('<root/>'));

        return $xml->asXML();
    }

    /**
     * @param array $data
     * @param SimpleXMLElement $xml
     * @return SimpleXMLElement
     */
    protected function addData (array $data, SimpleXMLElement $xml): SimpleXMLElement
    {
        foreach ($data as $k => $v) {
            is_array($v)
                ? $this->addData($v, $xml->addChild($k))
                : $xml->addChild($k, $v);
        }
        return $xml;
    }
}