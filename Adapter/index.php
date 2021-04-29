<?php

require_once('XmlTarget.php');
require_once('Adapter.php');
require_once('JsonAdaptee.php');

use Adapter\Adapter;
use Adapter\JsonAdaptee;

$array = [
         2,
        'test',
         'for',
       'json',
        'to',
        'xml',
        'decoder',
    'process' => 'success'
];
$obj = new JsonAdaptee($array);
$json = $obj->jsonConverter();

$obj = new Adapter($json);
$obj->xmlOutput($obj->xmlResult());
