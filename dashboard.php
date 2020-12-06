<?php
//include auth_session.php file on all user panel pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
         <p><a href="upload.php">Upload</a></p>
         <p><a href="download.php">download</a></p>  
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>