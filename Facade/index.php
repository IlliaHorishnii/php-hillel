<?php
require_once("Facade.php");

use Facade\Facade;

$obj = new Facade('www/Facade/MyApi.php', ['textDesign' => 'i', 'word' => 'first']);
echo $obj->apiConnect();
