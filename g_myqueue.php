<?php
include 'functions.php';
$dev=$_GET["id"];

$sql ="SELECT * FROM my_queue order by id_queue asc";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) {
    $idQ=0;
    $cmd=0;
    $device="";
    while($row[] = $result->fetch_assoc()) {
        $idQ=$row[0]["id_queue"];
        $cmd=$row[0]["cmd"];
        $device=$row[0]["device"];
        break;
    }
    if($device!=$dev){
        echo "0,0";    
    }else{
        echo $idQ.",".$cmd;    
    }
    
} else {
    echo "0,0";
}
$conn->close();
?>
