<?php

if (isset($_POST['email'])) {

    $mail= $_POST["email"];
    $name= $_POST["name"];
    $from= $_POST["email"];
    $phone= $_POST["phone"];
    $message= $_POST["message"];


    $to ='info@t4p.co';

    if (isset($_POST['phone'])) {
    $subject = "Phone Number: " .$phone. "\n\n" ."Name: " .$name ."\n\n";
    }

    $message = "Message: ". $message;

   $headers = "From: $from\n";
   $headers .= "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\n";
   if(mail($to, $subject, $message, $headers)){
       echo 'ok';
   }
   else{
       echo 'error';
   }


   header('Location: ' . "t4p.php?mailsent");

}



?>