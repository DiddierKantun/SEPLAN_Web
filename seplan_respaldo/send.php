<?php 
$ToEmail = 'email@yourdomain.com'; 
$EmailSubject = 'XlntCode Message'; 

$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=utf-8\r\n"; 


$MESSAGE_BODY = "Name: ".$_POST["name"]."<br/>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br/>";
$MESSAGE_BODY .= "Phone: ".$_POST["phone"]."<br/>";  
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])."<br/>"; 


mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

?>