<?php

include ('connection.php');

if (isset($_POST['nxenesid']) && isset($_POST['lendaid']) && isset($_POST['notatid']) && isset($_POST['vleresimi']) && isset($_POST['pershkrimi']) && isset($_POST['save']) ){
    $nxenes=$_POST['nxenesid'];
    $lenda=$_POST['lendaid'];
    $notaid=$_POST['notatid'];
    $vleresimi=$_POST['vleresimi'];
    $pershkrimi=$_POST['pershkrimi'];

    $query="INSERT INTO notat (notatID, nxenesID, lendaID,vleresimi,pershkrimi) VALUES ($notaid,$nxenes,$lenda,$vleresimi,'$pershkrimi')";
   // var_dump($query);die;
    $result = mysqli_query($connect, $query);
    echo "u shtua me sukses";

}
else {
    echo "nuk u shtua";
}





?>