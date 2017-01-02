<?php require('config.php');
//include the user class, pass in the database connection
include('user.php');
$user = new User($db);

//logout
$user->logout(); 

//logged in return to index page
header('Location: login.php');
exit;
?>