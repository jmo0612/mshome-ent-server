<?php
include 'functions.php';
$json = '[{"id":"1","f_int":"1000","f_varchar":"tes","f_double":"15.23","f_bool":"1","f_datetime":"2022-01-01 00:01:02"}]';
$obj = json_decode($json,true);

$keyValues=array();
$excluded=array();
$result=jsonToSql($obj,"tes",$keyValues,$excluded,$conn);
//echo($result[0]);


if ($conn->query($result[0]) === TRUE) {
    $msg = array('succeed' => '1', 'error' => '');
} else {
    $msg = array('succeed' => '0', 'error' => $conn->error);
}

$res[]=$msg;
echo json_encode($res);

$conn->close();
?>