<?php
include 'functions.php';

$sql ="SELECT * FROM cmd order by id asc";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) {
    $strQ="";
    $ind=0;
    while($row[] = $result->fetch_assoc()) {
        if($strQ==""){
            $strQ="id='".$row[$ind++]["id"]."'";
        }else{
            $strQ.=" OR id='".$row[$ind++]["id"]."'";
        }
        $tem = $row;
        $json = json_encode($tem);
    }
    $sqlDel="DELETE FROM cmd WHERE (".$strQ.")";
    if ($conn->query($sqlDel) === TRUE) {
        echo $json;
    } else {
        echo 1;
    }
    
} else {
    echo 1;
}
$conn->close();
?>
