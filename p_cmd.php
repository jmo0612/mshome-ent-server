<?php
include 'functions.php';
$cmd=$_GET['cmd'];
$json ='[{"id":"","cmd":"'.$cmd.'"}]';
$obj = json_decode($json,true);

$keyValues=array("id"=>"TIMESTAMP<DIGIT>3</DIGIT>");
$excluded=array();
$result=jsonToSql($obj,"cmd",$keyValues,$excluded,$conn);
//echo($result[0]);


if ($conn->query($result[0]) === TRUE) {
    $msg = 0;
} else {
    $msg = 1;
}

echo $msg;


$conn->close();
?>
