<?php
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$body = $_POST['message'];
		$to = "inaam_kabbara@hotmail.com";
		$subject = "Email from my website";
		if(mail($to, $subject, $body)){
			echo "Thank You!";
		}
		else{
			echo "not sent";
		}
	}
?>