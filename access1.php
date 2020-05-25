<?php
require_once('config.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: form.html');
  exit;
}

else {
  if ($_SESSION['role']=='mesues') {

 
}else {
    header("location:error.html");
  }
  }
  ?>