<?php
namespace Adapter;

class JsonAdaptee
{
    private array $json;

    public function __construct(array $json)
    {
        $this->json = $json;
    }

    public function jsonConverter()
    {
        return json_encode($this->json);
    }
}
