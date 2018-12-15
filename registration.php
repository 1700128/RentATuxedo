<?php
include ('connection.php');


?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <title>Registration Page</title>
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
    
    body, html {
    	height:100%;
    } 
    
    .bg {
        background-image: url("Pictures/login.jpg");
        height: 100%;
        background-position: center;
  		background-repeat: no-repeat;
  		background-size: cover;
  		}
    

    
    #main-wrapper {
    	width:500px;
    	margin: 0 auto;
    	background:white;
    	padding:5px;
    	border-radius:10px;
    	border: 2px solid #FFF;
    
    }
    
    .avatar {
    	width:100px;
    	text-align: center;
    }
    .myform {
    	width:450px;
    	margin: 0 auto;
    
    }
    .inputvalues {
    	width:430px;
    	margin: 0 auto;
    	padding: 5px;
    	
    }
    #signup_btn {
    margin-top:10px;
    background-color: #3498db;
    padding:5px;
    color:white;
    width:100%;
    font-size:18px;
    text-align:center;
    
    }
    #back_btn {
    margin-bottom:20px;
    margin-top:10px;
    background-color: red;
    padding:5px;
    color:white;
    width:40%;
    font-size:18px;
    text-align:center;
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
<div class="bg" </div>
<div id="main-wrapper">


<center><h2>Registration Form</h2>
<img src="Pictures/avatar.png" class="avatar"/>
	</center>
<form class="myform" action="registration.php" method="post">
<label><b> Username:</b></label><br>
<input name="username" type="text" class="inputvalues" placeholder="Username" required/><br>
<label><b> Password:</b></label><br>
<input name="password" type="password" class="inputvalues" placeholder="Password" required/><br>
<label><b>Confirm Password:</b></label><br>
<input name="cpassword" type="password" class="inputvalues" placeholder=" Confirm password" required/><br>
<input type="submit" id="signup_btn" value="Sign Up"/><br>
<input type="button" id="back_btn" value="<< Back to Login"/>
</form>	

<!--submit-button functionality,variables,passwords matching-->
<?php
    if(isset($_POST['submit_btn'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password==$cpassword){
            $query= "select * from user WHERE username='$username'";
            $query_run = mysqli_query($conn,$query);

            if(mysqli_num_rows($query_run)>0){
                //username is already taken
                echo '<script type="text/javascript"> alert("User already exist! Try another username".)</script>';
            }
            {
                $query = "insert into user values('$username','$password')";
                $query_run = mysqli_query($conn,$query);

                if($query_run){
                    echo '<script type="text/javascript"> alert("User succesfully registered! Go to Login Page".)</script>';

                }
                else{
                    echo '<script type="text/javascript"> alert("Error!".)</script>';

                }
            }
        }
    }
?>

</div>
 	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>