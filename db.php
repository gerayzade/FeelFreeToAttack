<?php
$db = mysqli_connect("127.0.0.1", "user213", "retadasd", "db123");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>