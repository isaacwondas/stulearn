<?php
    // Enter your host name, database username, password, and database name.
    // password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","Stulearn");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>