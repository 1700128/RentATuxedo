<?php
//
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "12345678";
	$mysql_database = "smokki";

	$u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //filter_var usage for cleaner inputs and also to check if values are empty.
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$u_size = filter_var($_POST["user_size"], FILTER_SANITIZE_STRING);
    $u_date = filter_var($_POST["user_date"], FILTER_SANITIZE_DATE);
    $u_edate = filter_var($_POST["end_date"], FILTER_SANITIZE_DATE);
	if (empty($u_name)){
		die("Please enter your name");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if (empty($u_size)){
		die("Please enter size in S, M, L or XL");
	}	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO users_rent (user_name, user_email, user_size, user_date, end_date) VALUES(?, ?, ?, ?)"); //prepare sql insert query
	$statement->bind_param('sss', $u_name, $u_email, $u_size, $u_date, $u_edate); //bind values and execute insert query
	
	if($statement->execute()){
	echo "Hello " . $u_name . "!, your rental is registered. An email will be sent to you for more details!";
	}else{
		echo $mysqli->error; //show mysql error if any
	}
}

?>