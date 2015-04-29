<?php
// Check for empty fields
if(empty($_POST['email']) 		||
   empty($_POST['soundcloud_private_link'])	||
   empty($_POST['description'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$email_address = $_POST['email'];
$soundcloud = $_POST['soundcloud_private_link'];
$message = $_POST['description'];
	
// Create the email and send the message
$to = 'contact.deceptionrec@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website submission form.\n\n"."Here are the details:\n\n Email:\n$email_address\n\n Soundcloud:\n$soundcloud \n\n Message:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body);
return true;			
?>