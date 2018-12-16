<!DOCTYPE HTML>
<html lang="en">
  <head>
  <!--Connection to database smokki-->
  <?php
   include ('connection.php');

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
    pull.right{
    	float:right;
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
      <a class="nav-item nav-link" href="login.php">Rental</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link" href="contact.php">Contact</a>
    </div> 
    <div class="pull-right">
        <ul class="nav navbar-nav">
            <a href="index.php"><li><input name="logout" type="submit" class="btn navbar-btn" name="logout" id="logout_btn"  value="Log Out"/></li></a>
        </ul>     
</div><!--Navbar ja sivut,-->
  </div>
</nav>
 	<div class="container text-center">
 	
 	<h2>Welcome
 	<?php echo $_SESSION['username']?>
 	 </h2>
      <div class="row">
  <div class="col-sm-6">
  <img src="Pictures/suit.png" class="img-responsive"> </div>
  <div class="col-sm-6">
  <form method="post" action="contact.php">
		Name : <input type="text" name="user_name" placeholder="Enter Your Name" /><br />
		Email : <input type="email" name="user_email" placeholder="Enter Your Email" /><br />
		Message : <textarea name="user_text"></textarea><br />
		<input type="submit" value="Submit" />
		</form>
		<?php
        if(isset($_POST['logout'])) {
            session_destroy();
            header('location:index.php');}
    
		?>
  </div>
  
</div> 
 	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>