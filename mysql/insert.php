<?php 
//Creating Connection Variables
$server = "localhost";
$username = "root";
$password = "";
$database = "bca2077";

//Create Connection
$con = mysqli_connect($server,$username,$password,$database);

//check connection
if($con === false)
{
    die("Error on connection" . mysqli_connect_error());
}

//create query
$qry = "INSERT INTO students(id,name,phone,address) VALUES (3,'Aakash','988888896','Nawalpur')";

//execute query
if(mysqli_query($con,$qry))
{
    echo "Data inserted successfully";
}

else
{
    echo "Error on insert ". mysqli_error($con);
}

$con->close();

?>