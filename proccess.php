<?php 

// var_dump($_POST);

// echo $_POST['name'].'<br>'. $_POST['email'] . '<br>' . $_POST['password'] . '<br>' . $_POST['gender'];

if (isset ($_POST['email']) && !empty($_POST['email']))
{
    echo $_POST['email'];
}
else
{
    echo "Please Enter Your Email";
}


?>