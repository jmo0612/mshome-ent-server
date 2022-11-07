<?php
include 'functions.php';
$stas=$_GET['sta'];

$sql ="SELECT * FROM dev order by id_dev asc";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) {
 
 $ind=0;
 while($row[] = $result->fetch_assoc()) {
     $row[$ind]["sta"]=$stas[$row[$ind]["id_dev"]];
     $ind++;
    $tem = $row;
 
    $json = json_encode($tem);
 }
 $obj = json_decode($json,true);

$keyValues=array();
$excluded=array();
$result=jsonToSql($obj,"dev",$keyValues,$excluded,$conn);
//echo($result[0]);


if ($conn->query($result[0]) === TRUE) {
    $msg = 0;
} else {
    $msg = 1;
}

echo $msg;
 
} else {
 echo 2;
}


$conn->close();
?>
