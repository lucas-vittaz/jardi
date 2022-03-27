<?php

$name = $_POST['name'];
$firstName = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$location = $_POST['location'];
$category = $_POST['type'];
$message = $_POST['subject'];

$to = "lucasvittaz.pro@gmail.com";
$body = '';

$body .= "-Type: ".$category. "\r\n";
$body .= "-Nom: ".$name. "\r\n";
$body .= "-Prénom: ".$firstName. "\r\n";
$body .= "-E-mail: ".$email. "\r\n";
$body .= "-Téléphone: ".$phone. "\r\n";
$body .= "-Lieu d'intervention: ".$location. "\r\n";
$body .= "-Demande: ".$message. "\r\n";

mail($to, $category, $body); 
header('location: index.html');
?>
