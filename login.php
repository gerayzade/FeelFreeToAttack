<?php
//include config
require_once('config.php');

//include the user class, pass in the database connection
include('user.php');
$user = new User($db);

//check if already logged in move to home page
if($user->is_logged_in() ){ header('Location: index.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($user->login($username,$password)){ 
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    
    } else {
        $error[] = 'Wrong username or password or your account has not been activated.';
    }

}//end if submit
?>

<html>

    <head>
        <title>Log In</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <style>
            body {
                background: url(images/map01.jpg);
            }
        </style>
    </head>

    <body>
        
        <form class="sign-in" role="form" method="post" action="">
            
            <input type="text" name="username" id="username" placeholder="Username" tabindex="1" value="<?php if(isset($error)){ echo $_POST['username']; } ?>">
				<br/><br/>
            <input type="password" name="password" id="password" placeholder="Password" tabindex="3">
                <br/><br/>
            <input type="submit" name="submit" value="Login" tabindex="5">
        
        </form>
        
        <?php
        //check for any errors
        if(isset($error)){
            foreach($error as $error){
                echo '<p>'.$error.'</p>';
            }
        }
        ?>

    </body>
    
</html>