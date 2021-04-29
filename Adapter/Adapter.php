<?php
namespace Adapter;

class Adapter extends XmlTarget
{
    private string $jsonArray;

    public function __construct(string $jsonArray)
    {
        $this->jsonArray = $jsonArray;
    }

    public function xmlResult()
    {

        $xml = new \SimpleXMLElement('<result/>');

        return $this->xmlConverter($this->jsonDecoder(), $xml);
    }

    private function jsonDecoder()
    {
        return json_decode($this->jsonArray);
    }

    private function xmlConverter($array, $xml)
    {


        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->xmlConverter($value, $xml->addChild($key));
            } else {
                $xml->addChild('tag', $value);
            }
        }

            return $xml->asXML();
    }
}
