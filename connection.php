<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="e_secretary";

$link = mysql_connect($servername, $username, $password);
var_dump($link);die;
mysql_select_db($db);

?>