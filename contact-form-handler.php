<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'ruben@ikontwerpflyers.nl';

    $email_subject = "Nieuwe Lead Contactformulier Rubenmandema.nl";

    $email_body = 
        "Naam: $name.\n". 
        "Email: $visitor_email.\n". 
        "Bericht: $message.\n"
    ;



    $to = "ruben@ikontwerpflyers.nl";

    $headers = "Form: $email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>