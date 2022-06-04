<?php
include 'functions.php';

$sql ="SELECT id,sta FROM dev order by id asc";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) { 
    $ind=0;
    $out="";
    while($row[] = $result->fetch_assoc()) {
        $out.=$row[$ind++]["sta"];
        $tem = $row;
        $json = json_encode($tem);
    }
    echo $out;
} else {
    echo 1;
}
 
$conn->close();
?>
