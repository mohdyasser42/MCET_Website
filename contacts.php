<?php
	$name = $_POST["name"];
 	$email = $_POST["email"];
 	$sub = $_POST["subject"];
 	$msg = $_POST["message"];
	
	$to = "mohd535643@gmail.com";
	$subject = "<h2>Mail from student</h2>";
	
	$message = 
 "Sudent Name: ".$name."\r\n".
 "Student Email: ".$email."\r\n".
 "Subject: ".$sub."\r\n".
 "Student Query: ".$msg;
	$headers = "From: ".$email;
	
	
	if($email!=NULL)
	{ 
        mail($to,$sub,$message,$headers);
		echo "<script> alert('Thank you mate. We will contact you shortly')</script>";
		echo "<script>window.close();</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong!!')</script>";
		echo "<script>window.close();</script>";
	}
?>