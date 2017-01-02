<?php
//include config
require_once('config.php');

//include the user class, pass in the database connection
include('user.php');
$user = new User($db);

//check if already logged in move to home page
if(!$user->is_logged_in()){ header('Location: login.php'); } 
?>

<html>

    <head>
        <title>User Info</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <style>
            body {
                background: url(images/bg.jpg);
            }
        </style>
    </head>

    <body>
        
        <?php
            include('db.php');
            
            $query1 = mysqli_query($db, "SELECT * FROM users WHERE id = '" .$_SESSION['id']."'"); 
            $row1 = mysqli_fetch_array($query1);
        ?>
        
        <div class="user-info">
            <?php 

                if ($row1['group'] != 'root') {
                    echo '<img src="'. $row1['pp'] .'"/>
                        <span>Name: ' . $row1['name'] . '</span>
                        <span>Surname: ' . $row1['surname'] . '</span>
                        <span>Major: ' . $row1['major'] . '</span>
                        <span>Graduation Year: ' . $row1['year'] . '</span>'; 
                } else {
                    $query2 = mysqli_query($db, "SELECT * FROM users ORDER BY id ASC");

                    echo '<img src="images/root.jpg"/>';
                    while ($row2 = mysqli_fetch_array($query2)) {
                        echo '<span>'. $row2['username'] .' (password: '. $row2['password'] .')</span>';
                    }
                }

            ?>
            
            <div>
                <br/><a href="logout.php">[ LOG OUT ]</a>
            </div>
        </div>

    </body>
    
</html>