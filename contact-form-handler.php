<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    


    $email_from = 'vikkyraghav007@gmail.com';

    $email_subject = "New Form Submission";
    
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

$to ="vikkyraghav321@gmail.com";

$headers = "Form: $email_form \r\n";

$headers = "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: index.html");

?>