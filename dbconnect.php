<?php

$dbhost = "localhost";
$username = "root";
$password = "";
$database = "miniproject";

$conn= mysqli_connect($dbhost,$username,$password,$database);
if(!$conn)
{
    echo "connection failed...!";
    exit();
}

