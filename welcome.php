<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body{   
    background: #eee;  
}  
    </style>
</head>
<body>
    
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Hospital website.</h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="home.html" class="btn btn-success">CLICK HERE GO TO HOME</a><br><br>
        <img src="https://www.hoysalacollege.com/images/kuvempu.jpg" alt="Avatar" class="image" style="width:100%" height="400">

    </p>
    
</body>
</html>