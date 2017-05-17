<?php
//@author: Michael Butchko
//Catches errors on startup
  ini_set('display_errors', True); 
  error_reporting(E_ALL | E_STRICT); 
  
//provides my email (file not uncluded)
include('my_email.php'); 
//provides php functions for server side checking users input
include('php_functions.php'); 

//Variable for email confirmation use, set to the empty string value
$mail_status = "";

// ---- Validation ----
//Checks if the form was submitted
if (isset($_POST['submit'])) {

	//Checks if the senders name, email, subject or message are empty
	//If it is empty, an error message is sent to the user.
	//Note : Html form validation should catches this
	if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) 
		|| empty($_POST['email'])) {
		$mail_status = "Fill out all fields";}
	
		//checks if email is in the proper format
		//If not an error is thrown to the user
			else if (!isEmail($_POST['email'])){
					$mail_status = "Incorrect email format";}
		
			//checks if name contains only letters
			//If not an error is thrown to the user
				else if (!isName($_POST['name'])){
						$mail_status = "Your name can only contain letters and spaces";}

// ---- Preparing email ----
//All inputs are correct
//Proceeds to send the users email
else
{
	// Define $name $subject, $email, and password from the form 
	$from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	$subject2 = "Copy of your form submission";

	//filters the email address
	$from = filter_var($from, FILTER_SANITIZE_EMAIL);
	//filters out new lines in the email subject
	$subject = str_replace(array("\r","\n"),array(" "," "),$subject);
	
    	//Creating the message for the sender and a confirmation message					
   		$message = $name . " " .  " wrote the following:" . "\n\n" . $message;
    	$message2 = "Here is a copy of your message " . $name . "\n\n" . $message;

			//the recipient 
   			$headers = "From:" . $from;
   			//the sender
  			$headers2 = "From:" . $to;
 
 // ---- Sending mail ----   	
//Sending the emails to the user and recipient 
  	$mail = mail($to,$subject,$message,$headers); //sends the email
  	mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  	
  	 //email not sent, error message	
  	if(!$mail) {
  		$mail_status = "Mail NOT sent." . $name . ", please check your internet connection.";} 
  		//confirmation to the user
		else {
  			$mail_status = "Mail sent. Thank you " . $name . ", I will contact you shortly.";}
  	


}
}
?>