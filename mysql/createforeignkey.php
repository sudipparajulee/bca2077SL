<?php
//Create Connection with database bca2077
$con = mysqli_connect("localhost","root","","bca2077");

$qry = "ALTER TABLE marks
    ADD FOREIGN KEY (subject_id) REFERENCES subjects(id)";

if(mysqli_query($con,$qry))
{
    echo "Foreign Key Created Successfully";
}
else
{
    echo "Error on Creating Table " . mysqli_error($con);
}

$con->close();
?>