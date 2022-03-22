<?php

//gestion de formulaire tuto grafikart https://www.youtube.com/watch?v=Dw9R0NEXuYo avec gestion des erreurs + affichage sur l'index si le mail est bien parti

var_dump($POST);
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
};

if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
    $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
};

if(!array_key_exists('tel', $_POST) || $_POST['tel'] == ''){
    $errors['tel'] = "Vous n'avez pas renseigné votre téléphone";
};

if(!array_key_exists('location', $_POST) || $_POST['location'] == ''){
    $errors['location'] = "Vous n'avez pas renseigné votre localisation";
};

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['mail'] = "Vous n'avez pas renseigné un e-mail valide";
};

if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
    $errors['subject'] = "Vous n'avez pas renseigné votre message";
};

session_start();

if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
}else {
    $_SESSION['success'] = 1;
    $message = $_POST['subject'];
    $headers = 'FROM:' $_POST['email']; 
    mail('contact@jardica.net', 'Mail pro', $message, $headers); // methode mail a revoir ($message + $header) faut il rajouter chaque header 1 par 1???
    header('Location: index.php');
}

?>


































// mail jet feature envoi sms pour rappel auto
?>