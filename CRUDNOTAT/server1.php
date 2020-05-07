<?php

$servername = "localhost";
$username = "root";
$password = "";
$nxenesid=0;
$lendaid=0;
$notatid=0;
$vleresimi="";
$pershkrimi="";
$db="e-secretary";

$connect = mysqli_connect($servername, $username, $password,$db);

if (isset($_POST['save'])){
    $nxenesid=$_POST['nxenesid'];
    $lendaid=$_POST['lendaid'];
    $notatid =$_POST['notatid'];
    $vleresimi=$_POST['vleresimi'];
    $pershkrimi=$_POST['pershkrimi'];

    $query = "INSERT INTO notat (nxenesid,lendaid,notatid,vleresimi,pershkrimi) VALUES ('$nxenesid', '$lendaid', '$notatid', '$vleresimi', '$pershkrimi')";
    mysqli_query($connect,$query);
    header ('location: notat.php');
}


?>
