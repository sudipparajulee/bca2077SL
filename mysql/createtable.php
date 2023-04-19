<?php
//Create Connection with database bca2077
$con = mysqli_connect("localhost","root","","bca2077");

$qry = "CREATE TABLE students(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    phone VARCHAR(50),
    address VARCHAR(100)
)";

if(mysqli_query($con,$qry))
{
    echo "Table Created Successfully";
}
else
{
    echo "Error on Creating Table " . mysqli_error($con);
}

$con->close();
?>