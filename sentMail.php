<?php
if(isset($_POST['submit'])) {

    $mailto = "tvn.terence@gmail.com";// Adresse mail Charlie
    // Customer data
    $type = $_POST["type"];
    $firstName = $_POST['f_name'];
    $name = $_POST['name'];
    $fromEmail = $_POST['mail'];
    $phone = $_POST['tel'];
    $location = $_POST['location'];
    $subject = $_POST['subject'];
    $subject2 = "Votre message à  bien été envoyé !";

    // email recieved

    $message =
    . "---" . $type . "..." "\n"
    . $firstName . $name . "\n"
    . "tel: " . $phone . "\n"
    . $location . "\n\n"
    . "=>" . $subject . $_POST["message"];

    // Message for customer
    $message2 = "Madame, monsieur" . $name . "\n"
    . "Merci d'avoir prit contact avec nous. Nous vous répondrons au plus vite !" . "\n\n"
    . "Vous avez envoyé le message suivant: " . "\n". $_POST['message'] . "\n\n"
    . "Cordialement," . "\n" . "Jardi'CA";

    //email headers
    $header = "De: " . $fromEmail;
    $header2 = "De: " . $mailto;

    // PHP mailer function

    $result1 = mail($mailto, $subject, $message, $header); // A mon adresse
    $result2 = mail($fromEmail, $subject2, $message2, $header2); // mail de confirmation

    // check envoie du mail

    if ($result1 && $result2) {
    $success = "Votre message a bien été envoyé !";
    } else {
        $failed = "Désolé, votre message n'a pas pu être envoyé, essayez plus tard !"
    }
}
?>