<?php
 $id ="";
 $emri = "";
 $mbiemer = "";
 $username = "";
 $email = "";
 $telefon = "";
 $arsimi ="";
 $status = "";
 $profesioni = "";
require_once('config.php');

$edit_state = false;

if(isset($_GET['id'])){
    $userID = $_GET['id'];
    mysqli_query($conn,"DELETE  FROM prindi  where PrindID=$userID");
    mysqli_query($conn,"DELETE  FROM user  where userID=$userID");
    echo "<script>window.open('parent.php?mes=Data Deleted..','_self')</script>";
    
}
if ( isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn,$_POST['userID']);
    $emri = mysqli_real_escape_string($conn,$_POST['emer']);
    $mbiemer = mysqli_real_escape_string($conn,$_POST['mbiemer']);
    $username = mysqli_real_escape_string($conn,$_POST['username_val']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $telefon = mysqli_real_escape_string($conn,$_POST['telefon']);
    $arsimi = mysqli_real_escape_string($conn,$_POST['arsimi']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);
    $profesioni = mysqli_real_escape_string($conn,$_POST['profesioni']);
    
    
    mysqli_query($conn,"UPDATE prindi  SET arsimi='$arsimi' , status='$status' , profesioni='$profesioni' WHERE PrindID = '$id'");
    mysqli_query($conn,"UPDATE user  SET Emer='$emri' , mbiemer='$mbiemer' , username='$username',email='$email',telefon='$telefon' WHERE userID = '$id'");
    echo("Error description: " . mysqli_error($conn));
    
}


?>
