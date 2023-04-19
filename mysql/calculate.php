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
$qry = "SELECT * FROM marks WHERE student_id=3";

$qry2 = "SELECT sum(obtainedmarks) as 'total' FROM marks WHERE student_id=3";
if($result = mysqli_query($con,$qry2))
{
    $row = mysqli_fetch_assoc($result);
    echo $row['total'];
}

//execute query
if($result = mysqli_query($con,$qry))
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<br> Obtained Marks: ".$row['obtainedmarks'];
        echo "<br><br>";
    }
}

else
{
    echo "Error on data fetch ". mysqli_error($con);
}

$con->close();

?>