<?php
// if(isset($_POST['submit'])) {

//     $mailto = "tvn.terence@gmail.com";// Adresse mail Charlie
//     // Customer data
//     $type = htmlspecialchars($_POST["type"]);
//     $firstName = htmlspecialchars($_POST['f_name']);
//     $name = htmlspecialchars($_POST['name']);
//     $fromEmail = htmlspecialchars($_POST['mail']);
//     $phone = htmlspecialchars($_POST['tel']);
//     $location = htmlspecialchars($_POST['location']);
//     $subject = htmlspecialchars($_POST['subject']);
//     $subject2 = htmlspecialchars("Votre message à  bien été envoyé !");

//     // email recieved

//     $message =
//     . "---" . $type . "..." "\n"
//     . $firstName . $name . "\n"
//     . "tel: " . $phone . "\n"
//     . $location . "\n\n"
//     . "=>" . $subject . $_POST["message"];

//     // Message for customer
//     $message2 = "Madame, monsieur" . $name . "\n"
//     . "Merci d'avoir prit contact avec nous. Nous vous répondrons au plus vite !" . "\n\n"
//     . "Vous avez envoyé le message suivant: " . "\n". $_POST['message'] . "\n\n"
//     . "Cordialement," . "\n" . "Jardi'CA";

//     //email headers
//     $header = "De: " . $fromEmail;
//     $header2 = "De: " . $mailto;

//     // PHP mailer function

//     $result1 = mail($mailto, $subject, $message, $header); // A mon adresse
//     $result2 = mail($fromEmail, $subject2, $message2, $header2); // mail de confirmation

//     // check envoie du mail

//     if ($result1 && $result2) {
//     $success = "Votre message a bien été envoyé !";
//     } else {
//         $failed = "Désolé, votre message n'a pas pu être envoyé, essayez plus tard !"
//     }
// }

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

if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || flter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
    $errors['mail'] = "Vous n'avez pas renseigné un e-mail valide";
};

if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
    $errors['subject'] = "Vous n'avez pas renseigné votre message";
};

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
}else{
    $_SESSION['success'] = 1;
    $message = $_POST['subject'];
    $headers = 'FROM: ' $_POST['mail']; // attention pas sur de ça (erreur au niveau des brackets) normalement on recupere la variable mail mais ça n'a pas l'air de fonctionner 
    mail("tvn.terence@gmail.com", "mail pro", "Mail pro", $message, $header); // methode mail a revoir ($message + $header) faut il rajouter chaque header 1 par 1???
    header('Location: index.php');
}



































// mail jet feature envoi sms pour rappel auto
?>