<?php
    $name = $_POST['nom'];
    $surname = $_POST['prenom'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $city = $_POST['ville'];
    $message = $_POST['text'];

    $email_from = 'lesamisdujardin29@yahoo.fr';

    $email_subject = "Nouvelle Demande";

    $email_body = "Nom : $name\n\n".
                    "Prénom $surname\n\n". 
                    "Email : $mail\n\n".
                    "Téléphone : $phone\n\n".
                    "Commune : $city\n\n".
                    "Message : $message\n\n";

    $to = "lesamisdujardin29@yahoo.fr";

    $headers = "From : $email_from \r\n";

    $headers .= "Réponse à : $mail \r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
?>