<?php
require_once("Database.php");

use Form\Database;

if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['comment'] != '') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO `feedback` (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')";
    $connection = new Database();
    $connection->insert($sql);
} else {
    header('Location: index.php');
}
