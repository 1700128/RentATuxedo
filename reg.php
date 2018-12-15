<?php
//
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

    //mysql credentials
	$mysql_host = "127.0.0.1:50473";
	$mysql_username = "azure";
	$mysql_password = "6#vWHD_$";
	$mysql_database = "smokki";

	$u_name = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
	$u_password = filter_var($_POST["password"], FILTER_SANITIZE_STRING); //filter_var usage for cleaner inputs and also to check if values are empty.
	$u_cpassword = filter_var($_POST["cpassword"], FILTER_SANITIZE_STRING);

	if (empty($u_name)){
		die("Please enter your name");
	}
	if (empty($u_address)){
		die("Please enter your address");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if ($password==$cpassword){
		die("Passwords were incorrect");
	}	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO user (username, password) VALUES(?, ?)"); //prepare sql insert query
	$statement->bind_param('ss', $u_name, $u_password); //bind values and execute insert query
	
	if($statement->execute()){
	echo "Hello " . $u_name . "!, your registration was succesful!";
	}else{
		echo $mysqli->error; //show mysql error if any
	}
}
?>