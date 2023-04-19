<?php
//Check if the form was submitted
//if(isset($_POST['submit'])) OR
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //Check if file was uploaded without errors
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0)
    {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $tmpname = $_FILES["photo"]["tmp_name"];

        //verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext,$allowed))
        {
            die("Error ! File format not supported");
        }

        //Verify file size 5MB maximum
        $maxsize = 5*1024*1024; //converted to bytes
        if($filesize > $maxsize)
        {
            die("Error ! Cannot upload file larger than 5MB");
        }

        move_uploaded_file($tmpname,"images/".$filename);

        echo "The File has been uploaded";



    }
}
?>