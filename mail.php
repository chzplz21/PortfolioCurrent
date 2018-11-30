<?php


$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["email"];

mail("davidrothkopf1@gmail.com","My subject",$message, $name);
header('Location: index.html');
?>