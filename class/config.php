<?php
$host = "localhost";
$dbuser = "admin";
$password = "passarif";
$database = "eval";
$conn=mysqli_connect($host,$dbuser,$password,$database);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>