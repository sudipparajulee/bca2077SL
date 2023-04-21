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
$qry = "SELECT students.name,students.phone,students.address,subjects.name AS subjectname,subjects.fullmarks,subjects.passmarks,marks.* FROM marks INNER JOIN students ON marks.student_id=students.id INNER JOIN subjects ON marks.subject_id=subjects.id WHERE marks.student_id = 3 ORDER BY marks.obtainedmarks DESC";

$qrytotal = "SELECT sum(obtainedmarks) AS totalmarks FROM marks WHERE student_id=3";

//count students from student table
$qrytotalstudents = "SELECT count(id) as totalstudents FROM students";

if($resulttotal = mysqli_query($con,$qrytotal))
{
    $totalobtained = mysqli_fetch_assoc($resulttotal);
}
//execute query
if($result = mysqli_query($con,$qry))
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo " ID: ".$row['id'];
        echo "<br> Name: ".$row['name'];
        echo "<br> Phone: ".$row['phone'];
        echo "<br> Address: ".$row['address'];
        echo "<br> Full Marks: ".$row['fullmarks'];
        echo "<br> Pass Marks: ".$row['passmarks'];
        echo "<br> Obtained Marks: ".$row['obtainedmarks'];
        echo "<br><br>";
    }

    echo "Total Marks ". $totalobtained['totalmarks'];
    echo "<br> Total Percentage : ". $totalobtained['totalmarks']/200*100 .'%';
}

else
{
    echo "Error on data fetch ". mysqli_error($con);
}

$con->close();

?>