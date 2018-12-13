<?php
#variables
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "smokki";

#connection to the database
$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);

# check connection and announce if it doesn´t work
if($conn->connect_error) {
    echo "Connection failed";
}

?>
