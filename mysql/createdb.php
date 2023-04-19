<?php
//Creating Database
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
$qry = "CREATE DATABASE bca2077";
if($con === false)
{
    die('Connection cannot be established'. mysqli_connect_error());
}
if(mysqli_query($con,$qry))
{
    echo "Database Created Successfully";
}
else
{
    echo "Cannot Create Database" . mysqli_error($con);
}
mysqli_close($con);
?>