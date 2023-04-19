<?php
//File open, file write, file close
$file = fopen("demo.txt","w");
$content = "We are BCA students again.";
fwrite($file,$content);
fclose($file);
?>

<?php
//file read.
$filename = "demo.txt";
$file = fopen($filename,"r");
$size = filesize($filename);
$filedata = fread($file,$size);
echo $filedata;
fclose($file);
?>

<?php
$file = "demo.txt";
//check the existence of file
if(file_exists($file))
{
    //Attempt to rename the file
    if(rename($file,"newname.txt"))
    {
        echo "File Renamed";
    }
    else
    {
        echo "Error: cannot be renamed";
    }
}
else
{
    echo "File not found";
}
?>