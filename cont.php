<?php
//
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

    //mysql credentials
	$mysql_host = "127.0.0.1:50473";
	$mysql_username = "azure";
	$mysql_password = "6#vWHD_$";
	$mysql_database = "localdb";

	$u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //filter_var usage for cleaner inputs and also to check if values are empty.
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$u_text = filter_var($_POST["user_text"], FILTER_SANITIZE_STRING);

	if (empty($u_name)){
		die("Please enter your name");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if (empty($u_text)){
		die("Please enter text");
	}	
	
	//print output text
	print "Hello " . $u_name . "!, we have received your message and email ". $u_email;
	print "We will contact you very soon!";
}
?>