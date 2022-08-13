<?php

// Check for errors 
$errors_arr = array();
if (isset($_GET['error_fields']))
{
    $errors_arr = explode(",", $_GET['error_fields']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "HTML-FORM"; ?></title>
</head>
<body>
    <form action="proccess_db.php" method="POST" >
        <!-- Name  -->
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <!-- E-mail  -->
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <!-- Distance  -->
        <br>
        <!-- Password  -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <!-- Distance  -->
        <br>
        <!-- Gender  -->
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="gender" value="female">Female
        <input type="radio" name="gender" id="gender" value="male">Male
        <!-- Distance  -->
        <br>
        <input type="submit" name="submit" value="Register">
    </form>
    
</body>
</html>