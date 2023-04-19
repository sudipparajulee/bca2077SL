<?php
$mytext = "<h2>Hello BCA</h2>";

//Sanitize and print mytext
$sanitizedtext = filter_var($mytext,FILTER_SANITIZE_STRING);

echo $sanitizedtext;

//Sample integer

$myint = '20';
echo "<br>";
//Validate integer value
if(filter_var($myint,FILTER_VALIDATE_INT))
{
    echo "The $myint is a valid integer";
}
else
{
    echo "The $myint is not a valid integer";
}

//sample ip address
$myip = "128.125.255.25";

//Validate sample IP address
if(filter_var($myip,FILTER_VALIDATE_IP))
{
    echo "IP is valid";
}
else
{
    echo "IP is invalid";
}


//FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_MAC
//FILTER_VALIDATE_FLOAT
//FILTER_VALIDATE_URL


//SAMPLE INTEGER VALUE
$int = 75;

//validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100))))
{
    echo "Number $int is valid and between 0 and 100";
}

else
{
    echo "Invalid integer $int";
}

//sample website url
$url = "https://www.lict.edu.np?faculty=BCA";

//Validate website url for query string
if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED))
{
    echo "The url contains query string";
}

else
{
    echo "The url doesnot contain query string";
}
?>