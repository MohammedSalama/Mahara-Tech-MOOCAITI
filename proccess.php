<?php 

// var_dump($_POST);

// echo $_POST['name'].'<br>'. $_POST['email'] . '<br>' . $_POST['password'] . '<br>' . $_POST['gender'];


// name 
if (isset ($_POST['name']) && !empty($_POST['name']))
{
    echo $_POST['name'];
}
else
{
    echo "Please Enter Your Name";
}

echo '<br>';

// E-mail
if (isset ($_POST['email']) && !empty($_POST['email']))
{
    echo $_POST['email'];
}
else
{
    echo "Please Enter Your E-mail";
}

echo '<br>';

// Password 

if (isset ($_POST['password']) && !empty($_POST['password']))
{
    echo $_POST['password'];
}
else
{
    echo "Please Enter Your password";
}

echo '<br>';

//Gender 
if (isset ($_POST['gender']) && !empty($_POST['gender']))
{
    echo $_POST['gender'];
}
else
{
    echo "Please Enter Your Gender";
}


?>