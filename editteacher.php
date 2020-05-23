<?php
 $id ="";
 $emri = "";
 $mbiemer = "";
 $username = "";
 $email = "";
 $telefon = "";
 $datelindje ="";
 
require_once('config.php');

$edit_state = false;

if(isset($_GET['id'])){
    $userID = $_GET['id'];
    mysqli_query($conn,"DELETE  FROM mesues  where MesuesID=$userID");
    mysqli_query($conn,"DELETE  FROM user  where userID=$userID");
    echo "<script>window.open('teacherlist.php?mes=Data Deleted..','_self')</script>";
    
}
if ( isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn,$_POST['userID']);
    $emri = mysqli_real_escape_string($conn,$_POST['emer']);
    $mbiemer = mysqli_real_escape_string($conn,$_POST['mbiemer']);
    $username = mysqli_real_escape_string($conn,$_POST['username_val']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $telefon = mysqli_real_escape_string($conn,$_POST['telefon']);
    $datelindje = mysqli_real_escape_string($conn,$_POST['datelindje']);
   
   
    
    
    mysqli_query($conn,"UPDATE mesues  SET datelindje='$datelindje'   WHERE MesuesID = '$id'");
    mysqli_query($conn,"UPDATE user  SET Emer='$emri' , mbiemer='$mbiemer' , username='$username',email='$email',telefon='$telefon' WHERE userID = '$id'");
    echo "<script>window.open('teacherlist.php?mes=Data Updated..','_self')</script>";
    
}


?>
