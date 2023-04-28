<?php
//Creating Connection Variables
$server = "localhost";
$username = "root";
$password = "";
$database = "bca2077";
$string = $_GET['q'];

//Create Connection
$con = mysqli_connect($server,$username,$password,$database);

//check connection
if($con === false)
{
    die("Error on connection" . mysqli_connect_error());
}

//select query
$qry = "SELECT * FROM students WHERE name LIKE '%$string%'";

//execute query
if($result = mysqli_query($con,$qry))
{
    if(mysqli_num_rows($result) > 0)
    {
        $mytext = '';
        while($row = mysqli_fetch_assoc($result))
        {
            $mytext = $mytext . $row['name'] . '<br>';
        }
        echo $mytext;
    }

    else{
        echo 'No name found';
    }
    
}

else
{
    echo "Error on data fetch ". mysqli_error($con);
}

$con->close();

?>