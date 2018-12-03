<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h2> Your email address will be your Username for login in </h2>
    <form action="create.php" method="POST"> <!--specifying how to send data and use post-method for security reasons-->
        Name: <input type="text" name="fname">
        Last Name: <input type="text" name="lname">
        Address: <input type="text" name="address">
        City: <input type="text" name="city">
        Postal Code: <input type="number" name="zipcode">
        Email: <input type="email" name="email">
        Password: <input type="password" name="password">
        <input type="submit" name="submit" value="Registrate">

    </form>
</body>
</html>