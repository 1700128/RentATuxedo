<?php
#variables
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Puderman7";
$db = "smokki";

#connection to the database
$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);

# check connection
if($conn->connect_error) {
    echo "Connection was failed";
}
else{
    echo "Connection was succesful!";
}

?>
