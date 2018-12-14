<?php
  if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
        }
  if(!isset($error_message)) {
      if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
      $error_message = "Invalid Email Address";
            }
        }
  /* Validation to check if Terms and Conditions are accepted */
  if(!isset($error_message)) {
	  if(!isset($_POST["terms"])) {
	  $error_message = "Accept Terms and Conditions to Register";
		}
    }
  if(!isset($error_message)) {
	  require_once("dbcontroller.php");
	  $db_handle = new DBController();
	  $query = "INSERT INTO registered_users (user_fname, user_lname, user_address, user_city, user_postalcode, user_email, user_password) VALUES
	  ('" . $_POST["userFname"] . "', '" . $_POST["userLname"] . "', '" . $_POST["userAddress"] . "', '" . $_POST["userCity"] . "', '" . $_POST["userPostalcode"] . "', '" . $_POST["userEmail"] . "', '" . md5($_POST["password"]) . "')";
	  $result = $db_handle->insertQuery($query);
	  if(!empty($result)) {
		  $error_message = "";
		  $success_message = "You have registered successfully!";	
		  unset($_POST);
	  } else {
		  $error_message = "Problem in registration. Try Again!";	
		}
    }
}
  }
?>