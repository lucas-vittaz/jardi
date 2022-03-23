<?php

$name = $_POST['name'];
$firstName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$location = $_POST['location'];
$category = $_POST['type'];
$message = $_POST['subject'];

$to = "contact@jardica.net";
$body = '';

$body .= "FROM: ".$category. "\r\n";
$body .= "FROM: ".$name. "\r\n";
$body .= "Email: ".$firstName. "\r\n";
$body .= "FROM: ".$email. "\r\n";
$body .= "FROM: ".$location. "\r\n";
$body .= "FROM: ".$message. "\r\n";

mail($to, $category, $body)  
header('location: index.html')
?>
