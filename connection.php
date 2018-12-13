<?php
#variables
$dbhost = "127.0.0.1:50473";
$dbusername = "azure";
$dbpassword = "6#vWHD_$";
$dbname = "localdb";

#connection to the database
$conn = new mysqli ($dbhost,$dbusername,$dbpassword,$dbname);

# check connection and announce if it doesn´t work
if($conn->connect_error) {
    echo "Connection failed";
}

?>
