<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$sublect = $_POST['subject'];
$massage = $_POST['maggage'];


$email_form='info@gmail.com';
$email_subject='New FOrm Submission';
$email_body="User Name:$name.\n".
               "User Email:$visitor_email.\n".
                "sublect:$sublect.\n".
                "User Massage:$massage";

$to='jardary250@gmail.com';
$header="From: $email_form\r\n";
$header .="Reply-To:$visitor_email\r\n";
mail($to,$email_subject, $email_body ,$header);

header("Location:contact.html")

?>