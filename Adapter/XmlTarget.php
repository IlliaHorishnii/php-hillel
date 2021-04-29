<?php
namespace Adapter;

class XmlTarget
{
    private const XML_FILE = 'XmlResult.xml';
    public function xmlOutput($xml)
    {
        $file = fopen(self::XML_FILE, 'w+');
        fwrite($file, $xml);
        fclose($file);
    }
}
