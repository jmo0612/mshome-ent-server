<?php
include 'functions.php';
$id=$_GET['id'];

$sql ="DELETE FROM my_queue WHERE id_queue='".$id."'";
 
if ($conn->query($sql) === TRUE) {
    $msg = 0;
} else {
    $msg = 1;
}

echo $msg;



$conn->close();
?>
