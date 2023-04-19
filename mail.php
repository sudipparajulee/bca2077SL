<?php
$to='sudip@lict.edu.np';
$subject='To submit document on mail,hello its me aakash';
$from ='aakashkandel9777@gmail.com';

//To send HTML mail,the content-type header must be set

$headers='MIME-version:1.0'."\r\n";
$headers.='content-type:text/html;charset-iso-8859-1'."r\n";

//create mail header
$headers.='From: '.$from."r\n".
	'Reply-To:'.$from."\r\n".
	'X-mailer:php/'.phpversion();
	
//compose a simple HTML email message

$message='<html><body>';
$message.='<h1 style="color:#f40;">Hello,there!</h1>';
$message.='</body></html>';

//sending mail
if(mail($to,$subject,$message,$headers,$from))
{
echo "your email is sent successfully";
}
else
{
echo "unable to send email";
}
?>