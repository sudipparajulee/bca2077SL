<?php
//Create Connection with database bca2077
$con = mysqli_connect("localhost","root","","bca2077");

$qry = "CREATE TABLE subjects(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    fullmarks int(3),
    passmarks int(2)
)";

if(mysqli_query($con,$qry))
{
    echo "Subject Table Created Successfully";
}
else
{
    echo "Error on Creating Table " . mysqli_error($con);
}

$con->close();
?>