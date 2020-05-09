<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="e_secretary";

$connect = mysqli_connect($servername, $username, $password,$db);

if (isset($_POST['nxenesid']) && isset($_POST['lendaid']) && isset($_POST['notatid']) && isset($_POST['vleresimi']) && isset($_POST['pershkrimi']) && isset($_POST['save']) ){
    $nxenes=$_POST['nxenesid'];
    $lenda=$_POST['lendaid'];
    $notaid=$_POST['notatid'];
    $vleresimi=$_POST['vleresimi'];
    $pershkrimi=$_POST['pershkrimi'];

    $query="INSERT INTO notat (notatID, nxenesID, lendaID,vleresimi,pershkrimi) VALUES ($notaid,$nxenes,$lenda,$vleresimi,'$pershkrimi')";
   // var_dump($query);die;
    mysqli_query($connect, $query);
    $_SESSION['msg']="Shtimi u krye me sukses!";
    header('location: shtoNota.php');
}



$result= "SELECT * FROM notat";
mysqli_query($connect,$result);





?>
