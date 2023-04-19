<?php
//Create Connection with database bca2077
$con = mysqli_connect("localhost","root","","bca2077");

$qry = "CREATE TABLE marks(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    student_id int(11),
    subject_id int(11),
    obtainedmarks int(3),
    FOREIGN KEY (student_id) REFERENCES students(id)
)";

if(mysqli_query($con,$qry))
{
    echo "Marks Table Created Successfully";
}
else
{
    echo "Error on Creating Table " . mysqli_error($con);
}

$con->close();
?>