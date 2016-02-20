<?php

     $fname=$_POST["fname"];
     $lname=$_POST["lname"];

     $email=$_POST["email"];
     $product = $_POST["product"];
     $message=$_POST["message"];
     
$to = 'info@hancopipefittings.com';

$subject = 'New Contact Enquery';

$message = 'FROM: '.$name."\n\n".' Email: '.$email."\n\n".'Message: '.$message;

$headers = 'From: info@hancopipefittings.com';

$user = $email;

$usersubject = "Hanco Pipe & Fittings-Thank You";

$userheaders = "From: info@hancopipefittings.com\n";

$usermessage = "Hi there!\n\nWe are glad to hear from you, and will get in touch with you very soon. 

Thank you for contacting.";

 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 

    $mail=mail($to, $subject, $message, $headers);
    mail($user,$usersubject,$usermessage,$userheaders);
    header('Location:index.php');
  }
else
{
    echo "Something Went Wrong!!";
}
?>
