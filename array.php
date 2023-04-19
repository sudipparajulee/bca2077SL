<?php
$faculty = array("BCA","CSIT");
foreach($faculty as $f)
{
    echo $f;
    echo '<br>';
}

for($i=0; $i<count($faculty);$i++)
{
    echo $faculty[$i];
    echo '<br>';
}

//associative array
$faculties = array("BCA"=>35,"CSIT"=>48);
foreach($faculties as $k=>$v)
{
    echo "Faculty $k has $v students";
    echo '<br>';
}


//multidimensional array

$myarray = array(
    array("BCA","BIM"),
    array("CSIT","BHM")
);

echo $myarray[1][1]; //BHM

//sorting
// sort() ->sorts indexed array in ascending order
// rsort() ->sorts indexed array in descending order
// asort() ->sorts associative array in ascending order with value
// arsort() ->sorts associative array in descending order with value
// ksort() ->sorts associative array in ascending order with key
// krsort() ->sorts associative array in descending order with key
?>