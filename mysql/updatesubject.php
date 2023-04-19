<?php
//Connection variables
$server = "localhost";
$username = "root";
$password ="";
$database = "bca2077";

//create connection
$con = mysqli_connect($server,$username,$password,$database);

//check connection
if($con === false)
{
    die ('Error on Connection ' .mysqli_connect_error());
}

//create query
// $qry = "UPDATE subjects SET name='Rijan' WHERE id=1";


//execute query
if(mysqli_query($con,$qry))
{
    echo "Action Successfull";
}
else
{
    echo "Error on action ".mysqli_error($con);
}

$con->close();

?>