<?php
include 'functions.php';

$json = '[{"id":"1","f_int":"1000","f_varchar":"tes","f_double":"15.23","f_bool":"1","f_datetime":"2022-01-01 00:01:02"}]';


$obj = json_decode($json,true);

$keyValues=array();
$excluded=array();
$result=jsonToSql($obj,"jimi",$keyValues,$excluded,$conn);
echo($result[0]);

echo("<br/><br/>");

$conn->close();
?>
