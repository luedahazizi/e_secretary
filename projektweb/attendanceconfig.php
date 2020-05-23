<?php
session_start();
$emer= $_SESSION['emer'];
$mbiemer= $_SESSION['mbiemer'];
$MungesaID = "";
$NxenesID = "";
$LendaID = "";
$Data = "";

$db = mysqli_connect('localhost', 'root', '', 'e_secretary');

if (isset($_POST['NxenesID']) && isset($_POST['LendaID']) && isset($_POST['Data']) && isset($_POST['Save'])) {

    $NxenesID = $_POST['NxenesID'];
    $LendaID = $_POST['LendaID'];
    $Vleresimi = $_POST['Data'];
    $query = "INSERT INTO mungesat (NxenesID,LendaID,Data) VALUES ($NxenesID,$LendaID,curdate())";
    mysqli_query($db, $query);
    $_SESSION['msg'] = "Regjistrimi u krye me sukses!";
    header('location: attendance.php');
}

$results=mysqli_query($db,"SELECT m.NxenesID,m.LendaID,m.Data FROM mungesat m JOIN lenda l ON l.LendaID=m.LendaID 
JOIN mesues me ON l.MesuesID=me.MesuesID JOIN user u ON u.userID=me.MesuesID
WHERE u.Emer='$emer' AND u.Mbiemer='$mbiemer'");

?>