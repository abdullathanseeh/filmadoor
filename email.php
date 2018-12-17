<?php
//print_r($_POST);die;
if(isset($_POST['email'])){
	    $name="User";
	    $email=$_POST['email'];
        $response_id=$_POST['response_id'];
		$subject = 'Payment succesful with International Film Festival';
		$body="Thank you for the payment. You have been successfully enrolled."
	    require 'PHPMailer/PHPMailerAutoload.php';

	    $mail = new PHPMailer;

		//Enable SMTP debugging. 
		$mail->SMTPDebug = 3;
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "smtp.gmail.com";
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password     
		$mail->Username = "abdulla.thanseeh@simelabs.com";
		$mail->Password = "z4yedRaseel";
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls";                           
		//Set TCP port to connect to 
		$mail->Port = 587;                                   

		$mail->From = "abdulla.thanseeh@simelabs.com";
		$mail->FromName = "Film Festival";

		$mail->addAddress($email, $name);

		$mail->isHTML(true);

		$mail->Subject = $subject;
										
		$mail->Body = $body;
										
		if(!$mail->send()){
			echo 0;
		}
		else {
			echo 1;
		}
	}
else{
	echo 0;
}	

?>