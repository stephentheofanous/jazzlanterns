<?php
$to      = 'jazzlanterns@gmail.com';
$from    = $_POST['email'];
$email   = $_POST['email'];
$subject = 'You Received A New Event Enquiry';
$message = "Message: ".$_POST["message"]."\nName: ".$_POST['name']."\nEmail: ".$_POST['email']."\nEvent date: ".$_POST['date']."";
$headers = 'From: '.$from."\r\n" .
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
	// resend

$to1      = $_POST['email'];
$from1    = 'jazzlanterns@gmail.com';
$email1   = "jazzlanterns@gmail.com";
$subject1 = 'Your Enquiry - The Jazz Lanterns';
$message1 = "Thank you for getting in touch! We will respond to your message as soon as we can.\n\nName: ".$_POST['name']."\nEmail: ".$_POST['email']."\nEvent date: ".$_POST['date']."\nMessage: ".$_POST["message"]."";
$headers1 = 'From: '.$from1."\r\n" .
        'Reply-To: '.$email1."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to1, $subject1, $message1, $headers1))
{
	echo'<script>$("#form").hide()</script>';
	echo'<div class="alert alert-success"><strong>Thank you for your message,<br>we will be in touch.</strong></div>';
	echo'<script>$("#reset")[0].reset()</script>';
}
else
{
	echo'<script>swal("oops", "confirmation email not sent!", "info")</script>';
}


	// end resend
}
else
{
	echo'<script>swal("oops", "email not sent!", "info")</script>';
}

if(mail($to1, $subject1, $message1, $headers1))
{
	echo'<script>$("#form2").hide()</script>';
	echo'<div class="alert alert-success"><strong>Thank you for your message,<br>we will be in touch.</strong></div>';
	echo'<script>$("#reset")[0].reset()</script>';
}
else
{
	echo'<script>swal("oops", "confirmation email not sent!", "info")</script>';
}


	// end resend
}
else
{
	echo'<script>swal("oops", "email not sent!", "info")</script>';
}
?>