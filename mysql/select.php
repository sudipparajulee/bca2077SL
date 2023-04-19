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

//select query
$qry = "SELECT * FROM students WHERE address='nawalpur' or address='chitwan'";

//execute query
if($result = mysqli_query($con,$qry))
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo " ID: ".$row['id'];
        echo "<br> Name: ".$row['name'];
        echo "<br> Phone: ".$row['phone'];
        echo "<br> Address: ".$row['address'];
        echo "<br><br>";
    }
}

else
{
    echo "Error on data fetch ". mysqli_error($con);
}

$con->close();

?>