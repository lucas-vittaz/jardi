<?php


if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $firstName = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $location = $_POST['location'];
    $category = $_POST['type'];
    $message = $_POST['subject'];

    if (empty($name) || empty($firstName) || empty($email) || empty($phone) || empty($location)  || empty($category) || empty($message) ){
         header("Location: index.php?error");
    }
    else {
        $to = "lucasvittaz.pro@gmail.com";
        $hearders = '';

        $hearders .= "-Type: ".$category. "\r\n";
        $hearders .= "-Nom: ".$name. "\r\n";
        $hearders .= "-Prénom: ".$firstName. "\r\n";
        $hearders .= "-E-mail: ".$email. "\r\n";
        $hearders .= "-Téléphone: ".$phone. "\r\n";
        $hearders .= "-Lieu d'intervention: ".$location. "\r\n";
        $hearders .= "-Demande: ".$message. "\r\n";
        
        if(mail($to, $category, $hearders)){
            header("Location: index.php?success");
        }; 
        
    };
} else {
    header("Location: index.php");
}



?>
