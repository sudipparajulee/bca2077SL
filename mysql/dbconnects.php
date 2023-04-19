<?php
//Creating Connection With Database
$server = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

$con = mysqli_connect($server,$username,$password,$database);

if($con === false)
{
    die('Connection cannot be established'. mysqli_connect_error());
}

else
{
    echo "Connection Established Successfully";
}

?>