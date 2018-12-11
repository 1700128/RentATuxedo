<!DOCTYPE html>
<html>

<!--Connection to database smokki, list of variables and sql query to send them into database smokki-->
  <?php
   include ('connection.php');
   error_reporting(0);
   $userName = $_POST['fname'];
   $userLname = $_POST['lname'];
   $userAddress = $_POST['address'];
   $userCity = $_POST['city'];
   $userPostalCode = $_POST['zipcode'];
   $userEmail = $_POST['email'];
   $userPassword = $_POST['password'];
   
   if (!$_POST ['submit']) {
       echo "Please fill all the required fields";
        }
        else{
            $sql = "INSERT into smokki (First Name, Last Name, Address, City, Postal Code, Email, Password)
            values ('$userLname','$userLname','$userAddress','$userCity', '$userPostalCode', '$userEmail' , '$userPassword') ";
            
            if (mysqli_query($conn, $sql)){
                echo "Registration was succesful, now you can Login";
            }
            
            else{
                echo "Something went wrong, please try again";
            }
        }
  ?>
<head>  
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h2> Your email address will be your Username for Login in </h2>
    <form action="registration.php" method="POST"> <!--specifying how to send data and use post-method for security reasons-->
        First Name: <input type="text" name="fname" required>
        Last Name: <input type="text" name="lname" required>
        Address: <input type="text" name="address" required>
        City: <input type="text" name="city" required>
        Postal Code: <input type="number" name="zipcode" required>
        Email: <input type="email" name="email" required>
        Password: <input type="password" name="password" required>
        <input type="submit" name="submit" value="Registrate" required>

    </form>
</body>
</html>