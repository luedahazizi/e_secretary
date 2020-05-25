<?php
 $id ="";
 $titull = "";
 $mbiemer = "";
 $username = "";
 $email = "";
 ;
require_once('config.php');

$edit_state = false;

if(isset($_GET['id'])){
    $ID = $_GET['id'];
    mysqli_query($conn,"DELETE  FROM publikime  where PublikimeID=$userID");
    
    echo "<script>window.open('notification.php?mes=Data Deleted..','_self')</script>";
    
}


?>
