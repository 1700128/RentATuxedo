<?php
#variables
$dbhost = "127.0.0.1:50473";
$dbusername = "azure";
$dbpassword = "6#vWHD_$";
$dbname = "smokki";

#connection to the database
$conn = mysqli_connect($dbhost,$dbusername,$dbpassword) or die("Unable to connect");
mysqli_select_db($conn,$dbname);

?>
