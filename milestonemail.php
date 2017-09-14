<?php
//$mail=$_GET['mail']
$per=$_GET['per'];
echo $per;
$to = 'vinodraj8769@gmail.com';
$subject = 'Marriage Proposal';
$from = 'info@arwalglobalexim.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html>';
$message .= '<head><style>p{color:#080;font-size:18px;}</style></head>';
$message .= '<body><h1 style="color:#f40;">Hi !</h1>';
$message .= '<p>Your Status is....</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
   header("Location: client.php"); /* Redirect browser */
   	die();
} else{
    echo 'Unable to send email. Please try again.';
}
?>