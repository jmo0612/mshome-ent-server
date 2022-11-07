<?php
include 'functions.php';
$sql ="SELECT shutdown_time FROM config where id_config='1'";
$dtNow=strtotime(date("Y-m-d H:i:s")); 
//$dtNow=strtotime("2022-11-05 01:00:00");
$result = $conn->query($sql);
 
if ($result->num_rows >0) { 
    $out="";
    while($row[] = $result->fetch_assoc()) {
        $out=$row[0]["shutdown_time"];
        break;
    }
    //$dt=strtotime($out);
    //echo (date("H",$dt)*3600)+(date("i",$dt)*60)+(date("s",$dt));
    $dtDb=strtotime($out);
    $dtTmpStr=date("Y-m-d")." ".date("H:i:s",$dtDb);
    //$shutdownDate=strtotime($dtTmpStr. ' + 1 days');
    $shutdownDate=strtotime($dtTmpStr);
    if($dtNow>$shutdownDate){
        $shutdownDate=strtotime($dtTmpStr. ' + 1 days');
    }

    //date_add($shutdownDate,date_interval_create_from_date_string("1 day"));
    //echo date("Y-m-d H:i:s",$shutdownDate);
    echo $shutdownDate;
} else {
    $shutdownDate=strtotime(date("Y-m-d H:i:s",$dtNow). ' + 1 days');
    //echo date("Y-m-d H:i:s",$shutdownDate);
    echo $shutdownDate;
}
 
$conn->close();
?>
