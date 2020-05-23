<?php
session_start();
$NotatID = "";
$NxenesID = "";
$LendaID = "";
$Vleresimi = "";
$Pershkrimi = "";

$edit_state = false;

$db = mysqli_connect('localhost', 'root', '', 'e_secretary');

if (isset($_POST['NxenesID']) && isset($_POST['LendaID'])  && isset($_POST['Vleresimi']) && isset($_POST['Pershkrimi']) && isset($_POST['save'])) {
    $NxenesID = $_POST['NxenesID'];
    $LendaID = $_POST['LendaID'];
    $Vleresimi = $_POST['Vleresimi'];
    $Pershkrimi = $_POST['Pershkrimi'];
    $query = "INSERT INTO notat (NxenesID,LendaID,Vleresimi,Pershkrimi) values ($NxenesID,$LendaID,$Vleresimi,'$Pershkrimi')";
    mysqli_query($db, $query);
    $_SESSION['msg'] = "Data is saved!";
    header('location: index.php');
}
//update records
if (isset($_POST['update'])) {
    $NxenesID = mysqli_real_escape_string($db,$_POST['NxenesID']);
    $LendaID = mysqli_real_escape_string($db,$_POST['LendaID']);
    $Vleresimi = mysqli_real_escape_string($db,$_POST['Vleresimi']);
    $Pershkrimi = mysqli_real_escape_string($db,$_POST['Pershkrimi']);
    $NotatID = mysqli_real_escape_string($db,$_POST['NotatID']);


    mysqli_query($db, "UPDATE notat SET NxenesID='$NxenesID' , LendaID='$LendaID' , Pershkrimi='$Pershkrimi' , Vleresimi='$Vleresimi' WHERE NotatID = $NotatID");
    $_SESSION['msg'] = "Data is updated!";
    header('location: index.php');
}

if(isset($_GET['del'])){
    $NotatID = $_GET['del'];
    mysqli_query($db,"DELETE FROM notat WHERE NotatID=$NotatID");
    $_SESSION['msg'] = "Data is deleted!";
    header('location: index.php');
}



//retrieve records
$results = mysqli_query($db, "SELECT * FROM notat");

?>