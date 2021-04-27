<?php
namespace Facade;

class Facade
{
    private $api;

    public function __construct()
    {
        $this->api = new MyApi();
    }

    public function apiResult($word, $mode)
    {
        return $connection = $this->api->connection($word, $mode);
    }

}