<?php
require_once("Facade.php");

use Facade\Facade;

$obj = new Facade('http://www/MyApi.php');
echo $obj->apiConnect('b', 'first');
