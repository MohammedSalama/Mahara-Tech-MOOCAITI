<?php 

// echo $_POST['name'];
// echo "<br>";
// echo $_POST['email'];

// Validation 

$error_fields= array();
if (! (isset($_POST['name']) && !empty($_POST['name'])))
{
    $error_fields[] = "name";
}

if (! (isset($_POST['email']) && filter_input(INPUT_POST , 'email' , FILTER_VALIDATE_EMAIL) ))
{
    $error_fields[] = "name";
}

if (! (isset($_POST['password']) && strlen($_POST['password']) > 5 ))
{
    $error_fields[] = "password";
}

if($error_fields)
{
    header("Location: form.php?error_fields=".implode(",", $error_fields));
    exit;
}

// Connect to DB 

$conn = mysqli_connect("location", "root" , "iti","blog");

if (! $conn)
{
    echo mysqli_connect_error();
    exit;
}

// Escape any special character to avoid SQL Injection 

$name = mysqli_escape_string($conn , $_POST['name']);
$email = mysqli_escape_string($conn , $_POST['email']);
$password = mysqli_escape_string($conn , $_POST['password']);

// Insert the data 
$query = "INSERT INTO `users` (`name` , `email` , `password`) VALUES ('".$name . "', '".$email . "',
'".$password . "')";

if (mysqli_query($conn , $query))
{
    echo "Thank you! , your information has been saved";
}

// Close the connection 
mysqli_close($conn);

