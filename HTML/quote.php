<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "New Request Order for Steel Product"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$fname = stripslashes($_REQUEST['fname']); // sender's name
$lname = stripslashes($_REQUEST['lname']); // sender's name
$company = stripslashes($_REQUEST['company']); // sender's name
$address = stripslashes($_REQUEST['address']); // sender's name
$city = stripslashes($_REQUEST['city']); // sender's name
$phone = stripslashes($_REQUEST['phone']);
$selectbasic = stripslashes($_REQUEST['selectbasic']); 
$email = stripslashes($_REQUEST['email']); // sender's email
$textarea = stripslashes($_REQUEST['textarea']); 

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "First Name: ".$fname."\r\n";  // add sender's name to the message
$msg .= "Last Name: ".$lname."\r\n";  // add sender's name to the message
$msg .= "Company: ".$company."\r\n";  // add sender's name to the message
$msg .= "Address: ".$address."\r\n";  // add sender's name to the message
$msg .= "City: ".$city."\r\n";  // add sender's name to the message
$msg .= "Phone: ".$phone."\r\n";  // add sender's email to the message
$msg .= "Product: ".$selectbasic."\r\n";  // add sender's email to the message
$msg .= "E-mail: ".$email."\r\n";  // add sender's email to the message
$msg .= "Message: ".$textarea."\r\n";  // add sender's email to the message
$msg .= "Subject: ".$subject."\r\n\n"; // add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "---Message--- \r\n";
$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("location:index.html");
	//This is the message that will be shown when the message is successfully send
	
} else {
	echo 'Die Nachricht konnte nicht gesendet werden.';   //This is the message that will be shown when an error occured: the message was not send
}

?>