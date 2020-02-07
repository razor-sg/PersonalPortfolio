<?php

    //I'll log the user's details to my email
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    //email with subject to appear on my email

    $email_from = 'glenricmazibuko@gmail.com';
    $email_subject = "Portfolio contact-form";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "glenricmaibuko@gmail.com";

    $headers = "From: $email_from \r\n";
    $hearders = " Reply-To: $visitor_email\r\n";

    //send email to my personal email address
    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");


?>