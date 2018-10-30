<?php 

require 'PHPMailer-master/PHPMailerAutoload.php';
$adminemail = "example@example.org"; 

$to ="abac@gmail.com";
$mail = new PHPMailer;
$mail->isSMTP();

/*Outlook host is smtp.office365.com*/
$mail->Host = "smtp.office365.com";
$mail->Port = "587";
/*tls true*/
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username = $adminemail;
$mail->Password = "example@123!!";

/* setfrom and username should be always same */
$mail->setFrom($adminemail);
$mail->addAddress($to); 
$mail->Subject = "test email";
$mail->msgHTML("<h1>Testing body</h1>");
if (!$mail->send()) {
	echo "Mailer Error";
	echo "<pre>";
	print_r($mail);
	die('fail');
}else{
	echo "success";
	die('done');
}

