<?php
$textDesign = $_POST['textDesign'];
$word = $_POST['word'];

switch ($textDesign) {
    case "i":
        $string = "<i>".$word."</i>";
        break;
    case "b":
        $string = "<b>".$word."</b>";
        break;
    case "s":
        $string = "<s>".$word."</s>";
        break;
    default:
         $string = 'Error';
}

echo json_encode($string);
