<?php 

    $fname = $_POST['fname'];
    $lname = $_POST['lname'] ;
    $address = $_POST['address'] ;
    $city = $_POST['city'] ;
    $zipcode = $_POST['zipcode'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$_POST ['submit']) {
        echo "All fields are required";
    }
    else{ $sql = "INSERT into smokki (First Name, Last Name, Address, City, Postal Code, Email, Password)
    values('$fname','$lname','$address','$city','$zipcode','$email','$password' ";
    
        if (mysqli_query($conn, $sql)) {
            echo "Data creation succesfull, now you can Login";
}   
        else{
            echo "Something went wrong! Please try again.";
}
?>