<?php
include("connection.php");

ob_start();
$data = ob_get_clean();
$fp = fopen("custom-log.txt", "a");
fwrite($fp, $data);


$payer_id = $_POST['payer_id'];
$transactionId = $_POST['txn_id'];

$query  =  "Insert into fatura(nxensesID,transactionID) values( '$payer_id', '$transactionId') ";
$result = mysqli_query($connect, $query);
fclose($fp);