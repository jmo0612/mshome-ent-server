<?php
include 'functions.php';

$sql ="SELECT * FROM dev order by id_dev asc";
 
$result = $conn->query($sql);
 
if ($result->num_rows >0) { 
    $ind=0;
    $ind2=0;
    $out="";
    while($row[] = $result->fetch_assoc()) {
        while($ind2!=$row[$ind]["id_dev"]){
            $out.="0";    
            $ind2++;
        }
        if($row[$ind]["saving_state"]==0){
            $out.="0";
            $ind++;
            
        }else{
            $out.=$row[$ind++]["sta"];
        }
        $ind2++;
        $tem = $row;
        $json = json_encode($tem);
    }
    echo $out;
} else {
    echo 1;
}
 
$conn->close();
?>
