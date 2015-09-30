<?php
header('Content-type: application/json');
//Get data posted from Contact us

$response = $_POST;

//Do what you need to do with the info. The following are some examples.
//if ($return["favorite_beverage"] == ""){
//  $return["favorite_beverage"] = "Coke";
//}
//$return["favorite_restaurant"] = "McDonald's";
$response['Ok'];
$response["json"] = json_encode($response);
echo json_encode($response);


$senderName='Sender Name';
$senderEmail='magige@mephatech.com';
$replyToEmail='sasa@sasa.com';
$replyToName='New User';

$receiverName='Receiver Name';
$receiverEmail='magigedaniel@gmail.com';

$mailSubject='Subject';
$mailBody='Message body from a contact';


require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ns5.hostyetu.com;ns6.hostyetu.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mephatec';                 // SMTP username
$mail->Password = '2014hcetahpem';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($senderEmail, 'BitCircuit Contacted');
$mail->addAddress($receiverEmail, $receiverName);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($replyToEmail, $replyToName);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $mailSubject;
$mail->Body    = $mailBody;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}