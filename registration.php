<!DOCTYPE HTML>
<html lang="en">
  <head>
  <!--Connection to database smokki-->
  <?php
   
   include ('reg.php');

  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <title>Contact</title>
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
 	
 	<h1>User Registration. </h1> <br>
 	<fform class="form-horizontal" form method="post" action="registration.php">
     <div class= "form-group">
		Name : <input type="text" name="user_name" placeholder="Enter Your Name" /><br />
        </div>
     <div class= "form-group">
        Address : <input type="text" name="user_address" placeholder="Enter Your Address" /><br />
        </div>
     <div class= "form-group">
		Email : <input type="email" name="user_email" placeholder="Enter Your Email" /><br />
        </div>
     <div class= "form-group">
		Password : <input name="user_password" /><br />
        </div>
		<input type="submit" value="Register" />
		</form>
 	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>