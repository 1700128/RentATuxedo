<!DOCTYPE HTML>
<html lang="en">
  <head>
  <!--Connection to database smokki-->
  <?php
  include ('reg.php');
  include ('dbcontroller');
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <title>Registration</title>
    <style>
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        background-color: #000;
        color: #FFF;
        padding: 1% 0;
        font-size: 1.2em;
    }
    .navbar-brand {
        float:left;
        min-height: 55px;
        padding: 0 15px 5px;
    }    
    .bg-black {
        background-color: #000;
    }
    .form-table {
	background: #000;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #FFF;
	border-radius: 4px;
	padding: 20px 20px;
}

.inputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.form-table td {
	padding: 15px 0px;
}
.btnRegister {
	padding: 30px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 20px;
}
body{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
    
  
   
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="index.php"><img src="Pictures/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Rental</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link" href="contact.php">Contact</a>
    </div> <!--Navbar ja sivut, linkit vielä puuttuu muille sivuille-->
  </div>
</nav>
 	<div class="container text-center">
 	
 	<h2>User Registration </h2> <br>
 	<form class="form-horizontal" form method="post" action="">
     <table border="0" width="500" align="center" class="form-table">
     <?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
     <tr>
		<td>First Name</td>
         <td><input type="text"  class="inputBox" name="user_fname" placeholder="Enter Your First Name"></td>
        </tr>
        <tr>
		<td>Last Name</td>
         <td><input type="text" class="inputBox" name="user_lname" placeholder="Enter Your Last Name" ></td>
        </tr>
        <tr>
		<td>Address</td>
        <td><input type="text"  class="inputBox" name="user_address" placeholder="Enter Your Address"></td>
        </tr>
        <tr>
		<td>City</td>
        <td><input type="text" class="inputBox" name="user_city" placeholder="Enter Your City"></td>
        </tr>
        <tr>
		<td>Postal Code</td>
        <td><input type="text" class="inputBox" name="user_postalcode" placeholder="Enter Your Postal Code"></td>
        </tr>
        <tr>
		<td>Email</td>
        <td><input type="email" class="inputBox" name="user_email" placeholder="Enter Your Email"></td>
        </tr>
        <tr>
		<td>Password</td>
        <td><input type="password" class="inputBox" name="user_password" placeholder="Enter Your Password"></td>
        </tr>
        <tr>
		<td colspan=2>
        <input type="checkbox" name="terms"> I accept Terms and Conditions       <input type="submit" name="register-user" value="Register" class="btRnegister"> </td>
        </tr>
        </table>
		</form>
    
 	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>