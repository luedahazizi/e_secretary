<?php
$lendaID = "";
$lenda = "";
$viti = "";
$mesues = "";
require_once('config.php');

$edit_state = false;

if(isset($_GET['id'])){
    $lendaID = $_GET['id'];
    mysqli_query($conn,"DELETE FROM lenda WHERE LendaID=$lendaID");
    echo "<script>window.open('subject.php?mes=Data Deleted..','_self')</script>";
}

if ( isset($_POST['update'])) {
    $lendaID=mysqli_real_escape_string($conn,$_POST['lendaID']);
    $lenda = mysqli_real_escape_string($conn,$_POST['lenda']);
    $viti = mysqli_real_escape_string($conn,$_POST['viti']);
    $mesues = mysqli_real_escape_string($conn,$_POST['mesues']);
    

    $update= "UPDATE lenda SET Emri='$lenda' , Viti='$viti' , Mesues='$mesues' WHERE LendaID = '$lendaID'";
    
    if($conn ->query($update)){
        echo "<script>window.open('subject.php?mes=Data Updated..','_self')</script>";
    }
   else {
       echo("Error description: " . mysqli_error($conn));
    }
}

?>
