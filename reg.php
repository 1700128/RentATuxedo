<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "127.0.0.1:50473";
	$mysql_username = "azure";
	$mysql_password = "6#vWHD_$";
	$mysql_database = "smokki";

	$u_fname = filter_var($_POST["user_fname"], FILTER_SANITIZE_STRING); //filter_var usage for cleaner inputs and also to check if values are empty.
	$u_lname = filter_var($_POST["user_lname"], FILTER_SANITIZE_STRING);
	$u_address = filter_var($_POST["user_address"], FILTER_SANITIZE_STRING);
	$u_city = filter_var($_POST["user_city"], FILTER_SANITIZE_STRING);
	$u_postalcode = filter_var($_POST["user_postalcode"], FILTER_SANITIZE_STRING);
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$u_password = filter_var($_POST["user_password"], FILTER_SANITIZE_STRING);

	if (empty($u_fname)){
		die("Please enter your First name");
	}
	if (empty($u_lname)){
		die("Please enter your Last name");
	}
	if (empty($u_address)){
		die("Please enter your Address");
	}
	if (empty($u_city)){
		die("Please enter your City");
	}
	if (empty($u_postalcode)){
		die("Please enter your Postal Code");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if (empty($u_password)){
		die("Please enter password");
	}	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO registered_users (user_fname, user_lname, user_address, user_city, user_postalcode, user_email, user_password) VALUES(?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
	$statement->bind_param('sss', $u_fname, $u_lname, $u_address, $u_city, $u_postalcode, $u_email, $u_password); //bind values and execute insert query
	
	if($statement->execute()){
	echo "Hello " . $u_fname . "!, your registration has been succesful!";
	}else{
		echo $mysqli->error; //show mysql error if any
	}
}

?>