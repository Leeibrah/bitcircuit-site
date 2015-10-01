<?php
header('Content-type: application/json');



//Do what you need to do with the info. The following are some examples.
//if ($return["favorite_beverage"] == ""){
//  $return["favorite_beverage"] = "Coke";
//}
//$return["favorite_restaurant"] = "McDonald's";

if ($_POST) {

    $replyToName = $_POST['name'];
    $replyToEmail = $_POST['email'];

    //Client subject typed at the system
    $mailSubject=$_POST['subject'];
    $mailBody = $_POST['message'];


//$senderName='Sender Name';
//$senderName=data[''];
$senderEmail='contact@teamsync.co';

    //CC

//$mail->addCC('magige@teamsync.co');
//$replyToEmail='sasa@sasa.com';
//$replyToName='New User';

$receiverName='BitCircuit Team';
$receiverEmail='contact@teamsync.co';
//$receiverEmail='magigedaniel@gmail.com';


//$mailBody='Message body from a contact';


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
    $response['type']='error';
    $response['text']='Failed in mail send';
    // echo "failure";
    echo json_encode($response);
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $response['type']='success';
    $response['text']='Thank you for your message will get back to you soon';
    //echo 'Message has been sent';
    echo json_encode($response);
}

}
else {
    $response['type']='error';
    $response['text']='Failed';
   // echo "failure";
    echo json_encode($response);
}