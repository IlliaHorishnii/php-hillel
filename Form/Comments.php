<?php
require_once("Database.php");

use Form\Database;

$sql = "SELECT * FROM `feedback`";

$connection = new Database();
$request = $connection->select($sql);

$comments = [];
$i = 0;
foreach($request as $key => $value) {
    foreach($value as $key1 => $value1) {
        $comments[$i][$key1] = $value1;
    }
    $i++;
}

?>

