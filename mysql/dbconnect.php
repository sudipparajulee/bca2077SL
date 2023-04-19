<?php

//Creating Connection
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if($con === false)
{
    die('Connection cannot be established'. mysqli_connect_error());
}

else
{
    echo "Connection Established Successfully";
}

?>