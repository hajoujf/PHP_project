<?php
function send_mail($to_email,$use){
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .="From:brazialaa@gmail.com";
    $subject = "Reset Your Password";
    $include_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    /* Uncomment below to include symbols */
    /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
/* To send HTML mail, the Content-type header must be set
$header  .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 */
// Compose a simple HTML email message
$body = '<html><body>';
$body .= '<h1 style="color:#966F33;">Reset Password</h1>';
$body .= '<h2>';
$body .= "$randomString";
$body .= '</h2>';
$body .= '<p style="color:#FF0000;font-size:18px;">Pay attention - Put the password youve got here in the second field</p>';
$body .= '</body></html>'; 
   /* $body="
    '<html>
    <body>
    <h1>Reset Password </h1><p>Reset your password in this link </p> 
    <a href='CheckReset.php'>Reset </a> This is your temporary password<h3>$randomString </h3>
    Pay attention - Put the password youv'e got here in the second field
    </body> 
    </html>'";*/
    mail($to_email, $subject, $body, $header);
   
    return $randomString;
}
/*$to_email = "+972504337676";
$subject = "Test email to send from XAMPP";
$body = "Hi, This is a test mail to check how to send mail from localhost via gmail.";
$header="From:brazialaa@gmail.com";
if(mail($to_email,$subject,$body,$header)){
    echo "Email successfully sent to $to_email";
}
else{
    echo "Email sending failed";
}*/

?>